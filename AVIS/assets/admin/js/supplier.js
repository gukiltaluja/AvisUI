    //Default data table
     $('#supplierTable_wrapper').DataTable();
      table = $('#supplierTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
  debugger
   table.buttons().container().appendTo( '#supplierTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
   $('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);
      console.log(modeln);
      });

function supplierCreate()
  {
    var a = document.getElementById("bankName").value;
    var b = document.getElementById("legalName").value; 
    var c = document.getElementById("ifscCode").value;
    var mydate = document.getElementById("autoclose-datepicker").value;
   //var mydate = new Date(form.startDate.value);
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Bank Name',
          icon: 'warning',          
      });
      return;
  }else if (b == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Legal Name',
          icon: 'warning',          
      });
      return;
  }else if (c == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter IFSC Code Name',
          icon: 'warning',          
      });
      return;
  }
   else{
          var json={
            //   "bankName": $("#bankName").val(),
            //   "legalName": $("#legalName").val(),
            //   "ifscCode": $("#ifscCode").val(),
            //   "accountName": $("#accountName").val(),
            //   "emailAccounts": $("#accountEmailId").val(),
            //   "emailWorkshop": $("#workshopEmailId").val(),
            //   "kyc": $("#kyc").val(),
            //   // "manufacturerName": $("#manufacturerName").val(),
            //   "panNo": $("#panNo").val(),
            //   "relationshipWorkshop": $("#relationshipWorkshop").val(),
            // //   "renewalDate": $("#autoclose-datepicker").val(),
            // "renewalDate": "2021-04-19 20:02:10",
            //   // "serviceTaxNo": $("#serviceTaxNo").val(),
            //   "supplierAddress": $("#supplierAddress").val(),
            //   "supplierName": $("#legalName").val(),
            //   "supplierPhone": $("#supplierPhone").val(),
            //   "panNo": $("#panNo").val(),
            //   "tinNo": $("#tinNo").val(),
            //   "supplierTypeId": 1,
              "accountName": $("#accountName").val(),
        "agreedDisAccidentalLabor": parseInt($("#agreedDiscAccidLabor").val()),
        "agreedDisAccidentalParts": parseInt($("#agreedDiscAccedPart").val()),
            "agreedDisServiceLabor": parseInt($("#agreedDiscountLabor").val()),
              "agreedDisServiceParts": parseInt($("#agreedDiscountPart").val()),
              "bankName": $("#bankName").val(),
              "creditOnNewCarPurchase": 10,
              "emailAccounts": $("#accountEmailId").val(),
              "emailWorkshop": $("#workshopEmailId").val(),
              "gstnNo": $("#gstnNumber").val(),
              "ifscCode": $("#ifscCode").val(),
              "kyc": true,
              "legalName": "test",
              "manufacturerName": "shivraj",
              "panNo": $("#panNo").val(),
              "relationshipWorkshop": true,
              "renewalDate": "2021-04-19 00:00:00",
              "supplierAddress": $("#supplierAddress").val(),
              "supplierName": $("#legalName").val(),
              "supplierPhone": $("#supplierPhone").val(),
              "supplierTypeId": 1,
              "tinNo": $("#tinNo").val()

          }
console.log(json);
 debugger
$.ajax({
       url : addSuppliers,
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
}

  }

var manufId = "";
function getsupplierTable(){
  var suppliers = callajaxAsParamData(getSupplierList,"");
  var data = suppliers.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
        var edit =  '<a onclick="getSupplierByIdclick('+data[i].id+')" ><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].supplierName,
        data[i].supplierName,
        data[i].supplierTypeName,
        data[i].supplierAddress,
        data[i].supplierPhone,
        data[i].gstnNo,
        data[i].renewalDate,
        data[i].accountName,
        data[i].bankName,
        data[i].ifscCode,
        data[i].panNo,
        data[i].tinNo,
        data[i].agreedDisServiceParts,
        data[i].agreedDisServiceLabor,
        data[i].agreedDisAccidentalParts,
        data[i].agreedDisAccidentalLabor,
        data[i].creditOnNewCarPurchase,
        data[i].emailAccounts,
        data[i].emailWorkshop,
        data[i].commonFields.status,
        edit        
    ]);  
}
  table.columns.adjust().draw();
  $("tbody #tb2").show();
}

