
<?php
session_start();
$servername = "localhost";
$username = "namitha";
$password = "namitha";
$dbname = "searchurmatch";

$conn = mysql_connect($servername, $username, $password);
$dbselect=mysql_select_db($dbname,$conn);



$amt=$_POST['t1'];
$witname=$_POST['t2'];
$income=$_POST['t3'];
$interest=$_POST['t4'];

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
/*
if(isset($_POST['t1'])){
 $filename = $_POST['t1'];
 echo $filename;
}
else{
 echo "POST filename is not assigned";
}

*/

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
  $sql="insert into loan (profile_id,loan_amt,witness_name,annual_income,interest) values('$id','$amt','$witname','$income','$interest')";
 echo $sql;
  if(mysql_query($sql,$conn))
  { echo "created";
	header("Location:home.html");
  }
  else
	 echo "not created";
  
}else
   echo "not selected";

}
 else 

echo "not connected";

?>

