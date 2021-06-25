<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Jquery Textbox Autocomplete with the help of PHP</title>
  <!-- jQuery CSS CDN -->
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
  	<style>
	.auto{
		width:40%;
		border:2px soild #ccc;
		border-radius:4px;
		font-size:16px;
		padding:12px 20px 12px 40px;
	}
	</style> 
</head>
<body> 
    <!-- <input type='text' name='txt' placeholder="Enter Name" class='auto'> -->
   <div class="form-group">
		<label for="name" class=" form-control-label">Name</label>
		<input type="text" name="name" placeholder="Enter name" class="form-control auto">
	</div>
    <!-- jQuery CDN -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<!-- jQuery UI CDN -->
	<!-- autocomplete is defined in jquery-ui.min.js -->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
   
	<script>
	$(function(){
		$('.auto').autocomplete({
			source:'search.php',
			minLength:3
		});
	});
	</script>
</body>
</html>