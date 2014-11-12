<div class="col-sm-4 col-md-3">
	<div class="thumbnail">
		<img data-src="holder.js/250x250" src="<?php echo BASE_URL . $product["img"]; ?>" alt="<?php echo BASE_URL . $product["name"]; ?>">
		<div class="caption">
			<p>
				<a href="<?php echo BASE_URL?>popular_products/<?php echo $product["sku"]; ?>/" class="thumbnail-caption">
					<strong><?php echo $product["name"]; ?></strong>
				</a>
			</p>
			<p>';
				<a href="<?php echo BASE_URL?>popular_products/<?php echo $product["sku"]; ?>/" class="btn btn-success" role="button">Xem chi tiết</a>
			</p>
		</div>
	</div>
</div>
