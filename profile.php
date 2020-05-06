

<?php
session_start();
$servername = "localhost";
$username = "namitha";
$password = "namitha";
$dbname = "searchurmatch";

if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];

$gender=$_POST['gender'];
$dob=$_POST['dob'];
$religion=$_POST['religion'];

$caste=$_POST['caste'];
$mother_tongue=$_POST['mother_tongue'];
$martial_status=$_POST['martial_status'];
$occupation=$_POST['occupation'];
$qualification=$_POST['qualification'];
$phone=$_POST['phone'];


$email=$_POST['email'];
$nationality=$_POST['nationality'];
$state=$_POST['state'];
$city=$_POST['city'];
$fathername=$_POST['fathername'];
$mothername=$_POST['mothername'];
$fatheroccupation=$_POST['fatherocc'];
$motheroccupation=$_POST['motherocc'];
$sibling=$_POST['sibling'];

$areas_of_interest=$_POST['interest'];
//echo $areas_of_interest;

$height=$_POST['height'];
///echo $height;

$complexion=$_POST['complexion'];
//echo $complexion;
$bloodgroup=$_POST['blood'];
//echo $bloodgroup;

$photo=$_FILES['pic']["name"];
$tempname1=$_FILES["pic"]["tmp_name"];
$folder1="profile/".$photo;
//echo $folder1;
move_uploaded_file($tempname1,$folder1);

$horo=$_FILES["horo"]["name"];
$tempname2=$_FILES["horo"]["tmp_name"];
$folder2="profile/".$horo;
//echo $folder2;
move_uploaded_file($tempname2,$folder2);


$availability="available";
//$match_id=$_POST['q2'];


// Create connection
$conn = mysql_connect($servername, $username, $password);
$dbselect=mysql_select_db($dbname,$conn);
// Check connection




if($conn)
{
//echo "  CONNECTION ESTABLISHED \r\n";

  if($dbselect)
	{
		
 // echo "Selected";
  
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
  
  $sql="insert into profile 
  (profile_id,fname,mname,lname,gender,dob,religion,caste,mother_tongue,martial_status,occupation,qualification,phone,
  email,nationality,state,city,fathername,mothername,fatheroccupation,motheroccupation,sibling,areas_of_interest,height,
  complexion,bloodgroup,photo,horoscope,availability)
  values
  ('$id','$fname','$mname','$lname','$gender','$dob','$religion','$caste','$mother_tongue','$martial_status',
  '$occupation','$qualification','$phone','$email','$nationality','$state','$city','$fathername','$mothername','$fatheroccupation'
  ,'$motheroccupation','$sibling','$areas_of_interest','$height','$complexion','$bloodgroup','$folder1','$folder2','$availability')";
 
  if(mysql_query($sql,$conn))
  { //echo "created";
	
	header("Location:home.html");
  }
  else
	 echo "technical glich";
  }
  }
  else
	  echo "no session";
}else
   echo "not selected";

}
 else 

echo "not connected";
}
?>


