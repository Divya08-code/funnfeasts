<?php
include_once 'dbcon.php';

	# code...
$a = "SELECT * from food";
$b = mysqli_query($con,$a);

$c = mysqli_fetch_assoc($b);

?>
  <div class="about">
    <div class="container">
      
       <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
             <div class="about_box">
                 <h3><?php echo $c['sub_title'];?></h3>
                 <p><?php echo $c['sub_description'];?> </p>
                
             </div>
         </div>
          <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
             <div class="about_img">
                 <figure><img src="admin/<?php echo $c['image']?>" style="width: 500px; height: 500px;" alt="#/"></figure>
             </div>
         </div>      
       </div> 
    </div>
</div>