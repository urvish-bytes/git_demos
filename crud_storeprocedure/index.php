<html>
<head>
    <title>PHP Ajax Crud With Stored Procedure</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color:#f1f1f1;
        }
        .box {  
            width:750px;
            padding:20px;
            background-color:#fff;
            border:1px solid #ccc;
            border-radius:5px;
            margin:auto auto;
        }
    </style>
</head>
<body>
    <div class="conatiner box">
    <!-- <form id="myform" name="myform"> -->
        <h4 align="center"><b>Ajax Crud With Store Procedure</b></h4> <br/>
        <div class="insert" align="right">
            <button type="buttom" name="insert" id="insert" class="btn btn-primary" style="width: 70px;font-weight: bold; font-size: 15px;">Add</buttom>
                <!-- onclick="window.location.reload();" -->
        </div>
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
    <!-- </form> -->
    </div>
</body>
</html>

<script>
    $(document).ready(function() {
        fetchUser();
        function fetchUser() {
            $(".insert").hide();
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
                $(".insert").hide();
                $.ajax({  
                    url : "action.php",  
                    method: "POST",  
                    data: {firstName:firstName, lastName:lastName, id:id, action:action},  
                    success:function(data) {
                        // alert(data);
                        fetchUser();  
                    } 
                });  
            } else {  
                alert('Both fields are required');
            }  
        }); 

        $(document).on('click', '.update', function() {  
            var id = $(this).attr("id");
            $(".insert").show();
            $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data) {
                    if (data.redirect) {
                        // data.redirect contains the string URL to redirect to
                            // var data = '';
                            // window.location.href = data.redirect;
                        $("#myform").replaceWith(data.form);
                    } else {
                        // data.form contains the HTML for the replacement form
                        $('#action').text("Edit");  
                        $('#user_id').val(id);  
                        $('#first_name').val(data.first_name);  
                        $('#last_name').val(data.last_name);  
                    }
                } 
           })  
        }); 

        // $(document).on('click', '.insert', function() {  
        //     if($('#action').text("Insert"))
        //             history.go(0);
        // }

        // $(document).on('click', '.insert', function() {  
        //     var id = $(this).attr("id");  
        //     // if(confirm("Are you sure you want to remove this data?")) {  
        //         var action = "insert";  
        //         $.ajax({  
        //             url:"action.php",  
        //             method:"POST",  
        //             data:{action:action},  
        //             success:function(data) {  
        //                 fetchUser();  
        //                 // alert(data);  
        //             }
        //         })  
        //     // } else {  
        //         // return false;  
        //     // }  
        // });   
        
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