<?php
session_start();
//connect to DBMS			
error_reporting(0);
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
	//submit
						if(isset($_REQUEST['Submit']))
												{
												if($_REQUEST['id']=='')
												{
													$e="Please enter some value"; 
													echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
													die;
												}
													$id=$_REQUEST['id'];
													if($id!=="")
													{
													$query="select * from rating where id like '$id' and  stage LIKE 'message on hold' ";

														$da = mysqli_query($conn,$query);
														$total=mysqli_fetch_assoc($da);
														 $name=$total['username'];		
														 $area=$total['area'];
														 $data=$total['story'];
														 $way=$total['photo'];
														 $_SESSION['id']=$id;
													}
												}			
//change view						
						if(isset($_REQUEST['Submit_review']))
						{					
												if($_REQUEST['select']=='')
												{
													$e="Please enter some value"; 
													echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
													die;
												}
												$select=$_REQUEST['select'];
												if($select!='')
												{
												$id=$_SESSION['id'];
													$query="update rating set stage='$select' where id like '$id'"; 
												
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
            <title>Unauthorised Review</title>
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
							<nav class="navbar navbar-expend-lg navbar-light bg-dark">
								<font face="segoe script"size="4px"color="white">Salasar Art & Craft</font>
							</nav>
		<!--container-->
							<div class="container">
				<!--1row-->		<br>
								<div class="row">
										<div class="col-lg-12 text-center">
										<label><font color="red"size="5px"face="segoe script"> <u>Customer side Sending unauthorised Review </u></font> </label>
										</div>
								</div>
				<!--2row-->		<br>
								<div class="row">
									<div class="col-lg-6 text-center">
										<table class="table table-striped">
										<font color="red" size="5px" face="segoe script">New Message</font>	
											<font size="4px">
											<tr><th> Review Id</th><th>Name</th><th>Area</th></tr>	
													<?php
										$query=mysqli_query($conn,"SELECT * FROM rating where Stage LIKE 'message on hold';");
													while($roa = mysqli_fetch_array($query)){
													echo "<tr><td>";echo $id=$roa['id'];
													echo "</td><td>";echo $name=$roa['username']; 
													echo "</td><td>";echo $area=$roa['area'];   
													echo "</td></tr>";
													}
												?>
												</font>
										</table>
									</div>
										
									<div class="col-lg-6 text-center">
										<form name="review" method="POST" action="unauthorised.php" enctype="multipart/form-data">
											<font  color="red" size="3px">Enter Review Id  to search Message</font>
												<br>
											<label><b> Message Id </b></label>
												<input type="text" class="form-control" name="id" placeholder="Enter Message id" required>
													<br>
												<input type="submit" class="btn btn-primary btn-md btn-block" name="Submit" value="Submit">	
										</form>
													
										<form name ="review2" method="POST" action="unauthorised.php" enctype="multipart/form-data">
																				
											<img src="<?php echo $way ?>"  width="150px" height="150px" class="rounded-circle"><br>
											<label><b>Photo </b></label>
									
											<label><b>username </b></label>
											<input type="text" class="form-control" name="user" value="<?php echo $name ?>" placeholder="enter name" required>
											<br>
											<label><b>Area </b></label>
											<input type="text" class="form-control" name="area" value="<?php echo $area ?>" placeholder="enter area" required>
											<br>
											<label><b> Story </b></label>
											<textarea class="form-control" placeholder="message*" name="data"  rows="4" required><?php echo $data ?></textarea>
											<br>
											<label><b> Select stage</b>  </label>
											<select name="select" class="form-control">
												<option name="work successful" value="work successful">Authorised</option>
												<option name="message on hold" value="message on hold">Unauthorised</option>
											</select>
											<small><font color="red"><b>Select both of in to one which is correct</b> </font></small>
											<br><br>
											<input type="submit" class="btn btn-block btn-primary" name="Submit_review" value="Submit Review">
								</form>
											</div>	
								</div>
							</div>	
							
														
</body>
</html>							