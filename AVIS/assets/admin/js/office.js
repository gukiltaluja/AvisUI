 
    //Default data table
     $('#tyretable_wrapper').DataTable();


      table = $('#officeTable').DataTable( {
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


function officeCreates()
  {
  var a = document.getElementById("officeNameId").value;
  
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Office Name',
          icon: 'warning',
          
      });
      return;

  }
          else{

var json={
   // "officeName": $("#officeNameId").val(),
     "city": $("#officecity").val(),
  "cityId": 0,
  "contactEmail": "string",
  "contactPerson": "string",
  "country": $("#officeCountry").val(),
  "designation": "string",
  "gstn": $("#officeGst").val(),
  "officeAddress": $("#officeaddressId").val(),
  "officeName": $("#officeNameId").val(),
  "panNumber": $("#officePan").val(),
  "pincode": parseInt($("#officepincode").val()),
  "state": $("#officestate").val()
}

 debugger
$.ajax({
       url : addAvisOffice,
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




function getofficeTable(){
  var officeName = callajaxAsParamData(officeList,"");
  var data = officeName.data;
  console.log(data);
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        //var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
        var edit =  '<a onclick="getOfficeByIdclick('+data[i].id+')" ><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].officeName,
        data[i].officeAddress,
        data[i].pincode,
        data[i].city,
        data[i].state,
        data[i].country,
        data[i].gstn,
        data[i].panNumber,
        data[i].commonFields.status,
        edit        
    ]);
  
}
table.columns.adjust().draw();
$("tbody #tb2").show();
}

function getOfficeByIdclick(id){
        debugger
          officedata = callajaxByUrlData(avisOfficeById,id);
          officedata = officedata.data;
          console.log(id);
          console.log(officedata);
          //alert(manufacturerContact);
          //alert(id);
           $('#officeId').val(officedata.id);
           $('#officeNameId').val(officedata.officeName);
          // $('#contactEmail').val(officedata.contactEmail);
         //  $('#contactPerson').val(officedata.contactPerson);
           $('#officeCountry').val(officedata.country);
           $('#designation').val(officedata.designation);
           $('#officeGst').val(officedata.gstn);
           $('#officeaddressId').val(officedata.officeAddress);
           $('#officePan').val(officedata.panNumber);
           $('#officepincode').val(officedata.pincode);
        }
    //update start
    function officeUpdate(){
          debugger
        var a = document.getElementById("officeNameId").value;
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
                  "id":parseInt($("#officeId").val()),
                   "officeName": $("#officeNameId").val(),
                    "city": $("#officecity").val(),
  "cityId": 0,
  "contactPerson": "string",
  "contactEmail": "string",
"designation": "string",
  "country": $("#officeCountry").val(),
  "designation": "string",
  "gstn": $("#officeGst").val(),
  "officeAddress": $("#officeaddressId").val(),
  //"officeName": "string",
  "panNumber": $("#officePan").val(),
  "pincode": parseInt($("#officepincode").val()),
  "state": $("#officestate").val()
              }
             debugger
      console.log(json);
      debugger
      //alert(json);
      $.ajax({
             url : updateAvisOffice,
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


getofficeTable();