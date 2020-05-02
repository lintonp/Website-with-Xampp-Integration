<html>
<head>
<title>Users:</title>
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
	valign:center;  <!--***-->
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
a{
	text-decoration:none;
	color:white;	
}
<!--*******************************************************************************-->
.stab{
	border:1px solid black;
	border-radius:15px;
	height:70%;
	width:40%;
	font-size:20px;
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
td{
	text-align:center;
}
th{
	border-bottom:1px solid;
}
</style>
</head>
<body>
<div class="titles">
<h1>UTube</h1>
</div><!--end titles-->
<div class="menu">
<table width="100%">
<tr>
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
<b>Registered Users Details<b>
<p align='center'>This shows the Users Registered on the Site</p>

<?php
$link=mysqli_connect("localhost","root","","youtube");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($link,"SELECT * FROM signup");

echo "<table align='center' width='60%' style='border:1px solid; border-radius:5px;  font-size:20px;>
<tr bgcolor='red'>
<th>Email_ID:</th>
<th>User Name:</th>
<th>Gender:</th>
<th>Location:</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['email_id'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['location'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($link);
?>

</div><!--end content for signup-->
</body>
</html>