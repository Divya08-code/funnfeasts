


<?php
session_start();

include_once 'dbcon.php';
if(isset($_POST['submit'])){
	  $c=$_POST['contact'];
	  $e=$_POST['email'];
	   $a=$_POST['address'];
	  $filename=$_FILES['image']['name'];
	  $tempname=$_FILES['image']['tmp_name'];

	 $z="upload/".$filename;
	 move_uploaded_file($tempname, $z);


	 $data="INSERT into navbar(contact,email,address,image)values('$c','$e','$a','$z')";


	 $query=mysqli_query($con,$data);
	 if($query){
	 	$_SESSION['success']="ADD DATA SUCCESSFULLY";
	 	header("location:navbar.php");
	 }

	 else{
	 	$_SESSION['error']="Something went wrong";
	 	header("location=navbar.php");
	 }
	}
	?>