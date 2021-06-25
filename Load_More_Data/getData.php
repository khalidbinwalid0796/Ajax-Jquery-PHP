<?php
include('database.php'); 
$output = '';  
$id = '';  
$last_id=$_POST['last_id'];
$cat_id=$_POST['cat_id'];
sleep(1);  
$sql = "SELECT * FROM product_load WHERE category_id= $cat_id and id > $last_id order by id asc LIMIT 2";  
$result = mysqli_query($con, $sql);  
if(mysqli_num_rows($result) > 0)  
{  
     while($row = mysqli_fetch_array($result))  
     {  
          $id = $row["id"];  
          $cid = $row["category_id"]; 
          $output .= '  
               <tbody>  
               <tr>  
                    <td>'.$row["product_name"].'</td>  
               </tr></tbody>';  
     }  
     $output .= '  
               <tbody><tr id="remove_row">  
                    <td><button type="button" name="btn_more" data-id="'. $id .'" id="btn_more" data-cid="'. $cid .'" class="btn btn-success form-control">more</button></td>  
               </tr></tbody>  
     ';  
     echo $output;  
}  
?>
