<?php
session_start();

include "dbcon.php";
if(isset($_POST['submit']))
{
	echo$t=$_POST['title'];
   echo  $d=$_POST['description'];
   echo $s=$_POST['subtitle'];
  echo  $sd=mysqli_real_escape_string($con,$_POST['sub_description']);
   

    $filename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
    
    $z="upload/".$filename;
    move_uploaded_file($tempname, $z);



    $data="INSERT INTO blog(title,description,subtitle,sub_description,image)values('$t','$d','$s','$sd','$z')";

    $query=mysqli_query($con,$data);
   if($query){
    $_SESSION['success']="ADD DATA SUCCESSFULLY";
    header("location:blog.php");
   }

   else{
    $_SESSION['error']="Something went wrong";
    header("location=blog.php");
   }
  }
  ?>



?>