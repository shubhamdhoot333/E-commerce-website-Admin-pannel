<?php
error_reporting(0);
	//1 connect to datatbase		
				$server="localhost";
				$user="root";
				$pass="";
				$dbname="subu";
				$conn=mysqli_connect($server,$user,$pass,$dbname);
					if(!$conn)
						{
						echo " not connect with server ";
						echo "<br>";
						}
					else 
						{
						"connect with server";
						
						}
	//2data code		
					if(isset($_POST['Submit']))
						{
							if($_POST['email']=="")
							{
								echo "Enter email";
								die;
							}
						$Email=$_POST['email'];
	// check email validation					
					if(!filter_var($Email,FILTER_VALIDATE_EMAIL)===false)
							{
							echo "email address  formate is valid <br>";
							}
						else 
							{
								$e="email not valid<br>";
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;	
							}	
						
						$result = "select * from customer1 where Email='$Email'";
						$query5=mysqli_query($conn,$result);
						$roa = mysqli_fetch_array($query5);
						$pass = $roa['Password']; 
						$email = $roa['Email'];
						 $pass;
						if($pass!='')
						{
						header('location:login.php');
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

						$mail->setFrom('shreesalasarartandcraft@gmail.com', 'salasar art and craft');
						$mail->addAddress($_POST['email']);     // Add a recipient
													// Name is optional
						$mail->addReplyTo('shreesalasarartandcraft@gmail.com');

						$mail->isHTML(true);                                  // Set email format to HTML

						$mail->Subject = ' Password Link';
						$mail->Body   = '<font size="5px">Your Email Address '.  $email . '</font><br>
										<br><font size="5px">Your Password :'.  $pass . '</font><br>
										<br><br><font color="red">
										After see password please delete this mail so that other person cannot view it</font>';
									
						$mail->AltBody = '';

						if(!$mail->send()) 
						{
								echo 'Message could not be sent.';
								echo 'Mailer Error: ' . $mail->ErrorInfo;
						}
						else 
						{
								echo 'Message has been sent';
						}
						
					}									
						}
?>

<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Forgot Password</title>
			<!--link-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<!--font awesome-->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">				
			</head>
<body>
			
			<!--nav-->			
						<nav class="navbar navbar-expend-lg navbar-light bg-dark ">
								<font face="segoe script"size="3px"color="white"><b>Salasar Art & Craft</b></font>
					</nav>
			<!--container-->
			<br><br><br>
						<div class="container">
							<div class=" border-top border-bottom border-dark bg-secondary">	
				<!--1row-->				
								<div class="row">
									<div class="col-2"></div>
									<div class="col-lg-8 text-center">
									<font face="segoe script" color="white">
										<h1 class="h1">Forgot Password</h1>
									</font>
									</div>
									<div class="col-2"></div>
								</div>
							</div>
							<br><br>
				<!--2row-->				
								<div class="row">
									<div class="col-2"></div>
									<div class="col-lg-8 text-center">
									<h5 class="h5">To reset your password, please enter your website login Email.</h5> 
									</div>
									<div class="col-2"></div>
								</div>
				<!--3row-->				
								<div class="row">
									<div class="col-2"></div>
									<div class="col-lg-8 text-center">
									<h5 class="h5"> We will send the password link to your email address for this account. </h5> 
									</div>
									<div class="col-2"></div>
								</div>
				<!--4row-->		<form method="POST" action="forgot.php">		
								<div class="row">
									<div class="col-4 ">
									</div>
									<div class="col-lg-4 text-center">
									<h4 class="h4"><label><font>Email:</font></label></h4>
									</div>
									<div class="col-4"></div>
								</div>
				<!--5row-->				
								<div class="row">
									<div class="col-3 text-center">
									</div>
									<div class="col-lg-6 text-center">
										<input type="email" class="form-control" name="email" placeholder="Enter your Email" required>
									</div>
									<div class="col-3"></div>
								</div>
				<!--6row-->		<br>		
								<div class="row">
									<div class="col-3 "></div>
									<div class="col-lg-6 text-center">
										<input type="submit" class="btn btn-md btn-block btn-primary"name="Submit" value="Submit">
									</div>
									<div class="col-3"></div>
								</div>
								</form>
						
						</div>						
</body>
</html>