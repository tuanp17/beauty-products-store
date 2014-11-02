<?php
require_once('../inc/initialize.php');
//define variables and set to empty values
$name_error = $email_error = $message_error = "";
$name = $email = $message = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if ($name=$_POST["name"] and $email=$_POST["email"] and $message=$_POST["message"]) {
		
		define('OWNER', 'vyvyboutiqueshop@gmail.com'); // GMail username
		define('OWNER_PASS', 'nguyenthingocvy'); // GMail password
		function smtpmailer($to, $from, $from_name, $subject, $body) { 	
			require_once '../inc/phpmailer/PHPMailerAutoload.php';
			require_once '../inc/phpmailer/class.smtp.php';
			global $error;
			$mail = new PHPMailer();  // create a new object
			$mail->isSMTP();    // enable SMTP
			$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true;  // authentication enabled
			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 465; 
			$mail->Username = OWNER;  
			$mail->Password = OWNER_PASS;           
			$mail->SetFrom($from, $from_name);
			$mail->isHTML(true);                                  
			$mail->Subject = $subject;
			$mail->Body = $body;
			$mail->AddAddress($to);
			if(!$mail->Send()) {
				$error = 'Mail error: '.$mail->ErrorInfo; 
				return false;
			} else {
				$error = 'Message sent!';
				return true;
			}
		}
		// "header": redirect to another file (in this line: redirect to same page.)
		// This step creates the web address(new URL) with a variable and a value of variable. 
		// Those will be sent to the server.
		// "contact.php?status=thanks" is the web address for the thank you message.
		// "status" is the variable ---- "thanks" is the specify value of variable
		
		//Send the email to client 
		if 	(smtpmailer($email, OWNER, 'VYVY Boutique', 'VYVY Boutique', '<strong>VYVYBoutique</strong> trân thành cảm ơn ' . $name . ' đã quan tâm và ủng hộ cửa hàng. 
					Tin nhắn của quý khách sẽ được trả lời trong vòng 24 giờ thông qua email. Xin trân trọng cảm ơn. ')) {
		//Send emal to owner
		 	smtpmailer(
					OWNER, 
					$email, 
					$email, 
					'Y Kien Khach Hang', 
					'<strong>Nội dung tin nhắn của khách hàng:</strong> '.$message. '<br><strong>Người gửi:</strong> '.$name. 
					'<br><strong>Email của người gửi: </strong>' .$email);				 
			header("Location: " . BASE_URL .  "contact/?status=thanks");
			exit;
		} else {
			$error_message = "Đã có lỗi xảy ra trong quá trình gửi email. Xin quý khách vui lòng thử lại.";
		}
		
		
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


?>

<?php 
$page_title='Liên Hệ | Pure White';
include(ROOT_PATH . 'inc/header.php'); 
?>

	<div class="container">
		
		<ol class="breadcrumb">
  		<li><a href="<?php echo BASE_URL; ?>">Trang Chủ</a></li>
  		<li class="active">Liên Hệ</a></li>
		</ol>	
		<div class="row">
			<div class="col-xs-12 col-sm-5">
				<div class="panel panel-success">
					<div class="panel-heading">
  					<h3 class="panel-title"><img src="<?php echo BASE_URL; ?>img/phone-square.png">&nbsp;Liên Hệ Sĩ Lẻ Mỹ Phẩm</h3>
					</div>
					<div class="panel-body panel-contact">
  					<h4><strong>VY VY Boutique</strong><br></h4>
  					<i>Địa Chỉ:</i> 7 Phan Chu Trinh-P.Xương Huân-Nha Trang-Khánh Hòa<br>
  					<i>Điện Thoại:</i> 01687520700<br>
  					<i>Email:</i> <a href="mailto:teresangocvy@gmail.com">teresangocvy@gmail.com</a><br>
  					<i>Trang Cá Nhân:</i><a href="https://www.facebook.com/cobengocvydethuongnhinhanh"> /cobengocvydethuongnhinhanh</a><br>
  					<i>Cửa Hàng:</i><a href="https://www.facebook.com/VYVYBoutique.beautiful"> /VYVYBoutique.beautiful</a><br>
  					<ul class="icon-bar-contact">
  						<li><a href="https://www.facebook.com/VYVYBoutique.beautiful?ref=br_rs"><img src="<?php echo BASE_URL; ?>img/facebook-icon.png" alt="facebook-icon"></a></li>
  						<li><a href="#"><img src="<?php echo BASE_URL; ?>img/zalo-icon.jpg" alt="zalo-icon"></a></li>
  						<li><a href="#"><img src="<?php echo BASE_URL; ?>img/viber-icon.png" alt="viber-icon"></a></li>
  					</ul>
					</div><!-- End panel body -->
				</div><!-- End Panel heading -->
			</div><!-- End first column -->

			<div class="col-xs-12 col-sm-7">
			 	<div class="panel panel-success">
			 		<div class="panel-heading">
			 			<h3 class="panel-title"><img src="<?php echo BASE_URL; ?>img/comments.png" alt="comments-icon">&nbsp;Phản Hồi - Góp Ý</h3>
			 		</div>
			 		<div class="panel-body">
			 			<?php 
			 			//use "status" variable to check whether should show the form or the thank you message.
			  		//checks if the "status" variable has the "thanks" value -> show the thank you message 
			  		//else -> show the form.
			  		//isset: check the variable exists or not
			 			if (isset($_GET["status"]) and $_GET["status"] == "thanks") { ?>
			 				<div class="alert alert-warning" role="alert"> 
			 					<p>Cảm ơn quý khách đã giúp đỡ và hoàn thiện cửa hàng. 
			 						Câu hỏi và ý kiến của quý khách sẽ được trả lời trong vòng 24 giờ thông qua email.
			 						Trở về <a href="<?php echo BASE_URL; ?>">Trang Chủ</a>
			 					</p>
			 				</div> 
			 			<?php } else { ?>
			 				 <?php
                    if (isset($error_message)) {
                       echo '<p class="error">' . $error_message . '</p>';
                    }
                ?>

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
<?php include(ROOT_PATH . "inc/footer.php"); ?>