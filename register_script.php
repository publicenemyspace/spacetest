<?php

if(isset($_POST['submit_form'])){
    
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$hash = md5(rand(0,1000));
      
// Check if user with that email already exists
$qry_users = "SELECT * FROM Users WHERE email='$email'";

$qry_users_result = mysqli_query($con,$qry_users);

// We know user email exists if the rows returned are more than 0
if(mysqli_num_rows($qry_users_result) > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: error.php");
    
}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO Users(first_name, last_name, email, password, hash)VALUES('$first_name','$last_name','$email','$password', '$hash')";

    // Add user to the database
    if (mysqli_query($con, $sql) ){

        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['message'] =
                
                 "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link in the message!";

        // Send registration confirmation link (verify.php)
        $to      = $email;
        $subject = 'Account Verification ( clevertechie.com )';
        $message_body = '
        Hello '.$first_name.',

        Thank you for signing up!

        Please click this link to activate your account:

        http://localhost/login-system/verify.php?email='.$email.'&hash='.$hash;  

        mail( $to, $subject, $message_body );

        header("location: index.php"); 

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }

}
}
?>