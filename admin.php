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
	<form action="adminupdate.php" method="post" enctype="multipart/form-data">
	<table cellpadding="5px">
		<tr>
			<th><h2>Header image:</h2></th>
			<td><input type="file"></td>
		</tr>
		<tr>
			<td colspan="2">
					<?php
	$query6="select * from header_image";
	$result6=mysqli_query($con,$query6) or die(mysqli_error($con));
	while ($row6=mysqli_fetch_array($result6)) {
?>
<center><img src="images/<?php echo $row6[0]; } ?> " height='100px' width='300px'></center>
			</td>
		</tr>
		<tr>
			<th><h2>About Us:</h2></th>
			<td><textarea cols="30" rows="10" name="desc1">
				<?php
				$query2="select * from about_desc";
                 $result2=mysqli_query($con,$query2) or die(mysqli_error($con));
                while ($row2=mysqli_fetch_array($result2)) {
                	echo $row2[0]; }
                	?>
			</textarea></td>
		</tr>
		<tr>
			<th><h2>Facility Description 1:</h2></th>
			<td><textarea cols="30" rows="10" name="desc2">			
			<?php
        $query4="select * from facility_desc_1";
                 $result4=mysqli_query($con,$query4) or die(mysqli_error($con));
                while($row4=mysqli_fetch_array($result4)){
                  echo $row4[0];
                }
                ?>
                	
                </textarea></td>
		</tr>
		<tr>
			<th><h2>Facility Description 2:</h2></th>
			<td><textarea cols="30" rows="10" name="desc3">
				<?php
        $query3="select * from facility_desc_2";
                 $result3=mysqli_query($con,$query3) or die(mysqli_error($con));
                $row3=mysqli_fetch_array($result3);
                echo $row3[0];
                ?>
			</textarea></td>
		</tr>
		<tr>
			<th><h2>Facility Image 1:</h2></th>
			<td><input type="file"></td>
		</tr>
		<tr>
			<td colspan="2">
					<?php
	$query7="select * from facility_img_1";
                 $result7=mysqli_query($con,$query7) or die(mysqli_error($con));
                $row7=mysqli_fetch_array($result7);
?>
<center><img src="images/<?php echo $row7[0]; ?> " height='100px' width='300px'></center>
			</td>
		</tr>
		<tr>
			<th><h2>Facility Image 2:</h2></th>
			<td><input type="file"></td>
		</tr>
		<tr>
			<td colspan="2">
					<?php
	$query8="select * from facility_img_2";
                 $result8=mysqli_query($con,$query8) or die(mysqli_error($con));
                $row8=mysqli_fetch_array($result8);
?>
<center><img src="images/<?php echo $row8[0]; ?> " height='100px' width='300px'></center>
			</td>
		</tr>
		<tr>
			<th><h2>Map:</h2></th>
			<td><input type="file"></td>
		</tr>
		<tr>
			<td colspan="2">
	 <?php
        $query9="select * from map";
                 $result9=mysqli_query($con,$query9) or die(mysqli_error($con));
                $row9=mysqli_fetch_array($result9);
                ?>
<center><img src="images/<?php echo $row9[0]; ?> " height='200px' width='400px'></center>
			</td>
		</tr>
		<tr>
			<th><h2>Privacy:</h2></th>
			<td><textarea cols="30" rows="10" name="desc4">
				<?php
        $query5="select * from privacy";
                 $result5=mysqli_query($con,$query5) or die(mysqli_error($con));
                $row5=mysqli_fetch_array($result5);
                echo $row5[0];
                ?>
			</textarea></td>
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