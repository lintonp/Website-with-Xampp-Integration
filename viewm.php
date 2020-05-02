<?php
$link= mysqli_connect("localhost","root","","youtube");

if($link===false){
 die("ERROR: Couldn't connect." . mysqli_connect_error());
}

$sql="INSERT INTO melron(select * from signup order by u_id desc limit 1)";
if(mysqli_query($link,$sql)){
 echo "Video Viewed";
}else{
echo "Video Viewed";
}
mysqli_close($link);
?>
<html>
<body>
<br>
<a href='utube01.html'>Click to Watch More</a>
</html>

