<?php
session_start();


include_once 'dbcon.php';
if(isset($_POST['submit'])){
	  $t=$_POST['title'];
	  $s=$_POST['subtitle'];
	   
$d=$_POST['description'];


	  
	  

 
	  $filename=$_FILES['image']['name'];
	  $tempname=$_FILES['image']['tmp_name'];

	 $z="upload/".$filename;
	 move_uploaded_file($tempname, $z);
	 




	 $data="INSERT into recipe(title,subtitle,description,image)values('$t','$s','$d','$z')";


	 $query=mysqli_query($con,$data);
	 if($query){
	 	$_SESSION['success']="ADD DATA SUCCESSFULLY";
	 	header("location:recipe.php");
	 }

	 else{
	 	$_SESSION['error']="Something went wrong";
	 	header("location=recipe.php");
	 }
	}
	?>