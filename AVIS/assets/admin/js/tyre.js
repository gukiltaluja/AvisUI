    //Default data table
     $('#tyretable_wrapper').DataTable();


      table = $('#tyretable').DataTable( {
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


function tyreCreates()
  {
  var a = document.getElementById("modelName").value;
  var b = document.getElementById("manuName").value;
  var c = document.getElementById("tyreSize").value;
  var d = document.getElementById("tyreDescription").value;
  var e = document.getElementById("unitCost").value;
  var f = document.getElementById("setCost").value;
  var g = document.getElementById("avgLife").value;  
  var h = document.getElementById("costPerKm").value;
  
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
        
    "modelId": modelId,
    "manufacturerId": manufId,
    "tyreSize":$("#tyreSize").val(),
    "tyreDesc":$("#tyreDescription").val(),
    "unitCost":$("#unitCost").val(),
    "setCost": $("#setCost").val(),
    "avgLife": $("#avgLife").val(),
    "costPerKms": $("#costPerKm").val(),
}

 debugger
$.ajax({
       url : tyreCreate,
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
 //when got error
           alert("Failed. Please try again");
       }
   
   });
  // }
}

  }



function fuelT(){
    var fuelType = callajaxAsParamData(getfuelTypeList,"");
    var fuelType = fuelType.data;
$.each(fuelType, function(i, fuelType) {
                $('#fuelType').append($('<option/>').attr("value", fuelType.id).text(fuelType.fuel_type_name));
console.log(fuelType.fuel_type_name);
            });
}

function getfueltType(){
  var fuelTankType = callajaxAsParamData(getFuelTankTypeList,"");
  
  var fuelTankType = fuelTankType.data;
  $.each(fuelTankType, function(i, fuelTankType) {
    $('#fttype').append($('<option/>').attr("value", fuelTankType.id).text(fuelTankType.fuelTankTypeName));
//console.log(fuelTankType[i]);
});
 //  console.log(fuelTankType);
}

function getseg(){
  var seg = callajaxAsParamData(getVehicleSegmentList,"");
  
  var seg = seg.data;
$.each(seg, function(i, seg) {
                $('#segment').append($('<option/>').attr("value", seg.id).text(seg.vehicle_Segment_Name));
console.log(seg[i]);
            });
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


function getTyreTable(){
  var tyre = callajaxAsParamData(getTyreList,"");
  var data = tyre.data;
  var count = 0;
  
   debugger
  for (var i = 0; i < data.length; i++) {
      var edit =  '<a onclick="getTyreByIdclick('+data[i].id+')" ><i class="fa fa-edit" ></i></a>';
      //var edit =  '<a href="addedittyre/'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].modelManufacturerName,
        data[i].tyre_size,
        data[i].tyre_desc,
        data[i].unit_cost,
        data[i].set_cost,
        data[i].avg_life,
        data[i].cost_per_kms,
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

    function getTyreByIdclick(id){
        debugger
          tyresdata = callajaxByUrlVarData(getTyreById,id);
          tyre = tyresdata.data;
          console.log(id);
          console.log(tyre);
          //alert(tyre);
          //alert(id);
        //   $('#tyreSize').val(tyre.tyreSize);
        //   $('#tyreDescription').val(tyre.tyreDesc);
         // $('.update').removeClass('d-none');
          $('#tyreSize').val(tyre.tyreSize);
          $('#tyreDescription').val(tyre.tyreDesc);
           $('#setCost').val(tyre.setCost);
         // $('#tyreDescription').val(tyre.tyreSize);
           $('#modelName').val(tyre.modelName);
          $('#manuName').val(tyre.manufacturerName);
          $('#modelId').val(tyre.modelId);
          $('#manufactureId').val(tyre.manufacturerId);
          $('#unitCost').val(tyre.unitCost);
          $('#avgLife').val(tyre.avgLife);
          $('#costPerKm').val(tyre.costPerKms);
          $('#tyreId').val(tyre.id);
        }

//update start
       function tyreUpdate()
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
                   "costPerKms":parseInt($("#costPerKm").val()),
                //   "avgLife":parseInt($("#avgLife").val()),
                //   "unitCost":parseInt($("#unitCost").val()),
                  "id":$("#tyreId").val(),
                   "avgLife": parseInt($("#avgLife").val()), 
                  "manufacturerId": parseInt($("#manufactureId").val()),
                  "modelId": parseInt($("#modelId").val()),
                  "setCost": 1122,
                  "tyreDesc": $("#tyreDescription").val(),
                  "tyreSize": $("#tyreSize").val(),
                  "unitCost": parseInt($("#unitCost").val())
              }
             debugger
      console.log(json);
      debugger
      //alert(json);
      $.ajax({
             url : updateTyre,
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
//update end

// fuelT()
// getfueltType();
// getseg()
getUsage()
getModel()
getTyreTable();