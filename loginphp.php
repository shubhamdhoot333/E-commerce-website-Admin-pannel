<?php
error_reporting(0);
session_start();
$cookies_name="shubham";
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
			
				
						if(isset($_REQUEST['Submit']))
						{
	//check email or password is blank or not			
							if($_REQUEST['Email']=="" or $_POST['Password']=="" )
							{
								$e="Please enter some value"; 
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
	
							die;
							}
							
							
								
							echo $Email=$_REQUEST['Email'];
							echo $pass=$_REQUEST['Password'];
							echo $remember=$_REQUEST['remember'];
								if($remember!='')
								{									
								$arr=array();
								array_push($arr,$Email);
								array_push($arr,$pass);
								
								
								setcookie($cookies_name,"".$Email.",".$pass,time()+(86400*1000),"/");
					
							}
								
	//check email is validate or not			
							if(!filter_var($Email,FILTER_VALIDATE_EMAIL)===false)
								{
								echo "email is valid <br>";
								}
							else 
								{
								$e="email not valid"; 
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;
								}
	//check password length or validate or not	
								$passlength=strlen($pass);
							if($passlength>8)
								{
								$e="password must be 8 digit password incorrect";
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;
								}
		//check email or password enter is valied or not			
								$query="select * from adminpannel where email='$Email' AND password='$pass' ";
								mysqli_query($conn,$query);
								$n= mysqli_affected_rows($conn);
							
							if($n!=0) 
								{
								$_SESSION['Email']=$Email;
								header('location:admin.php');
								}
							else 
								{
							$e=" not login ";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;
								}
								
						}
						
				mysqli_close($conn);
?>