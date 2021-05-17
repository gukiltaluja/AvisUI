    //Default data table
     $('#cityServiceTable_wrapper').DataTable();
      table = $('#cityServiceTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
  debugger
   table.buttons().container().appendTo( '#cityServiceTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
  
 var cityId="";
 var stateId ="";
function getCityonkey(){
  var manuModel = callajaxAsParamData(vwCityDetails,"");
   console.log(manuModel);
   var statedatalist = [];
   var manuModel = manuModel.data;
   for (var i = 0; i < manuModel.length; i++)
              {
                statedatalist.push(manuModel[i].cityName);
              }
              console.log(statedatalist); 
    $("#inputCity").autocomplete({
            source: statedatalist,
            minLength: 1,
            select: function (event, ui) {
              var index = statedatalist.indexOf(ui.item.value);
              debugger
               stateId = manuModel[index].stateId;
              console.log("stateID: "+stateId);    
              $("#inputState").val(manuModel[index].mergeDetails);
              cityId = manuModel[index].cityId;
              console.log("cityID: "+cityId);    
            }
        });
}

function cityServiceCreate()
  {
    var a = document.getElementById("inputState").value;
    var b = document.getElementById("inputCity").value; 
    //var servicearry = document.getElementsByName("servicename");
    var checkboxes = document.getElementsByName('servicename[]');
    var vals = "";
    for (var i=0, n=checkboxes.length;i<n;i++) 
    {
        if (checkboxes[i].checked) 
        {
            vals += checkboxes[i].value + ",";
        }
    }
    //alert(vals);
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Select State Name',
          icon: 'warning',          
      });
      return;
  }else if (b == "") {
      swal({
          title: 'Failed',
          text: 'Please Select City Value',
          icon: 'warning',          
      });
      return;
  }else if (vals == "") {
      swal({
          title: 'Failed',
          text: 'Please Select At Lease One Service',
          icon: 'warning',          
      });
      return;
  }
   else{
          var json={
            //   "stateId": $("#inputState").val(),
            //   "cityId": $("#inputCity").val(),
            "stateId": stateId,
              "cityId": cityId,
              "serviceNameId": vals
          }
console.log(json);
 debugger
$.ajax({
       url : addcityService,
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

function getcityServiceTable(){
  var insComp = callajaxAsParamData(cityServiceList,"");
  var data = insComp.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].cityName,
        data[i].stateName, 
        data[i].serviceName,
        data[i].status,
        edit        
    ]);  
}
  table.columns.adjust().draw();
  $("tbody #tb2").show();
}

function getServiceNameGridview(){
  var insServicename = callajaxAsParamData(getServiceNameList,"");
  var servicenamedata = insServicename.data;
  var count = 0;  
   debugger
      for (var i = 0; i < servicenamedata.length; i++) {
        var edit =  '<a href="'+ servicenamedata[i].id +'"><i class="fa fa-edit" ></i></a>';
    count++;
   $("#serviceNameId").append("<div class='form-group col-md-6'><div class='form-check padd mb-2'><input type='checkbox' class='form-check-input' name='servicename[]' id='serviceNameId' value='"+servicenamedata[i].id+"'><label class='form-check-label' for='check2'>"+servicenamedata[i].service_name+"</label></div></div>");
   
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
    
//   function getState(){
//   var states = callajaxAsParamData(getStateList,"");
//   var states = states.data;
//   $.each(states, function(i, states) {
//                 $('#inputState').append($('<option/>').attr("value", states.id).text(states.stateName));

//             });
//     }
    
//  function getCity(){
//   var citys = callajaxAsParamData(vwCityDetails,"");
//   var citys = citys.data;
//   $.each(citys, function(i, citys) {
//                 $('#inputCity').append($('<option/>').attr("value", citys.cityId).text(citys.cityName));
//             });
//     }

getCityonkey();    
//getModel();
getcityServiceTable();
getServiceNameGridview();
//getState();
//getCity();
