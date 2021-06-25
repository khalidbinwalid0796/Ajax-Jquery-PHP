<?php 
include('db.php');
$id=$_POST['id'];
$sql="delete from user where id='$id'";
$res = mysqli_query($con,$sql);
?>