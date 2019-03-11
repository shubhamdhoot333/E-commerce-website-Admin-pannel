<?php
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

?>
<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Set offers</title>
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
										<label><font color="red"size="5px"face="segoe script"> <u>Here you can update offers </u></font> </label>
										</div>
								</div>
				<!--row-->		
								<br>		
								<div class="row">
					<!--col-4-->				
									<div class="col-lg-4 text-center">
								 <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
									See Offer Id And Stage
								</button>
									<div class="collapse" id="collapseExample">
										<div class="card card-body">
												<table class="table table-striped">
													<tr><th>Id</th> <th>Name</th> <th>stage</th> </tr>
												<?php
								$query=mysqli_query($conn,"SELECT * FROM offertable");
													while($roa = mysqli_fetch_array($query)){
													echo "<tr><td>";echo $id=$roa['id']; 
													echo "</td><td>";echo $name=$roa['offername'];   
													echo "</td><td>";echo $stage=$roa['stage'];   
													echo "</td></tr>";
								}
													?>

												
												
												
												</table>
										</div>
									</div>
									</div>
					<!--col-4-->				
									<div class="col-lg-4 text-center">
								 <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
									Change Offer Stage
								</button>
									<div class="collapse" id="collapseExample1">
										<div class="card card-body">
								<form name="search" method='POST' action="setoffer.php">
									<input class="form-control " type="text" name="search" placeholder="Enter Offer id">
									<br>
									<label> Offer Stage  </label>
										<select name="select" class="form-control" autofocus >
											<option name="active" value="active">Active</option>
											<option name="expire" value="expire">Expire</option>
										</select>	
									<br>
									<input type="submit" class="btn btn-primary btn-md btn-block" name="Submit" value="Submit">	
								</form>
										
										
										</div>
									</div>
									</div>
					<!--col-4-->				
								<div class="col-lg-4 text-center">
								 <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
									Make New Offer
								</button>
									<div class="collapse" id="collapseExample2">
											<div class="card card-body">
												<form name="search" method='POST' action="setoffer.php">
												<label><b>Discount In Percent</b></label>
													<input type="number"  name="percent"  class="form-control" placeholder="10%" value="number">
													<br>	
													<label><b>Offer Name</b></label>
													<input type="text" class="form-control" name="offername" placeholder="offer name" >
													<br>
													<label><b>Promo code</b></label>
													<input type="text" class="form-control" name="promo" placeholder="promo code" >
													<br>
													<label><b>Limit of Amount</b></label>
													<input type="text" class="form-control" name="limit" placeholder="1000" >
													<br>
													<input type="submit" class="btn btn-primary btn-md btn-block" name="Submit1" value="Submit">	

												</form>	
										</div>
									</div>
									</div>
								
									
									
									
									
									
</body>
</html>								
<?php	
							if(isset($_REQUEST['Submit']))
									{
										if($_REQUEST['search']=="" or  $_REQUEST['select']=="" )
									{
								$e="enter some text in textbox";
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
 								die;
									}								
								 $search=$_POST['search'];
								 $select=$_POST['select'];
									
									$query1="update offertable set stage='$select' where id like '$search' "; 
										if(mysqli_query($conn,$query1))
										{  
											 
											$e="Edit succesfull";
												echo '<script type="text/javascript">alert("congres: ' . $e . '")</script>';

										}
										else 
										{
												$e="enter id not correct";
												echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
												die;
									
										}
						
									}	
		//new offer
									if(isset($_REQUEST['Submit1']))
									{
										if($_REQUEST['percent']=="" or  $_REQUEST['offername']==""  or  $_REQUEST['limit']==""  or  $_REQUEST['promo']=="" )
									{
								$e="enter some text in textbox";
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
 								die;
									}								
								 $p=$_POST['percent'];
								 $o=$_POST['offername'];
								 $l=$_POST['limit'];
								 $po=$_POST['promo'];		
								$p_length=strlen($p);
								$o_length=strlen($o);
								$l_length=strlen($l);		
								$po_length=strlen($po);
								
						if($p_length>4)
						{
						$e="enter valied percentage ";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
						
						if($o_length>40)
						{
						$e="enter valied offer name ";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
						
						if($l_length>8)
						{
						$e="enter valied amount length ";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
						if($po_length>10)
						{
						$e="enter valied amount length ";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}		
		//run sql query					
						$query="INSERT INTO offertable(offersize,offername,limitamount,stage,promo) 
													VALUES('$p','$o','$l','active','$po')"; 		
						if(mysqli_query($conn,$query))
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