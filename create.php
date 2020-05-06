<?php
session_start();
$servername = "localhost";
$username = "namitha";
$password = "namitha";
$dbname = "searchurmatch";

$user=$_POST['t1'];
$pass=$_POST['t2'];
$email=$_POST['t3'];
$year=$_POST['year'];
$gender=$_POST['gender'];

$cyear="";
$age="";
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
  $cyear='20'.date("y");
  echo $cyear;
  $age=$cyear-$year;
  
  echo $age;
 
  //if($gender=="female"&&($year<1989||$year>2001))  if($gender=="male"&&($year<1984||$year>1997))
	  if($gender=="female"&&($age<18))
  {
	  echo "not eligible f";
	 header("Location:final_front_page.html");
  }
  else if($gender=="male"&&($age<21))
  {
	?>  <script>alert("not eligible m");</script>
	<?php
	  header("Location:final_front_page.html");
  }
 else{
	 echo "eligible";
	
  $sql="insert into login (username,password,email) values('$user','$pass','$email')";
 
  if(mysql_query($sql,$conn))
  { echo "created";
	$_SESSION['USER']=$user;
	$_SESSION['PASS']=$pass;
	//echo $_SESSION['USER'];
	header("Location:final_payment_page.html");
  }
  else
	 echo "not created";
 }
}else
   echo "not selected";
	
}
 else 

echo "not connected";

?>

