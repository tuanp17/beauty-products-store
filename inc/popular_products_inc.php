<?php
	function display_products_index($pop_product_id, $pop_product) {
		$output = "";
		$output = $output . '<div class="col-sm-3">';
		$output = $output . '<a href="popular_product_details.php?id=' . $pop_product_id . '" class="thumbnail">';
		$output = $output . '<img src="' . $pop_product["img"] . '" alt="' . $pop_product["name"] . '" class="img-responsive">';
		$output = $output . '<p>';
		$output = $output . '<strong>';
		$output = $output . $pop_product["name"];
		$output = $output . '</strong>';
		$output = $output . '</p>';
		$output = $output . '</a>';
    $output = $output . '</div>';
		return $output;
	}
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
?>