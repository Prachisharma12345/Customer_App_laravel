 <?php
//include 'connectdb.php';
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$passwod=$_POST['passwod'];
$cpassword=$_POST['cpassword'];
$address=$_POST['address'];
$role=$_POST['role'];
include 'fileupload.php';
if($passwod==$cpassword){
    include 'insert_table.php';
    echo '
        <script>
            alert("Registration successfull");
            window.location="../";
        </script>
    ';
} else {
    /*echo 
        <script>
            alert("Some error occcured!");
            window.location="../routes/register.html";
        </script>
    ';
    */
    echo '
            <script>
                alert("Password and Confirm Password does not match!");
                window.location("../routes/register.htm");
            </script>
         ';
}
?>