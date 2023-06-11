<?php
include 'functions.php';
session_start();
$passwordLength = isset($_GET['passwordLength']) ? $_GET['passwordLength'] : 10;
$password = generatePassword($passwordLength);
$_SESSION['generated_password'] = $password;
header("Location: display-password.php");
exit();
?>




