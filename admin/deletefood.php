<?php
include 'dbcon.php';
$id=$_GET['id'];
$del="DELETE FROM food where id=$id";
mysqli_query($con,$del);
header("location:viewfood.php");
?>