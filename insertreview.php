<?php
$link = mysqli_connect("localhost","root","","youtube");

if($link === false){
	die("ERROR: Could not connect." . mysqli_connect_error());
}

$email_id = $_POST['email_id'];
$name     = $_POST['name'];
$reviews  = $_POST['reviews'];

$sql ="INSERT INTO review(email_id,name,reviews) VALUES ('$email_id','$name','$reviews')";

if(mysqli_query($link,$sql)){
echo "Review Submitted" ;
}else{
echo "Try Again" . mysqli_error($link);
}

mysqli_close($link);
?>
 
<html>
<body>
<a href='utube01.html'>Go Back to Homepage</a>
</html>