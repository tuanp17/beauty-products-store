<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = $_POST["message"];
		$email_body = "";
		$email_body = $email_body . "Name: " . $name . "\n";
		$email_body = $email_body . "Email: " . $email . "\n";
		$email_body = $email_body . "Message: " . $message . "\n"; 

		// TODO SEND MAIL:

		// "header": redirect to another file (in this line: redirect to same page.)
		header("Location: contact.php?status=thanks");
		// This step creates the web address(new URL) with a variable and a value of variable. 
		// Those will be sent to the server.
		// "contact.php?status=thanks" is the web address for the thank you message.
		// "status" is the variable ---- "thanks" is the specify value of variable
		exit;
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
			 					<p>Cảm ơn $name đã giúp đỡ và hoàn thiện VYVY Boutique</p>
			 				</div>
			 			<?php } else { ?>
				 			<form class="form-horizontal" role="form" method="post" action="contact.php">
				 				<div class="form-group">
				 					<label for="input_name" class="col-sm-3 control-label">Họ Tên:</label>
				 					<div class="col-sm-9">
				 						<input type="name" class="form-control" id="input_name" name="name" placeholder="Họ Tên">
				 					</div>
				 				</div>
				 				<div class="form-group">
				 					<label for="input_email" class="col-sm-3 control-label">Email:</label>
				 					<div class="col-sm-9">
				 						<input type="email" class="form-control" id="input_email" name="email" placeholder="Email">
				 					</div>
				 				</div>
				 				<div class="form-group">
				 					<label for="input_message" class="col-sm-3 control-label">Tin Nhắn:</label>
				 					<div class="col-sm-9">
				 						<textarea class="form-control" rows="3" id="input_message" name="message" placeholder="Giúp tôi hoàn thiện cửa hàng nhé!"></textarea>
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