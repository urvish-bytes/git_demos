<html>
<head>  
    <title>PHP Ajax Crud With Stored Procedure</title>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    
    <style>  
        body  
        {  
          margin:0;  
          padding:0;  
          background-color:#f1f1f1;  
        }  
        .box  
        {  
          width:750px;  
          padding:20px;  
          background-color:#fff;  
          border:1px solid #ccc;  
          border-radius:5px;  
          margin:100px auto;  
        }  
    </style>  
</head>
<body>
    <div class="conatiner box">
        <h4 align="center"><b>Ajax Crud With Store Procedure</b></h4> <br/>

        <div class="col-md-6">
            <label> First Name: </label>
            <input type="text" name="first_name" id="first_name" class="form-control"> <br/>
        </div>
        <div class="col-md-6">
            <label> Last Name: </label>
            <input type="text" name="last_name" id="last_name" class="form-control"> <br/>
        </div>
        <div align="center">
            <input type="hidden" name="id" id="user_id">
            <button type="buttom" name="action" id="action" class="btn btn-warning" style="width: 200px;font-weight: bold; font-size: 15px;">Add</buttom>
        </div> <br>
        <div id="result" class="table-responsive">

        </div>
    </div>
</body>
</html>

<script>
    $(document).ready(function() {
        fetchUser();
        function fetchUser() {
            var action = "select";
            $.ajax({
                url: "select.php",
                method: "POST",
                data:{action:action},
                success:function(data){
                    $('#first_name').val('');
                    $('#last_name').val('');
                    $('#action').text("Add");
                    $('#result').html(data);
                }
            });
        }

        $('#action').click(function() {  
            var firstName = $('#first_name').val();  
            var lastName = $('#last_name').val();  
            var id = $('#user_id').val();  
            var action = $('#action').text();  
            
            if(firstName != '' && lastName != '') {  
                $.ajax({  
                    url : "action.php",  
                    method: "POST",  
                    data: {firstName:firstName, lastName:lastName, id:id, action:action},  
                    success:function(data) {
                        alert(data);  
                        fetchUser();  
                    },
                    error:function(){
                        alert("failed");
                    }  
                });  
            } else {  
                alert('Both fields are required');
            }  
        }); 

        $(document).on('click', '.update', function() {  
            var id = $(this).attr("id");  
            $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data) {
                    $('#action').text("Edit");  
                    $('#user_id').val(id);  
                    $('#first_name').val(data.first_name);  
                    $('#last_name').val(data.last_name);  
                } 
           })  
        });  
        
        $(document).on('click', '.delete', function() {  
            var id = $(this).attr("id");  
            if(confirm("Are you sure you want to remove this data?")) {  
                var action = "Delete";  
                $.ajax({  
                    url:"action.php",  
                    method:"POST",  
                    data:{id:id, action:action},  
                    success:function(data) {  
                        fetchUser();  
                        // alert(data);  
                    }
                })  
            } else {  
                return false;  
            }  
        });  

    });
</script>