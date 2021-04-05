<?php

include 'db_connect.php';
include 'header.php';
?>

<body style="background-color: black;">
	<?php
	$query="select * from header_image";
	$result=mysqli_query($con,$query) or die(mysqli_error($con));
	while ($row=mysqli_fetch_array($result)) {
?>
<div class="Bimage">
<img src="images/<?php echo $row[0]; } ?> ">
</div>
<?php
include 'navbar.php';
?>
<br>
<br>
<div id="slider">
		<figure>
			<center>
			<img src="images/1.jpg" width="80%" height="400">
			<img src="images/2.jpg" width="80%" height="400">
			<img src="images/3.jpg" width="80%" height="400">
			<img src="images/4.jpg" width="80%" height="400">
			<img src="images/5.jpg" width="100%" height="400">
		</center>
		</figure>
	</div>
	<br>
	<br>
	<div class="container"><text style="color:white; font-size:20px; font-weight: 500; font-family:sans-serif;">
		        <?php
				$query2="select * from about_desc";
                 $result2=mysqli_query($con,$query2) or die(mysqli_error($con));
                while ($row2=mysqli_fetch_array($result2)) {
                	echo $row2[0]; }
                	?>
                	</text>
		<br><br>
		 <center><a href="about-us.php"><text id='readmore'>Read More</text></a></center>
	</div>
	<hr>
	<div class="container">
		<h1 class="font-effect-shadow-multiple" id="about">&#9658;Our Products:</h1>
		<br>
		<table>
			<tr>
				<td><img src="images/protein-shake.jpg" height="150px" width="150px" style="border-radius:25px"></td>
				<td>Protein Shake<br>Rs.300<br><br><a href="login.html"><text id='readmore'>Add to Cart</text></a></td>
				<td><img src="images/dumbells.jpg" height="150px" width="150px" style="border-radius:25px"></td>
				<td>Dumbells<br>Rs.800<br><br><a href="login.html"><text id='readmore'>Add to Cart</text></a></td>				
				<td><img src="images/treadmill.jpg" height="150px" width="150px" style="border-radius:25px"></td>
				<td>Treadmill<br>Rs.11000<br><br><a href="login.html"><text id='readmore'>Add to Cart</text></a></td>
				<td><img src="images/multi-gym-kettler.jpg" height="150px" width="150px" style="border-radius:25px"></td>
				<td>Multi-gym Kettler<br>Rs.30000<br><br><a href="login.html"><text id='readmore'>Add to Cart</text></a></td>

			</tr>
		</table>
	</div>
	<br><br>
		<div class="container">
		<h1 class="font-effect-shadow-multiple" id="about">&#9658;Our Facilities:</h1>
		<br>
		<table cellpadding="5">
		<tr>
			<td><img src="images/3.jpg" height="300px" width="300px"style="border-radius:25px"></td>
				<td>&nbsp&nbsp&nbsp&nbspThe state-of-art equipments make this gym one of the top-rated gym of Kathmandu.<br>&nbsp&nbsp&nbsp The chest press machine,Shoulder press machine,Cable Tower,Smith machine are<br>&nbsp&nbsp&nbsp all brand new and user-friendly.
					<br>
					<br>
					&nbsp&nbsp&nbsp<a href="facilities.php"><text id='readmore'>Read More</text></a>
				</td>
		</tr>
		</table>
	</div>
	<hr>
	<?php
   include 'footer.php';
	?>
</body>
</html>