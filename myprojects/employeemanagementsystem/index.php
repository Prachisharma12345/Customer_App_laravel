<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP AJAX CRUD</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
</head> 
<body>
    <div class="container">
        <div class="alert alert-info">
            <h2 class="text-center">Employee Management System(EMS)</h2>
        </div>
        <button type="button" id="btnCreate" class="btn btn-success  float-end"  data-bs-toggle="modal" data-bs-target="#myModal"  >Create Employee</button>

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Employee</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="post" action="POST" id="frm">
                    <div class="form-group">
                <input type="hidden" name="sid" id="vid">
                        <label for="">Enter Name</label>
                        <input type="text" name="txtName" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Enter Eid</label>
                        <input type="text" name="txtEid" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Enter Password</label>
                        <input type="password" name="txtPassword" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Company Name</label>
                        <input type="text" name="txtCmpName" id="cmp" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary" id="btnAddEmployee">Add Employee</button>
                        <button type="button" class="btn btn-primary" id="btnUpdateEmployee">Update Employee</button>
                       
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
        </div>
        <!--Manage Employee -->
     <div>
                <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Company Name</th>
            </tr>
            </thead>
            <tbody>
           
            </tbody>
        </table>
    </div>
        

    </div>




<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>"
</body>
</html>