<?php
session_start();


include_once 'dbcon.php';
if(isset($_POST['submit'])){
	 
	  $filename=$_FILES['image']['name'];
	  $tempname=$_FILES['image']['tmp_name'];

	 $z="upload/".$filename;
	 move_uploaded_file($tempname, $z);


	 $data="INSERT into footer(image)values('$z')";


	 $query=mysqli_query($con,$data);
	 if($query){
	 	$_SESSION['success']="ADD DATA SUCCESSFULLY";
	 	header("location:footerimage.php");
	 }

	 else{
	 	$_SESSION['error']="Something went wrong";
	 	header("location=footer.php");
	 }
	}
	?>