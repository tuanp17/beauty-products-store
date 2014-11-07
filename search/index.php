<?php
$page_title = "Kết Quả Tìm Kiếm | Pure White";
require_once('../inc/initialize.php');

//Controller Search Form 
// if a non-blank search term is specified in
// the query string, perform a search
$search_term = "";
if (isset($_GET["s"])) {
  $search_term = trim($_GET["s"]);
  if ($search_term != "") {
    require_once(ROOT_PATH . 'inc/products.php');
    $products = get_search_products($search_term);
  }
} 

include(ROOT_PATH . 'inc/header.php'); 



?>
<div class="container">
	<hr>
	<div class="panel panel-success panel-custom">
		<div class="panel-heading">
			<h3 class="panel-title"><img src="<?php echo BASE_URL; ?>img/search.png" alt="search-icon">Kết Quả Tìm Kiếm</h3>
		</div>
		<div class="panel-body">
			<?php if ($search_term != "") :?>
				<?php // if there are products found that match the search term, display them; ?>
				<?php // otherwise, display a message that none were found ?>
				<?php if (!empty($products)) : ?>
					<?php
						foreach ($products as $product) {
							echo display_search_results($product); 	
						} 
					?>
				<?php else :?>
					<div class="alert alert-danger" role="alert">
  					<p>Sản phẩm quý khách cần tìm không có trong cửa hàng. Vui lòng thử lại hoặc kiểm tra lại tên sản phẩm quý khách đang cần.</p>
  					<a href="<?php echo BASE_URL; ?>" class="alert-link">Trở về trang chủ</a>
					</div>
				<?php endif; ?>
			<?php else :?>
				<div class="alert alert-danger" role="alert">
  				<p>Quý khách vui lòng nhập tên sản phẩm cần tìm.</p>
  				<a href="<?php echo BASE_URL; ?>" class="alert-link">Trở về trang chủ</a>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>