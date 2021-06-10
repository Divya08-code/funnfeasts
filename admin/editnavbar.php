<?php
include"dbcon.php";

if(isset($_GET['id']))
{
	echo $id=$_GET['id'];

	$a= "SELECT * from navbar where id=$id";
	$b=mysqli_query($con,$a);
	$c=mysqli_fetch_assoc($b);
	//echo $c['name'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="updatenavbar.php">
		<input type="hidden" name="id" value="<?php echo $c['id']?>"><br> 
		contact:<input type="text" name="contact" value="<?php echo $c['contact']?>"><br><br> 
		email:<input type="text" name="email" value="<?php echo $c['email']?>"><br><br>
		address:<input type="text" name="address" value="<?php echo $c['address']?>"><br><br>
	

		<input type="submit" name="update" value="update">
	</form>	
	<img src="<?php echo $c['image']?>" style="height: 100px;width: 100px;">
		

</body>
</html>