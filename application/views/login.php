
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/webmin-bootstrap-4-angular-5-admin-dashboard-template/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Jul 2018 06:42:27 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>App</title>

<!-- Favicon -->
<link rel="shortcut icon" href="<?= base_url('assets/images/fav.jpg'); ?>" />

<!-- Font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- css -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css'); ?>" />
 
</head>

<body>

 <div class="wrapper">

<!--=================================
 preloader -->
 
<div id="pre-loader">
    <img src="<?= base_url('assets/images/pre-loader/loader-01.svg'); ?>" alt="">
</div>

<!--=================================
 preloader -->

 <!--=================================
 login-->

<section class="height-100vh d-flex align-items-center page-section-ptb login" style="background-image: url(<?= base_url('assets/images/login-bg.jpg'); ?>);" >
  <div class="container">
  	<div class="row">
  	<?php  if($error=$this->session->flashdata('Login_Failed')):  ?>
		
			<div class="col-lg-4"></div>
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<div class="alert alert-danger">
					<?php echo $error; ?>
				</div>
			</div>
		
	<?php endif; ?>
</div>
     <div class="row justify-content-center no-gutters vertical-align">
       <div class="col-lg-4 col-md-6 login-fancy-bg bg" style="background-image: url(<?= base_url('assets/images/login-inner-bg.jpg'); ?>);">
         <div class="login-fancy">
          <h2 class="text-white mb-20">Hello world!</h2>
          <p class="mb-20 text-white">Create tailor-cut websites with the exclusive multi-purpose responsive template along with powerful features.</p>
          <ul class="list-unstyled  pos-bot pb-30">
            <li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a> </li>
            <li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a></li>
          </ul>
         </div> 
       </div>
       <div class="col-lg-4 col-md-6 bg-white">
        <div class="login-fancy pb-40 clearfix">
        <h3 class="mb-30">Sign In To Admin</h3>
        <?php 	echo form_open('Login/user'); ?>
         <div class="section-field mb-20">
             <label class="mb-10" for="name">User name* </label>
               <input id="name" class="web form-control" type="text" placeholder="User name" name="username">
               <?php  echo form_error('username'); ?>
            </div>
            <div class="section-field mb-20">
             <label class="mb-10" for="Password">Password* </label>
               <input id="Password" class="Password form-control" type="password" placeholder="Password" name="password">
                <?php  echo form_error('password'); ?>
            </div>
            <div class="section-field">
              <div class="remember-checkbox mb-30">
                 <input type="checkbox" class="form-control" name="two" id="two"  />
                 <label for="two"> Remember me</label>
                
                </div>
              </div>
              <?php echo form_submit(['type'=>'submit','class'=>'button fa fa-chec','value'=>'Log in']); ?>
              <?php echo form_close(); ?>
              <!-- <a href="#" class="button">
                <span>Log in</span>
                <i class="fa fa-check"></i>
             </a> -->
             
          </div>
        </div>
      </div>
  </div>
</section>

<!--=================================
 login-->
  
</div>

<!--=================================
 style-customizer -->

<!--=================================
 style-customizer -->
 
<!--=================================
 jquery -->


<!-- jquery -->
<script src="<?= base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>

<!-- plugins-jquery -->
<script src="<?= base_url('assets/js/plugins-jquery.js'); ?>"></script>

<!-- plugin_path -->
<script>var plugin_path = 'js/index.html';</script>

<!-- chart -->
<script src="<?= base_url('assets/js/chart-init.js'); ?>"></script>

<!-- calendar -->
<script src="<?= base_url('assets/js/calendar.init.js'); ?>"></script>

<!-- charts sparkline -->
<script src="<?= base_url('assets/js/sparkline.init.js'); ?>"></script>

<!-- charts morris -->
<script src="<?= base_url('assets/js/morris.init.js'); ?>"></script>

<!-- datepicker -->
<script src="<?= base_url('assets/js/datepicker.js'); ?>"></script>

<!-- sweetalert2 -->
<script src="<?= base_url('assets/js/sweetalert2.js'); ?>"></script>

<!-- toastr -->
<script src="<?= base_url('assets/js/toastr.js'); ?>"></script>

<!-- validation -->
<script src="<?= base_url('assets/js/validation.js'); ?>"></script>

<!-- lobilist -->
<script src="<?= base_url('assets/js/lobilist.js'); ?>"></script>
 
<!-- custom -->
<script src="<?= base_url('assets/js/custom.js'); ?>"></script>
 
</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/webmin-bootstrap-4-angular-5-admin-dashboard-template/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Jul 2018 06:42:28 GMT -->
</html>
