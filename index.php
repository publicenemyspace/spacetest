<?php
session_start();
require_once("config.php");
require_once("cart.php");



?>



<!--header-->
<?php require_once 'header.php' ?>
<!--banner-->
<div class="banner">
	<div class="col-sm-3 banner-mat">
		<img class="img-responsive"	src="images/ba1.jpg" alt="">
	</div>
	<div class="col-sm-6 matter-banner">
	 	<div class="slider">
	    	<div class="callbacks_container">
	      		<ul class="rslides" id="slider">
	        		<li>
	          			<img src="images/1.jpg" alt="">
	       			 </li>
			 		 <li>
	          			<img src="images/2.jpg" alt="">   
	       			 </li>
					 <li>
	          			<img src="images/1.jpg" alt="">
	        		</li>	
	      		</ul>
	 	 	</div>
		</div>
	</div>
	<div class="col-sm-3 banner-mat">
		<img class="img-responsive" src="images/ba.jpg" alt="">
	</div>
	<div class="clearfix"> </div>
</div>
<!--//banner-->
<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<h1>Recent Products</h1>
			<div class="content-top1">

			<?php

			$query = "SELECT * FROM `product`";
			$sql = mysqli_query($con, $query);

			while($item = mysqli_fetch_assoc($sql)){

				?>
			
			<div class="col-md-3 col-md2">
					<div class="col-md1 simpleCart_shelfItem">
						<form method="post" action="index.php?add&id=<?php echo $item['id']; ?>">
						<a href="single.html">
							<img class="img-responsive" style="width:185px !important; height:207px !important" src="upload/<?php echo $item['photo'] ?>" alt="photo" />
						</a>
						<h3><a href="single.html"><?php echo $item['name'] ?></a></h3>
						<div class="price">
								<h4 class="item_price">#<?php echo $item['price'] ?></h4>
								
								<div class="clearfix"> </div>
						</div>
						<input type="hidden" name="quantity" value='1'>
						<input type="hidden" name="price" value="<?php echo $item['price']; ?>">
						<input type="hidden" name="photo" value="<?php echo $item['photo']; ?>">
						<input type="hidden" name="description" value="<?php echo $item['description']; ?>">
						<input type="submit" name="add_cart" value="Add to cart" class="btn btn-info">
						</form>
			</div>	
			</div>

			<?php } ?>
	
			<div class="clearfix"> </div>
			</div>	
			
		</div>
	</div>
</div>
<!--//content-->
<!--footer-->
<?php require_once 'footer.php' ?>

<!--//footer-->
</body>
</html>