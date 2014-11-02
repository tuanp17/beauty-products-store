<?php 
require_once('inc/initialize.php');
$page_title='VY VY Boutique | Pure White';
include(ROOT_PATH. 'inc/header.php');  
include("inc/popular_products_inc.php");
?>
    <!-- Content -->
    <!-- first-carousel-content -->
    <div class="container">
      <hr>
      <div class="panel panel-success panel-custom">
        <div class="panel-heading">
          <h3 class="panel-title"><img src="<?php echo BASE_URL; ?>img/thumbs-up.png" alt="popular-products-logo">&nbsp;&nbsp;Sản Phẩm Nổi Bật
            <p class="pull-right"><a href="<?php echo BASE_URL; ?>popular_products/">Xem thêm&nbsp;<img src="<?php echo BASE_URL; ?>img/forward.png" alt="forward-icon">
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
                     <?php 
                        $total_pop_products = count($pop_products);
                        $position = 0;
                        $display_products_index = "";
                        foreach ($pop_products as $pop_product_id => $pop_product) {
                          $position += 1;
                          if ($total_pop_products - $position < 4) {
                            $display_products_index = display_products_index($pop_product_id, $pop_product).$display_products_index;
                          }
                        }
                        echo $display_products_index;
                     ?>
                    </div>
                  <!--/row-->
                  </div>
                  <!--/item-->
                  <div class="item">
                    <div class="row">
                      <?php 
                        $total_pop_products = count($pop_products);
                        $position = 0;
                        $display_products_index = "";
                        foreach ($pop_products as $pop_product_id => $pop_product) {
                          $position += 1;
                          if ($total_pop_products-($total_pop_products - $position) < 5) {
                            $display_products_index = display_products_index($pop_product_id, $pop_product).$display_products_index;
                          }
                        }
                        echo $display_products_index;
                     ?>
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
          <h3 class="panel-title"><img src="<?php echo BASE_URL; ?>img/star.png" alt="newest-products-logo">&nbsp;&nbsp;Sản Phẩm Mới Nhất
            <p class="pull-right"><a href="<?php echo BASE_URL; ?>newest_products.php">Xem thêm&nbsp;<img src="<?php echo BASE_URL; ?>img/forward.png" alt="forward-icon">
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
    <div class="container">
      <div class="panel panel-success panel-custom">
        <div class="panel-heading">
          <h3 class="panel-title"><img src="<?php echo BASE_URL; ?>img/smile-o.png" alt="face-logo">&nbsp;&nbsp;Chăm Sóc Da Mặt
            <p class="pull-right"><a href="<?php echo BASE_URL; ?>face_products.php">Xem thêm&nbsp;<img src="<?php echo BASE_URL; ?>img/forward.png" alt="forward-icon">
            </a></p>
          </h3>
          
        </div>
        <div class="panel-body">
          <div class="col-md-12">
            <div class="well-none">
              <div id="face-products-carousel" class="carousel slide">      
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
                <a class="left carousel-control" href="#face-products-carousel" data-slide="prev">
                  <span class="glyphicon glyphicon-circle-arrow-left"></span>
                </a>
                <a class="right carousel-control" href="#face-products-carousel" data-slide="next">
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

    <div class="container">
      <div class="panel panel-success panel-custom">
        <div class="panel-heading">
          <h3 class="panel-title"><img src="<?php echo BASE_URL; ?>img/child.png" alt="face-logo">&nbsp;&nbsp;Chăm Sóc Cơ Thể
            <p class="pull-right"><a href="<?php echo BASE_URL; ?>body_products.php">Xem thêm&nbsp;<img src="<?php echo BASE_URL; ?>img/forward.png" alt="forward-icon">
            </a></p>
          </h3>        
        </div>
        <div class="panel-body">
          <div class="col-md-12">
            <div class="well-none">
              <div id="body-products-carousel" class="carousel slide">      
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
                <a class="left carousel-control" href="#body-products-carousel" data-slide="prev">
                  <span class="glyphicon glyphicon-circle-arrow-left"></span>
                </a>
                <a class="right carousel-control" href="#body-products-carousel" data-slide="next">
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
    
<?php include(ROOT_PATH . 'inc/footer.php'); ?>