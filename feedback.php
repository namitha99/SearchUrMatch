

<?php
session_start();
$servername = "localhost";
$username = "namitha";
$password = "namitha";
$dbname = "searchurmatch";

$question1=$_POST['q1'];
$question2=$_POST['q2'];
$question3=$_POST['q3'];

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
  
  $sql="insert into feedback (profile_id,question1,question2,question3) values('$id','$question1','$question2','$question3')";
 
  if(mysql_query($sql,$conn))
  { echo "created";
	if(mysql_query("call avgr('$id')",$conn))
		echo "proc exec";
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


