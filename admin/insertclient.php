<?php
session_start();

include_once 'dbcon.php';
if(isset($_POST['submit'])){
	  $t=$_POST['title'];
	  $n=$_POST['name'];
	   $r=mysqli_real_escape_string($con,$_POST['review']);
	  
	  $filename=$_FILES['image']['name'];
	  $tempname=$_FILES['image']['tmp_name'];

	 $z="upload/".$filename;
	 move_uploaded_file($tempname, $z);


	 $data="INSERT into client(title,name,review,image)values('$t','$n','$r','$z')";


	 $query=mysqli_query($con,$data);
	 if($query){
	 	$_SESSION['success']="ADD DATA SUCCESSFULLY";
	 	header("location:client.php");
	 }

	 else{
	 	$_SESSION['error']="Something went wrong";
	 	header("location=client.php");
	 }
	}
	?>