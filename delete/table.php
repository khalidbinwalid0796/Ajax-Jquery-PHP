<?php 
include('db.php');
$sql="select * from user";
$res = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Grid</title>
      <!--<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic' rel='stylesheet'>-->
      <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
	<body style="padding-top: 100px;">
		<div>&nbsp;</div>
			<div class="container">
				<div class="table-responsive">
				  <table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Marks</th>
							<th>City</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php while($row=mysqli_fetch_assoc($res)){?>
						<tr id="tr_<?php echo $row['id']?>">
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['name']?></td>
							<td><?php echo $row['marks']?></td>
							<td><?php echo $row['city']?></td>
							<td><button type="button" class="btn btn-danger" onclick="delete_date('<?php echo $row['id']?>')">Delete</button></td>
						</tr>				
						<?php } ?>
					</tbody>
				  </table>
				</div>
			</div>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.js"></script>
		<script>
		function delete_date(id){
			jQuery.ajax({
				url:'delete.php',
				type:'post',
				data:'id='+id,
				success:function(result){
					jQuery('#tr_'+id).hide(500);
					//jQuery('#tr_'+id).slideUp();
				}
			});
		}
		</script>
	</body>
</html>