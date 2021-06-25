<?php
include('../database.php');
$sql="select * from student";
$res=mysqli_query($con,$sql);
$result_arr = [];
if(mysqli_num_rows($res) > 0) {
    foreach($res as $row){
        array_push($result_arr,$row);
    }
    header('Content-type: application/json');
    echo json_encode($result_arr);
}else {
    echo $return= "<h4>No Record Found</h4>";
}

?>