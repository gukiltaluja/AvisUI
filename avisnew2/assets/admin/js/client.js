
var tft = false;
var perkcat = false;
var ctc = false;
var clblk = false;
function checkval(){
    ////////debugger
    if ($('#tft').prop('checked')) {
        tft = true;
      } else {
        tft = false;
      }
      if ($('#perkcat').prop('checked')) {
        perkcat = true;
      } else {
        perkcat = false;
      }
      if ($('#ctc').prop('checked')) {
        ctc = true;
      } else {
        ctc = false;
      }
      if ($('#clblk').prop('checked')) {
        clblk = true;
      } else {
        clblk = false;
      }
      
      console.log("tft"+tft+":perkcat"+perkcat+":ctc"+ctc+": "+clblk); 
}
    var client = [];
    getClientList();
   function getClientList(){
    //////debugger
    client = callajaxAsParamData(CamRequestCompanyNameList,"");
    client = client.data;
    var ct = [];
    var ctId = [];
    for (var i = 0; i < client.length; i++)
              {
                ct.push(client[i].company_name);
                ctId.push(client[i].id);
                //ctnm.push(cities[i].cityName);

              }
              citynm = ct;
    $("#compName").autocomplete({
        source: ct,
        minLength: 2,
        select: function (event, ui) {
          var index = ct.indexOf(ui.item.value);
         // //////debugger
          ctIdd = ctId[index];
          countryId = "";
          $("#clientId").val(ctIdd);
         // $("#country").val("India");
          console.log(ctIdd);    
          
        }
    });
    $("#clientId").autocomplete({
        source: ctId,
        minLength: 2,
        select: function (event, ui) {
          var index = ctId.indexOf(ui.item.value);
          //////debugger
          clientByIdd(ui.item.value)
          //ct = ct[index];
        //  stateId2 = cities[index].stateId;
         // countryId2 = "";
          $("#compName").val(ct[index]);
        //  $("#corpAddcountry").val("India");
          console.log(ctIdd);    
          
        }
    });
  }
var regcId = "";
var corpcId = "";
 $("#apprClientReqd").val("12-02-2021")

