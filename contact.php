<?php
//define variables and set to empty values
$name_error = $email_error = $message_error = "";
$name = $email = $message = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
//		$email_body = "";
//		$email_body = $email_body . "Name: " . $name . "\n";
//		$email_body = $email_body . "Email: " . $email . "\n";
//		$email_body = $email_body . "Message: " . $message . "\n"; 

	

	

// } else {
	if ($name=$_POST["name"] and $email=$_POST["email"] and $message=$_POST["message"]) {


	// "header": redirect to another file (in this line: redirect to same page.)
	// This step creates the web address(new URL) with a variable and a value of variable. 
	// Those will be sent to the server.
	// "contact.php?status=thanks" is the web address for the thank you message.
	// "status" is the variable ---- "thanks" is the specify value of variable
		header("Location: contact.php?status=thanks");
		exit;
	} else {

		if (empty($_POST["name"])) {
   	$name_error = "Vui lòng điền đầy đủ họ tên.";
	} else {
   	$name = test_input($_POST["name"]);
   // check if name only contains letters and whitespace
  	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
     $name_error = "Vui lòng điền đầy đủ họ tên với các chữ cái và khoảng trắng."; 
   	}
 	}

 	if (empty($_POST["email"])) {
   	$email_error = "Vui lòng nhập email của bạn.";
 	} else {
   	$email = test_input($_POST["email"]);
   	// check if e-mail address is well-formed
   	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $email_error = "Email không chính xác."; 
   	}
 	}

 	if (empty($_POST["message"])) {
   	$message_error = "Vui lòng nhập tin nhắn.";
 	} else {
   	$message = test_input($_POST["message"]);
 	}

	}
}

function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
?>

<?php 
$page_title='Liên Hệ | Pure White';
include("inc/header.php"); 
?>

	<div class="container">
		
		<ol class="breadcrumb">
  		<li><a href="index.php">Trang Chủ</a></li>
  		<li class="active">Liên Hệ</a></li>
		</ol>	
		<div class="row">
			<div class="col-xs-12 col-sm-5">
				<div class="panel panel-success">
					<div class="panel-heading">
  					<h3 class="panel-title"><img src="img/phone-square.png">&nbsp;Liên Hệ Sĩ Lẻ Mỹ Phẩm</h3>
					</div>
					<div class="panel-body panel-contact">
  					<h4><strong>VY VY Boutique</strong><br></h4>
  					<i>Địa Chỉ:</i> 7 Phan Chu Trinh-P.Xương Huân-Nha Trang-Khánh Hòa<br>
  					<i>Điện Thoại:</i> 01687520700<br>
  					<i>Email:</i> <a href="mailto:teresangocvy@gmail.com">teresangocvy@gmail.com</a><br>
  					<i>Trang Cá Nhân:</i><a href="https://www.facebook.com/cobengocvydethuongnhinhanh"> /cobengocvydethuongnhinhanh</a><br>
  					<i>Cửa Hàng:</i><a href="https://www.facebook.com/VYVYBoutique.beautiful"> /VYVYBoutique.beautiful</a><br>
  					<ul class="icon-bar-contact">
  						<li><a href="https://www.facebook.com/VYVYBoutique.beautiful?ref=br_rs"><img src="img/facebook-icon.png" alt="facebook-icon"></a></li>
  						<li><a href="#"><img src="img/zalo-icon.jpg" alt="zalo-icon"></a></li>
  						<li><a href="#"><img src="img/viber-icon.png" alt="viber-icon"></a></li>
  					</ul>
					</div><!-- End panel body -->
				</div><!-- End Panel heading -->
			</div><!-- End first column -->

			<div class="col-xs-12 col-sm-7">
			 	<div class="panel panel-success">
			 		<div class="panel-heading">
			 			<h3 class="panel-title"><img src="img/comments.png" alt="comments-icon">&nbsp;Phản Hồi - Góp Ý</h3>
			 		</div>
			 		<div class="panel-body">
			 			<?php 
			 			//use "status" variable to check whether should show the form or the thank you message.
			  		//checks if the "status" variable has the "thanks" value -> show the thank you message 
			  		//else -> show the form.
			  		//isset: check the variable exists or not
			 			if (isset($_GET["status"]) and $_GET["status"] == "thanks") { ?>
			 				<div class="alert alert-warning" role="alert"> 
			 					<p>Cảm ơn quý khách đã giúp đỡ và hoàn thiện VYVY Boutique. Tôi sẽ trả lời sớm nhất câu hỏi của quý khách thông qua email.</p>
			 				</div> 
			 			<?php } else { ?> 
				 			<form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				 				<div class="form-group">
				 					<label for="input_name" class="col-sm-3 control-label">Họ Tên:</label>
				 					<div class="col-sm-9">
				 						<input type="name" class="form-control" value="<?php echo $name;?>" name="name" placeholder="Họ Tên">
				 						<span class="error">* <?php echo $name_error; ?></span>
				 					</div>
				 				</div>
				 				<div class="form-group">
				 					<label for="input_email" class="col-sm-3 control-label">Email:</label>
				 					<div class="col-sm-9">
				 						<input type="email" class="form-control" value="<?php echo $email;?>" name="email" placeholder="Email">
				 						<span class="error">* <?php echo $email_error; ?></span>
				 					</div>
				 				</div>
				 				<div class="form-group">
				 					<label for="input_message" class="col-sm-3 control-label">Tin Nhắn:</label>
				 					<div class="col-sm-9">
				 						<textarea class="form-control" rows="3" value="<?php echo $message;?>" name="message" placeholder="Giúp tôi hoàn thiện cửa hàng nhé!"></textarea>
				 						<span class="error">* <?php echo $message_error; ?></span>
				 					</div>
				 				</div>
				 				<div class="form-group">
				 					<div class="col-sm-9 pull-right">
				 						<button type="submit" class="btn btn-success">Gửi</button>
				 					</div>
				 				</div>
				 			</form>
			 			<?php } ?> 
			 		</div>
			 	</div>
			</div>

			<!-- advertisement 
			<div class="col-xs-3 col-sm-2">
				<div class="container-fluid">
					
				</div>
			</div>
			end advertisement -->

		</div>
	</div>
<?php include("inc/footer.php"); ?>