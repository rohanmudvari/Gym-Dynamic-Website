<?php
include 'header.php';
include 'db_connect.php';
error_reporting(0);?>
<body style="background-color: black;">
<?php include 'navbar.php';?>
<br>
<br>
<br>
<br>
 <?php
        $query6="select * from map";
                 $result6=mysqli_query($con,$query6) or die(mysqli_error($con));
                $row6=mysqli_fetch_array($result6);
                ?>
<center><img src="images/<?php  echo $row6[0]; ?>" height=250px width="300px" style="border-radius: 25px;"></center>
<br>
<br>
<div class="container">
<font color="white" style="font-size: 20px;">
    	<p>
    		 <?php
				$query2="select * from about_desc";
                 $result2=mysqli_query($con,$query2) or die(mysqli_error($con));
                while ($row2=mysqli_fetch_array($result2)) {
                	echo $row2[0]; }
                ?>
    	</p>
    	<center><u>Opening Hours: 5 A.M to 7 P.M</u></center><br>
    	<p> <?php
				$query="select * from training";
                 $result=mysqli_query($con,$query) or die(mysqli_error($con));
                $row=mysqli_fetch_array($result);
                	echo $row[0];
                ?></p>
    	 <br>
<table cellpadding="10px" cellspacing=0 align=center border=1 bordercolor=white>
	<tr>
		<td>Trainer's Name</td>
		<td>Time Schedule</td>
	</tr>
	<?php
$query5="select * from trainers_list";
$result5=mysqli_query($con,$query5) or die(mysqli_error($con));
while ($row5=mysqli_fetch_array($result5)) {
    echo "<tr>";
    echo "<td>".$row5[0]."</td>";
    echo "<td>".$row5[1]."</td>";
    echo "<td>".$row5[2]."</td>";
    echo "</tr>";
  }

  ?>
</table>
<br>
<p>
<?php
$query3="select * from training2";
 $result3=mysqli_query($con,$query3) or die(mysqli_error($con));
  $row3=mysqli_fetch_array($result3);
 echo $row3[0];

   ?>
  </p>
<center><h3>Made up your mind? <a href="registration.html">Join Now!</a></h3></center>

    	</font>

    	</div>
    	<hr>
    	<?php
   include 'footer.php';
	?>

</body>
</html>