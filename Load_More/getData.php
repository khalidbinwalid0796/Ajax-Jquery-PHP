<?php
include('database.php');
$cat_id=$_GET['id'];
/* $sql="select * from product_load where category_id= $cat_id order by product_name asc limit 7 OFFSET 4";
$res=mysqli_query($con,$sql); */

$sql="select id, product_name from product_load "; 
if($cat_id!=''){
	$sql.="where category_id= $cat_id order by product_name asc limit 7 OFFSET 4";
}
$res=mysqli_query($con,$sql);

/*     
    $arr=array();
    while($row=mysqli_fetch_assoc($res)){
        $arr[]=$row;
    }
    echo json_encode($arr);  
*/

   
/* 
    //new table a jokhon data show korate chai load more button ar upore

    $data=array();
    while($row=mysqli_fetch_assoc($res)){
        $data[]=$row;
    }
    if(isset($data['0'])){
        $html='<table class="table table-bordered"><thead>
            <tr>
                <th width="10%" align="right">Id</th>
                <th width="10%" align="right">Product Name</th>
            </tr>
            </thead>';
        foreach($data as $list){
            $html.='<tr>
                <td>'.$list['id'].'</td>
                <td>'.$list['product_name'].'</td>
            </tr>';
        }	
        $html.='</table>';
        echo $html;	
    }else{
        echo "Data not found";
    } 
*/ 



    
    //table ar sathe jokhon data show korte chai

    while($row=mysqli_fetch_assoc($res)){
        echo "<tr><td>".$row['id']."</td><td>".$row['product_name']."</td></tr>"; 
    }   


 
/*     
    //new table a jokhon data show korate chai load more button ar niche
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_assoc($res)){
            echo "<tr><td>".$row['id']."</td><td>".$row['product_name']."</td></tr>"; 
        }
    }else{
        echo "Not found";
    }  
*/


?>