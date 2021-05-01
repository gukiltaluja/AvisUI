
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
    var replacementCarCategoryId = document.getElementById("replacementCarCategoryId").value;
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
  else if (replacementCarCategoryId == "") {
      swal({
          title: 'Failed',
          text: 'Please Select replacement CarCategory',
          icon: 'warning',
          
      });
      return;
  }
   else{
          var json={
              "manufacturerId": $("#manufacturerId").val(),
              
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
              "ncap": $("#ncap").val(),
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
        var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
        count++;
        table.row.add([
            count,
            data[i].modelName,
            data[i].manufacturerName,
            data[i].model_manufacturer_name,
            edit        
        ]);
    }
    table.columns.adjust().draw();
    $("tbody #tb2").show();
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
                    $('#carCategoryId').append($('<option/>').attr("value", carcategoryname.id).text(carcategoryname.car_Category_Name));
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
//getModel()
getmanufacturer();
getcarCtegory();
getInsuranceCompany();
getReplacementCarCompany();
getmodelsTable();