<?php
function display_products_index($pop_product) {
	$output = "";
	$output = $output . '<div class="col-sm-3">';
	$output = $output . '<a href="'.BASE_URL.'popular_products/' . $pop_product["sku"]. '/" class="thumbnail">';
	$output = $output . '<img src="' . BASE_URL . $pop_product["img"] . '" alt="' . $pop_product["name"] . '" class="img-responsive">';
	$output = $output . '<p>';
	$output = $output . '<strong>';
	$output = $output . $pop_product["name"];
	$output = $output . '</strong>';
	$output = $output . '</p>';
	$output = $output . '</a>';
  $output = $output . '</div>';
	return $output;
}

function display_products_pop_page($pop_product) {
	$output = "";
	$output = $output . '<div class="col-sm-4 col-md-3">';
	$output = $output . '<div class="thumbnail">';
	$output = $output . '<img data-src="holder.js/250x250" src="' .BASE_URL . $pop_product["img"]. '" alt="'.BASE_URL . $pop_product["name"].'">';
	$output = $output . '<div class="caption">';
	$output = $output . '<p>';
	$output = $output . '<a href="'.BASE_URL.'popular_products/'.$pop_product["sku"].'/" class="thumbnail-caption">';
	$output = $output . '<strong>';
	$output = $output . $pop_product["name"];
	$output = $output . '</strong>';
	$output = $output . '</a>';
	$output = $output . '</p>';
	$output = $output . '<p>';
	$output = $output . '<a href="'.BASE_URL.'popular_products/'.$pop_product["sku"].'/" class="btn btn-success" role="button">Xem chi tiết';
	$output = $output . '</a>';
	$output = $output . '</p>';
	$output = $output . '</div>';
	$output = $output . '</div>';
	$output = $output . '</div>';
	return $output;
}

function display_search_results($pop_product) {
	$output = "";
	$output = $output . '<div class="col-sm-4 col-md-3">';
	$output = $output . '<div class="thumbnail">';
	$output = $output . '<img data-src="holder.js/250x250" src="' .BASE_URL . $pop_product["img"]. '" alt="'.BASE_URL . $pop_product["name"].'">';
	$output = $output . '</div>';
	$output = $output . '</div>';
	return $output;
}

function get_recent_pop_products_slide_1_index_page() {
	$recent = array();
  $all = get_all_pop_products();

  $total_pop_products = count($all);
  $position = 0;
  
  foreach($all as $pop_product) {
      $position = $position + 1;
      if ($total_pop_products - $position < 4) {
          $recent[] = $pop_product;
      }
  }
  return $recent;
}

function get_recent_pop_products_slide_2_index_page() {
	$recent = array();
  $all = get_all_pop_products();

  $total_pop_products = count($all);
  $position = 0;
  
  foreach($all as $pop_product) {
    $position = $position + 1;
    if ($total_pop_products-($total_pop_products - $position) < 5) {
        $recent[] = $pop_product;
    }
  }
  return $recent;
}

function get_search_products($search_term) {
	$search_results = array();
	$all = get_all_pop_products();

	foreach ($all as $pop_product) {
		$search_results[] = $pop_product;
	}
	return $search_results;
}

function get_products_count() {
  return count(get_all_pop_products());
}

