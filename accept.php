
<?php
session_start();
$servername = "localhost";
$username = "namitha";
$password = "namitha";
$dbname = "searchurmatch";
$service=$_GET['ser'];
$_SESSION['service']=$service;
//echo $service;
/*if(isset($_POST['apparel']))
{
	$service="apparel";
$_SESSION['service']=$service;
}
else if(isset($_POST['jewellery']))
{
	$service="jewellery";
	$_SESSION['service']=$service;
}
else if(isset($_POST['catering']))
{
	$service="catering";
	$_SESSION['service']=$service;
}
else if(isset($_POST['photography']))
{
	$service="photography";
	$_SESSION['service']=$service;
}
else if(isset($_POST['decorator']))
{
	$service="decorator";
	$_SESSION['service']=$service;
}
else if(isset($_POST['registration']))
{
	$service="registration";
	$_SESSION['service']=$service;
}
else if(isset($_POST['beautician']))
{
	$service="beautician";
	$_SESSION['service']=$service;
}
else if(isset($_POST['invitation']))
{
	$service="invitation";
	$_SESSION['service']=$service;
}*/
// Create connection
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
//echo $row["profile_id"];
  //echo $id;
  
  $sql="select provider_name,price,contactno,address,image from service_provider where service_name='$service'";
 $show=mysql_query( $sql,$conn);
 
 $sql2="select image from service_provider where service_name='$service'";
 $show2=mysql_query( $sql2,$conn);
 ?>
 
				<html>
				<head>
				<title>ACCEPT PAGE</title>
				
				
				<link rel="stylesheet" type="text/css" href="style_sidemenu.css"/>

				<meta name="viewport" content="width=device-width, initial-scale=1">
				</head>
				
				<style>
				#title   /*serachurmatch*/
				{
					border-radius:10px;
					//background-color:#ffe6e6;
					//background-color:#ffffff;
					background-color:#cc6476;
					border:3px solid #f1f1f1;
					width:1275px;
					width:100%;
					margin:0 auto;
					//font-size:130%;
					//position:fixed;
					
				}
				#service
				{float:left;
				//background: RGBA(7,40,195,0.1);
				//background: RGBA(195,100,90,0.5);
				width:800px;
				position:relative;
				left:250px;
				font-weight: bold;
				margin-top:50px;
				}
				
				#right_box
				{	float:right;
					//border-radius:10px;
					//background-color:#cc6476;
					//border:3px solid #f1f1f1;
					width:260px;
					margin:0;
					margin-top:50px;
					margin-right: 10px;
					
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
				
				.paybutton
				{
					background:#ffffff;;
					padding:14px;
					font-family:"Ubuntu";
					font-size:19px;
					cursor:pointer;
					margin-left:350px;
					
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
					
					<div id="right_box">
					
					<marquee width="160%" direction="up" height="400px" onmouseover="this.stop();" onmouseout="this.start();">
					<table>
					<?php
					 while($row1= mysql_fetch_array($show2)) 

					{
					$image=$row1['image'];
					
					?>
					<tr>
					<td>
					<?php echo "<img src='$image' height'250' width='250'>"; ?>
					</td>
					</tr>
					<?php
					}
					?>
					
					</table>
					</marquee>
					</div>
				
				<div id="service">
				<form method="post" action="service_submit.php" onsubmit="enableBtn()">
				<br>
				<td> <label><font size="6">Service : <?php echo $service; ?></font></label></td>
				<br>
				
				
				
				
				<table id="t01">
  
				<tr>
				<td><font face="arial" size="5"><b>Provider name</b></font></td>
				<td><font face="arial" size="5"><b>Price*</b></font></td>
				<td><font face="arial" size="5"><b>Contact number</b></font></td>
				<td><font face="arial" size="5"><b>Address</b></font></td>
				
				
				
				</tr>
<?php
 while($row1= mysql_fetch_array($show)) 

{

                 $provider_name=$row1['provider_name'];
				 $image=$row1['image'];
				 
                $price= $row1['price'];
                $contactno = $row1['contactno'];
                $address = $row1['address'];
?>				
				
				<tr>
				<td>
				<input type="checkbox" value="<?php echo $row1['provider_name']; ?>" name="list[]"><?php echo $provider_name; ?>
				
				 </td>
				
				<td>
				<?php echo $price; ?>
				 </td>
				 
				 <td>
				<?php echo $contactno; ?>
				 </td>
				 
				 <td>
				<label><?php echo $address; ?></label>
				 </td>
				 
				 				 
				</tr>
				
<?php	
            
}
  
  
?>
				
				</table>
				*All the prices are the starting price
				<br>
				<input type="submit" name="submit" value="Submit" id="checkBtn" class="paybutton">
				</form>
				</div>
				
				
				
				<script>
				function enableBtn() 
	{
 	 //if(confirm('Do you want to continue with payment?'));
	alert('service submitted');
	}
				</script>
				
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


function myfun()
{
alert('Application submitted');
}

function logout() 
	{
 	 //if(confirm('Do you want to continue with payment?'));
	alert('Logging out!!! See you soon');
	}
</script>
	
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>	
	
  <script src="try16.js"></script>
  
  <script type="text/javascript">
$(document).ready(function () {
    $('#checkBtn').click(function() {
      checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("You must check at least one checkbox.");
        return false;
      }

    });
});

</script>

<script>
function logout() 
	{
 	 //if(confirm('Do you want to continue with payment?'));
	alert('Logging out!!! See you soon');
	}
</script>
  
				</body>
				</html>
