<?php
session_start();
$servername = "localhost";
$username = "namitha";
$password = "namitha";
$dbname = "searchurmatch";

if(isset($_POST['submit']))
{
$sm=$_POST['service_name'];
$pn=$_POST['provider_name'];

$conn = mysql_connect($servername, $username, $password);
$dbselect=mysql_select_db($dbname,$conn);
// Check connection

if($conn)
{
echo "  CONNECTION ESTABLISHED \r\n";

  if($dbselect)
	{
		echo "Selected";
  
  $sql="delete from service_provider where service_name='$sm' and provider_name='$pn'";
 
  if(mysql_query($sql,$conn))
  { echo "deleted";
	
	header("Location:inserv.html");
	
  }
  else
	 echo "not deleted";
  
 
}else
   echo "not selected";

}
 else 

echo "not connected";
}
?>


