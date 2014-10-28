<?php 
	include('inc/popular_products_inc.php'); 
	$pop_product_id = $_GET["id"];
	$pop_product = $pop_products[$pop_product_id];

//check the id products in case somebody changes the id on web address. If id is valid, go ahead. If not, it will redirect to
//popular_products.php again. 
	if (isset($_GET["id"])) {
		$pop_product_id = $_GET["id"];
		if (isset($pop_products[$pop_product_id])) {
			$pop_product = $pop_products[$pop_product_id];
		}
	}
	if (!isset($pop_product)) {
		header("Location: popular_products.php");
		exit();
	}
?>

<?php
	$page_title = $pop_product["name"];
	include('inc/header.php'); 
?>
<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Trang Chủ</a></li>
			<li><a href="index.php">Chăm Sóc</a></li>
			<li><a href="popular_products.panel-heading">Nổi Bật</a></li>
			<li class="active"><?php echo $pop_product["name"]; ?></li>
	</ol>

	<div class="panel panel-success panel-custom">
		<div class="panel-heading">
			<h3 class="panel-title">
				<img src="img/thumbs-up.png" alt="popular-products-logo">&nbsp;&nbsp;Sản Phẩm Nổi Bật  
      </h3>
		</div>

		<div class="panel-body">
			<div class="row">
				<div class="col-xs-6">
					<img src="<?php echo $pop_product["img"]; ?>" alt="<?php echo $pop_product["name"]; ?>">
				</div>
				<div class="col-xs-6">
					<h4><strong><?php echo $pop_product["name"]; ?></strong></h4>
					<p><?php echo $pop_product["description"]; ?></p>
					<h4><strong>Giá: <?php echo $pop_product["price"]; ?></strong></h4>
					<p><a href="#" class="btn btn-success" role="button">Thêm Vào Giỏ Hàng</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	include('inc/footer.php'); 
?>