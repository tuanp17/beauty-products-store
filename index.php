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
          <a class="navbar-brand" href="index.html"><strong>VY VY Boutique</strong></a>   
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
              <a href="#"><strong>Trang Chủ</strong></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>Chăm Sóc&nbsp;</strong><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#"><strong>Da Mặt</strong></a></li>
                <li><a href="#"><strong>Cơ Thể</strong></a></li>
              </ul>
            </li>
            <li><a href="#"><strong>Phản Hồi</strong></a></li>
            <li><a href="#"><strong>Bí Quyết</strong></a></li>
            <li><a href="#"><strong>Thanh Toán</strong></a></li>
            <li><a href="#"><strong>Liên hệ</strong></a></li>
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

    <!-- Content -->
    <!-- first-carousel-content -->
    <div class="container">
      <hr>
      <div class="panel panel-success panel-custom">
        <div class="panel-heading">
          <h3 class="panel-title"><img src="img/thumbs-up.png" alt="popular-products-logo">&nbsp;&nbsp;Sản Phẩm Nổi Bật
            <p class="pull-right"><a href="#">Xem thêm&nbsp;<img src="img/forward.png" alt="forward-icon">
            </a></p>
          </h3>
          
        </div>
        <div class="panel-body">
          <div class="col-md-12">
            <div class="well-none">
              <div id="popular-products-carousel" class="carousel slide">      
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="row">
                        <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/pop1.png" alt="Image" class="img-responsive"></a>
                        </div>
                        <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/pop2.png" alt="Image" class="img-responsive"></a>
                        </div>
                        <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/pop3.png" alt="Image" class="img-responsive"></a>
                        </div>
                        <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/pop4.png" alt="Image" class="img-responsive"></a>
                        </div>
                    </div>
                  <!--/row-->
                  </div>
                  <!--/item-->
                  <div class="item">
                    <div class="row">
                      <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/pop1.png" alt="Image" class="img-responsive"></a>
                      </div>
                      <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/pop1.png" alt="Image" class="img-responsive"></a>
                      </div>
                      <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/pop1.png" alt="Image" class="img-responsive"></a>
                      </div>
                      <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/pop1.png" alt="Image" class="img-responsive"></a>
                      </div>
                    </div>
                  <!--/row-->
                  </div>
                  <!--/item-->
                </div>
                <!--/carousel-inner--> 
                <a class="left carousel-control" href="#popular-products-carousel" data-slide="prev">
                  <span class="glyphicon glyphicon-circle-arrow-left"></span>
                </a>
                <a class="right carousel-control" href="#popular-products-carousel" data-slide="next">
                  <span class="glyphicon glyphicon-circle-arrow-right"></span>
                </a>
              </div>
              <!--/myCarousel-->
            </div>
            <!--/well-->
          </div>
        </div><!-- End Panel body -->
      </div><!-- End Panel -->
    </div><!-- End container -->
    <!-- End first-carousel-content -->

    <!-- second-carousel-content -->
    <div class="container">
      <div class="panel panel-success panel-custom">
        <div class="panel-heading">
          <h3 class="panel-title"><img src="img/star.png" alt="newest-products-logo">&nbsp;&nbsp;Sản Phẩm Mới Nhất
            <p class="pull-right"><a href="#">Xem thêm&nbsp;<img src="img/forward.png" alt="forward-icon">
            </a></p>
          </h3>
          
        </div>
        <div class="panel-body">
          <div class="col-md-12">
            <div class="well-none">
              <div id="newest-products-carousel" class="carousel slide">      
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="row">
                        <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/pop1.png" alt="Image" class="img-responsive"></a>
                        </div>
                        <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/pop2.png" alt="Image" class="img-responsive"></a>
                        </div>
                        <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/pop3.png" alt="Image" class="img-responsive"></a>
                        </div>
                        <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/pop4.png" alt="Image" class="img-responsive"></a>
                        </div>
                    </div>
                  <!--/row-->
                  </div>
                  <!--/item-->
                  <div class="item">
                    <div class="row">
                      <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/pop1.png" alt="Image" class="img-responsive"></a>
                      </div>
                      <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/pop1.png" alt="Image" class="img-responsive"></a>
                      </div>
                      <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/pop1.png" alt="Image" class="img-responsive"></a>
                      </div>
                      <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/pop1.png" alt="Image" class="img-responsive"></a>
                      </div>
                    </div>
                  <!--/row-->
                  </div>
                  <!--/item-->
                </div>
                <!--/carousel-inner--> 
                <a class="left carousel-control" href="#newest-products-carousel" data-slide="prev">
                  <span class="glyphicon glyphicon-circle-arrow-left"></span>
                </a>
                <a class="right carousel-control" href="#newest-products-carousel" data-slide="next">
                  <span class="glyphicon glyphicon-circle-arrow-right"></span>
                </a>
              </div>
              <!--/myCarousel-->
            </div>
            <!--/well-->
          </div>
        </div><!-- End Panel body -->
      </div><!-- End Panel -->

    </div><!-- End container -->
    <!-- End second-carousel-content -->
    <!-- End Content -->

    <!-- Footer -->
    <footer class = "main-footer">
      <div class ="container">
        <div class = "row footer">
          <div class="col-xs-6 col-sm-4">
            <h4><a href="index.html"><strong>VY VY Boutique</strong></a></h4>
            <p><a href ="#"><img src = "img/location.png" alt = "location">7 Phan Chu Trinh - P.Vạn Thạnh</br> Nha Trang - Khánh Hòa</a></p>
            <p>Điện Thoại: 01687520700</p>
            <p><span class="glyphicon glyphicon-copyright-mark"></span>&nbsp;2014 VyVyBoutique</p>
          </div>
          <div class="col-xs-6 col-sm-4">
            <ul class="footer-nav">
              <li><a href="#">Trang Chủ</a></li>
              <li class ="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản Phẩm&nbsp;<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Chăm Sóc Da Mặt</a></li>
                  <li><a href="#">Chăm Sóc Cơ Thể</a></li>
                </ul>
              </li>
              <li><a href="#">Bí Quyết</a></li>
            </ul>
          </div>
          <div class="col-xs-6 col-sm-4">
            <ul class="footer-nav-icon">
              <li><a href="#"><img src="img/facebook.png" alt="facebook-logo"></a></li>
              <li><a href="mailto:#"><img src="img/envelope.png" alt="mail-logo"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>