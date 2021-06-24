
    //Default data table
     $('#rmtbTable_wrapper').DataTable();
      table = $('#rmtbTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
  debugger
   table.buttons().container().appendTo( '#rmtbTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
   
//   $('#manuName').change(function(){
//     var id = {"id": $("#manuName").val()}
//       console.log(id);
//       var modeln = callajaxAsStrData(getModelById,id);
//       console.log(modeln);
//       });

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

function rmtbCreate()
  {
    var a = document.getElementById("manuName").value;
    var b = document.getElementById("rmtbup").value;
    var c = document.getElementById("months12").value;
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Manufacturers Name',
          icon: 'warning',          
      });
      return;
  }else if(b == ""){
       swal({
          title: 'Failed',
          text: 'Please Enter rmtbup',
          icon: 'warning',          
      });
      return;
  }else if(c == ""){
       swal({
          title: 'Failed',
          text: 'Please Enter months12',
          icon: 'warning',          
      });
      return;
  }
   else{
          var json={
              "mileage": $("#months12").val(),
              "modelId": modelId,
              "month": $("#months12").val(),
              "rmtbValue": $("#rmtbup").val()


          }
console.log(json);
 debugger
$.ajax({
       url : addRmtb,
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



function getrmtbTable(){
  var rmtb = callajaxAsParamData(getRmtbList,"");
  var data = rmtb.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        //var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
        var edit =  '<a onclick="findRmtbById('+data[i].id+')" ><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].rmtbValue,
        data[i].status,
        edit        
    ]);  
}
table.columns.adjust().draw();
$("tbody #tb2").show();
}

function findRmtbById(id){
        debugger
          tyresdata = callajaxByUrlVarData(getRmtbById,id);
          tyre = tyresdata.data;
          console.log(id);
          console.log(tyre);
          debugger
          $('#rmtbup').val(tyre.rmtbValue);
          $('#mileage24').val(tyre.mileage);
          $('#months12').val(tyre.month);
          $('#modelName').val(tyre.modelId);
           $('#rmtbId').val(tyre.id);
        }

function rmtbUpdate(){
    debugger
        var a = document.getElementById("modelName").value;
       if (a == "") {
          swal({
              title: 'Failed',
              text: 'Please Enter Model Name',
              icon: 'warning',
              
          });
          return;
      }
       else{
              var json={
                  "id":$("#rmtbId").val(),
                  "mileage": parseInt($("#mileage12").val()),
                  "modelId": parseInt($("#modelName").val()),
                  "month": parseInt($("#month24").val()),
                  "rvValue": parseInt($("#rmtbup").val())
                  }
    debugger
      $.ajax({
             url : updateRv,
             type: "POST",
             data:  JSON.stringify(json),
             dataType:'json',
             contentType: "application/json",
              async: false,
              success: function (result) {
              var data=result;
              console.log(data);

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

getModel();
getrmtbTable();