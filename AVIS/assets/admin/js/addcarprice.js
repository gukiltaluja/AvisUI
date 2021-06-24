
    //Default data table
     $('#carpriceTable_wrapper').DataTable();


      table = $('#carpriceTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
debugger
   table.buttons().container().appendTo( '#carpriceTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
  

$('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);
      console.log(modeln);
 // var modeln = ["adsdf","hghgh","dfgfgd"];
      });


var manufId = "";
var modelId ="";
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

function carpriceCreatess()
  {
    var a = document.getElementById("modelName").value;
       if (a == "") {
          swal({
              title: 'Failed',
              text: 'Please Enter Manufacturer Name',
              icon: 'warning',
              
          });
          return;
      }
   else{          
       var avaldiscount = document.getElementById("availableDiscount").value;
       var cityId = document.getElementById("cityId").value;
       var colorCodeId = document.getElementById("colorCodeId").value;
       var exShowroomPrice = document.getElementById("exShowroomPrice").value;
       var intColorPrice = document.getElementById("intColorPrice").value;
      var json={   
      "availableDiscount": parseInt($("#availableDiscount").val()),
      "cityId": parseInt($("#cityId").val()),
      "colorCodeId": parseInt($("#colorCodeId").val()),  
      "exShowroomPrice": parseInt($("#exShowroomPrice").val()), 
      "intColorDesc1": $("#intColorDesc1").val(),
      "intColorDesc2": $("#intColorDesc1").val(),
      "intColorDesc3": $("#intColorDesc1").val(),
      "intColorDesc4": $("#intColorDesc1").val(),
      "intColorDesc5": $("#intColorDesc1").val(),
      "intColorPrice1": parseInt($("#intColorPrice").val()),
      "intColorPrice2": parseInt($("#intColorPrice").val()),
      "intColorPrice3": parseInt($("#intColorPrice").val()),
      "intColorPrice4": parseInt($("#intColorPrice").val()),
      "intColorPrice5": parseInt($("#intColorPrice").val()),
      "manufacturerId": manufId,
      "modelId": modelId,
      "modelYear": $("#modelYear").val(),
      "priceValidDays": $("#priceValidDays").val(),
      "roadTaxCommercial": parseInt($("#roadTaxCommercial").val()),
      "roadTaxCommercialFifthYr": parseInt($("#roadTaxCommercial5").val()),
      "roadTaxCommercialForthYr": parseInt($("#roadTaxCommercial4").val()),
      "roadTaxCommercialSecondYr": parseInt($("#roadTaxCommercial2").val()),
      "roadTaxCommercialThirdYr": parseInt($("#roadTaxCommercial3").val()),
      "roadTaxPrivate": parseInt($("#roadTaxPrivate").val()),
      "variantId": parseInt($("#variantId").val())
}

console.log(json);
 debugger
$.ajax({
       url : addCarPrice,
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



function variantType(){
    var variant = callajaxAsParamData(getVariantList,"");
    var variant = variant.data;
$.each(variant, function(i, variant) {
                $('#variantId').append($('<option/>').attr("value", variant.veriantId).text(variant.variantName));
console.log(variant.fuel_type_name);
            });
}

function cityList(){
    var city = callajaxAsParamData(vwCityDetails,"");
    var city = city.data;
$.each(city, function(i, city) {
                $('#cityId').append($('<option/>').attr("value", city.cityId).text(city.cityName));
     console.log(city.cityName);
            });
}

function colorList(){
    var color = callajaxAsParamData(getcolorCodeList,"");
    var color = color.data;
$.each(color, function(i, color) {
                $('#colorCodeId').append($('<option/>').attr("value", color.id).text(color.colorCodeName));
    
            });
}


function getcarpriceTable(){
    var variant = callajaxAsParamData(carPriceList,"");
  console.log(variant);
  var data = variant.data;
  
  
  
  var count = 0;
  debugger
      for (var i = 0; i < data.length; i++) {
    //netwt = netwt.toFixed(2)
    //var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
    var edit =  '<a onclick="findCarPriceById('+data[i].id+')" ><i class="fa fa-edit" ></i></a>';
    console.log(data.length);
    count++;
    table.row.add([
        count,
        data[i].modelManufacturerName,
        data[i].variantName,
        data[i].cityName,
        data[i].colorCodeName,
        data[i].exShowroomPrice,
        data[i].availableDiscount,
        data[i].roadTaxPrivate,
        data[i].roadTaxCommercial,
        data[i].roadTaxCommercialSecondYr,
        data[i].roadTaxCommercialThirdYr,
        data[i].roadTaxCommercialForthYr,
        data[i].roadTaxCommercialFifthYr,
        data[i].priceValidDays,
        data[i].modelYear,
        data[i].intColorDesc1,
        data[i].intColorPrice1,
        data[i].commonFields.status,
        edit        
    ]);
  
}
table.columns.adjust().draw();
$("tbody #tb2").show();
}

function findCarPriceById(id){
        debugger
          tyresdata = callajaxByUrlData(getCarPriceById,id);
          tyre = tyresdata.data;
          console.log(id);
          console.log(tyre);
          debugger
          //alert(tyre);
          //alert(id);
        //   $('#tyreSize').val(tyre.tyreSize);
          $('#carPriceId').val(tyre.id);
         // $('.update').removeClass('d-none');
          $('#exShowroomPrice').val(tyre.exShowroomPrice);
          $('#availableDiscount').val(tyre.availableDiscount);
           $('#roadTaxPrivate').val(tyre.roadTaxPrivate);
           $('#roadTaxCommercial').val(tyre.roadTaxCommercial);
           $('#modelName').val(tyre.modelName);
          $('#manuName').val(tyre.manufacturerName);
          $('#modelId').val(tyre.modelId);
          $('#manufactureId').val(tyre.manufacturerId);
          $('#roadTaxCommercial2').val(tyre.roadTaxCommercialSecondYr);
          $('#roadTaxCommercial3').val(tyre.roadTaxCommercialThirdYr);
          $('#roadTaxCommercial4').val(tyre.roadTaxCommercialForthYr);
          $('#roadTaxCommercial5').val(tyre.roadTaxCommercialFifthYr);
          $('#priceValidDays').val(tyre.priceValidDays);
           $('#modelYear').val(tyre.modelYear);
          $('#intColorDesc1').val(tyre.intColorDesc1);
          $('#intColorPrice').val(tyre.intColorPrice1);
        }

//update start
    function colorCodeUpdate(){
          debugger
        var a = document.getElementById("modelName").value;
        var colorcode = document.getElementById("colorCodeId").value;
        var city = document.getElementById("cityId").value;
       if (a == "") {
          swal({
              title: 'Failed',
              text: 'Please Enter Model Name',
              icon: 'warning',
          });
          return;
      }else if (colorcode == "") {
          swal({
              title: 'Failed',
              text: 'Please Select Color',
              icon: 'warning',
          });
          return;
      }else if (city == "") {
          swal({
              title: 'Failed',
              text: 'Please Select City',
              icon: 'warning',
          });
          return;
      }
       else{
           debugger
              var json={
                 // "id":parseInt($("#variantId").val()),
                 //  "variant": $("#variant").val(),
                  "categoryGstCess": "string",

            // "id":parseInt($("#carPriceId").val()),
             "availableDiscount": 0,
  "cityId": parseInt($("#cityId").val()),
  "colorCodeId": parseInt($("#colorCodeId").val()),
  "exShowroomPrice": 0,
  "id": parseInt($("#carPriceId").val()),
  "intColorDesc1": "string",
  "intColorPrice1": 0,
  "manufacturerId": parseInt($("#manufactureId").val()),
  "modelId": parseInt($("#modelId").val()),
  "modelYear": "string",
  "priceValidDays": "string",
  "roadTaxCommercial": 0,
  "roadTaxCommercialFifthYr": 0,
  "roadTaxCommercialForthYr": 0,
  "roadTaxCommercialSecondYr": 0,
  "roadTaxCommercialThirdYr": 0,
  "roadTaxPrivate": 0,
  "variantId": 0
  
              }
             debugger
      console.log(json);
      debugger
      //alert(json);
      $.ajax({
             url : updateCarPrice,
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
    
    function carPriceUpdate(){
        var a = document.getElementById("colorCode").value;
       if (a == "") {
          swal({
              title: 'Failed',
              text: 'Please Enter Color Code',
              icon: 'warning',
              
          });
          return;
      }
       else{
              var json={
                  "colorCodeName": $("#colorCode").val(),                                 
                  "rvCorrection":$("#rvCorrection").val(),
                  "id":$("#colorId").val(),
              }
    
      $.ajax({
             url : updateColorCode,
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

getModel();
getcarpriceTable();
variantType();
cityList();
colorList();