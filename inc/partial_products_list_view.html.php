<li>
	<a href="<?php echo BASE_URL?>popular_products/<?php echo $product["sku"]; ?>/">
		<img src="<?php echo BASE_URL . $product["img"]; ?>" alt="<?php echo BASE_URL . $product["name"]; ?>">
		<p><strong><?php echo $product["name"]; ?></strong></p>
		<button class="btn btn-success" role="button">Xem chi tiết</button>
	</a>
</li>