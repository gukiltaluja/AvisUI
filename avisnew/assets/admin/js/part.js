
    //Default data table
     $('#partTable_wrapper').DataTable();
      table = $('#partTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
  debugger
   table.buttons().container().appendTo( '#partTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
   $('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);
      console.log(modeln);
      });

function parttCreate()
  {
    var a = document.getElementById("partType").value;
    var b = document.getElementById("partName").value;
    var c = document.getElementById("partPrice").value;
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Part Type',
          icon: 'warning',
          
      });
      return;
  }else if (b == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Part Name',
          icon: 'warning',
          
      });
      return;
  }else if (c == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Part Price',
          icon: 'warning',
          
      });
      return;
  }
   else{
          var json={
              "partTypeId": $("#partType").val(),
              "partName": $("#partName").val(),                  
              "price":$("#partPrice").val(),

          }
//console.log(json);

 debugger
$.ajax({
       url : addPart,
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

 function getParttypeOption(){
  var parttypelist = callajaxAsParamData(getPartTypeList,"");
  var parttypedata = parttypelist.data;
  $.each(parttypedata, function(i, parttypedata) {
                $('#partType').append($('<option/>').attr("value", parttypedata.id).text(parttypedata.partTypeName));
            });
    }


function getPartTable(){
  var part = callajaxAsParamData(getPartList,"");
  var data = part.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].partTypeId,
        data[i].partName,
        data[i].price,
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
getParttypeOption();
//getModel()
getPartTable();