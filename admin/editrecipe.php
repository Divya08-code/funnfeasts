<?php
include"dbcon.php";

if(isset($_GET['id']))
{
	echo $id=$_GET['id'];

	$a= "SELECT * from recipe where id=$id";
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
	<form method="post" action="updaterecipe.php">
		<input type="hidden" name="id" value="<?php echo $c['id']?>"><br> 
		title:<input type="text" name="title" value="<?php echo $c['title']?>"><br><br> 
		subtitle:<input type="text" name="subtitle" value="<?php echo $c['subtitle']?>"><br><br>
		description:<input type="text" name="description" value="<?php echo $c['description']?>"><br><br>
		
	

		<input type="submit" name="update" value="update">
	</form>	
	    <img src="<?php echo $c['image']?>" style="height: 100px;width: 100px;">
		
		

</body>
</html>