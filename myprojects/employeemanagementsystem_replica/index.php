<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>   
<body>
<div class="container">
        <div class="alert alert-info">
            <h2 class="text-center">Employee Management System(EMS)</h2>
        </div>
        <button type="button" id="btnCreate" class="btn btn-success  float-right"  data-toggle="modal" data-target="#myModal"  >Create Employee</button>
<br>
      

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Employee </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

    
      <!-- Modal body -->
      <div class="modal-body">
                <form action="" method="post" id="frm">
                    <div class="form-group">
                        <label for="">Enter Name</label>
                        <input type="text" name="txtName" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="">Enter Email</label>
                        <input type="text" name="txtEid" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Enter Password</label>
                        <input type="password" name="txtPass" id="pass" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Company Name</label>
                        <input type="text" name="txtCmpName" id="cnm" class="form-control">
                    </div>
                    <div class="form-group">
                           <button type="button"  id="btnAddEmployee" class="btn btn-primary">Add Employee</button>
                    </div>
                </form>
            </div>
      

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- Manage Employee -->
<table class="table mt-5">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Company Name</th>
        <th class="pl-5">Action</th>
      </tr>

    </thead>
    <tbody>
      
    </tbody>
  </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<script src="js/script.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
</body>
</html>