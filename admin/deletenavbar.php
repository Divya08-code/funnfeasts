<?php
include_once 'dbcon.php';
$id=$_GET['id'];

$del="DELETE from navbar where id=$id";
mysqli_query($con,$del);

header("location:viewnavbar.php");
?>
