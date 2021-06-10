<?php
include "dbcon.php";
$id=$_GET['id'];
$del="DELETE from recipe where id=$id";
mysqli_query($con,$del);
header("location:viewrecipe.php");
?>