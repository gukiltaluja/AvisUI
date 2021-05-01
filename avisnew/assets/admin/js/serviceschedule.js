
    //Default data table
     $('#serviceScheduleTable_wrapper').DataTable();
      table = $('#serviceScheduleTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
  debugger
   table.buttons().container().appendTo( '#serviceScheduleTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
   $('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);
      console.log(modeln);
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

function serviceScheduleCreate()
  {
    var modelName = document.getElementById("modelName").value;
    var manuName = document.getElementById("manuName").value;
    var warrantyInYears = document.getElementById("warrantyInYears").value;
    var warrantyInKm = document.getElementById("warrantyInKm").value;
    var paidFreeServiceMonths = document.getElementById("paidFreeServiceMonths").value;
   if (modelName == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter serviceSchedule Type',
          icon: 'warning',
          
      });
      return;
  }else if (manuName == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter manufacturer Name',
          icon: 'warning',
          
      });
      return;
  }
  else if (warrantyInYears == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter warranty In Years',
          icon: 'warning',
          
      });
      return;
  }
   else if (warrantyInKm == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter warranty In Km',
          icon: 'warning',
          
      });
      return;
  }
   else{
          var json={
               "manufacturerId": manufId,
              "modelId": modelId,
              "noOfFreeServices": parseInt($("#noOfFreeServices").val()),
              "paidFreeServiceKm": parseInt($("#paidFreeServiceKm").val()),
              "paidFreeServiceMonths": parseInt($("#paidFreeServiceMonths").val()),
              "warrantyInKm": parseInt($("#warrantyInKm").val()),
              "warrantyInYears": parseInt($("#warrantyInYears").val())
          }
//console.log(json);

 debugger
$.ajax({
       url : addServiceSchedule,
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




function getserviceScheduleTable(){
  var serviceSchedule = callajaxAsParamData(getServiceScheduleList,"");
  var data = serviceSchedule.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].data,
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
    
getModel();
getserviceScheduleTable();