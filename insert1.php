

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
$co=$_POST['contactno'];

$p=$_POST['price'];
$a=$_POST['address'];


$photo=$_FILES['pic']["name"];
$tempname1=$_FILES["pic"]["tmp_name"];
$folder1="service/".$photo;
echo $folder1;
move_uploaded_file($tempname1,$folder1);
$conn = mysql_connect($servername, $username, $password);
$dbselect=mysql_select_db($dbname,$conn);
// Check connection

if($conn)
{
echo "  CONNECTION ESTABLISHED \r\n";

  if($dbselect)
	{
		echo "Selected";
  
  $sql="insert into service_provider (service_name,provider_name,price,contactno,address,image)
  values('$sm','$pn','$p','$co','$a','$folder1')";
 
  if(mysql_query($sql,$conn))
  { echo "created";
	
	header("Location:inserv.html");
	
  }
  else
	 echo "not created";
  
 
}else
   echo "not selected";

}
 else 

echo "not connected";
}
?>


