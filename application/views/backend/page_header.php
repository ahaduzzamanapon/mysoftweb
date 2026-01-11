<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$meta_title;?> | <?=$domain_title;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="author" content="Ataul Mostafa (mostafa.csit@gmail.com)">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url();?>awedget/assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/iCheck/all.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/select2/select2.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/datatables/dataTables.bootstrap.css">

  <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/texteditor/editor.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>awedget/assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url();?>awedget/assets/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?=base_url();?>awedget/assets/css/custom.css">

  <!-- add new link -->
  

   <!-- meta tag  --><!-- Tagify CSS -->
   <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet">

  <link rel="stylesheet" href="https://mysoftheaven.com/awedget/assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="https://mysoftheaven.com/awedget/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="https://mysoftheaven.com/awedget/assets/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="https://mysoftheaven.com/awedget/assets/plugins/iCheck/all.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="https://mysoftheaven.com/awedget/assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="https://mysoftheaven.com/awedget/assets/plugins/select2/select2.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="https://mysoftheaven.com/awedget/assets/plugins/datatables/dataTables.bootstrap.css">

  <link rel="stylesheet" href="https://mysoftheaven.com/awedget/assets/plugins/texteditor/editor.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="https://mysoftheaven.com/awedget/assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="https://mysoftheaven.com/awedget/assets/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://mysoftheaven.com/awedget/assets/css/custom.css">
