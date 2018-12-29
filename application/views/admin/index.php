<?php include('header.php'); ?>

      <div class="page-title">
        <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0"> Dashboard</h4>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div>
      <br>
      <br>
      <!-- widgets -->
      <div class="row">



        <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
          <div class="card card-statistics h-100">
            <div class="card-body">
              <div class="clearfix">
                <a href="<?= base_url('admin/Entry'); ?>">
                  <div class="float-left">
                <span class="text-success">
                    <i class="fa fa-bed highlight-icon" aria-hidden="true"></i>
                  </span>
                </div>
                <div class="float-right text-right">
                  <p class="card-text text-dark"><b><h3>Furniture</h3></b></p>
                  
                </div>
                </a>
                
              </div>
             
            </div>
          </div>
        </div>



        <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
          <div class="card card-statistics h-100">
            <div class="card-body">
              <div class="clearfix">
                <a href="<?= base_url('admin/Entry_textile'); ?>">
                <div class="float-left">
                  <span class="text-success">
                    <i class="fa fa-user-secret highlight-icon" aria-hidden="true"></i>
                  </span>
                </div>
                <div class="float-right text-right">
                  <p class="card-text text-dark"><b><h3>TexTile</h3></b></p>
                </div>
              </a>
              </div>
             
            </div>
          </div>
        </div>




       <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
          <div class="card card-statistics h-100">
            <div class="card-body">
              <div class="clearfix">
                <a href="<?= base_url('admin/Entry_Home_furnishing'); ?>">
                <div class="float-left">
                  <span class="text-success">
                    <i class="fa fa-foursquare highlight-icon" aria-hidden="true"></i>
                  </span>
                </div>
                <div class="float-right text-right">
                  <p class="card-text text-dark"><b><h3>Home Furnishing</h3></b></p>
                </div>
              </a>
              </div>
            
            </div>
          </div>
        </div>







       


      </div>

  <div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 mb-30"></div>
      <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
       <p class=" pt-4 mb-0 mt-2 border-top">
                  <a href="<?= base_url('assets/document/company_profile.pdf'); ?>" class="mt-10 mb-10  pl-4 font-medium menu-title button button-border gray large" target="_blank">Company Profile</a>
                 <!--  <a href="" data-toggle="modal" data-target="#exampleModalCenter"  class="mt-10 mb-10  pl-4 font-medium menu-title button button-border gray large">Video</a> -->
                  <a href="<?= base_url('assets/document/product_profile.pdf'); ?>" class="mt-10 mb-10  pl-4 font-medium menu-title button button-border gray large" target="_blank">Product Profile</a>
               
              </p>
            </div>

            </div>
      <!-- Orders Status widgets-->
          
 

<!--=================================
 wrapper -->
      
<!--=================================
 footer -->


            <!-- Large modal -->
           <!-- 

              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    
                    <div class="modal-body" style="margin: 0px; padding: 0px;">
                    <video width="100%" height="100%" controls>
                    <source src="<?= base_url('assets/video/video.mp4'); ?>" type="video/mp4">
                    <source src="mov_bbb.ogg" type="video/ogg">
                    Your browser does not support HTML5 video.
                    </video>
                    </div>
                   
                  </div>
                </div>
              </div> -->

         

  <?php include('footer.php'); ?>
