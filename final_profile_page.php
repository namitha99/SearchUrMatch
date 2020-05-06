<html>
<head>
<title>PROFILE PAGE</title>

<link rel="stylesheet" type="text/css" href="style_profile.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="style_sidemenu.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>


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
	<div id="profile_page">
	 <i>Profile-Make Yourself Known!!!</i>

	</div>
	<div id="profile_details">
		
		<form method="post" action="profile.php" enctype="multipart/form-data">
			<div id="details">
			<label><b><i><u><h2>Personal Details:</h2></u></i></b></label>
			</div>

			<label><b>Name:</b></label>
			<input type="text" placeholder="first name" title="please include only char" pattern="[A-Za-z]*" maxlength="15" name="fname" required>
			<input type="text" placeholder="middle name" pattern="[A-Za-z]*" maxlength="15" name="mname">
			<input type="text" placeholder="last name" pattern="[A-Za-z]*" maxlength="15" name="lname" required>


			<label><b>Gender:</b></label>
			<input type="radio" name="gender" value="male"required>Male
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="lgbt">LGBT


			<label><b>Date:</b></label>
			
			<input type="date" id="date" name="dob" max="<?php echo date('Y-m-d'); ?>" >
			
			<label><b>Religion:</b></label>
			
			<select name="religion">
		                   
		                    <option value="Hindu" selected="selected" required>Hindu</option>
		                    <option value="Christian" selected="selected" required>Christian</option>
		                    <option value="Muslim" selected="selected" required>Muslim</option>
		                    <option value="Jain" selected="selected" required>Jain</option>
		                    <option value="Sikh" selected="selected" required>Sikh</option>
		                    
	                    </select>

			<label><b>Caste:</b></label>
			
			<select name="caste">
		
		<option value="sc/st" selected="selected" required>sc/st</option>
		<option value="obc" selected="selected" required>obc</option>
		<option value="gm" selected="selected" required>gm</option>
		</select>

			<label><b>Mother Tongue:</b></label>
			<input type="text" name="mother_tongue" pattern="[A-Za-z]*" maxlength="10" >


			<label><b>Martial status:</b></label>
			<input type="radio" name="martial_status" value="single">Single
			<input type="radio" name="martial_status" value="divorcee">Divorcee


			<label><b>Occupation:</b></label>
			<input type="text" name="occupation" pattern="[A-Za-z ]*" maxlength="25" >

			<label><b>Qualification:</b></label>
			
			<select name="qualification">
			
			<option value="MTech" selected="selected" required>MTech</option>
			<option value="BCom" selected="selected" required>BCom</option>
			<option value="MSc" selected="selected" required>MSc</option>
			<option value="Bsc" selected="selected" required>Bsc</option>
			<option value="LLB" selected="selected" required>LLB</option>
			<option value="MBBS" selected="selected" required>MBBS</option>
			<option value="BA" selected="selected" required>BA</option>
			<option value="BE" selected="selected" required>BE</option>
			</select>

			<label><b>Phone No:</b></label>
			<input type="tel" name="phone"
       			pattern="[0-9]{10}">


			<label><b>E-mail:</b></label>
			<input type="email" id="email" name="email"
			pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$" >


			<label><b>Nationality:</b></label>
			<input type="text" name="nationality" pattern="[A-Za-z]*" maxlength="25" >

			<label><b>State:</b></label>
			<input type="text" name="state" pattern="[A-Za-z]*" maxlength="25" >

			<label><b>City:</b></label>
			<input type="text" name="city" pattern="[A-Za-z]*" maxlength="25" >


			
			<div id="details">
			
			<label><b><i><u><h2>Family Details:</h2></u></i></b></label>
			</div>


			<label><b>Father's name:</b></label>
			<input type="text" name="fathername" pattern="[A-Za-z ]*" maxlength="25" >

			<label><b>Mother's name:</b></label>
			<input type="text" name="mothername" pattern="[A-Za-z ]*" maxlength="25" >

			<label><b>Father's occupation:</b></label>
			<input type="text" name="fatherocc" pattern="[A-Za-z ]*" maxlength="25">
			
			<label><b>Mother's occupation:</b></label>
			<input type="text" name="motherocc" pattern="[A-Za-z ]*" maxlength="25">

			<label><b>Siblings:</b></label>
			<input type="number" name="sibling" min="0" pattern="[+]?[0-9]">




			<div id="details">
			
			<label><b><i><u><h2>Other Details:</h2></u></i></b></label>
			</div>

			<label><b>Area's of interest:</b></label>
			<input type="text" name="interest" pattern="[A-Za-z]*" maxlength="40">


			<label><b>Height:</b><span class="height_des"> Specify in inches</span></label>
			<input type="number" name="height" min="0" step="any" pattern="[0-9][.][0-9]">

			<label><b>Complexion:</b></label>
			<input type="radio" name="complexion" value="fair">Fair
			<input type="radio" name="complexion" value="medium">Medium
			<input type="radio" name="complexion" value="brown">Brown

			<label><b>Blood Group:</b></label>
			<input type="radio" name="blood" value="A+">A+
			<input type="radio" name="blood" value="A-">A-
			<input type="radio" name="blood" value="B+">B+
			<input type="radio" name="blood" value="B-">B-
			<input type="radio" name="blood" value="AB+">AB+
			<input type="radio" name="blood" value="AB-">AB-
			<input type="radio" name="blood" value="O+">O+
			<input type="radio" name="blood" value="O-">O-

			<label><b>Photo:</b> <span class="photo_des">Maximum size is 1MB and type is png/jpeg</span></label>
			<input type="file" name="pic" accept="image/png,image/jpeg" data-max-size="1">

			
			<label><b>Horoscope:</b> <span class="photo_des">Maximum size is 1MB and type is png/jpeg</span></label>
			<input type="file" name="horo" accept="image/png,image/jpeg" data-max-size="1">
			
			<input type="submit" class="button" value="Submit" name="submit">
			
		</form>
		

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
	
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>	
	
  <script src="try16.js"></script>

</body>

</html>
