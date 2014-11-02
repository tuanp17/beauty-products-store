<?php
require_once('../inc/initialize.php');
$page_title = "Cảm ơn quý khách đã mua hàng | Pure White";
include(ROOT_PATH . 'inc/header.php'); 
?>
<div class="container">
	<hr>
	<div class="width-receipt center-block">
		<div class="panel panel-success">
  		<div class="panel-heading">
    		<h3 class="panel-title text-center">Giao Dịch Thành Công!</h3>
  		</div>
  		<div class="panel-body">
    		<p class="text-justify">
			Cảm ơn quý khách đã mua hàng tại <a href="<?php echo BASE_URL; ?>" class="link-receipt">VYVY Boutique</a>. Hóa đơn mua hàng đã được chuyển tới email của quý khách. Nếu quý khách có thắc mắc, 
			vui lòng gửi email cho VYVY Boutique. Mọi câu hỏi và ý kiến sẽ được trả lời trong vòng 24 tiếng. Chúc quý khách một ngày tốt lành.
		</p>
		<p>
			Quay lại <a href="<?php echo BASE_URL; ?>" class="link-receipt">Trang Chủ</a>
		</p>
  		</div>
		</div>

		
	</div>	
</div>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>