// $('#apprClientReqd').data({date: '12-02-2021'});
// $('#apprClientReqd').datepicker().children('input').val('12-02-2021');
// var startDate = new Date();
// $('#apprClientReqd').data({date: startDate}).datepicker('update').children("input").val(startDate);
//$('#apprClientReqd').datepicker("update", new Date("01/10/2014"));
function clientByIdd(id)
{

    clientDetails = callajaxAsParamData(clientById+id);
    var data = clientDetails.data;
   // var clientd = $("#clientId").te()
    if(id.match(/CUS/) == "CUS"){
        $("#man").val(data.agreementNumber)
        $("#dor").val(data.camRequestDate)
        $("#apprClientcamrevd").val(data.camReviewDate)
        $("#apprClientcad").val(data.creditApprovalDate)
        $("#apprClientcamval").val(data.camValidityDate)
        $("#apprClientacvd").val(data.creditApprovedValidityDate)
       $("#apprClientacvd").val(data.creditLimit)
       $("#apprClientbc").val(data.creditBalanceAmount)
       $("#apprClientcpm").val(data.creditPeriodMonth)
       $("#apprClientcmu").val(data.creditUsed)
       $("#apprClientdp").val(data.downPayment)
       $("#rvType").val(data.rvType)
       $("#devOnRv").val(data.deviationOnRv)
       $("#rvApp").val(data.rvApplied)
       $("#forCloseCharges").val(data.forclosureCharges)
       $("#forCloserDisc").val(data.foreclosureDiscountRate)
     //  $("#insMang").val(data.insuranceManageType)
       $("#insMang").val(data.insuranceManageType).attr("selected","selected");
       $("#intRateDevi").val(data.interestRateDeviation)
       $("#mantDev").val(data.maintenanceDeviation)
       $("#mantFeeDev").val(data.maintenanceFeeDeviation)
       $("#intRateDevi").val(data.interestRateDeviation)
       if(data.policySelection == "CTC"){
        $("#ctc").attr('checked', 'checked');
       }else{

       }
       $("#mantType").val(data.maintenanceType)
       $("#roadTaxtT").val(data.roadTaxType)
       $("#reconc").val(data.reconciliation)
       $("#tLoss").val(data.totalLossRetention)
       $("#apprClientReqd").val(data.camRequestDate)
       $("#camName").val(data.companyName)
        $("#camCin").val(data.cinNumber)
        $("#cinNo").val(data.cinNumber)
        $("#apprClientcin").val(data.cinNumber)
        $("#camName").val(data.companyName)
       $("#corpAdd").val(data.corpAddress)
       $("#camCorpAdd").val(data.corpAddress)
        $("#corpAddc").val(data.corpCity)
        $("#camCorpAddc").val(data.corpCity)
        // ctIdd2,
         $("#corpAddCo").val(data.corpCountry)
         $("#camCorpAddCo").val(data.corpCountry)
         $("#corpAddp").val(data.corpPincode)
         $("#camCorpAddp").val(data.corpPincode)
        $("#corpAdds").val(data.corpState)
        $("#camCorpAdds").val(data.corpState)
        $("#corpAddgstn").val(data.corpGstn)
        $("#camCorpAddgstn").val(data.corpGstn)
         $("#bankers").val(data.keyBankName)//not specify
         $("#keyBankers").val(data.keyBankName)//not specify
         $("#camBankers").val(data.keyBankName)//not specify
         $("#pack").val(data.packageServiceName)
         $("#packages").val(data.packageServiceName)
        $("#camRegAdd").val(data.regAddress)
        $("#compRegAdd").val(data.regAddress)
         $("#camRegAddc").val(data.regCity)
         $("#compRegAddc").val(data.regCity)
         //ctIdd,
        $("#camRegAddCo").val(data.regCountry)
        $("#compRegAddCo").val(data.regCountry)
         $("#camRegAddgstn").val(data.regGstn)
         $("#compRegAddpgstn").val(data.regGstn)
         $("#camRegAddPin").val(data.regPincode)
         $("#compRegAddp").val(data.regPincode)
         $("#camRegAdds").val(data.regState)
         //$("#state").val(data.regState)
         $("#compRegAdds").val(data.regState)
         $("#reAmount").val(data.requestedExposure)
        $("#resV").val(data.rvType)
        $("#residualValue").val(data.rvType)
         $("#prm").val(data.promoters)
         $("#ten").val(data.tenure)
         $("#tenure").val(data.tenure)
         $("#glb").val(data.turnoverGlobally)
         $("#compTurnG").val(data.turnoverGlobally)
         $("#ind").val(data.turnoverIndia)
         $("#compTurnI").val(data.turnoverIndia)
        $("#audi").val(data.auditors)
        $("#auditors").val(data.auditors)
        $("#detailsShare").val(data.promoters)
   }else if(id.match(/PRO/) == "PRO"){
    regcId = data.regCityId;
    corpcId = data.corpCityId;
    $("#cap").val(data.annualFleetPotential)
       $("#ctp").val(data.totalFleetPotential)
       $("#camReqBy").val(data.camRequestBy)
       $("#dor").val(data.camRequestDate)
       $("#apprClientReqd").val(data.camRequestDate)
       $("#camName").val(data.companyName)
        $("#camCin").val(data.cinNumber)
        $("#cinNo").val(data.cinNumber)
        $("#apprClientcin").val(data.cinNumber)
        $("#camName").val(data.companyName)
       $("#corpAdd").val(data.corpAddress)
       $("#camCorpAdd").val(data.corpAddress)
        $("#corpAddc").val(data.corpCity)
        $("#camCorpAddc").val(data.corpCity)
        // ctIdd2,
         $("#corpAddCo").val(data.corpCountry)
         $("#camCorpAddCo").val(data.corpCountry)
         $("#corpAddp").val(data.corpPincode)
         $("#camCorpAddp").val(data.corpPincode)
        $("#corpAdds").val(data.corpState)
        $("#camCorpAdds").val(data.corpState)
        $("#corpAddgstn").val(data.corpGstn)
        $("#camCorpAddgstn").val(data.corpGstn)
         $("#bankers").val(data.keyBankName)//not specify
         $("#keyBankers").val(data.keyBankName)//not specify
         $("#camBankers").val(data.keyBankName)//not specify
         $("#pack").val(data.packageServiceName)
         $("#packages").val(data.packageServiceName)
        $("#camRegAdd").val(data.regAddress)
        $("#compRegAdd").val(data.regAddress)
         $("#camRegAddc").val(data.regCity)
         $("#compRegAddc").val(data.regCity)
         //ctIdd,
        $("#camRegAddCo").val(data.regCountry)
        $("#compRegAddCo").val(data.regCountry)
         $("#camRegAddgstn").val(data.regGstn)
         $("#compRegAddpgstn").val(data.regGstn)
         $("#camRegAddPin").val(data.regPincode)
         $("#compRegAddp").val(data.regPincode)
         $("#camRegAdds").val(data.regState)
         $("#compRegAdds").val(data.regState)
         $("#reAmount").val(data.requestedExposure)
        $("#resV").val(data.rvType)
        $("#residualValue").val(data.rvType)
         $("#prm").val(data.promoters)
         $("#ten").val(data.tenure)
         $("#tenure").val(data.tenure)
         $("#global").val(data.turnoverGlobally)
         $("#compTurnG").val(data.turnoverGlobally)
         $("#india").val(data.turnoverIndia)
         $("#compTurnI").val(data.turnoverIndia)
        $("#audi").val(data.auditors)
        $("#auditors").val(data.auditors)
        $("#promoters").val(data.promoters)
    }

}       


       function camCreate()
  {
     var a = document.getElementById("camName").value;
  /*var b = document.getElementById("manuName").value;
 var c = document.getElementById("variant").value;
  var d = document.getElementById("cc").value;
  var e = document.getElementById("seatCap").value;
  var f = document.getElementById("fuelType").value;
  var g = document.getElementById("segment").value;  
  var h = document.getElementById("manuWarrenty").value;
  var i = document.getElementById("fttype").value;
  var j = document.getElementById("maxTenure").value;
  var k = "";
  var l = document.getElementById("rvCor").value;
  var m = document.getElementById("rrmtb").value;
  var n = document.getElementById("fuelEff").value;
  var o = document.getElementById("gstCess").value;
  var p = document.getElementById("VehType").value;
  var q = document.getElementById("transmission").value;
  var r = document.getElementById("emission").value;
  var s = "";
  

  
   if (a == "") {
      swal({
          title: 'Failed',
          text: 'Please Enter Manufacturer Name',
          icon: 'warning',
          
      });
      return;

  }

  
 else if( b == "" ){
      swal({
          title: 'Failed',
          text: 'Please Enter Model Name',
          icon: 'warning',
      });
      return;
  }
  
else if( f == "" ){
      swal({
          title: 'Failed',
          text: 'Please Enter Contact Number',
          icon: 'warning',
      });
      return;
  }
  else if( f.length != 10 ){
      swal({
          title: 'Failed',
          text: 'Please Enter Ten Digit Contact Number ',
          icon: 'warning',
      });
      return;
  }
  else if( isNaN(f)){
      swal({
          title: 'Failed',
          text: 'Please Enter Number',
          icon: 'warning',
      });
      return;
  }
  
  else if( i == 0 ){
      swal({
          title: 'Failed',
          text: 'Please Select government id',
          icon: 'warning',
      });
      return;
  }
  else if( !validateEmail(g)){
      swal({
          title: 'Failed',
          text: 'Invalid Email',
          icon: 'warning',
      
      });
  
      return;
  }*/
  if (a == "") {
  }
          else{
         
  }
var json2={

        "approvedCredit": 0,
        "balanceCredit": 0,
        "clientCompanyDetais": {},
        "clientContactDetails": {
          "coordinator": $("#coord").val(),
          "personDesignation": $("#contFunction").val(),
          "personEmailId":$("#contEmail").val(),
          "personMobile": $("#contNumber").val(),
          "personName": $("#contName").val()
        },
        "clientId":$( "clientId").val(),
        "clientInvoiceDetails": {
          "creditPeriod": "string",
          "invoiceCycle": "string",
          "invoiceType": 0,
          "paymentMode": "string",
          "penalInterest": 0
        },
        "clientProductDetails": {
          "deviationOnRvPercent": "string",
          "forclosureCharges": 0,
          "foreclosureDiscountPercentage": 0,
          "insuranceManageType": "string",
          "interestRateDeviation": 0,
          "maintenanceDeviationPercentage": 0,
          "maintenanceFeeDeviation": 0,
          "maintenanceType": "string",
          "reconciliation": "string",
          "remarks": "string",
          "roadTaxType": "string",
          "rvType": "string",
          "totalLossRetentionPercentage": 0
        },
        "creditApprovedValidityDate": "2021-04-19T06:06:47.735Z"
}
var json={
    
        "annualFleetPotential": $("#cap").val(),
        "camRemarks": "",
        "camRequestBy": $("#crb").val(),
        "camRequestDate":  $("#dor").val()+" 00:00:00",
        "cinNumber": $("#cin").val(),
       
        "companyName": $("#camName").val(),
        "corpAddress": $("#corpAdd").val(),
        "corpCity": $("#corpAddCity").val(),
        "corpCityId":ctIdd2,
        "corpCountry": $("#corpAddcountry").val(),
        "corpGstn": $("#corpAdd").val(),
        "corpPincode": $("#corpAddpin").val(),
        "corpState": $("#corpAdds").val(),
        "keyBankName": $("#bankers").val(),//not specify
        "packageServiceName": $("#pack").val(),
        "regAddress": $("#camRegAdd").val(),
        "regCity": $("#camRegAddCity").val(),
        "regCityId": ctIdd,
        "regCountry": $("#country").val(),
        "regGstn": $("#camRegAddgstn").val(),
        "regPincode": $("#camRegAddpin").val(),
        "regState": $("#state").val(),
        "requestedExposure": $("#re").val(),
        "rvType": $("#resV").val(),
        "promoters": $("#prm").val(),
        "tenure": $("#ten").val(),
        "totalFleetPotential": $("#ctp").val(),
        "turnoverGlobally": $("#glb").val(),
        "turnoverIndia": $("#ind").val(),
        "auditors": $("#audi").val(),
        //promo,residual,clientProfile,KeyMAnage


    
      
}
  

console.log(json);


//localStorage.setItem("xx", $("#hel").val());
 //////debugger
$.ajax({
       url : addCamRequest,
       type: "POST",
       data:  JSON.stringify(json),
       dataType:'json',
       contentType: "application/json",
        async: false,
        success: function (result) {
    var data=result;
    //////debugger
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
  // }
}
function addClientCont(){
  
var json2={
    "clientId": $("#clientId").val(),
    "coordinator": $("#coord").val(),
    "personDesignation": $("#contFunction").val(),
    "personEmailId": $("#contEmail").val(),
    "personMobile":  $("#contNumber").val(),
    "personName": $("#contName").val()
  }
  //////debugger
  $.ajax({
         url : addClientContact,
         type: "POST",
         data:  JSON.stringify(json2),
         dataType:'json',
         contentType: "application/json",
          async: false,
          success: function (result) {
      var data=result;
      //////debugger
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
  

    function addClientInvo(){
  
        var json2={
                "agreementNumber": $("#man").val(),
                "clientId": $("#clientId").val(),
                "creditPeriod": $("#credP").val(),
                "invoicingCycle": $("#inCycle").val(),
                "invoicingType": $("#invoicingType").val(),
                "modeOfPayment": $("#mop").val(),
                "penelInterest": "3",
                "remarks": $("invRemarks").val()
             
          }
          //////debugger
          $.ajax({
                 url : addInvoicing,
                 type: "POST",
                 data:  JSON.stringify(json2),
                 dataType:'json',
                 contentType: "application/json",
                  async: false,
                  success: function (result) {
              var data=result;
              //////debugger
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

                     
            function addClientCom(){
  
                var json2={
                 
                    "clientId": $("#clientId").val(),
                        "ageOfCompany": $("#ageComp").val(),
                        "assetBase":  $("#assetBase").val(),    
                        "auditors": $("#audi").val(),
                        "cinNumber": $("#cinNo").val(),
                        "clientCycleStage": $("#clientSale").val(),
                        "clientGroup":  $("#clientGrp").val(),
                        "companyName": $("#compName").val(),
                        "companyType": $("#company-profile").val(),
                        "corpAddress": $("#corpAdd").val(),
                        "corpCity": $("#corpAddc").val(),
                        "corpCityId": corpcId,
                        "corpCountry": $("#corpAddCo").val(),
                        "corpGstn": $("#corpAddgstn").val(),
                        "corpPincode": $("#corpAddp").val(),
                        "corpState": $("#corpAdds").val(),
                        "economicSector": $("#EcoSec").val(),
                        "fleetPotential": $("#fleetPot").val(),
                        "fleetSize": $("#fleetSize").val(),
                        "keyBanker": $("#keyBankers").val(),
                        "keyPersonnel": $("#keyManag").val(),
                        "leadSource": $("#leadSource").val(),
                        "legalStatus": $("#legalStatus").val(),
                        "panNumber": "KADH7382SD",
                        "regAddress":  $("#compRegAdd").val(),
                        "regCity": $("#compRegAddc").val(),
                        "regCityId": regcId,
                        "regCountry": $("#compRegAddCo").val(),
                        "regGstn": $("#compRegAddpgstn").val(),
                        "regPincode": $("#compRegAddp").val(),
                        "regState":  $("#compRegAdds").val(),
                        "revenuePercent":  $("#revp").val(),
                        "shareHolders": $("#detailsShare").val(),
                        "turnoverGlobally": $("#compTurnG").val(),
                        "turnoverIndia":$("#compTurnI").val(),
                      
                  }
                  debugger
                  $.ajax({
                         url : addCompany,
                         type: "POST",
                         data:  JSON.stringify(json2),
                         dataType:'json',
                         contentType: "application/json",
                          async: false,
                          success: function (result) {
                      var data=result;
                      //////debugger
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

                    function addClientCam(){
  
                        var json2={
                            "agreementNumber": $("#man").val(), 
                            "clientId": $("#clientId").val(),
                                "camRequestDate": "2021-04-22T07:03:57.366Z",
                                "camReviewDate": "2021-04-22T07:03:57.366Z",
                                "camValidityDate": "2021-04-22T07:03:57.366Z",
                                "creditApprovalChangeRemarks": "string",
                                "creditApprovalDate": "2021-04-22T07:03:57.366Z",
                                "creditApprovedAmount": 0,
                                "creditApprovedValidityDate": "2021-04-22T07:03:57.366Z",
                                "creditBalanceAmount": 0,
                                "creditLimit": 0,
                                "creditPeriodMonth": "string",
                                "creditUsed": 0,
                                "deviationOnRv": 0,
                                "downPayment": 0,
                                "forclosureCharges": 0,
                                "foreclosureDiscountRate": 0,
                                "id": 0,
                                "insuranceManageType": "string",
                                "interestRateDeviation": 0,
                                "loggedIn": "string",
                                "maintenanceDeviation": 0,
                                "maintenanceFeeDeviation": 0,
                                "maintenanceType": "string",
                                "managementFees": 0,
                                "policySelection": "string",
                                "reconciliation": "string",
                                "roadTaxType": "string",
                                "rvApplied": 0,
                                "rvType": "string",
                                "securityDeposit": 0,
                                "serviceSelection": "string",
                                "statusType": "string",
                                "totalLossRetention": 0,
                                "varifyBy": "string"
                              
                          }
                          //////debugger
                          $.ajax({
                                 url : addClient,
                                 type: "POST",
                                 data:  JSON.stringify(json2),
                                 dataType:'json',
                                 contentType: "application/json",
                                  async: false,
                                  success: function (result) {
                              var data=result;
                              //////debugger
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

                            function addClientChild(){
  
                                var json2={
                                    "agreementNumber": $("#man").val(), 
                                    "clientId": $("#clientId").val(),
                                        "billAddress": $("#billAdd").val(),
                                        "billCity": $("#billAddc").val(),
                                        "billCityId": $("#Status").val(),
                                        "billCountry": $("#billAddCo").val(),
                                        "billGstn": $("#billAddgstn").val(),
                                        "billPincode": $("#billAddp").val(),
                                        "billState": $("#billAdds").val(),
                                        "id": $("#chId").val(), 
                                        "invoiceDispAddress": $("#invDispAdd").val(),
                                        "invoiceDispCity": $("#invDispAddc").val(),
                                        "invoiceDispCityId": $("#invDispAddc").val(),
                                        "invoiceDispGstn": $("#invDispAddgstn").val(),
                                        "invoiceDispPincode": $("#invDispAddp").val(),
                                        "invoiceDispState": $("#invDispAdds").val(),
                                        "personDesignation":$("#chFunction").val(),//Country Missing
                                        "personEmailId": $("#chEmail").val(),
                                        "personName": $("#chBName").val(),
                                        "vehicleRegAddress": $("#vehRegAdd").val(),
                                        "vehicleRegCity": $("#vehRegAddc").val(),
                                        "vehicleRegCityId": $("#vehRegAddc").val(),
                                        "vehicleRegCountry": $("#vehRegAddCo").val(),
                                        "vehicleRegGstn": $("#vehRegAddgstn").val(),
                                        "vehicleRegPincode": $("#vehRegAddp").val(),
                                        "vehicleRegState": $("#vehRegAdds").val(),
                                      
                                  }
                                  //////debugger
                                  $.ajax({
                                         url : addChildAccount,
                                         type: "POST",
                                         data:  JSON.stringify(json2),
                                         dataType:'json',
                                         contentType: "application/json",
                                          async: false,
                                          success: function (result) {
                                      var data=result;
                                      //////debugger
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
var ctIdd = "";
var stateId = "";
var countryId = "";
var ctIdd2 = "";
var stateId2 = "";
var countryId2 = "";
var citynm = [];
var citynmId = [];
var citynmId2 = [];
var ctnm = [];
var cities = [];
  getCityList();
  var pinc = "";
  //getcityByPin()
$("#camRegAddPin").on("blur",function (event) {
  //  alert($("#camRegAddpin").val());
   //this.value = this.value.replace(/[^0-9\.]/g,'');
$(this).val($(this).val().replace(/[^0-9\.]/g,''));
   if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
       event.preventDefault();
   }
   
   getcityByPin();
});

function getcityByPin(){
    var pin = $("#camRegAddPin").val()
    debugger
    var pinc = callajaxAsParamData2(getCityByPin+pin);
    var city = pinc[0].PostOffice[0].Division;
    var st = pinc[0].PostOffice[0].State;
    var index = "";
     if(ctnm.includes(city) == true){
         index = ctnm.indexOf(city);
        $("#camRegAddc").val(citynm[index]);
        ctIdd = cities[index].cityId;
    }else{
        $("#camRegAddc").val(city);
    }
    //$("#camRegAddCity").val(city);
    stateId = cities[index].stateId
    countryId = cities[index].countryId
    $("#camRegAdds").val(pinc[0].PostOffice[0].State);
    $("#camRegAddCo").val("India");
    
  
}

$("#corpAddpin").on("blur",function (event) {
    //////debugger
  //  alert($("#camRegAddpin").val());
   //this.value = this.value.replace(/[^0-9\.]/g,'');
$(this).val($(this).val().replace(/[^0-9\.]/g,''));
   if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
       event.preventDefault();
   }
   
   getcityByPin2();
});

function getcityByPin2(){
    //////debugger
    var pinc = callajaxAsParamData2(getCityByPin+$("#corpAddpin").val());
    var city = pinc[0].PostOffice[0].Division;
    var st = pinc[0].PostOffice[0].State;
    if(ctnm.includes(city) == true){
        var index = ctnm.indexOf(city);
        $("#corpAddCity").val(citynm[index]);
        ctIdd2 = cities[index].cityId;
    }else{
        $("#corpAddCity").val(city);
    }
    stateId2 = cities[index].stateId
    countryId2 = cities[index].countryId
    $("#corpAdds").val(pinc[0].PostOffice[0].State);
    $("#corpAddcountry").val("India");
    
}
function getCityList(){
    //////debugger
     cities = callajaxAsParamData(cityList,"");
    cities = cities.data;
    var ct = [];
    var ctId = [];
    for (var i = 0; i < cities.length; i++)
              {
                ct.push(cities[i].mergeDetails);
                ctId.push(cities[i].cityId);
                ctnm.push(cities[i].cityName);

              }
              citynm = ct;
    $("#camRegAddCity").autocomplete({
        source: ct,
        minLength: 2,
        select: function (event, ui) {
          var index = ct.indexOf(ui.item.value);
         // //////debugger
          ctIdd = ctId[index];
          stateId = cities[index].stateId;
          countryId = "";
          $("#state").val(cities[index].stateName);
          $("#country").val("India");
         // console.log(ctIdd);    
          
        }
    });
    $("#corpAddCity").autocomplete({
        source: ct,
        minLength: 2,
        select: function (event, ui) {
          var index = ct.indexOf(ui.item.value);
          //////debugger
          ctIdd2 = ctId[index];
          stateId2 = cities[index].stateId;
          countryId2 = "";
          $("#corpAdds").val(cities[index].stateName);
          $("#corpAddcountry").val("India");
         // console.log(ctIdd);    
          
        }
    });
}


// fuelT()
// function fuelT(){
//     var fuelType = callajaxAsParamData(getfuelTypeList,"");
//     var fuelType = fuelType.data;
// $.each(fuelType, function(i, fuelType) {
//                 $('#fuelType').append($('<option/>').attr("value", fuelType.id).text(fuelType.fuel_type_name));
// console.log(fuelType.fuel_type_name);
//             });
// }


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
              //////debugger
               modelId = manuModel[index].modelId;
              console.log(modelId);    
              $("#manuName").val(manuModel[index].manufacturerName);
              manufId = manuModel[index].manufacturerId;
              console.log("manufID: "+manufId);    
            }
        });

}

//getVariantTable();
function getVariantTable(){
    var variant = callajaxAsParamData(getVariantsWithModelAndManufacturer,"");
   console.log(variant);
   var data = variant.data;
   var count = 0;
   //////debugger
   for (var i = 0; i < data.length; i++) {
    //netwt = netwt.toFixed(2)
    console.log(data.length);
    count++;
    table.row.add([
        count,
        data[i].manuModelVariantName,
        data[i].categoryGstCess,,,,,,,,
        
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
    
function callajaxAsParamData2(url,data)
{
    var response="";
    $.ajax(
        {
            url :url,
            type: "get",
            data:  "",
           // dataType:'json',
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