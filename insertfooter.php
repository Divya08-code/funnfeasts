<?php
include_once 'dbcon.php';
if(isset($_POST['send']))
{
	echo $n=$_POST['name'];
	echo $e=$_POST['email'];
	echo $p=$_POST['phone'];
	echo $m=$_POST['message'];
	



	 $in="INSERT into footer(name,email,phone,message)values('$n','$e','$p','$m')";


	 $query=mysqli_query($con,$in);
	 if($query){
	 	echo "<script>alert('data save')</script>";
	 }

	 else{
	 	echo "<script>alert('data not saved')</script>";
	 }
}
?>