<style>
  .tg-yw4l{
    text-align-last: center;
}
</style>

  
 <!-- end new link -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="<?=base_url().'admin/dashboard';?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>MS</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>MYSOFT</b> Admin Panel</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="javascript:void();" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li><a target="_blank" href="<?=base_url()?>" class="btn btn-success">Visit Website</a></li>
          <li class="dropdown user user-menu">
            <a href="javascript:void();" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url();?>awedget/assets/img/no-avatar.jpeg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=ucwords($this->session->userdata('first_name').' '.$this->session->userdata('last_name'));?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?=base_url();?>awedget/assets/img/no-avatar.jpeg" class="img-circle" alt="User Image">
                <p><small>Member since <strong><?=date('j F, Y', $this->session->userdata('created_on'));?></strong></small> </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="javascript:void();" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=base_url('login/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>awedget/assets/img/no-avatar.jpeg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=ucwords($this->session->userdata('first_name').' '.$this->session->userdata('last_name'));?></p>
          <a href="javascript:void();"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview <?=backend_activate_menu_class('dashboard');?>"> <a href="<?=base_url('admin/dashboard');?>"> <i class="fa fa-dashboard"></i> <span>Dashboard</span></a> </li>  


        <?php if(ifcan('event')): ?>
        <li class="treeview <?=backend_activate_menu_class('blog');?>">
          <a href="javascript:void();">
            <i class="fa fa-dashboard"></i> <span>Event</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('admin/blog/add');?>"><i class="fa fa-circle-o"></i> Add Event Article</a></li>
            <li><a href="<?=base_url('admin/blog/all');?>"><i class="fa fa-circle-o"></i> All Event Article</a></li>
          </ul>
        </li>
        <?php endif; ?>

        <?php if(ifcan('blog')): ?>



        <li class="treeview <?=backend_activate_menu_class('blog_article');?>">
          <a href="javascript:void();">
            <i class="fa fa-dashboard"></i> <span>Blog Article</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('admin/blog_article/add');?>"><i class="fa fa-circle-o"></i> Add Blog Article</a></li>
            <li><a href="<?=base_url('admin/blog_article/all');?>"><i class="fa fa-circle-o"></i> All Blog Article</a></li>
          </ul>
        </li>


        <li class="treeview <?=backend_activate_menu_class('pages');?>">
          <a href="javascript:void();">
            <i class="fa fa-dashboard"></i> <span>Pages</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('admin/pages/add');?>"><i class="fa fa-circle-o"></i> Add Pages</a></li>
            <li><a href="<?=base_url('admin/pages/all');?>"><i class="fa fa-circle-o"></i> All Pages</a></li>
          </ul>
        </li>
        <?php endif; ?>



        <!-- <li class="treeview <?=backend_activate_menu_class('registration');?>"> <a href="<?=base_url('admin/registration/all');?>"> <i class="fa fa-dashboard"></i> <span>Registration List</span></a> </li> -->
        <?php if(ifcan('portfolio')): ?>
        <li class="treeview <?=backend_activate_menu_class('portfolio');?>">
          <a href="javascript:void();">
            <i class="fa fa-dashboard"></i> <span>Portfolio</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('admin/portfolio/add');?>"><i class="fa fa-circle-o"></i> Add Portfolio</a></li>
            <li><a href="<?=base_url('admin/portfolio/all');?>"><i class="fa fa-circle-o"></i> All Portfolio</a></li>
          </ul>
        </li>
        <?php endif; ?>

        <?php if(ifcan('services')): ?>
        <li class="treeview <?=backend_activate_menu_class('services');?>">
          <a href="javascript:void();">
            <i class="fa fa-dashboard"></i> <span>Services</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('admin/services/add');?>"><i class="fa fa-circle-o"></i> Add Services</a></li>
            <li><a href="<?=base_url('admin/services/all');?>"><i class="fa fa-circle-o"></i> All Services</a></li>
          </ul>
        </li>
        <?php endif; ?>

        <?php if(ifcan('product')): ?>
        <li class="treeview <?=backend_activate_menu_class('product');?>">
          <a href="javascript:void();">
            <i class="fa fa-dashboard"></i> <span>Product</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('admin/product/add');?>"><i class="fa fa-circle-o"></i> Add Product</a></li>
            <li><a href="<?=base_url('admin/product/all');?>"><i class="fa fa-circle-o"></i> All Product</a></li>
          </ul>
        </li>
        <?php endif; ?>

        <?php if(ifcan('product')): // Reusing product permission for new product management ?>
        <li class="treeview <?=backend_activate_menu_class('product_new');?>">
          <a href="javascript:void();">
            <i class="fa fa-star"></i> <span>Products (New Design)</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('admin/product_new/add');?>"><i class="fa fa-circle-o"></i> Add New Product</a></li>
            <li><a href="<?=base_url('admin/product_new/all');?>"><i class="fa fa-circle-o"></i> All New Products</a></li>
          </ul>
        </li>
        <?php endif; ?>

        <?php if(ifcan('client')): ?>
        <li class="treeview <?=backend_activate_menu_class('client');?>">
          <a href="javascript:void();">
            <i class="fa fa-dashboard"></i> <span>Client</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('admin/client/add');?>"><i class="fa fa-circle-o"></i> Add Client</a></li>
            <li><a href="<?=base_url('admin/client/all');?>"><i class="fa fa-circle-o"></i> All Client</a></li>
          </ul>
        </li>
        <?php endif; ?>

        <?php if(ifcan('slider')): ?>
        <li class="treeview <?=backend_activate_menu_class('slider');?>">
          <a href="javascript:void();">
            <i class="fa fa-dashboard"></i> <span>Slider</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('admin/slider/add');?>"><i class="fa fa-circle-o"></i> Add Slider</a></li>
            <li><a href="<?=base_url('admin/slider/all');?>"><i class="fa fa-circle-o"></i> All Slider</a></li>
          </ul>
        </li>
        <?php endif; ?>

        <?php if(ifcan('image-gallery')): ?>
        <li class="treeview <?=backend_activate_menu_class('image_gallery');?>">
          <a href="javascript:void();">
            <i class="fa fa-dashboard"></i> <span>Image Gallery</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('admin/image_gallery/add');?>"><i class="fa fa-circle-o"></i> Add Image</a></li>
            <li><a href="<?=base_url('admin/image_gallery/all');?>"><i class="fa fa-circle-o"></i> All Image</a></li>
          </ul>
        </li>
        <?php endif; ?>

        <?php if(ifcan('notable-project')): ?>
        <li class="treeview <?=backend_activate_menu_class('notable');?>">
          <a href="javascript:void();">
            <i class="fa fa-dashboard"></i> <span>Notable Project</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('admin/notable/all');?>"><i class="fa fa-circle-o"></i> Notable List</a></li>
            <li><a href="<?=base_url('admin/notable/add');?>"><i class="fa fa-circle-o"></i> Notable Add</a></li>
            <!-- <li><a href="<?=base_url('admin/manage_user/add');?>"><i class="fa fa-circle-o"></i> Add Notable</a></li> -->
          </ul>
        </li>
        <?php endif; ?>


        <?php if(ifcan('role-permission')): ?>
        <li class="treeview <?=backend_activate_menu_class('Role_Permission');?>">
          <a href="javascript:void();">
            <i class="fa fa-dashboard"></i> <span>Role Permission</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('admin/Role_Permission/all');?>"><i class="fa fa-circle-o"></i> Permission User List </a></li>
            <!-- <li><a href="<?=base_url('admin/notable/add');?>"><i class="fa fa-circle-o"></i> Notable Add</a></li> -->
            <!-- <li><a href="<?=base_url('admin/manage_user/add');?>"><i class="fa fa-circle-o"></i> Add Notable</a></li> -->
          </ul>
        </li>
        <?php endif; ?>

        <?php if(ifcan('testimonial')): ?>
         <li class="treeview <?=backend_activate_menu_class('testimonial');?>">
          <a href="javascript:void();">
            <i class="fa fa-dashboard"></i> <span>Testimonial</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('admin/testimonial/add');?>"><i class="fa fa-circle-o"></i> Add Testimonial</a></li>
            <li><a href="<?=base_url('admin/testimonial/all');?>"><i class="fa fa-circle-o"></i> All Testimonial</a></li>
          </ul>
        </li>
        <?php endif; ?>

        <?php if(ifcan('testimonial')): ?>
         <li class="treeview <?=backend_activate_menu_class('script');?>">
          <a href="javascript:void();">
            <i class="fa fa-dashboard"></i> <span>Script add</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('admin/script/add');?>"><i class="fa fa-circle-o"></i> Add Script</a></li>
            <li><a href="<?=base_url('admin/script/all');?>"><i class="fa fa-circle-o"></i> All Script</a></li>
          </ul>
        </li>
        <?php endif; ?>

        <?php if(ifcan('setting')): ?>
        <li class="treeview <?=backend_activate_menu_class('setting');?>">
          <a href="javascript:void();">
            <i class="fa fa-dashboard"></i> <span>Setting</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('admin/setting/index');?>"><i class="fa fa-circle-o"></i>All Setting </a></li>
            
          </ul>
        </li>
        <?php endif; ?>

        <!-- <li class="treeview <?=backend_activate_menu_class('contact');?>">
          <a href="javascript:void();">
            <i class="fa fa-dashboard"></i> <span>Contact Us</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('admin/contact/add');?>"><i class="fa fa-circle-o"></i> Add Contact Us</a></li>
            <li><a href="<?=base_url('admin/contact/all');?>"><i class="fa fa-circle-o"></i> All Contact Us</a></li>
          </ul>
        </li> -->

        <?php if(ifcan('manage-permission')): ?>
        <li class="treeview <?=backend_activate_menu_class('');?>">
          <a href="javascript:void();">
            <i class="fa fa-dashboard"></i> <span>Manage Permission</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
           
            <li><a href="<?=base_url('admin/manage_permission/all');?>"><i class="fa fa-circle-o"></i> All Permission list</a></li>
          </ul>
        </li>
        <?php endif; ?>


        <?php if(ifcan('manage-contact')): ?>
        <li class="treeview <?=backend_activate_menu_class('manage_contact');?>">
          <a href="javascript:void();">
            <i class="fa fa-dashboard"></i> <span>Manage Contact</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
           
            <li><a href="<?=base_url('admin/manage_contact/all');?>"><i class="fa fa-circle-o"></i> All Contact Manage</a></li>
          </ul>
        </li>
        <?php endif; ?>

        <?php if(ifcan('manage-users')): ?>
        <li class="treeview <?=backend_activate_menu_class('manage_user');?>">
          <a href="javascript:void();">
            <i class="fa fa-dashboard"></i> <span>Manage Users</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('admin/manage_user/all');?>"><i class="fa fa-circle-o"></i> User List</a></li>
            <li><a href="<?=base_url('admin/manage_user/add');?>"><i class="fa fa-circle-o"></i> Add User</a></li>
          </ul>
        </li>
        <?php endif; ?>

        <?php if(ifcan('demu-request')): ?>
        <li class="<?=backend_activate_menu_class('request');?>"><a href="<?php echo base_url('admin/request/demo_request');?>"><i class="fa fa-paper-plane"></i> <span> Demo Request</span></a></li>
        <?php endif; ?>

        <?php if(ifcan('request-quotation')): ?>
        <li class="<?=backend_activate_menu_class('request');?>"><a href="<?php echo base_url('admin/request/all');?>"><i class="fa fa-book"></i> <span>Request Quotation</span></a></li> 
        <?php endif; ?>

        <?php if(ifcan('change-password')): ?>
        <li class="<?=backend_activate_menu_class('change_password');?>"><a href="<?php echo base_url('change_password');?>"><i class="fa fa-book"></i> <span>Change Password</span></a></li>
        <?php endif; ?>

      </ul>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">