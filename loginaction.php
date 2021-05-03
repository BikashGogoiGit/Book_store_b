<?php
$con = mysqli_connect("localhost","root","","testing");
$name = $_POST['name'];
$password = $_POST['password'];
$name = stripcslashes($name);
$password = stripcslashes($password);
$name=mysqli_real_escape_string($con,$_REQUEST['name']);
$password=mysqli_real_escape_string($con,$_REQUEST['password']);

$sql="SELECT * FROM register WHERE username='$name' AND password='$password'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
if($row['username'] == $name && $row['password'] == $password)
{
	 header("Location: index.html");
}
else{
	echo "failed";
}
?>

