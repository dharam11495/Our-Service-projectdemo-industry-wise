<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/webmin-bootstrap-4-angular-5-admin-dashboard-template/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Jul 2018 06:39:41 GMT -->
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


<style type="text/css">
  #contact1,#contact2,#buttonx,#buttonx1,#buttonfilex,#file1,#file2,#buttonfilex1{
    display: none;
  }

  .dharam{
    width:24px;
    height:24px;
    position:relative;
    top:6px;

  }
</style>
 
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
 header start-->
 
<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <!-- logo -->
  <div class="text-left navbar-brand-wrapper">
    <a class="navbar-brand brand-logo " href="<?= base_url(); ?>"><img src="<?= base_url('assets/images/hitouch-logo.png'); ?>" alt="" ></a>
     <a class="navbar-brand brand-logo-mini" href="<?= base_url(); ?>"><img src="<?= base_url('assets/images/fav.jpg'); ?>" alt=""></a>
  </div>
  <!-- Top bar left -->
  <ul class="nav navbar-nav mr-auto">
    <li class="nav-item">
      <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
    </li>
    <li class="nav-item">
      <div class="search">
        <a class="search-btn not_click" href="javascript:void(0);"></a>
        <div class="search-box not-click">
          <input type="text" class="not-click form-control" placeholder="Search" value="" name="myInput" id="myInput">
          <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
        </div>
      </div>
    </li>
  </ul>
  <!-- top bar right -->
  <ul class="nav navbar-nav ml-auto">
    <li class="nav-item fullscreen">
      <a id="btnFullscreen" href="#" class="nav-link" ><i class="ti-fullscreen"></i></a>
    </li>
      
    <li class="nav-item dropdown mr-30">
      <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <img src="<?= base_url('assets/images/profile-avatar.jpg'); ?>" alt="avatar">
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header">
          <div class="media">
            <div class="media-body">
              <h5 class="mt-0 mb-0"><?= $this->session->userdata('first_name') ?></h5>
              <span><?= $this->session->userdata('email') ?></span>
            </div>
          </div>
        </div>
        <div class="dropdown-divider"></div>
      
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#"><i class="text-info ti-settings"></i><?= $this->session->userdata('level') ?></a>
        <a class="dropdown-item" href="<?= base_url('Welcome/logout'); ?>"><i class="text-danger ti-unlock"></i>Logout</a>
      </div>
    </li>
  </ul>
</nav>

<!--=================================
 header End-->

<!--=================================
 Main content -->
 
<div class="container-fluid">
  <div class="row">
    <!-- Left Sidebar start-->
    <div class="side-menu-fixed">
     <div class="scrollbar side-menu-bg">
      <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
          <a href="<?= base_url(); ?>" >
            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span></div>
           <div class="clearfix"></div>
          </a>
          
        </li>
     


         <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Search Section </li>
        <!-- menu item Widgets-->
        <li>


         <li>
          <a href="<?= base_url('welcome/Show'); ?>"><i class="ti-files"></i><span class="right-nav-text">Overview</span>  </a>
        </li>


         



        <!-- menu item Form-->
       
        
      
     
       
    </ul>
  </div> 
</div> 

<!-- Left Sidebar End-->

 <!--=================================
wrapper -->

    <div class="content-wrapper">