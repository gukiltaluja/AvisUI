    //Default data table
     $('#accessoriesTypeTable_wrapper').DataTable();
      table = $('#accessoriesTypeTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
  debugger
   table.buttons().container().appendTo( '#accessoriesTypeTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
   $('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);
      console.log(modeln);
      });

function accessoriesTypeCreate()
  {
    var a = document.getElementById("accessoriesName").value;
    var b = document.getElementById("PercentageValue").value; 
     if (isNaN(b)) 
      {
        alert("Percentage Value Must input numbers");
        return false;
      }
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Accessories Name',
          icon: 'warning',          
      });
      return;
  }else if (b == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Percentage Value',
          icon: 'warning',          
      });
      return;
  }
   else{
          var json={
              "accessoriesTypeName": $("#accessoriesName").val(),
              "percentageValue": $("#PercentageValue").val()
          }
console.log(json);
 debugger
$.ajax({
       url : addAccessoriestypes,
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

function getaccessoriesTypeTable(){
  var insComp = callajaxAsParamData(accessoriesTypeList,"");
  var data = insComp.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].accessoriesTypeName,
        data[i].percentageValue, 
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
    
    // function checkInp()
    // {
    //   var x = document.getElementById("PercentageValue").value;
    //   if (isNaN(x)) 
    //   {
    //     alert("Must input numbers");
    //     return false;
    //   }
    // }

getaccessoriesTypeTable();
