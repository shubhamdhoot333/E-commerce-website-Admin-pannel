<?php
error_reporting(0);
//connect to DBMS			
				$server="localhost";
				$user="root";
				$pass="";
				$dbname="subu";
				$conn=mysqli_connect($server,$user,$pass,$dbname);
	//server connect					
						if(!$conn)
							{
							$e="not connect with server";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							}
						else 
							{
							 "connect with server";
							}
			//submit button				
							if(isset($_REQUEST['Submit']))
							{
						$filename = $_FILES["file1"]["name"];
						$tempname = $_FILES["file1"]["tmp_name"];
						$filetype = $_FILES["file1"]["type"];
					
					if($filetype=="image/jpeg" or $filetype=="image/jpg" or $filetype=="image/png")
					{
						$folder1 = "../imagefolder/".$filename;
						if(move_uploaded_file($tempname,$folder1))
						{
						 "file upload<br>";
						}
					else{
						$e="image1 cannot upload";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							die;
						}	
					}	
			
						$filename = $_FILES["file2"]["name"];
						$tempname = $_FILES["file2"]["tmp_name"];
						$filetype = $_FILES["file2"]["type"];
					if($filetype=="image/jpeg" or $filetype=="image/jpg" or $filetype=="image/png")
					{
						$folder2 = "../imagefolder/".$filename;
						if(move_uploaded_file($tempname,$folder2))
						{
						 "file upload<br>";
						}
					else{
						$e="image2 cannot upload";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							die;

						}	
					}

						$filename = $_FILES["file3"]["name"];
						$tempname = $_FILES["file3"]["tmp_name"];
						$filetype = $_FILES["file3"]["type"];
					if($filetype=="image/jpeg" or $filetype=="image/jpg" or $filetype=="image/png")
					{
						$folder3 = "../imagefolder/".$filename;
						if(move_uploaded_file($tempname,$folder3))
						{
						 "file upload<br>";
						}
					else{
						$e="image3 cannot upload";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							die;
						}	
					}
					
					$query1="update sliderimage set photo1='$folder1' ,photo2='$folder2' , photo3='$folder3' "; 
			
					if(mysqli_query($conn,$query1))
						{  
							$e="Work Complete";
							echo '<script type="text/javascript">alert("congres : ' . $e . '")</script>';
							die;

							
						}
					else 
						{
								mysqli_error($conn);
							
						}
					
					
					
				}





?>


<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>slider image </title>
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
		<!--1 navbar-->				
							<nav class="navbar navbar-expend-lg navbar-light bg-dark ">
								<font face="segoe script" size="4px"color="white">Salasar Art & Craft</font>
							</nav>
							
		<!--container-->
							<div class="container">
								<br><br>
								<form name="update" method="POST" action="slider.php" enctype="multipart/form-data">
						<!--1row-->		
									<div class="row">
										<div class="col-lg-12 text-center">
											<font  face="segoe script" color="red" size="6px"><b>Change Slider Image</b></font>
										</div>
									</div>
						<!--2row-->		<br>
									<div class="row">
										<div class="col-lg-4">
											<label><b>  First Photo</b></label>
												<input type="file" class="form-control" name="file1" required>
										</div>
										
										<div class="col-lg-4">
											<label> <b> Second Photo </b></label>
												<input type="file" class="form-control" name="file2"  required>
										</div>
										
										<div class="col-lg-4">
											<label> <b> Third Photo</b> </label>
												<input type="file" class="form-control" name="file3"  required>
										</div>
									</div>
						<!--3row-->	<br><br>	
									<div class="row">
										<div class="col-lg-4"></div>	
										<div class="col-lg-4 text-center">
											<input type='submit' name="Submit" value="Submit" class="btn btn-primary btn-block" >
										</div>
										<div class="col-lg-4"></div>
									</div>
								</form>
							</div>								
</body>
</html>									
								



							