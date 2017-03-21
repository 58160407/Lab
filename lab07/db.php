<?php
$host = "localhost";
$user = "it58160407";
$password = "it58160407";
$dbname = "it58160407";
$conn = new mysqli($host, $user, $password, $dbname);
$conn->query('SET NAMES UTF8');
if ($conn->connect_error) die($conn->connect_error);
?>