<?php
include 'header.php';
include 'db_connect.php';
?>
<body style="background-color: black;">
<?php include 'navbar.php';?>
<br>
<br>
<br>
<br>
<br>
<div class="container">
<font color="white" style="font-size: 20px;"> 
	  <h1>Privacy Policy</h1>
<br>
<br>
<?php
        $query2="select * from privacy";
                 $result2=mysqli_query($con,$query2) or die(mysqli_error($con));
                $row2=mysqli_fetch_array($result2);
                echo $row2[0];
                ?>
</font>
</div>
<hr>
	<?php
   include 'footer.php';
	?>
</body>
</html>