
    //Default data table
     $('#citydocumentTable_wrapper').DataTable();
      table = $('#citydocumentTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
  debugger
   table.buttons().container().appendTo( '#citydocumentTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
 
  var cityId="";
 var stateId ="";
function getCityonkey(){
  var manuModel = callajaxAsParamData(vwCityDetails,"");
   console.log(manuModel);
   var statedatalist = [];
   var manuModel = manuModel.data;
   for (var i = 0; i < manuModel.length; i++)
              {
                statedatalist.push(manuModel[i].cityName);
              }
              console.log(statedatalist); 
    $("#inputCity").autocomplete({
            source: statedatalist,
            minLength: 1,
            select: function (event, ui) {
              var index = statedatalist.indexOf(ui.item.value);
              debugger
               stateId = manuModel[index].stateId;
              console.log("stateID: "+stateId);    
              $("#inputState").val(manuModel[index].mergeDetails);
              cityId = manuModel[index].cityId;
              console.log("cityID: "+cityId);    
            }
        });
}

function citydocumentCreate()
  {
    var a = document.getElementById("inputCity").value;
    var b = document.getElementById("inputState").value;
    var c = document.getElementById("documentName").value;
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Select city',
          icon: 'warning',
          
      });
      return;
  }else if (b == "") {
      swal({
          title: 'Failed',
          text: 'Please Select state',
          icon: 'warning',
          
      });
      return;
  }else if (c == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter document Name',
          icon: 'warning',
          
      });
      return;
  }
   else{
          var json={
              "cityId": parseInt($("#inputCity").val()),  
              "documentDetails": $("#documentDetails").val(),
              "documentName": $("#documentName").val(),
              "stateId": parseInt($("#inputState").val())
          }
//console.log(json);

 debugger
$.ajax({
       url : addCityDocument,
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
                        // swal({
                        //     title: 'Failed To Saved',
                        //     icon: 'warning',
                        //     showCancelButton: true,
                        // })
                        swal("Successfully Saved", {
                        icon: "success",
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

function getcitydocumentTable(){
  var citydocument = callajaxAsParamData(cityDocumentList,"");
  var data = citydocument.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        //var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
        var edit =  '<a onclick="getCityDocumentByIdclick('+data[i].id+')" ><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].cityId,
        data[i].stateId,
        data[i].documentDetails,
        data[i].documentName,
        data[i].commonFields.status,
        edit        
    ]);
  
}
table.columns.adjust().draw();
$("tbody #tb2").show();
}

function getCityDocumentByIdclick(id){
        debugger
          manufacturerContactsdata = callajaxByUrlData(cityDocumentById,id);
          statedata = manufacturerContactsdata.data;
          console.log(id);
          console.log(statedata);
          //alert(manufacturerContact);
          //alert(id);
           $('#inputCity').val(statedata.cityId);
           $('#cityDocumentId').val(statedata.id);
           $('#inputState').val(statedata.stateId);
           $('#documentName').val(statedata.documentName);
           $('#documentDetails').val(statedata.documentDetails);
        //   $('#purchaseVat').val(statedata.gstOnVehiclePurchase);
        //   $('#saleVat').val(statedata.gstOnVehicleSale);
        //   $('#invoiceFooter').val(statedata.invoiceFooter);
        //   $('#lstNo').val(statedata.lastInvoiceNo);
        //   $('#vatInputCredit').val(statedata.gstInputCreditAvailable);
        //   $('#vatInputCreditPassed').val(statedata.gstInputCreditPassed);
        //   $('#gstOnLr').val(statedata.gstOnLr);
        //   $('#gstOnFms').val(statedata.gstOnFms);
        //   $('#unionTerritory').val(statedata.isUnionTerritory);
        //   $('#gstOnLrElecVehic').val(statedata.gstLrElectric);
        }
    //update start
    function cityDocumentUpdate(){
          debugger
        var a = document.getElementById("inputState").value;
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
                  "id":$("#cityDocumentId").val(),
                   "cityId": parseInt($("#inputCity").val()),
                  "documentDetails": $("#documentDetails").val(),
                  "documentName": $("#documentName").val(),
                 // "id": 0,
                  "stateId": parseInt($("#inputState").val())
              }
             debugger
      console.log(json);
      debugger
      //alert(json);
      $.ajax({
             url : updateCityDocument,
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
    
getCityonkey();
//getModel()
getcitydocumentTable();