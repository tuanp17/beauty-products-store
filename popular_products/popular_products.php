<?php 
require_once('../inc/initialize.php');
include(ROOT_PATH . 'inc/popular_products_inc.php'); 
?>
<?php
	$page_title = "Sản Phẩm Nổi Bật | VYVY Boutique";
	include(ROOT_PATH . 'inc/header.php'); 
?>
	<div class="container">
		<ol class="breadcrumb">
  			<li><a href="<?php echo BASE_URL; ?>">Trang Chủ</a></li>
  			<li><a href="i<?php echo BASE_URL; ?>">Chăm Sóc</a></li>
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
					<?php foreach ($pop_products as $pop_product_id => $pop_product) { ?>
	  				<div class="col-sm-4 col-md-3">
	    				<div class="thumbnail">      				
	      				<img data-src="holder.js/250x250" src="<?php echo BASE_URL . $pop_product["img"];?>" alt="<?php echo BASE_URL . $pop_product["name"];?>">
	      				<div class="caption">
	        				<p><a href="popular_product_details.php?id=<?php echo $pop_product_id; ?>" class="thumbnail-caption"><strong><?php echo $pop_product["name"];?></strong></a></p>
	        				<p><a href="popular_product_details.php?id=<?php echo $pop_product_id; ?>" class="btn btn-success" role="button">Xem chi tiết</a></p>
	      				</div>
	    				</div>
	  				</div>
  				<?php }; ?>
				</div>
			</div>
		</div>
	</div>
<?php
	include(ROOT_PATH . 'inc/footer.php'); 
?>