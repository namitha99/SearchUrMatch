<?php
session_start();
$servername = "localhost";
$username = "namitha";
$password = "namitha";
$dbname = "searchurmatch";

$conn = mysql_connect($servername, $username, $password);
$dbselect=mysql_select_db($dbname,$conn);
// Check connection

$view_id=$_GET['id'];

//echo $view_id;

if($conn)

//echo "  CONNECTION ESTABLISHED \r\n";

  if($dbselect)
	
		
 // echo "Selected";
  
  if(isset($_SESSION['USER']))
  
    //echo $_SESSION['USER'];
	$user=$_SESSION['USER'];
  
  
  if(isset($_SESSION['PASS']))
  
    //echo $_SESSION['PASS'];
	 $pass=$_SESSION['PASS'];
  
 
  //echo $user;
  
  $sql1="select profile_id from login where username='$user' and password='$pass'";
  
  $result = mysql_query($sql1,$conn);
//$row = mysql_fetch_row($result);
$row = mysql_fetch_assoc($result);

$id = $row["profile_id"]; 

 
	 //$id=$_SESSION['view_profile'];
	 //if(
	// echo $id;
	 
	 $sql1="select * from profile where profile_id='$view_id'";
	 $show1=mysql_query($sql1,$conn);
	 
						if(mysql_query($sql1,$conn))
						{
							//echo "succ";
							//$show=mysql_query($sql1,$conn);
							
?>
						
						<html>
						<head>
						
						<link rel="stylesheet" type="text/css" href="style.css" />
						<link rel="stylesheet" type="text/css" href="style_sidemenu.css"/>
						<meta name="viewport" content="width=device-width, initial-scale=1">
						</head>
						
						<title>VIEW PAGE</title>
						<style>
						#main   /*serachurmatch*/
						{
							
							
							z-index:6;
						}
						#view
						{
							
							 //background-color: #cc6476;
							position:relative;
							left:400px;
							width:530px;
						}
						.abtn{
							background:IMAGE-URL;
							display:block;
							height:IMAGE-HEIGHT;
							width:IMAGE-WIDTH;
						}
						a {
						  text-decoration: none;
						  font-size: 22px;
						  color: black;
						}

						button:hover, a:hover {
						  opacity: 0.7;
						}
						#tableview
						{
							border:solid;
							font-size:24px;
							//font-weight:bold;
						}
						button {
						  border: none;
						  outline: 0;
						  display: inline-block;
						  padding: 8px;
						  color: white;
						  //background-color: #000;
						  text-align: center;
						  cursor: pointer;
						  width: 100%;
						  font-size: 18px;
							}	

						</style>
							<body>
							<div id="mySidenav" class="sidenav">
							<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
							<a href="home.html">Home</a>
	<a href="final_profile_page.php">Profile</a>
  	<a href="service.php">Services</a>
  	<a href="loan.html">Marriage loan</a>
	<a href="success.php">Success story</a>
  	<a href="feedback.html">Feedback</a>
	<a href="search.html">Search</a>
	<a href="logout.php" onclick="logout()">Logout</a>
							
							</div>

						<div id="main">	
						  <div id="title">
								
								<table cellspacing="2" cellpadding="4">

								<tr>
									<td>
									<img src="http://localhost/images/logo.jpg " width="250" height="75"></img>
									</td>

									<td >
									<font size="6" color="white" face="Edwardian Script ITC"><h1><b>&nbspSearchUrMatch &nbsp   </b><i>Matrimony</i></h1>
									</td>
								</tr>
								</table>
							</div>



						  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>

						</div>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
						 
						 <div id="view">
							<table id="tableview" width="110%"  cellspacing="7">
							
							<?php
							while($row1= mysql_fetch_array($show1)) 
							{
						?>
							<tr>
							<td>
							<i><b>PERSONAL DETAILS:</b></i>
							</td>
							</tr>
							<tr>
							<td >Fname:</td>
							<td>
							<?php echo $row1['fname'];?>
							</td>
							</tr>
							
							<tr>
							<td >Mname:</td>
							<td>
							<?php echo $row1['mname'];?>
							</td>
							</tr>
							
							<tr>
							<td >Lname:</td>
							<td>
							<?php echo $row1['lname'];?>
							</td>
							</tr>
							
							<tr>
							<td >Gender:</td>
							<td>
							<?php echo $row1['gender'];?>
							</td>
							</tr>
							
							<tr>
							<td >dob:</td>
							<td>
							<?php echo $row1['dob'];?>
							</td>
							</tr>
							
							<tr>
							<td >religion:</td>
							<td>
							<?php echo $row1['religion'];?>
							</td>
							</tr>
							
							<tr>
							<td >Caste:</td>
							<td>
							<?php echo $row1['caste'];?>
							</td>
							</tr>
							
							<tr>
							<td >Mother Tongue:</td>
							<td>
							<?php echo $row1['mother_tongue'];?>
							</td>
							</tr>
							
							<tr>
							<td >Martial Status:</td>
							<td>
							<?php echo $row1['martial_status'];?>
							</td>
							</tr>
							
							<tr>
							<td >Occupation:</td>
							<td>
							<?php echo $row1['occupation'];?>
							</td>
							</tr>
							
							<tr>
							<td >Qualification:</td>
							<td>
							<?php echo $row1['qualification'];?>
							</td>
							</tr>
							
							<tr>
							<td >Phone Number:</td>
							<td>
							<?php echo $row1['phone'];?>
							</td>
							</tr>
							
							<tr>
							<td >Email:</td>
							<td>
							<?php echo $row1['email'];?>
							</td>
							</tr>
							
							<tr>
							<td >Nationality:</td>
							<td>
							<?php echo $row1['nationality'];?>
							</td>
							</tr>
							
							<tr>
							<td >State: </td>
							<td>
							<?php echo $row1['martial_status'];?>
							</td>
							</tr>
							
							<tr>
							<td >City:</td>
							<td>
							<?php echo $row1['city'];?>
							</td>
							</tr>
							
							<tr>
							<td>
							<br>
							<i><b>FAMILY DETAILS:</b></i>
							</td>
							</tr>
							<tr>
							<td >Father Name:</td>
							<td>
							<?php echo $row1['fathername'];?>
							</td>
							</tr>
							
							<tr>
							<td >Mother Name:</td>
							<td>
							<?php echo $row1['mothername'];?>
							</td>
							</tr>
							
							<tr>
							<td >Father Occupation:</td>
							<td>
							<?php echo $row1['fatheroccupation'];?>
							</td>
							</tr>
							
							<tr>
							<td >Mother Occupation:</td>
							<td>
							<?php echo $row1['motheroccupation'];?>
							</td>
							</tr>
							
							<tr>
							<td >Siblings :</td>
							<td>
							<?php echo $row1['sibling'];?>
							</td>
							</tr>
							
							<tr>
							<td >Areas Of Interest :</td>
							<td>
							<?php echo $row1['areas_of_interest'];?>
							</td>
							</tr>
							
							<tr>
							<td >Height:</td>
							<td>
							<?php echo $row1['height'];?>
							</td>
							</tr>
							
							<tr>
							<td >Complexion :</td>
							<td>
							<?php echo $row1['complexion'];?>
							</td>
							</tr>
							
							<tr>
							<td >Blood Group :</td>
							<td>
							<?php echo $row1['bloodgroup'];?>
							</td>
							</tr>
							
							<tr>
							<td >Photo :</td>
							<td>
							<?php 
							$image=$row1['photo'];
							echo "<img src='$image' height'150' width='150'>";
							?>
							</td>
							</tr>
							
							<tr>
							<td >Horoscope :</td>
							<td>
							<?php 
							$image=$row1['horoscope'];
							echo "<img src='$image' height'150' width='150'>";
							?>
							</td>
							</tr>
							
							<tr>
							<td >
							<center>
							<p><button><?php
							$profile_id=$row1['profile_id'];
							
							echo "\n <a href=\"like.php?id=$profile_id\" class=abtn> like </a>"; 
							?></button></p>
							</td>
							</center>
							</tr>
						
						<?php
							}
							?>
							</table>
							</div>
							<script>
						function openNav() {
						  document.getElementById("mySidenav").style.width = "250px";
						  document.getElementById("main").style.marginLeft = "250px";
						  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
						}

						function closeNav() {
						  document.getElementById("mySidenav").style.width = "0";
						  document.getElementById("main").style.marginLeft= "0";
						  document.body.style.backgroundColor = "white";
						}
						function logout() 
	{
 	 //if(confirm('Do you want to continue with payment?'));
	alert('Logging out!!! See you soon');
	}
						</script>
							</body>
							</html>
							<?php
						}
 
 ?>
