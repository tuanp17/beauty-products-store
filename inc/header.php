<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VY VY Boutique | Pure White</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,700italic' rel='stylesheet' type='text/css'>
    <link href="css/custom.css" rel="stylesheet">
  </head>
  <body>
    <!-- Nav Bar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">    
          <a class="navbar-brand" href="index.php"><strong>VY VY Boutique</strong></a>   
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>          
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class = "nav navbar-nav navbar-right">
            <li>
              <a href="index.php"><strong>Trang Chủ</strong></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>Mỹ Phẩm&nbsp;</strong><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#"><strong>Dành Cho Da Mặt</strong></a></li>
                <li><a href="#"><strong>Dành Cho Body</strong></a></li>
              </ul>
            </li>
            <li><a href="#"><strong>Phản Hồi</strong></a></li>
            <li><a href="#"><strong>Bí Quyết</strong></a></li>
            <li><a href="#"><strong>Thanh Toán</strong></a></li>
            <li><a href="contact.php"><strong>Liên hệ</strong></a></li>
            <li>
              <form class="navbar-form" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Tên sản phẩm">
                </div>
                <button type="submit" class="btn btn-custom-echo hidden-xs">Tìm Kiếm</button>
                <button type="submit" class="btn btn-custom-echo visible-xs center-block">Tìm Kiếm</button>
              </form>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
    <!-- End Nav Bar -->


    <!-- Carousel -->
    <div class = "container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>          
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="img/skincarecream.png" alt = "slide-1">
          </div>
          <div class="item">
            <img src="img/skincarecream.png" alt = "slide-2">
          </div>
          <div class="item">
            <img src="img/skincarecream.png" alt = "slide-3">       
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
        </a>
      </div>
    </div>
    <!-- End Carousel -->