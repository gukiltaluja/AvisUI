
    //Default data table
     $('#serviceNameTable_wrapper').DataTable();
      table = $('#emissionTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
  debugger
   table.buttons().container().appendTo( '#serviceNameTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
//   $('#manuName').change(function(){
//     var id = {"id": $("#manuName").val()}
//       console.log(id);
//       var modeln = callajaxAsStrData(getModelById,id);
//       console.log(modeln);
//       });

function emissionCreate()
  {
  var a = document.getElementById("emission").value;
  
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
    "emission": $("#emission").val(),
}

 debugger
$.ajax({
       url : addEmission,
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

// var manufId = "";

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

function getemissionTable(){
  var serviceName = callajaxAsParamData(getEmissionList,"");
  var data = serviceName.data;
  console.log(data);
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        //var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
        var edit =  '<a onclick="getEmissionByIdclick('+data[i].id+')" ><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].emission,
        data[i].commonFields.status,
        edit        
    ]);
}
table.columns.adjust().draw();
$("tbody #tb2").show();
}

function getEmissionByIdclick(id){
        debugger
          manufacturerContactsdata = callajaxByUrlVarData(getEmissionById,id);
          serviceSchedule = manufacturerContactsdata.data;
          console.log(id);
          console.log(serviceSchedule);
          //alert(manufacturerContact);
          //alert(id);
          $('#emission').val(serviceSchedule.emission);
          $('#emissionId').val(serviceSchedule.id);
        }
    //update start
    function emissionUpdate(){
          debugger
        var a = document.getElementById("emission").value;
       if (a == "") {
          swal({
              title: 'Failed',
              text: 'Please Enter Emission',
              icon: 'warning',
          });
          return;
      }
       else{
           debugger
              var json={
                  "id":$("#emissionId").val(),
                  "emission": $("#emission").val(),
              }
             debugger
      console.log(json);
      debugger
      //alert(json);
      $.ajax({
             url : updateEmission,
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

getemissionTable();