<?php 
require_once('../inc/initialize.php');
include(ROOT_PATH . 'inc/popular_products_inc.php'); 

$page_title = "Sản Phẩm Nổi Bật | VYVY Boutique";
include(ROOT_PATH . 'inc/header.php'); 
?>
	<div class="container">
		<ol class="breadcrumb">
  			<li><a href="<?php echo BASE_URL; ?>">Trang Chủ</a></li>
  			<li><a href="<?php echo BASE_URL; ?>">Chăm Sóc</a></li>
  			<li class="active">Nổi Bật</li>
		</ol>

		<div class="panel panel-success panel-custom">
			<div class="panel-heading">
				<h3 class="panel-title">
					<img src="<?php echo BASE_URL; ?>img/thumbs-up.png" alt="popular-products-logo">&nbsp;&nbsp;Sản Phẩm Nổi Bật  
        </h3>
			</div>

			<div class="panel-body">
				<div class="row">
					<?php 
						$total_pop_products = count($pop_products);
            $position = 0;
            $display_products_pop_page = "";
						foreach ($pop_products as $pop_product) {
							$position += 1;
              if ($total_pop_products - $position < 8) { 
							$display_products_pop_page = display_products_pop_page($pop_product).$display_products_pop_page;	
							}					
  					} 
  					echo $display_products_pop_page;
  				?>
				</div>
			</div>
		</div>
	</div>
<?php
	include(ROOT_PATH . 'inc/footer.php'); 
?>