<?php
include('db.php');
	if(isset($_POST['submit'])){

	/*		
		$itemArr=$_POST['name'];
		foreach($itemArr as $list){
			if($list!=''){
				$sql="insert into dynamic_field(name) values('$list')";
				$res = mysqli_query($con,$sql);
			}
		}*/
		
	for($i = 0; $i < count($_POST['name']); $i++)
	{
	    $name = mysqli_real_escape_string($con, $_POST['name'][$i]);
	    $city = mysqli_real_escape_string($con, $_POST['city'][$i]);

	    $sql = "INSERT INTO dynamic_field(name, city)VALUES('$name', '$city')";
	    mysqli_query($con, $sql);
	}

	}
?>

<form method="post">
	<div id="wrap">
		<div class="my_box">
			<div class="field_box"><input type="textbox" name="name[]" id="name"></div></br>
			<div style="margin-top: 10px;"><input type="textbox" name="city[]" id="city"></div>
			<div class="button_box" style="margin-top: 10px;"><input type="button" name="add_btn" value="Add More" onclick="add_more()"></div>
		</div>
	</div>
	<input type="submit" value="Add Record" name="submit">
	<input type="hidden" id="box_count" value="1">
</form>

<style>
#wrap{width:20%;}
.my_box{width:100%; padding-bottom:36px;}
.field_box{float:left;width:80%;}
.button_box{float:left;width:20%;}
</style>

<script src="jquery-1.4.1.min.js"></script>

<script>
function add_more(){
	var box_count=jQuery("#box_count").val();
	box_count++;
	jQuery("#box_count").val(box_count);
	jQuery("#wrap").append('<div class="my_box" id="box_loop_'+box_count+'"><div class="field_box"><input type="textbox" name="name[]" id="name"></div></br><div style="margin-top: 10px;"><input type="textbox" name="city[]" id="city"></div><div class="button_box"style="margin-top: 10px;"><input type="button" name="submit" id="submit" value="Remove" onclick=remove_more("'+box_count+'")></div></div>');
}
function remove_more(box_count){
	jQuery("#box_loop_"+box_count).remove();
	var box_count=jQuery("#box_count").val();
	box_count--;
	jQuery("#box_count").val(box_count);
}
</script>