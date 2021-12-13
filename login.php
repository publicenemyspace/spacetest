<?php

session_start();

require_once 'header.php' ?>
<!--//header-->
<div class="container">
	<div class="register">
		<h1>Login</h1>
		  	  <form> 
				 <div class="col-md-6  register-top-grid">
					
					<div class="mation">
			
					 
						 <span>Email Address</span>
						 <input type="text"> 
					</div>
					 <div class="clearfix"> </div>
                     Don't have an account? 
					   <a class="news-letter" href="register.php">

						 <kbd>Sign Up</kbd>
					   </a>
					 </div>
				     <div class=" col-md-6 register-bottom-grid">
						   
							<div class="mation">
								<span>Password</span>
								<input type="text">
							
							</div>
					 </div>
					 <div class="clearfix"> </div>
				</form>
				
				<div class="register-but">
				   <form>
					   <input type="submit" value="Login">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
</div>

<!--footer-->
<?php require_once 'footer.php' ?>

</body>
</html>