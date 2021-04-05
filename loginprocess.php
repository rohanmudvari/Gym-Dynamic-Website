<?php
session_start();
include 'db_connect.php';
$name=$_POST['name'];
$password=$_POST['password'];

$query="SELECT* FROM registration WHERE Name='$name' AND password='$password'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));

if ($data=mysqli_fetch_array($result)) {
$_SESSION['username']=$username;
header('location:home1.php');
}
else{
	header('location:error.php');
}

?>