<?php

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
								<div class="col-lg-12 text-center">
									<font face="segoe script"size="5px"color="red">
										<b> Here You can View all Product Ids</b>
									</font>			
								</div>
							</div>
		<!--2row-->			<br>		
							<div class="row">
								<div class="col-lg-3"></div>
								<div class="col-lg-6 text-center">
									<form name="product_id" method="POST" action="product_id.php" enctype="multipart/form-data">
											<label><font size="4px"><b>Product Title </b></font> </label>
												<select name="select" class="form-control" autofocus >
													<option name="beds" value="beds">beds</option>
													<option name="bookshelves" value="bookshelve">bookshelve</option>
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
								<div class="col-lg-3"></div>
							</div>
		<!--3row-->								
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
									<div class="col-lg-12 text-center">
										<font face="segoe script" color="red" size="5px">View Product Id </font>
										
									</div>
							</div>
		<!--row-->
								<div class="row">
										<div class="col-lg-4"></div>
										<div class="col-lg-4">
										<button id="a1" type="button" class="btn btn-primary btn-block"> click See All</button>
										</div>
										<div class="col-lg-4"></div>
								</div>		
		<!--row-->					
								<div class="row">								
									<div class="col-lg-12">
									<div id="b1">
									<table class="table table-striped">
									<tr><th>Title</th><th>Product Id</th><th>Product name</th><th> cost</th></tr>
								<?php 
								if(isset($_REQUEST['Submit']))
								{
								if($_REQUEST['select']!=="")
								{				
									$title=$_REQUEST['select'];
									$query=mysqli_query($conn,"SELECT * FROM $title ");
									while($roa = mysqli_fetch_array($query)){
									 $id=$roa['product_id'];
									 $title; 
									 $name=$roa['name'];   
									 $cost=$roa['cost'];
									echo "<tr><td>"; echo $title; echo "</td><td>"; echo $id; echo"</td><td>"; echo $name; echo "</td>
									<td>"; echo $cost; echo"</td></tr>";
									}
								}	
								}
								?>
									</table>
									</div>
									</div>
								</div>	
							</div>
							
</body>
</html>							