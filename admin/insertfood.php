<?php 
session_start();
include 'dbcon.php';
if(isset($_POST['submit'])){
	$t=$_POST['title'];
	$d=$_POST['description'];
	$st=$_POST['sub_title'];
    $sd=mysqli_real_escape_string($con,$_POST['sub_description']);

    $filename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];


    $z='upload/' .$filename;

    move_uploaded_file($tempname, $z);

    $data="INSERT INTO food (title,description,sub_title,sub_description,image)values('$t','$d','$st','$sd','$z')";

    $query=mysqli_query($con,$data);
     if($query){
        $_SESSION['success']="ADD DATA SUCCESSFULLY";
        header("location:food.php");
     }

     else{
        $_SESSION['error']="Something went wrong";
        header("location=food.php");
     }
    }
    ?>