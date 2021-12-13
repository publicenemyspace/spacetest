<?php

session_start();

require_once 'header.php'   
?>
<!--//header-->
<div class="contact">
			<div class="container">
				<h1>Contact</h1>
				
				<div class="contact-grids">
					<div class="contact-form">
							<!--<form method="POST">
								<div class="contact-bottom">
									<div class="col-md-4 in-contact">
										<span>nnName</span>
										<input type="text" name="name">
									</div>
									<div class="col-md-4 in-contact">
										<span>Email</span>
										<input type="email" name="email">
									</div>
									<div class="col-md-4 in-contact">
										<span>Phonenumber</span>
										<input type="number" name="phonenumber">
									</div>
									<div class="clearfix"> </div>
								</div>
							
								<div class="contact-bottom-top">
									<span>Message</span>
									<textarea > </textarea>								
									</div>
								<input type="submit" value="Send">
							</form> -->
						</div>
				<div class="address">
					<div class=" address-more">
						<h2>Address</h2>
						<div class="col-md-4 address-grid">
							<i class="glyphicon glyphicon-map-marker"></i>
							<div class="address1">
								<p>Lorem ipsum dolor</p>
								<p>TL 19034-88974</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-4 address-grid ">
							<i class="glyphicon glyphicon-phone"></i>
							<div class="address1">
								<p>+885699655</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-4 address-grid ">
							<i class="glyphicon glyphicon-envelope"></i>
							<div class="address1">
								<p><a href="mailto:@example.com"> @example.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--//content-->

<!--footer-->
<?php require_once 'footer.php' 
?>

<!--//footer-->
</body>
</html>