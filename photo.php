
<?php
error_reporting(0);
?>

	


<html>
<body>

<form action="" method="post" enctype="multipart/form-data">


			<input type="file" name="pic"  required>
			
			<input type="submit" class="button" value="submit" name="submit">
			
</form>


</body>
</html>


	
<?php

$servername = "localhost";
$username = "namitha";
$password = "namitha";
$dbname = "searchurmatch";
$conn = mysql_connect($servername, $username, $password);
$dbselect=mysql_select_db($dbname,$conn);
// Check connection




if($conn)
{
	//echo "  CONNECTION ESTABLISHED \r\n";

	if($dbselect)
	{
		
		//echo "Selected";
		if(isset($_POST['submit']))
		{
		$filename=$_FILES["pic"]["name"];
		$tempname=$_FILES["pic"]["tmp_name"];
		$folder="profile/".$filename;
		//echo $folder;
	move_uploaded_file($tempname,$folder);
	echo "<img src='$folder' height'100' width='100'>";
	$sql="insert into profile (photo) values('$folder')";
	if(mysql_query($sql,$conn))
		echo "inserted";
	else
		echo "not innserted";
		}
	}
	else "not selected";
	echo "display";
	$sql1="select photo from profile where profile_id=11";
  
  $result = mysql_query($sql1,$conn);
//$row = mysql_fetch_row($result);
$row = mysql_fetch_assoc($result);
$path=$row['photo'];
//echo $path;
echo "<img src='$path' height'100' width='100'>";
}
else "not connected";
?>


