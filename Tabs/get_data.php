<?php
include('database.php');
	$id=$_POST['id'];
	$sql="select id, title, des from page where id='$id'";
	$res=mysqli_query($con,$sql);
    $arr=array();
    while($row=mysqli_fetch_assoc($res)){
        $arr[]=$row;    
    }
	echo $arr['0']['des'];

?>