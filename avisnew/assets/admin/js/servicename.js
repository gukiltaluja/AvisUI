
    //Default data table
     $('#serviceNameTable_wrapper').DataTable();
      table = $('#serviceNameTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
  debugger
   table.buttons().container().appendTo( '#serviceNameTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
   $('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);
      console.log(modeln);
      });

function serviceNameCreate()
  {
    var a = document.getElementById("insurance_company_name").value;
    var b = document.getElementById("accpacServiceCode").value;
    if(isNaN(b)) {
      swal({
          title: 'Failed',
          text: 'Service Code must be Enter Integer',
          icon: 'warning',          
      });
      return;
  }
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter serviceName Type',
          icon: 'warning',
          
      });
      return;
  }else if (b == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Service Code',
          icon: 'warning',
          
      });
      return;
  }
   else{
          var json={
              "serviceName": $("#insurance_company_name").val(),
              "accpacServiceCode" :parseInt($("#accpacServiceCode").val()),
          }
//console.log(json);

 debugger
$.ajax({
       url : addServiceName,
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
}

  }


var manufId = "";

// function getModel(){
//   var manuModel = callajaxAsParamData(getModelManufacturer,"");
//   console.log(manuModel);
//   var model = [];
//   var manuModel = manuModel.data;
//   for (var i = 0; i < manuModel.length; i++)
//               {
//                 model.push(manuModel[i].modelName);

//               }
//               console.log(model);    
             
//   $("#modelName").autocomplete({
//             source: model,
//             minLength: 1,
//             select: function (event, ui) {
//               var index = model.indexOf(ui.item.value);
//               debugger
//               modelId = manuModel[index].modelId;
//               console.log(modelId);    
//               $("#manuName").val(manuModel[index].manufacturerName);
//               manufId = manuModel[index].manufacturerId;
//               console.log("manufID: "+manufId);    
//             }
//         });

// }

function getserviceNameTable(){
  var serviceName = callajaxAsParamData(getServiceNameList,"");
  var data = serviceName.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].service_name,
        //data[i].price,
        //data[i].commonFields.status,
        edit        
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
//getModel()
getserviceNameTable();