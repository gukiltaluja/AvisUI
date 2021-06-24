    //Default data table
     $('#insIdvTable_wrapper').DataTable();
      table = $('#insIdvTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
  debugger
   table.buttons().container().appendTo( '#insIdvTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
   
   $('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);
      console.log(modeln);
      });

function insIdvCreate()
  {
    var a = document.getElementById("idvPercent").value;   
    var b = document.getElementById("ageFrom").value;
    var c = document.getElementById("ageTo").value;
       if (isNaN(a)) 
      {
        alert("Percentage Value Must input numbers");
        return false;
      }
       if (isNaN(b)) 
      {
        alert("Age From Value Must input numbers");
        return false;
      }
       if (isNaN(c)) 
      {
        alert("Age To Value Must input numbers");
        return false;
      }
    if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter idv Percent',
          icon: 'warning',          
      });
      return;
  }else if(b == ""){
       swal({
          title: 'Failed',
          text: 'Please Enter age From',
          icon: 'warning',          
      });
      return;
  }else if(c == ""){
       swal({
          title: 'Failed',
          text: 'Please Enter ageTo',
          icon: 'warning',          
      });
      return;
  }
   else{
          var json={
              "insIdvPercent": $("#idvPercent").val(),
              "ageFrom": $("#ageFrom").val(),
              "ageTo": $("#ageTo").val(),
              "insIdvValue": $("#idvPercent").val()
          }
console.log(json);
 debugger
$.ajax({
       url : addInsuranceIdv,
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

function getinsIdvTable(){
  var insComp = callajaxAsParamData(getInsuranceIdvList,"");
  var data = insComp.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        //var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
        var edit =  '<a onclick="getinsIdvByIdclick('+data[i].id+')" ><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].insIdvValue, 
        data[i].insIdvPercent,
        data[i].ageFrom,
        data[i].ageTo,
         data[i].commonFields.status,
        edit        
    ]);  
}
  table.columns.adjust().draw();
  $("tbody #tb2").show();
}

function getinsIdvByIdclick(id){
        debugger
          officedata = callajaxByUrlVarData(getInsuranceIdvById,id);
          officedata = officedata.data;
          console.log(id);
          console.log(officedata);
          //alert(manufacturerContact);
          //alert(id);
           $('#insuranceIdvId').val(officedata.id);
           $('#idvPercent').val(officedata.insIdvPercent);
           $('#ageFrom').val(officedata.ageFrom);
           $('#ageTo').val(officedata.ageTo);
           //$('#officeCountry').val(officedata.country);

        }
    //update start
    function InsuranceIdvUpdate(){
          debugger
        var a = document.getElementById("officeNameId").value;
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
                  "id":parseInt($("#officeId").val()),
                   "officeName": $("#officeNameId").val(),
                    "city": $("#officecity").val(),
  "cityId": 0,
  "contactPerson": "string",
  "contactEmail": "string",
"designation": "string",
  "country": $("#officeCountry").val(),
  "designation": "string",
  "gstn": $("#officeGst").val(),
  "officeAddress": $("#officeaddressId").val(),
  //"officeName": "string",
  "panNumber": $("#officePan").val(),
  "pincode": parseInt($("#officepincode").val()),
  "state": $("#officestate").val()
              }
             debugger
      console.log(json);
      debugger
      //alert(json);
      $.ajax({
             url : updateAvisOffice,
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

getinsIdvTable();
