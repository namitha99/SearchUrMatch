<?php
session_start();
if(isset($_POST['login']))
{echo "submit";

$user="";
$pass="";
		if(isset($_POST['t4']))
		{
			$user=$_POST['t4'];
			echo $user;
		}
		if(isset($_POST['t5']))
		{	
		$pass=$_POST['t5'];
		echo $pass;
		}
		
		if($user=="admin" &&$pass=="Admin12")
		{	
			echo "hi";
		header("Location:adminhome.html");
		}
		else
		header("Location:admin.php");
		
	
}
?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<style>

.form input{
		font-family:"Roboto",sans-serif;
		
		outline: 1;
		background: #f2f2f2;
		width:100%;
		border:0;
		margin:0 0 15px;
		padding:15px;
		box-sizing:border-box;
		font-size:14px;
		
 }
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
</style>
<body>


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
	
	<div class="form">
	<form class="login-form"  method="post" action=" ">
			<b>
				<input type="text" name="t4" placeholder="user name" required>
				<input type="password" name="t5"  placeholder="password" required>
				<input type="submit" name="login" value="Login" >
				
				
				</b>
	</form>
	</div>
</body>
</html>