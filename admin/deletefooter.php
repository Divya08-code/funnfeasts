<?php
include_once 'dbcon.php';
$id=$_GET['id'];

$del="DELETE from footer where id=$id";
mysqli_query($con,$del);

header("location:viewfooter.php");
?>
