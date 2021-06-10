

<?php
session_start();
?>
<?php
include "header.php";

?>

<?php
include "sidebar.php";?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">add navbar</h1>
            <?php 
           if (isset($_SESSION['success'])){
            echo $_SESSION['success'];
            unset ($_SESSION['success']);

           }
        
            
           if (isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset ($_SESSION['error']);

           }
           ?>
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

    <!-----code start-->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add navbar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="insertnavbar.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group" >
                    <label >contact</label>
                    <input type="text" class="formcontrol" name="contact" placeholder="Enter contact ">
                  </div>
                  <div class="form-group">
                    <label >email</label>
                    <input type="email" class="form-contrl" name="email" placeholder=" Enter email">
                  </div>
                  <div class="form-group">
                    <label >address</label>
                    <input type="text" class="form-contrl" name="address" placeholder=" Enter address">
                  </div>

                  <div class="form-group">
                    <label>Upload Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
            </div>
        </div>
    </div>
</section>


<?php

include "footer.php";
?>