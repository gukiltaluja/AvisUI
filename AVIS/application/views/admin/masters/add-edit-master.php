 <!-- Start wrapper-->
 <style>
     .cares {
         border: 1px solid #888;
         margin-bottom: 20px;
     }

     .cares h3 {
         font-size: 20px;
     }

     .card-txt {
         padding: 20px 20px 20px 20px !important;
         min-height: 280px;
     }

     .select2-container--default.select2-container--focus .select2-selection--multiple {
         border-bottom: 1px solid #ce2827 !important;
         outline: 0;
         border: none;
     }

     .select2-container--default.select2-container--focus .select2-selection--multiple {
         border: solid black 1px;
         outline: 0;
     }

     .select2-container--default .select2-selection--multiple {
         background-color: white;
         border-bottom: 1px solid #aaa !important;
         border-radius: 0px;
         cursor: text;
         border: none;
     }
 </style>
 <div id="wrapper">
     <div class="clearfix"></div>
     <div class="content-wrapper">
         <div class="container-fluid">
             <div class="row pt-2 pb-2">
                 <div class="col-sm-12">
                     <h4 class="page-title">Client Master</h4>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-7">
                     <div class="card">
                         <div class="card-body ffff ssss">
                             <div class="card-header text-uppercase">PRINCIPLE</div>

                             <hr>
                             <form style="padding: 0px 20px 0px 20px;">
                                 <div class="row">
                                     <div class="form-group col-md-9">
                                         <input type="text" class="form-control" id="compNamess" placeholder="Company Name">
                                     </div>
                                     <div class="form-group col-md-3">
                                         <input type="text" class="form-control" id="clientId" placeholder="Client Id">
                                     </div>

                                     <div class="form-group col-md-12">
                                         <div class="row" style="padding-left:13px;">
                                             <div class="card-header text-uppercase col-md-3 background-non">Client Car Policy</div>
                                             <div class="form-check padd mb-2 col-md-3">
                                                 <input type="checkbox" class="form-check-input margin-t" value="TFT" name="policySelection" id="tft">
                                                 <label class="form-check-label margin-t" for="TFT">Tool for Trade</label>
                                             </div>
                                             <div class="form-check padd mb-2 col-md-3">
                                                 <input type="checkbox" class="form-check-input margin-t policySelection" value="PC" name="policySelection" id="pc">
                                                 <label class="form-check-label margin-t policySelection" for="PC">Perk Category</label>
                                             </div>
                                             <div class="form-check padd mb-2 col-md-3">
                                                 <input type="checkbox" class="form-check-input margin-t policySelection" id="ctc" value="CTC" name="policySelection">
                                                 <label class="form-check-label margin-t" for="CTC">CTC</label>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group col-md-4">
                                         <input type="text" class="form-control" id="manno" placeholder="Master Agreement Number">
                                     </div>
                                     <div class="form-group col-md-3">
                                         <div class="form-check padd mb-2">

                                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="clinetRadio">
                                             <label class="form-radio-label" for="radio">Client</label>
                                         </div>
                                     </div>
                                     <div class="form-group col-md-3">
                                         <div class="form-check padd mb-2">

                                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="prospectRadio">
                                             <label class="form-radio-label" for="radio">Prospect</label>
                                         </div>
                                     </div>

                                     <div class="form-group col-md-12">

                                         <div class="row" style="padding-left:13px;">
                                             <div class="card-header text-uppercase col-md-3 background-non">Client Blocking</div>
                                             <div class="form-check padd mb-2 col-md-2">
                                                 <input type="checkbox" class="form-check-input margin-t" id="" value="">
                                             </div>

                                         </div>
                                     </div>

                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-5">
                     <div class="card">
                         <div class="card-header text-uppercase">Credit Status</div>
                         <div class="card-body darpan bottomss">
                             <hr>
                             <div class="row">
                                 <div class="col-md-5" style="border-right: 1px solid #ccc;">
                                     <div class="col-md-12 col-sm-4 col-xs-6 demo-col ">
                                         <div class="radio icheck-danger">
                                             <input type="radio" id="danger2" name="danger" />
                                             <label for="danger2">NOT APPROVED</label>
                                         </div>
                                         <div class="radio icheck-success">
                                             <input type="radio" id="success2" name="danger" />
                                             <label for="success2">APPROVED</label>
                                         </div>
                                         <div class="radio icheck-warning">
                                             <input type="radio" id="warning" name="danger" />
                                             <label for="warning">About to Expire</label>
                                         </div>
                                         <div class="radio icheck-pandding">
                                             <input type="radio" id="pandding" name="danger" />
                                             <label for="pandding">Pending</label>
                                         </div>
                                     </div>
                                 </div>
                                 </hr>
                                 <div class="col-md-7">
                                     <div class="form-group col-md-12" style="margin-bottom: 5px;">
                                         <label for="formGroupExampleInput">Approved Credit <br /> <b><span class="appr text-dark" id="approvedCredit"></span></b><br /><span id="approvedCreditLables"></span></label>
                                         <!--<input type="text" class="form-control" id="formGroupExampleInput" disabled>-->
                                     </div>
                                     <div class="form-group col-md-12" style="margin-bottom: 5px;">
                                         <label for="formGroupExampleInput2">Balance Credit <br /> <b><span class="appr text-dark" id="balanceCredits"></span></b><br /><span id="balanceCreditLable"></span></label>
                                         <!--<input type="text" class="form-control" id="formGroupExampleInput2" disabled>-->
                                     </div>
                                     <div class="form-group col-md-12" style="margin-bottom: 5px;">
                                         <label for="formGroupExampleInput2">APPROVED CREDIT VALIDITY DATE <br /> <b><span class="appr text-dark" id="appCreditValDate"></span></b><br /><span id="balanceCreditvaliditydateLable"></span></label>
                                         <!--<input type="text" class="form-control" id="formGroupExampleInput2" disabled>-->
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!--End Row-->

             <div class="row">

                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-body">
                             <ul class="nav nav-tabs nav-tabs-danger nav-justified top-icon">
                                 <li class="nav-item">
                                     <a class="nav-link active" data-toggle="tab" href="#tabe-17"><span class="hidden-xs">Company Profile </span></a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" data-toggle="tab" href="#tabe-18" id="childAccTab"><span class="hidden-xs">Child Account</span></a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" data-toggle="tab" href="#tabe-19" id="contactDetailsTab"><span class="hidden-xs">Contact Details</span></a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" data-toggle="tab" href="#tabe-20"><span class="hidden-xs">Credit Appraisal</span></a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" data-toggle="tab" href="#tabe-21"><span class="hidden-xs" id="documentUpload">Document Upload</span></a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" data-toggle="tab" href="#tabe-22"><span class="hidden-xs">Product & Services</span></a>
                                 </li>
                                 <!--<li class="nav-item">-->
                                 <!--    <a class="nav-link" data-toggle="tab" href="#tabe-23"><span class="hidden-xs">Inv. Parameters</span></a>-->
                                 <!--</li>-->
                             </ul>

                             <!-- Tab panes -->
                             <div class="tab-content">
                                 <div id="tabe-17" class="container tab-pane active">
                                     <form>

                                         <div class="row">
                                             <div class="form-group col-md-3">
                                                 <input type="text" class="form-control" id="company-profile" placeholder="Company Type">
                                             </div>
                                             <div class="form-group col-md-3">

                                                 <select id="" class="form-control companyGroup">
                                                 </select>
                                             </div>
                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control" id="cinNo" placeholder="CIN Number">
                                             </div>
                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control" id="pannumber" placeholder="Pan Number ">
                                             </div>
                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control" id="ageComp" placeholder="Age Of Company">
                                             </div>
                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control" id="EcoSec" placeholder="Economic Sector">
                                             </div>
                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control" id="leadSource" placeholder="Lead Source">
                                             </div>
                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control" id="clientSale" placeholder="Client Type/ Sale Cycle">
                                             </div>
                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control" id="compTurnI" placeholder="Company Turnover (In India)">
                                             </div>
                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control" id="compTurnG" placeholder="Company Turnover (Globally)">
                                             </div>
                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control" id="legalStatus" placeholder="Legal Status">
                                             </div>
                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control" id="revp" placeholder="Revenue In %">
                                             </div>
                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control" id="assetBase" placeholder="Asset Base (In Million)">
                                             </div>
                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control" id="keyBankers" placeholder="Key Bankers">
                                             </div>
                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control" id="audi" placeholder="Auditors">
                                             </div>
                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control" id="detailsShare" placeholder="Details Of Shareholders">
                                             </div>

                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control" id="fleetSize" placeholder="Fleet Size">
                                             </div>
                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control" id="fleetPot" placeholder="Fleet Potential">
                                             </div>
                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control" id="keyManag" placeholder="Key Management Personnel">
                                             </div>
                                             <div class="form-group col-md-3">
                                                 <input type="text" class="form-control promoters" id="" placeholder="Promoters">
                                             </div>




                                         </div>
                                         <h4 style="padding-top: 20px;">COMPANY REGISTERED ADDRESS</h4>
                                         <div class="row">

                                             <div class="form-group col-md-3">
                                                 <input type="text" class="form-control camRegAdd" id="" placeholder="Address">
                                             </div>
                                             <div class="form-group col-md-3">
                                                 <input type="text" class="form-control camRegAddPin" id="" placeholder="Pin code">
                                             </div>
                                             <div class="form-group col-md-3" style="position:relative">
                                                 <input id="compRegAddc" class="form-control camRegAddc" type="text" name="modelname" placeholder="City">
                                             </div>
                                             <div class="form-group col-md-3">
                                                 <input type="text" class="form-control camRegAdds" id="" placeholder="State" disabled>
                                             </div>
                                             <div class="form-group col-md-3">
                                                 <input type="text" class="form-control camRegAddCo" id="" placeholder="Country">
                                             </div>

                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control camRegAddgstn" id="" placeholder="GSTN">
                                             </div>
                                         </div>
                                         <h4 style="padding-top: 20px;">CORPORATE ADDRESS OF THE COMPANY</h4>
                                         <div class="row">

                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control camCorpAdd " id="" placeholder="Address">
                                             </div>
                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control camCorpAddp" id="" placeholder="Pin code">
                                             </div>
                                             <div class="form-group col-md-3" style="position:relative">
                                                 <input id="corpAddc" class="form-control camCorpAddc" type="text" name="modelname" placeholder="City">
                                             </div>
                                             <div class="form-group col-md-3">
                                                 <input type="text" class="form-control camCorpAdds" id="" placeholder="State" disabled>
                                             </div>
                                             <div class="form-group col-md-3">
                                                 <input type="text" class="form-control camCorpAddCo" id="" placeholder="Country">
                                             </div>

                                             <div class="form-group col-md-3">

                                                 <input type="text" class="form-control camCorpAddgstn" id="" placeholder="GSTN">
                                                 <input type="hidden" class="form-control" id="clientDetailId">
                                             </div>
                                         </div>
                                         <div class="button">
                                             <button type="submit" class="btn btn-primary cancel">CANCEL</button>
                                             <button type="button" class="btn btn-primary save" onclick="addClientCom()">SAVE</button>
                                     </form>
                                 </div>

                             </div>

                             <div id="tabe-18" class="container tab-pane fade">
                                 <div class="accordion" id="accordionExample">
                                     <div class="card">
                                         <div class="" id="headingOne">
                                             <h2 class="mb-0">
                                                 <button class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="box-shadow: none;">
                                                     Child Account #1
                                                 </button>
                                                 <button class="btn btn-success pull-right" type="button" style="box-shadow: none;" id="addChildAccountDetails">
                                                     <i class="fa fa-plus" aria-hidden="true"></i>
                                                 </button>
                                             </h2>
                                         </div>

                                         <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                             <div class="card-body">
                                                 <form class="p-3 childName">
                                                     <div class="row">
                                                         <input type="hidden" name="" id="childAccountId">
                                                         <div class="form-group col-md-3">
                                                             <input type="text" class="form-control childacname" name="childacname" id="" placeholder="Name">
                                                         </div>
                                                         <div class="form-group col-md-3">

                                                             <input type="text" class="form-control childacfunction" name="childacfunction" id="" placeholder="Function">
                                                         </div>
                                                         <div class="form-group col-md-3">

                                                             <input type="text" class="form-control childacemail" name="childacemail" placeholder="Email Id">
                                                         </div>
                                                     </div>
                                                     <h4 style="padding-top: 20px;">INVOICING ADDRESS</h4>
                                                     <div class="row">

                                                         <div class="form-group col-md-3">

                                                             <input type="text" class="form-control childacinvoiceaddress" name="childacinvoiceaddress" placeholder="Address">
                                                         </div>
                                                         <div class="form-group col-md-3">
                                                             <input type="text" class="form-control childacinvoicepincode" name="childacinvoicepincode" id="" placeholder="Pin code">
                                                         </div>
                                                         <div class="form-group col-md-3" style="position:relative">
                                                             <input id="" class="form-control childacinvoicecity" type="text" name="childacinvoicecity" placeholder="City">
                                                             <input class="childacinvoicecityId" name="childacinvoicecityId" type="hidden">
                                                         </div>

                                                         <div class="form-group col-md-3">
                                                             <input type="text" class="form-control childacinvoicestate" name="childacinvoicestate" id="" placeholder="State" disabled>
                                                         </div>

                                                         <div class="form-group col-md-3">
                                                             <input type="text" class="form-control childacinvoicecountry" name="childacinvoicecountry" placeholder="Country">
                                                         </div>

                                                         <div class="form-group col-md-3">

                                                             <input type="text" class="form-control childacinvoicegstn" name="childacinvoicegstn" id="" placeholder="GSTN">
                                                         </div>
                                                     </div>
                                                     <h4 style="padding-top: 20px;">VEHICLE REGISTRATION ADDRESS</h4>
                                                     <div class="row">

                                                         <div class="form-group col-md-3">

                                                             <input type="text" class="form-control childacregisteraddress" name="childacregisteraddress" id="" placeholder="Address">
                                                         </div>
                                                         <div class="form-group col-md-3">

                                                             <input type="text" class="form-control childacregisterpincode" name="childacregisterpincode" placeholder="Pin code">
                                                         </div>
                                                         <div class="form-group col-md-3" style="position:relative">
                                                             <input class="form-control childacregistercity" name="childacregistercity" type="text" name="modelname" placeholder="City">
                                                             <input class="childacregistercityId" name="childacregistercityId" type="hidden">
                                                         </div>

                                                         <div class="form-group col-md-3">
                                                             <input type="text" class="form-control childacregisterstate" name=childacregisterstate placeholder="State" disabled>
                                                         </div>

                                                         <div class="form-group col-md-3">
                                                             <input type="text" class="form-control childacregistercountry" name="childacregistercountry" placeholder="Country">
                                                         </div>

                                                         <div class="form-group col-md-3">
                                                             <input type="text" class="form-control childacregistergstn" name="childacregistergstn" id="" placeholder="GSTN">
                                                         </div>
                                                     </div>

                                                     <h4 style="padding-top: 20px;">INVOICE DISPATCH ADDRESS</h4>
                                                     <div class="row">

                                                         <div class="form-group col-md-3">
                                                             <input type="text" class="form-control childacinvoicedispaddress" name="childacinvoicedispaddress" placeholder="Address">
                                                         </div>
                                                         <div class="form-group col-md-3">
                                                             <input type="text" class="form-control childacinvoicedisppincode" name="childacinvoicedisppincode" id="" placeholder="Pin code">
                                                         </div>
                                                         <div class="form-group col-md-3" style="position:relative">
                                                             <input id="" class="form-control childacinvoicedispcity" type="text" name="childacinvoicedispcity" placeholder="City">
                                                             <input class="childacinvoicedispcityId" name="childacinvoicedispcityId" type="hidden">
                                                         </div>

                                                         <div class="form-group col-md-3">
                                                             <input type="text" class="form-control childacinvoicedispstate" name="childacinvoicedispstate" id="" placeholder="State" disabled>
                                                         </div>

                                                         <div class="form-group col-md-3">
                                                             <input type="text" class="form-control childacinvoicedispcountry" name="childacinvoicedispcountry" id="" placeholder="Country">
                                                         </div>
                                                         <div class="form-group col-md-3">
                                                             <input type="text" class="form-control childacinvoicedispgstn" name="childacinvoicedispgstn" id="" placeholder="GSTN">
                                                         </div>


                                                     </div>

                                                     <h4 style="padding-top: 20px;">INVOICING PARAMETERS</h4>
                                                     <div class="row">
                                                         <div class="form-group col-md-3">
                                                             <input type="text" class="form-control childacinvoiceparameterpayment" name="childacinvoiceparameterpayment" id="" placeholder="Mode Of Payment">
                                                         </div>
                                                         <div class="form-group col-md-3">
                                                             <select class="form-control childacinvoiceparameterinvocecycle" name="childacinvoiceparameterinvocecycle">
                                                                 <option disabled>Select Invocing Cycle</option>
                                                                 <option value="Monthly">Monthly</option>
                                                                 <option value="Quarterly">Quarterly</option>
                                                                 <option value="HalfYearly">Half yearly</option>
                                                                 <option value="Yearly">Yearly</option>
                                                             </select>
                                                         </div>
                                                         <div class="form-group col-md-3">

                                                             <input type="text" class="form-control childacinvoiceparameterinvocecp" name="childacinvoiceparameterinvocecp" id="" placeholder="Credit Period">
                                                         </div>
                                                         <div class="form-group col-md-3">
                                                             <select class="form-control childacinvoiceparameterinvocetype" name="childacinvoiceparameterinvocetype">
                                                                 <option disabled>Select Invoicing Type</option>
                                                                 <option value="pr">Pro Rata</option>
                                                                 <option value="anniversary">Anniversary</option>
                                                             </select>
                                                         </div>
                                                         <div class="form-group col-md-7 d-none" id="invoicearea">
                                                             <div class="row">
                                                                 <div class="col-md-5">
                                                                     <input class="childacinvoiceparameterinvoceadvancebill" name="childacinvoiceparameterinvoceadvancebill" type="radio" value="ADVANCE BILLING" id="advancebilling" />
                                                                     <lable for="advancebilling">Advance Billing</lable>
                                                                     <input class="childacinvoiceparameterinvoceadvancebill" name="childacinvoiceparameterinvoceadvancebill" type="radio" value="ARREARS" id="arrears" />
                                                                     <lable for="arrears">Arrears</lable>
                                                                 </div>

                                                                 <div class="col-md-6">
                                                                     <input class="childacinvoiceparameterinvoceadvancesingleinvoice singleinvoice" name="childacinvoiceparameterinvoceadvancesingleinvoice" type="radio" id="single-invoicing" value="SINGLE INVOICING" />
                                                                     <lable for="single-invoicing">Single Invoicing</lable>
                                                                     <input class="childacinvoiceparameterinvoceadvancesingleinvoice" name="childacinvoiceparameterinvoceadvancesingleinvoice" type="radio" id="consolidated-invoicing" value="CONSOLIDATED INVOICING" />
                                                                     <lable for="consolidated-invoicing">Consolidated Invoicing</lable>
                                                                 </div>
                                                             </div>
                                                         </div>

                                                         <div class="form-group col-md-5">
                                                             <textarea rows="1" class="form-control childacinvoiceparameterinvoceadvanceremark" id="" name="childacinvoiceparameterinvoceadvanceremark" placeholder="Remarks"></textarea>
                                                         </div>

                                                         <div class="form-group col-md-6">
                                                             <button type="submit" class="btn btn-primary cancel">CANCEL</button>
                                                             <button type="button" class="btn btn-primary save" onclick="createChildAccount(this)">SAVE</button>
                                                             <button type="button" class="btn btn-primary update d-none " onclick="updateChildAccount()">Update</button>
                                                         </div>


                                                     </div>


                                                     <!-- <div class="button">
                                               
                                            </div> -->
                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="input_fields_wraps">

                                     </div>
                                 </div>
                                 <table class="table table-bordered table-responsive" id="childAccountTable" style="width: 100%;">
                                     <thead>
                                         <tr>
                                             <th>View</th>
                                             <th>Name</th>
                                             <th>Function</th>
                                             <th>Email</th>
                                             <th>Billing Address</th>
                                             <th>Billing Pincode</th>
                                             <th>Billing City</th>
                                             <th>Billing Country</th>
                                             <th>Billing GSTN</th>
                                             <th>Vehicle Reg Address</th>
                                             <th>Vehicle Reg Pincode</th>
                                             <th>Vehicle Reg City</th>
                                             <th>Vehicle Reg State</th>
                                             <th>Vehicle Reg Country</th>
                                             <th>Vehicle Reg GSTN</th>
                                             <th>Invoice Dispatch Address</th>
                                             <th>Invoice Dispatch Pincode</th>
                                             <th>Invoice Dispatch City</th>
                                             <th>Invoice Dispatch State</th>
                                             <th>Invoice Dispatch Country</th>
                                             <th>Invoice Dispatch GSTN</th>
                                             <th>Mode Of Payment</th>
                                             <th>Invoicing Cycle</th>
                                             <th>Credit Period</th>
                                             <th>Invoicing Type</th>
                                             <th>Sub Invoicing Type1</th>
                                             <th>Sub Invoicing Type2</th>
                                             <th>Remarks</th>
                                             <th>Tools</th>
                                         </tr>

                                     </thead>
                                     <tbody>
                                     </tbody>
                                 </table>
                             </div>
                             <div id="tabe-19" class="container tab-pane fade">
                                 <form id="contactDetailsFormValue">
                                     <input type="hidden" class="form-control" id="contactdetailsId">
                                     <div class="row getlengthofcontactdetails" name="test">
                                         <div class="form-group col-md-2">
                                             <input type="text" class="form-control contactdetailsname" id="" placeholder="Name" name="personName">
                                         </div>
                                         <div class="form-group col-md-2">
                                             <input type="text" class="form-control contactdetailsfunction" id="" placeholder="Function" name="personDesignation">
                                         </div>
                                         <div class="form-group col-md-2">
                                             <input type="text" class="form-control contactdetailsmobile" id="" placeholder="Mobile Number" name="personMobileNo">
                                         </div>
                                         <div class="form-group col-md-2">
                                             <input type="text" class="form-control contactdetailslandline" id="" placeholder="Landline Number" name="landlineNo">
                                         </div>
                                         <div class="form-group col-md-2">
                                             <input type="text" class="form-control contactdetailsemail" id="" placeholder="Email Id" name="personEmailId">
                                         </div>
                                         <div class="form-group col-md-2">
                                             <select id="" class="form-control contactdetailscordinate" name="coordinator">
                                                 <option>Coordinator</option>
                                                 <option>Approver</option>
                                                 <option>User</option>
                                                 <option>Other</option>
                                             </select>
                                         </div>
                                         <div class="form-group col-md-2">
                                             <input type="text" class="form-control contactdetailsresponsibilities" id="" placeholder="Area of Responsibility" name="areaResponsibility">
                                         </div>

                                         <div class="form-group col-md-2">
                                             <input type="hidden" name="clientId" class="clientIddata">
                                         </div>

                                     </div>
                                     <div class="form-group col-md-1">
                                         <button type="button" class="btn btn-success add_field_buttons"> <i class="fa fa-plus" aria-hidden="true"></i> </button>
                                     </div>


                                     <div class="input_fields_wrap">

                                     </div>
                                     <div class="button">
                                         <button type="submit" class="btn btn-primary cancel">CANCEL</button>
                                         <button type="button" class="btn btn-primary save" onclick="createContactDetails()">SAVE</button>
                                         <button type="button" class="btn btn-primary update d-none " onclick="updateContactDetails()">Update</button>
                                     </div>
                                 </form>
                                 <br>
                                 <table class="table table-bordered table-responsive" id="clientDeatilsTable" style="width: 100%;">
                                     <thead>
                                         <tr>
                                             <th>View</th>
                                             <th>Name</th>
                                             <th>Function</th>
                                             <th>Mobile No.</th>
                                             <th>Landline No.</th>
                                             <th>Email</th>
                                             <th>Co-ordinator</th>
                                             <th>Area of Responsibility</th>
                                             <th>Tools</th>
                                         </tr>

                                     </thead>
                                     <tbody>
                                     </tbody>
                                 </table>
                             </div>
                             <div id="tabe-20" class="container tab-pane fade">
                                 <form>
                                     <div class="card-body kkkk">
                                         <h4 style="padding-bottom: 10px;">Cam Profile</h4>
                                         <div class="row">
                                             <input type="hidden" class="form-control" id="masterEntityId">
                                             <div class="form-group col-md-3">
                                                 <input type="text" class="form-control compName" placeholder="Company">
                                             </div>
                                             <div class="form-group col-md-3">
                                                 <input type="text" class="form-control camCin" id="" placeholder="Cin Number">
                                             </div>
                                             <div class="col-md-12">
                                                 <div class="row">
                                                     <div class="col-md-12">
                                                         <h6 class="p-3">Register Address</h6>
                                                     </div>
                                                     <div class="form-group col-md-3">
                                                         <input type="text" class="form-control camRegAdd" id="" placeholder="Address">
                                                     </div>
                                                     <div class="form-group col-md-3">
                                                         <input type="text" class="form-control camRegAddPin" id="" placeholder="Pin code">
                                                     </div>

                                                     <div class="form-group col-md-3">
                                                         <input type="text" class="form-control camRegAdds" id="" placeholder="State" disabled>
                                                     </div>
                                                     <div class="form-group col-md-3">
                                                         <input type="text" class="form-control camRegAddCo" id="" placeholder="Country">
                                                     </div>

                                                     <div class="form-group col-md-3">
                                                         <input type="text" class="form-control camRegAddc" id="" placeholder="City" disabled>

                                                         <input type="hidden" class="form-control" id="camRegAddcID" placeholder="City" disabled>
                                                     </div>
                                                     <div class="form-group col-md-3">
                                                         <input type="text" class="form-control camRegAddgstn" id="" placeholder="GSTN">
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="form-group col-md-12">
                                                 <div class="row">
                                                     <div class="col-md-12">
                                                         <h6 class="p-3">Corporate Address</h6>
                                                     </div>
                                                     <div class="form-group col-md-3">
                                                         <input type="text" class="form-control camCorpAdd" id="" placeholder="Address">
                                                     </div>
                                                     <div class="form-group col-md-3">
                                                         <input type="text" class="form-control camCorpAddp" id="" placeholder="Pin code">
                                                     </div>
                                                     <div class="form-group col-md-3">
                                                         <input type="text" class="form-control camCorpAdds" id="" placeholder="State" disabled>
                                                     </div>
                                                     <div class="form-group col-md-3">
                                                         <input type="text" class="form-control camCorpAddCo" id="" placeholder="Country">
                                                     </div>

                                                     <div class="form-group col-md-3">
                                                         <input type="text" class="form-control camCorpAddc" id="" placeholder="City" disabled>

                                                         <input type="hidden" class="form-control" id="camCorpAddcID" placeholder="City" disabled>
                                                     </div>
                                                     <div class="form-group col-md-3">
                                                         <input type="text" class="form-control camCorpAddgstn" id="" placeholder="GSTN">
                                                     </div>
                                                 </div>
                                             </div>


                                         </div>
                                 </form>
                             </div>
                             <div class="card-body kkkk">
                                 <form>
                                     <div class="row">
                                         <div class="form-group col-md-3">
                                             <input type="text" class="form-control" id="india" placeholder="India">
                                         </div>
                                         <div class="form-group col-md-3">
                                             <input type="text" class="form-control" id="global" placeholder="Global">
                                         </div>
                                         <div class="form-group col-md-3">
                                             <input type="text" class="form-control promoters" id="" placeholder="Promoters">
                                         </div>
                                         <div class="form-group col-md-3">
                                             <input type="text" class="form-control" id="auditors" placeholder="Auditors">
                                         </div>
                                         <div class="form-group col-md-3">
                                             <input type="text" class="form-control" id="camBankers" placeholder="Bankers">
                                         </div>

                                     </div>
                                 </form>
                             </div>
                             <div class="card-body kkkk">
                                 <form>
                                     <div class="row">
                                         <div class="form-group col-md-3">
                                             <input type="text" class="form-control" id="residualValue" placeholder="Residual Value">
                                         </div>
                                         <div class="form-group col-md-3">
                                             <input type="text" class="form-control" id="tenuredata" placeholder="Tenure">
                                         </div>
                                         <div class="form-group col-md-3">
                                             <select class="form-control packageList" id=""></select>
                                         </div>
                                         <div class="form-group col-md-3">
                                             <input type="text" class="form-control" id="cap" placeholder="Client Annual Potential">
                                         </div>
                                         <div class="form-group col-md-3">
                                             <input type="text" class="form-control" id="ctp" placeholder="Client Total Potential">
                                         </div>
                                         <div class="form-group col-md-3">
                                             <input type="text" class="form-control" id="reAmount" placeholder="Requested Exposure: Amount (In Lacs)">
                                         </div>
                                         <div class="form-group col-md-3">
                                             <input type="text" class="form-control" id="camReqBy" placeholder="Cam Requested By">
                                         </div>
                                         <div class="form-group col-md-3">
                                             <input type="text" class="form-control" id="dor" placeholder="Date of Request">
                                         </div>
                                     </div>
                                 </form>
                             </div>
                             <h4 style="padding-top: 20px;">Appraisal Information</h4>
                             <div class="row">

                                 <div class="form-group col-md-3">
                                    <select id="" class="form-control companyGroup">
                                    </select>
                                 </div>
                                 <div class="form-group col-md-3">
                                     <input type="text" class="form-control camCin" id="" placeholder="Cin Number">
                                 </div>
                                 <div class="form-group col-md-3">
                                     <input type="text" class="form-control" id="apprClientcsd" placeholder="Credit Submission Date by Credit Team">
                                 </div>


                                 <div class="form-group col-md-3">
                                     <input type="text" class="form-control" id="apprClientcad" placeholder="Credit Apporval Date">
                                 </div>
                                 <div class="form-group col-md-3">

                                     <input type="text" class="form-control" id="apprClientcamval" placeholder="CAM Validity">
                                 </div>
                                 <div class="form-group col-md-3">
                                     <input type="text" class="form-control" id="apprClientcamrevd" placeholder="CAM Review date">
                                 </div>
                                 <div class="form-group col-md-3">
                                     <input type="text" class="form-control" id="apprClientcla" placeholder="Credit Limit Approved">
                                 </div>
                                 <div class="form-group col-md-3">
                                     <input type="text" class="form-control" id="apprClientcmu" placeholder="Credit Amount Used">
                                 </div>
                                 <div class="form-group col-md-3">
                                     <input type="text" class="form-control" id="apprClientdp" placeholder="Down Payment">
                                 </div>
                                 <div class="form-group col-md-3">

                                     <input type="text" class="form-control" id="apprClientsd" placeholder="Security Deposit">
                                 </div>
                                 <div class="form-group col-md-3">

                                     <input type="text" class="form-control" id="apprClientmf" placeholder="Management Fee">
                                 </div>
                                 <div class="form-group col-md-3">
                                     <input type="text" class="form-control" id="apprClientbc" placeholder="Balance Credit">
                                 </div>
                                 <div class="form-group col-md-3">
                                     <input type="text" class="form-control" id="apprClientcpm" placeholder="Credit Period Month">
                                 </div>
                                 <div class="form-group col-md-3">
                                     <input type="text" class="form-control" id="apprClientacvd" placeholder="Approved Credit Validity Date">
                                 </div>
                                 <div class="form-group col-md-3">
                                     <input type="text" class="form-control" id="creditAproovedChnageRamark" placeholder="Remark">
                                 </div>
                                 <br>
                                 <br>
                                 <br>
                                 <table id="clientTab" class="table table-bordered">
                                     <thead>
                                         <tr style="text-align: center;">
                                             <th>Name of Client</th>
                                             <th colspan="3">In Million</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr style="text-align: center;">
                                             <input type="hidden" id="id0">
                                             <input type="hidden" id="id1">
                                             <input type="hidden" id="id2">
                                             <td></td>
                                             <td style="font-size: 12px;"><input type="text" class="form-control" id="Fy0" placeholder="Financial Year"></td>
                                             <td style="font-size: 12px;"><input type="text" class="form-control" id="Fy1" placeholder="Financial Year"></td>
                                             <td style="font-size: 12px;"><input type="text" class="form-control" id="Fy2" placeholder="Financial Year"></td>
                                         </tr>
                                         <tr style="text-align: center; ">
                                             <th style="text-align: left; font-size: 12px; width: 152px;">Sales</th>
                                             <td style="font-size: 12px; width: 200px;"> <input type="text" class="form-control" id="salesFy0"></td>
                                             <td style="font-size: 12px;"><input type="text" class="form-control" id="salesFy1"></td>
                                             <td style="font-size: 12px;"><input type="text" class="form-control" id="salesFy2"></td>
                                         </tr>
                                         <tr style="text-align: center;">
                                             <th style="text-align: left; font-size: 12px; width: 152px;">PBT</th>
                                             <td style="font-size: 12px;"><input type="text" class="form-control" id="pbtFy0"></td>
                                             <td style="font-size: 12px;"><input type="text" class="form-control" id="pbtFy1"></td>
                                             <td style="font-size: 12px;"><input type="text" class="form-control" id="pbtFy2"></td>
                                         </tr>
                                         <tr style="text-align: center;">
                                             <th style="text-align: left; font-size: 12px; width: 152px;">Margin %</th>
                                             <td style="font-size: 12px;"><input type="text" class="form-control" id="margin0"></td>
                                             <td style="font-size: 12px;"><input type="text" class="form-control" id="margin1"></td>
                                             <td style="font-size: 12px;"><input type="text" class="form-control" id="margin2"></td>

                                         </tr>
                                         <tr style="text-align: center;">
                                             <th style="text-align: left; font-size: 12px; width: 152px;">Growth</th>
                                             <td style="font-size: 12px;"><input type="text" class="form-control" id="growth0"></td>
                                             <td style="font-size: 12px;"><input type="text" class="form-control" id="growth1"></td>
                                             <td style="font-size: 12px;"><input type="text" class="form-control" id="growth2"></td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                             <div class="row" style="margin-top:20px;">

                                 <div class="input-group mb-3 col-md-3">
                                     <label class="col-form-label">Email Attachment</label>
                                     <input type='file' onchange="readURL(this);" id="emailAtt" />
                                     <img id="blah" src="assets/images/img_avatar.png" alt="your image" style="width: 100%;">
                                 </div>

                             </div>
                             <div class="button">
                                 <button type="button" onclick="acceptCamRequest();" class="btn btn-primary save">ACCEPT</button>
                                 <button type="button" onclick="rejectCamRequest();" class="btn btn-primary cancel">REJECT</button>
                                 <button type="button" onclick="discussionCamRequest();" class="btn btn-primary DISCUSSION">DISCUSSION</button>
                             </div>

                             </form>
                         </div>
                         <div id="tabe-21" class="container tab-pane fade">
                             <div id="appendviewdata"></div>
                             <form class="fileUploadForm" enctype="multipart/form-data">
                                 <div class="row">
                                     <div class="input-group mt-3 mb-3 col-md-3 documentNames">
                                         <input type="text" class="form-control document_name" id="document_name" name="name" placeholder="Document Name">
                                     </div>
                                     <div class="input-group mb-3 col-md-3">
                                         <label class="col-form-label"></label>
                                         <input type='file' id="" name="file" />
                                     </div>
                                     <div class="mb-3 col-md-3 mt-4">
                                         <button type="submit" class="btn btn-success" onclick="fire_ajax_submit(this)" id=""> Save </button>
                                     </div>
                                     <div class="mb-3 col-md-3 mt-4 pull-right text-right">
                                         <button type="button" class="btn btn-success add_document_button"> <i class="fa fa-plus" aria-hidden="true"></i> </button>
                                     </div>
                                 </div>
                             </form>

                             <div class="document_fields_wrap"></div>
                         </div>
                         <div id="tabe-22" class="container tab-pane fade">
                             <form>
                                 <div class="row">
                                     <div class="col-md-4">
                                         <div class="cares">
                                             <div class="card-header text-uppercase">Credit Conditions</div>
                                             <div class="card-txt">
                                                 <form>
                                                     <div class="form-check form-check-inline col-md-3">
                                                         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="NACH">
                                                         <label class="form-check-label" for="inlineRadio1">NACH </label>
                                                     </div>
                                                     <div class="form-check form-check-inline col-md-3">
                                                         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="PDC">
                                                         <label class="form-check-label" for="inlineRadio2">PDC</label>
                                                     </div>
                                                     <div class="form-check form-check-inline col-md-3">
                                                         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="REGULAR">
                                                         <label class="form-check-label" for="inlineRadio3">Regular </label>
                                                     </div>
                                                     <div class="form-group col-md-12">
                                                         <label for="inputName4">Deposit</label>
                                                         <input type="Name" class="form-control" id="depositeCC" placeholder="(total amount or rule of deposit)">
                                                     </div>
                                                     <div class="form-group col-md-12">
                                                         <label for="inputName4">Credit Period</label>
                                                         <input type="Name" class="form-control" id="creditPeriod" placeholder="days determines Advance or Arear pricing">
                                                     </div>
                                                     <div class="form-group col-md-12">
                                                         <label for="inputName4">Restriction comments</label>
                                                         <input type="Name" class="form-control" id="restrictionComments" placeholder="Restriction comments">
                                                     </div>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-2">
                                         <div class="cares">
                                             <div class="card-header text-uppercase">Product</div>
                                             <div class="card-txt">
                                                 <form>
                                                     <div class="form-check form-check-inline col-md-12">
                                                         <input class="form-check-input" type="checkbox" name="leaseReturned" value="LEASE" id="leasecheck">
                                                         <label class="form-check-label" for="leasep">Lease</label>
                                                     </div>
                                                     <div class="form-check form-check-inline col-md-12">
                                                         <input class="form-check-input" type="checkbox" id="flexi12" value="FLEXI12">
                                                         <label class="form-check-label" for="flexi12">Flexi 12</label>
                                                     </div>
                                                     <div class="form-check form-check-inline col-md-12">
                                                         <input class="form-check-input" type="checkbox" id="care" value="CARE">
                                                         <label class="form-check-label" for="care">Care</label>
                                                     </div>
                                                     <div class="d-none" id="appendTo">
                                                         <div class="form-check form-check-inline col-md-12">
                                                             <input class="form-check-input" type="radio" name="subleaseReturned" id="subnewp" value="NEW">
                                                             <label class="form-check-label" for="subnewp">New</label>
                                                         </div>
                                                         <div class="form-check form-check-inline col-md-12">
                                                             <input class="form-check-input" type="radio" name="subleaseReturned" id="subslb" value="SLB">
                                                             <label class="form-check-label" for="subslb">SLB</label>
                                                         </div>
                                                         <div class="form-check form-check-inline col-md-12">
                                                             <input class="form-check-input" type="radio" name="subleaseReturned" id="subleaseReturned" value="LEASE RETURNED">
                                                             <label class="form-check-label" for="subleaseReturned">Lease Returned</label>
                                                         </div>
                                                     </div>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="cares">
                                             <div class="card-header text-uppercase">RV Type</div>
                                             <div class="card-txt">
                                                 <form>
                                                     <div class="form-check form-check-inline col-md-3">
                                                         <input class="form-check-input" type="checkbox" id="fmrv" value="FMRV">
                                                         <label class="form-check-label" for="fmrv">FMRV</label>
                                                     </div>
                                                     <div class="form-check form-check-inline col-md-3">
                                                         <input class="form-check-input" type="checkbox" id="vrv" value="VRV">
                                                         <label class="form-check-label" for="vrv">VRV</label>
                                                     </div>
                                                     <div class="form-check form-check-inline col-md-3">
                                                         <input class="form-check-input" type="checkbox" id="crvRvType" value="CRV">
                                                         <label class="form-check-label" for="crv">CRV</label>
                                                     </div>
                                                     <div id="financialYearRVType" class="row d-none">
                                                         <div class="form-group col-md-6">
                                                             <label for="inputName4">Yr 1</label>
                                                             <input type="text" class="form-control" id="rvTYpeFY1" placeholder="Yr 1">
                                                         </div>
                                                         <div class="form-group col-md-6">
                                                             <label for="inputName4">Yr 2</label>
                                                             <input type="text" class="form-control" id="rvTYpeFY2" placeholder="Yr 2">
                                                         </div>
                                                         <div class="form-group col-md-6">
                                                             <label for="inputName4">Yr 3</label>
                                                             <input type="text" class="form-control" id="rvTYpeFY3" placeholder="Yr 3">
                                                         </div>
                                                         <div class="form-group col-md-6">
                                                             <label for="inputName4">Yr 4</label>
                                                             <input type="text" class="form-control" id="rvTYpeFY4" placeholder="Yr 4">
                                                         </div>
                                                         <div class="form-group col-md-6">
                                                             <label for="inputName4">Yr 5</label>
                                                             <input type="text" class="form-control" id="rvTYpeFY5" placeholder="Yr 5">
                                                         </div>
                                                     </div>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-2">
                                         <div class="cares">
                                             <div class="card-header text-uppercase">RV% to be applied on </div>
                                             <div class="card-txt">
                                                 <form>
                                                     <div class="form-check form-check-inline col-md-12">
                                                         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                         <label class="form-check-label" for="inlineCheckbox1">Ex S/r</label>
                                                     </div>
                                                     <div class="form-check form-check-inline col-md-12">
                                                         <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                         <label class="form-check-label" for="inlineCheckbox2">Discount</label>
                                                     </div>
                                                     <div class="form-check form-check-inline col-md-12">
                                                         <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                                         <label class="form-check-label" for="inlineCheckbox3">BP</label>
                                                     </div>
                                                     <div class="form-check form-check-inline col-md-12">
                                                         <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option4">
                                                         <label class="form-check-label" for="inlineCheckbox4">RT</label>
                                                     </div>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-12">
                                         <div class="cares">
                                             <div class="card-header text-uppercase">MLA points</div>
                                             <div class="card-txt">
                                                 <form>
                                                     <div class="row">
                                                         <div class="form-group col-md-4">
                                                             <label for="inputName4">FC Charges</label>
                                                             <input type="Name" class="form-control" id="fcCharges" placeholder="FC Charges">
                                                         </div>
                                                         <div class="form-group col-md-4">
                                                             <label for="inputName4">Discounting</label>
                                                             <input type="Name" class="form-control" id="discounting" placeholder="Discounting">
                                                         </div>
                                                         <div class="form-group col-md-4">
                                                             <label for="inputName4">Interest rate change conditions</label>
                                                             <input type="Name" class="form-control" id="interestRate" placeholder="Interest rate change conditions">
                                                         </div>
                                                         <div class="form-group col-md-4">
                                                             <label for="inputName4">Termination Rule</label>
                                                             <input type="Name" class="form-control" id="terminationRule" placeholder="Termination Rule">
                                                         </div>
                                                         <div class="form-group col-md-4">
                                                             <label for="inputName4">Delayed interest</label>
                                                             <input type="Name" class="form-control" id="delayedInterest" placeholder="Delayed interest">
                                                         </div>
                                                         <div class="form-group col-md-4">
                                                             <label for="inputName4">Off lease car sale</label>
                                                             <input type="Name" class="form-control" id="olcs" placeholder="off lease car sale">
                                                         </div>
                                                         <div class="form-group col-md-4">
                                                             <label for="inputName4">Total Loss termination date rule</label>
                                                             <input type="Name" class="form-control" id="tltdr" placeholder="Total Loss termination date rule">
                                                         </div>
                                                         <div class="form-group col-md-4">
                                                             <label for="inputName4">Theft termination date rule</label>
                                                             <input type="Name" class="form-control" id="ttdr" placeholder="Theft termination date rule">
                                                         </div>
                                                     </div>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-12">
                                        <div class="cares">
                                        <div class="card-header text-uppercase">Fleet Type</div>
                                        <div class="form-group col-md-12">
                                             <div class="row" style="padding-left:13px;">
                                                 <div class="card-header text-uppercase col-md-3 background-non">Client Car Policy</div>
                                                 <div class="form-check padd mb-2 col-md-3">
                                                     <input type="checkbox" class="form-check-input margin-t" value="TFT" name="" id="fleetTypeTft">
                                                     <label class="form-check-label margin-t" for="TFT">TFT</label>
                                                 </div>
                                                 <div class="form-check padd mb-2 col-md-3">
                                                     <input type="checkbox" class="form-check-input margin-t" value="PC" name="" id="FleetTypePC">
                                                     <label class="form-check-label margin-t policySelection" for="PC">Perk</label>
                                                 </div>
                                                 <div class="form-check padd mb-2 col-md-3">
                                                     <input type="checkbox" class="form-check-input margin-t" id="FleetTypeCTC" value="CTC" name="">
                                                     <label class="form-check-label margin-t" for="CTC">CTC</label>
                                                 </div>
                                             </div>
                                        </div>
                                             <div class="card-txt" style="min-height: 0px;">
                                                 <form>
                                                    <div id="fleetTypeTFTshow" class="d-none">
                                                    <h4 style="padding-top: 20px;">TFT</h4>
                                                         <div class="row">
                                                             <div class="form-group col-md-3">
                                                                 <label for="inputName4">Registration Type</label>
                                                                 <select id="regTypeTFT" class="form-control">
                                                                    
                                                                 </select>
                                                             </div>
                                                             <div class="form-group col-md-3">
                                                                 <label for="inputName4">Registration charges</label>
                                                                 <select id="regChargesTFT" class="form-control">
                                                                   
                                                                 </select>
                                                             </div>
                                                             <div class="form-group col-md-3">
                                                                 <label>Tenure</label>
                                                                 <select class="form-control multiple-select" multiple="multiple" id="tenureTFT" style="border:none; border-bottom: 1px solid #888;">
                                                                     <option value="12">1 yr</option>
                                                                     <option value="24">2 yr</option>
                                                                     <option value="36">3 yr</option>
                                                                     <option value="48">4 yr</option>
                                                                     <option value="60">5 yr</option>
                                                                 </select>
                                                             </div>
                                                             <div class="form-group col-md-3">
                                                                 <label>Mileage</label>
                                                                 <select class="form-control multiple-select" multiple="multiple" id="milleageTFT" style="border:none; border-bottom: 1px solid #888;">
                                                                 </select>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div id="fleetTypePCshow" class="d-none">
                                                        <h4 style="padding-top: 20px;">Perk</h4>
                                                         <div class="row">
                                                     
                                                         <div class="form-group col-md-3">
                                                             <label for="inputName4">Registration Type</label>
                                                             <select id="regTypePC" class="form-control">
                                                                <option>Third Party </option>
                                                                <option>Lesse</option>
                                                             </select>
                                                         </div>
                                                         <div class="form-group col-md-3">
                                                             <label for="regChargesPC">Registration charges</label>
                                                             <select id="regChargesPC" class="form-control">
                                                                 <option>Financed</option>
                                                                 <option>Reimbursed</option>
                                                                 <option>Direct</option>
                                                             </select>
                                                         </div>
                                                         <div class="form-group col-md-3">
                                                             <label>Tenure</label>
                                                             <select class="form-control multiple-select" multiple="multiple" id="tenurePC" style="border:none; border-bottom: 1px solid #888;">
                                                                 <option value="12">1 yr</option>
                                                                 <option value="24">2 yr</option>
                                                                 <option value="36">3 yr</option>
                                                                 <option value="48">4 yr</option>
                                                                 <option value="60">5 yr</option>
                                                             </select>
                                                         </div>
                                                         <div class="form-group col-md-3">
                                                             <label>Mileage</label>
                                                             <select class="form-control multiple-select" multiple="multiple" id="milleagePC" style="border:none; border-bottom: 1px solid #888;">
                                                                 <option value="1000">1000</option>
                                                                 <option value="2000">2000</option>
                                                                 <option value="3000">3000</option>
                                                                 <option value="4000">4000</option>
                                                                 <option value="5000">5000</option>
                                                             </select>
                                                         </div>
                                                     </div>
                                                     </div>
                                                    <div id="fleetTypeCTCshow" class="d-none">   
                                                     <h4 style="padding-top: 20px;">CTC</h4>
                                                     <div class="row">
                                                         <div class="form-group col-md-3">
                                                             <label for="inputName4">Registration Type</label>
                                                             <select id="regTypeCTC" class="form-control">
                                                                 <option>Third Party </option>
                                                                <option>Lesse</option>
                                                             </select>
                                                         </div>
                                                         <div class="form-group col-md-3">
                                                             <label for="inputName4">Registration charges</label>
                                                             <select id="regChargesCTC" class="form-control">
                                                                 <option>Financed</option>
                                                                 <option>Reimbursed</option>
                                                                 <option>Direct</option>
                                                             </select>
                                                         </div>
                                                         <div class="form-group col-md-3">
                                                             <label>Tenure</label>
                                                             <select class="form-control multiple-select" multiple="multiple" id="tenureCTC" style="border:none; border-bottom: 1px solid #888;">
                                                                 <option value="12">1 yr</option>
                                                                 <option value="24">2 yr</option>
                                                                 <option value="36">3 yr</option>
                                                                 <option value="48">4 yr</option>
                                                                 <option value="60">5 yr</option>
                                                             </select>
                                                         </div>
                                                         <div class="form-group col-md-3">
                                                             <label>Mileage</label>
                                                             <select class="form-control multiple-select" multiple="multiple" id="milleageCTC" style="border:none; border-bottom: 1px solid #888;">
                                                                 <option value="1000">1000</option>
                                                                 <option value="2000">2000</option>
                                                                 <option value="3000">3000</option>
                                                                 <option value="4000">4000</option>
                                                                 <option value="5000">5000</option>
                                                             </select>
                                                         </div>
                                                     </div>
                                                      </div>

                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                    <div class="col-md-6">
                                         <div class="cares">
                                             <div class="card-header text-uppercase">Accessories</div>
                                             <div class="card-txt">
                                                 <form>
                                                     <div class="row">
                                                         <div class="form-group col-md-6">
                                                             <label>Policy Type</label>
                                                         <input type="Name" class="form-control" id="accTFT" value="TFT" readonly="true">
                                                         </div>
                                                         <div class="form-group col-md-6">
                                                             <label>Accessories</label>
                                                             <select class="form-control multiple-select accessoriesList" multiple="multiple" style="border:none; border-bottom: 1px solid #888;" id="accessoriesTFT">
                                                             </select>
                                                         </div>

                                                         <div class="form-group col-md-6">
                                                             <label></label>
                                                             <input type="Name" class="form-control" id="accPC" value="PC" readonly="true">
                                                         </div>
                                                         <div class="form-group col-md-6">
                                                             <label></label>
                                                             <select class="form-control multiple-select accessoriesList" multiple="multiple" style="border:none; border-bottom: 1px solid #888;" id="accessoriesPC">
                                                             </select>
                                                         </div>

                                                         <div class="form-group col-md-6">
                                                             <label></label>
                                                             <input type="Name" class="form-control" id="accCTC" value="CTC" readonly="true">
                                                         </div>
                                                         <div class="form-group col-md-6">
                                                             <label></label>
                                                             <select class="form-control multiple-select accessoriesList" multiple="multiple" style="border:none; border-bottom: 1px solid #888;" id="accessoriesCTC">
                                                             </select>
                                                         </div>
                                                         <div class="form-group col-md-6">
                                                             <label></label>
                                                             <input type="Name" class="form-control" id="accAll" value="All">
                                                         </div>
                                                         <div class="form-group col-md-6">
                                                             <label></label>
                                                             <select class="form-control multiple-select accessoriesList" multiple="multiple" style="border:none; border-bottom: 1px solid #888;" id="accessoriesAll">
                                                             </select>
                                                         </div>
                                                     </div>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="cares">
                                             <div class="card-header text-uppercase">Services</div>
                                             <div class="card-txt">
                                                 <form>
                                                     <div class="row">
                                                         <div class="form-group col-md-4">
                                                             <label>Policy Type</label>
                                                             <input type="Name" class="form-control" id="serTFT" value="TFT" readonly="true">
                                                         </div>
                                                         <div class="form-group col-md-4">
                                                             <label>Package Name</label>
                                                             <select class="form-control packageLists" style="border:none; border-bottom: 1px solid #888;" id="packTFT">
                                                                
                                                             </select>
                                                         </div>
                                                         <div class="form-group col-md-4">
                                                             <label>Services</label>
                                                             <select class="form-control multiple-select serviceList" multiple="multiple" style="border:none; border-bottom: 1px solid #888;" id="serviceTFT">
                                
                                                             </select>
                                                         </div>
                                                         <div class="form-group col-md-4">
                                                             <label></label>

                                                             <input type="Name" class="form-control" id="serPC" value="PC" readonly="true">
                                                         </div>
                                                         <div class="form-group col-md-4">
                                                             <label></label>
                                                             <select class="form-control packageLists"style="border:none; border-bottom: 1px solid #888;" id="packPC">
                                                             </select>
                                                         </div>
                                                         <div class="form-group col-md-4">
                                                             <label></label>
                                                             <select class="form-control multiple-select serviceList" multiple="multiple" style="border:none; border-bottom: 1px solid #888;" id="servicePC">
                                                               
                                                             </select>
                                                         </div>
                                                         <div class="form-group col-md-4">
                                                             <label></label>
                                                             <input type="Name" class="form-control" id="serCTC" value="CTC" readonly="true">
                                                         </div>
                                                         <div class="form-group col-md-4">
                                                             <label></label>
                                                             <select class="form-control packageLists" style="border:none; border-bottom: 1px solid #888;" id="packCTC">
                                                             </select>
                                                         </div>
                                                         <div class="form-group col-md-4">
                                                             <label></label>
                                                             <select class="form-control multiple-select serviceList" multiple="multiple" style="border:none; border-bottom: 1px solid #888;" id="serviceCTC">
                                                                
                                                             </select>
                                                         </div>

                                                     </div>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                 <!-- </div> -->
                                 </div>
                                 <br>
                                 <div class="button">
                                     <button type="submit" class="btn btn-primary cancel">CANCEL</button>
                                     <button type="submit" class="btn btn-primary save">SAVE</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--End Row-->


     <!--End Dashboard Content-->
     <!--start overlay-->
     <div class="overlay toggle-menu"></div>
     <!--end overlay-->
 </div>
 <!-- End container-fluid-->

 </div>
 <!--End content-wrapper-->
 <!--Start Back To Top Button-->
 <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
 <!--End Back To Top Button-->

 </div>
 <!--End wrapper