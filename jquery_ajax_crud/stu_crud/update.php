<?php
    include('../database.php');
    $id=$_POST['id'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $marks=$_POST['marks'];
    $sql="update student set name='$name', city='$city', marks='$marks' where id='$id'";
    $res=mysqli_query($con,$sql);

    echo "update";
?>