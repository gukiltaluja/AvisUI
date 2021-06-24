     $('#bankMasterTable_wrapper').DataTable();
      table = $('#bankMasterTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      });
  debugger
   table.buttons().container().appendTo( '#bankMasterTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
   
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

function bankMasterCreate()
  {
    var a = document.getElementById("bankName").value;
    var b = document.getElementById("inputState").value;
    var c = document.getElementById("inputCity").value; 
    var d = document.getElementById("accountNumber").value;
    var e = document.getElementById("bankBranch").value;
    var f = document.getElementById("ifscCode").value;
    var g = document.getElementById("rtgsCode").value;
   if (c == "") {
      swal({
          title: 'Failed',
          text: 'Please Select City Value',
          icon: 'warning',          
      });
      return;
  }
   else if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Bank Name',
          icon: 'warning',
      });
      return;
  }else if (b == "") {
      swal({
          title: 'Failed',
          text: 'Please Select State',
          icon: 'warning',          
      });
      return;
  }
  else if (d == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Account Number',
          icon: 'warning',          
      });
      return;
  }
  else if (e == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Branch Name',
          icon: 'warning',          
      });
      return;
  }
  else if (f == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter ifsc Code',
          icon: 'warning',          
      });
      return;
  }else if (g == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter rtgs Code',
          icon: 'warning',          
      });
      return;
  }
   else{
          var json={
              "accountNo": $("#accountNumber").val(),
              "bankBranch": $("#bankBranch").val(),
              "bankName": $("#bankName").val(),
              "cityId": cityId,
              "ifscCode": $("#ifscCode").val(),
            //   "cityId": $("#inputCity").val(),
            //   "ifscCode": $("#ifscCode").val(),
              "rtgsCode": $("#rtgsCode").val(),
              "stateId": stateId
          }
console.log(json);
 debugger
$.ajax({
       url : addBank,
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

function getbankMasterTable(){
  var bankData = callajaxAsParamData(getbankList,"");
  var data = bankData.data;
  
  console.log(data);
  
  
  var count = 0;  
   debugger
      for (var i = 0; i < data.length; i++) {
        //var edit =  '<a href="'+ data[i].id +'"><i class="fa fa-edit" ></i></a>';
        var edit =  '<a onclick="getBankByIdclick('+data[i].id+')" ><i class="fa fa-edit" ></i></a>';
    count++;
    table.row.add([
        count,
         data[i].cityName,       
         data[i].bank_name,
         data[i].bank_branch,
         data[i].account_no,
         data[i].ifsc_code,
         data[i].rtgs_code,
         data[i].status,
        edit        
    ]);  
}
  table.columns.adjust().draw();
  $("tbody #tb2").show();
}

function getBankByIdclick(id){
        debugger
          manufacturerContactsdata = callajaxByUrlData(bankById,id);
          supplierTypedata = manufacturerContactsdata.data;
          console.log(id);
          console.log(supplierTypedata);
          //alert(manufacturerContact);
          //alert(id);
           $('#bankId').val(supplierTypedata.id);
           $('#inputState').val(supplierTypedata.stateId);
           $('#inputCity').val(supplierTypedata.cityId);
           $('#bankName').val(supplierTypedata.bankName);
           $('#bankBranch').val(supplierTypedata.bankBranch);
           $('#accountNumber').val(supplierTypedata.accountNo);
           $('#ifscCode').val(supplierTypedata.ifscCode);
           $('#rtgsCode').val(supplierTypedata.rtgsCode);
        }
    //update start
    function bankUpdate(){
          debugger
        var a = document.getElementById("bankName").value;
       if (a == "") {
          swal({
              title: 'Failed',
              text: 'Please Enter Bank Name',
              icon: 'warning',
          });
          return;
      }
       else{
           debugger
              var json={
                  "id":parseInt($("#bankId").val()),
                //   "bankName": $("#bankName").val(),
                //   "bankBranch": $("#bankBranch").val(),
                //   "accountNo": $("#accountNumber").val(),
                //   "ifscCode": $("#ifscCode").val(),
                //   "rtgsCode": $("#rtgsCode").val(),
                   
                   "accountNo": parseInt($("#accountNumber").val()),
  "bankBranch": $("#bankBranch").val(),
  "bankName": $("#bankName").val(),
  "cityId": parseInt($("#inputCity").val()),
  "ifscCode": $("#ifscCode").val(),
  "rtgsCode": $("#rtgsCode").val(),
  "stateId": parseInt($("#inputState").val())
              }
             debugger
      console.log(json);
      debugger
      //alert(json);
      $.ajax({
             url : updateBank,
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

// function getState(){
//   var states = callajaxAsParamData(getStateList,"");
//   var states = states.data;
// $.each(states, function(i, states) {
//                 $('#inputState').append($('<option/>').attr("value", states.id).text(states.stateName));

//             });
// }

// function getCity(){
//   var citys = callajaxAsParamData(vwCityDetails,"");
//   var citys = citys.data;
// $.each(citys, function(i, citys) {
//                 $('#inputCity').append($('<option/>').attr("value", citys.cityId).text(citys.cityName));

//             });
// }

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

getbankMasterTable();
getCityonkey();
getState();
getCity();