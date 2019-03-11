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
			//1 total user count query 				
						$query="Select * from customer1";
							mysqli_query($conn,$query);
							$n= mysqli_affected_rows($conn);
		
			//2 total product in database				
							$result=mysqli_query($conn,"select(select count(*) from beds )
												+ ( select count(*) from bookshelve )
												+ ( select count(*) from chair )
												+ ( select count(*) from decor )
												+ ( select count(*) from otheritem )
												+ ( select count(*) from sideboard )
												+ ( select count(*) from sofas )
												+ ( select count(*) from storage )
												+ ( select count(*) from table1 )
												+ ( select count(*) from wardrobes )as total_rows");
										$row = mysqli_fetch_array($result);
										$n1=$row['total_rows'];
			//3 total product order
							mysqli_query($conn,"Select * from order_table");
								$n2=mysqli_affected_rows($conn);	
			//4 total income of all product
							$result=mysqli_query($conn,"Select sum(cost)from order_table"); 
							while($row = mysqli_fetch_array($result)){
							$total=$row['sum(cost)'];
							}
			//order stage query
					//1 complete		
							$query="SELECT * FROM order_table where stage in ('complete','success') ";
							mysqli_query($conn,$query);
							$n3= mysqli_affected_rows($conn);
									
					//2 work in progress
							$query="SELECT * FROM order_table where stage like 'work in progress'";
							mysqli_query($conn,$query);
							$n4= mysqli_affected_rows($conn);
					//3 Deliverd product
							$query="SELECT * FROM order_table where stage in('deliverd','shipping')";
							mysqli_query($conn,$query);
							$n5= mysqli_affected_rows($conn);	
					//4 total quantity of all product
							$result=mysqli_query($conn,"Select sum(quantity)from order_table"); 
							while($row = mysqli_fetch_array($result)){
							$totalquan=$row['sum(quantity)'];
							}
					//5 total complete quantity of all product
							$result=mysqli_query($conn,"Select sum(quantity)from order_table where stage in ('success','complete')"); 
							while($row = mysqli_fetch_array($result)){
							$totalquansu=$row['sum(quantity)'];
							}
					// 6total work in progress quantity of all product
							$result=mysqli_query($conn,"Select sum(quantity)from order_table where stage in ('work in progress')"); 
							while($row = mysqli_fetch_array($result)){
							$totalquanwo=$row['sum(quantity)'];
							}			
					// 6total complete quantity of shipping  all product
							$result=mysqli_query($conn,"Select sum(quantity)from order_table where stage in ('shipping','deliverd')"); 
							while($row = mysqli_fetch_array($result)){
							$totalquansi=$row['sum(quantity)'];
							}
			// new order			
					$result11=mysqli_query($conn,"Select * from order_table where stage ='' ");				
								$c= mysqli_affected_rows($conn);
			//work in progress		
					$result12=mysqli_query($conn,"Select * from order_table where stage ='work in progress' ");				
							$c1= mysqli_affected_rows($conn);
			//shipping		
					$result13=mysqli_query($conn,"Select * from order_table where stage ='shipping' ");				
								$c2= mysqli_affected_rows($conn);
			//success		
					$result14=mysqli_query($conn,"Select * from order_table where stage ='success' ");				
								$c3= mysqli_affected_rows($conn);					
				
			// new message			
					$result15=mysqli_query($conn,"Select * from message where company_review ='' ");				
								$c4 = mysqli_affected_rows($conn);
			//message on hold		
					$result16=mysqli_query($conn,"Select * from message where company_review ='message on hold' ");				
								$c5= mysqli_affected_rows($conn);
			//work successful		
					$result17=mysqli_query($conn,"Select * from message where company_review ='work successful' ");				
								$c6 = mysqli_affected_rows($conn);
			// new review			
					$result18=mysqli_query($conn,"Select * from rating where stage =' ' ");				
								$c7 = mysqli_affected_rows($conn);
			// new unauthorised review			
					$result19=mysqli_query($conn,"Select * from rating where stage ='message on hold'  ");				
								$c8 = mysqli_affected_rows($conn);
			// new authorised review			
					$result20=mysqli_query($conn,"Select * from rating where stage ='work successful'  ");				
								$c9= mysqli_affected_rows($conn);						
								
							




				
					//entry php
								//submit value					
							if(isset($_REQUEST['Submit']))
						{	
							if($_REQUEST['select']=="" or $_REQUEST['id']=="" or $_REQUEST['name']=="" or $_REQUEST['cost']=="" or $_REQUEST['wood']=="" or $_REQUEST['data']=="" or $_FILES['file1']=="" or $_FILES['file2']=="" )
												{
													$e="Please enter some value"; 
													echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
													die;
												}
					//show all name					
								 $title=$_REQUEST['select'];
								 $id=$_REQUEST['id'];
								 $name=$_REQUEST['name'];
								 $cost=$_REQUEST['cost'];
								 $wood=$_REQUEST['wood'];
								 $data=$_REQUEST['data'];
					//check photo1  length	
						
						$filename = $_FILES["file1"]["name"];
						$tempname = $_FILES["file1"]["tmp_name"];
						$filetype = $_FILES["file1"]["type"];
					if($filetype=="image/jpeg" or $filetype=="image/jpg" or $filetype=="image/png")
					{
						$folder = "../imagefolder/".$filename;
						if(move_uploaded_file($tempname,$folder))
						{
						"file upload<br>";
						}
					else{
						$e="image1 cannot upload"; 
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							die;
						}	
					}	
			
						$filename = $_FILES["file2"]["name"];
						$tempname = $_FILES["file2"]["tmp_name"];
						$filetype = $_FILES["file2"]["type"];
					if($filetype=="image/jpeg" or $filetype=="image/jpg" or $filetype=="image/png")
					{
						$folder1 = "../imagefolder/".$filename;
						if(move_uploaded_file($tempname,$folder1))
						{
						 "file upload<br>";
						}
					else{
						$e="image2 cannot upload"; 
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							die;
							}	
					}

						$filename = $_FILES["file3"]["name"];
						$tempname = $_FILES["file3"]["tmp_name"];
						$filetype = $_FILES["file3"]["type"];
					if($filetype=="image/jpeg" or $filetype=="image/jpg" or $filetype=="image/png")
					{
						$folder3 = "../imagefolder/".$filename;
						if(move_uploaded_file($tempname,$folder3))
						{
						"file upload<br>";
						}
					else{
						$e="image3 cannot upload"; 
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							die;
						
						
						}	
					}		

	
							
		
								$titlelength=strlen($title);
								if($titlelength>20)
								{
									$e="title must be less then 20 character, title incorrect";
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
		//check id length						
								$idlength=strlen($id);
								if($idlength>10)
								{
									$e="product id  must be less then 10 digit id incorrect";
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
		//check name length						
								$namelength=strlen($name);
								if($namelength>20)
								{
									$e="product name must be less then 20 character name incorrect";
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
		//check cost length						
								$costlength=strlen($cost);
								if($costlength>10)
								{
									$e="cost must be less then 10 digit cost incorrect";
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
		// check wood length							
								$woodlength=strlen($wood);
								if($woodlength>20)
								{
									$e="wood name must be less then 20 character name incorrect";
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
		//check text 			
								$datalength=strlen($data);
								if($datalength>250)
								{
									$e="description must be less then 250 character";
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}

	//check product exist or not
							if($id!==" ")
								{
									$result = "select * from $title where id='$id'";
									mysqli_query($conn,$result);
										$num_row=mysqli_affected_rows($conn);
				
										if($num_row>=1)
										{
										$e="product exist";
										echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
										die;															
										}
								}	
		//run sql query					
						$query="INSERT INTO $title(title,name, product_id,cost,wood,data,photo1,photo2,photo3) VALUES('$title','$name','$id','$cost','$wood','$data','$folder', '$folder1', '$folder3' )"; 
					if(mysqli_query($conn,$query))
						{  
							header('location:admin.php');
							 "Add succesfull";
						}
					else 
						{
								echo  mysqli_error($conn);
						}	
						
						}	
						
						?>								