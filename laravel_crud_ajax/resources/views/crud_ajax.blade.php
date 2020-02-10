<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>Laravel CRUD Ajax</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<style>
	.container{
		padding: 0.5%;
	} 
	</style>
</head>
<body>
   <div class="container">
      <div class="row">
         <div class="col-12">
            <a href="javascript:void(0)" class="btn btn-success mb-2" id="create-new-user">Add User</a> 
            <table class="table table-bordered" id="laravel_crud">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody id="users-crud">
                  @foreach($users as $u_info)
                  <tr id="user_id_{{ $u_info->id }}">
                     <td>{{ $u_info->id  }}</td>
                     <td>{{ $u_info->name }}</td>
                     <td>{{ $u_info->email }}</td>
                     <!-- <td>
                        <a href="javascript:void(0)" id="edit-user" data-id="{{ $u_info->id }}" class="btn btn-info">Edit</a>
                        <a href="javascript:void(0)" id="delete-user" data-id="{{ $u_info->id }}" class="btn btn-danger delete-user">Delete</a>
                     </td> -->
                     <td>
                        <a href="{{ url('user_edit',[$u_info->id]) }}" class="btn btn-primary">Edit</a>
                           <td>
                        <form action="{{ url('user_destroy',[$u_info->id]) }}" method="post">
                           {{ csrf_field() }}
                           @method('DELETE')
                           <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure want to delete?')">Delete</button>
                        </form></td>
                    </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
            <!-- {{ $users->links() }} -->
         </div> 
      </div>

      <div class="modal fade" id="ajax-crud-modal" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title" id="userCrudModal"></h4>
               </div>
               <div class="modal-body">
                  <form id="userForm" name="userForm" class="form-horizontal">
                     <input type="hidden" name="user_id" id="user_id">
                     <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
                        </div>
                     </div>
 
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-12">
                           <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="" required="">
                        </div>
                     </div>
                  </form>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-primary" id="btn-save" value="create">Save changes</button>
               </div>
            </div>
         </div>
      </div>

   </div>
</body>

<script>
   $(document).ready(function () {
      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });
      
      /* Add User */
      $('#create-new-user').click(function () {
         $('#btn-save').val("create-user");
         $('#userForm').trigger("reset");
         $('#userCrudModal').html("Add New User");
         $('#ajax-crud-modal').modal('show');
    });

      /* Edit User */ 
      $('body').on('click','#edit-user',function() {
         var user_id = $(this).data('id');
         $.get('user_store/' + user_id + '/edit',function(data){
            $('#userCrudModal').html("Edit User");
            $('#btn-save').val("edit-user");
            $('#ajax-crud-modal').modal('show');
            $('#user_id').val(data.id);
            $('#name').val(data.name);
            $('#email').val(data.email);
         })
      });

      /* Delete */
      $('body').on('click','.delete-user',function(){
         var user_id = $(this).data("id");
         confirm("Are you sure want to delete.");

         $.ajax({
            type:"DELETE",
            url:"{{ url('crud_ajax') }}"+'/'+user_id,
            success: function (data) {
               $("#user_id_"+user_id).remove();
            },
            error: function (data) {
               console.log('Error:',data);
            }
         });
      });

      if($("#userForm").length > 0) {
         $("#userForm").validate({
            submitHandler: function(form) {
               var actionType = $('#btn-save').val();
               $('#btn-save').html('Sending...');

               $.ajax({
                  data:$('userForm').serialize(),
                  url: "https://www.google.com/",
                  type: "POST",
                  dataType:'json',
                  success: function (data) {
                     var user = '<tr id="user_id_' + data.id + '"><td>' + data.id + '</td><td>' + data.name + '</td><td>' + data.email + '</td>';
                     user += '<td><a href="javascript:void(0)" id="edit-user" data-id="' + data.id + '" class="btn btn-info">Edit</a></td>';
                     user += '<td><a href="javascript:void(0)" id="delete-user" data-id="' + data.id + '" class="btn btn-danger delete-user">Delete</a></td></tr>';
                     
                     if (actionType == "create-user") {
                        $('#users-crud').prepend(user);
                     } else {
                        $("#user_id_" + data.id).replaceWith(user);
                     }
 
                     $('#userForm').trigger("reset");
                     $('#ajax-crud-modal').modal('hide');
                     $('#btn-save').html('Save Changes');
                  },
                  error: function (data) {
                     console.log('Error:', data);
                     $('#btn-save').html('Save Changes');
                  }
               });
            }
         });
      }

   });
</script>

</html>