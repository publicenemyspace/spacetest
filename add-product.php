
<?php

require_once("config.php");

if(isset($_POST['AddProduct'])){


    $name = $_POST['name'];

    $photo = $_FILES['photo']['name'];

    $price = $_POST['price'];
    // enkripsi 
    $description = $_POST['description'];

    $allowedExts = array("gif", "jpeg", "jpg", "png");
   
    $photo_name = $_FILES["photo"]["name"];
  
      if ($_FILES["photo"]["error"] > 0)
        {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
        }
      else
        {
        echo "Upload: " . $_FILES["photo"]["name"] . "<br>";
        echo "Type: " . $_FILES["photo"]["type"] . "<br>";
        echo "Size: " . ($_FILES["photo"]["size"] / 1024) . " kB<br>";
        echo "Temp file: " . $_FILES["photo"]["tmp_name"] . "<br>";
    
        if (file_exists("upload/" . $_FILES["photo"]["name"]))
          {
          echo $_FILES["photo"]["name"] . " already exists. ";
          }
        else
          {
        
            move_uploaded_file($_FILES["photo"]["tmp_name"],
            "upload/" . $_FILES["photo"]["name"]);
            echo "Stored in: " . "upload/" . $_FILES["photo"]["name"];
                    
            $sql = "INSERT INTO product(name, photo, price, description) 
            VALUES ('$name', '$photo', '$price', '$description')";


            if(mysqli_query($con, $sql)){

            header("Location: index.php");

            }

          }
        }
     

    

}

?>






<?php
session_start();
require_once 'header.php' ?>

<!--//header-->
<div class="container">
	<div class="register">
		<h1>Add Product </h1>
		  	  <form action="add-product.php" method="POST" enctype="multipart/form-data"> 
				 <div class="col-md-6  register-top-grid">
					
					<div class="mation">
						<span>Product Name</span>
						<input type="text" name='name'> 
					
						<span>Product Price</span>
						<input type="text" name='price'> 

                        <span>Product Photo</span>
						<input type="file" name='photo'> 
					 
                        <div class="contact-bottom-top">
						<span>Message</span>
						<textarea name="description"> </textarea>								
						</div>
                       
                        <input class="btn btn-success" type="submit" name="AddProduct" value="Add Product">

					</div>
			
					 </div>
            
					 <div class="clearfix"> </div>
				</form>
				
			
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
					<h6>Categories</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						<li><a href="#">Tempus pretium</a></li>
						<li><a href="#">Dignissim neque</a></li>
						<li><a href="#">Ornared id aliquet</a></li>
						
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate">
					<h6>Feature Projects</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						<li><a href="#">Tempus pretium</a></li>
						<li><a href="#">Dignissim neque</a></li>
						<li><a href="#">Ornared id aliquet</a></li>
						
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate">
					<h6>Top Brands</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						<li><a href="#">Tempus pretium</a></li>
						<li><a href="#">Dignissim neque</a></li>
						<li><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Ultrices id du</a></li>
						<li><a href="#">Commodo sit</a></li>
						
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate cate-bottom">
					<h6>Our Address</h6>
					<ul>
						<li>Aliquam metus  dui. </li>
						<li>orci, ornareidquet</li>
						<li> ut,DUI.</li>
						<li>nisi, dignissim</li>
						<li>gravida at.</li>
						<li class="phone">PH : 6985792466</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				<p class="footer-class"> © 2015 Fashion Mania. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
	</div>
</div>

<!--//footer-->
</body>
</html>