<?php
include('../database.php');
$name=$_POST['name'];
$city=$_POST['city'];
$marks=$_POST['marks'];

mysqli_query($con,"insert into student(name,city,marks) values('$name','$city','$marks')");
echo "insert";
?>