 
    //Default data table
     $('#tyretable_wrapper').DataTable();


      table = $('#companyGroupTable').DataTable( {
      lengthChange: false,
     dom: 'Bfrtip',
        // buttons: [
        //     {
        //         extend: 'copy',
        //         title: 'Data export'
        //     },
        //     {
        //         extend: 'excel',
        //         title: 'Data export'
        //     },
        // ]
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
    debugger
        table.buttons().container().appendTo( '#tyretable_wrapper .row:eq(0) .col-md-6:eq(0)' );
    
$('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);
     console.log(modeln);
 // var modeln = ["adsdf","hghgh","dfgfgd"];     
      });


function companyGroupCreates()
  {
  var a = document.getElementById("groupNameId").value;
  
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Group Name',
          icon: 'warning',
          
      });
      return;

  }
          else{

var json={
    "groupName": $("#groupNameId").val(),
}

 debugger
$.ajax({
       url : addCompanyGroup,
       type: "POST",
       data:  JSON.stringify(json),
       dataType:'json',
       contentType: "application/json",
        async: false,
        success: function (result) {
        var data=result;
          debugger
              if(result.msg == "success")
              {
                swal("Successfully Saved", {
                icon: "success",
                });
                 location.reload()
            
              }
                    else if(result.msg == "exist"){
                        swal({
                            title: 'Failed',
                            text: 'Already Exist',
                            icon: 'warning',
                            showCancelButton: true,
                        })
                    }
                    else{
                        swal({
                            title: 'Failed To Saved',
                            icon: 'warning',
                            showCancelButton: true,
                        })
                    }

       },
        error: function (jqXHR,textStatus,errorThrown) {
 //when got error
           alert("Failed. Please try again");
       }
   
   });
  // }
}

  }

function getcompanyGroupTable(){
  var serviceName = callajaxAsParamData(CompanyGroupList,"");
  var data = serviceName.data;
  console.log(data);
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
       // var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
        var edit =  '<a onclick="getCompanyGroupByIdclick('+data[i].id+')" ><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].groupName,
        data[i].commonFields.status,
        edit        
    ]);
  
}
table.columns.adjust().draw();
$("tbody #tb2").show();
}

function getCompanyGroupByIdclick(id){
        debugger
          companyGroupdata = callajaxByUrlData(companyGroupById,id);
          companyGroupdata = companyGroupdata.data;
          console.log(id);
          console.log(companyGroupdata);
          //alert(manufacturerContact);
          //alert(id);
           $('#companyGroupId').val(companyGroupdata.id);
           $('#groupNameId').val(companyGroupdata.groupName);
        }
    //update start
    function companyGroupUpdate(){
          debugger
        var a = document.getElementById("groupNameId").value;
       if (a == "") {
          swal({
              title: 'Failed',
              text: 'Please Enter Supplier Type',
              icon: 'warning',
          });
          return;
      }
       else{
           debugger
              var json={
                  "id":$("#companyGroupId").val(),
                   "groupName": $("#groupNameId").val()
              }
             debugger
      console.log(json);
      debugger
      //alert(json);
      $.ajax({
             url : updateCompanyGroup,
             type: "POST",
             data:  JSON.stringify(json),
             dataType:'json',
             contentType: "application/json",
              async: false,
              success: function (result) {
              var data=result;
              console.log(data);
                //alert(result);
                debugger
                  if(result.msg == "success")
                  {
                    swal("Successfully Updated", {
                    icon: "success",
                    })
                    location.reload();
                
                  }
                        else if(result.msg == "exist"){
                            swal({
                                title: 'Failed',
                                text: 'Already Exist',
                                icon: 'warning',
                                showCancelButton: true,
                            })
                        }
                        else{
                            swal({
                                title: 'Failed To Saved',
                                icon: 'warning',
                                showCancelButton: true,
                            })
                        }
           },
            error: function (jqXHR,textStatus,errorThrown) {
              // alert("Failed. Please try again");
              swal("Successfully Updated", {
                    icon: "success",
                    })
                    location.reload();
           }   
       });
      }
    }
    
// function callajaxAsParamData(url,data)
//     {
//         var response="";
//         $.ajax(
//             {
//                 url :url,
//                 type: "get",
//                 data:  "",
//                 dataType:'json',
//                 async:false,
//                 success: function (result) {
//                     response = result;
//                 }


//             });
//         return response;
//     }
// function callajaxAsStrData(url,data)
//     {
//         var response="";
//         $.ajax(
//             {
//                 url :url,
//                 async:false,
//                 type: "POST",
//                 data:  JSON.stringify(data),
//                 dataType:'json',
//                 success: function (result) {
//                     response = result;
//                 }


//             });
//         return response;
//     }


getcompanyGroupTable();