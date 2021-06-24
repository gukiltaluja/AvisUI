
    //Default data table
     $('#vehiclesegmentTable_wrapper').DataTable();
      table = $('#vehiclesegmentTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
   table.buttons().container().appendTo( '#vehiclesegmentTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
   $('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);
      console.log(modeln);
      });

function vehiclesegmentCreate()
  {
    var a = document.getElementById("vehicleSegmentName").value;
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Vehicle Segment Name',
          icon: 'warning',
          
      });
      return;

  }
   else{
          var json={
              "vehicleSegmentName": $("#vehicleSegmentName").val(),                                 
              // "priceForInsurance":$("#priceTankForInsurance").val(),

          }
$.ajax({
       url : addVehicleSegment,
       type: "POST",
       data:  JSON.stringify(json),
       dataType:'json',
       contentType: "application/json",
        async: false,
        success: function (result) {
    var data=result;
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
             
  $("#modelName").autocomplete({
            source: model,
            minLength: 1,
            select: function (event, ui) {
              var index = model.indexOf(ui.item.value);
               modelId = manuModel[index].modelId;
              console.log(modelId);    
              $("#manuName").val(manuModel[index].manufacturerName);
              manufId = manuModel[index].manufacturerId;
              console.log("manufID: "+manufId);    
            }
        });

}

function getvehiclesegmentTable(){
  var vehiclesegment = callajaxAsParamData(getVehicleSegmentList,"");
  var data = vehiclesegment.data;
  var count = 0;  
      for (var i = 0; i < data.length; i++) {
        var edit =  '<a onclick="getVehicleSegmentByIds('+data[i].id+')" ><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].vehicle_Segment_Name,       
         data[i].status,
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
    
    function getinsuranceZone(){
          var insuranceZone = callajaxAsParamData(insuranceZoneList,"");
          var insuranceZoneData = insuranceZone.data;
          console.log(insuranceZoneData)
            $.each(insuranceZoneData, function(i, servicename) {
                        $('#insuranceZone').append($('<option/>').attr("value", servicename.id).text(servicename.insuranceZone));
        
                    });
        }


      function getVehicleSegmentByIds(id){
        debugger

          segments = callajaxByUrlVarData(getVehicleSegmentById,id);

          segment = segments.data;

          console.log(segments);
          console.log(segment);

          $('.save').addClass('d-none');
          $('.update').removeClass('d-none');

          $('#vehicleSegmentName').val(segment.vehicleSegmentName);
          $('#vehicleSegmentId').val(segment.id);
        }


      function vehiclesegmentUpdate()
      {
        var a = document.getElementById("vehicleSegmentName").value;

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
                  "vehicleSegmentName": $("#vehicleSegmentName").val(),                                 
                  "id":$("#vehicleSegmentId").val(),
              }
    
      $.ajax({
             url : updateVehicleSegment,
             type: "POST",
             data:  JSON.stringify(json),
             dataType:'json',
             contentType: "application/json",
              async: false,
              success: function (result) {
              var data=result;
                console.log(data)

                  if(result.msg == "success")
                  {
                    swal("Successfully Updated", {
                    icon: "success",
                    })
                    
                    // location.reload();
                
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
                
                    console.log(jqXHR)
                    console.log(textStatus)
                    console.log(errorThrown)
                
               alert("Failed. Please try again");
           }   
       });
      }

    }
    
    
    

getModel()
getvehiclesegmentTable();
getinsuranceZone();