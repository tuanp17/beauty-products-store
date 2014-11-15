<?php
function display_products_index($product) {
	$output = "";
	$output = $output . '<li>';
	$output = $output . '<a href="'.BASE_URL.'popular_products/' . $product["sku"]. '/">';
	$output = $output . '<img src="' . BASE_URL . $product["img"] . '" alt="' . $product["name"] . '">';
	$output = $output . '<p>';
	$output = $output . '<strong>';
	$output = $output . $product["name"];
	$output = $output . '</strong>';
	$output = $output . '</p>';
	$output = $output . '</a>';
  $output = $output . '</li>';
	return $output;
}

/* This is the function for display products popular page
function display_products_pop_page($product) {
	$output = "";
	$output = $output . '<div class="col-sm-4 col-md-3">';
	$output = $output . '<div class="thumbnail">';
	$output = $output . '<img data-src="holder.js/250x250" src="' .BASE_URL . $product["img"]. '" alt="'.BASE_URL . $product["name"].'">';
	$output = $output . '<div class="caption">';
	$output = $output . '<p>';
	$output = $output . '<a href="'.BASE_URL.'popular_products/'.$product["sku"].'/" class="thumbnail-caption">';
	$output = $output . '<strong>';
	$output = $output . $product["name"];
	$output = $output . '</strong>';
	$output = $output . '</a>';
	$output = $output . '</p>';
	$output = $output . '<p>';
	$output = $output . '<a href="'.BASE_URL.'popular_products/'.$product["sku"].'/" class="btn btn-success" role="button">Xem chi tiết';
	$output = $output . '</a>';
	$output = $output . '</p>';
	$output = $output . '</div>';
	$output = $output . '</div>';
	$output = $output . '</div>';
	return $output;
}
*/

function display_search_results($product) {
	$output = "";
	$output = $output . '<div class="col-sm-4 col-md-3">';
	$output = $output . '<div class="thumbnail">';
	$output = $output . '<img data-src="holder.js/250x250" src="' .BASE_URL . $product["img"]. '" alt="'.BASE_URL . $product["name"].'">';
	$output = $output . '<div class="caption">';
	$output = $output . '<a href="'.BASE_URL.'popular_products/'.$product["sku"].'/" class="thumbnail-caption">';
	$output = $output . '<strong>';
	$output = $output . $product["name"];
	$output = $output . '</strong>';
	$output = $output . '</a>';
	$output = $output . '</div>';
	$output = $output . '</div>';
	$output = $output . '</div>';
	return $output;
}

/*
 * Returns the four most recent products, using the order of the elements in the array
 * @return   array           a list of the last four products in the array;
                             the most recent product is the last one in the array
 */
function get_recent_products_slide_1_index_page() {
	$recent = array();
  $all = get_all_products();

  $total_products = count($all);
  $position = 0;
  
  foreach($all as $product) {
      $position = $position + 1;
      if ($total_products - $position < 4) {
        $recent[] = $product;
      }
  }
  return $recent;
}

function get_recent_products_slide_2_index_page() {
	$recent = array();
  $all = get_all_products();


  $total_products = count($all);
  $position = 0;
  
  foreach($all as $product) {
    $position = $position + 1;
    if ($position > $total_products - 8 && $position < $total_products - 3) {
      $recent[] = $product;
    }
  }
  return $recent;
}

/*
 * Loops through all the products, looking for a search term in the product names
 * @param    string    $s    the search term
 * @return   array           a list of the products that contain the search term in their name
 */
function get_search_products($s) {
	$search_results = array();
	$all = get_all_products();

	foreach ($all as $product) {
		if ((stripos($product["name"],$s) !== false) OR (strpos($product["sku"],$s) !== false)) {
			$search_results[] = $product;
		}
	}
	return $search_results;
}

/*
 * Counts the total number of products
 * @return   int             the total number of products
 */
function get_products_count() {
  return count(get_all_products());
}

/*
 * Returns a specified subset of products, based on the values received,
 * using the order of the elements in the array .
 * @param    int             the position of the first product in the requested subset 
 * @param    int             the position of the last product in the requested subset 
 * @return   array           the list of products that correspond to the start and end positions
 */
function get_products_subset($position_start, $position_end) {
	$subset = array();
	$all = get_all_products();
	$position = 0;
	foreach ($all as $product) {
		$position += 1;
		if ($position >= $position_start && $position <= $position_end) { 
			$subset[] = $product;
		}
	}
	return $subset;
}

