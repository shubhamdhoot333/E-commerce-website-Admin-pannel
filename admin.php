<?php
include 'adminphp.php';	
error_reporting(0);
?>	

<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Admin pannel </title>
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
							<nav class="navbar navbar-expend-lg navbar-light bg-secondary ">
								<font face="segoe script"size="4px"color="white">Salasar Art & Craft</font>
							</nav>
		<!--2 navbar-->	
							<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">			
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmenu" aria-controls="navbarmenu" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
									<font face="segoe script" size="4px">Dashboard Menu</font>
								</button>	
									
									<div class="collapse navbar-collapse" id="navbarmenu">
									<ul class="nav nav-pills" id="myTab" role="tablist">
										<li class="nav-item">	
					<!--1dashboard-->					
										<a class="nav-link mr-4 active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true" >
												<font face="segoe script" color="white"><h5 class="h5">Dashboard</h5></font>
											</a>
										</li>
					<!--2Add product-->					
										<li class="nav-item">
											<a class="nav-link mr-4 " id="managead-tab" data-toggle="tab" href="#managead" role="tab" aria-controls="managead" aria-selected="true">
										     	<font face="segoe script"color="white"><h5 class="h5">Add Product</h5></font>
											</a>
										</li>
					<!--3message-->					
										<li class="nav-item">
											<a class="nav-link mr-4 " id="customer-tab" data-toggle="tab" href="#customer"  role="tab" aria-controls="customer" aria-selected="true">
											     <font face="segoe script" color="white"><h5 class="h5">Message & chat</h5></font>
											</a>
										</li>
					<!--4Setting-->					
										<li class="nav-item">
											<a class="nav-link mr-4 "id="point-tab" data-toggle="tab" href="#point" role="tab" aria-controls="point"    aria-selected="true">
											     <font face="segoe script" color="white"><h5 class="h5">Product Setting</h5></font>
											</a>
										</li>
					<!--5Setting-->					
										<li class="nav-item">
											<a class="nav-link mr-4 " id="report-tab" data-toggle="tab" href="#report" role="tab" aria-controls="report" aria-selected="true">
												<font face="segoe script"color="white"><h5 class="h5">Layout Setting</h5></font>
											</a>
										</li>
					<!--6order setting-->					
										<li class="nav-item">
											<a class="nav-link mr-4 " id="summary-tab" data-toggle="tab" href="#summary"  role="tab" aria-controls="summary" aria-selected="true">
											   <font face="segoe script"color="white"><h5 class="h5">Order Setting</h5></font>
											 </a>
										</li>
									</ul>	
									</div>	
							</nav>
					<div class="tab-content" id="myTabContent">
		<!-- 1Dashboard-->	
						<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">					
							<div class="jumbotron">
		<!--container-->						
								<div class="container">
					<!--row-->				
									<div class="row">
										<div class="col-lg-12 text-center">
											<font color="red" size="6px" face="segoe script"><label><u>Web Status</u></label></font> 
										</div>
									</div>	
					<!--2row-->				
									<div class="row">
											<div class="col-lg-3 text-center">
												<div class="badge  badge-primary rounded">		
													<h6 class="h5 mr-5 mt-1 ml-5"><label>Total User</label></h6>	
													<label><h4 class="h4"><?php echo $n; ?></h4></label>
												</div><br><br>	
											</div>
												
											<div class="col-lg-3 text-center">
												<div class="badge  badge-primary rounded">		
													<h6 class="h5 mr-5 mt-1 ml-5"><label>Total Product</label></h6>	
													<label><h4 class="h4"><?php echo $n1; ?></h4></label>
												</div><br><br>
											</div>
												
											<div class="col-lg-3 text-center">
													<div class="badge  badge-primary rounded">		
													<h6 class="h5 mr-5 mt-1 ml-5"><label>Total Order</label></h6>	
													<label><h4 class="h4"><?php echo $n2; ?></h4></label>
													</div><br><br>
											</div>
											
											<div class="col-lg-3 text-center">
													<div class="badge  badge-primary rounded">		
													<h6 class="h5 mr-5 mt-1 ml-5"><label>Total Income</label></h6>	
													<label><h4 class="h4"><?php echo round($total); ?></h4></label>
													</div>
											</div>
											<br>
									</div>
					<!--3row-->		<br>			
										<div class="row">
											<div class="col-lg-6 text-center">
												<div class="text-center">
													<font color="red" size="5px" face="segoe script"><label><u>Order Status Bar</u></label></font>
												</div>
							<!--card-->					
												<div class="card">
													<table class="table table-striped">
													<br>
													
								<font size="3px">	<tr> <td>Stage</td>               <td>Quantity</td>                  <td>order</td>              </tr>
													<tr> <td><b>Total Order</b></td>   <td><?php echo $totalquan; ?></td> <td><?php echo $n2; ?></td> </tr>
													<tr> <td><b>Order(success)</b></td><td><?php echo $totalquansu; ?></td>  <td><?php echo $n3; ?></td></tr>
									</font>
													<tr><td class="text-center"><h5><font color="red"face="segoe script"><b>Working Record</b></font></h5></td> </tr>
								<font size="4px">	
													<tr><td><b>Work in Progress</b></td>   <td><?php echo $totalquanwo;?></td> <td><?php echo $n4;?></td> </tr>
													<tr><td><b>Delivered product</b></td>  <td><?php echo $totalquansi; ?></td> <td><?php echo $n5; ?></td> </tr>	
													<tr><td><b>Deliverd Successful</b></td> <td><?php echo $totalquansu; ?></td> <td><?php echo $n3; ?></td></tr>
									</font>
												</table>
												</div>
											</div>
												<br>
											<div class="col-lg-6">
												<div class="text-center">
													<font color="red" size="5px" face="segoe script"><label><u>Top 4 Selling Product</u></label></font>
												</div>
												<div class="card">
												<table class="table table-striped">
						<font size="4px">		<br>
													<tr><th>Name</th><th>Product Id</th><th>Cost</th><th>Total</th></tr>
															<?php
								$query=mysqli_query($conn,"SELECT product_id,cost,name, sum(quantity) as quantity FROM order_table GROUP BY product_id ORDER BY SUM(quantity) DESC LIMIT 5");
													while($roa = mysqli_fetch_array($query)){
													echo "<tr><td>";echo $name=$roa['name']; 
													echo "</td><td>";echo $cost=$roa['product_id'];   
													echo "</td><td>";echo $date=$roa['cost'];   
													echo "</td><td>";echo $stage=$roa['quantity']; 	
													echo "</td></tr>";
					//print_r($roa);
								}
															?>
												</font>
												</table>
												</div>
												</div>
										</div>
					<!--4row-->	    <br><br>
									<div class="row">
										<div class="col-lg-12 text-center">
											<font color="red" size="6px" face="segoe script"><label><u>Today Products Order</u></label></font>
										</div>
									</div>		
					<!--5row-->
									<div class="row">
										<div class="col-lg-12 text-left">
											<div class="card">
												<table class="table table-striped">
													<br>
						<font size="4px">			<tr><th>Invoice Number</th><th>Amount</th><th>Date(yy-mm-dd)</th><th>Status</th></tr>
													<?php
														$que=mysqli_query($conn,"SELECT invoice_no,cost,date1,stage FROM order_table where date1 like CURDATE()");
														while($ro = mysqli_fetch_array($que)){
													echo "<tr><td>"; 	echo $invoice_no=$ro['invoice_no'];    
													echo "</td><td>";   echo $cost=$ro['cost'];   
													echo "</td><td>"; 	echo $date=$ro['date1'];   
													echo "</td><td>";   echo $stage=$ro['stage'];    
													echo "</td></tr>";
														}
														?>
													</font>
												</table>
											</div>
										</div>
									</div>	
		<!--container close-->	</div>
							</div>
						</div>	
	
		<!--2add product-->	
						<div class="tab-pane fade" id="managead" role="tabpanel" aria-labelledby="managead">			
				<!--container-->
							<div class="container">
								<br><br>
								<form name="add" method="POST" action="admin.php" enctype="multipart/form-data">
						<!--row-->		
									<div class="row">
										<div class="col-lg-12 text-center">
										<label><legend align="center"><font color="red" face="segoe script" size="5px"><b><u>Product Add From </u></b></font></legend></label>
										</div>
									</div>	
						<!--2row-->			
									<div class="row">
										<div class="col-lg-6">
												<label> <b>Product Title </b> </label>
												<select name="select" class="form-control" autofocus >
													<option name="beds" value="beds">beds</option>
													<option name="bookshelve" value="bookshelve">bookshelves</option>
													<option name="chair" value="chair">chair</option>
													<option name="decor" value="decor">decor</option>
													<option name="otheritem" value="otheritem">otheritem</option>
													<option name="sideboard" value="sideboard">sideboard</option>
													<option name="sofas" value="sofas">sofas</option>
													<option name="storage" value="storage">storage</option>
													<option name="table1" value="table1">table1</option>
													<option name="wardrobes" value="wardrobes">wardrobes</option>
												</select>
										</div>
										
										<div class="col-lg-6">
												<label> <b>Product Id </b></label>
												<input type="number" class="form-control" name="id" placeholder="Enter product Id" required>
										</div>
								
									</div>
						<!--3row-->			
									<div class="row">
										<div class="col-lg-6">
												<label><b> Product Name </b></label>
												<input type="text" class="form-control" name="name" placeholder="Enter product name" required>
										</div>
										
										<div class="col-lg-6">
												<label><b>Product Cost</b></label>
												<input type="number" class="form-control" name="cost" placeholder="Enter product cost" required>
										</div>
								
									</div>
						<!--4row-->			
									<div class="row">
									<div class="col-lg-6">
												<label><b>Product image1</b></label>
												<input type="file" class="form-control" name="file1" placeholder="choose product file"  required>
										</div>
										
										<div class="col-lg-6">
											<label><b>Type of wood</b></label>
												<input type="text" class="form-control" name="wood"  placeholder="type of wood use in product" required>
										</div>
								
									</div>
						<!--5row-->			
									<div class="row">
										<div class="col-lg-4">
										<label><b>Product image2</b></label>
												<input type="file" class="form-control" name="file2" placeholder="choose product file"  required>
										<label><b>Product image3</b></label>
												<input type="file" class="form-control" name="file3" placeholder="choose product file"  required>		
										
										</div>
										<div class="col-lg-5">
													<label><b> Product Description </b></label>
								<textarea class="form-control" name="data" rows="4" placeholder="something special word..."></textarea>	
										</div>
										<div class="col-lg-3">
										<br><br><font color="red">*1.it in containe height*width*length
										<br>2.explain some product attribute which through product show beautiful.
										</font>
										</div>
									</div>
									
						<!--6row-->	<br>		
									<div class="row">
										<div class="col-lg-4"></div>
										<div class="col-lg-4 text-center">
										<input type="submit" class="btn btn-primary btn-md btn-block" name="Submit" value="Submit">	
										</div>
										<div class="col-lg-4"></div>
									</div>	
								</form>	
							</div>
						</div>
		<!--3message & chat-->
						<div class="tab-pane fade" id="customer" role="tabpanel" aria-labelledby="customer">
							<div class="jumbotron">
							<div class="container">
			<!--1row-->					
								<div class="row">
									<div class="col-lg-12 text-center">
										<font color="Red" size="5px" face="segoe script"><label><u>Contact us Message</u></label></font>
									</div>
								</div>		
			<!--2row-->
								<div class="row">
									<div class="col-lg-4 text-center">
										<div class="card">
											<div class="card-body">
												<label><h5 class="card-title">New Message  &nbsp&nbsp<span class="badge badge-light"> <?php echo $c4; ?> </span></h5> </label><br>
												<a href="new_message.php" class="btn btn-block btn-primary">See Message</a>
											</div>
										</div><br>	
									</div>
									<div class="col-lg-4 text-center">
										<div class="card">
											<div class="card-body">
												<label><h5 class="card-title">Hold Message  &nbsp&nbsp<span class="badge badge-light"> <?php echo $c5; ?> </span> </h5> </label><br>
												<a href="hold_message.php" class="btn btn-block btn-primary">See Message</a>
											</div>
										</div><br>
									</div>
									<div class="col-lg-4 text-center">
										<div class="card">
											<div class="card-body">
												<label><h5 class="card-title">Work successful  &nbsp&nbsp<span class="badge badge-light"> <?php echo $c6; ?> </span> </h5> </label><br>
												<a href="Complete_review.php" class="btn btn-block btn-primary">See Message</a>
											</div>
										</div><br>
									</div>
								</div>
			<!--3 row-->
								<div class="row">
									<div class="col-lg-12 text-center">
										<font color="Red" size="5px" face="segoe script"><label><u>Rating And Review Message</u></label></font>
									</div>
								</div>
			<!--4 row-->	
								<div class="row">
									<div class="col-lg-4 text-center">
										<div class="card">
											<div class="card-body">
												<label><h5 class="card-title">New Review&nbsp&nbsp<span class="badge badge-light"> <?php echo $c7; ?> </span>  </h5></label><br>
												<a href="newreview.php" class="btn btn-block btn-primary">See Message</a>
											</div>
										</div><br>	
									</div>
									<div class="col-lg-4 text-center">
										<div class="card">
											<div class="card-body">
												<label><h5 class="card-title">Unauthorised Review&nbsp&nbsp<span class="badge badge-light"> <?php echo $c8; ?> </span> </h5></label><br>
												<a href="unauthorised.php" class="btn btn-block btn-primary">See Message</a>
											</div>
										</div><br>
									</div>
									<div class="col-lg-4 text-center">
										<div class="card">
											<div class="card-body">
												<label><h5 class="card-title">Authorised Review&nbsp&nbsp<span class="badge badge-light"> <?php echo $c9; ?> </span></h5></label><br>
												<a href="authorised.php" class="btn btn-block btn-primary">See Message</a>
											</div>
										</div><br>
									</div>
								</div>
								<br>
		<!--3 row-->
								<div class="row">
									<div class="col-lg-12 text-center">
										<font color="Red" size="5px" face="segoe script"><label><u>Feedback to Message by Email</u></label></font>
									</div>
								</div>	
		<!--row-->
								<div class="row">
									<div class="col-lg-4 text-center"></div>
									<div class="col-lg-4 text-center">
											<div class="card">
											<div class="card-body">
												<label><h5 class="card-title">Feedback to Email</h5></label><br>
												<a href="mail.php" class="btn btn-block btn-primary">Give FeedBack</a>
											</div>
											</div>
									
									
									</div>
									<div class="col-lg-4 text-center"></div>
	
								
								</div>




							
						</div>	
						</div>
						</div>	
		<!--4Product seting-->					
						<div class="tab-pane fade" id="point" role="tabpanel" aria-labelledby="point">
							<div class="jumbotron">
								<div class="container">
			<!--1row-->
								<div class="row">
									<div class="col-lg-12 text-center">
										<font color="Red" size="5px" face="segoe script"><label><u>Product setting</u></label></font>
									</div>
								</div>
			<!--2row-->			
									<div class="row">
										
										<div class="col-lg-4 text-center">
										<br>
											<div class="card">
												<div class="card-body">
													<h5 class="card-title"><label>Product Update</label></h5>
													<a href="update.php" class="btn btn-block btn-primary">Update</a>
												</div>
											</div>
										</div>
										
										<div class="col-lg-4 text-center">
											<br>
											<div class="card">
												<div class="card-body">
													<h5 class="card-title"><label>Product Delete</label></h5>
													<a href="delete.php" class="btn btn-block  btn-primary">Delete</a>
												</div>
											</div>
										</div>
										
										<div class="col-lg-4 text-center">
											<br>
											<div class="card">
												<div class="card-body">
													<h5 class="card-title"><label>Product Search</label></h5>
													<a href="search.php" class="btn btn-primary btn-block ">Search</a>
												</div>
											</div>
										</div>
									</div>
		
								
			<!--close-->	</div>
							</div>
						</div>			
		<!--5Layout setting-->				
					
							<div class="tab-pane fade" id="report" role="tabpanel" aria-labelledby="report">
							<div class="jumbotron">
								<div class="container">
			<!--1row-->					
									<div class="row">
										<div class="col-lg-12 text-center">
											<font color="Red" size="5px" face="segoe script"><label><u> Main Page Change</u></label></font>
										</div>
									</div>
			<!--2row-->					
									<div class="row">
										<div class="col-lg-4 text-center">
											<div class="card">
												<div class="card-body">
													<label><h5 class="card-title">Slider Image</h5></label><br>
													<a href="slider.php" class="btn btn-block btn-primary">Change Image</a>
												</div>
											</div>
										</div>
											<br>
										<div class="col-lg-4 text-center">		
											<div class="card">
												<div class="card-body">
													<label><h5 class="card-title"> Set Offers</h5></label><br>
													<a href="setoffer.php" class="btn btn-block btn-primary">offers</a>
												</div>
											</div>		
										</div>
										<br>
										<div class="col-lg-4 text-center">		
										
										</div>
										
										</div>
									</div>	
								</div>
							</div>
		<!--6order stage-->					
						<div class="tab-pane fade" id="summary" role="tabpanel" aria-labelledby="summary">
							<div class="jumbotron">
								<div class="container">
			<!--1row-->
									<div class="row">
										<div class="col-lg-12 text-center">
											<font color="Red" size="5px" face="segoe script"><label><u> View Order Stage</u></label></font>
										</div>
									</div>
			<!--2 row-->				<div class="row">
										 
										 <div class="col-lg-3 text-center">
											<br>
											<div class="card">
												<div class="card-body">
													<h5 class="card-title"><label>New Order &nbsp&nbsp<span class="badge badge-light"> <?php echo $c; ?> </span> </label></h5>
													<a href="neworder.php" class="btn btn-block btn-primary">View List</a>
												</div>
											</div>
										</div>
										
										<div class="col-lg-3 text-center">
											<br>
											<div class="card">
												<div class="card-body">
													<h5 class="card-title"><label>Work in Progess&nbsp&nbsp<span class="badge badge-light"> <?php echo $c1; ?> </span></label></h5>
													<a href="work_in_progress.php" class="btn  btn-block btn-primary">View List</a>
												</div>
											</div>
										</div>
										
										<div class="col-lg-3 text-center">
											<br>
											<div class="card">
												<div class="card-body">
													<h5 class="card-title"><label>Deliverd Order&nbsp&nbsp<span class="badge badge-light"><?php echo $c2; ?></span></label></h5>
													<a href="deliverd.php" class="btn  btn-block  btn-primary">View List</a>
												</div>
											</div>
										</div>
									
										<div class="col-lg-3 text-center">
											<br>
											<div class="card">
												<div class="card-body">
													<h5 class="card-title"><label>Complete Order&nbsp&nbsp<span class="badge badge-light"><?php echo $c3; ?></span></label></h5>
													<a href="complete.php" class="btn btn-block btn-primary">View List</a>
												</div>
											</div>
										</div>
									</div>
								
			<!--3 row-->				<br>
									<div class="row">
										<div class="col-lg-12 text-center">
											<font color="Red" size="5px" face="segoe script"><label><u>Change Order Stage and view invoice</u></label></font>
										</div>
									</div>
				<!--4row-->			<div class="row">
											<div class="col-lg-4 text-center">
												<br>
											<div class="card">
												<div class="card-body">
													<h5 class="card-title"><label>Change Stage and view invoice</label></h5>
													<a href="changestage.php" class="btn btn-block btn-primary">View List</a>
												</div>
											</div>
											</div>
											
											<div class="col-lg-4 text-center">
												<br>
											<div class="card">
												<div class="card-body">
													<h5 class="card-title"><label> View Product Id</label></h5>
													<a href="product_id.php" class="btn btn-block btn-primary">View List</a>
												</div>
											</div>
											</div>
											<div class="col-lg-4 text-center">
											</div>
									</div>	
								</div>				
							</div>			
						</div>
	<!--all close--></div>				
</body>
</html>