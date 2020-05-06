
<?php
session_start();
$servername = "localhost";
$username = "namitha";
$password = "namitha";
$dbname = "searchurmatch";


// Create connection
$conn = mysql_connect($servername, $username, $password);
$dbselect=mysql_select_db($dbname,$conn);

$sql="select * from success_story where image is null";
 $show=mysql_query( $sql,$conn);
 
 
?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="style_front.css" />
<link rel="stylesheet" type="text/css" href="style_sidemenu.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>




/*
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
				}*/
#right
{	float:right;
	border-radius:50px;
	//border:solid;
	//background-color:#cc6476;
	//border:3px solid #f1f1f1;
	width:500px;
	margin:0;
	margin-top:150px;
	margin-right: 3em;
	background-color: #f1f1c1;
	
}


#left
{	float:left;
	border-radius:50px;
	//border:solid;
	//background-color:#cc6476;
	//border:3px solid #f1f1f1;
	width:450px;
	margin:0;
	margin-top:150px;
	margin-left:250px;
	
	
}
::placeholder {
  color: black;
  //font-weight:bold;
  font-size:18px;
 

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
	
	
	

		<div id="right">
	<div class="login-page">
		
		<form method="post" action="updatesuccess.php" enctype="multipart/form-data" onsubmit="update()">
		
			<input type="number" placeholder="profile ID1" name="id1" min="0" pattern="[+]?[0-9]" required>
			<input type="number" placeholder="profile ID2" name="id2" min="0" pattern="[+]?[0-9]" required>
			<input type="number" placeholder="story ID" name="sid" min="0" pattern="[+]?[0-9]" required>
			<input type="text" placeholder="description" name="des" maxlength="200" required>
			
			<label><b>Photo:</b> <span class="photo_des">Maximum size is 1MB and type is png/jpeg</span></label>
			<input type="file" name="pic" accept="image/png,image/jpeg" data-max-size="1">
			
			<input type="submit" class="button" value="UPDATE STORY" name="submit">
			
		</form>
		
	</div>
	</div>
	
	<div id="left">
	<b>Update profile with image and description:</b>
	<table id="t01">
	<tr>
				<td><font face="arial" size="5"><b>Profile Id1</b></font></td>
				<td><font face="arial" size="5"><b>Profile Id2</b></font></td>
				<td><font face="arial" size="5"><b>Story ID</b></font></td>
				
				
				
				
				
				</tr>
	<?php
 while($row1= mysql_fetch_array($show)) 

{

                 $profile_id1=$row1['profile_id1'];
				 $profile_id2=$row1['profile_id2'];
				 $si=$row1['story_id'];
				 $i=$row1['image'];
				 $des=$row1['description'];
				 
				 
				                
?>				
				<tr>
								
				<td>
				<?php echo $profile_id1; ?>
				 </td>
				 
				 <td>
				<?php echo $profile_id2; ?>
				 </td>
				<td>
				<?php echo $si; ?>
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
function update() 
	{
 	 //if(confirm('Do you want to continue with payment?'));
	alert('Success story updated');
	}
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>	
</body>
</html>
