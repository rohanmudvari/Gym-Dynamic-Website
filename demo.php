
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table cellpadding="1" border="1" cellspacing="0">
	<?php
include 'db_connect.php';
$query="select * from products";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
while ($row=mysqli_fetch_array($result)) {
	foreach ($variable as $key => $value) {
		# code...
	}
?>
	<tr>
		<td><?php echo $row[1];}?></td>
	</tr>
</table>
</body>
</html>