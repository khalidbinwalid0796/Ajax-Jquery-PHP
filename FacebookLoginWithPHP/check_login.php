<?php
session_start();
$con=mysqli_connect('fdb29.awardspace.net','3663690_khalid','khalid02','3663690_khalid');
$name=mysqli_real_escape_string($con,$_POST['name']);
$id=mysqli_real_escape_string($con,$_POST['id']);

$res=mysqli_query($con,"select * from fbuser where fb_id='$id'");
$_SESSION['FB_ID']=$id;
$_SESSION['FB_NAME']=$name;
if(mysqli_num_rows($res)>0){
	
}else{
	mysqli_query($con,"insert into fbuser(name,fb_id) values('$name','$id')");
}
?>