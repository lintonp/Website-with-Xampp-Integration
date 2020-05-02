<html>
<head>
<title>Utube</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="utube01.js"></script>
<style>
.titles{
	background-color: red;
	text-align:center;
	font-size: 110%;
	height: 7%;
}
.menu{
	background-color:black;
	//height:10%;
	text-color:white;
}
.content{
	background-color: #dbdddd;
	height:82%;
}
.inputtype{
	width:150%;
	height:30px;
	margin:0px 0px;
}
.menubtn{
	background-color:black;
    border: none;
    color: white;
    cellspacing:1px;
	padding: 20px 18px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 100%;
    cursor: pointer;
	margin:1px 1px;
	width: 100%;
	cursor:pointer;
}
.menubtn:hover {
    background-color: #555859;
}
.menubtnsearch{
	background-color:grey;
    border: none;
    color: white;
    cellspacing:1px;
	padding: 20px 18px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 100%;
    cursor: pointer;
	margin:1px 1px;
	width: 100%;
	cursor:pointer;
}
.menubtnsearch:hover {
    background-color: #8E9091;
}
<!--********modal*********-->
.modal {
    display: none; 
    position: fixed;
    z-index: 1; 
    padding-top: 50px;
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4); 
}

.modal-content {
    background-color: #D7DBDD;
    margin: auto;
    padding: 20px;
    border: 10px solid black;
	border-radius: 15px;
    width: 80%;
}
.signupbutton{
	background-color: none;
    border: 1px solid black;
	border-radius:5px;
    color: black;    	
    text-align: center;
    display: inline-block;
    font-size: 100%;
    cursor: pointer;
	
	cursor:pointer;
}
.signupbutton:hover{
	background-color: #00FF00;
}
.sgnupth{
	text-align:left;
}
a{
  color:white;
  text-decoration:none;
}
td{
	text-align:center;
}
th{
	border-bottom:1px solid;
}
<!--login-->
</style>
</head>
<body>
<div class="titles">
<h1>UTube</h1>
</div><!--end titles-->
<div class="menu">
<table width="100%">
<tr>
<!--<textarea rows="2" cols="50"></textarea>--><td></td>
<!--
<td><input type="text" class="inputtype"></input></td>
<td><button class="menubtnsearch" type="submit">Search</input></td>
-->

<td colspan="2"><center><font color="red" size="6px">We-Entertain</font></center></td>
<td><button class="menubtn" id="home"><a href="utube01.html">Home</a></button></td>
<td><button class="menubtn" id="admins"><a href="user.php">Users</a></button></td>
<td><button class="menubtn" id="trending"><a href="trending.php">Trending</a></button></td>
<td><button class="menubtn" id="details"><a href="details.html">Video Details</a></button></td>
<td><button class="menubtn" id="signup"><a href="signup.html">Sign Up</a></button></td> <!-- onclick="func()"-->
<td><button class="menubtn" id="aboutus"><a href="aboutus.html">About Us</a></button></td>
<td><button class="menubtn" id="login"><a href="feedback.html">Feedback</a></button></td>
</tr>
</table>
</div><!--end menu-->

<div class="content">
<br><br>

<?php
$link=mysqli_connect("localhost","root","","youtube");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($link,"SELECT * FROM review");

echo "<table align='center' width='60%' style='border:1px solid; border-radius:5px; font-size:20px;'>
<tr>
<th>Email_ID:</th>
<th>Name:</th>
<th>Review:</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['email_id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['reviews'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($link);
?>

</div>
</body>
</html>