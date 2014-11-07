<?php 
	require_once('../inc/initialize.php');
	require_once(ROOT_PATH . 'inc/products.php'); 
	$products = get_all_products();



	$product_id = $_GET["id"];
	$product = $products[$product_id];

//check the id products in case somebody changes the id on web address. If id is valid, go ahead. If not, it will redirect to
//popular_products.php again. 
	if (isset($_GET["id"])) {
		$product_id = $_GET["id"];
		if (isset($products[$product_id])) {
			$product = $products[$product_id];
		}
	}
	if (!isset($product)) {
		header("Location:" . BASE_URL .  "popular_products/");
		exit();
	}
?>

<?php
	$page_title = $product["name"];
	include(ROOT_PATH .'inc/header.php'); 
?>
<div class="container">
	<ol class="breadcrumb">
			<li><a href="<?php echo BASE_URL; ?>">Trang Chủ</a></li>
			<li><a href="<?php echo BASE_URL; ?>">Chăm Sóc</a></li>
			<li><a href="<?php echo BASE_URL; ?>popular_products/">Nổi Bật</a></li>
			<li class="active"><?php $product["name"]; ?></li>
	</ol>

	<div class="panel panel-success panel-custom">
		<div class="panel-heading">
			<h3 class="panel-title">
				<img src="<?php echo BASE_URL; ?>img/thumbs-up.png" alt="popular-products-logo">&nbsp;&nbsp;Sản Phẩm Nổi Bật  
      </h3>
		</div>

		<div class="panel-body">
			<div class="row">
				<div class="col-xs-6">
					<img src="<?php echo BASE_URL . $product["img"]; ?>" alt="<?php echo BASE_URL . $product["name"]; ?>">
				</div>
				<div class="col-xs-6">
					<h4><strong><?php echo $product["name"]; ?></strong></h4>
					<p><?php echo $product["description"]; ?></p>
					<h4><strong>Giá: <?php echo $product["price"]; ?></strong></h4>
					<p><a href="#" class="btn btn-success" role="button">Thêm Vào Giỏ Hàng</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	include(ROOT_PATH .'inc/footer.php'); 
?>