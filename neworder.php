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
            <title>New Order </title>
			<!--link-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
		<!--1 navbar-->				
							<nav class="navbar navbar-expend-lg navbar-light bg-Dark ">
								<font face="segoe script"size="4px"color="white">Salasar Art & Craft</font>
							</nav>
		<!--container-->
							<div class="container">
								<br>
				<!--1row-->		<div class="row">
									<div class="col-lg-12 text-center">
										<font color="red" size="5px" face="segoe script"><label><u>New Order </u></label></font>
									</div>
								</div>
							
				<!--2row-->		<div class="row">
									<div class="col-lg-12 text-center">
										<table class="table table-striped">
						<font size="4px">		<br>
													<tr><th>Invoice No</th><th>Product Name</th><th>Date(yy-mm-dd)</th><th>quantity</th></tr>
													<?php
														$result=mysqli_query($conn,"SELECT invoice_no,date1,name,cost,quantity FROM order_table where stage like '' ");
														while($row = mysqli_fetch_array($result)){
														//print_r($row);
													echo "<tr><td>";   echo $invoice_no=$row['invoice_no']; 
													echo "</td><td>";  echo $name=$row['name'];   
													echo "</td><td>";   echo $date=$row['date1'];
													echo "</td><td>";  echo $quantity=$row['quantity']; 	
													echo "</td></tr>";

													}	
												
													?>
										</font>
										</table>	
									</div>
								</div>	
									
							</div>
</body>
</html>							