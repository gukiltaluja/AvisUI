    //Default data table
     $('#supplierLocationTable_wrapper').DataTable();
      table = $('#supplierLocationTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
  debugger
   table.buttons().container().appendTo( '#supplierLocationTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
   $('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);
      console.log(modeln);
      });

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

function supplierLocationCreate()
  {
    var a = document.getElementById("contactName").value;
    var b = document.getElementById("contactPhone").value; 
    var c = document.getElementById("supplierEmail").value;
    var cityname = document.getElementById("inputCity").value;
    var statename = document.getElementById("inputState").value;
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Contact Name',
          icon: 'warning',          
      });
      return;
  }else if (b == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Contact Phone',
          icon: 'warning',          
      });
      return;
  }else if (c == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Contact Email',
          icon: 'warning',          
      });
      return;
  }else if (cityname == "") {
      swal({
          title: 'Failed',
          text: 'Please Select State name',
          icon: 'warning',          
      });
      return;
  }
  else if (statename == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter City Name',
          icon: 'warning',          
      });
      return;
  }
   else{
          var json={
                 "accPackCode": $("#accPacCode").val(),
                  "cityId": cityId,
                  "cityName": $("#inputCity").val(),  
                  "contactName": $("#contactName").val(),
                  "contactPhone": $("#contactPhone").val(), 
                  "stateId": stateId,
                  "stateName": $("#inputState").val(),
                  "supplierEmail": $("#supplierEmail").val(),
                  "supplierId": parseInt($("#supplierId").val()),
                  "supplierLocAddress": $("#supplierLocAddress").val(),
                  "supplierLocPhone": $("#supplierLocPhone").val(),
                  "supplierPincode": $("#supplierPinCode").val()
          }
console.log(json);
 debugger
$.ajax({
       url : addSupplierLocation,
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

function getsupplierLocationTable(){
  var supplierLocations = callajaxAsParamData(getSupplierLocationList,"");
  var data = supplierLocations.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].contactName,
        data[i].supplierLocAddress,
        data[i].cityName,
        data[i].stateName,
        data[i].supplierPincode,
        data[i].supplierLocPhone,
        data[i].contactPhone,
        data[i].contactName,
        data[i].accPackCode,
        data[i].supplierEmail,
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
    
//     function getState(){
//   var states = callajaxAsParamData(getStateList,"");
//   var states = states.data;
// $.each(states, function(i, states) {
//                 $('#stateId').append($('<option/>').attr("value", states.id).text(states.stateName));

//             });
// }

// function getCity(){
//   var citys = callajaxAsParamData(vwCityDetails,"");
//   var citys = citys.data;
// $.each(citys, function(i, citys) {
//                 $('#inputCity').append($('<option/>').attr("value", citys.cityId).text(citys.cityName));

//             });
// }

function getSupplier(){
  var supplier = callajaxAsParamData(getSupplierList,"");
  var supplier = supplier.data;
$.each(supplier, function(i, supplier) {
                $('#supplierId').append($('<option/>').attr("value", supplier.id).text(supplier.supplierName));

            });
}

getsupplierLocationTable();
// getState();
// getCity();
getSupplier();
getCityonkey();