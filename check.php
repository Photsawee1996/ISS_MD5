<?php
$user = $_POST["user"];
$pass = $_POST["pass"];
$hash = md5($pass);

$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
$objDB = mysql_select_db("iss");
$strSQL = "SELECT * FROM md5 where name = '$user'";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$objResult = mysql_fetch_array($objQuery);

if($objResult["pass"] == $hash)
{
  echo "Login success !!!";
}
else echo "User or Pass incorrect !!!";


?>
