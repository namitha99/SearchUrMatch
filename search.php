<?php
session_start();
$servername = "localhost";
$username = "namitha";
$password = "namitha";
$dbname = "searchurmatch";

$religion='';
$sql='';
$caste='';
$qualification='';

//$caste=$_GET['caste'];
if(isset($_POST['hindu']))
{
	$religion="hindu";
}
else if(isset($_POST['muslim']))
{
	$religion="muslim";
}
else if(isset($_POST['christian']))
{
	$religion="christian";
}
else if(isset($_POST['jain']))
{
	$religion="jain";
}
else if(isset($_POST['sikh']))
{
	$religion="sikh";
}


if(isset($_POST['gm']))
{
	$caste="gm";
}
else if(isset($_POST['obc']))
{
	$caste="obc";
}
else if(isset($_POST['sc/st']))
{
	$caste="sc/st";
}


if(isset($_POST['MTech']))
{
	$qualification="MTech";
}
else if(isset($_POST['BCom']))
{
	$qualification="BCom";
}
else if(isset($_POST['MSc']))
{
	$qualification="MSc";
}
else if(isset($_POST['Bsc']))
{
	$qualification="Bsc";
}
else if(isset($_POST['LLB']))
{
	$qualification="LLB";
}
else if(isset($_POST['MBBS']))
{
	$qualification="MBBS";
}
else if(isset($_POST['BA']))
{
	$qualification="BA";
}
else if(isset($_POST['BE']))
{
	$qualification="BE";
}


$conn = mysql_connect($servername, $username, $password);
$dbselect=mysql_select_db($dbname,$conn);
// Check connection

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
$sql2="select gender from profile where profile_id='$id'";
$result1 = mysql_query($sql2,$conn);
$row1 = mysql_fetch_assoc($result1);
$gen=$row1["gender"];
//echo $gen;
//$sql="select * from profile where religion='$religion' and profile_id!='$id'";

if($religion!='')
{
$sql="select *
from profile
where profile_id!='$id'
and gender!='$gen'
and religion='$religion'
and profile_id not in (select profile_id1
                         from success_story
                        union
                        select profile_id2
                         from success_story)";
}
else if($caste!='')
{
$sql="select *
from profile
where profile_id!='$id'
and gender!='$gen'
and caste='$caste'
and profile_id not in (select profile_id1
                         from success_story
                        union
                        select profile_id2
                         from success_story)";
}
else if($qualification!='')
{
$sql="select *
from profile
where profile_id!='$id'
and gender!='$gen'
and qualification='$qualification'
and profile_id not in (select profile_id1
                         from success_story
                        union
                        select profile_id2
                         from success_story)";
}

				 
$show=mysql_query( $sql,$conn);
 if(mysql_query( $sql,$conn))
	 //echo "true";
	 {
 ?>
						
						
						<html>
						<head>
						
						<link rel="stylesheet" type="text/css" href="style.css" />
						<link rel="stylesheet" type="text/css" href="style_sidemenu.css"/>
						<meta name="viewport" content="width=device-width, initial-scale=1">
						</head>
						<title>result</title>
						<style>
						.abtn{
							background:IMAGE-URL;
							display:block;
							height:IMAGE-HEIGHT;
							width:IMAGE-WIDTH;
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
						#bor{
							// background-color: #cc6476;
							 position:relative;
							 left:400px;
							 width:600px;
							 //float:right;
							 z-index:4;
						}
						a {
						  text-decoration: none;
						  font-size: 22px;
						  color: black;
						}

						button:hover, a:hover {
						  opacity: 0.7;
						}
						#tablebor{
							border:solid;
						}
						#main   /*serachurmatch*/
						{
							
							
							z-index:6;
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
						 
						<?php
						 while($row= mysql_fetch_array($show)) 

						{
						$image=$row['photo'];
						//echo $image;
						?>
						
						<div id="bor">
						<div class="card">
						<form>
						 <table id="tablebor">
						 <tr>
						<td>
						  <?php echo "<img src='$image' height'150' width='150'>";

						$profile_id=$row['profile_id'];
						//echo $profile_id;
						?>
						<p><button><?php
						 echo "<a href=\"view.php?id=$profile_id\" class=abtn> view </a>"; 
						 
						 ?></button></p>
						</td>
						<td width="70%" >
						
						
						 <font size="5" color="black" face="arial">
						 <b>
						 Name:
						 <?php 
						 echo $row['fname']; 
						 ?>
						 <br>
						 <br>
						 Phone number:
						 <?php 
						 echo $row['phone'];
						 ?>
						 </b>
						 </font>
						  <br>
						<br>
						<br>
						<br>
						<center>
						<font size="6" color="black" face="Edwardian Script ITC"><b>Search Ur Match... </b></font>
						<br>
						<font size="5" color="black" face="Edwardian Script ITC"><b>...match for life</b></font>
						</center>
						 </td>
						</div>
						</div>
						<br>						
						
						
						</tr>
						
						<?php
						}
						?>
						
						</table>
						</form>
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
	