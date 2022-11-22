<!doctype html>
<html>
    <head>
        <!-- <title>Edit delete DataTables record with AJAX and PHP</title> -->

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Datatable CSS -->
        <link href='DataTables/datatables.min.css' rel='stylesheet' type='text/css'>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

        <!-- jQuery Library -->
        <script src="jquery-3.5.1.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bigdeal admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Bigdeal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="https://themes.pixelstrap.com/bigdeal/assets/images/favicon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="https://themes.pixelstrap.com/bigdeal/assets/images/favicon/favicon.ico" type="image/x-icon">
    
        
        <!-- Bootstrap JS -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>


        <!-- Datatable JS -->
        <!-- <script src="DataTables/datatables.min.js"></script> -->
       <!--  <style type="text/css">
            #insert
            {
            
                margin-left:85%;
                margin-bottom: 10px;
            }
        </style> -->
    </head>
    <body >
        <?php
        include("hhh.php");
        ?>
      <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Category
                                    <small>Bigdeal Admin panel</small>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>brand Category</h5>
                            </div>
                            <div class="card-body">

        <div class='container'>

            <!-- Modal -->
           <div align="right">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcourse" id="add">
                Add Brand
            </button>
                <!-- <button type="button"  data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Add</button> -->
            </div>
            <div id="updateModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Update</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name" >Bid</label>
                                <input type="text" class="form-control" id="bid" placeholder="Enter name" required>            
                            </div>
                            <div class="form-group">
                                <label for="email" >Bname</label>    
                                <input type="email" class="form-control" id="bname"  placeholder="Enter email">                          
                            </div>       
                            <!-- <div class="form-group">
                                <label for="gender" >Gender</label>
                                <select id='gender' class="form-control">
                                    <option value='male'>Male</option>
                                    <option value='female'>Female</option>
                                </select>              
                            </div>    -->
                            <!-- <div class="form-group">
                                <label for="city" >City</label>    
                                <input type="text" class="form-control" id="city"  placeholder="Enter city">                          
                            </div> -->
                            
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="txt_userid" value="0">
                            <button type="submit" class="btn btn-success btn-sm" id="btn_save">Save</button>
                            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Table -->
            <table id='userTable' class='display dataTable' width='100%'>
                <thead>
                    <tr>
                        <th>bid</th>
                        <th>bname</th>
                        <!-- <th>Email</th>
                        <th>Gender</th>
                        <th>City</th> -->
                        <th>Action</th>
                    </tr>
                </thead>
                
            </table>

        </div>
        

        <!-- Script -->
        <script src="DataTables/datatables.min.js"></script>
        <script>
        $(document).ready(function(){

            // DataTable
            var userDataTable = $('#userTable').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                'ajax': {
                    'url':'ajaxfile.php'
                },
                'columns': [
                    {data:'bid'},
                    { data: 'bname' },
                    // { data: 'email' },
                    // { data: 'gender' },
                    // { data: 'city' },
                    { data: 'action' },
                ]
            });


            // Update record
            $('#userTable').on('click','.updateUser',function(){
                var id = $(this).data('id');

                $('#txt_userid').val(id);

                // AJAX request
                $.ajax({
                    url: 'ajaxfile.php',
                    type: 'post',
                    data: {request: 2, id: id},
                    dataType: 'json',
                    success: function(response){
                        if(response.status == 1){
                            
                            $('#bid').val(response.data.bid);
                            $('#bname').val(response.data.bname);
                            // $('#email').val(response.data.email);
                            // $('#gender').val(response.data.gender);
                            // $('#city').val(response.data.city);

                        }else{
                            alert("Invalid ID.");
                        }
                    }
                });

            });


            // Save user 
            $('#btn_save').click(function(){
                var id = $('#txt_userid').val();

                var bname = $('#bname').val().trim();
                // var email = $('#email').val().trim();
                // var gender = $('#gender').val().trim();
                // var city = $('#city').val().trim();

                if(bname !=''){

                    // AJAX request
                    $.ajax({
                        url: 'ajaxfile.php',
                        type: 'post',
                        data: {request: 3, id: id,bname: bname},
                        dataType: 'json',
                        success: function(response){
                            if(response.status == 1){
                                alert(response.message);

                                // Empty the fields
                                $('#bname').val('');
                               // $('#gender').val('male');
                                $('#txt_userid').val(0);

                                // Reload DataTable
                                userDataTable.ajax.reload();

                                // Close modal
                                $('#updateModal').modal('toggle');
                            }else{
                                alert(response.message);
                            }
                        }
                    });

                }else{
                    alert('Please fill all fields.');
                }
            });


            // Delete record
            $('#userTable').on('click','.deleteUser',function(){
                var id = $(this).data('id');

                var deleteConfirm = confirm("Are you sure?");
                if (deleteConfirm == true) {
                    // AJAX request
                    $.ajax({
                        url: 'ajaxfile.php',
                        type: 'post',
                        data: {request: 4, id: id},
                        success: function(response){

                            if(response == 1){
                                alert("Record deleted.");

                                // Reload DataTable
                                userDataTable.ajax.reload();
                            }else{
                                alert("Invalid ID.");
                            }
                            
                        }
                    });
                }   
                
            });
        });
        </script>
    </div>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="addcourse" tabindex="-1" role="dialog" aria-labelledby="courseLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="courseLabel">Add Brand</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&#128473;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="courseform">
                        <div class="form-group row">
                            <label for="inputcourse" class="col-sm-3 col-form-label">Brand Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="bname" id="ebname" placeholder="Enter Brand Name">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="insert">Save</button>
                </div>
            </div>
        </div>
    </div>


<script>
$(document).ready(function() {
    $('#insert').on('click', function() {
        
        var bname = $('#ebname').val();
        
        if(bname!="" ){
            $.ajax({
                url: "insert.php",
                type: "POST",
                data: {
                    ebname: bname            
                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        $("#success").show();
                        $('#success').html('Data added successfully !');                        
                    }
                    else if(dataResult.statusCode==201){
                       alert("Error occured !");
                    }
                    
            
       
                }
            });
        }
        else{
            alert('Please fill all the field !');
        }
         });
});
</script>
 <?php
        include("fff.php");
        ?>
 </body>
</html>
