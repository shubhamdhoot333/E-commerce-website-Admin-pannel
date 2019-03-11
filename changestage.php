<?php
include 'changestepphp.php';	
?>
<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Change Stage</title>
			<!--link-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!--jquery-->	
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
			<script>
				$(document).ready(function(){
				$("#b1").hide();
				$("#a1").on("click", function(){
				$("#b1").toggle();
				});
				});
				
				$(document).ready(function(){
				$("#y1").hide();
				$("#x1").on("click", function(){
				$("#y1").toggle();
				});
				});
</script>

</head>
<body>
		<!--1 navbar-->				
							<nav class="navbar navbar-expend-lg navbar-light bg-dark ">
								<font face="segoe script"size="4px"color="white">Salasar Art & Craft</font>
							</nav>
		<!--1row-->			<br>
						<div class="container">
							<div class="row">
								<div class="col-lg-3"></div>
								<div class="col-lg-6 text-center">
									<form name="change stage" method="POST" action="changestage.php" enctype="multipart/form-data">
											<font face="segoe script" color="red" size="5px">Enter invoice no </font>
												
												<input type="text" class="form-control" name="id" placeholder="Enter Invoice no" required>
								</div>
								<div class="col-lg-3"></div>
							</div>
		<!--2row-->								
							<div class="row">
								<div class="col-lg-4"></div>
								<div class="col-lg-4">
								<input type="submit" class="btn btn-primary btn-md btn-block" name="Submit" value="Submit">	
								
								</div>
								<div class="col-lg-4"></div>
									</form>	
							</div>	
		<!--3row-->					
							<br><br>
							<div class="row">
									<div class="col-lg-1"></div>
									<div class="col-lg-5 text-center">
									<form name="stage" method="POST" action="changestage.php" enctype="multipart/form-data">
										<font face="segoe script" color="red" size="5px">Change Stage of Order </font>
										<button id="a1" type="button" class="btn btn-primary btn-block"><font size="4px">Select stage of Order </font></button>
											<br>
											<div id="b1">
											<select  name="select" class="form-control">
												<option name="work in progress" value="work in progress">work in progress</option>
												<option name="shipping" value="shipping">shipping</option>
												<option name="success" value="success">success</option>
											</select>
											<br>
											<input type="submit" class="btn btn-md btn-primary" name="Submit_stage" value="Submit stage">
										</div>
								</form>
								</div>
								
								<div class="col-lg-6 text-center">
									<font face="segoe script" color="red" size="5px">View Invoice </font>
									
								<?php	echo "<a href='pdf.php?value=$invoice' class='btn btn-primary btn-block'>See Full View</a>";?>
																
								</div>
						</div><br>
						<div class="row">
							<div class="col-lg-4"></div>
							<div class="col-lg-4 text-center">
										<font face="segoe script" color="red" size="5px">See  invoice Number </font>
								<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">
									Invoice which stage not chage
								</button>
							</div>
							<div class="col-lg-4"></div>
								
								
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Invoice which stage not chage</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
													</button>
											</div>
											<div class="modal-body">
												<table class="table table-striped">
												<tr> <th>Invoice no</th><th>Name</th> <th> Date(yy-mm-dd)</th> <th> Quantity</th> </tr>
												<?php
												$result=mysqli_query($conn,"SELECT invoice_no,date1,name,cost,quantity FROM order_table where stage=''  order by date1 desc");
														while($row = mysqli_fetch_array($result)){
													echo "<tr><td>";    echo $invoice_no=$row['invoice_no']; 
													echo "</td><td>";   echo $name=$row['name'];   
													echo "</td><td>";   echo $date=$row['date1'];
													echo "</td><td>";   echo $quantity=$row['quantity']; 	
													echo "</td></tr>";
													}
															
												?>
												</table>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												
											</div>
										</div>
									</div>
								</div>
								
						</div>
						
</body>
</html>							