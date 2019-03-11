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
							echo "connect with server";
							}
					
?>

<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>cancel Order </title>
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
							<br>	
				<!--1row-->		<div class="row">
									<div class="col-lg-12 text-center">
										<font color="red" size="5px" face="segoe script"><label><u>Cancel Order </u></label></font>
									</div>
								</div>
							
				<!--2row-->		<div class="row">
									<div class="col-lg-12 text-center">
										<table class="table table-striped">
						<font size="4px">		<br>
													<tr><th>Invoice No</th><th>Product Name</th><th>Date(yy-mm-dd)</th><th>quantity</th></tr>
													<?php
														$result=mysqli_query($conn,"SELECT invoice_no,date,name,cost,quantity FROM order_table where stage like 'cancel' order by date desc");
														while($row = mysqli_fetch_array($result)){
														//print_r($row);
													echo "<tr><td>";   echo $invoice_no=$row['invoice_no']; 
													echo "</td><td>";  echo $name=$row['name'];   
													echo "</td><td>";   echo $date=$row['date'];
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