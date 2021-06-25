<?php
include('database.php');
$name=mysqli_real_escape_string($con,$_POST['name']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$marks=mysqli_real_escape_string($con,$_POST['marks']);

mysqli_query($con,"insert into student(name,city,marks) values('$name','$city','$marks')");
echo "insert";
?>