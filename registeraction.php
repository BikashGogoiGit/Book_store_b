<?php
$con = mysqli_connect("localhost","root","","testing");
if($con == false){
	die("error!!".mysqli_connect_error($con));
} 
$uname = mysqli_real_escape_string($con,$_REQUEST['fname']);
$password = mysqli_real_escape_string($con,$_REQUEST['npassword']);
$email = mysqli_real_escape_string($con,$_REQUEST['email']);
$address = mysqli_real_escape_string($con,$_REQUEST['address']);
$sql = "INSERT INTO register (username,password,email,address) VALUES ('$uname','$password','$email','$address')";
if(mysqli_query($con,$sql)){
	echo "Registration sucsess";
	header("location: regsuccess.php");
}
else{
	echo "failed";
}
?>