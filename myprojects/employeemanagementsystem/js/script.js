$(document).ready(function(){
    //Get All Employees
    getAllemployee();

    function getAllemployee(){
        $.ajax({
            url:"includes/get_all_employee.php",
            method:"POST",
            dataType:"json",
            success:function(res){
                console.log(res);
                displayUser(res.userdata);                
            }
        })
       
    }
    function displayUser(response){
        var data = "";
        $.each(response,function(index,value){
            data += "<tr>";
            data += "<td>"+(index + 1)+"</td>";
            data += "<td>"+value.name+"</td>";
            data += "<td>"+value.email+"</td>";
            data += "<td>"+value.pwd+"</td>";
            data += "<td>"+value.company_name+"</td>";
            data +="<td data-attr="+value.id+"><button class='btn btn-info btnEdit ' id='edit'>Edit</button>";
            data +="<button class='btn btn-danger btnDel ' id='delete'>Delete</button></td>";
            data +="</tr>";
        });
        $("tbody").html(data);
    }
    //Add Employee
    $("#btnAddEmployee").click(function(){
                
        $.ajax({
            url:"includes/addemployee.php",
            method:"POST",
            data:$("#frm").serialize(),
            success:function(res){
                toastr.success(res, 'Success', {timeOut: 3000});
                $("#myModal").modal("hide");
                getAllemployee();
                $("#name").val("");
                $("#email").val("");
                $("#password").val("");
                $("#cmp").val("");
                

            }
              
        })
    })

    $("body").on("click",".btnDel", function(){
        var id=$(this).parent("td").data("attr");
        // alert(id);
        bootbox.confirm("Are you sure you want to delete this record?", function(result){ 
            
            if(result){
                $.ajax({
                    url:"includes/delete_employee.php",
                    method:"post",
                    data: {uid: id},
                    success:function(res){
                    //alert(res);
                    $(this).parent("td").parent("tr").remove();
                    toastr.success(res, 'Success', {timeOut: 3000});
                    getAllemployee();
                    closeButton: false;
                    }
                    })
            }else{
                bootbox.alert("Record not deleted");
            }
        });
    });

 
    $("body").on("click",".btnEdit",function(){
        var id=$(this).parent("td").data("attr");
        var name=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
        var email=$(this).parent("td").prev("td").prev("td").prev("td").text();
        var pwd=$(this).parent("td").prev("td").prev("td").text();
        var company_name=$(this).parent("td").prev("td").text();
        //alert(name);
         $("#vid").val(id); 
         $("#name").val(name);
         $("#email").val(email);
         $("#password").val(pwd);
         $("#cmp").val(company_name);
         $("#myModal").modal("show");
         $("#btnAddEmployee").hide();
         $("#btnUpdateEmployee").show();
     });



$("#btnUpdateEmployee").click(function(){
    $.ajax({
        url:"includes/updateemployee.php",
        method:"post",
        data:$("#frm").serialize(),
        success:function(res){
            //alert(res);
            $("#name").val("");
            $("#email").val("");
            $("#password").val("");
            $("#cmp").val("");
            $("btnUpdateEmployee").hide(); 
            $("btnAddEmployee").show();
            
            toastr.success(res,'Success',{timeOut:3000});
            getAllemployee();
            $("#myModal").modal("hide");

           
           
        }

    })
  

})
$("#btnCreate").click(function(){
         
    $("#btnUpdateEmployee").hide(); 
    $("#btnAddEmployee").show();
    
    console.log("hi");
   
   
   
})

})