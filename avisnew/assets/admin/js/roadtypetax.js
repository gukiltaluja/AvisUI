    //Default data table
     $('#roadTypeTaxTable_wrapper').DataTable();
      table = $('#roadTypeTaxTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );
  debugger
   table.buttons().container().appendTo( '#roadTypeTaxTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
   $('#manuName').change(function(){
    var id = {"id": $("#manuName").val()}
      console.log(id);
      var modeln = callajaxAsStrData(getModelById,id);
      console.log(modeln);
      });

function roadTypeTaxCreate()
  {
    var a = document.getElementById("registrationType").value;
    var b = document.getElementById("rvCorrection").value;
    var c = document.getElementById("rmtbCorrection").value;   
    if(isNaN(b)) {
      swal({
          title: 'Failed',
          text: 'Rv Correction must be Enter Integer',
          icon: 'warning',          
      });
      return;
  }
  if(isNaN(c)) {
      swal({
          title: 'Failed',
          text: 'Rmtb Correction must be Enter Integer',
          icon: 'warning',          
      });
      return;
  }
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Registration Type',
          icon: 'warning',          
      });
      return;
  }else if(b == ""){
      swal({
          title: 'Failed',
          text: 'Please Enter Rv Correction',
          icon: 'warning',          
      });
  }else if(c == ""){
      swal({
          title: 'Failed',
          text: 'Please Enter Rmtb Correction',
          icon: 'warning',          
      });
  }
   else{
          var json={
              "registrationType": $("#registrationType").val(),
              "rmtbCorrection": $("#rvCorrection").val(),
              "rvCorrection": $("#rmtbCorrection").val()
          }
console.log(json);
 debugger
$.ajax({
       url : addRoadTypeTax,
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

function getroadTypeTaxTable(){
  var insComp = callajaxAsParamData(roadTypeTaxList,"");
  var data = insComp.data;
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
        data[i].registrationType,
        data[i].rvCorrection, 
        data[i].rmtbCorrection,
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

getroadTypeTaxTable();
