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
              "bankName": $("#bankName").val(),
              "legalName": $("#legalName").val(),
              "ifscCode": $("#ifscCode").val(),
              "accountName": $("#accountName").val(),
              "emailAccounts": $("#accountEmailId").val(),
              "emailWorkshop": $("#workshopEmailId").val(),
              "kyc": $("#kyc").val(),
              // "manufacturerName": $("#manufacturerName").val(),
              "panNo": $("#panNo").val(),
              "relationshipWorkshop": $("#relationshipWorkshop").val(),
            //   "renewalDate": $("#autoclose-datepicker").val(),
            "renewalDate": "2021-04-19 20:02:10",
              // "serviceTaxNo": $("#serviceTaxNo").val(),
              "supplierAddress": $("#supplierAddress").val(),
               "supplierName": $("#inputSupplier").val(),
              "supplierPhone": $("#supplierPhone").val(),
              "panNo": $("#panNo").val(),
              "tinNo": $("#tinNo").val(),


          }
console.log(json);
 debugger
$.ajax({
       url : addSupplier,
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

function getsupplierTable(){
  var suppliers = callajaxAsParamData(getSupplierList,"");
  var data = suppliers.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].supplierName,
        data[i].supplierName,
        data[i].supplierName,
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
