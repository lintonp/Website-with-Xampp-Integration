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

<!--content-->
<div class="content">
<h1>Trending Stats</h1>
<h4>Life Of Alston</h4>
<?php
$link = mysqli_connect("localhost","root","","youtube");
if($link===false){
 die("ERROR: Couldn't Connect." . mysqli_connect_error());
}

$femaleCountGenderSql = "SELECT count(gender) from alston where gender='female';";
$femaleCountResult = mysqli_query($link, $femaleCountGenderSql);
$femaleCountRow = mysqli_fetch_row($femaleCountResult);
$femaleCount = (int) $femaleCountRow[0];
/*echo $femaleCount;*/

$maleCountGenderSql = "SELECT count(gender) from alston where gender='male';";
$maleCountResult = mysqli_query($link, $maleCountGenderSql);
$maleCountRow = mysqli_fetch_row($maleCountResult);
$maleCount = (int) $maleCountRow[0];
/*echo $maleCount;*/

if($femaleCount > $maleCount)
{
	echo "Video Trending Gender: Female<br>";
}
else
{
	echo"Video Trending Gender: Male<br>";
}
$trendingLoc = "SELECT  location, COUNT(`location`) AS `value_occurrence` FROM     `alston` GROUP BY `location` ORDER BY `value_occurrence` DESC LIMIT 1   ";
$trendingLocResult = mysqli_query($link, $trendingLoc);
$trendingRow = mysqli_fetch_row($trendingLocResult);
$trendingCity = $trendingRow[0];
echo "Trending Location: ". $trendingCity;
mysqli_close($link);
?>

<h4>Life Of Linton</h4>
<?php
$link = mysqli_connect("localhost","root","","youtube");
if($link===false){
 die("ERROR: Couldn't Connect." . mysqli_connect_error());
}

$femaleCountGenderSql = "SELECT count(gender) from alston where gender='female';";
$femaleCountResult = mysqli_query($link, $femaleCountGenderSql);
$femaleCountRow = mysqli_fetch_row($femaleCountResult);
$femaleCount = (int) $femaleCountRow[0];
/*echo $femaleCount;*/

$maleCountGenderSql = "SELECT count(gender) from alston where gender='male';";
$maleCountResult = mysqli_query($link, $maleCountGenderSql);
$maleCountRow = mysqli_fetch_row($maleCountResult);
$maleCount = (int) $maleCountRow[0];
/*echo $maleCount;*/

if($femaleCount > $maleCount)
{
	echo "Video Trending Gender: Female<br>";
}
else
{
	echo"Video Trending Gender: Male<br>";
}
$trendingLoc = "SELECT  location, COUNT(`location`) AS `value_occurrence` FROM     `alston` GROUP BY `location` ORDER BY `value_occurrence` DESC LIMIT 1   ";
$trendingLocResult = mysqli_query($link, $trendingLoc);
$trendingRow = mysqli_fetch_row($trendingLocResult);
$trendingCity = $trendingRow[0];
echo "Trending Location: ". $trendingCity;
mysqli_close($link);
?>

<h4>Life Of Disha</h4>
<?php
$link = mysqli_connect("localhost","root","","youtube");
if($link===false){
 die("ERROR: Couldn't Connect." . mysqli_connect_error());
}

$femaleCountGenderSql = "SELECT count(gender) from alston where gender='female';";
$femaleCountResult = mysqli_query($link, $femaleCountGenderSql);
$femaleCountRow = mysqli_fetch_row($femaleCountResult);
$femaleCount = (int) $femaleCountRow[0];
/*echo $femaleCount;*/

$maleCountGenderSql = "SELECT count(gender) from alston where gender='male';";
$maleCountResult = mysqli_query($link, $maleCountGenderSql);
$maleCountRow = mysqli_fetch_row($maleCountResult);
$maleCount = (int) $maleCountRow[0];
/*echo $maleCount;*/

if($femaleCount > $maleCount)
{
	echo "Video Trending Gender: Female<br>";
}
else
{
	echo"Video Trending Gender: Male<br>";
}
$trendingLoc = "SELECT  location, COUNT(`location`) AS `value_occurrence` FROM     `alston` GROUP BY `location` ORDER BY `value_occurrence` DESC LIMIT 1   ";
$trendingLocResult = mysqli_query($link, $trendingLoc);
$trendingRow = mysqli_fetch_row($trendingLocResult);
$trendingCity = $trendingRow[0];
echo "Trending Location: ". $trendingCity;
mysqli_close($link);
?>

<h4>Life Of Melron</h4>
<?php
$link = mysqli_connect("localhost","root","","youtube");
if($link===false){
 die("ERROR: Couldn't Connect." . mysqli_connect_error());
}

$femaleCountGenderSql = "SELECT count(gender) from alston where gender='female';";
$femaleCountResult = mysqli_query($link, $femaleCountGenderSql);
$femaleCountRow = mysqli_fetch_row($femaleCountResult);
$femaleCount = (int) $femaleCountRow[0];
/*echo $femaleCount;*/

$maleCountGenderSql = "SELECT count(gender) from alston where gender='male';";
$maleCountResult = mysqli_query($link, $maleCountGenderSql);
$maleCountRow = mysqli_fetch_row($maleCountResult);
$maleCount = (int) $maleCountRow[0];
/*echo $maleCount;*/

if($femaleCount > $maleCount)
{
	echo "Video Trending Gender: Female<br>";
}
else
{
	echo"Video Trending Gender: Male<br>";
}
$trendingLoc = "SELECT  location, COUNT(`location`) AS `value_occurrence` FROM     `alston` GROUP BY `location` ORDER BY `value_occurrence` DESC LIMIT 1   ";
$trendingLocResult = mysqli_query($link, $trendingLoc);
$trendingRow = mysqli_fetch_row($trendingLocResult);
$trendingCity = $trendingRow[0];
echo "Trending Location: ". $trendingCity;
mysqli_close($link);
?>

</div><!--end content-->

<!--Signup modal-->
<div id="signupmodal" class="modal">
<div class="modal-container">
<h1>signup</h1>

</div>
</div><!--end signup modal-->
</body>
</html>