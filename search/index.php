<?php
$page_title = "Kết Quả Tìm Kiếm | Pure White";
require_once('../inc/initialize.php');

//Controller Search Form 
$search_term = "";
if (isset($_GET["s"])) {
  $search_term = trim($_GET["s"]);
  if ($search_term != "") {
    require_once(ROOT_PATH . 'inc/popular_products_inc.php');
    $search_results = get_search_products($search_term);
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
			<?php
				if ($search_term != "") {
					
				} 
			?>
		</div>
	</div>
</div>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>