<?php
$cid = ''; 
if( isset( $_GET['cid'])) {
    $cid = $_GET['cid'];}
$t0=$_POST["cid"];
$t1=$_POST["cname"];
$t2=$_POST["username"];
$t3=$_POST["password"];
$t4=$_POST["contact"];
$t5=$_POST["website"];
$t6=$_POST["vacancy"];
mysql_connect("localhost","root","") or die(mysql_error());
echo "Connection to server was successful!!";
$dbase_name="resume";
mysql_select_db($dbase_name) or die(mysql_error());
$query="insert into companny values('$t0','$t1','$t2','$t3','$t4','$t5','$t6')";
mysql_query($query) or die(mysql_error());
echo "Sign In Successful!!!";
mysql_close();
?>