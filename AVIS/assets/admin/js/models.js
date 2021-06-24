
    //Default data table
     $('#modelsTable_wrapper').DataTable();
      table = $('#modelsTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
  debugger
   table.buttons().container().appendTo( '#modelsTable_wrapper .row:eq(0) .col-md-6:eq(0)' );


function modelsCreate()
  {
    var a = document.getElementById("manufacturerId").value;
    var modelName = document.getElementById("modelName").value;
    var managementFees = document.getElementById("managementFees").value;
    var carCategoryId = document.getElementById("carCategoryId").value;
    var insuranceCompanyId = document.getElementById("insuranceCompanyId").value;
    //var replacementCarCategoryId = document.getElementById("replacementCarCategoryId").value;
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Select Manufacturer',
          icon: 'warning',
          
      });
      return;
  }else if (modelName == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter model Name',
          icon: 'warning',
          
      });
      return;
  }else if (managementFees == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter management Fees',
          icon: 'warning',
          
      });
      return;
  }else if (carCategoryId == "") {
      swal({
          title: 'Failed',
          text: 'Please Select car Category',
          icon: 'warning',
          
      });
      return;
  }
  else if (insuranceCompanyId == "") {
      swal({
          title: 'Failed',
          text: 'Please Select insurance Company',
          icon: 'warning',
          
      });
      return;
  }
//   else if (replacementCarCategoryId == "") {
//       swal({
//           title: 'Failed',
//           text: 'Please Select replacement CarCategory',
//           icon: 'warning',
          
//       });
//       return;
//   }
   else{
          var json={
            //   "manufacturerId": $("#manufacturerId").val(),
            //   "adwPercentage": parseInt($("#adwPercentage").val()),
            //   "carCategoryId": parseInt($("#carCategoryId").val()), 
            //   "emission": $("#emission").val(),
            //   "hsnCode": parseInt($("#hsnCode").val()),
            //   "insuranceCompanyId": parseInt($("#insuranceCompanyId").val()),
            //   "insuranceMaxDiscountPercent": parseInt($("#insuranceMaxDiscountPercent").val()),
            //   "interestOnAdw": parseInt($("#interestOnAdw").val()),
            //   "launchYear": $("#launchYear").val(),
            //   "managementFees": parseInt($("#managementFees").val()),
            //   "manufacturerId": parseInt($("#manufacturerId").val()),
            //   "modelName": $("#modelName").val(),
            //   "ncap": $("#ncap").val(),
            //   "replacementCarCategoryId": parseInt($("#replacementCarCategoryId").val()),
            //   "sacCode": parseInt($("#sacCode").val()),
            "adwPercentage": parseInt($("#adwPercentage").val()),
  "carCategoryId": parseInt($("#carCategoryId").val()),
  "emission": $("#emission").val(),
  "hsnCode": parseInt($("#hsnCode").val()),
    "insuranceCompanyId": parseInt($("#insuranceCompanyId").val()),
  "insuranceMaxDiscountPercent": parseInt($("#insuranceMaxDiscountPercent").val()),
  "interestOnAdw": parseInt($("#interestOnAdw").val()),
  "launchYear": $("#launchYear").val(),
  "managementFees": parseInt($("#managementFees").val()),
  "manufacturerId": parseInt($("#manufacturerId").val()),
  "modelName": $("#modelName").val(),
  "ncap": $("#nCap").val(),
  "replacementCarCategoryId": parseInt($("#replacementCarCategoryId").val()),
  "sacCode": parseInt($("#sacCode").val())
          }
//console.log(json);

 debugger
$.ajax({
       url : addModel,
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
}

  }


var manufId = "";

function getmodelsTable(){
  var models = callajaxAsParamData(getModelManufacturer,"");
  var data = models.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        //var edit =  '<a href="'+ data[i].modelId +'"><i class="fa fa-edit" ></i></a>';
        var edit =  '<a onclick="findModelById('+data[i].modelId+')" ><i class="fa fa-edit" ></i></a>';
        count++;
        table.row.add([
            count,
            data[i].manufacturerName,
            data[i].modelName,
            data[i].managementFees,
            data[i].carCategoryName,
            data[i].insuranceComapnyName,
            data[i].insuranceMaxDiscountPercentage,
            data[i].adwPercentage,
            data[i].interestOnADW,
            data[i].carCategoryName,
            data[i].hsnCode,
            data[i].sacCode,
            data[i].launchYear,
            data[i].emission,
            data[i].n_Cap,
            data[i].status,
            edit        
        ]);
    }
    table.columns.adjust().draw();
    $("tbody #tb2").show();
}

