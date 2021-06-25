<?php
sleep(1);
include('db.php');
$id=$_POST['id'];
$type=$_POST['type'];

if($type=='city'){
	$sql="select id,name from city where state_id='$id'";
}else{
	$sql="select id,name from state where country_id='$id'";
}

$html='';
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res)){
	$html.='<option value='.$row['id'].'>'.$row['name'].'</option>';
}
echo $html;
?>