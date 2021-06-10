<?php
include 'dbcon.php';
$id=$_GET['id'];

$del="DELETE FROM blog where id=$id";

mysqli_query($con,$del);

header("location:viewblog.php");
?>
