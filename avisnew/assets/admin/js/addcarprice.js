
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
    var a = document.getElementById("manuName").value;
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
    // "modelId": modelId,
    // "manufacturerId": manufId,
    // "colorCodeId":$("#colorCodeId").val(),
    // "exShowroomPrice":parseInt($("#exShowroomPrice").val()),   
    // "cityId":$("#cityId").val(),
    // "variantId":$("#variantId").val(),
    // "exShowroomPrice":$("#exShowroomPrice").val(),   
    // "cityId":$("#cityId").val(),
    // "availableDiscount":$("#availableDiscount").val(),
    // "roadTaxPrivate":$("#roadTaxPrivate").val(),   
    // "roadTaxCommercial":$("#roadTaxCommercial").val(),
    // "roadTaxCommercialSecondYr":$("#roadTaxCommercial2").val(),
    // "roadTaxCommercialThirdYr":$("#roadTaxCommercial3").val(),   
    // "roadTaxCommercialForthYr":$("#roadTaxCommercial4").val(),
    // "roadTaxCommercialFifthYr":$("#roadTaxCommercial5").val(),
    //  "intColorDesc1":parseInt($("#intColorDesc1").val()),
    //   "intColorPrice1":$("#intColorPrice").val(),
    //   "priceValidDays":$("#priceValidDays").val(),
    //   "modelYear":$("#modelYear").val(),
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
     console.log(color.colorCodeName);
            });
}


// function getcarpriceTable(){
//     var variant = callajaxAsParamData(carPriceList,"");
//   console.log(variant);
//   var data = variant.data;
//   var count = 0;
//   debugger
//       for (var i = 0; i < data.length; i++) {
//     //netwt = netwt.toFixed(2)
//     var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
//     console.log(data.length);
//     count++;
//     table.row.add([
//         count,
//         data[i].carprice,
//         data[i].rvCorrection,
//         data[i].rmtbCorrection,
//         data[i].commonFields.status,
//         edit        
//     ]);
  
// }
// table.columns.adjust().draw();
// $("tbody #tb2").show();
// }

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

getModel();
//getcarpriceTable();
variantType();
cityList();
colorList();