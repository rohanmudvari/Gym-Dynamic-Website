<?php
$name=$_POST['name'];
$password=$_POST['password'];
$address=$_POST['address'];
$number=$_POST['number'];
$service=$_POST['service'];
$time=$_POST['time'];

include 'db_connect.php';
$q= "INSERT INTO registration(Name,password,Address,Phone,Service,Timing) VALUES('$name','$password','$address','$number','$service','$time')"; //inserting into database (query

$result= mysqli_query($con,$q) or die(mysqli_error($con));//excuting query


?>
<?php
include 'header.php';?>
<body style="background-color: black;">
<?php include 'navbar.php';?>
<br>
<div class="container" id="congrats">
	<h2 style="color: white;">Congratulations!! You have successfully been registered as a member.</h1>
		<center><a href="login.html"><div class="gotologin">Login</div></a></center>
		<br>
</div>
</body>
</html>