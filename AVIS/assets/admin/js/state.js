    //Default data table
     $('#stateTable_wrapper').DataTable();
      table = $('#stateTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
  debugger
   table.buttons().container().appendTo( '#stateTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
   $('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);
      console.log(modeln);
      });

function stateCreate()
  {
    var a = document.getElementById("stateName").value;
    var b = document.getElementById("sateCode").value; 
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter State Name',
          icon: 'warning',          
      });
      return;
  }else if(b ==""){
      swal({
          title: 'Failed',
          text: 'Please Enter State Code',
          icon: 'warning',          
      });
      return;
  }
   else{
          var json={
            //   "countryName": "india",
            //   "gstFms": $("#gstOnFms").val(),
            //   "gstInputCredit": 1,
            //   "gstInputCreditAvailable": parseInt($("#vatInputCredit").val()),
            //   "gstInputCreditPassed": parseInt($("#vatInputCreditPassed").val()),
            //   "gstLr": $("#gstOnLr").val(),
            //   "gstLrElectric": $("#gstOnLrElecVehic").val(),
            //   "gstLrOld": "tes told",
            //   "gstOnPurchase": parseInt($("#purchaseVat").val()),
            //   "gstOnSell": parseInt($("#saleVat").val()),
            //   "gstinNo": $("#gstnNumber").val(),
            //   "invoiceFooter": $("#invoiceFooter").val(),
            //   "isUnionTerritory": $("#unionTerritory").val(),
            //   "lastInvoiceNo": "34",
            //   "panNumber": $("#panNo").val(),
            //   "regionName": "noida",
            //   "stateCode": $("#sateCode").val(),
            //   "stateName": $("#stateName").val(),
              "countryName": "india",
              "gstInputCreditAvailable": parseInt($("#vatInputCredit").val()),
              "gstInputCreditPassed": parseInt($("#vatInputCreditPassed").val()),
              "gstLrElectric": $("#gstOnLrElecVehic").val(),
              "gstOnFms": "string",
              "gstOnLr": $("#gstOnLr").val(),
              "gstOnVehiclePurchase": parseInt($("#purchaseVat").val()),
              "gstOnVehicleSale": parseInt($("#saleVat").val()),
              "gstinNumber": $("#serviceTax").val(),
              "invoiceFooter": $("#invoiceFooter").val(),
              "isUnionTerritory": $("#unionTerritory").val(),
              "lastInvoiceNo": $("#lstNo").val(),
              "regionName": "string",
              "stateCode": $("#sateCode").val(),
              "stateName": $("#stateName").val()
          }
console.log(json);
 debugger
$.ajax({
       url : addState,
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

function getstateTable(){
  var states = callajaxAsParamData(getStateList,"");
  var data = states.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        //var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
        var edit =  '<a onclick="getStateByIdclick('+data[i].id+')" ><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].stateName,
        data[i].stateCode,
        data[i].gstOnLr,
        data[i].gstOnFms,
        data[i].gstinNumber,
        data[i].gstOnVehiclePurchase,
         data[i].commonFields.status,
        edit        
    ]);  
}
  table.columns.adjust().draw();
  $("tbody #tb2").show();
}

function getStateByIdclick(id){
        debugger
          manufacturerContactsdata = callajaxByUrlVarData(getStateById,id);
          statedata = manufacturerContactsdata.data;
          console.log(id);
          console.log(statedata);
          //alert(manufacturerContact);
          //alert(id);
          $('#stateName').val(statedata.stateName);
          $('#stateId').val(statedata.id);
          $('#sateCode').val(statedata.stateCode);
          $('#regionName').val(statedata.regionName);
          $('#serviceTax').val(statedata.gstinNumber);
          $('#purchaseVat').val(statedata.gstOnVehiclePurchase);
          $('#saleVat').val(statedata.gstOnVehicleSale);
          $('#invoiceFooter').val(statedata.invoiceFooter);
          $('#lstNo').val(statedata.lastInvoiceNo);
          $('#vatInputCredit').val(statedata.gstInputCreditAvailable);
          $('#vatInputCreditPassed').val(statedata.gstInputCreditPassed);
          $('#gstOnLr').val(statedata.gstOnLr);
          $('#gstOnFms').val(statedata.gstOnFms);
          $('#unionTerritory').val(statedata.isUnionTerritory);
          $('#gstOnLrElecVehic').val(statedata.gstLrElectric);
        }
    //update start
    function stateUpdate(){
          debugger
        var a = document.getElementById("stateName").value;
        var vatinputcredit = document.getElementById("vatInputCredit").value;
        var vatInputCreditPass = document.getElementById("vatInputCreditPassed").value;
        console.log(vatinputcredit);
        console.log(vatInputCreditPass);
       if (a == "") {
          swal({
              title: 'Failed',
              text: 'Please Enter State Name',
              icon: 'warning',
          });
          return;
      }
       else{
           debugger
              var json={
                  "id":parseInt($("#stateId").val()),
                  "countryName": "India",
                  "gstInputCreditAvailable": $("#vatInputCredit").val(),
                  "gstInputCreditPassed": $("#vatInputCreditPassed").val(),
                  "gstLrElectric": $("#gstOnLrElecVehic").val(),
                  "gstOnFms": $("#gstOnFms").val(),
                  "gstOnLr": $("#gstOnLr").val(),
                  "gstOnVehiclePurchase": parseInt($("#purchaseVat").val()),
                  "gstOnVehicleSale": parseInt($("#saleVat").val()),
                  "gstinNumber": $("#serviceTax").val(),
                  "invoiceFooter": $("#invoiceFooter").val(),
                  "isUnionTerritory": $("#unionTerritory").val(),
                  "lastInvoiceNo": $("#lstNo").val(),
                  "regionName": "string",
                  "stateCode": $("#sateCode").val(),
                  "stateName": $("#stateName").val()
              }
             debugger
      console.log(json);
      debugger
      //alert(json);
      $.ajax({
             url : updateState,
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

getstateTable();
