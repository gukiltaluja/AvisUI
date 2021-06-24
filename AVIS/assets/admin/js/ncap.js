 
    //Default data table
     $('#tyretable_wrapper').DataTable();


      table = $('#ncapTable').DataTable( {
      lengthChange: false,
     dom: 'Bfrtip',
        // buttons: [
        //     {
        //         extend: 'copy',
        //         title: 'Data export'
        //     },
        //     {
        //         extend: 'excel',
        //         title: 'Data export'
        //     },
           
        // ]
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
    debugger
        table.buttons().container().appendTo( '#tyretable_wrapper .row:eq(0) .col-md-6:eq(0)' );
    
$('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);
     console.log(modeln);
 // var modeln = ["adsdf","hghgh","dfgfgd"];     
      });


function ncapCreate()
  {
  var a = document.getElementById("ncap").value;
  
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Manufacturer Name',
          icon: 'warning',
          
      });
      return;

  }
          else{

var json={
    "ncapValue": $("#ncap").val(),
}

 debugger
$.ajax({
       url : addNcap,
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
                });
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
  // }
}

  }




function getNcapTableTable(){
  var serviceName = callajaxAsParamData(getNcapTableList,"");
  var data = serviceName.data;
  console.log(data);
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        //var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
        var edit =  '<a onclick="getNcapByIdclick('+data[i].id+')" ><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].ncapValue,
        data[i].commonFields.status,
        edit        
    ]);
  
}
table.columns.adjust().draw();
$("tbody #tb2").show();
}

function getNcapByIdclick(id){
        debugger
          manufacturerContactsdata = callajaxByUrlVarData(getNcapById,id);
          nCapdata = manufacturerContactsdata.data;
          console.log(id);
          console.log(nCapdata);
          //alert(manufacturerContact);
          //alert(id);
          $('#ncap').val(nCapdata.ncapValue);
        
          $('#nCapId').val(nCapdata.id);
        }
    //update start
    function nCapUpdate(){
          debugger
        var a = document.getElementById("ncap").value;
       if (a == "") {
          swal({
              title: 'Failed',
              text: 'Please Ncap Name',
              icon: 'warning',
          });
          return;
      }
       else{
           debugger
              var json={
                  "id":$("#nCapId").val(),
                  "ncapValue": parseInt($("#ncap").val())
              }
             debugger
      console.log(json);
      debugger
      //alert(json);
      $.ajax({
             url : updateNcap,
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
               //alert("Failed. Please try again");
               swal("Successfully Updated", {
                    icon: "success",
                    })
                    location.reload();
           }   
       });
      }
    }

getNcapTableTable();