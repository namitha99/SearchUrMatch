<html>
<head>
<title>SERVICE PAGE</title>

<link rel="stylesheet" type="text/css" href="style_service.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="style_sidemenu.css"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>

#bt {
	 border: none;
	 outline: 0;
	display: inline-block;
	padding: 8px;
	color:white;
	background-color:#cc6476;
	//background-color: #000;
	text-align: center;
	cursor: pointer;
	width: 30%;
	height:100px;
	 font-size: 18px;
	 font-weight:bold;
}

#service
{
//background: RGBA(7,40,195,0.1);
//background: RGBA(195,100,90,0.5);
	width:800px;
position:relative;
left:200px;
margin-top:10px;
}
#pic
{
//background: RGBA(7,40,195,0.1);
//background: RGBA(195,10,90,0.5);
//background-color:#000000;
 background-color: #ffffff;
	width:100px;
	 border-radius: 100px;
position:absolute;
left:520px;
margin-top:100px;
}


ol, ul {
    list-style: none;
}
blockquote, q {
    quotes: none;
}
blockquote:before, blockquote:after, q:before, q:after {
    content:'';
    content: none;
}
.menu {
    position: relative;
    margin-top: 50px;
    margin-left: 50px;
	background-color:#cc6476;
}
.m-item {
    color: white;
    //text-decoration: none;
	font-size:18px;
	font-weight:bold;
   // text-transform: uppercase;
    border: 2px solid #000;
    background-color:#000;
       padding: 58px;
    position: absolute;
    transform: translate(0) rotate(0deg);
}
.m-item span {
    position: absolute;
	margin-top:30px;
	    transform: rotate(-45deg) translate(0, -55px);
}
.m-item:hover {
    background-color: #AA5;
}
#m1 {
    transform: translate(200px, 0px) rotate(45deg);
	//background-color: #ffb3b3;
}
#m2 {
    transform: translate(110px, 90px) rotate(45deg);
		//background-color:#ff8080;
}
#m3 {
    transform: translate(19px, 185px) rotate(45deg);
	//background-color:#ff80b3;
}
#m4 {
    transform: translate(380px, 0px) rotate(45deg);
	//background-color:#ff8080;
}
#m5 {
    transform: translate(290px, 90px) rotate(45deg);
}
#m6 {
    transform: translate(200px, 183px) rotate(45deg);
}
#m7 {
    transform: translate(560px, 0px) rotate(45deg);
}
#m8 {
    transform: translate(470px, 90px) rotate(45deg);
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
	<div id="service">
	<form method="post">
	<ul class="menu">
    <li><a href="accept.php?ser=apparel" id="m1" class="m-item" ><span>Apparel</span></a>

    </li>
    <li><a href="accept.php?ser=jewellery" id="m2" class="m-item"><span>jewellery</span></a>

    </li>
    <li><a href="accept.php?ser=catering" id="m3" class="m-item"><span>catering</span></a>

    </li>
    <li><a href="accept.php?ser=photography" id="m4" class="m-item"><span>photography</span></a>

    </li>
    <li><a href="accept.php?ser=decorator" id="m5" class="m-item"><span>decorator</span></a>

    </li>
    <li><a href="accept.php?ser=registration" id="m6" class="m-item"><span>registration</span></a>

    </li>
    <li><a href="accept.php?ser=beautician" id="m7" class="m-item"><span>beautician</span></a>

    </li>
    <li><a href="accept.php?ser=invitation" id="m8" class="m-item"><span>invitation</span></a>

    </li>
</ul>
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



</body>

</html>
