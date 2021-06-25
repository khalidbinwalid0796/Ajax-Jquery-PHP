<?php
include('database.php');
$cat_id = '1';
$sql="select * from product_load where category_id= $cat_id order by id asc limit 4";
$res=mysqli_query($con,$sql);
$id = '';
?>
<html>  
     <head>  
          <title></title>  
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     </head>  
     <body>  
          <div class="container">  
               <br />  
               <br />  
               <br />  
               <div class="table-responsive">  
                    <h2 align="center">Load More Data using Ajax Jquery</h2><br />  
                    <table class="table table-bordered" id="load_data_table">  
                         <?php  
                         while($row = mysqli_fetch_array($res))  
                         {  
                         ?>  
                              <tr>  
                                   <td><?php echo $row["product_name"]; ?></td>  
                              </tr>  
                         <?php  
                         //catch the last id
                              $id = $row["id"];  
                         }  
                         ?>  
                         <tr id="remove_row">  
                              <td><button type="button" name="btn_more" data-id="<?php echo $id; ?>" data-cid="<?php echo $cat_id; ?>" id="btn_more" class="btn btn-success form-control">more</button></td>  
                         </tr>  
                    </table>  
               </div>  
          </div>  
     </body>  
</html>  
 <script>  
 $(document).ready(function(){  
      $(document).on('click', '#btn_more', function(){  
           var last_id = $(this).data("id");
		   //alert(last_id);
		   var cat_id = $(this).data("cid");  
		   $('#btn_more').html("Loading...");  
           $.ajax({  
                url:"getData.php",  
                method:"POST",  
                data:{last_id:last_id, cat_id:cat_id},  
                dataType:"text",  
                success:function(data)  
                {  
                     if(data != '')  
                     {  
                          $('#remove_row').remove();  
                          $('#load_data_table').append(data);  
                     }  
                     else  
                     {  
                          $('#btn_more').html("No Data");  
                     }  
                }  
           });  
           
      });  
 });  
 </script>