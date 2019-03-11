<?php
	//connect to DBMS			
				$server="localhost";
				$user="root";
				$pass="";
				$dbname="subu";
				$conn=mysqli_connect($server,$user,$pass,$dbname);
	//server connect					
						if(!$conn)
							{
							$e="not connect with server";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							}
						else 
							{
							"connect with server";
							}
	//submit value					
							if(isset($_REQUEST['Submit']))
						{
								if($_REQUEST['select']=="" or $_REQUEST['id']=="" )
								{
									$e="Please enter some value"; 
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
								
								 $t=$_REQUEST['select'];
								 $i=$_REQUEST['id'];	
	//space killer function									
								$t1=str_replace(' ', '', $t);
								
								if($i!=="")
								{
									$query="select * from $t1 where product_id='$i'";
											
										$da = mysqli_query($conn,$query);
										$total=mysqli_fetch_assoc($da);
										 $title=$total['title'];
										 $id=$total['product_id'];
										 $name=$total['name'] ;
										 $cost=$total['cost'];
										 $wood=$total['wood'];
										 $data=$total['data'];
								}
						}
	//Delete the data 				 
							if(isset($_POST['Delete']))
								{
									$title2=$_REQUEST['title'];
									$id2=$_REQUEST['id'];
			//space killer function									
								$title3=str_replace(' ', '', $title2);

									$query="DELETE FROM $title3 WHERE product_id='$id2' ";
									if(mysqli_query($conn,$query))
									{  
										 $e="delete succesfull"; 
									echo '<script type="text/javascript">alert("congres : ' . $e . '")</script>';
									

										
									}
									else{
										$e="not delete"; 
									echo '<script type="text/javascript">alert("congres : ' . $e . '")</script>';

										echo mysqli_error($conn);
									}
								}
								mysqli_close($conn);
?>							