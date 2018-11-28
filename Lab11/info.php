<?php
session_start();
$loginURL = "login.php";
if (!isset($_SESSION['login']) || $_SESSION['login'] == false)
{
	header('Location: '.$loginURL);
	exit();
}
echo "Hi ". $_SESSION['name'];
?>
