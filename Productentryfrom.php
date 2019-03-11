<?php
include 'entry.php';	
?>	

<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Add Product</title>
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
								<font face="segoe script"size="4px"color="white">jay shree shyam</font>
							</nav>
		<!--container-->
							<div class="container">
								<br><br>
								<form name="add" method="POST" action="productentryfrom.php" enctype="multipart/form-data">
						<!--row-->		
									<div class="row">
										<div class="col-lg-12">
											<legend align="center"><font face="segoe script">Product Add From </font></legend>
										</div>
									</div>	
						<!--2row-->			
									<div class="row">
										<div class="col-lg-6">
												<label> Product Title  </label>
												<input type="text" class="form-control" name="title" placeholder="Enter product title" required>
										</div>
										
										<div class="col-lg-6">
												<label> Product Id </label>
												<input type="number" class="form-control" name="id" placeholder="Enter product Id" required>
										</div>
								
									</div>
						<!--3row-->			
									<div class="row">
										<div class="col-lg-6">
												<label> Product Name </label>
												<input type="text" class="form-control" name="name" placeholder="Enter product name" required>
										</div>
										
										<div class="col-lg-6">
												<label> Product Cost </label>
												<input type="number" class="form-control" name="cost" placeholder="Enter product cost" required>
										</div>
								
									</div>
						<!--4row-->			
									<div class="row">
								<!--		<div class="col-lg-6">
												<label> Product image </label>
												<input type="file" class="form-control" name="file1" placeholder="choose product file"  required>
										</div>-->
										
										<div class="col-lg-6">
											<label>Type of wood</label>
												<input type="text" class="form-control" name="wood"  placeholder="type of wood use in product" required>
										</div>
								
									</div>
						<!--5row-->			
									<div class="row">
										<div class="col-lg-3"></div>
										<div class="col-lg-6">
													<label> Product Description </label>
													 <textarea class="form-control" name="data" rows="4" placeholder="something special word..."></textarea>	
										</div>
										<div class="col-lg-3">
										<br><br><font color="red">*1.it in containe height*width*length
										<br>2.explain some product attribute which through product show beautiful.
										</font>
										</div>
									</div>
									
						<!--5row-->	<br>		
									<div class="row">
										<div class="col-lg-4"></div>
										<div class="col-lg-4 text-center">
										<input type="submit" class="btn btn-primary btn-md btn-block" name="Submit" value="Submit">	
										</div>
										<div class="col-lg-4"></div>
									</div>	
								</form>	
							</div>		
</body>
</html>							