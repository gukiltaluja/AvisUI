 <style>
     ul.sg-data-listone {
         display: inline-block !important;
         padding: 0;
         border: 1px solid #111;
         border-bottom: none;
     }

     ul.sg-data-listone:last-child {
         border-bottom: 1px solid;
         border-top: none;
     }

     ul {
         padding-inline-start: 2px;
         margin-bottom: 0px;
     }

     ul.sg-data-listone li {
         display: flex;
         justify-content: center;
         align-items: center;
         /*border: 1px solid;*/
     }

     ul.sg-data-listone li p {
         padding: 0px 5px;
         margin-top: .65rem;
         margin: 0px;
         font-size: 12px;
     }

     ul.sg-data-listone li:last-child,
     ul.sg-data-listtwo li:last-child,
     ul.sg-data-listthree li:last-child,
     ul.sg-data-listfour li:last-child,
     ul.sg-data-listfive li:last-child,
     ul.sg-data-listsix li:last-child {
         border-bottom: none !important;
         text-align: center;
         color: #111;
         font-weight: 500;
         letter-spacing: 1px;
     }

     ul.sg-data-listone li p {
         width: 187px !important;
     }

     .table {
         display: table;
         border-collapse: collapse;

     }

     /*.div-table .table .tr {
display: table-row;
    border: 1px solid #ddd;           
    }*/
     /*.div-table .table .tr:first-child {
        font-weight:bold;
      border-bottom:2px solid #ddd;
      }*/
     /*.div-table .table .tr:nth-child(even) {
      background-color:#F9F9F9;
    }*/

     .div-table .table .tr .td {
         display: table-cell;
         padding: 8px;
         min-width: 260px;
         text-align: center;
         border-color: #111;
         border: 1px solid #111;
         border-bottom: 1px solid #111;
         border-top: 0px solid #111;
         height: 0px;
         line-height: 16px;
         font-size: 13px;
         font-weight: 400;
         text-transform: capitalize;

     }

     .div-table .table .tr .td p {
         margin-bottom: 0px;
         text-align: center;
         padding: 4px 0px;
         text-transform: uppercase;
         font-size: 15px;
     }

     .sg-td {
         vertical-align: middle;
     }

     .sg-main-table-head .div-table .table .tr {
         background-color: #ce2827;
         color: #fff;
     }

     .sg-main-table-head .div-table .table .tr .td {
         display: table-cell;
         padding: 8px;
         min-width: 260px;
         text-align: center;
         border-color: #111;
         border: 1px solid #111;
         border-bottom: 0px solid #111;
         height: 0px;
         line-height: 16px;
         font-size: 13px;
         font-weight: 400;
         text-transform: capitalize;
     }

     /*.div-table .table .tr {*/
     /*      background-color: #ce2827;*/
     /*      color: #fff;*/
     /*  }*/
     /* Not necessary for table styling */
     .div-table,
     .table-tag {
         float: left;
         margin: 0em;

     }

     .div-table .title {
         text-align: center;
         padding-bottom: .5em;
     }

     .main-table-box-row {
         overflow-x: scroll;

     }


     /*********************/

     .select2-container--default .select2-selection--multiple {
         background-color: white;
         border-bottom: 1px solid #aaa !important;
         border-radius: 0px;
         cursor: text;
         border: none;
     }

     .select2-container--default.select2-container--focus .select2-selection--multiple {
         border-bottom: 1px solid #ce2827 !important;
         outline: 0;
         border: none;
     }

     .select2-container--default .select2-selection--multiple .select2-selection__choice {
         background-color: #ce2827;
         border: 1px solid #ce2827;
         border-radius: 4px;
         cursor: default;
         float: left;
         margin-right: 5px;
         margin-top: 5px;
         padding: 0 5px;
         color: #fff;
     }

     .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
         color: #fff;
         cursor: pointer;
         display: inline-block;
         font-weight: bold;
         margin-right: 2px;
     }
     .Details-client {
    margin-right: -10px;
    margin-left: -10px;
}
 </style>
 <!-- Start wrapper-->
 <div id="wrapper">


     <div class="clearfix"></div>

     <div class="content-wrapper">
         <div class="container-fluid">
             <div class="row pt-2 pb-2">
                 <div class="col-sm-12">
                     <h4 class="page-title">Quotation Module</h4>
                     <!--<ol class="breadcrumb">-->
                     <!--    <li class="breadcrumb-item"><a href="javaScript:void();">Masters</a></li>-->
                     <!--    <li class="breadcrumb-item"><a href="javaScript:void();">Quotation Module</a></li>-->
                     <!--</ol>-->
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
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" id="compName" placeholder="Client Name / Client No...">
                                        </div>
                                         <div class="form-group col-md-4">
                                            <input type="text" class="form-control" id="modelName" placeholder="Child Account">
                                        </div>
                                         <div class="form-group col-md-4">
                                            <div class="form-check padd mb-2">
                                                <select class="form-control" value="">
                                                    <option> Avis Office </option>
                                                    <option> ... </option>
                                                    <option> ... </option>
                                                </select>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group col-md-12">               
                                        <div class="row" style="padding-left:13px;">
                                            <div class="card-header text-uppercase col-md-3 background-non">Client Car Policy</div>
                                            <div class="form-check padd mb-2 col-md-3">
                                                <input type="checkbox" class="form-check-input margin-t" id="check2" value="">
                                                <label class="form-check-label margin-t" for="check2">Tool for Trade</label>
                                            </div>
                                            <div class="form-check padd mb-2 col-md-3">
                                                <input type="checkbox" class="form-check-input margin-t" id="check2" value="">
                                                <label class="form-check-label margin-t" for="check2">Perk Category</label>
                                            </div>
                                            <div class="form-check padd mb-2 col-md-3">
                                                <input type="checkbox" class="form-check-input margin-t" id="check2" value="">
                                                <label class="form-check-label margin-t" for="check2">CTC</label>
                                            </div>
                                            <div class="form-group col-md-4">
                                            <div class="form-check padd mb-2">
                                                <select class="form-control" value="">
                                                    <option> User </option>
                                                    <option> ... </option>
                                                    <option> ... </option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                         <div class="form-group col-md-4">
                                            <div class="form-check padd mb-2">
                                                <input type="checkbox" class="form-check-input" id="check2" value="">
                                                <label class="form-check-label" for="check2">Sale And Lease Back</label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                       <div class="row">
                                        
                                       
                                      
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header text-uppercase">Credit Status</div>
                        <div class="card-body darpan " style="padding-top: 26px !important;">
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
                                    <label for="formGroupExampleInput">Approved Credit  <br/> <b><span class="appr text-dark" id="approvedCredit"></span></b></label>
                                    <!--<input type="text" class="form-control" id="formGroupExampleInput" disabled>-->
                                </div>
                                <div class="form-group col-md-12" style="margin-bottom: 5px;">
                                    <label for="formGroupExampleInput2">Balance Credit  <br/> <b><span class="appr text-dark" id="balanceCredit"></span></b></label>
                                    <!--<input type="text" class="form-control" id="formGroupExampleInput2" disabled>-->
                                </div>
                                <div class="form-group col-md-12" style="margin-bottom: 5px;">
                                    <label for="formGroupExampleInput2">APPROVED CREDIT VALIDITY DATE  <br/> <b><span class="appr text-dark" id="appCreditValDate"></span></b></label>
                                    <!--<input type="text" class="form-control" id="formGroupExampleInput2" disabled>-->
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-body">
                             <ul class="nav nav-tabs nav-tabs-danger nav-justified top-icon">
                                 <li class="nav-item">
                                     <a class="nav-link active" data-toggle="tab" href="#tabe-21"><span class="hidden-xs">Single Quote Final</span></a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" data-toggle="tab" href="#tabe-18"><span class="hidden-xs">New Quotation</span></a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" data-toggle="tab" href="#exitingQuotation"><span class="hidden-xs">Existing Quotation</span></a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" data-toggle="tab" href="#tabe-19"><span class="hidden-xs">Follow Up</span></a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" data-toggle="tab" href="#tabe-22"><span class="hidden-xs">Multi Quote</span></a>
                                 </li>
                             </ul>
                             <div class="tab-content">
                                  
                                   <div id="tabe-21" class="container tab-pane active">
                                       <div class="Details-client">
                                       <h4 style="text-align: center; background: #273c51; padding: 6px; color:#fff;">Client Details</h4>
                                       </div>
                                     <form>
                                         <div class="row">
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Quotation Type/Product</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Lease</option>
                                                      <option>Flexi 12</option>
                                                      <option>CARe</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>RV Type</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>CRV</option>
                                                      <option>FMRV</option>
                                                      <option>VRV</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>RV% Applied</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Base Price</option>
                                                      <option>Base Price+Road Tax</option>
                                                      
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Billing Type</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Monthly</option>
                                                      <option>Quarterly</option>
                                                      <option>Half Yearly</option>
                                                      <option>Yearly</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Payment Terms</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Advance</option>
                                                      <option>Arrear</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Road Tax Mode</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Financed</option>
                                                      <option>Reimbursed</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Insurance Cover Type</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Comprehensive</option>
                                                      <option>TP Only</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Insurance Mode</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>All Year Finance</option>
                                                      <option>Reimbursed</option>
                                                      <option>First Year Finance Rest Reimbursed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Down Payment </label>
                                                    <input type="text" class="form-control" phaceholder="" value="0">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Security Deposit</label>
                                                    <input type="text" class="form-control" phaceholder="" value="0">
                                                </div>
                                            </div>
                                            
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>DMA Commission</label>
                                                    <input type="text" class="form-control" phaceholder="" value="15000">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>DMA Commission Deviation</label>
                                                    <input type="text" class="form-control" phaceholder="" value="15000">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Sales Commission</label>
                                                    <input type="text" class="form-control" phaceholder="" value="5000">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Insurance 1st Year Discount</label>
                                                    <select class="form-control" id="basic-select">
                                                        <option>10</option>
                                                     <option>20</option>
                                                      <option>30</option>
                                                      <option>40</option>
                                                      <option>50</option>
                                                      <option>55</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Insurance Rest Year Discount</label>
                                                    <select class="form-control" id="basic-select">
                                                        <option>10</option>
                                                     <option>20</option>
                                                      <option>30</option>
                                                      <option>40</option>
                                                      <option>50</option>
                                                      <option>55</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Registration Category</label>
                                                    <select class="form-control" id="basic-select">
                                                        <option>Private</option>
                                                     <option>Individual</option>
                                                      <option>Commercial</option>
                                                      <option>Semi Commercial</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Type of Usage</label>
                                                   <select class="form-control" id="basic-select">
                                                     <option>Executive Car</option>
                                                      <option>Pool Car</option>
                                                      <option>Fiels Application</option>
                                                    </select>
                                                </div>
                                            </div>
                                         </div>
                                     </form>
                                     <br>
                                  
                                    <div class="Details-client">
                                       <h4 style="text-align: center; background: #273c51; padding: 6px; color:#fff;">Vehicle</h4>
                                       </div>
                                     <form>
                                         <div class="row">
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Make</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Honda</option>
                                                      <option>Hyundai</option>
                                                      <option>Mahindra</option>
                                                      <option>Maruti</option>
                                                      <option>Tata</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Model</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>City Petrol</option>
                                                      <option>City Diesel</option>
                                                      <option>Amaze Petrol</option>
                                                      <option>Amaze Diesel</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Variant</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>V MT</option>
                                                      <option>S MT</option>
                                                      <option>V CVT</option>
                                                      <option>VX MT</option>
                                                      <option>VX CVT</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Fuel Type</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Petrol</option>
                                                      <option>Diesel</option>
                                                      <option>CNG</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Manufacturing Year</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>2020</option>
                                                      <option>2021</option>
                                                      <option>2022</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Ex Showroom</label>
                                                     <input type="text" class="form-control" phaceholder="" value="1050000">
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Discount</label>
                                                    <input type="text" class="form-control" phaceholder="" value="25000">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Road Tax</label>
                                                    <input type="text" class="form-control" phaceholder="" value="125000">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Road Tax & Reg Charges - Renewal</label>
                                                    <input type="text" class="form-control" phaceholder="" value="0">
                                                </div>
                                            </div>
                                            
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Tenure</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>24</option>
                                                      <option>36</option>
                                                      <option>48</option>
                                                      <option>60</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Mileage</label>
                                                     <select class="form-control" id="basic-select">
                                                     <option>20000</option>
                                                      <option>25000</option>
                                                      <option>30000</option>
                                                      <option>35000</option>
                                                      <option>40000</option>
                                                      <option>45000</option>
                                                      <option>50000</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>City of Registration</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>New Delhi</option>
                                                      <option>Mohali</option>
                                                      <option>Gurugram</option>
                                                      <option>Bangalore</option>
                                                      <option>Hyderabad</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Usage City</label>
                                                    <select class="form-control" id="basic-select">
                                                       <option>New Delhi</option>
                                                      <option>Mohali</option>
                                                      <option>Gurugram</option>
                                                      <option>Bangalore</option>
                                                      <option>Hyderabad</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <select class="form-control" id="basic-select">
                                                        <option>Delhi</option>
                                                     <option>Punjab</option>
                                                      <option>Haryana</option>
                                                      <option>Karnataka</option>
                                                      <option>Telangana</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Color</label>
                                                    <select class="form-control" id="basic-select">
                                                        <option>All Color</option>
                                                     <option>Special Color</option>
                                                      <option>White</option>
                                                      <option>Non Metallic</option>
                                                      <option>Metallic</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>TCS</label>
                                                   <select class="form-control" id="basic-select">
                                                     <option>Yes</option>
                                                      <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Special Discount (If Applicable)</label>
                                                  <input type="text" class="form-control" phaceholder="">
                                                </div>
                                            </div>
                                           
                                            
                                            
                                            <div class="col-lg-4">
                                                   <div class="form-group">
                                                  <label>Accessories</label>
                                                  <select class="form-control multiple-select" multiple="multiple">
                                                      <option>Floor Mat</option>
                                                      <option>Mud Flap</option>
                                                      <option>Fog Lamp</option>
                                                      <option>Car Cover</option>
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                 <label>Edit Accessories</label>
                                                 <button type="button" class="btn btn-outline-danger waves-effect waves-light m-1" data-toggle="modal" data-target="#modal-accessoriess"> <i class="fa fa-pencil-square-o"></i> </button>
                                            </div>
                                         </div>
                                     </form>
                                     <br>
                                     
                                     <div class="Details-client">
                                       <h4 style="text-align: center; background: #273c51; padding: 6px; color:#fff;">Services</h4>
                                       </div>
                                     <form>
                                         <div class="row">
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Repair Mantenance</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Included</option>
                                                      <option>Excluded</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Tyres</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Included</option>
                                                      <option>Excluded</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Avis Assist</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Included</option>
                                                      <option>Excluded</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Pickup & Drop</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Included</option>
                                                      <option>Excluded</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Replacement Car Service</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Included</option>
                                                      <option>Excluded</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Replacement Car Type</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Immediate</option>
                                                      <option>Same Category</option>
                                                      <option>On Reimburse Mode</option>
                                                      <option>After 24 Hours (Not Applicable in Accidental Cases)</option>
                                                      <option>NA </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>ADW</label>
                                                     <select class="form-control" id="basic-select">
                                                    <option>Included</option>
                                                      <option>Excluded</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Stay New Plan</label>
                                                   <select class="form-control" id="basic-select">
                                                    <option>Included</option>
                                                      <option>Excluded</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Total Loss Retention</label>
                                                    <select class="form-control" id="basic-select">
                                                    <option>Included</option>
                                                      <option>Excluded</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Hydro Insurance</label>
                                                   <select class="form-control" id="basic-select">
                                                    <option>Included</option>
                                                      <option>Excluded</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Special Services (If Any)</label>
                                                   <select class="form-control" id="basic-select">
                                                    <option>Yas</option>
                                                      <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                           
                                            
                                         </div>
                                     </form>
                                     <br>
                                     <form>
                                          <div class="row">
                                         <div class="col-lg-6">

                                             </div>
                                          <div class="col-lg-2" style="    border: 2px solid #888;">
                                                 <div class="form-group" style="text-align:center;">
                                                     <label>GOI Old</label>
                                                     <input type="hidden" name="" id="quotationvalueinput">
                                                     <h2 class="text-center mt-3" style="font-size: 20px; line-height: 6px;"><span id="quotationvalue"></span>22.00%</h2>
                                                 </div>
                                                 
                                            </div>
                                            <div class="col-lg-2" style="    border: 2px solid #888;">
                                                 <div class="form-group" style="text-align:center;">
                                                     <label>GOI New</label>
                                                     <input type="hidden" name="" id="quotationvalueinput">
                                                     <h2 class="text-center mt-3" style="font-size: 20px; line-height: 6px;"><span id="quotationvalue"></span>22.00%</h2>
                                                 </div>
                                                 
                                            </div>
                                            <div class="col-lg-2" style="    border: 2px solid #888;">
                                                 <div class="form-group" style="text-align:center;">
                                                     <label>Lease Rental</label>
                                                     <input type="hidden" name="" id="quotationvalueinput">
                                                     <h2 class="text-center mt-3" style="font-size: 20px; line-height: 6px;"><span id="quotationvalue"></span>25,256</h2>
                                                 </div>
                                                 
                                            </div>
                                            </div>
                                     </form>
                                     
                                     
                                  
                                 </div>
                                  <br>
                                  
                                  
                                 <div id="tabe-18" class="container tab-pane">
                                     <form>
                                         <div class="row">
                                             <div class="col-lg-9">
                                                <div class="form-group">
                                                    <label>VEHICLE VARIANTS</label>
                                                    <select class="form-control multiple-select" multiple="multiple" id="vehicle">
                                                    </select>
                                                </div>
                                            </div>
                                           
                                            <div class="col-lg-3">
                                                 <div class="form-group">
                                                     <label>TENURE</label>
                                                     <select class="form-control multiple-select" multiple="multiple" id="tenure">
                                                         <option value="12">1 yr</option>
                                                         <option value="24">2 yr</option>
                                                         <option value="36">3 yr</option>
                                                         <option value="48">4 yr</option>
                                                         <option value="60">5 yr</option>
                                                     </select>
                                                 </div>
                                             </div>
                                             <div class="col-lg-4">
                                                 <div class="form-group">
                                                     <label>MILEAGE</label>
                                                     <select class="form-control multiple-select" multiple="multiple" id="milleage">
                                                         <option>10000</option>
                                                         <option>20000</option>
                                                         <option>22000</option>
                                                         <option>26000</option>
                                                     </select>
                                                 </div>
                                             </div>
                                             <div class="col-lg-4">
                                                 <div class="form-group">
                                                     <label>CITY</label>
                                                     <select class="form-control multiple-select" multiple="multiple" id="vehiclecity">
                                                     </select>
                                                 </div>
                                             </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Products</label>
                                                    <select class="form-control multiple-select" multiple="multiple" id="vehicleproduct">
                                                        <option>CRV</option>
                                                        <option>FMRV</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-4">
                                                 <div class="form-group">
                                                     <label>Color</label>
                                                     <select class="form-control multiple-select" id="vehiclecolor">
                                                     </select>
                                                 </div>
                                             </div>
                                            <div class="col-lg-3">
                                                 <div class="form-group">
                                                     <label>Accessories</label>
                                                     <select class="form-control multiple-select" multiple="multiple" id="accessoriesList">
                                                     </select>
                                                 </div>
                                             </div>
                                            <div class="col-lg-1">
                                                 <button type="button" class="btn btn-outline-danger waves-effect waves-light m-1" data-toggle="modal" data-target="#modal-accessories"> <i class="fa fa-pencil-square-o"></i> </button>
                                            </div>
                                         
                                          
                                            <div class="col-lg-3">
                                                 <div class="form-group">
                                                    <label>Package</label>
                                                    <select class="form-control packageList" id="packageList">
                                                        
                                                    </select>
                                                 </div>
                                            </div>
                                            <div class="col-lg-1">
                                                <input type="hidden" name="" value="" id="getPackageId">
                                                 <button type="button" class="btn btn-outline-danger waves-effect waves-light m-1" id="editPackageList"><i class="fa fa-pencil-square-o"></i></button>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group ">
                                                    <label>Goi (%)</label>
                                                    <input type="text" class="form-control" id="goi" value="" >
                                                </div>
                                           </div>

                                             <div class="col-md-3">
                                                 <div class="form-group ">
                                                     <label>Down payment</label>
                                                     <input type="text" class="form-control" id="downPayment">
                                                 </div>
                                             </div>
                                             <div class="col-md-3">
                                                 <div class="form-group ">
                                                     <label>Security Deposit</label>
                                                     <input type="text" class="form-control" id="securityDeposit">
                                                 </div>
                                             </div>
                                           
                                             <div class="col-lg-9">

                                             </div>
                                             <div class="col-lg-3">
                                                 <div class="form-group" style="float:left;">
                                                     <input type="hidden" name="" id="quotationvalueinput">
                                                     <h2 class="text-right mt-3" style="font-size: 20px; line-height: 6px;"><span id="quotationvalue"></span>/48</h2>
                                                 </div>
                                                 <div class="button" style="float:right;">
                                                     <button type="button" class="btn btn-success btn-sm" id="generate_quotation">Generate Quotation</button>
                                                 </div>
                                             </div>


                                         </div>
                                     </form>
                                    <div class="row mt-3 main-table-box-row headingarea d-none">
                                         <div class="col-lg-12 col-md-12 col-sm-12 pl-0 pr-0 sg-main-table-head">
                                             <div class="div-table">
                                                 <div class="table">
                                                     <div claiv class="tr">
                                                         <div class="td">S. No</div>
                                                         <div class="td">#</div>
                                                         <div class="td">Vehicle</div>
                                                         <div class="td">City of Registration</div>
                                                         <div class="td">Annual Mileage</div>
                                                         <div class="td">Tenure</div>
                                                         <div class="td">Product</div>
                                                         <div class="td">GST %</div>
                                                         <div class="td">Cess %</div>
                                                         <div class="td">Contracted Mileage (KMS)</div>
                                                         <div class="td">Ex-showroom price</div>
                                                         <div class="td">Available Discount</div>
                                                         <div class="td">Passed Discount</div>
                                                         <div class="td">Initial Road Tax Receipt</div>
                                                         <div class="td">Initial Registration Charges</div>
                                                         <div class="td">Road Tax and Registration</div>
                                                         <div class="td">Renewal Road Tax </div>
                                                         <div class="td">Accessory</div>
                                                         <div class="td">Net Price</div>
                                                         <div class="td">Base price</div>
                                                         <div class="td">GST Amount</div>
                                                         <div class="td">Cess Amount</div>
                                                         <div class="td">Down Payment</div>
                                                         <div class="td">Security Deposit</div>
                                                         <div class="td">ROI</div>
                                                         <div class="td">MF</div>
                                                         <div class="td">System RV</div>
                                                         <div class="td">RV Deviations</div>
                                                         <div class="td">Applicable RV</div>
                                                         <div class="td">RV Amount</div>
                                                         <div class="td">GST on RV Amount</div>
                                                         <div class="td">RV Amount Inc GST</div>
                                                         <div class="td">Road Tax EMI</div>
                                                         <div class="td">Renewal Road Tax EMI</div>
                                                         <div class="td">Insurance EMI Per Month</div>
                                                         <div class="td">Service's Cost</div>
                                                         <div class="td">Accessories cost</div>
                                                         <div class="td">Tyres</div>
                                                         <!-- <div class="td">Pick & Drop</div> -->
                                                         <!-- <div class="td">Replacement Car</div> -->
                                                         <!-- <div class="td">Accident Depreciation Wavier</div> -->
                                                         <div class="td">Stay New Plan</div>
                                                         <div class="td">Hydrostatic Insurance</div>
                                                         <div class="td">Total Loss Retention</div>
                                                         <div class="td">VTS Service Monthly Charges</div>
                                                         <div class="td">Interst on GST & Cess</div>
                                                         <div class="td">TCS</div>
                                                         <div class="td">GST Loss Per Month</div>
                                                         <div class="td">Car EMI</div>
                                                         <div class="td">GST on Car EMI</div>
                                                         <div class="td">Cess on Car EMI</div>
                                                         <div class="td">Total FMS</div>
                                                         <div class="td">GST On FMS</div>
                                                         <div class="td">Total LR</div>
                                                         <div class="td">Total GST Amount</div>
                                                         <div class="td">Total GST Per Month</div>
                                                         <div class="td">Total GST Yearly</div>
                                                         <div class="td">Un Utilized GST (A65-A67)</div>
                                                         <div class="td">GST on RV</div>
                                                         <div class="td">Diff Between Un utilized GST & GST on RV</div>
                                                         <div class="td">Per Month GST Loss</div>
                                                         <div class="td">Sign Value</div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="col-lg-12">
                                             <div class="row quotationarea" id="quotationarea">

                                             </div>
                                         </div>
                                     </div>
                                 </div>


                                 <div id="tabe-19" class="container tab-pane fade">
                                     <table class="table table-bordered">
                                         <tbody>
                                             <tr>
                                                 <th scope="row"># </th>
                                                 <td>Number</td>
                                             </tr>
                                             <tr>
                                                 <th scope="row">Order Processed</th>
                                                 <td>0</td>
                                             </tr>
                                             <tr>
                                                 <th scope="row">Po Released</th>
                                                 <td>0</td>
                                             </tr>
                                             <tr>
                                                 <th scope="row">Vehicle Delivered</th>
                                                 <td>0</td>
                                             </tr>
                                             <tr>
                                                 <th scope="row">Active Contract</th>
                                                 <td>0</td>
                                             </tr>
                                             <tr>
                                                 <th scope="row">Re Calculated</th>
                                                 <td>0</td>
                                             </tr>
                                             <tr>
                                                 <th scope="row">Extended Contract</th>
                                                 <td>0</td>
                                             </tr>
                                             <tr>
                                                 <th scope="row">Contract Terminated </th>
                                                 <td>0</td>
                                             </tr>
                                         </tbody>
                                     </table>

                                 </div>
                                 
                                 
                                 
                                 <div id="tabe-22" class="container tab-pane active">
                                       <div class="Details-client">
                                       <h4 style="text-align: center; background: #273c51; padding: 6px; color:#fff;">Client Details</h4>
                                       </div>
                                     <form>
                                         <div class="row">
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Quotation Type/Product</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Lease</option>
                                                      <option>Flexi 12</option>
                                                      <option>CARe</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>RV Type</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>CRV</option>
                                                      <option>FMRV</option>
                                                      <option>VRV</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>RV% Applied</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Base Price</option>
                                                      <option>Base Price+Road Tax</option>
                                                      
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Billing Type</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Monthly</option>
                                                      <option>Quarterly</option>
                                                      <option>Half Yearly</option>
                                                      <option>Yearly</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Payment Terms</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Advance</option>
                                                      <option>Arrear</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Road Tax Mode</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Financed</option>
                                                      <option>Reimbursed</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Insurance Cover Type</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Comprehensive</option>
                                                      <option>TP Only</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Insurance Mode</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>All Year Finance</option>
                                                      <option>Reimbursed</option>
                                                      <option>First Year Finance Rest Reimbursed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Down Payment </label>
                                                    <input type="text" class="form-control" phaceholder="" value="0">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Security Deposit</label>
                                                    <input type="text" class="form-control" phaceholder="" value="0">
                                                </div>
                                            </div>
                                            
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>DMA Commission</label>
                                                    <input type="text" class="form-control" phaceholder="" value="15000">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>DMA Commission Deviation</label>
                                                    <input type="text" class="form-control" phaceholder="" value="15000">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Sales Commission</label>
                                                    <input type="text" class="form-control" phaceholder="" value="5000">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Insurance 1st Year Discount</label>
                                                    <select class="form-control" id="basic-select">
                                                        <option>10</option>
                                                     <option>20</option>
                                                      <option>30</option>
                                                      <option>40</option>
                                                      <option>50</option>
                                                      <option>55</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Insurance Rest Year Discount</label>
                                                    <select class="form-control" id="basic-select">
                                                        <option>10</option>
                                                     <option>20</option>
                                                      <option>30</option>
                                                      <option>40</option>
                                                      <option>50</option>
                                                      <option>55</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Registration Category</label>
                                                    <select class="form-control" id="basic-select">
                                                        <option>Private</option>
                                                     <option>Individual</option>
                                                      <option>Commercial</option>
                                                      <option>Semi Commercial</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Type of Usage</label>
                                                   <select class="form-control" id="basic-select">
                                                     <option>Executive Car</option>
                                                      <option>Pool Car</option>
                                                      <option>Fiels Application</option>
                                                    </select>
                                                </div>
                                            </div>
                                         </div>
                                     </form>
                                     <br>
                                      <div class="Details-client">
                                       <h4 style="text-align: center; background: #273c51; padding: 6px; color:#fff;">Services</h4>
                                       </div>
                                     <form>
                                         <div class="row">
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Repair Mantenance</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Included</option>
                                                      <option>Excluded</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Tyres</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Included</option>
                                                      <option>Excluded</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Avis Assist</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Included</option>
                                                      <option>Excluded</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Pickup & Drop</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Included</option>
                                                      <option>Excluded</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Replacement Car Service</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Included</option>
                                                      <option>Excluded</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Replacement Car Type</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Immediate</option>
                                                      <option>Same Category</option>
                                                      <option>On Reimburse Mode</option>
                                                      <option>After 24 Hours (Not Applicable in Accidental Cases)</option>
                                                      <option>NA </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>ADW</label>
                                                     <select class="form-control" id="basic-select">
                                                    <option>Included</option>
                                                      <option>Excluded</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Stay New Plan</label>
                                                   <select class="form-control" id="basic-select">
                                                    <option>Included</option>
                                                      <option>Excluded</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Total Loss Retention</label>
                                                    <select class="form-control" id="basic-select">
                                                    <option>Included</option>
                                                      <option>Excluded</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Hydro Insurance</label>
                                                   <select class="form-control" id="basic-select">
                                                    <option>Included</option>
                                                      <option>Excluded</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Special Services (If Any)</label>
                                                   <select class="form-control" id="basic-select">
                                                    <option>Yas</option>
                                                      <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                           
                                            
                                         </div>
                                     </form>
                                     <br>
                                  
                                    <div class="Details-client">
                                       <h4 style="text-align: center; background: #273c51; padding: 6px; color:#fff;">Vehicle</h4>
                                       </div>
                                     <form>
                                         <div class="row">
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Make</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Honda</option>
                                                      <option>Hyundai</option>
                                                      <option>Mahindra</option>
                                                      <option>Maruti</option>
                                                      <option>Tata</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Model</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>City Petrol</option>
                                                      <option>City Diesel</option>
                                                      <option>Amaze Petrol</option>
                                                      <option>Amaze Diesel</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Variant</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>V MT</option>
                                                      <option>S MT</option>
                                                      <option>V CVT</option>
                                                      <option>VX MT</option>
                                                      <option>VX CVT</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Fuel Type</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>Petrol</option>
                                                      <option>Diesel</option>
                                                      <option>CNG</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Manufacturing Year</label>
                                                    <select class="form-control" id="basic-select">
                                                     <option>2020</option>
                                                      <option>2021</option>
                                                      <option>2022</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Tenure</label>
                                                     <input type="text" class="form-control" phaceholder="" value="Single Tenure">
                                                </div>
                                            </div>
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Mileage</label>
                                                    <input type="text" class="form-control" phaceholder="" value="Single Tenure">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>City of Registration</label>
                                                    <input type="text" class="form-control" phaceholder="" value="Multiple">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Usage City</label>
                                                    <input type="text" class="form-control" phaceholder="" value="Multiple (Same As Registration City)">
                                                </div>
                                            </div>
                                            
                                             <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" phaceholder="" value="Multiple (As Per Respective Registration City)">
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            <div class="col-lg-4">
                                                   <div class="form-group">
                                                  <label>Accessories</label>
                                                  <select class="form-control multiple-select" multiple="multiple">
                                                      <option>Floor Mat</option>
                                                      <option>Mud Flap</option>
                                                      <option>Fog Lamp</option>
                                                      <option>Car Cover</option>
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                 <label>Edit Accessories</label>
                                                 <button type="button" class="btn btn-outline-danger waves-effect waves-light m-1" data-toggle="modal" data-target="#modal-accessoriess"> <i class="fa fa-pencil-square-o"></i> </button>
                                            </div>
                                         </div>
                                     </form>
                                    
                                     
                                     
                                  
                                 </div>


                                 <div id="exitingQuotation" class="container tab-pane fade">
                                     <table class="table table-bordered" id="exitingQuotationTable" style="width:100%;">
                                         <thead>
                                             <tr>
                                                 <th>S.No</th>
                                                 <th>#</th>
                                                <!--  <th>Vehicle</th> -->
                                                 <th>Quotation ID</th>
                                                 <th>City of Registration</th>
                                                 <th>Tenure</th>
                                                 <th>Product</th>
                                                 <th>GST %</th>
                                                 <th>Cess %</th>
                                                 <th>Contracted Mileage (KMS)</th>
                                                 <th>Ex-showroom price</th>
                                                 <th>Available Discount</th>
                                                 <th>Passed Discount</th>
                                                 <th>Initial Road Tax Receipt</th>
                                                 <th>Initial Registration Charges</th>
                                                 <th>Road Tax and Registration</th>
                                                 <th>Renewal Road Tax</th>
                                                 <th>Accessory</th>
                                                 <th>Net Price</th>
                                                 <th>Base Price</th>
                                                 <th>GST Amount</th>
                                                 <th>Cess Amount</th>
                                                 <th>Down Payment</th>
                                                 <th>Security Deposit</th>
                                                 <th>ROI</th>
                                                 <th>MF</th>
                                                 <th>System RV</th>
                                                 <th>RV Deviations</th>
                                                 <th>Applicable RV</th>
                                                 <th>RV Amount</th>
                                                 <th>GST on RV Amount</th>
                                                 <th>RV Amount Inc GST</th>
                                                 <th>Road Tax EMI</th>
                                                 <th>Renewal Road Tax EMI</th>
                                                 <th>Insurance EMI Per Month</th>
                                                 <th>Service's Cost</th>
                                                 <th>Accessories cost</th>
                                                 <th>Tyres</th>
                                                 <!-- <th>Pick & Drop</th> -->
                                                 <!-- <th>Replacement Car</th> -->
                                                 <!-- <th>Accident Depreciation Wavier</th> -->
                                                 <th>Stay New Plan</th>
                                                 <th>Hydrostatic Insurance</th>
                                                 <th>Total Loss Retention</th>
                                                 <th>VTS Service Monthly Charges</th>
                                                 <th>Interst on GST & Cess</th>
                                                 <th>TCS</th>
                                                 <th>GST Loss Per Month</th>
                                                 <th>Car EMI</th>
                                                 <th>GST on Car EMI</th>
                                                 <th>Cess on Car EMI</th>
                                                 <th>Total FMS</th>
                                                 <th>GST On FMS</th>
                                                 <th>Total LR</th>
                                                 <th>Total GST Amoun</th>
                                                 <th>Total GST Per Month</th>
                                                 <th>Total GST Yearly</th>
                                                 <th>Un Utilized GST (A65-A67)</th>
                                                 <th>GST on RV</th>
                                                 <th>Diff Between Un utilized GST & GST on RV</th>
                                                 <th>Per Month GST Loss</th>
                                                 <th>Sign Value</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="overlay toggle-menu"></div>
         </div>
     </div>
 </div>
 <!--End wrapper-->
  <div class="modal fade" id="modal-accessoriess">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content animated bounceIn">
             <div class="modal-header">
                 <h5 class="modal-title" style="text-align:center; color:#fff;">Accessories</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form>
                    <div class="row justify-content-md-center px-3">
                        <div class="accessoriesListAppendArea">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Accessories</th>
                                  <th scope="col">Amount</th>
                                  <th scope="col">GST Rate</th>
                                  <th scope="col">Base Accessory Cost</th>
                                </tr>
                              </thead>
                              <tbody>
                                
                              </tbody>
                            </table>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>  
 
 
  <div class="modal fade" id="modal-accessories">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content animated bounceIn">
             <div class="modal-header">
                 <h5 class="modal-title" style="text-align:center; color:#fff;">Accessories</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form>
                    <div class="row justify-content-md-center mt-3 px-3">
                        <div class="col-md-10 accessoriesListAppendArea">
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>  

 <div class="modal fade" id="modal-package">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content animated bounceIn">
             <div class="modal-header">
                 <h5 class="modal-title" style="text-align:center; color:#fff;"> Services</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form style="padding: 0px 20px 0px 20px;">
                    <div class="row justify-content-md-center">
                        <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <label>Packages</label>
                                <select class="form-control packageListModal"></select>  
                            </div>
                        <div class="col-md-2"></div>
                        <hr>
                    </div>
                    <div class="row justify-content-md-center mt-3 px-3">
                        <div class="col-md-12 packageListAppendArea">
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <div id="modal-body">

 </div>