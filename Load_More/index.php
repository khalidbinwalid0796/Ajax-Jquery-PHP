<?php
include('database.php');
$cat_id = '1';
$sql="select * from product_load where category_id= $cat_id order by product_name asc limit 4";
$res=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Fetch JSON Data with the help of PHP and Ajax</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<br /><br />
		<div class="container">
			<h2 align="center">Load More Data with the help of PHP and Ajax</a></h2>
			<div class="row">
				<div class="col-md-12">
					<br />			
					<div class="row">
						<div class="col-md-4">


							<div class="table-responsive" id="load_more">
								<table class="table table-bordered" >
									<thead>
										<th width="10%" align="right">Id</th>
										<th width="10%" align="right">Product Name</th>
									</thead>
									<tbody id="more_product">
										<?php
											while($row=mysqli_fetch_assoc($res)){   
												echo "<tr><td>".$row['id']."</td><td>".$row['product_name']."</td></tr>";   
											} 
										?>
									</tbody>
								</table>
							</div>

							<input type="button" id="add_btn" value="Load More" onclick="load_more('<?php echo $cat_id?>')"> 
							<br/><br/>

								
<!-- 							//new table a jokhon data show korate chai load more button ar niche			
							<div class="table-responsive" id="user_details" style="display:none">
								<table class="table table-bordered" >
									<thead>
										<th width="10%" align="right">Id</th>
										<th width="10%" align="right">Product Name</th>
									</thead>
									<tbody id="more_product">

									</tbody>
								</table>
							</div> --> 
						

						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			function load_more(id){
				if(id==''){
				jQuery('#user_details').hide();
				//jQuery('.add_btn').html('Loading..');
			}else{
				//('.add_btn').html('Loading..');
				jQuery.ajax({
					url:'getData.php',
					type:'get',
					data:'id='+id,
					success:function(result){
										
					/* 					    
						var json_data=jQuery.parseJSON(result);
						jQuery('#user_details').show();
						jQuery('#more_product').append(json_data);  	
					*/
					
					/* 		
						//new table a jokhon data show korate chai load more button ar upore				
						jQuery('#load_more').append(result);  
					*/ 
					
					 						
					 						
						//table ar sathe jokhon data show korte chai			
						//jQuery('#user_details').show();
						jQuery('#more_product').append(result); 
						//jQuery('#add_btn').attr('disabled',true);
						//jQuery('#add_btn').hide(); 
					 
					

						
					/* 						
						//new table a jokhon data show korate chai load more button ar niche				
						jQuery('#user_details').show();
						jQuery('#more_product').append(result);  
					*/ 
					
					}

				})
			}
			}
		</script>
	</body>
</html>

<!-- for more knowledge show live_search and fetchJSONData -->