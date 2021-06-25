<?php
    include('../database.php');
    $stu_id=$_POST['stu_id'];
    $sql="select * from student where id='$stu_id'";
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