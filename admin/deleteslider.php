<?php
include 'dbcon.php';
$id=$_GET['id'];
$del="DELETE  from slider where id=$id";
mysqli_query($con,$del);
header("location:viewslider.php");
?>