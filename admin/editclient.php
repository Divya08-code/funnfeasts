<?php
include"dbcon.php";

if(isset($_GET['id']))
{
	echo $id=$_GET['id'];

	$a= "SELECT * from client where id=$id";
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
	<form method="post" action="updateclient.php">
		<input type="hidden" name="id" value="<?php echo $c['id']?>"><br> 
		title:<input type="text" name="title" value="<?php echo $c['title']?>"><br><br>
		name:<input type="text" name="name" value="<?php echo $c['name']?>"><br><br>  
		review:<input type="text" name="review" value="<?php echo $c['review']?>"><br><br>
	
	

		<input type="submit" name="update" value="update">
	</form>	
	<img src="<?php echo $c['image']?>" style="height: 100px;width: 100px;">
		

</body>
</html>