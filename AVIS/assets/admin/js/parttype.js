
    //Default data table
     $('#partTypeTable_wrapper').DataTable();
      table = $('#partTypeTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
  debugger
   table.buttons().container().appendTo( '#partTypeTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
   $('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);
      console.log(modeln);
      });

function partTypeCreate()
  {
    var a = document.getElementById("partTypename").value;
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Part Type',
          icon: 'warning',
          
      });
      return;

  }
   else{
          var json={
              "partTypeName": $("#partTypename").val(),                                 
             // "partPrice":$("#partPrice").val(),

          }
console.log(json);
 debugger
$.ajax({
       url : addPartType,
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

function getpartTypeTable(){
  var partType = callajaxAsParamData(getPartTypeList,"");
  var data = partType.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
       // var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
        var edit =  '<a onclick="findPartTypeById('+data[i].id+')" ><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].partTypeName,
        data[i].commonFields.status,
        edit        
    ]);
  
}
table.columns.adjust().draw();
$("tbody #tb2").show();
}

function findPartTypeById(id){
        debugger
          tyresdata = callajaxByUrlVarData(getPartTypeById,id);
          tyre = tyresdata.data;
          console.log(id);
          console.log(tyre);
          debugger
          $('#partTypename').val(tyre.partTypeName);
           $('#partTypeId').val(tyre.id);
        }

function partTypeUpdate(){
        var a = document.getElementById("partTypename").value;
       if (a == "") {
          swal({
              title: 'Failed',
              text: 'Please Enter Part Type Name',
              icon: 'warning',
              
          });
          return;
      }
       else{
              var json={
                  "id":$("#partTypeId").val(),
                  "partTypeName": $("#partTypename").val()
                  }
    
      $.ajax({
             url : updatePartType,
             type: "POST",
             data:  JSON.stringify(json),
             dataType:'json',
             contentType: "application/json",
              async: false,
              success: function (result) {
              var data=result;
              console.log(data);

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
               alert("Failed. Please try again");
           }   
       });
      }
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

getModel()
getpartTypeTable();