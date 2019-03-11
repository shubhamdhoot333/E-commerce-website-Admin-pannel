<?php
include 'loginphp.php';	
  $str=$_COOKIE['shubham'];
$a= explode(",",$str);
 $email=$a[0];
 $pass=$a[1];
?>				
<html>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
            <title>login form</title>
		<!--linking part-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!--font awesome-->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
						   <style>
		      
		   .inputwithicon input[type=email]
				{
			padding-left:40px;
				}
			
			.inputwithicon input[type=password]
				{
			padding-left:40px;
				}
	
			.inputwithicon
				{
			position:relative;
				}
			
			.inputwithicon i
				{
			position:absolute;
			left:3px;
			top:2px;
			padding:9px 8px;
			color:blue;
			transition:3s;
				}
		   </style>
	</head>
<body>
	
		<div class="container">
				
			<br>
			<form method="POST" action="login.php" enctype="multipart/form-data">
				<fieldset>
							<legend align="center"<font face="segoe script">LOGIN PAGE</font></legend>
							<legend align="center"><i class="fa fa-user-circle" style="font-size:100px"></i></legend>
								<font face="segoe script" size="5px"><center>Please Sign in</center></font>
			<!--1 row-->						
							<div class="row">
								<div class="col-lg-3"></div>
								<div class="col-lg-6">
									<label><font face="segoe script">Email</font></label>
										<div class="inputwithicon">
											<input type="email" class="form-control" name="Email" placeholder="Enter your Email" value="<?php echo $email; ?>" required autofocus>
											
											<i class="fa fa-envelope fa-lg fa-fw"></i>
										</div>
								</div>
								<div class="col-lg-3">
								</div>
							</div>
			<!--2 row-->				
							<div class="row">
								<div class="col-lg-3"></div>
								<div class="col-lg-6">
									<label><font face="segoe script">Password</font></label>
										<div class="inputwithicon">
											<input type="password" class="form-control" value="<?php echo $pass; ?>" name="Password" max=8 min=8 placeholder="Enter your Password" required>
												<i class="fa fa-key fa-lg fa-fw"></i>
										</div>
								</div>
								<div class="col-lg-3">
								</div>
							</div>
			<!--3 row-->							
								<br>
							<div class="row">
								<div class="col-lg-5"></div>
								<div class="col-lg-2 text-center">
								<label>
									<input type="checkbox" name="remember" value="remember-me"> <font face="segoe script">Remember me</font>
								</label>
								</div>
								<div class="col-5">
								</div>
							</div>
			
			<!--4 row-->						
							<div class="row">
								<div class="col-lg-4"></div>
								<div class="col-lg-4">
									<input type="submit" class="btn btn-primary  btn-block" name="Submit" value="Submit">	
								</div>
								<div class="col-lg-4">
								</div>
							</div>
						<br>	
												
						<div class="row">
							<div class="col-lg-4"></div>
							<div class="col-lg-4">
							<font face="segoe script"><a href="forgot.php" class="btn btn-md btn-block btn-primary">Forgot password</a></div>
								<br><br><br>
							<div class="col-lg-4">
							
							</div>
							
						</div>
				</fieldset>
			</form>
		</div>
	</body>
</html>
