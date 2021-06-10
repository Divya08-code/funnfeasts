<?php
include"dbcon.php";

if(isset($_GET['id']))
{
	echo $id=$_GET['id'];

	$a= "SELECT * from food where id=$id";
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
	<form method="post" action="updatefood.php">
		<input type="hidden" name="id" value="<?php echo $c['id']?>"><br> 
		title:<input type="text" name="title" value="<?php echo $c['title']?>"><br><br> 
		description:<input type="text" name="description" value="<?php echo $c['description']?>"><br><br>
		sub_title:<input type="text" name="sub_title" value="<?php echo $c['sub_title']?>"><br><br>
		sub_description:<input type="text" name="sub_description" value="<?php echo $c['sub_description']?>">
	

		<input type="submit" name="update" value="update">
	</form>	
	<img src="<?php echo $c['image']?>" style="height: 100px;width: 100px;">
		

</body>
</html>