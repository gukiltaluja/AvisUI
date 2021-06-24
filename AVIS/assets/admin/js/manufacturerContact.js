 
    //Default data table
     $('#manufacturerContacttable_wrapper').DataTable();


      table = $('#manufacturerContacttable').DataTable( {
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
        table.buttons().container().appendTo( '#manufacturerContacttable_wrapper .row:eq(0) .col-md-6:eq(0)' );
    
$('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);
     console.log(modeln);
 // var modeln = ["adsdf","hghgh","dfgfgd"];     
      });


function manufacturerContactCreates()
  {
     debugger
    var a =  $("#manuName").val();

 debugger
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Manufacturer Name',
          icon: 'warning',
          
      });
      return;

  }
          else{

var json={
    "manufacturerId": $("#manuName").val(),
    "contactName":$("#contactName").val(),
    "phone":$("#phone1").val(),
    "phone2":$("#phone2").val(),
    "mobile": $("#mobile").val(),
    "emailId": $("#email").val(),
    "designation": $("#designation").val(),
    "region": $("#region").val(),
}

 debugger
$.ajax({
       url : manufacturarContactAdd,
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
                })
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


function getUsage(){
  var usage = callajaxAsParamData(getUsageTypeList,"");
  var usage = usage.data;
$.each(usage, function(i, usage) {
                $('#VehType').append($('<option/>').attr("value", usage.id).text(usage.usageType));

            });
}
var manufId = "";

function getModel(){
  var manuModel = callajaxAsParamData(getModelManufacturer,"");
   console.log(manuModel);
   var model = [];
   var manuModel = manuModel.data;
   for (var i = 0; i < manuModel.length; i++)
              {
                model.push(manuModel[i].modelName);

              }
              console.log(model);    
             
  $("#modelName").autocomplete({
            source: model,
            minLength: 1,
            select: function (event, ui) {
              var index = model.indexOf(ui.item.value);
              debugger
               modelId = manuModel[index].modelId;
              console.log(modelId);    
              $("#manuName").val(manuModel[index].manufacturerName);
              manufId = manuModel[index].manufacturerId;
              console.log("manufID: "+manufId);    
            }
        });

}


function getmanufacturerContactTable(){
  var manufacturerContact = callajaxAsParamData(getManufacturerContactList,"");
  var data = manufacturerContact.data;
  var count = 0;
  
   debugger
  for (var i = 0; i < data.length; i++) {
      var edit =  '<a onclick="getmanufacturerContactByIdclick('+data[i].id+')" ><i class="fa fa-edit" ></i></a>';
      //var edit =  '<a href="addeditmanufacturerContact/'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].manufacturer_name,
        data[i].contact_name,
        data[i].phone,
        data[i].phone_2,
        data[i].mobile,
        data[i].email_id,
        data[i].designation,
        data[i].region,
        data[i].status,
        edit,             
    ]);
}
table.columns.adjust().draw();
$("tbody #tb2").show();
}

function callajaxAsParamData(url,data)
    {
        var response="";
        $.ajax(
            {
                url :url,
                type: "get",
                data:  "",
                dataType:'json',
                async:false,
                success: function (result) {
                    response = result;
                }


            });
        return response;
    }
    
function callajaxAsStrData(url,data)
    {
        var response="";
        $.ajax(
            {
                url :url,
                async:false,
                type: "POST",
                data:  JSON.stringify(data),
                dataType:'json',
                success: function (result) {
                    response = result;
                }


            });
        return response;
    }

    function getmanufacturerContactByIdclick(id){
        debugger
          manufacturerContactsdata = callajaxByUrlVarData(getManufacturerContactById,id);
          manufacturerContact = manufacturerContactsdata.data;
          console.log(id);
          console.log(manufacturerContact);
          //alert(manufacturerContact);
          //alert(id);
          $('#manuName').val(manufacturerContact.manufacturerId);
          $('#contactName').val(manufacturerContact.contactName);
         // $('.update').removeClass('d-none');
          $('#phone1').val(manufacturerContact.phone);
          $('#phone2').val(manufacturerContact.phone2);
           $('#mobile').val(manufacturerContact.mobile);
          $('#email').val(manufacturerContact.emailId);
           $('#designation').val(manufacturerContact.designation);
          $('#region').val(manufacturerContact.region);
          $('#manufactureContactId').val(manufacturerContact.id);
        }

    //update start
       function manufacturerContactUpdate()
      {
          debugger
        var a = document.getElementById("manuName").value;
       if (a == "") {
          swal({
              title: 'Failed',
              text: 'Please Select Manufacturers Name',
              icon: 'warning',
          });
          return;
      }
       else{
           debugger
              var json={
                  "id":$("#manufactureContactId").val(),
                  "contactName": $("#contactName").val(),
                  "designation": $("#designation").val(),
                  "emailId": $("#email").val(),
                  "manufacturerId": parseInt($("#manuName").val()),
                  "mobile": $("#mobile").val(),
                  "phone": $("#phone1").val(),
                  "phone2": $("#phone2").val(),
                  "region": $("#region").val()
              }
             debugger
      console.log(json);
      debugger
      //alert(json);
      $.ajax({
             url : updateManufacturerContact,
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
               //alert("Failed. Please try again");
               swal("Successfully Updated", {
                    icon: "success",
                    })
                    location.reload();
           }   
       });
      }
    }
    
    function getManufacturer(){
        var manufacturer = callajaxAsParamData(getManufacturerList,"");
        var manufacturer = manufacturer.data;
        $.each(manufacturer, function(i, manufacturer) {
            $('#manuName').append($('<option/>').attr("value", manufacturer.id).text(manufacturer.manufacturerName));
        });
    }
    
    
//update end

// fuelT()
// getfueltType();
// getseg()
getManufacturer()
getUsage()
getModel()
getmanufacturerContactTable();