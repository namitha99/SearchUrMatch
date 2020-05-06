
<?php
session_start();
$servername = "localhost";
$username = "namitha";
$password = "namitha";
$dbname = "searchurmatch";


// Create connection
$conn = mysql_connect($servername, $username, $password);
$dbselect=mysql_select_db($dbname,$conn);

$sql="select profile_id,service_name,count(*) as 'no' from service_taken group by profile_id,service_name ";
 $show=mysql_query( $sql,$conn);
 
 
?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />

<link rel="stylesheet" type="text/css" href="style_sidemenu.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>



.form{
	
	position:relative;
	z-index:1;
	//background: RGBA(7,40,195,0.8);
	background-color:#cc6476;
	max-width:360px;
	margin:0 auto 100px;
	padding:45px;
	text-align:center;
	
}
#right
{	float:right;
	border-radius:10px;
	background-color:#cc6476;
	//border:3px solid #f1f1f1;
	width:610px;
	margin:0;
	margin-top:150px;
	margin-right: 4em;
	
	
}
#feedback
				{float:left;
				//background: RGBA(7,40,195,0.1);
				//background: RGBA(195,100,90,0.5);
				width:800px;
				position:relative;
				left:250px;
				font-weight: bold;
				margin-top:200px;
					z-index:-1;
				}
				
table#t01 {
				  width: 100%;  
					padding: 30px;
					spacing:20px;
					text-align: left;
				 background-color: #f1f1c1;
				
				
				  border-spacing: 20px;
				  font-family: Lucida Calligraphy; 
				 // font-weight:bold;
				  font-size: 15pt;
				}
</style>
<body>
<div id="mySidenav" class="sidenav">
  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  	<a href="adminhome.html">Home</a>
	
  	<a href="inserv.html">Services</a>
  	<a href="adminloan.php">Marriage loan</a>
	<a href="adminpayment.php">Payment</a>
	<a href="adminsuccess.php">Success story</a>
  	<a href="adminfeedback.php">Feedback</a>
	
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
	
	<div id="feedback">
	Services opted by Users:
	<table id="t01" >
	<tr>
				<td><font face="arial" size="5"><b>Profile Id</b></font></td>
				<td><font face="arial" size="5"><b>Service name</b></font></td>
				
				<td><font face="arial" size="5"><b>Number of services</b></font></td>
							
				</tr>
	<?php
 while($row1= mysql_fetch_array($show)) 

{

                 $profile_id=$row1['profile_id'];
				 $sn=$row1['service_name'];
				 $no=$row1['no'];
				 				            
?>				
				<tr>
								
				<td>
				<?php echo $profile_id; ?>
				 </td>
				 
				 <td>
				<?php echo $sn; ?>
				 </td>
				 <td>
				<?php echo $no; ?>
				 </td>
				 	
				</tr>
				
<?php	
            
}?>
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
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>	
</body>
</html>