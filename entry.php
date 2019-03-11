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
							echo "connect with server";
							}
							
		//submit value					
							if(isset($_REQUEST['Submit']))
						{
		//check value not null					
							if($_REQUEST['title']=="" or $_REQUEST['id']=="" or $_REQUEST['name']=="" or $_REQUEST['cost']=="" or $_REQUEST['wood']=="" or $_REQUEST['data']=="" )
							{
								$e="Please enter some value"; 
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;
							}
		//show all name					
								 $title=$_REQUEST['title'];
								 $id=$_REQUEST['id'];
								 $name=$_REQUEST['name'];
								 $cost=$_REQUEST['cost'];
								 $wood=$_REQUEST['wood'];
								 $data=$_REQUEST['data'];
		//check title length						
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
									$result = "select * from product where id='$id'";
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
						$query="INSERT INTO product(title,id,name,cost,wood,data) 
													VALUES('$title','$id','$name','$cost','$wood','$data')"; 
					if(mysqli_query($conn,$query))
						{  
							header('location:admin.php');
							echo "registration succesfull";
						}
					else 
						{
								echo mysqli_error();
						}	
						
						}	
							
						mysqli_close($conn);

?>			