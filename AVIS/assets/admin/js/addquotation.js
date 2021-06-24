    //Default data table
     $('#exitingQuotationTable_wrapper').DataTable();
      table = $('#exitingQuotationTable').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ],
      "scrollX":true,
      // responsive: true
      });
  
   table.buttons().container().appendTo( '#exitingQuotationTable_wrapper .row:eq(0) .col-md-6:eq(0)' );
   
   var cityId="";
 var stateId ="";
function getCityonkey(){
  var manuModel = callajaxAsParamData(vwCityDetails,"");
   // console.log(manuModel);
   var statedatalist = [];
   var manuModel = manuModel.data;
   for (var i = 0; i < manuModel.length; i++)
              {
                statedatalist.push(manuModel[i].cityName);
              }
              // console.log(statedatalist); 
    $("#inputCity").autocomplete({
            source: statedatalist,
            minLength: 1,
            select: function (event, ui) {
              var index = statedatalist.indexOf(ui.item.value);
              
               stateId = manuModel[index].stateId;
              // console.log("stateID: "+stateId);    
              $("#inputState").val(manuModel[index].mergeDetails);
              cityId = manuModel[index].cityId;
              // console.log("cityID: "+cityId);    
            }
        });
}

function getVariant(){
  var variants = callajaxAsParamData(getVariantList,"");
  var variantdata = variants.data;
  $.each(variantdata, function(i, variant) {
                $('#vehicle').append($('<option/>').attr("value", variant.veriantId).text(variant.variantName));

            });
}

function getCity(){
  var citys = callajaxAsParamData(vwCityDetails,"");
  var citys = citys.data;
$.each(citys, function(i, citys) {
                $('#vehiclecity').append($('<option/>').attr("value", citys.cityId).text(citys.cityName));

            });
}

