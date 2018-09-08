<?php
$conn=mysqli_connect('localhost','root','root','formcreation');
if(!$conn)
{
	echo "Not connected";
}
else
{
	echo "Connected";
}
$username=$_POST['uname'];
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$mobile=$_POST['mobileno'];
$email=$_POST['mail'];
$date=$_POST['dob'];
echo "<br>".$username."<br>".$firstname."<br>".$lastname."<br>".$mobile."<br>".$email."<br>".$date;

$insert="INSERT INTO `signup`(`usrname`, `firstname`, `lastname`, `mobileno`, `email`, `date`) VALUES ('$username','$firstname','$lastname','$mobile','$email','$date')";
$query=mysqli_query($conn,$insert);
if(!isset($query))
{
	echo "not";
}
else
{
	header("location:/freshgrc/phpfiles/loginpage.php");
}
 ?>
