<?php
include 'header.php';
include 'db_connect.php';
?>

<body style="background-color: black;">
<?php include 'navbar.php';?>
<br>
<br>
<br>
 <?php
        $query="select * from facility_img_1";
                 $result=mysqli_query($con,$query) or die(mysqli_error($con));
                $row=mysqli_fetch_array($result);
                ?>
<center><img src="images/<?php  echo $row[0]; ?>" height=200px width="400px" style="border-radius:25px;"></center>
<br>
<div class="container" style="color: white; font-size:20px;">
	<p > <?php
        $query2="select * from facility_desc_1";
                 $result2=mysqli_query($con,$query2) or die(mysqli_error($con));
                $row2=mysqli_fetch_array($result2);
                echo $row2[0];
                ?>
 </p>
 <p>
 	<?php
        $query3="select * from facility_desc_2";
                 $result3=mysqli_query($con,$query3) or die(mysqli_error($con));
                $row3=mysqli_fetch_array($result3);
                echo $row3[0];
                ?>
 </p>
</div>
 <?php
        $query1="select * from facility_img_2";
                 $result1=mysqli_query($con,$query1) or die(mysqli_error($con));
                $row1=mysqli_fetch_array($result1);
                ?>
<center><img src="images/<?php  echo $row1[0]; ?>" height=200px width="400px" style="border-radius:25px;"></center>
<hr>
<?php
include"footer.php";
?>
</body>
</html>