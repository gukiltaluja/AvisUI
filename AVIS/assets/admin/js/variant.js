
    //Default data table
     $('#variantTable_wrapper').DataTable();


      table = $('#variantTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
debugger
   table.buttons().container().appendTo( '#variantTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
    

$('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);

console.log(modeln);
 // var modeln = ["adsdf","hghgh","dfgfgd"];
     
      });

function vehvariantCreate()
  {
    var a = document.getElementById("modelName").value;
  var b = document.getElementById("manuName").value;
 var c = document.getElementById("variant").value;
  var d = document.getElementById("cc").value;
  var e = document.getElementById("seatCap").value;
  var f = document.getElementById("fuelType").value;
  var g = document.getElementById("segment").value;  
  var h = document.getElementById("manuWarrenty").value;
  var i = document.getElementById("fttype").value;
  var j = document.getElementById("maxTenure").value;
  var k = "";
  var l = document.getElementById("rvCor").value;
  var m = document.getElementById("rrmtb").value;
  var n = document.getElementById("fuelEff").value;
  var o = document.getElementById("gstCess").value;
  var p = document.getElementById("VehType").value;
  var q = document.getElementById("transmission").value;
  var r = document.getElementById("emission").value;
  var s = "";
  

  
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Manufacturer Name',
          icon: 'warning',
          
      });
      return;

  }
  
  else if(b == "" || c == "" || d == "" || e == "" || f == "" || g == "" || h == "" || i == "" || j == "" || l == "" || m == "" || n == "" || o == "" || p == "" || q == "" || r == ""){
      swal({
          title: 'Failed',
          text: 'Please Fill All Fields',
          icon: 'warning',
      });
      return;
  }
 
          else{
          //  event.preventDefault();
//alert(modelId);
var json={
    "categoryCess": $("#gstCess").val(),
    "categoryGstCess": $("#gstCess").val(),
    "modelId": modelId,
    "manufacturerId": manufId,
    "emission":$("#emission").val(),
    "engineCc":$("#cc").val(),
    "features": "",
    "fuelEfficiency":$("#fuelEff").val(),
    "fuelTankTypeId": $("#fttype").val(),
    "fuelTypeId": $("#fuelType").val(),
    "manufacturerWarranty": $("#manuWarrenty").val(),
    "maxTenure": $("#fuelEff").val(),
    "ncap": 0,
    "rmtbCorrection": $("#rrmtb").val(),
    "rvCorrection": $("#rvCor").val(),
    "seatingCapacity": $("#seatCap").val(),
    "transmission": $("#transmission").val(),
    "variant": $("#variant").val(),
    "variantDisplayName": $("#variant").val(),
    "vehicleSegmentId": $("#segment").val(),
    "vehicleType": $("#VehType").val()

}

console.log(json);


//localStorage.setItem("xx", $("#hel").val());
 debugger
$.ajax({
       url : addVariant,
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


function getVariantTable(){
   var variant = callajaxAsParamData(getVariantList,"");
   console.log(variant);
   var data = variant.data;
   var count = 0;
   debugger
    for (var i = 0; i < data.length; i++) {
        var edit =  '<a onclick="getVariantByIdclick('+data[i].veriantId+')" ><i class="fa fa-edit" ></i></a>';
    console.log(data.length);
    
    count++;
    table.row.add([
        count,
        data[i].manufacturerName +" , "+ data[i].modelName + " , "+data[i].variantName ,
        data[i].carCategoryName,
        data[i].manufacturerWarranty,
        data[i].seatingCapacity,
        data[i].categoryGstCess,
		data[i].managementFees,
		data[i].engineCc,
		data[i].fuelTypeName,
		data[i].fuelTankTypeName,
		data[i].vehicleSegmentName,
		data[i].insuranceCompanyName,
		data[i].replacementCarCategoryName,
		data[i].hsnCode,
		data[i].sacCode,
		data[i].launchYear,
		data[i].ncap,
		data[i].maxTenure,
        edit
    ]);
  
}
table.columns.adjust().draw();
$("tbody #tb2").show();
}

function getVariantByIdclick(id){
        debugger
          officedata = callajaxByUrlVarData(getVariantById,id);
          officedata = officedata.data;
          console.log(id);
          console.log(officedata);
          //alert(manufacturerContact);
          //alert(id);
           $('#variantId').val(officedata.id);
           $('#variant').val(officedata.variant);
           $('#modelName').val(officedata.modelName);
           $('#manuName').val(officedata.manufacturerName);
           $('#modelId').val(officedata.modelId);
           $('#manufactureId').val(officedata.manufacturerId);
           $('#cc').val(officedata.engineCc);
           $('#seatCap').val(officedata.seatingCapacity);
           $('#fuelType').val(officedata.fuelTypeId);
          $('#segment').val(officedata.vehicleSegmentId);
          $('#manuWarrenty').val(officedata.manufacturerWarranty);
          $('#fttype').val(officedata.fuelTankTypeId);
          $('#maxTenure').val(officedata.maxTenure);
          $('#Features').val(officedata.features);
          $('#rvCor').val(officedata.rvCorrection);
          $('#rrmtb').val(officedata.rmtbCorrection);
          $('#fuelEff').val(officedata.fuelEfficiency);
          $('#gstCess').val(officedata.categoryGstCess);
          $('#VehType').val(officedata.vehicleType);
          $('#transmission').val(officedata.transmission);
          $('#emission').val(officedata.emission);
         // $('#transmission').val(officedata.transmission);
          $('#nCap').val(officedata.ncap);
          $('#variantDisplayName').val(officedata.variantDisplayName);
        }
    //update start
    function vehvariantUpdate(){
          debugger
        var a = document.getElementById("variant").value;
       if (a == "") {
          swal({
              title: 'Failed',
              text: 'Please Enter Variant',
              icon: 'warning',
          });
          return;
      }
       else{
           debugger
              var json={
                 // "id":parseInt($("#variantId").val()),
                 //  "variant": $("#variant").val(),
                //   "categoryGstCess": $("#gstCess").val(),
                //   "emission": $("#emission").val(),
                //   "engineCc": parseInt($("#cc").val()),
                //   "features": $("#Features").val(),
                //   "fuelEfficiency": parseInt($("#fuelEff").val()),
                //   "fuelTankTypeId": parseInt($("#fttype").val()),
                //   //"fuelTypeId": parseInt($("#fuelType").val()),
                //   "id":parseInt($("#variantId").val()),
                //   "manufacturerId": parseInt($("#manufactureId").val()),
                //   "manufacturerWarranty": parseInt($("#manuWarrenty").val()),
                //   "maxTenure": parseInt($("#maxTenure").val()),
                //   "modelId": parseInt($("#modelId").val()),
                //   "ncap": "NULL",
                //   "rmtbCorrection": parseInt($("#rrmtb").val()),
                //   "rvCorrection": parseInt($("#rvCor").val()),
                //   "seatingCapacity": parseInt($("#seatCap").val()),
                //   "transmission": "NULL",
                //   "vehicleSegmentId": 1,
                //   "vehicleType": "string",
    "id": parseInt($("#variantId").val()),
    // "variantDisplayName": "Altis Diesel 1.4J (HN)",
    "variantDisplayName": $("#variantDisplayName").val(),
    "modelId": parseInt($("#modelId").val()),
    "manufacturerId": parseInt($("#manufactureId").val()),   
    "variant": $("#variant").val(),
    "engineCc": parseInt($("#cc").val()),
    "seatingCapacity": parseInt($("#seatCap").val()),
    "fuelTypeId": parseInt($("#fuelType").val()),
    "vehicleSegmentId": parseInt($("#segment").val()),
    "manufacturerWarranty": parseInt($("#manuWarrenty").val()),
    "fuelTankTypeId": parseInt($("#fttype").val()),
    "maxTenure": parseInt($("#maxTenure").val()),
    "fuelEfficiency": 15,
    "rvCorrection": 0,
    "rmtbCorrection": 0,
    "transmission": "NULL",
    "categoryGstCess": "0.00",
    "vehicleType": "NE",
    "emission": "10",
    "features": "12",
    "ncap": "NULL"
              }
             debugger
      console.log(json);
      debugger
      //alert(json);
      $.ajax({
             url : updateVariant,
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
               alert("Failed. Please try again");
            //   swal("Successfully Updated", {
            //         icon: "success",
            //         })
            //         location.reload();
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
    
function ncap(){
  var ncapValue = callajaxAsParamData(getNcapTableList,"");
  var ncapValue = ncapValue.data;
    $.each(ncapValue, function(i, ncapValue) {
        $('#nCap').append($('<option/>').attr("value", ncapValue.id).text(ncapValue.ncapValue));
    });
}

function transmission(){
  var transmission = callajaxAsParamData(getTransmissionList,"");
  var transmission = transmission.data;
    $.each(transmission, function(i, transmission) {
        $('#transmission').append($('<option/>').attr("value", transmission.id).text(transmission.transmission));
    });
}

function emission(){
  var emission = callajaxAsParamData(getEmissionList,"");
  var emission = emission.data;
    $.each(emission, function(i, emission) {
        $('#emission').append($('<option/>').attr("value", emission.id).text(emission.emission));
    });
}


ncap()
transmission()
emission()
fuelT()
getfueltType();
getseg()
getUsage()
getModel()
getVariantTable();