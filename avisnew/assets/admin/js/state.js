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
            //   "stateName": $("#stateName").val(),
            //   "stateCode": $("#sateCode").val(),
            //   "gstFms": $("#gstOnFms").val(),
            //   //"gstInputCredit": true,
            //   "gstInputCreditAvailable": $("#vatInputCredit").val(),
            //   "gstInputCreditPassed": $("#vatInputCreditPassed").val(),
            //   "gstLr": $("#gstOnLr").val(),
            //   "gstLrElectric": $("#gstOnLrElecVehic").val(),
            //   //"gstLrOld": "string",
            //   "gstOnPurchase": $("#purchaseVat").val(),
            //   "gstOnSell": $("#saleVat").val(),
            //   "gstinNo": $("#gstnNumber").val(),
            //   "invoiceFooter": $("#invoiceFooter").val(),
            //   "isUnionTerritory": $("#unionTerritory").val(),
            //   "panNumber": $("#panNo").val(),
              "countryName": "india",
              "gstFms": $("#gstOnFms").val(),
              "gstInputCredit": 1,
              "gstInputCreditAvailable": parseInt($("#vatInputCredit").val()),
              "gstInputCreditPassed": parseInt($("#vatInputCreditPassed").val()),
              "gstLr": $("#gstOnLr").val(),
              "gstLrElectric": $("#gstOnLrElecVehic").val(),
              "gstLrOld": "tes told",
              "gstOnPurchase": parseInt($("#purchaseVat").val()),
              "gstOnSell": parseInt($("#saleVat").val()),
              "gstinNo": $("#gstnNumber").val(),
              "invoiceFooter": $("#invoiceFooter").val(),
              "isUnionTerritory": $("#unionTerritory").val(),
              "lastInvoiceNo": "34",
              "panNumber": $("#panNo").val(),
              "regionName": "noida",
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
        var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].stateName,
        data[i].isVatOnLr,
        data[i].serviceTax,
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

getstateTable();
