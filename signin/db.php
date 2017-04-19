<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'login';
$conn = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
