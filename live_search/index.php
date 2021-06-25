<?php
include('db.php');
$sql="select name,email,phone from search";
	$res=mysqli_query($con,$sql);
    $data=array();
    while($row=mysqli_fetch_assoc($res)){
        $data[]=$row;    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Ajax Live Grid Search with PDO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style> 
#search{
  width: 15%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

#search:focus {
  width: 100%;
}
</style>
</head>
<body>

<div class="container">
	<div><h2>PHP Ajax Live Grid Search with PDO</h2></div>
	<div>&nbsp;</div>
	<div class="form-group">
		<input type="text" name="search" id="search" placeholder="Search.." onkeyup="search_data()">
	</div>
  <div>&nbsp;</div>

  <div id="search_table">
	<table class="table table-bordered"><thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
		  </tr>
		</thead>
		<?php foreach($data as $list){?>
		<tr>
			<td><?php echo $list['name']?></td>
			<td><?php echo $list['email']?></td>
			<td><?php echo $list['phone']?></td>
		</tr>
		<?php } ?>
	</table>
  </div>
  
</div>
<script>
function search_data(){
	var search=jQuery('#search').val();
	jQuery.ajax({
		method:'post',
		url:'getData.php',
		data:'search='+search,
		success:function(data){
			jQuery('#search_table').html(data);
		}
	});	
}


/* 
//using javascript
document
  .querySelector('#search')
  .addEventListener('keyup', function (e) {
    var search = e.target.value;
	jQuery.ajax({
		method:'post',
		url:'getData.php',
		data:'search='+search,
		success:function(data){
			jQuery('#search_table').html(data);
		}
	});
  }); 
*/

</script>
</body>
</html>
