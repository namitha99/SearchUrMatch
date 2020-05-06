<?php
session_start();
$servername = "localhost";
$username = "namitha";
$password = "namitha";
$dbname = "searchurmatch";

$conn = mysql_connect($servername, $username, $password);
$dbselect=mysql_select_db($dbname,$conn);
if(isset($_SESSION['USER']))
  
    //echo $_SESSION['USER'];
	$user=$_SESSION['USER'];
  
  
  if(isset($_SESSION['PASS']))
  
    //echo $_SESSION['PASS'];
	 $pass=$_SESSION['PASS'];

$sql1="select profile_id from login where username='$user' and password='$pass'";
  
  $result = mysql_query($sql1,$conn);
//$row = mysql_fetch_row($result);
$row = mysql_fetch_assoc($result);

$id = $row["profile_id"]; 

$sql="select image,description from success_story where image!='null'";
 $show=mysql_query( $sql,$conn);
?>
<html>
<head>
<title>SUCCESS PAGE</title>

<link rel="stylesheet" type="text/css" href="style_success.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="style_sidemenu.css"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
#tablebor{
border:solid;
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
						$image=$row['image'];
						//echo $image;
						?>
						
						<div id="success">
						<div class="card">
						<form>
						 <table id="tablebor">
						 <tr>
						<td>
						  <?php echo "<img src='$image' height'250' width='250'>";

						
						?>
						
						</td>
						<td width="90%" >
						<font size="4">
						<p>
						<?php
						echo $row['description'];
						?>
						</p>
						</font>
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

