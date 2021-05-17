
    //Default data table
     $('#colorCodeTable_wrapper').DataTable();
      table = $('#colorCodeTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
  debugger
   table.buttons().container().appendTo( '#colorCodeTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
   $('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);
      console.log(modeln);
      });

function colorCodeCreate()
  {
    var a = document.getElementById("colorCode").value;
    var b = document.getElementById("rvCorrection").value;
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Color Code',
          icon: 'warning',
          
      });
      return;

  }
   else{
          var json={
              "colorCodeName": $("#colorCode").val(),                                 
              "rvCorrection":$("#rvCorrection").val(),
          }
console.log(json);
 debugger
$.ajax({
       url : addColorCode,
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
 //when got error
           alert("Failed. Please try again");
       }   
   });
}

  }


var manufId = "";

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

function getcolorCodeTable(){
  var colorCode = callajaxAsParamData(getcolorCodeList,"");
  var data = colorCode.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        var edit =  '<a onclick="getColoCodeById('+data[i].id+')" ><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].colorCodeName,       
         data[i].rvCorrection,
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


      function getColoCodeById(id){
          colors = callajaxByUrlData(colorCodeById,id);
          color = colors.data;
          $('.save').addClass('d-none');
          $('.update').removeClass('d-none');

          $('#colorCode').val(color.colorCodeName);
          $('#rvCorrection').val(color.rvCorrection);
          $('#colorId').val(color.id);
        }

      function colorCodeUpdate()
      {
        var a = document.getElementById("colorCode").value;
       

       if (a == "") {
          swal({
              title: 'Failed',
              text: 'Please Enter Color Code',
              icon: 'warning',
              
          });
          return;

      }
       else{
              var json={
                  "colorCodeName": $("#colorCode").val(),                                 
                  "rvCorrection":$("#rvCorrection").val(),
                  "id":$("#colorId").val(),
              }
    
      $.ajax({
             url : updateColorCode,
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

getModel()
getcolorCodeTable();