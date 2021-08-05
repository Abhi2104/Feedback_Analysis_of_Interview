<?php
$name=$_GET["name"];
//$email=$_GET["email"];
$company=$_GET["company"];
$date=$_GET["date"];
$id=$_GET["id"];


$conn=new mysqli("localhost","root","","student");
if($conn->connect_error)
{
    die("Error in connection".conn->connect_error);
}
$sql="insert into facultydata values('$id','$name','$company','$date')";

 $result=$conn->query($sql);

if($result)
{
  header('Location: faculty.php');
    
}
$conn->close();

?>
