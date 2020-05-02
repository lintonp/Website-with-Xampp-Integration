<?php
    $link = mysqli_connect("localhost", "root", "", "youtube");

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
	
    $u_id = ''; 
    if(isset( $_GET['u_id'])) {
    $u_id = $_GET['u_id'];}
    $email_id = $_POST['email_id'];
    $username = $_POST['username'];
    $gender   = $_POST['gender'];
    $password = $_POST['password'];
    $location = $_POST['location'];

    // attempt insert query execution

    $sql = "INSERT INTO signup(u_id,email_id,username,gender,password,location) VALUES ('$u_id','$email_id','$username','$gender','$password','$location')";

    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "Welcome Back";
    }

    // close connection
    mysqli_close($link);
?>
<html>
<body>
<a href='utube01.html'>Click to Continue</a>
</html>