<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RS CALCULATOR</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center">
      <span class="brand-text font-weight-light"><?php echo $_SESSION['user']->user_type; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="images/<?php echo $_SESSION['user']->user_photo; ?>" class="img-circle elevation-4" style="width: 50px; height:50px;" alt="User Image">
        </div>
        <div class="info">
           <p style="color:blanchedalmond; font_size:30px;"><?php echo "  ".$_SESSION['user']->firstName_user." ".$_SESSION['user']->lastName_user ?></p>
           <a href="#" style="font-size: 10px;"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
               <a href="#" class="nav-link">
            <img src="https://img.icons8.com/color/48/000000/member-skin-type-7.png" width="20px" height="20px"/>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?controller=User&action=prepareAdd" class="nav-link">
                <img src="https://img.icons8.com/dusk/64/000000/add-user-male.png" width="20px" height="20px"/>
                  <p>Add user</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?controller=User&action=list" class="nav-link">
                <img src="https://img.icons8.com/dusk/64/000000/list.png" width="20px" height="20px"/>
                  <p>Users list</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          
               <li class="nav-item">
               <a href="#" class="nav-link">
            <img src="https://img.icons8.com/fluent/48/000000/test-tube.png" width="20px" height="20px"/>
              <p>
                Substances
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?controller=Substance&action=prepareAdd" class="nav-link">
                <img src="https://img.icons8.com/color/48/000000/add-to-inbox.png" width="20px" height="20px"/>
                  <p>Add substance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?controller=Substance&action=list" class="nav-link">
                <img src="https://img.icons8.com/dusk/64/000000/list.png" width="20px" height="20px"/>
                  <p>Substances list</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item">
          <a href="#" class="nav-link">
             <img src="https://img.icons8.com/officel/16/000000/temperature-sensitive.png" width="20px" heigth="20px"/>
              <p>
                Caracterestics
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?controller=Caracterestic&action=prepareAdd" class="nav-link">
                <img src="https://img.icons8.com/color/48/000000/add-subnode.png" width="20px" heigth="20px"/>
                  <p>Add caracterestic</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?controller=Caracterestic&action=list" class="nav-link">
                <img src="https://img.icons8.com/dusk/64/000000/list.png" width="20px" height="20px"/>
                  <p>Caracterestics list</p>
                </a>
              </li>
              
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    <div class="user-panel" style="margin-top: 270px;"></div>
    <div class="user-panel">
    <a href="login.php" class="d-block" style="margin-top: 10px; margin-bottom:10px; margin-left:25%;">LOG OUT <i style='font-size:24px; transform:rotate(180deg) translate(-25%,-10%);' class='fas'>&#xf2f5;</i></a>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">