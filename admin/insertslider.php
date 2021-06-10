<?php 
session_start();
include 'dbcon.php';
if(isset($_POST['submit'])){
	$t=$_POST['title'];
	$d=$_POST['description'];
	

    $filename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];


    $z='upload/' .$filename;

    move_uploaded_file($tempname, $z);

    $data="INSERT INTO slider (title,description,image)values('$t','$d','$z')";

    $query=mysqli_query($con,$data);
     if($query){
        $_SESSION['success']="ADD DATA SUCCESSFULLY";
        header("location:slider.php");
     }

     else{
        $_SESSION['error']="Something went wrong";
        header("location=slider.php");
     }
    }
    ?>