<?php 
// $conn = mysqli_connect('localhost', 'root', '','tune_source')
// or die("Can not connect database".mysqli_connect_error());
?><?php
$conn = pg_connect("postgres://vmotpzmdbvmdsf:c6912b5d0b13b7eb15f6c18fc385a9dc68b0c803fabdc5a3437e373778a37510@ec2-54-157-16-196.compute-1.amazonaws.com:5432/d2rvvjjjc40cjd");
	echo 'Connected Successfully!!!';
	if(!$conn)
	{
		die("Could not connect to database");
    }
    ?>
