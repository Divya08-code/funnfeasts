<?php

$con=mysqli_connect('localhost','root','','hotel');


if($con){
	echo "connected";
}
else{
	echo "not connected";
}
?>