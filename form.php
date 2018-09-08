<?php
$conn=mysqli_connect('localhost','root','root','form');
if(!$conn)
{
	echo "not connected";
}
else
{
	echo "connected";
}
echo "<br>";
$name=$_POST['name'];
$number=$_POST['number'];
$mail=$_POST['mail'];
echo $name;
echo "<br>";
echo $number;
echo "<br>";
echo $mail;
$insert="INSERT INTO `login`(`name`, `number`, `mail-id`) VALUES ('$name','$number','$mail')";
$query=mysqli_query($conn,$insert);
// $select="SELECT 'name','number' from login";
// $queryy=mysqli_query($conn,$select);
mysqli_close($conn);
?>