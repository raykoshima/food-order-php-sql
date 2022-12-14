<?php 
ini_set('Dispaly_error',1);
error_reporting(~0);

$ServerName="localhost";
$UserName="root";
$UserPassword="";
$dbName="food";

$usern = $_POST["username"];
$passs = $_POST["password"];
$conn = mysqli_connect($ServerName,$UserName,$UserPassword,$dbName);
$sql = "INSERT INTO user (username,password,rank) VALUES ('$usern','$passs','1')";
$query = mysqli_query($conn,$sql)[header('location:login.php')];?>