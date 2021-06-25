<?php
include('database.php');
	$sql="select id, title, des from page";
	$res=mysqli_query($con,$sql);
    $arr2=array();
    while($row=mysqli_fetch_assoc($res)){
        $arr2[]=$row;    
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tabs</title>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<!-- jquery cdn aikhane o use korle hoy -->
		<style>
			#tabs{padding: 0px; margin: 0px; list-style: none;}
			#tabs li{float: left; background-color: #000;border: 1px solid #fff;padding: 10px;}
			#tabs li a{color: #fff;font-family: arial;text-decoration: none;}
			.tabs_content{border: 1px solid #000;width: 80%; padding: 10px;}
			.clear{clear: both;}
			.tabs_about{display: none;}
			.tabs_contact{display: none;}
		</style>
	</head>
	<body>
		<ul id="tabs">
			<?php foreach ($arr2 as $list) { ?>
			<li><a href="javascript:void(0)" onclick="tabs_click('<?php echo $list['id'] ?>')" id="<?php echo $list['id'] ?>_click"><?php echo $list['title'] ?></a>
			</li>
			<?php } ?>
		</ul>
		<div class="clear"></div>
		<div class="tabs_content">
			<?php echo $arr2['0']['des'] ?>;
		</div>

		<script>
			function tabs_click(type){
				jQuery('#tabs li a').css('text-decoration','none');
				jQuery('#'+type+'_click').css('text-decoration','underline');
				jQuery.ajax({
					url:'get_data.php',
					type:'post',
					data:'id='+type,
					success:function(data){
						//alert(data);
						jQuery('.tabs_content').html(data);
					}
				});

			}
		</script>
	</body>
</html>