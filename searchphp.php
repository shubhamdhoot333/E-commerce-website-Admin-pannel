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
								if($_REQUEST['select']=="" or $_REQUEST['name']=="" )
								{
									$e="Please enter some value"; 
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
								  $title=$_REQUEST['select'];
								  $name=$_REQUEST['name'];
	//space killer function									
								$title1=str_replace(' ', '', $title);
									
						}		
	?>	