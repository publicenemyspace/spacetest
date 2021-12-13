

<?php
session_start();
require_once("cart.php");

require_once 'header.php' ?>

<!--//header-->
<!---->
<div class="container">
	<div class="check-out">
		<h1>Checkout</h1>
    	    <table >
		  <tr>
			<th>Item(s)</th>
				
			<th>Price</th>
			<th>Orders</th>
			<th>Subtotal</th>
			
			<th>Delete</th>
		  </tr>
		

		<?php 
		if(!empty($_SESSION['cart'])){
			$total = 0;
			foreach ($_SESSION['cart'] as $key => $val) {

				$total = $total +($val['quantity'] * $val['price']);
		

				?>
		
		
		  <tr>
			  <form method="post" action="checkout.php?add&id=<?php echo $val['id']; ?>">
			<td class="ring-in"><a href="single.html" class="at-in"><img src="upload/<?php echo $val['photo'] ?>" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5><?php echo $val['name'] ?></h5>
				<p> <?php echo $val['description'] ?></p>
			
			</div>
			<div class="clearfix"> </div></td>
			<td>#<?php echo $val['price'] ?></td>
			<td><?php echo $val['quantity'] ?></td>
			
			<td><?php echo $val['price'] * $val['quantity'] ?></td>
			</form>
			<td><a class="btn btn-danger" href="checkout.php?delete=<?php echo $val['id']; ?>"><span><i class="glyphicon glyphicon-trash"></i></span></a></td>

		  </tr>


		  <?php 

		 
			}
		}?>





	</table>
	<a href="#" class=" to-buy">Total #<?php echo $total?></a>
	<button  onclick="payWithPaystack()"> Pay </button>
	<div class="clearfix"> </div>
    </div>
</div>
<!--footer-->

<div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-8 top-footer">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.91163207516!2d2.3470599!3d48.85885894999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1436340519910" allowfullscreen=""></iframe>
			</div>
			<div class="col-md-4 top-footer1">
				<h2>Newsletter</h2>
					<form>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="SUBSCRIBE">
					</form>
			</div>
			<div class="clearfix"> </div>	
		</div>	
	</div>
	<div class="footer-bottom">
		<div class="container">
				
				<div class="col-md-3 footer-bottom-cate">
					
				</div>
				<div class="col-md-3 footer-bottom-cate">
					
				</div>
				<div class="col-md-3 footer-bottom-cate cate-bottom">
					
				</div>
				<div class="clearfix"> </div>
				<p class="footer-class"><p class="footer-class">  © 2020 - <?php echo date("Y"); ?> Fashion Mania. All Rights Reserved
			</div>
	</div>
</div>

<!--//footer-->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>

	<script>

		
function payWithPaystack() {

var handler = PaystackPop.setup({ 
	key: 'pk_test_603869ea1541e0421daadf65713927e5c6dd4cbf', //put your public key here
	email: 'cupidspaces@gmail.com', //put your customer's email here
	amount:<?php echo $total ?>00, //amount the customer is supposed to pay
	metadata: {
		custom_fields: [
			{
				display_name: "Mobile Number",
				variable_name: "mobile_number",
				value: "+234801236773345678" //customer's mobile number
			}
		]
	},
	callback: function (response) {
		//after the transaction have been completed
		//make post call  to the server with to verify payment 
		//using transaction reference as post data
		$.post("verify.php", {reference:response.reference}, function(status){
			if(status == "success")
				//successful transaction
				alert('Transaction was successful');
			else
				//transaction failed
				alert(response);
		});
	},
	onClose: function () {
		//when the user close the payment modal
		alert('Transaction cancelled');
	}
});
handler.openIframe(); //open the paystack's payment modal
}

	</script>
   
</body>
</html>