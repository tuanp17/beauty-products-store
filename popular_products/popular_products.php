<?php
// Controller
require_once('../inc/initialize.php');
include(ROOT_PATH . 'inc/products.php'); 



// Pagination Controller 
// retrieve current page number from query string; set to 1 if blank

if (empty($_GET["pg"])) {
	$current_page = 1;
} else {
	$current_page = $_GET["pg"];
}

// set strings like "frog" to 0; remove decimals
$current_page = intval($current_page); //check the current page is integer if not convert to int 
$total_products = get_products_count();
$products_per_page = 8;
$total_pages = ceil($total_products/$products_per_page); // ceil: round up to prevent odd numbers

// redirect too-large page numbers to the last page
if ($current_page > $total_pages) {
	header("Location: ./pg=" . $total_pages);
}
// redirect too-small page numbers to the first page
if ($current_page < 1) {
	header("Location: ./");
}

// determine the start and end product for the current page
// for example: in page 3 with 8 products, $start and $end would be 17 and 24
$start = (($current_page - 1) * $products_per_page) + 1;
$end = $current_page * $products_per_page;
if ($end > $total_products) {
	$end = $total_products;
}
$products = get_products_subset($start,$end);




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
						foreach ($products as $product) {     
							include(ROOT_PATH. 'inc/partial_products_list_view.html.php');      
  					} 
  				?>
				</div>
			<?php include(ROOT_PATH . 'inc/partial_pagination.html.php'); ?>
			</div>
		</div>
	</div>
<?php
	include(ROOT_PATH . 'inc/footer.php'); 
?>