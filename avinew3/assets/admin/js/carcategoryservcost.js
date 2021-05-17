
    //Default data table
     $('#carCategoryServCostTable_wrapper').DataTable();
      table = $('#carCategoryServCostTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
  debugger
   table.buttons().container().appendTo( '#carCategoryServCostTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
   $('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);
      console.log(modeln);
      });

function carCategoryServCosttCreate()
  {
    var a = document.getElementById("carCategoryId").value;
    var b = document.getElementById("serviceNameId").value;
    var c = document.getElementById("price").value;
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Select car Category',
          icon: 'warning',
          
      });
      return;
  }else if (b == "") {
      swal({
          title: 'Failed',
          text: 'Please Select Service Name',
          icon: 'warning',
          
      });
      return;
  }else if (c == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Price',
          icon: 'warning',
          
      });
      return;
  }
   else{
          var json={
              "carCategoryId": parseInt($("#carCategoryId").val()),
              "serviceNameId": parseInt($("#serviceNameId").val()),                  
              "price":parseInt($("#price").val()),
              "percentage":parseInt($("#percentage").val()),
          }
//console.log(json);

 debugger
$.ajax({
       url : addCarCategoryServiceCost,
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

function getcarCategoryServCostTable(){
  var carCategoryServCost = callajaxAsParamData(getCarCategoryServiceCostList,"");
  var data = carCategoryServCost.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].carCategoryName,
        data[i].serviceName,
        data[i].price,
        data[i].disc_percent,
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
     function getcarCategoryName(){
          var carcatname = callajaxAsParamData(getCarCategoryList,"");
          var carcategoryname = carcatname.data;
        $.each(carcategoryname, function(i, carcatnames) {
                        $('#carCategoryId').append($('<option/>').attr("value", carcatnames.id).text(carcatnames.car_Category_Name));
        
                    });
        }
        
        function getServiceName(){
          var serviceName = callajaxAsParamData(getServiceNameList,"");
          var serviceNameData = serviceName.data;
        $.each(serviceNameData, function(i, servicename) {
                        $('#serviceNameId').append($('<option/>').attr("value", servicename.id).text(servicename.service_name));
        
                    });
        }
        
getServiceName();
getcarCategoryName();
//getModel()
getcarCategoryServCostTable();