function get_products_subset($position_start, $position_end) {
	$subset = array();
	$all = get_all_pop_products();

	foreach ($all as $pop_product) {
		$subset[] = $pop_product;
	}
}
function get_all_pop_products() {
	$pop_products = array();
	$pop_products[100] = array(
		"name" => "Sữa Rửa Mặt Trắng Da, Trị Mụn, Chống Lão Hóa",
		"img" => "img/pop1.png",
		"price" => "250K",
		"description" => "Sửa rửa mặt Pure White có tác dụng dưỡng trắng da, trị mụn, se khít lỗ chân lông, sạch nhờn, kìm dầu, 
		và chống dị ứng. Da di ứng hoàn toàn dùng được.", 
	);
	$pop_products[101] = array(
		"name" => "Pure White Pro - Kem Body Hoa Hồng",
		"img" => "img/pop2.png",
		"price" => "280K",
		"description" => "Mặt kem hai lớp láng mịn kèm với những hạt massage Hoa Hồng tan ngay khi thoa.
		Thoa lên da không hề bị bết dính, thấm nhanh vào da.",
	);
	$pop_products[102] = array(
		"name" => "Pure White Pro - Dưỡng Trắng, Trị Nám, Tàn Nhang",
		"img" => "img/pop3.png",
		"price" => "400K",
		"description" => "Là sự kết hợp dung dịch serum one, vitamin E, B5,C, chất chống nắng UVA-UVB, dược tá chất tạo nền.",
	);
	$pop_products[103] = array(
		"name" => "Kem Face Pure White Pro - Dưỡng trắng, trị thâm, mụn",
		"img" => "img/pop4.png",
		"price" => "350K",
		"description" => "Tái tạo da hư tổn, sần sùi. Thu nhỏ lỗ chân lông, giảm mụn đầu đen. Giảm nết nhăn mắt.",
	);
	$pop_products[104] = array(
		"name" => "Sữa Rửa Mặt Trắng Da, Trị Mụn, Chống Lão Hóa",
		"img" => "img/pop1.png",
		"price" => "250K",
		"description" => "Sửa rửa mặt Pure White có tác dụng dưỡng trắng da, trị mụn, se khít lỗ chân lông, sạch nhờn, kìm dầu, 
		và chống dị ứng. Da di ứng hoàn toàn dùng được.", 
	);
	$pop_products[105] = array(
		"name" => "Pure White Pro - Kem Body Hoa Hồng",
		"img" => "img/pop2.png",
		"price" => "280K",
		"description" => "Mặt kem hai lớp láng mịn kèm với những hạt massage Hoa Hồng tan ngay khi thoa.
		Thoa lên da không hề bị bết dính, thấm nhanh vào da.",
	);
	$pop_products[106] = array(
		"name" => "Pure White Pro - Dưỡng Trắng, Trị Nám, Tàn Nhang",
		"img" => "img/pop3.png",
		"price" => "400K",
		"description" => "Là sự kết hợp dung dịch serum one, vitamin E, B5,C, chất chống nắng UVA-UVB, dược tá chất tạo nền.",
	);
	$pop_products[107] = array(
		"name" => "Kem Face Pure White Pro - Dưỡng trắng, trị thâm, mụn",
		"img" => "img/pop4.png",
		"price" => "350K",
		"description" => "Tái tạo da hư tổn, sần sùi. Thu nhỏ lỗ chân lông, giảm mụn đầu đen. Giảm nết nhăn mắt.",
	);
	$pop_products[108] = array(
		"name" => "Sữa Rửa Mặt Trắng Da, Trị Mụn, Chống Lão Hóa",
		"img" => "img/pop1.png",
		"price" => "250K",
		"description" => "Sửa rửa mặt Pure White có tác dụng dưỡng trắng da, trị mụn, se khít lỗ chân lông, sạch nhờn, kìm dầu, 
		và chống dị ứng. Da di ứng hoàn toàn dùng được.", 
	);
	$pop_products[109] = array(
		"name" => "Pure White Pro - Kem Body Hoa Hồng",
		"img" => "img/pop2.png",
		"price" => "280K",
		"description" => "Mặt kem hai lớp láng mịn kèm với những hạt massage Hoa Hồng tan ngay khi thoa.
		Thoa lên da không hề bị bết dính, thấm nhanh vào da.",
	);
	$pop_products[110] = array(
		"name" => "Pure White Pro - Dưỡng Trắng, Trị Nám, Tàn Nhang",
		"img" => "img/pop3.png",
		"price" => "400K",
		"description" => "Là sự kết hợp dung dịch serum one, vitamin E, B5,C, chất chống nắng UVA-UVB, dược tá chất tạo nền.",
	);
	$pop_products[111] = array(
		"name" => "Kem Face Pure White Pro - Dưỡng trắng, trị thâm, mụn",
		"img" => "img/pop4.png",
		"price" => "350K",
		"description" => "Tái tạo da hư tổn, sần sùi. Thu nhỏ lỗ chân lông, giảm mụn đầu đen. Giảm nết nhăn mắt.",
	);
	$pop_products[112] = array(
		"name" => "Sữa Rửa Mặt Trắng Da, Trị Mụn, Chống Lão Hóa",
		"img" => "img/pop1.png",
		"price" => "250K",
		"description" => "Sửa rửa mặt Pure White có tác dụng dưỡng trắng da, trị mụn, se khít lỗ chân lông, sạch nhờn, kìm dầu, 
		và chống dị ứng. Da di ứng hoàn toàn dùng được.", 
	);
	$pop_products[113] = array(
		"name" => "Pure White Pro - Kem Body Hoa Hồng",
		"img" => "img/pop2.png",
		"price" => "280K",
		"description" => "Mặt kem hai lớp láng mịn kèm với những hạt massage Hoa Hồng tan ngay khi thoa.
		Thoa lên da không hề bị bết dính, thấm nhanh vào da.",
	);
	$pop_products[114] = array(
		"name" => "Pure White Pro - Dưỡng Trắng, Trị Nám, Tàn Nhang",
		"img" => "img/pop3.png",
		"price" => "400K",
		"description" => "Là sự kết hợp dung dịch serum one, vitamin E, B5,C, chất chống nắng UVA-UVB, dược tá chất tạo nền.",
	);
	$pop_products[115] = array(
		"name" => "Kem Face Pure White Pro - Dưỡng trắng, trị thâm, mụn",
		"img" => "img/pop4.png",
		"price" => "350K",
		"description" => "Tái tạo da hư tổn, sần sùi. Thu nhỏ lỗ chân lông, giảm mụn đầu đen. Giảm nết nhăn mắt.",
	);
	$pop_products[116] = array(
		"name" => "Sữa Rửa Mặt Trắng Da, Trị Mụn, Chống Lão Hóa",
		"img" => "img/pop1.png",
		"price" => "250K",
		"description" => "Sửa rửa mặt Pure White có tác dụng dưỡng trắng da, trị mụn, se khít lỗ chân lông, sạch nhờn, kìm dầu, 
		và chống dị ứng. Da di ứng hoàn toàn dùng được.", 
	);
	$pop_products[117] = array(
		"name" => "Pure White Pro - Kem Body Hoa Hồng",
		"img" => "img/pop2.png",
		"price" => "280K",
		"description" => "Mặt kem hai lớp láng mịn kèm với những hạt massage Hoa Hồng tan ngay khi thoa.
		Thoa lên da không hề bị bết dính, thấm nhanh vào da.",
	);
	$pop_products[118] = array(
		"name" => "Pure White Pro - Dưỡng Trắng, Trị Nám, Tàn Nhang",
		"img" => "img/pop3.png",
		"price" => "400K",
		"description" => "Là sự kết hợp dung dịch serum one, vitamin E, B5,C, chất chống nắng UVA-UVB, dược tá chất tạo nền.",
	);
	$pop_products[119] = array(
		"name" => "Kem Face Pure White Pro - Dưỡng trắng, trị thâm, mụn",
		"img" => "img/pop4.png",
		"price" => "350K",
		"description" => "Tái tạo da hư tổn, sần sùi. Thu nhỏ lỗ chân lông, giảm mụn đầu đen. Giảm nết nhăn mắt.",
	);
	$pop_products[120] = array(
		"name" => "Sữa Rửa Mặt Trắng Da, Trị Mụn, Chống Lão Hóa",
		"img" => "img/pop1.png",
		"price" => "250K",
		"description" => "Sửa rửa mặt Pure White có tác dụng dưỡng trắng da, trị mụn, se khít lỗ chân lông, sạch nhờn, kìm dầu, 
		và chống dị ứng. Da di ứng hoàn toàn dùng được.", 
	);
	$pop_products[121] = array(
		"name" => "Pure White Pro - Kem Body Hoa Hồng",
		"img" => "img/pop2.png",
		"price" => "280K",
		"description" => "Mặt kem hai lớp láng mịn kèm với những hạt massage Hoa Hồng tan ngay khi thoa.
		Thoa lên da không hề bị bết dính, thấm nhanh vào da.",
	);
	$pop_products[122] = array(
		"name" => "Pure White Pro - Dưỡng Trắng, Trị Nám, Tàn Nhang",
		"img" => "img/pop3.png",
		"price" => "400K",
		"description" => "Là sự kết hợp dung dịch serum one, vitamin E, B5,C, chất chống nắng UVA-UVB, dược tá chất tạo nền.",
	);
	$pop_products[123] = array(
		"name" => "Kem Face Pure White Pro - Dưỡng trắng, trị thâm, mụn",
		"img" => "img/pop4.png",
		"price" => "350K",
		"description" => "Tái tạo da hư tổn, sần sùi. Thu nhỏ lỗ chân lông, giảm mụn đầu đen. Giảm nết nhăn mắt.",
	);



	//Use SKU to duplicate the product id. 
	//Go to each product take the key and copy to new element.
	foreach ($pop_products as $pop_product_id => $pop_product) {
		$pop_products[$pop_product_id]["sku"] = $pop_product_id;
	}

	return $pop_products;

}


?>

