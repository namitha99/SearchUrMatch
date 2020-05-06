<?php  

session_start();
$servername = "localhost";
$username = "namitha";
$password = "namitha";
$dbname = "searchurmatch";




// Create connection
$conn = mysql_connect($servername, $username, $password);
$dbselect=mysql_select_db($dbname,$conn);

  
  if(isset($_SESSION['USER']))
 	$user=$_SESSION['USER'];
  
  
  if(isset($_SESSION['PASS']))
  	 $pass=$_SESSION['PASS'];
 
  $sql1="select profile_id from login where username='$user' and password='$pass'";
  
  $result = mysql_query($sql1,$conn);

$row = mysql_fetch_assoc($result);

$id = $row["profile_id"]; 
 
if(isset($_POST['submit']))  
{  
if(($_SESSION['service'])=="apparel")
$service="apparel";
else if(($_SESSION['service'])=="jewellery")
$service="jewellery";
else if(($_SESSION['service'])=="catering")
$service="catering";
else if(($_SESSION['service'])=="photography")
$service="photography";
else if(($_SESSION['service'])=="decorator")
$service="decorator";
else if(($_SESSION['service'])=="registration")
$service="registration";
else if(($_SESSION['service'])=="beautician")
$service="beautician";
else if(($_SESSION['service'])=="invitation")
$service="invitation";


$checkbox1=$_POST['list']; 

$chk="";  
foreach($checkbox1 as $chk1)  
   {  
     // $chk .= $chk1.",";  
	 
     
   $sql2="insert into service_taken(profile_id,service_name,provider_name) values ('$id','$service','$chk1')";
$in=mysql_query($sql2,$conn);  
if($in==1)  
   {  
     echo'<script>alert("Services submitted")</script>';  
	header("Location:service.php");
   }  
 
   }   
}
?>  