/*
 * Returns the full list of products. This function contains the full list of products,
 * and the other model functions first call this function.
 * @return   array           the full list of products
 */
function get_all_products() {
	$products = array();
	$products[100] = array(
		"name" => "Pure White Pro - Dưỡng trắng da, trị thâm, mụn, tàn nhang",
		"img" => "img/VB01-1.jpg",
		"price" => "250K",
		"description" => "Sửa rửa mặt Pure White có tác dụng dưỡng trắng da, trị mụn, se khít lỗ chân lông, sạch nhờn, kìm dầu, 
		và chống dị ứng. Da di ứng hoàn toàn dùng được.", 
	);
	$products[101] = array(
		"name" => "Pure White Pro - Dưỡng trắng da, trị thâm, mụn",
		"img" => "img/VF04.jpg",
		"price" => "280K",
		"description" => "Mặt kem hai lớp láng mịn kèm với những hạt massage Hoa Hồng tan ngay khi thoa.
		Thoa lên da không hề bị bết dính, thấm nhanh vào da.",
	);
	$products[102] = array(
		"name" => "Pure White Pro - Dưỡng trắng da, trị thâm, mụn",
		"img" => "img/VF07.jpg",
		"price" => "400K",
		"description" => "Là sự kết hợp dung dịch serum one, vitamin E, B5,C, chất chống nắng UVA-UVB, dược tá chất tạo nền.",
	);
	$products[103] = array(
		"name" => "Pure White Pro - Dưỡng trắng da, trị thâm, mụn",
		"img" => "img/pop4.png",
		"price" => "350K",
		"description" => "Tái tạo da hư tổn, sần sùi. Thu nhỏ lỗ chân lông, giảm mụn đầu đen. Giảm nết nhăn mắt.",
	);
	$products[104] = array(
		"name" => "Pure White Pro - Dưỡng trắng da, trị thâm, mụn",
		"img" => "img/pop1.png",
		"price" => "250K",
		"description" => "Sửa rửa mặt Pure White có tác dụng dưỡng trắng da, trị mụn, se khít lỗ chân lông, sạch nhờn, kìm dầu, 
		và chống dị ứng. Da di ứng hoàn toàn dùng được.", 
	);
	$products[105] = array(
		"name" => "Pure White Pro - Dưỡng trắng da, trị thâm, mụn",
		"img" => "img/pop2.png",
		"price" => "280K",
		"description" => "Mặt kem hai lớp láng mịn kèm với những hạt massage Hoa Hồng tan ngay khi thoa.
		Thoa lên da không hề bị bết dính, thấm nhanh vào da.",
	);
	$products[106] = array(
		"name" => "Pure White Pro - Dưỡng trắng da, trị thâm, mụn",
		"img" => "img/pop3.png",
		"price" => "400K",
		"description" => "Là sự kết hợp dung dịch serum one, vitamin E, B5,C, chất chống nắng UVA-UVB, dược tá chất tạo nền.",
	);
	$products[107] = array(
		"name" => "Pure White Pro - Dưỡng trắng da, trị thâm, mụn",
		"img" => "img/pop4.png",
		"price" => "350K",
		"description" => "Tái tạo da hư tổn, sần sùi. Thu nhỏ lỗ chân lông, giảm mụn đầu đen. Giảm nết nhăn mắt.",
	);
	$products[108] = array(
		"name" => "108",
		"img" => "img/pop1.png",
		"price" => "250K",
		"description" => "Sửa rửa mặt Pure White có tác dụng dưỡng trắng da, trị mụn, se khít lỗ chân lông, sạch nhờn, kìm dầu, 
		và chống dị ứng. Da di ứng hoàn toàn dùng được.", 
	);
	$products[109] = array(
		"name" => "109",
		"img" => "img/pop2.png",
		"price" => "280K",
		"description" => "Mặt kem hai lớp láng mịn kèm với những hạt massage Hoa Hồng tan ngay khi thoa.
		Thoa lên da không hề bị bết dính, thấm nhanh vào da.",
	);
	$products[110] = array(
		"name" => "110",
		"img" => "img/pop3.png",
		"price" => "400K",
		"description" => "Là sự kết hợp dung dịch serum one, vitamin E, B5,C, chất chống nắng UVA-UVB, dược tá chất tạo nền.",
	);
	$products[111] = array(
		"name" => "111",
		"img" => "img/pop4.png",
		"price" => "350K",
		"description" => "Tái tạo da hư tổn, sần sùi. Thu nhỏ lỗ chân lông, giảm mụn đầu đen. Giảm nết nhăn mắt.",
	);
	$products[112] = array(
		"name" => "112",
		"img" => "img/pop1.png",
		"price" => "250K",
		"description" => "Sửa rửa mặt Pure White có tác dụng dưỡng trắng da, trị mụn, se khít lỗ chân lông, sạch nhờn, kìm dầu, 
		và chống dị ứng. Da di ứng hoàn toàn dùng được.", 
	);
	$products[113] = array(
		"name" => "113",
		"img" => "img/pop2.png",
		"price" => "280K",
		"description" => "Mặt kem hai lớp láng mịn kèm với những hạt massage Hoa Hồng tan ngay khi thoa.
		Thoa lên da không hề bị bết dính, thấm nhanh vào da.",
	);
	$products[114] = array(
		"name" => "114",
		"img" => "img/pop3.png",
		"price" => "400K",
		"description" => "Là sự kết hợp dung dịch serum one, vitamin E, B5,C, chất chống nắng UVA-UVB, dược tá chất tạo nền.",
	);
	$products[115] = array(
		"name" => "115",
		"img" => "img/pop4.png",
		"price" => "350K",
		"description" => "Tái tạo da hư tổn, sần sùi. Thu nhỏ lỗ chân lông, giảm mụn đầu đen. Giảm nết nhăn mắt.",
	);
	$products[116] = array(
		"name" => "116",
		"img" => "img/pop1.png",
		"price" => "250K",
		"description" => "Sửa rửa mặt Pure White có tác dụng dưỡng trắng da, trị mụn, se khít lỗ chân lông, sạch nhờn, kìm dầu, 
		và chống dị ứng. Da di ứng hoàn toàn dùng được.", 
	);
	$products[117] = array(
		"name" => "117",
		"img" => "img/pop2.png",
		"price" => "280K",
		"description" => "Mặt kem hai lớp láng mịn kèm với những hạt massage Hoa Hồng tan ngay khi thoa.
		Thoa lên da không hề bị bết dính, thấm nhanh vào da.",
	);
	$products[118] = array(
		"name" => "118",
		"img" => "img/pop3.png",
		"price" => "400K",
		"description" => "Là sự kết hợp dung dịch serum one, vitamin E, B5,C, chất chống nắng UVA-UVB, dược tá chất tạo nền.",
	);
	$products[119] = array(
		"name" => "119",
		"img" => "img/pop4.png",
		"price" => "350K",
		"description" => "Tái tạo da hư tổn, sần sùi. Thu nhỏ lỗ chân lông, giảm mụn đầu đen. Giảm nết nhăn mắt.",
	);
	$products[120] = array(
		"name" => "120",
		"img" => "img/pop1.png",
		"price" => "250K",
		"description" => "Sửa rửa mặt Pure White có tác dụng dưỡng trắng da, trị mụn, se khít lỗ chân lông, sạch nhờn, kìm dầu, 
		và chống dị ứng. Da di ứng hoàn toàn dùng được.", 
	);
	$products[121] = array(
		"name" => "121",
		"img" => "img/pop2.png",
		"price" => "280K",
		"description" => "Mặt kem hai lớp láng mịn kèm với những hạt massage Hoa Hồng tan ngay khi thoa.
		Thoa lên da không hề bị bết dính, thấm nhanh vào da.",
	);
	$products[122] = array(
		"name" => "122",
		"img" => "img/pop3.png",
		"price" => "400K",
		"description" => "Là sự kết hợp dung dịch serum one, vitamin E, B5,C, chất chống nắng UVA-UVB, dược tá chất tạo nền.",
	);
	$products[123] = array(
		"name" => "123",
		"img" => "img/VB01-1.jpg",
		"price" => "350K",
		"description" => "Tái tạo da hư tổn, sần sùi. Thu nhỏ lỗ chân lông, giảm mụn đầu đen. Giảm nết nhăn mắt.",
	);



	//Use SKU to duplicate the product id. 
	//Go to each product take the key and copy to new element.
	foreach ($products as $product_id => $product) {
		$products[$product_id]["sku"] = $product_id;
	}

	return $products;

}


?>

