<?php

session_start();
require_once 'config.php';
require_once 'register_script.php';
require_once 'header.php' 

?>
<!--//header-->
<div class="container">
	<div class="register">
		<h1>Register</h1>
		  	  <form action="register.php" method="POST"> 
				 <div class="col-md-6  register-top-grid">
					
					<div class="mation">
						<span>First Name</span>
						<input type="text" name="first_name"> 
					
						<span>Last Name</span>
						<input type="text" name="last_name"> 
					 
						 <span>Email Address</span>
						 <input type="email" name="email"> 
					</div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="Login.php">
						 <i> Already have an account? </i>Sign In
					   </a>
					 </div>
				     <div class=" col-md-6 register-bottom-grid">
						   
							<div class="mation">
								<span>Password</span>
								<input type="password" name="password">
							
							</div>
					 </div>
					 <div class="clearfix"> </div>
			
				
				<div class="register-but">
				 
					   <input type="submit" name="submit_form" value="submit">
					   <div class="clearfix"> </div>
				   </form>
				
		   </div>
</div>

<!--footer-->
<?php require_once 'footer.php' ?>

<!--//footer-->
</body>
</html>