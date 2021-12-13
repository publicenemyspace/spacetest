<?php
session_start();
require_once("config.php");
require_once("cart.php");






?>



<!--header-->
<?php require_once 'header.php' ?>
<!--content-->
<div class="products">
	<div class="container">
		<h1>Products</h1>
		<div class="col-md-9">
			
			
			<div class="content-top1">

			<?php 
			$category = $_GET['category']; 
					$query = "SELECT * FROM `product` WHERE category='$category'";
			    	$sql = mysqli_query($con, $query);

					while($item = mysqli_fetch_assoc($sql)){

						?>
				
				<div class="col-md-4 col-md3">
						<div class="col-md1 simpleCart_shelfItem">
							<a href="single.html">
								<img class="img-responsive" style="width:185px !important; height:207px !important" src="upload/<?php echo $item['photo']; ?>" alt="" />
							</a>
							<h3><a href="single.html"><?php echo $item['name']; ?></a></h3>
							<div class="price">
									<h5 class="item_price">#<?php echo $item['price']; ?></h5>
									<a href="#" class="item_add">Add To Cart</a>
									<div class="clearfix"> </div>
							</div>
							
						</div>
				</div>	

				<?php } ?>
		
			
			   <div class="clearfix"> </div>
			</div>	
		</div>
			<!--categories-->
				
				
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
<!--//menu-->
<!--seller-->
	

<!--//seller-->
<!--tag-->
		
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!--//content-->
<!--footer-->
<?php require_once 'footer.php' ?>

<!--//footer-->
</body>
</html>