
    //Default data table
     $('#insuranceZoneTable_wrapper').DataTable();
      table = $('#insuranceZoneTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
  debugger
   table.buttons().container().appendTo( '#insuranceZoneTable_wrapper .row:eq(0) .col-md-6:eq(0)' );


function insuranceZoneCreat()
  {
    var a = document.getElementById("insuranceZone").value;
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter insurance Zone',
          icon: 'warning',
          
      });
      return;
  }
   else{
          var json={
              "insuranceZone": $("#insuranceZone").val()
          }
//console.log(json);

 debugger
$.ajax({
       url : addInsuranceZone,
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


var manufId = "";

function getinsuranceZoneTable(){
  var insuranceZone = callajaxAsParamData(insuranceZoneList,"");
  var data = insuranceZone.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        //var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
        var edit =  '<a onclick="getInsuranceZoneByIdclick('+data[i].id+')" ><i class="fa fa-edit" ></i></a>';
        count++;
        table.row.add([
            count,
            data[i].insuranceZone,
            data[i].commonFields.status,
            edit        
        ]);
    }
    table.columns.adjust().draw();
    $("tbody #tb2").show();
}

function getInsuranceZoneByIdclick(id){
        debugger
          officedata = callajaxByUrlData(insuranceZoneById,id);
          officedata = officedata.data;
          console.log(id);
          console.log(officedata);
          //alert(manufacturerContact);
          //alert(id);
           $('#insuranceZoneId').val(officedata.id);
           $('#insuranceZone').val(officedata.insuranceZone);
        
        }
    //update start
    function insuranceZoneUpdate(){
          debugger
        var a = document.getElementById("insuranceZone").value;
       if (a == "") {
          swal({
              title: 'Failed',
              text: 'Please Enter Supplier Type',
              icon: 'warning',
          });
          return;
      }
       else{
           debugger
              var json={
                  "id":parseInt($("#insuranceZoneId").val()),
                   "insuranceZone": $("#insuranceZone").val(),
                   
              }
             debugger
      console.log(json);
      debugger
      //alert(json);
      $.ajax({
             url : updateInsuranceZone,
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
              // alert("Failed. Please try again");
              swal("Successfully Updated", {
                    icon: "success",
                    })
                    location.reload();
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
//getModel()

getinsuranceZoneTable();