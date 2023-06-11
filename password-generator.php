<?php

include 'functions.php';

$passwordLength = isset($_GET['passwordLength']) ? $_GET['passwordLength'] : 10;
$password = generatePassword($passwordLength);



