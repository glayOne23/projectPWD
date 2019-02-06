<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'solofest';
$conn = mysqli_connect($host,$user,$pass,$db);
?>