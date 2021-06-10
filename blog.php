<?php include 'header.php';?>
<?php
include_once 'dbcon.php';
$a = "SELECT * from blog";
$b = mysqli_query($con,$a);     
$c = mysqli_fetch_array($b);
?>
<!-- blog -->
<div class="yellow_bg">
   <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2><?php echo $c['title']?></h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>

<!-- blog -->
<div class="blog">
  <div class="container">
    <div class="row">
    	 
      <div class="col-md-12">
        <div class="title">
          <i><img src="images/title.png" alt="#"/></i>
          
          <span><?php echo $c['description']?></span>
        </div>
      </div>
    </div>
    <div class="row">
    	<?php 
                           include "dbcon.php";
                            $v="SELECT * FROM blog";
                            $q=mysqli_query($con,$v);
                            while($result=mysqli_fetch_array($q))
                            {
                            ?>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
        <div class="blog_box">
          <div class="blog_img_box">
            <figure><img src="admin/<?php echo $result['image']?>" alt="#"/>
             <span><?php echo $result['created_at']?> </span>
            </figure>
          </div>
          <h3><?php echo $result['subtitle']?></h3>
          <p><?php echo $result['sub_description']?> </p>
        </div>
      </div>
       <?php
   }
       ?>
    </div>
  </div>
</div>
<!-- end blog -->


<?php include 'footer.php';?>