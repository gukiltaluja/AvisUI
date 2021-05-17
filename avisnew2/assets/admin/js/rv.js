
    //Default data table
     $('#rvTable_wrapper').DataTable();
      table = $('#rvTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
  debugger
   table.buttons().container().appendTo( '#rvTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
   $('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);
      console.log(modeln);
      });
      
      
var manufId = "";
var modelId = "";
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

function rvCreates()
  {
    var a = document.getElementById("manuName").value;
    var b = document.getElementById("month24").value;
    var c = document.getElementById("rvUpValue").value;
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Manufacture Name',
          icon: 'warning',          
      });
      return;
  }else if(c == ""){
       swal({
          title: 'Failed',
          text: 'Please Enter rvUpValue',
          icon: 'warning',          
      });
      return;
  }else if(b == ""){
       swal({
          title: 'Failed',
          text: 'Please Enter month24',
          icon: 'warning',          
      });
      return;
  }
   else{
          var json={                                 
             // "partPrice":$("#partPrice").val(),
             "mileage": $("#mileage12").val(),
              "modelId": modelId,
              "month": $("#month24").val(),
              "rvValue": $("#rvUpValue").val()

          }
console.log(json);
 debugger
$.ajax({
       url : addRvs,
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



function getrvTable(){
  var rv = callajaxAsParamData(getRvList,"");
  var data = rv.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].rvValue,
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

getModel()
getrvTable();