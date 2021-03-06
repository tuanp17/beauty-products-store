<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title; ?></title>
    <link href="<?php echo BASE_URL; ?>css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,700italic' rel='stylesheet' type='text/css'>
    <link href="<?php echo BASE_URL; ?>css/custom.css" rel="stylesheet">
  </head>
  <body>
    <!-- Nav Bar header -->
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo BASE_URL; ?>"><strong>VY VY Boutique</strong></a>
        </div><!-- End navbar-header -->

        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <button type="button" class="btn btn-default navbar-btn">Đăng Kí</button>
            </li>
            <li>
              <button type="button" class="btn btn-success navbar-btn">Đăng Nhập</button>
            </li>
          </ul>
        </div>
      </div><!-- End container-fluid -->
    </nav><!-- End navbar header -->  

    <!-- Carousel -->
    <div class = "container">
      <div id="header-carousel" class="carousel slide carousel-header" data-ride="carousel">
        <ol class="carousel-indicators">
          <li class="active" data-target="#header-carousel" data-slide-to="0"></li>
          <li data-target="#header-carousel" data-slide-to="1"></li>
          <li data-target="#header-carousel" data-slide-to="2"></li>          
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="<?php echo BASE_URL; ?>img/header-slide-pic-1.png" alt = "slide-1">
          </div>
          <div class="item">
            <img src="<?php echo BASE_URL; ?>img/header-slide-pic-2.png" alt = "slide-2">
          </div>
          <div class="item">
            <img src="<?php echo BASE_URL; ?>img/header-slide-pic-3.png" alt = "slide-3">       
          </div>
        </div>
        <a class="left carousel-control" href="#header-carousel" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#header-carousel" data-slide="next">
          <span class="icon-next"></span>
        </a>
      </div>
    </div>
    <!-- End Carousel -->

    <!-- Navigation bar -->
    <div class="container">
      <nav class="navbar navbar-default" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#navbar-link">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand visible-xs" href="#"><strong>Danh Mục</strong></a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-link">
            <ul class="nav navbar-nav">
              <li>
                <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>img/home.png" alt="home-icon">&nbsp;<strong>Trang Chủ</strong></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo BASE_URL; ?>img/shopping-cart.png" alt="cart-icon">&nbsp;<strong>Chăm Sóc&nbsp;</strong><span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="<?php echo BASE_URL; ?>popular_products/"><strong>Nổi Bật</strong></a></li>
                  <li><a href="<?php echo BASE_URL; ?>newest_products.php"><strong>Mới Nhất</strong></a></li>
                  <li><a href="<?php echo BASE_URL; ?>face_products.php"><strong>Dành Cho Da Mặt</strong></a></li>
                  <li><a href="<?php echo BASE_URL; ?>body_products.php"><strong>Dành Cho Body</strong></a></li>
                </ul>
              </li>
              <li><a href="#"><img src="<?php echo BASE_URL; ?>img/star-half-empty.png">&nbsp;<strong>Phản Hồi</strong></a></li>
              <li><a href="#"><img src="<?php echo BASE_URL; ?>img/magic.png" alt="secret-icon">&nbsp;<strong>Bí Quyết</strong></a></li>
              <li><a href="#"><img src="<?php echo BASE_URL; ?>img/credit-card.png" alt="credit-card-icon">&nbsp;<strong>Thanh Toán</strong></a></li>
              <li><a href="<?php echo BASE_URL; ?>contact/"><img src="<?php echo BASE_URL; ?>img/user.png" alt="contact-icon">&nbsp;<strong>Liên hệ</strong></a></li>
              <li>
                <form class="navbar-form" role="search" method="get" action="<?php echo BASE_URL?>search/">
                  <div class="form-group">
                    <input type="text" name="s" class="form-control" placeholder="Tên Sản Phẩm">
                  </div>
                  <button type="submit" class="btn btn-warning hidden-xs" value="go">Tìm Kiếm</button>
                  <button type="submit" class="btn btn-warning visible-xs center-block" value="go">Tìm Kiếm</button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- End navigation bar -->
