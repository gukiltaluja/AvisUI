
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

  
 /* else if( b == "" ){
      swal({
          title: 'Failed',
          text: 'Please Enter Model Name',
          icon: 'warning',
      });
      return;
  }
  
else if( f == "" ){
      swal({
          title: 'Failed',
          text: 'Please Enter Contact Number',
          icon: 'warning',
      });
      return;
  }
  else if( f.length != 10 ){
      swal({
          title: 'Failed',
          text: 'Please Enter Ten Digit Contact Number ',
          icon: 'warning',
      });
      return;
  }
  else if( isNaN(f)){
      swal({
          title: 'Failed',
          text: 'Please Enter Number',
          icon: 'warning',
      });
      return;
  }
  
  else if( i == 0 ){
      swal({
          title: 'Failed',
          text: 'Please Select government id',
          icon: 'warning',
      });
      return;
  }
  else if( !validateEmail(g)){
      swal({
          title: 'Failed',
          text: 'Invalid Email',
          icon: 'warning',
      
      });
  
      return;
  }*/
          else{
          //  event.preventDefault();
//alert(modelId);
var json={
    "clientCompanyDetais": {
        "ageOfCompany": $("#ageComp").val(),
        "assetsBase": $("#assetBase").val(),
        "auditors": $("#clientGrp").val(),
        "cinNumber": $("#cinNo").val(),
        "clientGroup": $("#clientGrp").val(),
        "clientType": $("#clientSale").val(),
        "companyTurnOverGl": $("#compTurnG").val(),
        "companyTurnOverIn": $("#compTurnI").val(),
        "companyType": $("#company-profile").val(),
        "corpAddress": $("#").val(),
        "corpCityName": $("#").val(),
        "corpCountry": $("#").val(),
        "corpGstn": $("#").val(),
        "corpPincode": $("#").val(),
        "corpStateName": $("#").val(),
        "detailOfShareHolders": $("#").val(),
        "economicSectors": $("#EcoSec").val(),
        "fleetPotential": $("#").val(),
        "fleetSize": $("#").val(),
        "keyBankers": $("#keyBankers").val(),
        "keyMgmtPerson": "string",
        "leadSource": $("#leadSource").val(),
        "legalStatus": $("#legalStatus").val(),
        "regAddress": $("#").val(),
        "regCityName": $("#").val(),
        "regCountry": $("#").val(),
        "regGstn":$("#").val(),
        "regPincode": $("#").val(),
        "regStateName": $("#").val(),
        "revenue": $("#revp").val()
      }

}

console.log(json);
/* "categoryCess": $("#gstCess").val(),
    "categoryGstCess": $("#gstCess").val(),
    
    "emission": 0,
    "engineCc": 1100,
    "features": "",
    "fuelEfficiency": 0.00,
    "fuelTankTypeId": 1,
    "fuelTypeId": 1,
    "manufacturerId": 1,
    "manufacturerWarranty": 3,
    "maxTenure": 60,
    "modelId": 3,
    "ncap": 0,
    "rmtbCorrection": 0,
    "rvCorrection": 0,
    "seatingCapacity": 5,
    "transmission": 0,
    "variant": "1.4",
    "variantDisplayName": "1.4",
    "vehicleSegmentId": 1,
    "vehicleType": "2"*/

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


fuelT()
function fuelT(){
    var fuelType = callajaxAsParamData(getfuelTypeList,"");
    var fuelType = fuelType.data;
$.each(fuelType, function(i, fuelType) {
                $('#fuelType').append($('<option/>').attr("value", fuelType.id).text(fuelType.fuel_type_name));
console.log(fuelType.fuel_type_name);
            });
}

getfueltType();
function getfueltType(){
  var fuelTankType = callajaxAsParamData(getFuelTankTypeList,"");
  
  var fuelTankType = fuelTankType.data;
  $.each(fuelTankType, function(i, fuelTankType) {
    $('#fttype').append($('<option/>').attr("value", fuelTankType.id).text(fuelTankType.fuelTankTypeName));
//console.log(fuelTankType[i]);
});
 //  console.log(fuelTankType);
}

getseg()
function getseg(){
  var seg = callajaxAsParamData(getVehicleSegmentList,"");
  
  var seg = seg.data;
$.each(seg, function(i, seg) {
                $('#segment').append($('<option/>').attr("value", seg.id).text(seg.vehicle_Segment_Name));
console.log(seg[i]);
            });
}
getUsage()
function getUsage(){
  var usage = callajaxAsParamData(getUsageTypeList,"");
  var usage = usage.data;
$.each(usage, function(i, usage) {
                $('#VehType').append($('<option/>').attr("value", usage.id).text(usage.usageType));

            });
}
var manufId = "";
getModel()
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

getVariantTable();
function getVariantTable(){
    var variant = callajaxAsParamData(getVariantsWithModelAndManufacturer,"");
   console.log(variant);
   var data = variant.data;
   var count = 0;
   debugger
   for (var i = 0; i < data.length; i++) {
    //netwt = netwt.toFixed(2)
    console.log(data.length);
    count++;
    table.row.add([
        count,
        data[i].manuModelVariantName,
        data[i].categoryGstCess,,,,,,,,
        
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