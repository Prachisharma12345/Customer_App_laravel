$(document).ready(function(){
    // get all employee
    get_all_employee();

    function get_all_employee(){
        $.ajax({
            url:"../employeemanagementsystem_replica/includes/get_all_employee.php",
            method:"POST",
            dataType:"json",
            success:function(res){
               getUser(res.userdata);
            }
        })

        
    }
   function getUser(response){
        var data="";
        $.each(response,function(index,value){

            data+="<tr>";
            data+="<td>"+(index+1)+"</td>";
            data+="<td>"+value.name+"</td>";
            data+="<td>"+value.emailid+"</td>";
            data+="<td>"+value.password+"</td>";
            data+="<td>"+value.company_name+"</td>";
            data+="<td> <button  id='edit' class='btn btn-info btnEdit ml-2'>Edit</button>";
             data+=" <button data-attr="+value.id+" id='del' class='btn btn-danger btnDel'>Delete</button></td>";

            data+="</tr>";
        });

        $("tbody").html(data);

   }


    $("#btnAddEmployee").click(function(){
        $.ajax({
            url: "../employeemanagementsystem_replica/includes/addemployee.php",
            method: "POST",
            data: $("#frm").serialize(),
            success:function(res){
                toastr.success(res,'Success',{timeOut:3000});
                $("#myModal").modal("hide");
                $("#name").val("");
                $("#email").val("");
                $("#pass").val("");
                $("#cnm").val("");
            }
            })
        })

        //delete employee

        $("body").on("click",".btnDel",function(){
            var id=$(this).parent("td").data("attr");
            alert(id);
        })
    })