function findModelById(id){
        debugger
          tyresdata = callajaxByUrlVarData(getModelById,id);
          tyre = tyresdata.data;
          console.log(id);
          console.log(tyre);
          debugger
          //alert(tyre);
          $('#modelId').val(tyre.id);
           $('#insuranceMaxDiscountPercent').val(tyre.insuranceMaxDiscountPercent);
           $('#insuranceCompanyId').val(tyre.insuranceCompanyId);
           $('#carCategoryId').val(tyre.carCategoryId);
           $('#managementFees').val(tyre.managementFees);
           $('#modelName').val(tyre.modelName);
           $('#manufacturerId').val(tyre.manufacturerId);
           $('#adwPercentage').val(tyre.adwPercentage);
           $('#interestOnAdw').val(tyre.interestOnAdw);
           $('#replacementCarCategoryId').val(tyre.replacementCarCategoryId);
           $('#hsnCode').val(tyre.hsnCode);
           $('#sacCode').val(tyre.sacCode);
           $('#launchYear').val(tyre.launchYear);
           $('#emission').val(tyre.emission);
           $('#nCap').val(tyre.ncap);
        }
   //update start
function modelsUpdate(){
          debugger
        var a = document.getElementById("manufacturerId").value;
       if (a == "") {
          swal({
              title: 'Failed',
              text: 'Please Enter Model Name',
              icon: 'warning',
          });
          return;
      }
       else{
           debugger
              var json={
                  //"id":parseInt($("#modelId").val()),
                 //  "variant": $("#variant").val(),
                  "id":parseInt($("#modelId").val()),
                   "adwPercentage": parseInt($("#adwPercentage").val()),
  "carCategoryId": parseInt($("#carCategoryId").val()), 
  "emission": $("#emission").val(),
  "hsnCode": parseInt($("#hsnCode").val()),
  "insuranceCompanyId": parseInt($("#insuranceCompanyId").val()),
  "insuranceMaxDiscountPercent": parseInt($("#insuranceMaxDiscountPercent").val()),
  "interestOnAdw": parseInt($("#interestOnAdw").val()),
  "launchYear": "2021",
  "managementFees": parseInt($("#managementFees").val()),
  "manufacturerId": parseInt($("#manufacturerId").val()),
  "modelName": $("#modelName").val(),
  "ncap": $("#nCap").val(),
  "replacementCarCategoryId": parseInt($("#replacementCarCategoryId").val()),
  "sacCode": parseInt($("#sacCode").val())
              }
             debugger
      console.log(json);
      debugger
      //alert(json);
      $.ajax({
             url : updateModel,
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

function getmanufacturer(){
      var manufaturer = callajaxAsParamData(getManufacturerList,"");
      var manufaturerdata = manufaturer.data;
      $.each(manufaturerdata, function(i, manufaturers) {
                    $('#manufacturerId').append($('<option/>').attr("value", manufaturers.id).text(manufaturers.manufacturerName));
              console.log(manufaturers[i]);
                });
        }

     function getcarCtegory(){
      var carcategory = callajaxAsParamData(getCarCategoryList,"");
      var carcategories = carcategory.data;
      $.each(carcategories, function(i, carcategoryname) {
                    $('.carCategoryClass').append($('<option/>').attr("value", carcategoryname.id).text(carcategoryname.car_Category_Name));
             console.log(carcategoryname[i]);
                });
        }
        
    function getInsuranceCompany(){
      var InsuranceCompany = callajaxAsParamData(getInsuranceCompanyList,"");
      var InsuranceCompanydata = InsuranceCompany.data;
      $.each(InsuranceCompanydata, function(i, InsuranceCompanyname) {
                    $('#insuranceCompanyId').append($('<option/>').attr("value", InsuranceCompanyname.id).text(InsuranceCompanyname.insuranceCompanyName));
             console.log(InsuranceCompanyname[i]);
                });
        }
        
        function getReplacementCarCompany(){
      var replacementcarcat = callajaxAsParamData(getReplacementCarCategoryList,"");
      var replacementcarcatdata = replacementcarcat.data;
      $.each(replacementcarcatdata, function(i, replacementcarcatname) {
                    $('#replacementCarCategoryId').append($('<option/>').attr("value", replacementcarcatname.id).text(replacementcarcatname.replacementCarCategoryName));
             console.log(replacementcarcatname[i]);
                });
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
getModel()
getmanufacturer();
getcarCtegory();
getInsuranceCompany();
getReplacementCarCompany();
getmodelsTable();