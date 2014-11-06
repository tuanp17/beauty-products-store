<?php
// Controller
require_once('../inc/initialize.php');
include(ROOT_PATH . 'inc/popular_products_inc.php'); 
$pop_products_page = get_all_pop_products();


// Pagination Controller 
if (empty($_GET["pg"])) {
	$current_page = 1;
} else {
	$current_page = $_GET["pg"];
}

$current_page = intval($current_page); //check the current page is integer if not convert to int 
$total_products = get_products_count();
$products_per_page = 8;
$total_pages = ceil($total_products/$products_per_page); // ceil: round up to prevent odd numbers
if ($current_page > $total_pages) {
	header("Location: ./pg=" . $total_pages);
}
if ($current_page < 1) {
	header("Location: ./");
}

$start = (($current_page - 1) * $products_per_page) + 1;
$end = $current_page * $products_per_page;
if ($end > $total_products) {
	$end = $total_products;
}
$products = get_products_subset($start, $end);




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
            $display_products_pop_page = "";
						foreach ($pop_products_page as $pop_product) {           
							$display_products_pop_page = display_products_pop_page($pop_product).$display_products_pop_page;	
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