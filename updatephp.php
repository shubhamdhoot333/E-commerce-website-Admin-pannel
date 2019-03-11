<?php
session_start();
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
								 $_SESSION['i']=$i;
								 								
	//space killer function make new title									
								$t1=str_replace(' ', '', $t);
								$_SESSION['t']=$t1;
								if($i!=="")
								{
									 $result=mysqli_query($conn, "select * from  $t1  where product_id='$i' ");
										$total=mysqli_fetch_assoc($result);
									//print_r($total);
									
								
								 $p_id=$total['product_id'];
								 $name=$total['name'];
								$cost=$total['cost'];
								 $wood=$total['wood'];
								 $data=$total['data'];
										$photo1=$total['photo1'];
										$photo2=$total['photo2'];
										$photo3=$total['photo3'];
										
								}
						}
						
	//edit the data 				 
					if(isset($_POST['Submit1']))
								{		
								if($_FILES['file1']=="" or $_FILES['file2']=="" or $_FILES['file3']=="")
								{
									die;								
								}
	//file 1				
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
	//file2		
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
	//file3
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
//update data in page query				
					$i=$_SESSION['i'];
					$t1=$_SESSION['t'];
					$query1="update $t1 set photo1='$folder',photo2='$folder1',photo3='$folder3' where product_id='$i' "; 
					if(mysqli_query($conn,$query1))
						{  
							$e="Edit succesfull";
						echo '<script type="text/javascript">alert("congrs : ' . $e . '")</script>';
					
							 
						}
					else 
						{
								mysqli_error($conn);
						}
					}
					
						
					if(isset($_POST['Submit2']))
								{		
	//check value empty or not empty		
				if($_REQUEST['name']=="" or $_REQUEST['id']=="" or $_REQUEST['cost']==""  or $_REQUEST['wood']==""  or $_REQUEST['data']=="" )
										{
											die;
										}
									
										$name1=$_REQUEST['name'];
										$id1=$_REQUEST['id'];
										$cost1=$_REQUEST['cost'];					
										$wood1=$_REQUEST['wood'];
										$data1=$_REQUEST['data'];
						
			//check id length						
								$idlength=strlen($id1);
								if($idlength>10)
								{
									$e="product id  must be less then 10 digit id incorrect";
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
		//check name length						
								$namelength=strlen($name1);
								if($namelength>20)
								{
									$e="product name must be less then 20 character name incorrect";
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
		//check cost length						
								$costlength=strlen($cost1);
								if($costlength>10)
								{
									$e="cost must be less then 10 digit cost incorrect";
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
		// check wood length							
								$woodlength=strlen($wood1);
								if($woodlength>20)
								{
									$e="wood name must be less then 20 character name incorrect";
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
		//check text 			
								$datalength=strlen($data1);
								if($datalength>250)
								{
									$e="description must be less then 250 character";
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
							
		//update data in page query				
					$i=$_SESSION['i'];
					$t1=$_SESSION['t'];	
		$query1="update $t1 set name='$name1' , product_id='$id1' , cost='$cost1' , wood='$wood1' , data='$data1'  where product_id ='$i' "; 
				
					if(mysqli_query($conn,$query1))
						{  
							$e="Edit succesfull";
									echo '<script type="text/javascript">alert("congress : ' . $e . '")</script>';	
						}
					else 
						{
								mysqli_error($conn);
							
						}
								
					}	
			mysqli_close($conn);	
?>