function getColorlist(){
  var colordata = callajaxAsParamData(getcolorCodeList,"");
  var colors = colordata.data;
$.each(colors, function(i, color) {
                $('#vehiclecolor').append($('<option/>').attr("value", color.id).text(color.colorCodeName));

            });
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
    
    
    // ~~~~~~~~~~~~~~~~~~~~~~~~~~ new Code ~~~~~~~~~~~~~~~~~~~~~~~~~~~
        var client = [];
        getClientList();
           function getClientList(){
            //////
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
                  ctIdd = ctId[index];
                //   $("#clientId").val(ctIdd);
                  // console.log(ctIdd);
                    getClientListById(ctIdd);
                  
                }
            });
          }
          
          
            var clientlist = [];
           function getClientListById(ctIdd){
            clients = callajaxByUrlData(clientById,ctIdd);
            client = clients.data.masterClientEntity;
            clientdata = clients.data.clientCompanyDetails;
            $("#createdDate").val(client.commonFields.createdDt);
            $("#clientId").val(client.clientId);
            $("#approvedCredit").html(client.creditApprovedAmount);
            $("#balanceCredit").html(client.creditBalanceAmount);
            $("#appCreditValDate").html(client.creditApprovalDate);

            var json={
              "clientID": client.clientId,
            }

              $.ajax({
                   url : getExistingQuotes,
                   type: "POST",
                   data:  JSON.stringify(json),
                   dataType:'json',
                   contentType: "application/json",
                    async: false,
                    success: function (result) {
                    var data=result.data;
                    debugger
                    var count = 0; 
                    var blank = '-' 
                    for (var i = 0; i < data.length; i++) {
                        var view =  '<span class="badge badge-success" data-toggle="modal" data-target="#modal-animation-'+ i +'">View</span>';
                        count++;
                        table.row.add([
                            count,
                            view,
                            data[i].quotationId,       
                            data[i].city,       
                            data[i].tenure,       
                            blank,       
                            blank,       
                            blank,       
                            blank,       
                            data[i].exShowroomPrice,       
                            data[i].vehicleDiscount,       
                            blank,
                            data[i].roadTax,      
                            data[i].registrationCharges ,      
                            blank,
                            blank,
                            data[i].accessoriesName,      
                            data[i].netPrice,      
                            data[i].basePrice,     
                            blank,
                            blank,
                            data[i].downPayment,
                            data[i].securityDeposit,
                            blank,
                            blank,
                            data[i].rvType,
                            data[i].rvType,
                            blank,
                            blank,
                            blank,
                            blank,
                            data[i].roadTax,
                            blank,
                            data[i].insuranceCost,
                            blank,
                            blank,
                            blank,
                            blank,
                            blank,
                            blank,
                            blank,
                            blank,
                            blank,
                            blank,
                            data[i].gstCess,
                            blank,
                            blank,
                            blank,
                            blank,
                            blank,
                            blank,
                            blank,
                            blank,
                            blank,
                            blank,
                            blank,
                            blank,
                            blank,
                            blank,
                            blank,
                            blank,
                            data[i].commonFields.status,
                        ]);  

                    $('#modal-body').append('<div class="modal fade" id="modal-animation-'+ i +'" > <div class="modal-dialog modal-dialog-centered modal-xl"> <div class="modal-content animated bounceIn"> <div class="modal-header"> <h5 class="modal-title" style="text-align:center;">View</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div> <div class="modal-body"> <div class="col-lg-12"> <div class="table-responsive"> <table class="table table-bordered hhh"> <thead> <tr> <th scope="col">S No</th> <th scope="col">Quote</th> <th scope="col">Value</th> </tr> </thead> <tbody> <tr> <th scope="row">1</th> <td>Quote Number</td> <td> '+data[i].quotationId+' </td> </tr> <tr> <th scope="row">2</th> <td>Client</td> <td> - </td> </tr> <tr> <th scope="row">3</th> <td>RV %</td> <td></td> </tr> <tr> <th scope="row">4</th> <td>RV Amount</td> <td></td> </tr> <tr> <th scope="row">5</th> <td>Manufacturer</td> <td></td> </tr> <tr> <th scope="row">6</th> <td>Variant</td> <td>-</td> </tr> <tr> <th scope="row">7</th> <td>City of Registration</td> <td> '+ data[i].city +'</td> </tr> <tr> <th scope="row">8</th> <td>Tenure</td> <td> '+ data[i].tenure +' </td> </tr> <tr> <th scope="row">9</th> <td>Contracted Mileage (KMS)</td> <td>-</td> </tr> <tr> <th scope="row">10</th> <td>Ex Showroom Cost</td> <td> '+ data[i].exShowroomPrice +' </td> </tr> <tr> <th scope="row">11</th> <td>Passed Discount</td> <td>-</td> </tr> <tr> <th scope="row">12</th> <td>Net Price</td> <td>'+ data[i].netPrice +'</td> </tr> <tr> <th scope="row">13</th> <td>Base Price</td> <td>'+ data[i].basePrice +'</td> </tr> <tr> <th scope="row">14</th> <td>GST Amount</td> <td>-</td> </tr> <tr> <th scope="row">15</th> <td>Cess Amount</td> <td>-</td> </tr> <tr> <th scope="row">16</th> <td>Road Tax Registration</td> <td>'+ data[i].registrationCharges +'</td> </tr> <tr> <th scope="row">17</th> <td>Road Tax Finance</td> <td>-</td> </tr> <tr> <th scope="row">18</th> <td>Accessories Cost</td> <td>-</td> </tr> <tr> <th scope="row">19</th> <td>Down Payment</td> <td>'+ data[i].downPayment +'</td> </tr> <tr> <th scope="row">20</th> <td>Security Deposit</td> <td>'+ data[i].securityDeposit +'</td> </tr> <tr> <th scope="row">21</th> <td>Repairs And Maintenance</td> <td>-</td> </tr> <tr> <th scope="row">22</th> <td>Tyre Management</td> <td>-</td> </tr> <tr> <th scope="row">23</th> <td>Comprehensive Insurance Cover</td> <td>-</td> </tr> <tr> <th scope="row">24</th> <td>Accident Depreciation Waiver</td> <td>-</td> </tr> <tr> <th scope="row">25</th> <td>Replacement Services</td> <td>-</td> </tr> <tr> <th scope="row">26</th> <td>Avis Assist (24x7 Assistance)</td> <td>-</td> </tr> <tr> <th scope="row">27</th> <td>Pickup Drop Service</td> <td>-</td> </tr> <tr> <th scope="row">28</th> <td>Stay New Plan</td> <td>-</td> </tr> <tr> <th scope="row">29</th> <td>Hydrostatic Insurance</td> <td>-</td> </tr> <tr> <th scope="row">30</th> <td>Total Loss Retention</td> <td>-</td> </tr> <tr> <th scope="row">31</th> <td>Lease Rental Car </td> <td>-</td> </tr> <tr> <th scope="row">32</th> <td>GST on CAR LR</td> <td>-</td> </tr> <tr> <th scope="row">33</th> <td>Cess on Car LR</td> <td>-</td> </tr> <tr> <th scope="row">34</th> <td>Fleet Management Fee </td> <td>-</td> </tr> <tr> <th scope="row">35</th> <td>GST on FMS</td> <td>-</td> </tr> <tr> <th scope="row">36</th> <td>Total Lease Rental </td> <td>-</td> </tr> <tr> <th scope="row">37</th> <td>Excess KM Charge</td> <td>-</td> </tr> </tbody> </table> </div> </div> </div> </div> </div> </div>');
                    }
                    table.columns.adjust().draw();
                    $("tbody #tb2").show();



                   },
                    error: function (jqXHR,textStatus,errorThrown) {
                       alert("Failed. Please try again");
                    }   
               });           
          }


        function getAccessories(){
          var accessories = callajaxAsParamData(accessoriesList,"");
          var accessorie = accessories.data;
          $.each(accessorie, function(i, access) {
            $('#accessoriesList').append($('<option/>').attr("value", access.id).text(access.accessoriesName));
          });
        }

        function getPackage(){
          debugger
          var packages = callajaxAsParamData(getPackageList,"");
          var packages = packages.data;
          // console.log(packages[0].id);
          $('#getPackageId').val(packages[0].id);
          $.each(packages, function(i, package) {
            $('.packageList').append($('<option/>').attr("value", package.id).text(package.packageName));
          });
        }

        $('.packageList').on('change', function(e, data){
            var id = $(this).val();
            $('#getPackageId').val(id);
            $('.packageListAppendArea').html('');
            var serviceListOfPackages = callajaxByUrlData(getPackageListById,id);
            $.each(serviceListOfPackages.data, function(i, serviceListOfPackage) {
                $('.packageListAppendArea').append(' <div class="row mt-1"> <div class="col-md-1"><input type="checkbox" class="form-check-input" checked value="'+ serviceListOfPackage.serviceId +'"> </div> <div class="col-md-7"> <label class="form-check-label">'+ serviceListOfPackage.serviceName +'</label> </div> <div class="col-md-4"> <input type="text" class="form-control" value="'+ serviceListOfPackage.cost +'"> </div> </div>'); 
            }); 
        });

        $('.packageListModal').on('change', function(e, data){
            var id = $(this).val();
            $('#getPackageId').val(id);
            $('.packageListAppendArea').html('');
            var serviceListOfPackages = callajaxByUrlData(getPackageListById,id);
            $.each(serviceListOfPackages.data, function(i, serviceListOfPackage) {
                $('.packageListAppendArea').append(' <div class="row mt-1"> <div class="col-md-1"><input type="checkbox" class="form-check-input serviceId" name="serviceId[]" checked value="'+ serviceListOfPackage.serviceId +'" serviceListId="'+ serviceListOfPackage.serviceId +'" serviceListName="' + serviceListOfPackage.serviceName + '" serviceCost="'+ serviceListOfPackage.cost +'" > </div> <div class="col-md-7"><input type="hidden" class="serviceName" name="serviceName[]" value="'+ serviceListOfPackage.serviceName +'"  /> <label class="form-check-label">'+ serviceListOfPackage.serviceName +'</label> </div> <div class="col-md-4"> <input  type="text" class="form-control serviceCost" name="servicecost[]" value="'+ serviceListOfPackage.cost +'"> </div> </div>'); 
            }); 
        });

        $('#editPackageList').on('click', function(e, data){
            var packageId = $('#getPackageId').val();
            var serviceListOfPackages = callajaxByUrlData(getPackageListById,packageId);
            var packages = callajaxAsParamData(getPackageList,"");
            var packages = packages.data;

            $('.packageListAppendArea').html('');
            $.each(serviceListOfPackages.data, function(i, serviceListOfPackage) { 
              $('.packageListAppendArea').append(' <div class="row mt-1"> <div class="col-md-1"><input type="checkbox" class="form-check-input serviceId" name="serviceId[]" checked value="'+ serviceListOfPackage.serviceId +'" serviceListId="'+ serviceListOfPackage.serviceId +'" serviceListName="' + serviceListOfPackage.serviceName + '" serviceCost="'+ serviceListOfPackage.cost +'" > </div> <div class="col-md-7"><input type="hidden" class="serviceName" name="serviceName[]" value="'+ serviceListOfPackage.serviceName +'"  /> <label class="form-check-label">'+ serviceListOfPackage.serviceName +'</label> </div> <div class="col-md-4"> <input  type="text" class="form-control serviceCost" name="servicecost[]" value="'+ serviceListOfPackage.cost +'"> </div> </div>'); 
            });

            $.each(packages, function(i, package) {
              if(package.id == packageId){ 
                  var selected = 'selected';
              };
              $('.packageListModal').append('<option '+ selected +' value='+ package.id +'>'+ package.packageName +'</option>');
            });
            

            $('#modal-package').modal('show');
  
        });

        $('#accessoriesList').on('change', function(e, data){
            var id = [];
            id = $(this).val();
            var myJSON = JSON.stringify(id);

            $.ajax({
              type: "POST",
              url: getAccessoriesListByids,
              data: myJSON,
              contentType : "application/json; charset=utf-8",
               success: function(datas){
                $('.accessoriesListAppendArea').html('');
                $.each(datas.data, function(i, accessories) {
                  $('.accessoriesListAppendArea').append(' <div class="row mt-1"> <div class="col-md-1"><input type="checkbox" class="form-check-input accessoriesIds" name="id[]" checked value="'+ accessories.id +'" accessoriesIDdata = "'+ accessories.id +'"  accessriescost="'+accessories.accessoriesPrice+ '" accessoriesName="'+ accessories.accessoriesName +'"> </div> <div class="col-md-6"><input type="hidden" class="form-control"  name="accessoriesname[]" value="'+ accessories.accessoriesName +'" /> <label class="form-check-label">'+ accessories.accessoriesName +'</label> </div> <div class="col-md-4"> <input type="text" name="accessriescost[]" class="form-control accessriescost" value="'+ accessories.accessoriesPrice +'"> </div> </div>'); 
                });
               }
            });            
        })


     $('#generate_quotation').on('click', function(e, data){

             var accessroriesId = new Array();
             var accessoriesName = new Array();
             var accessriesCost = new Array();
             var accessoriesList= new Array();
             var serviceId= new Array();
             var serviceName= new Array();
             var serviceCost= new Array();
             var serviceList= new Array();

            $('input[name="id[]"]:checked').each(function() {
                accessroriesId.push($(this).attr('accessoriesIDdata'));
                accessoriesName.push($(this).attr('accessoriesName'));
                accessriesCost.push($(this).attr('accessriescost'));
            });


          for(var i=0;i<accessroriesId.length;i++)
            {

              var accessoriesObj={
              "cost": accessriesCost[i], 
              "id": accessroriesId[i], 
              "name": accessoriesName[i], 
            };
            accessoriesList.push(accessoriesObj);
          }


            $('input[name="serviceId[]"]:checked').each(function() {
                serviceId.push($(this).attr('servicelistid'));
                serviceName.push($(this).attr('serviceListName'));
                serviceCost.push($(this).attr('serviceCost'));
            });

            for(var i=0;i<serviceId.length;i++)
              {

                var servicesObj={
                "cost": serviceCost[i], 
                "id": serviceId[i], 
                "name": serviceName[i], 
              };
              serviceList.push(servicesObj);
            }

             var model = $('#vehicle').val();
             var milleage = $('#milleage').val();
             var city = $('#vehiclecity').val();
             var products = $('#vehicleproduct').val();
             var tenure = $('#tenure').val();
             var color = $('#vehiclecolor').val();
             var downPayment = $('#downPayment').val();
             var securityDeposit = $('#securityDeposit').val();
             var tenure = $('#tenure').val();

             $(".quotationarea").html('');
            

            var json={
                "accessoriesList": accessoriesList,

                "cityId": $('#vehiclecity').val(),
                "clientID": $('#clientId').val(),
                "colorCodeId": $('#vehiclecolor').val(),
                "downPayment": $('#downPayment').val(),
                "goi": $('#goi').val(),
                "mileage": $('#milleage').val(),
                "securityDeposit": $('#securityDeposit').val(),
                "servicesList": serviceList,
                "tenure": $('#tenure').val(),
                "variantId": $('#vehicle').val()
          }

          console.log(json);
            
            
            $.ajax({
                url : getQuote,
                method: "POST",
                data:  JSON.stringify(json),
                dataType:'json',
                contentType: "application/json",
                async: false,
       
              success: function(data) {
          
                var arr=[]; 
                for(let i of data.data)
                {
                   
                    for(let obj in i)
                    {
                        if(obj==="variantDisplayName")
                        {
                        arr.push(i[obj]);
                        }
                    }
                }
                var setView=new Set(arr);
                var i = 1;
                setView=Array.from(setView);
                // console.log(setView);
               
                $.each(data.data, function (index, datas) 
                    { 
                      var view = '<span class="badge badge-success" aria-hidden="true" data-toggle="modal" data-target="#modal-animation-'+ i +'">View</span>';
                    
                      $(".quotationarea").append('<div class="div-table"><div class="table"> <div claiv class="tr"> <div class="td">'+ i +'</div> <div class="td"> '+ view +' </div> <div class="td">'+ datas.variantDisplayName +'</div> <div class="td">'+ datas.cityName +'</div> <div class="td">'+ datas.mileage +'</div> <div class="td">-</div> <div class="td">-</div> <div class="td">'+ datas.gstPercentage +'</div> <div class="td">'+ datas.cessPercentage +'</div> <div class="td">-</div> <div class="td">'+ datas.ex_showroomPrice +'</div> <div class="td">'+ datas.availableDiscount +'</div> <div class="td">-</div> <div class="td">-</div> <div class="td">-</div> <div class="td">'+ datas.roadTaxAndRegistrationAmt +'</div> <div class="td">Renewal Road Tax </div> <div class="td">-</div> <div class="td">'+ datas.netPrice +'</div> <div class="td">'+ datas.basePrice +'</div> <div class="td">'+ datas.gstPrice +'</div> <div class="td">'+ datas.cessPrice +'</div> <div class="td">-</div> <div class="td">-</div> <div class="td">'+ datas.roi +'</div> <div class="td">'+ datas.mf +'</div> <div class="td">'+ datas.systemRv +'</div> <div class="td">'+ datas.rvDeviation +'</div> <div class="td">'+ datas.applicableRv +'</div> <div class="td">'+ datas.rvAmount +'</div> <div class="td">'+ datas.gstOnRvAmount +'</div> <div class="td">'+ datas.rvAmountIncGST +'</div> <div class="td">'+ datas.roadTaxEMI +'</div> <div class="td">-</div> <div class="td">'+ datas.insuranceEmiPerMonth +'</div> <div class="td">'+ datas.servicesCost +'</div><div class="td">'+ datas.accessoriesCost +'</div> <div class="td">'+ datas.tyres +'</div><div class="td">'+ datas.accidentDepreciationWavier +'</div> <div class="td">-</div> <div class="td">-</div> <div class="td">-</div> <div class="td">-</div> <div class="td">-</div> <div class="td">TCS</div> <div class="td">-</div> <div class="td">'+ datas.carEMI +'</div> <div class="td">'+ datas.gstOnCarEMI +'</div> <div class="td">'+ datas.cessOnCarEMI +'</div> <div class="td">'+ datas.totalFMS +'</div> <div class="td">'+ datas.gstOnFMS +'</div> <div class="td">'+ datas.totalLr +'</div> <div class="td">'+ datas.totalGstAmount +'</div> <div class="td">'+ datas.totalGstAmountPerMonth +'</div> <div class="td">'+ datas.totalGstAmountPerYear +'</div> <div class="td">'+ datas.unUtilizedGst +'</div> <div class="td">-</div> <div class="td">'+ datas.diffBetweenUnUtilizedGstAndGstOnRv +'</div> <div class="td">'+ datas.perMonthGstLoss +'</div> <div class="td">Sign Value</div> </div> </div> </div>');
                          $('.headingarea').removeClass('d-none');
                          $(".quotationarea_city").html('');
                          $(".quotationarea_milleage").html('');
                          $(".quotationarea_tenure").html('');
                          $(".quotationarea_products").html('');
                          $('#modal-body').html('');

                    $('#modal-body').append('<div class="modal fade" id="modal-animation-'+ i +'" > <div class="modal-dialog modal-dialog-centered modal-xl"> <div class="modal-content animated bounceIn"> <div class="modal-header"> <h5 class="modal-title" style="text-align:center;">View</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div> <div class="modal-body"> <div class="col-lg-12"> <div class="table-responsive"> <table class="table table-bordered hhh"> <thead> <tr> <th scope="col">S No</th> <th scope="col">Quote</th> <th scope="col">Value</th> </tr> </thead> <tbody> <tr> <th scope="row">1</th> <td>Quote Number</td> <td> - </td> </tr> <tr> <th scope="row">2</th> <td>Client</td> <td> - </td> </tr> <tr> <th scope="row">3</th> <td>RV %</td> <td></td> </tr> <tr> <th scope="row">4</th> <td>RV Amount</td> <td></td> </tr> <tr> <th scope="row">5</th> <td>Manufacturer</td> <td></td> </tr> <tr> <th scope="row">6</th> <td>Variant</td> <td> '+ datas.variantDisplayName +' </td> </tr> <tr> <th scope="row">7</th> <td>City of Registration</td> <td> '+ datas.cityName +'</td> </tr> <tr> <th scope="row">8</th> <td>Tenure</td> <td> - </td> </tr> <tr> <th scope="row">9</th> <td>Contracted Mileage (KMS)</td> <td> '+ datas.mileage +' </td> </tr> <tr> <th scope="row">10</th> <td>Ex Showroom Cost</td> <td> '+ datas.ex_showroomPrice +' </td> </tr> <tr> <th scope="row">11</th> <td>Passed Discount</td> <td>-</td> </tr> <tr> <th scope="row">12</th> <td>Net Price</td> <td>'+ datas.netPrice +'</td> </tr> <tr> <th scope="row">13</th> <td>Base Price</td> <td>'+ datas.basePrice +'</td> </tr> <tr> <th scope="row">14</th> <td>GST Amount</td> <td>'+ datas.gstPrice +'</td> </tr> <tr> <th scope="row">15</th> <td>Cess Amount</td> <td>'+ datas.cessPrice +'</td> </tr> <tr> <th scope="row">16</th> <td>Road Tax Registration</td> <td>'+ datas.roadTaxAndRegistrationAmt +'</td> </tr> <tr> <th scope="row">17</th> <td>Road Tax Finance</td> <td>'+ datas.roadTaxEMI +'</td> </tr> <tr> <th scope="row">18</th> <td>Accessories Cost</td> <td>-</td> </tr> <tr> <th scope="row">19</th> <td>Down Payment</td> <td>'+ $('#downPayment').val() +'</td> </tr> <tr> <th scope="row">20</th> <td>Security Deposit</td> <td>'+ $('#securityDeposit').val() +'</td> </tr> <tr> <th scope="row">21</th> <td>Repairs And Maintenance</td> <td>'+ datas.servicesCost +'</td><td>'+ datas.accessoriesCost +'</td> </tr> <tr> <th scope="row">22</th> <td>Tyre Management</td> <td>'+ datas.tyres +'</td> </tr> <tr> <th scope="row">23</th> <td>Comprehensive Insurance Cover</td> <td>-</td> </tr> <tr> <th scope="row">24</th> <td>Accident Depreciation Waiver</td> <td>'+ datas.accidentDepreciationWavier +'</td> </tr> <tr> <th scope="row">25</th> <td>Replacement Services</td></tr> <tr> <th scope="row">26</th> <td>Avis Assist (24x7 Assistance)</td></tr> <tr> <th scope="row">27</th> <td>Pickup Drop Service</td></tr> <tr> <th scope="row">28</th> <td>Stay New Plan</td> <td>-</td> </tr> <tr> <th scope="row">29</th> <td>Hydrostatic Insurance</td> <td>-</td> </tr> <tr> <th scope="row">30</th> <td>Total Loss Retention</td> <td>-</td> </tr> <tr> <th scope="row">31</th> <td>Lease Rental Car </td> <td>-</td> </tr> <tr> <th scope="row">32</th> <td>GST on CAR LR</td> <td>'+ datas.gstOnCarEMI +'</td> </tr> <tr> <th scope="row">33</th> <td>Cess on Car LR</td> <td>'+ datas.cessOnCarEMI +'</td> </tr> <tr> <th scope="row">34</th> <td>Fleet Management Fee </td> <td>-</td> </tr> <tr> <th scope="row">35</th> <td>GST on FMS</td> <td>'+ datas.gstOnFMS +'</td> </tr> <tr> <th scope="row">36</th> <td>Total Lease Rental </td> <td>-</td> </tr> <tr> <th scope="row">37</th> <td>Excess KM Charge</td> <td>-</td> </tr> </tbody> </table> </div> </div> </div> </div> </div> </div>');

                    i++;

                    });
                
                
              }
            });
           
        });





    // ~~~~~~~~~~~~~~~~~~~~~~~~~~ new Code ~~~~~~~~~~~~~~~~~~~~~~~~~~~
    
    

//getbankMasterTable();
getPackage();
getAccessories();
getCityonkey();
getVariant();
getCity();
getColorlist();