<?php
session_start();
$servername = "localhost";
$username = "namitha";
$password = "namitha";
$dbname = "searchurmatch";

if(isset($_POST['submit']))
{
$id1=$_POST['id1'];
$id2=$_POST['id2'];
$sid=$_POST['sid'];
$des=$_POST['des'];
$photo=$_FILES['pic']["name"];
$tempname1=$_FILES["pic"]["tmp_name"];
$folder1="profile/".$photo;
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
  
  $sql="update success_story set image='$folder1',
								description='$des' where profile_id1='$id1' and profile_id2='$id2'";
 
  if(mysql_query($sql,$conn))
  { echo "updated";
	
	//header("Location:inserv.html");
	
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



