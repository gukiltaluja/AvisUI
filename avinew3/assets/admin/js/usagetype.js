
    //Default data table
     $('#usagetypeTable_wrapper').DataTable();


      table = $('#usagetypeTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
debugger
   table.buttons().container().appendTo( '#usagetypeTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
    

$('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);

console.log(modeln);
 // var modeln = ["adsdf","hghgh","dfgfgd"];
     
      });

function usageTypeCreate()
  {
    var a = document.getElementById("usageType").value;
  var b = document.getElementById("rvCorrection").value;
 var c = document.getElementById("rmtbCorrection").value;  
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Usage Type',
          icon: 'warning',
          
      });
      return;

  }

   else{          
      var json={   
   // "id": modelId,
   // "manufacturerId": manufId,
    "usageType":$("#usageType").val(),
    "rvCorrection":$("#rvCorrection").val(),   
    "rmtbCorrection":$("#rmtbCorrection").val()
}

console.log(json);
 debugger
$.ajax({
       url : addUsageType,
       type: "POST",
       data:  JSON.stringify(json),
       dataType:'json',
       contentType: "application/json",
        async: true,
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


function getusagetypeTable(){
    var variant = callajaxAsParamData(getUsageTypeList,"");
   console.log(variant);
   var data = variant.data;
   var count = 0;
   debugger
      for (var i = 0; i < data.length; i++) {
    //netwt = netwt.toFixed(2)
    var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
    console.log(data.length);
    count++;
    table.row.add([
        count,
        data[i].usageType,
        data[i].rvCorrection,
        data[i].rmtbCorrection,
        data[i].commonFields.status,
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


fuelT()
getfueltType();
getseg()
getUsage()
getModel()
getusagetypeTable();