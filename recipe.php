<?php include 'header.php';?>
 <div class="yellow_bg">
   <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Our Recipes</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>
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

<?php include 'footer.php';?>