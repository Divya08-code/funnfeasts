<?php  include "header.php"; ?>

<?php include "sidebar.php"; ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">show recipe</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<?php
include 'dbcon.php';
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $a="SELECT * from recipe where id=$id";
  $b=mysqli_query($con,$a);
  $c=mysqli_fetch_assoc($b);
}
  ?>

   <h2>id: <?php echo $c['id']?></h2><br><br>
   <h2>title: <?php echo $c['title']?></h2><br><br>
   <h2>subtitle: <?php echo $c['subtitle']?></h2><br><br>
   <h2>description:<?php echo $c['description']?></h2>
   <h2>image_a:<img src="<?php echo $c['image_a']?>" style="height: 100px; width: 100px;"></h2>  
    <h2>image_b:<img src="<?php echo $c['image_b']?>" style="height: 100px; width: 100px;"></h2>   



 <h2>image_c:<img src="<?php echo $c['image_c']?>" style="height: 100px; width: 100px;"></h2>   



 <h2>image_d:<img src="<?php echo $c['image_d']?>" style="height: 100px; width: 100px;"></h2>   



 <h2>image_e:<img src="<?php echo $c['image_e']?>" style="height: 100px; width: 100px;"></h2>   


 <?php include "footer.php;"?>



