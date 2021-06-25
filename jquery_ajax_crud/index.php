<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Php Ajax Crud</title>
  </head>
  <body>
    
<!-- Add Modal for data inserting -->
<div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class="col-md-12">   
                <div class="error-message">   
                </div>
            </div>
            <div class="col-md-6">  
                <lebel for="">Name</lebel>
                <input type="text" class="form-control name">
            </div>
            <div class="col-md-6">  
                <lebel for="">City</lebel>
                <input type="text" class="form-control city">
            </div>
            <div class="col-md-6">  
                <lebel for="">Marks</lebel>
                <input type="text" class="form-control marks">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary add_student">Save</button>
      </div>

      <div class="form-output register_msg">
			<p class="form-messege field_error"></p>
		</div>

    </div>
  </div>
</div>

<!-- View Modal -->
<div class="modal fade" id="viewStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Single Student View</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4 class="name_view"></h4>
        <h4 class="city_view"></h4>
        <h4 class="marks_view"></h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class="col-md-12">   
                <div class="error-message">   
                </div>
            </div>
            <div class="col-md-6">

            <!-- for data update --id pass -->
                <input type="hidden" id="edit_id">  

                <lebel for="">Name</lebel>
                <input type="text" class="form-control name_edit">
            </div>
            <div class="col-md-6">  
                <lebel for="">City</lebel>
                <input type="text" class="form-control city_edit">
            </div>
            <div class="col-md-6">  
                <lebel for="">Marks</lebel>
                <input type="text" class="form-control marks_edit">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update_student">Update</button>
      </div>

      <div class="form-output update_msg">
			<p class="form-messege field_error"></p>
		</div>

    </div>
  </div>
</div>


  <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Php Ajax Crud
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">
                    Add Student
                </button>
            </div>
            <div class="card-body ">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>Marks</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="studentdata">

                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
 </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>  
 $(document).ready(function(){  
    getData();


//update data
jQuery('.update_student').click(function(e){
    e.preventDefault();
    var id=jQuery("#edit_id").val();
      //alert(id);
		var name=jQuery(".name_edit").val();
    var city=jQuery(".city_edit").val();
    var marks=jQuery(".marks_edit").val();

    jQuery.ajax({
      url:'stu_crud/update.php',
      type:'post',
      data:{id:id, name:name, city:city, marks:marks},
      success:function(result){
        $('#editStudentModal').modal('hide');
        if(result=='update'){
          jQuery('.update_msg p').html('Thank you for Updating');
        }
        //After updateing studentdata empty kore dite hobe na data repeat hobe
        jQuery('#studentdata').html("");
        //After updateing again call getData() for refreshing to show last updateed data
        getData();
        var name=jQuery(".name_edit").val("");
        var city=jQuery(".city_edit").val("");
        var marks=jQuery(".marks_edit").val("");
      }
    });
	});

    /*   
        //way of catching id   
        var category_id=jQuery('#category_id').val();
        var supplier_id = $(this).val();
        data-id="<?php echo $id; ?>" 
        var last_id = $(this).data("id");
        <button id="{{ $row->id }}" onclick="productview(this.id)">Add to Cart</button>
    */

//edit data
$(document).on('click','.edit_student',function(){
        var stu_id= $(this).closest('tr').find('.stu_id').text();
        //alert(stu_id);
        jQuery.ajax({
				url:'stu_crud/editData.php',
				type:'post',
				data:{stu_id:stu_id},
				success:function(result){
          $.each(result, function(index,studentedit) {
              $('#edit_id').val(studentedit['id']);
              $('.name_edit').val(studentedit['name']);
              $('.city_edit').val(studentedit['city']);
              $('.marks_edit').val(studentedit['marks']);
        });
          $('#editStudentModal').modal('show');
				}
			});
    });


//view data
    $(document).on('click','.view_student',function(){
        var stu_id= $(this).closest('tr').find('.stu_id').text();
        //alert(stu_id);
        jQuery.ajax({
				url:'stu_crud/view.php',
				type:'post',
				data:{stu_id:stu_id},
				success:function(result){
            $.each(result, function(index,studentView) {
                $('.name_view').text(studentView['name']);
                $('.city_view').text(studentView['city']);
                $('.marks_view').text(studentView['marks']);
            });
            $('#viewStudentModal').modal('show');
				}
			});
    });

//insert data
    jQuery('.add_student').click(function(e){
            e.preventDefault();
            var name=jQuery(".name").val();
            var city=jQuery(".city").val();
            var marks=jQuery(".marks").val();

            jQuery.ajax({
              url:'stu_crud/submit.php',
              type:'post',
              data:{name:name, city:city, marks:marks},
              success:function(result){
                $('#addStudentModal').modal('hide');
                if(result=='insert'){
                  jQuery('.register_msg p').html('Thank you for registration');
                }
                //After inserting studentdata empty kore dite hobe na data repeat hobe
                jQuery('#studentdata').html("");
                //After inserting again call getData() for refreshing to show last inserted data
                getData();
                var name=jQuery(".name").val("");
                var city=jQuery(".city").val("");
                var marks=jQuery(".marks").val("");
              }
            });
			
		});

 });  

//fetch all data
 function getData(){
    jQuery.ajax({
        url:'stu_crud/getData.php',
        type:'get',
        success:function(result){
            //console.log(result);
            $.each(result, function(index,value) {
                //console.log(value['name']);
                jQuery('#studentdata').append('<tr>'+
                        '<td class="stu_id">'+value['id']+'</td>\
                        <td>'+value['name']+'</td>\
                        <td>'+value['city']+'</td>\
                        <td>'+value['marks']+'</td>\
                        <td>\
                            <a href="#" class="btn btn-info view_student">View</a>\
                            <a href="#" class="btn btn-primary edit_student">Edit</a>\
                            <a href="#" class="btn btn-danger">Delete</a>\
                        </td>\
                    </tr>');
                /* 
                //`` backtik use kore o kora jai
                jQuery('#studentdata').append('<tr><td>'+value['id']+'</td><td>'+value['name']+'</td><td>'+value['city']+'</td><td>'+value['marks']+'</td><td><a href="" class="btn btn-info"> View</a> <a href="" class="btn btn-primary">Edit</a> <a href="" class="btn btn-danger">Delete</a></td></tr>'); 
                */  
            });
        }
    })
}

 </script>

  </body>
</html>