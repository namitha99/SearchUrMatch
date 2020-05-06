<?php
session_start();
$servername = "localhost";
$username = "namitha";
$password = "namitha";
$dbname = "searchurmatch";

$conn = mysql_connect($servername, $username, $password);
$dbselect=mysql_select_db($dbname,$conn);
// Check connection

$like_id=$_GET['id'];

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

echo $like_id;
echo $id;
$sql2="update profile
		set match_id='$like_id'
		where profile_id='$id'";
		
		if(mysql_query($sql2,$conn))
			//echo "updated";
		header("Location:home.html");
		
		else
			//echo "not updated";


?>
						