<?php
include 'searchphp.php';
error_reporting(0);	
?>	

<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Product search </title>
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
								<font face="segoe script"size="4px"color="white">Salasar Art & Craft</font>
							</nav>
		<!--container-->
								<div class="container">
								<br><br>
								<form name="search" method="POST" action="search.php" enctype="multipart/form-data">
						<!--1row-->		
									<div class="row">
										<div class="col-lg-12 text-center">
											<legend align="center"><font face="segoe script"><u>Product Search From </u></font></legend>
											<font  color="red" size="3px">Enter value to search product</font>
										</div>
									</div>
						<!--2row--><br>
									<div class="row">
										<div class="col-lg-6">
											<label> Product Title  </label>
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
											<label> Product Name </label>
												<input type="text" class="form-control" name="name" placeholder="Enter product name" required>
										</div>
									</div>
						<!--3row-->	<br>	
									<div class="row">
										<div class="col-lg-4"></div>
										<div class="col-lg-4 text-center">
											<input type="submit" class="btn btn-primary btn-md btn-block" name="Submit" value="Submit">	
										</div>
										<div class="col-lg-4"></div>
									</div>
							</form>
						<!--4row-->	<br>
								<div class="row">
										<div class="col-12 text-center"><font face="segoe script" size="4px"><u><b>Your Search Product is Here</b></u></font></div>
								</div>
							<br>
						<!--4 row-->			
									<div class="row">
										<div class="col-4 text-center">Name</div>
										<div class="col-4 text-center"> Product Id</div>
										<div class="col-4 text-center">Cost</div>
									</div>
								<?php
										if($title1!=="")
									{
										$query="select * from $title1 where name like '$name' ";

										$da = mysqli_query($conn,$query);
										$n= mysqli_affected_rows($conn);
																								
										for ($x = 1; $x <= $n; $x++) 
										{
											echo "<div class='row'>";
												$total=mysqli_fetch_assoc($da);		
													
													echo "<div class='col-4 text-center'>";
														echo $name=$total['name'] ;
													echo "</div>";	
													
													echo "<div class='col-4 text-center'>";	
														echo $id=$total['product_id'];		
													echo "</div>";
													
													echo "<div class='col-4 text-center'>";	
														echo $cost=$total['cost'];
													echo "</div>";	
											echo "</div>";
										}
									}	
								?>	
					<!--row-->		<br><br>		
									<div class="row">
										<div class="col-6 text-center">
											<a class="btn btn-primary btn-block" href="update.php" role="button">
												update Product									
											</a>
										</div>
										<div class="col-6 text-center">
											<a class="btn btn-primary btn-block" href="delete.php" role="button">
												Delete Product									
											</a>
										</div>
									</div>

								
											
</body>
</html>									