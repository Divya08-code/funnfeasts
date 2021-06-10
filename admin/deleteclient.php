<?php
include_once 'dbcon.php';
$id=$_GET['id'];

$del="DELETE from client where id=$id";
mysqli_query($con,$del);

header("location:viewclient.php");
?>
