
<?php
session_start();
$servername = "localhost";
$username = "namitha";
$password = "namitha";
$dbname = "searchurmatch";

$payment_mode=$_POST['mode'];
$payment_bank=$_POST['bank'];

// Create connection
$conn = mysql_connect($servername, $username, $password);
$dbselect=mysql_select_db($dbname,$conn);
// Check connection




if($conn)
{
echo "  CONNECTION ESTABLISHED \r\n";

  if($dbselect)
	{
		
  echo "Selected";
  
  if(isset($_SESSION['USER']))
  {
    //echo $_SESSION['USER'];
	$user=$_SESSION['USER'];
  
  
  if(isset($_SESSION['PASS']))
  {
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
  
  $sql="insert into payment (profile_id,payment_mode,payment_bank,payment_status,payment_amt) values('$id','$payment_mode','$payment_bank','paid','1000')";
 
  if(mysql_query($sql,$conn))
  { echo "created";
	header("Location:home.html");
  }
  else
	 echo "not created";
  }
  }
  else
	  echo "no session";
}else
   echo "not selected";

}
 else 

echo "not connected";

?>


