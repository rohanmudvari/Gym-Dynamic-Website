<?php
include 'db_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		br{
			background-color: black;
		}
	</style>
</head>
<body style="background-color: #e4e8f0;">
<br>
<br>
<center>
	<h1>All Fitness Gym</h1>
	<h2 style="color:red;"><u>Website Admin Interface</u></h2>
	<form action="home1.php" method="post">
	<table cellpadding="5px">
		<tr>
			<th><h2>Header image:</h2></th>
			<td><input type="file"></td>
		</tr>
		<tr>
			<th><h2>About Us:</h2></th>
			<td><textarea cols="30" rows="10"></textarea></td>
		</tr>
		<tr>
			<th><h2>Facility Description 1:</h2></th>
			<td><textarea cols="30" rows="10"></textarea></td>
		</tr>
		<tr>
			<th><h2>Facility Description 2:</h2></th>
			<td><textarea cols="30" rows="10"></textarea></td>
		</tr>
		<tr>
			<th><h2>Facility Image 1:</h2></th>
			<td><input type="file"></td>
		</tr>
		<tr>
			<th><h2>Facility Image 2:</h2></th>
			<td><input type="file"></td>
		</tr>
		<tr>
			<th><h2>Map:</h2></th>
			<td><input type="file"></td>
		</tr>
		<tr>
			<th><h2>Privacy:</h2></th>
			<td><textarea cols="30" rows="10"></textarea></td>
		</tr>
	</table>
	<input type="submit" name="submit" value="Update" style="padding:5px;">
	</form>
</center>
<br>
<br>
<br>
</body>

</html>