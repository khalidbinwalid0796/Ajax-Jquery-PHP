<?php
$term=$_GET['term'];
$con=mysqli_connect('localhost','root','','practise');
$sql="select name from autoinput where name like '%$term%'";
$res=mysqli_query($con,$sql);

    $data=array();
    while($row=mysqli_fetch_assoc($res)){
        $data[]=$row['name'];    
    }
    echo json_encode($data);
?>