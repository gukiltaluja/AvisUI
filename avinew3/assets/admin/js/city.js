    //Default data table
     $('#cityTable_wrapper').DataTable();
      table = $('#cityTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
  debugger
   table.buttons().container().appendTo( '#cityTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
   $('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);
      console.log(modeln);
      });

function cityCreate()
  {
    var a = document.getElementById("cityName").value;
    var b = document.getElementById("inputState").value; 
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter city Name',
          icon: 'warning',          
      });
      return;
  }
  else if (b == "") {
      swal({
          title: 'Failed',
          text: 'Please Select State Name',
          icon: 'warning',          
      });
      return;
  }
   else{
          var json={
           "cityCode": $("#cityCode").val(), 
          "contractedBoundray": "test ak",
          "displayorder": 1,
          "emissionNorm": $("#emissionNorms").val(), 
          "insuranceZoneId": parseInt($("#insuranceZone").val()),
          "name": $("#cityName").val(),
          "regionId": 1,
          "rmtbCoEfficient": 10,
          "rmtbCorrection": parseInt($("#rmtbCorrection").val()),
          "rvCoEfficient": 10,
          "rvCorrection": parseInt($("#rvCorrection").val()),
          "stateCapital": $("#stateCapital").val(),
          "stateId": parseInt($("#inputState").val())
          }
console.log(json);
 debugger
$.ajax({
       url : addcities,
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

function getcityTable(){
  var citys = callajaxAsParamData(vwCityDetails,"");
  var data = citys.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].cityName,
        data[i].stateId,
        data[i].stateCode,
         data[i].stateId,
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
    
    function getState(){
  var states = callajaxAsParamData(getStateList,"");
  var states = states.data;
$.each(states, function(i, states) {
                $('#inputState').append($('<option/>').attr("value", states.id).text(states.stateName));

            });
}

getcityTable();
getState();
