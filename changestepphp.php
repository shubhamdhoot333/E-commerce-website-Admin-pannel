<?php 
session_start();
error_reporting(0);
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
									 $invoice=$_REQUEST['id'];
									$query=mysqli_query($conn,"SELECT * FROM order_table where Invoice_no LIKE '$invoice'");
									$roa = mysqli_fetch_array($query);
										$stage=$roa['stage'];
										$id=$roa['product_id'];
										 $pname=$roa['name']; 
										 $date=$roa['date1'];   
										 $address=$roa['address'];
										 $quantity=$roa['quantity']; 
										 $cost=$roa['cost'];   
										 $email=$roa['email']; 
										 $username=$roa['uname']; 
									$_SESSION['invoice']=$invoice;
									$_SESSION['email']=$email;
									$_SESSION['uname']=$username;
									$_SESSION['pname']=$pname;
									$_SESSION['cost']=$cost;
									$_SESSION['quan']=$quantity;
									$_SESSION['stage']=$stage;
							}
								if(isset($_REQUEST['Submit_stage']))
								{
								if($_REQUEST['select']!=="")
								{				
									$select=$_REQUEST['select'];
									$invoice1=$_SESSION['invoice'];
									$stage=$_SESSION['stage'];
									if($stage=='success')
									{
										$e="you cannot change success stage";
												echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
										die;
										
									}	
									$query="update order_table set stage='$select' where Invoice_no like '$invoice1'"; 
												
												if(mysqli_query($conn,$query))
													{  
												
												$e="Edit succesfull";
												echo '<script type="text/javascript">alert("thankyou for responce : ' . $e . '")</script>';
					//shipping message			
											$email=$_SESSION['email'];				
											$user=$_SESSION['uname'];	
											$pname=$_SESSION['pname'];
									        $cost=$_SESSION['cost'];
									        $quantity=$_SESSION['quan'];
											header('location:admin.php');	
												if($select=='shipping')
												{
													require 'PHPMailerAutoload.php';
			
											$mail = new PHPMailer;

											$mail->SMTPDebug = 4;                               // Enable verbose debug output

											$mail->isSMTP();                                      // Set mailer to use SMTP
											$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
											$mail->SMTPAuth = true;                               // Enable SMTP authentication
											$mail->Username = 'shreesalasarartandcraft@gmail.com';                 // SMTP username
											$mail->Password = '03032000s';                           // SMTP password
											$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
											$mail->Port = 587;                                    // TCP port to connect to

											$mail->setFrom('shreesalasarartandcraft@gmail.com', 'salasar art and craft');
											$mail->addAddress($email);     // Add a recipient
													// Name is optional
											$mail->addReplyTo('shreesalasarartandcraft@gmail.com');

											$mail->isHTML(true);                                  // Set email format to HTML

											$mail->Subject = 'Your Order Shipped';
											$mail->Body   = '<center>
												<font size="10px" color="white"><p style="background:red;">shree salasar art and craft</p> </font>       <br>
												<font size="5px">Hi  .'.$user.  ', </font>              <br><br>
												<font size="5px">Thanks for using our services
												</u>shree salasar art and craft!</u></font>				<br>	<br>	
												<font size="5px">Your order has been deliverd.</font>		<br><br>
										<table style="border:1px solid black;">
												<caption>Order Summary</caption>	
												<tr><td style="border:1px solid black;"><font size="3px">Product Name  </td>
													<td style="border:1px solid black;">'.  $pname . '</td></font>
												</tr>
												<tr><td style="border:1px solid black;"><font size="3px">Quantity  </td>
													<td style="border:1px solid black;">'.  $quantity  .'</td></font>
												</tr>
												<tr><td style="border:1px solid black;"><font size="3px">Total cost    </td>
													<td style="border:1px solid black;">'.  $cost  .'</td></font>
												</tr>
										</table><br><br>	
											<font size="5px">Thankyou for Order given</font><center><br>';
									
											$mail->AltBody = '';

											if(!$mail->send()) {
											echo 'Message could not be sent.';
											echo 'Mailer Error: ' . $mail->ErrorInfo;
											} else {
											echo 'Message has been sent';
											}
													
								}
									
									if($select=='success')
												{
													require 'PHPMailerAutoload.php';
			
											$mail = new PHPMailer;

											$mail->SMTPDebug = 4;                               // Enable verbose debug output

											$mail->isSMTP();                                      // Set mailer to use SMTP
											$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
											$mail->SMTPAuth = true;                               // Enable SMTP authentication
											$mail->Username = 'shreesalasarartandcraft@gmail.com';                 // SMTP username
											$mail->Password = '03032000s';                           // SMTP password
											$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
											$mail->Port = 587;                                    // TCP port to connect to

											$mail->setFrom('shreesalasarartandcraft@gmail.com', 'salasar art and craft');
											$mail->addAddress($email);     // Add a recipient
													// Name is optional
											$mail->addReplyTo('shreesalasarartandcraft@gmail.com');

											$mail->isHTML(true);                                  // Set email format to HTML

											$mail->Subject = 'Your Order Shipped';
											$mail->Body   = '<center>
												<font size="10px" color="white"><p style="background:red;">shree salasar art and craft</p> </font>       <br>
												<font size="5px">Hi  .'.$user.  ', </font>              <br><br>
												<font size="5px">Thanks for using our Services
												</u>shree salasar art and craft!</u></font>				<br>	<br>	
												<font size="5px">Your order has been successfully deliverd to you.</font>		<br><br>
										<table style="border:1px solid black;">
												<caption>Order Summary</caption>	
												<tr><td style="border:1px solid black;"><font size="3px">Product Name  </td>
													<td style="border:1px solid black;">'.  $pname . '</td></font>
												</tr>
												<tr><td style="border:1px solid black;"><font size="3px">Quantity  </td>
													<td style="border:1px solid black;">'.  $quantity  .'</td></font>
												</tr>
												<tr><td style="border:1px solid black;"><font size="3px">Total cost    </td>
													<td style="border:1px solid black;">'.  $cost  .'</td></font>
												</tr>
										</table><br><br>	
											<font size="5px">Thankyou for Order given</font><center><br>';
									
											$mail->AltBody = '';

											if(!$mail->send()) {
											echo 'Message could not be sent.';
											echo 'Mailer Error: ' . $mail->ErrorInfo;
											} else {
											echo 'Message has been sent';
											}
													
								}								
						}
												else 
													{
												echo mysqli_error();
													}	
										
								}
								
								
								}
					
								
								
?>