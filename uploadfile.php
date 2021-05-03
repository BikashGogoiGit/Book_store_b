<?php
$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$submitbutton= $_POST['submit'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

$description= $_POST['title'];

if (isset($name)) {

$path= 'Uploads/files/';

if (!empty($name)){
if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';

}
}
}
$user = "user"; 
$password = ""; 
$host = "localhost"; 
$dbase = "testing"; 
$table = "fileup"; 


$connection= mysql_connect ($host, $user, $password);
if (!$connection)
{
die ('Could not connect:' . mysql_error());
}
mysql_select_db($dbase, $connection);


if(!empty($description)){
mysql_query("INSERT INTO $table (title, file)
VALUES ('$description', '$name')");
} 


mysql_close($connection);
?>