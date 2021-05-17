// $('#startdate_datepicker').datetimepicker({
//     showOn: "button",
//     showSecond: true,
//     dateFormat: "dd-mm-yy", 
//     timeFormat: "HH:mm:ss"
// });
    //Default data table
    
//usageAdd()
     $('#variantTable_wrapper').DataTable();


      table = $('#variantTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
debugger
   table.buttons().container().appendTo( '#variantTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
    


       function camCreate()
  {
     var a = document.getElementById("camName").value;
  /*var b = document.getElementById("manuName").value;
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

  
 else if( b == "" ){
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
  if (a == "") {
  }
          else{
          //  event.preventDefault();
//alert(modelId);
var json={
    
        "annualFleetPotential": $("#cap").val(),
        "camRemarks": "",
        "camRequestBy": $("#crb").val(),
        "camRequestDate":  $("#dor").val()+" 00:00:00",
        "cinNumber": $("#cin").val(),
       
        "companyName": $("#camName").val(),
        "corpAddress": $("#corpAdd").val(),
        "corpCity": $("#corpAddCity").val(),
        "corpCityId":ctIdd2,
        "corpCountry": $("#corpAddcountry").val(),
        "corpGstn": $("#corpAdd").val(),
        "corpPincode": $("#corpAddpin").val(),
        "corpState": $("#corpAdds").val(),
        "keyBankName": $("#bankers").val(),//not specify
        "packageServiceName": $("#pack").val(),
        "regAddress": $("#camRegAdd").val(),
        "regCity": $("#camRegAddCity").val(),
        "regCityId": ctIdd,
        "regCountry": $("#country").val(),
        "regGstn": $("#camRegAddgstn").val(),
        "regPincode": $("#camRegAddpin").val(),
        "regState": $("#state").val(),
        "requestedExposure": $("#re").val(),
        "rvType": $("#resV").val(),
        "promoters": $("#prm").val(),
        "tenure": $("#ten").val(),
        "totalFleetPotential": $("#ctp").val(),
        "turnoverGlobally": $("#glb").val(),
        "turnoverIndia": $("#ind").val(),
        "auditors": $("#audi").val(),
        //promo,residual,clientProfile,KeyMAnage
      
}


console.log(json);


//localStorage.setItem("xx", $("#hel").val());
 debugger
$.ajax({
       url : addCamRequest,
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
  
  
var ctIdd = "";
var stateId = "";
var countryId = "";
var ctIdd2 = "";
var stateId2 = "";
var countryId2 = "";
var citynm = [];
var citynmId = [];
var citynmId2 = [];
var ctnm = [];
var cities = [];
  getCityList();
  var pinc = "";
  //getcityByPin()
$("#camRegAddpin").on("blur",function (event) {
    debugger
  //  alert($("#camRegAddpin").val());
   //this.value = this.value.replace(/[^0-9\.]/g,'');
$(this).val($(this).val().replace(/[^0-9\.]/g,''));
   if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
       event.preventDefault();
   }
   
   getcityByPin();
});

function getcityByPin(){
    debugger
    var pinc = callajaxAsParamData2(getCityByPin+$("#camRegAddpin").val());
    var city = pinc[0].PostOffice[0].Division;
    var st = pinc[0].PostOffice[0].State;
    var index = "";
     if(ctnm.includes(city) == true){
         index = ctnm.indexOf(city);
        $("#camRegAddCity").val(citynm[index]);
        ctIdd = cities[index].cityId;
    }else{
        $("#camRegAddCity").val(city);
    }
    //$("#camRegAddCity").val(city);
    stateId = cities[index].stateId
    countryId = cities[index].countryId
    $("#state").val(pinc[0].PostOffice[0].State);
    $("#country").val("India");
    
  
}

$("#corpAddpin").on("blur",function (event) {
    debugger
  //  alert($("#camRegAddpin").val());
   //this.value = this.value.replace(/[^0-9\.]/g,'');
$(this).val($(this).val().replace(/[^0-9\.]/g,''));
   if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
       event.preventDefault();
   }
   
   getcityByPin2();
});

function getcityByPin2(){
    debugger
    var pinc = callajaxAsParamData2(getCityByPin+$("#corpAddpin").val());
    var city = pinc[0].PostOffice[0].Division;
    var st = pinc[0].PostOffice[0].State;
    if(ctnm.includes(city) == true){
        var index = ctnm.indexOf(city);
        $("#corpAddCity").val(citynm[index]);
        ctIdd2 = cities[index].cityId;
    }else{
        $("#corpAddCity").val(city);
    }
    stateId2 = cities[index].stateId
    countryId2 = cities[index].countryId
    $("#corpAdds").val(pinc[0].PostOffice[0].State);
    $("#corpAddcountry").val("India");
    
}
function getCityList(){
    debugger
     cities = callajaxAsParamData(cityList,"");
    cities = cities.data;
    var ct = [];
    var ctId = [];
    for (var i = 0; i < cities.length; i++)
              {
                ct.push(cities[i].mergeDetails);
                ctId.push(cities[i].cityId);
                ctnm.push(cities[i].cityName);

              }
              citynm = ct;
    $("#camRegAddCity").autocomplete({
        source: ct,
        minLength: 2,
        select: function (event, ui) {
          var index = ct.indexOf(ui.item.value);
         // debugger
          ctIdd = ctId[index];
          stateId = cities[index].stateId;
          countryId = "";
          $("#state").val(cities[index].stateName);
          $("#country").val("India");
         // console.log(ctIdd);    
          
        }
    });
    $("#corpAddCity").autocomplete({
        source: ct,
        minLength: 2,
        select: function (event, ui) {
          var index = ct.indexOf(ui.item.value);
          debugger
          ctIdd2 = ctId[index];
          stateId2 = cities[index].stateId;
          countryId2 = "";
          $("#corpAdds").val(cities[index].stateName);
          $("#corpAddcountry").val("India");
         // console.log(ctIdd);    
          
        }
    });
}


// fuelT()
// function fuelT(){
//     var fuelType = callajaxAsParamData(getfuelTypeList,"");
//     var fuelType = fuelType.data;
// $.each(fuelType, function(i, fuelType) {
//                 $('#fuelType').append($('<option/>').attr("value", fuelType.id).text(fuelType.fuel_type_name));
// console.log(fuelType.fuel_type_name);
//             });
// }


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

//getVariantTable();
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

function usageAdd(){

var json={
    
    "rmtbCorrection": 0,
  "rvCorrection": 0,
  "usageType": "dfsddf"
    
  
}


console.log(json);


//localStorage.setItem("xx", $("#hel").val());
debugger
$.ajax({
   url : addUsage,
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
    
function callajaxAsParamData2(url,data)
{
    var response="";
    $.ajax(
        {
            url :url,
            type: "get",
            data:  "",
           // dataType:'json',
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