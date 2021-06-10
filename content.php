 <!-- section --><?php
 include 'dbcon.php';
 $a="SELECT  * from recipe ";
 $b=mysqli_query($con,$a);
 $c=mysqli_fetch_assoc($b);
 ?>
    <section class="resip_section">
        <div class="container">
            <div class="row">
         <div class="col-md-12">
       <div class="ourheading">
    <h2><?php echo $c['title']?></h2>
  </div>
</div> 
</div>
  
    <div class="row">

        <div class="col-md-12">
            <div class="owl-carousel owl-theme">
                <?php 
                           include "dbcon.php";
                            $v="SELECT * FROM recipe";
                            $q=mysqli_query($con,$v);
                            while($result=mysqli_fetch_array($q))
                            {
                            ?>

                <div class="item">
                    <div class="product_blog_img">
                        <img src="admin/<?php echo $result['image']?>" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php echo $result['subtitle']?></h3>
                        <h4><span class="theme_color"></span><?php echo $result['description']?></h4>
                    </div>
                </div>
  
               <?php
             }
             ?>

            </div>
        </div>
    </div>
</div>

</section>
<!----end recipe--->
<div class="bg_bg">
  <?php
include_once 'dbcon.php';
$a = "SELECT * from food";
$b = mysqli_query($con,$a);     
$c = mysqli_fetch_array($b);
?>
<!-- about -->
<div class="about">
    <div class="container">
      <div class="row">
         <div class="col-md-12">
             <div class="title">
                <i><img src="images/title.png" alt="#"/></i>
                <h2><?php echo $c['title']?></h2>
                <p><?php echo $c['description']?></p>
             </div>
          </div>
       </div>
       <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
             <div class="about_box">
                 <h3><?php echo $c['sub_title']?></h3>
                 <p><?php echo $c['sub_description']?> </p>
                 <a href="readmore.php">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
             </div>
         </div>
          <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
             <div class="about_img">
                 <figure><img src="admin/<?php echo $c['image']?>" alt="#/"></figure>
             </div>
         </div>      
       </div> 
    </div>
</div>
<!-- end about -->
 <?php
include_once 'dbcon.php';
$a = "SELECT * from blog";
$b = mysqli_query($con,$a);     
$c = mysqli_fetch_array($b);
?>
<!-- blog -->
<div class="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          <i><img src="images/title.png" alt="#"/></i>
          <h2><?php echo $c['title']?></h2>
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
                        
                        <figure><img src="admin/<?php echo $result['image'] ?>" alt="#"/>
                         <span><?php echo $result['created_at'] ?></span>
                        </figure>
                      </div>
                      <h3><?php echo $result['subtitle'] ?></h3>
                      <p><?php echo $result['sub_description'] ?></p>
                    
                    </div>
                  </div>

                    <?php } ?>

                </div>
              </div>
            </div>
      



<!-- end blog -->


<?php
include_once 'dbcon.php';
$a = "SELECT * from client";
$b = mysqli_query($con,$a);     
$c = mysqli_fetch_array($b);
?>

<!-- Our Client -->
<div class="Client  ">
  <div class="container ">
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          <i><img src="images/title.png" alt="#"/></i>
          <h2><?php echo $c['title']?></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3">
         <div class="Client_box">
           <img src="admin/<?php echo $c['image']?>" alt="#"/>
           <h3><?php echo $c['name']?> </h3>
           <p><?php echo $c['review']?></p>
           <i><img src="images/client_icon.png" alt="#"/></i>
         </div>
      </div>
    </div>
  </div>
</div>  


<!-- end Our Client -->