function getSupplierByIdclick(id){
        debugger
          tyresdata = callajaxByUrlVarData(getSupplierById,id);
          tyre = tyresdata.data;
          console.log(id);
          console.log(tyre);
          //alert(tyre);
          //alert(id);
          $('#supplierId').val(tyre.id);
           $('#supplierTypeId').val(tyre.supplierTypeId);
           $('#supplierAddress').val(tyre.supplierAddress);
          $('#kyc').val(tyre.kyc);
          $('#supplierPhone').val(tyre.supplierPhone);
          $('#gstnNumber').val(tyre.gstnNumber);
         // $('#autoclose-datepicker').val(tyre.autoclose-datepicker);
          $('#accountName').val(tyre.accountName);
          $('#bankName').val(tyre.bankName);
          $('#ifscCode').val(tyre.ifscCode);
          $('#panNo').val(tyre.panNo);
          $('#tinNo').val(tyre.tinNo);
          $('#agreedDiscountPart').val(tyre.agreedDisServiceParts);
          $('#agreedDiscountLabor').val(tyre.agreedDisServiceLabor);
          $('#agreedDiscAccedPart').val(tyre.agreedDisAccidentalParts);
          $('#agreedDiscAccidLabor').val(tyre.agreedDisAccidentalLabor);
          $('#inputState').val(tyre.inputState);
          $('#accountEmailId').val(tyre.emailAccounts);
          $('#workshopEmailId').val(tyre.emailWorkshop);
        }

    //update start
       function supplierUpdate()
       {
          debugger
        var a = document.getElementById("bankName").value;
       if (a == "") {
          swal({
              title: 'Failed',
              text: 'Please Enter Bank Name',
              icon: 'warning',
          });
          return;
      }
       else{
           debugger
              var json={
                //   "legalName":$("#legalName").val(),
                //   "supplierTypeId":parseInt($("#supplierTypeId").val()),
                //   "id":$("#supplierId").val(),
                //   "supplierAddress": $("#supplierAddress").val(), 
                //   "supplierPhone": parseInt($("#supplierPhone").val()),
                //   "gstnNumber": $("#gstnNumber").val(),
                //   "autoclose-datepicker": $("#autoclose-datepicker").val(),
                //   "accountName": $("#accountName").val(),
                //   "bankName": $("#bankName").val(),
                //   "ifscCode": $("#ifscCode").val(), 
                //   "panNo": parseInt($("#panNo").val()),
                //   "tinNo": parseInt($("#tinNo").val()),
                //   "agreedDiscountPart": $("#agreedDiscountPart").val(),
                //   "agreedDiscountLabor": $("#agreedDiscountLabor").val(),
                //   "agreedDiscAccedPart": $("#agreedDiscAccedPart").val(),
                //   "agreedDiscAccidLabor": parseInt($("#agreedDiscAccidLabor").val()),
                //   "accountEmailId": $("#accountEmailId").val(),
                //   "workshopEmailId": $("#workshopEmailId").val(),
                "accountName": $("#accountName").val(),
                "agreedDisAccidentalLabor": parseInt($("#agreedDiscAccidLabor").val()),
                "agreedDisAccidentalParts": parseInt($("#agreedDiscAccedPart").val()),
                "agreedDisServiceLabor": parseInt($("#agreedDiscountLabor").val()),
                "agreedDisServiceParts": parseInt($("#agreedDiscountPart").val()),
                "bankName": $("#bankName").val(),
                "creditOnNewCarPurchase": 10,
                "emailAccounts": $("#accountEmailId").val(),
                "emailWorkshop": $("#workshopEmailId").val(),
                "gstnNo": $("#gstnNumber").val(),
                "id": parseInt($("#supplierId").val()),
                "ifscCode": $("#ifscCode").val(),
                "kyc": true,
                "legalName": $("#legalName").val(),
                "manufacturerName": $("#brandName").val(),
                "panNo": $("#panNo").val(),
                "relationshipWorkshop": true,
                "renewalDate": "2021-05-23 00:00:00",
                "supplierAddress": $("#supplierAddress").val(),
                "supplierName": $("#legalName").val(),
                "supplierPhone": $("#supplierPhone").val(),
                "supplierTypeId": 1,
                "tinNo": $("#tinNo").val()
              }
             debugger
      console.log(json);
      debugger
      //alert(json);
      $.ajax({
             url : updateSupplier,
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
   //update end

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
    
function getSupplierTypes(){
  var suppliertype1 = callajaxAsParamData(getSupplierType,"");
  var suppliertype1 = suppliertype1.data;
  $.each(suppliertype1, function(i, suppliertype1) {
                $('#supplierTypeId').append($('<option/>').attr("value", suppliertype1.id).text(suppliertype1.supplierTypeName));

            });
}

getsupplierTable();
getSupplierTypes();
