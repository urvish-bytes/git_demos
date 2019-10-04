<html>
<head>  
    <title>PHP Ajax Crud With Stored Procedure</title>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="main.js"></script> -->

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
        <form id="user_form">
            <h4> Ajax Crud With Store Procedure </h4> <br/>

            <!-- <div class="col-md-6"> -->
                <label> First Name: </label>
                <input type="text" name="first_name" id="first_name" class="form-control"> <br/>
            <!-- </div> -->
            <!-- <div class="col-md-6"> -->
                <label> Last Name: </label>
                <input type="text" name="last_name" id="last_name" class="form-control"> <br/>
            <!-- </div> -->
            <div align="center">
                <input type="hidden" name="id" id="user_id">
                <button type="buttom" name="action" id="action" class="btn btn-warning">Add</buttom>
            </div>
            <div id="result" class="table-responsive">
                
            </div>
        </form>
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
                    $('#first_name').val();
                    $('#last_name').val();
                    $('#action').text("Add");
                    $('#result').html(data);
                }
            });
        }

        // $('#form').validate({
        //     submitHandler: function(form) {
        //         $.ajax({
        //             url: form.action,
        //             type: form.method,
        //             data: $(form).serialize(),
        //             success: function(response) {
        //                 $('#answers').html(response);
        //             }            
        //         });
        //     }
        // });


    });
</script>