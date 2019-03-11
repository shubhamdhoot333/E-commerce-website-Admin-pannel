<?php
session_start();
error_reporting(0);
//connect to DBMS			
				$server="localhost";
				$user="root";
				$pass="";
				$dbname="subu";
				$conn=mysqli_connect($server,$user,$pass,$dbname);
						
						if(!$conn)
							{
							$e="not connect with server";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							}
						else 
							{
						 "connect with server";
							}
							
	//submit stage			
				if(isset($_REQUEST['Submit']))
						{
						if($_REQUEST['id']=='')
							{
								$e="Please enter some value"; 
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;
							}
										$id=$_REQUEST['id'];
										if($id!=='')
							{

										$query="select * from message where id like '$id' and  company_review LIKE 'message on hold' ";
									
										$da = mysqli_query($conn,$query);
										$total=mysqli_fetch_assoc($da);
										 $email=$total['email'];		
										$message=$total['message'];
										$_SESSION['id']=$id;
								}
						}			
//edit data						
						if(isset($_REQUEST['Submit_review']))
						{					
												if($_REQUEST['select']=='')
												{
													$e="Please enter some value"; 
													echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
													die;
												}
												$select=$_REQUEST['select'];
												$id=$_SESSION['id'];
												if($select!='')
												{
													$query="update message set company_review='$select' where id='$id'"; 
												
												if(mysqli_query($conn,$query))
													{  
												$e="Edit succesfull";
												echo '<script type="text/javascript">alert("thankyou for responce : ' . $e . '")</script>';
													}
												else 
													{
												echo mysqli_error();
													}	
												}
						}
?>
<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Contact us</title>
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
								<font face="segoe script"size="3px"color="white">Salasar Art & Craft</font>
						</nav>
		<!--container-->
							<div class="container">
				<!--1row-->		<br>
								<div class="row">
										<div class="col-lg-12 text-center">
										<label><font color="red"size="5px"face="segoe script"> <u>Customer side Sending Message </u></font> </label>
										</div>
								</div>
				<!--2row-->		<br>
								<div class="row">
									<div class="col-lg-6">
										<table class="table table-striped">
											<font color="red" size="5px" face="segoe script">Hold Message</font>
											<font size="4px">	
											<tr><th> Message Id</th><th>Name</th><th>Mobile No</th></tr>
												<?php
										$query=mysqli_query($conn,"SELECT * FROM message where company_review LIKE 'message on hold';");
													while($roa = mysqli_fetch_array($query)){
													echo "<tr><td>";echo $id=$roa['id'];
													echo "</td><td>";echo $name=$roa['name']; 
													echo "</td><td>";echo $mobile=$roa['mobile'];   
													echo "</td></tr>";
													}
												?>
											</font>
										</table>
									</div>
																		
									<div class="col-lg-6 text-center">
										<form name="search_messgae" method="POST" action="hold_message.php" enctype="multipart/form-data">
											<font  color="red" size="3px">Enter  Hold message Id  to search Message</font>
												<br>
											<label><b> Message Id </b></label>
												<input type="text" class="form-control" name="id" placeholder="Enter Message id" required>
													<br>
												<input type="submit" class="btn btn-primary btn-md btn-block" name="Submit" value="Submit">	
										</form>	

									<form name ="search2" method="POST" action="hold_message.php" enctype="multipart/form-data">
										
									
											
											<label><b> Email </b></label>
											<input type="email" class="form-control" name="email" value="<?php echo $email ?>" placeholder="name@example.com*" required>
											<br>
											<label><b> Message </b></label>
											<textarea class="form-control" placeholder="message*" name="data"  rows="4" required><?php echo $message ?></textarea>
											<br>
											<label><b> Select stage</b>  </label>
											<select name="select" class="form-control">
												<option name="message on hold" value="message on hold">Message on hold</option>
												<option name="work successful" value="work successful">Work successful</option>
											</select>
											<small><font color="red"><b>Select both of in to one which is correct</b> </font></small>
											<br><br>
											<input type="submit" class="btn btn-block btn-primary" name="Submit_review" value="Submit Review">
								  </form>
										
									</div>	
								</div>	
</body>
</html>								
								