<?php
include('database.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
		<!-- jquery cdn aikhane o use korle hoy -->
	</head>
	<body>
	<form action="" method="post" id="myform">
		<table border="1" cellspacing="5" cellpadding="5" id="formid">
			<tr>
				<td><b>Name</b></td>
				<td><input type="textbox" name="name" id="name">
					<span class="field_error" id="name_error"></span>
				</td>
			</tr>
			<tr>
				<td><b>City</b></td>
				<td>
					<select id="city">
						<option value="">Select City</option>
							<option>Kalaroa</option>
							<option>Satkhira</option>
					</select>
					<span class="field_error" id="city_error"></span>
				</td>
			</tr>
			<tr>
				<td><b>Marks</b></td>
				<td><input type="textbox" name="marks" id="marks">
					<span class="field_error" id="marks_error"></span></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="button" name="submit" value="Submit" id="Submit" onclick="submit_data()"></td>
			</tr>
		</table>
</form>
		<div class="form-output register_msg">
			<p class="form-messege field_error"></p>
		</div>

<script>
	function submit_data() {
		jQuery('.field_error').html('');
		var name=jQuery("#name").val();
		var city=jQuery("#city").val();
		var marks=jQuery("#marks").val();
		var is_error='';
		
		if(name==""){
			jQuery('#name_error').html('Please enter name');
			is_error='yes';
		}if(city==""){
			jQuery('#city_error').html('Please enter city');
			is_error='yes';
		}if(marks==""){
			jQuery('#marks_error').html('Please enter marks');
			is_error='yes';
		}

		if(is_error==''){
			jQuery.ajax({
				url:'send_data.php',
				type:'post',
				data:'name='+name+'&city='+city+'&marks='+marks,
				success:function(result){
					if(result=='insert'){
						jQuery('.register_msg p').html('Thank you for registration');
					}
				}	
			});
		}
		jQuery('#myform')[0].reset();
	}
	
</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<style>
		.field_error{color: red;}
	</style>
	</body>
</html>