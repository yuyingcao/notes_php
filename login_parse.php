<?php

$uname = $_POST['username'];
$pass = $_POST['password'];

include_once("connect.php");
$sql = "SELECT * FROM users WHERE username='".$uname."' AND password='".$pass."'";

$res = mysql_query($sql) or die(mysql_error());

$id = "";
while ($row = mysql_fetch_assoc($res)) {
	$id = $row['id'];
	break;
}

session_start();
$_SESSION['uid'] = $id;

header("Location: main.php");

?>