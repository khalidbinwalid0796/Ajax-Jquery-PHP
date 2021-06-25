<!DOCTYPE HTML>
<html>
<head>
	<style>
		#block {}
		#block h2{
			padding: 30px; 
			border:1px solid;
		}
	</style>
</head>
<body>
	<div id="block"></div>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script>
		var load_flag=0;
		loadMore(load_flag);
		function loadMore(start){
			jQuery.ajax({
			url:'get.php',
			data:'start='+start,
			type:'post',
			success:function(result) {
				jQuery('#block').append(result);
				load_flag+=6;
				}
			});
		}

		jQuery(document).ready(function(){
			jQuery(window).scroll(function(){
			if(jQuery(window).scrollTop()>=jQuery(document).height() - jQuery(window).height()){
					loadMore(load_flag);
				}
			});
		});

	</script>
	
</body>
</html>