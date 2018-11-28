<?php
// Start session
session_start();
if (isset($_POST['username']) && !empty($_POST['username'])) 
{
	$_SESSION['login'] = true;
	$_SESSION['name'] = $_POST['username'];
}

if (!isset($_SESSION['login']))
{
	$_SESSION['login'] = false;
}
$loginstatus = $_SESSION['login'];
$redirect = "info.php";
if ($loginstatus == true)
{
	header('Location: '.$redirect);
	exit();
}
?>
<DOCTYPE html>
<html>
<body>
<form action="login.php" method="POST">
Username <input type="text" name="username"> 
Password <input type="password" name="password">
<input type="submit" name="login">
</body>
</html>
