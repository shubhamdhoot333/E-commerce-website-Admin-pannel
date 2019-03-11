<?php
error_reporting(0);
		if(isset($_POST['Submit']))
	{
		header('location:admin.php');
		require 'PHPMailerAutoload.php';
	

		$mail = new PHPMailer;

		$mail->SMTPDebug = 4;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'shreesalasarartandcraft@gmail.com';                 // SMTP username
		$mail->Password = '03032000s';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom('shreesalasarartandcraft@gmail.com','salasar');
		$mail->addAddress($_POST['email']);     // Add a recipient
													// Name is optional
		$mail->addReplyTo('shreesalasarartandcraft@gmail.com');



		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = $_POST['subject'];
		$mail->Body    = $_POST['content'];
		$mail->AltBody = '';

		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			echo 'Message has been sent';
			}

	}
?>




<html>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
            <title>Feed Back</title>
		<!--linking part-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!--font awesome-->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
<!--1 navbar-->				
							<nav class="navbar navbar-expend-lg navbar-light bg-dark">
								<font face="segoe script"size="4px"color="white">Salasar Art & Craft</font>
							</nav>
	
	<div class="container">
		<br>
			<form method="POST" action="mail.php" enctype="multipart/form-data">
		<!--row2-->	
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6 text-center">
					<label><font size="5px">Feedback Form</font></label>
					
				</div>
				<div class="col-lg-3"></div>
			</div>
		<br>
		<!--row1-->	
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<label><font face="segoe script">Email</font></label>
					<input type="email" class="form-control" name="email" placeholder="Enter your Email" required autofocus>
				</div>
				<div class="col-lg-3"></div>
			</div><br>
			<!--2 row-->				
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<label><font face="segoe script">Subject</font></label>
						<input type="text" class="form-control" name="subject"  placeholder="Enter your email subject" required>
				</div><br>
				<div class="col-lg-3"></div>
			</div><br>
			<!--3row-->		
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<label><font face="segoe script">content</font></label>
					<textarea class="form-control" name="content" rows="5" required ></textarea>
				</div>
				<div class="col-lg-3"></div>
			</div><br>
			<!--4row-->		
			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
					<input type="submit" class="btn btn-primary  btn-block" name="Submit" value="Submit">	
				</div>
				<div class="col-lg-4"></div>
			</div>
</form>
</body>
</html>				
					