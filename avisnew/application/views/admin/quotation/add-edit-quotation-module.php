 
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
    min-width: 190px;
    text-align: center;
    border-color: #111;
    border: 1px solid #111;
    border-bottom: 1px solid #111;
    height: 40px;
    line-height: 25px;
    font-size: 14px;
    font-weight: 400;
           
    }
    .div-table .table .tr .td p{
          margin-bottom: 0px;
    text-align: center;
    padding: 4px 0px;
    text-transform: uppercase;
    font-size: 15px;
    }
   s
      .sg-td{
        vertical-align: middle;
      }
      .div-table .table .tr {
    background-color: #ce2827;
    color: #fff;
}
/* Not necessary for table styling */
.div-table, .table-tag {
  float:left;
  margin:0em;
  
}
.div-table .title {
    text-align:center;
    padding-bottom:.5em;
  }
  .main-table-box-row{
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form>
                                 
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="input-1" placeholder="Client Name / Client No..." disabled>
                                        </div>
                                        <!--<div class="form-group col-md-3">-->
                                        <!--    <input type="text" class="form-control" id="input-3" placeholder="Client Number">-->
                                        <!--</div>-->
                                        <!--<div class="form-group col-md-3">-->
                                        <!--    <input type="text" class="form-control" id="input-2" placeholder="Quotation Number">-->
                                        <!--</div>-->
                                        <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="input-2" placeholder="Creation Date">
                                        </div>
                                        <!--<div class="form-group col-md-3">-->
                                        <!--    <input type="text" class="form-control" id="input-2" placeholder="Logged In As">-->
                                        <!--</div>-->
                                      


                                    </div>
                                    
                                       <div class="row">
                                        <div class="form-group col-md-2">
                                            <div class="form-check padd mb-2">

                                                <input type="checkbox" class="form-check-input" id="check2" value="">
                                                <label class="form-check-label" for="check2">Client</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <div class="form-check padd mb-2">

                                                <input type="checkbox" class="form-check-input" id="check2" value="">
                                                <label class="form-check-label" for="check2">Prospect</label>
                                            </div>
                                        </div>
                                          <div class="form-group col-md-2">
                                            <div class="form-check padd mb-2">

                                                <input type="checkbox" class="form-check-input" id="check2" value="">
                                                <label class="form-check-label" for="check2">Sale And Lease Back</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                                        <a class="nav-link active" data-toggle="tab" href="#tabe-17"><span class="hidden-xs">General</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-18"><span class="hidden-xs">Quotation</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-19"><span class="hidden-xs">Follow Up</span></a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tabe-17" class="container tab-pane active">
                                        <form>

                                        



       <div class="row">
      <div class="col-lg-8">
         <div class="card">
           <div class="card-body ffff ssss">
           <div class="card-header text-uppercase">PRINCIPAL</div>
           <hr>
             <form>
             <div class="row">
                 
                 <div class="form-group col-md-9">
            <input type="text" class="form-control" id="input-2" placeholder="Company Name">
           </div>
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="input-1" placeholder="Client Id">
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
                </div>
           </div>
           <div class="form-group col-md-4">
            <input type="text" class="form-control" id="input-3" placeholder="Master Agreement Number">
           </div>
         
           
           
           <div class="form-group col-md-12">
               
               <div class="row" style="padding-left:13px;">
                   <div class="card-header text-uppercase col-md-3 background-non">Client Blocking</div>
                <div class="form-check padd mb-2 col-md-2">
                <input type="checkbox" class="form-check-input margin-t" id="check2" value="">
                </div>
                
                </div>
           </div>
           
        
       
        </div>
          </form>
         </div>
         </div>
       </div>
<div class="col-lg-4">
         <div class="card jjj">
        <div class="card-header ddd text-uppercase background-non">Credit Risk</div>
         <div class="card-body darpan">

          <div class="row">
           
            <div class="col-md-12 col-sm-4 col-xs-6 demo-col">
                <div class="icheck-danger">
                    <input type="radio" checked id="danger2" name="danger" />
                    <label for="danger2">NOT APPROVED</label>
                </div>
               
            </div>
            <div class="col-md-12 col-sm-4 col-xs-6 demo-col">
                 <div class="radio icheck-success">
                    <input type="radio" checked id="success2" name="success" />
                    <label for="success2">APPROVED</label>
                </div>
                
            </div>
            <div class="col-md-12 col-sm-4 col-xs-6 demo-col">
                <div class="checkbox icheck-warning">
                    <input type="radio" checked id="warning2" name="warning" />
                    <label for="warning">About to Expire</label>
                </div>
               
            </div>
            
            <br>
              <br>
              <br>
          <div class="form-group col-md-12">
    <label for="formGroupExampleInput">Approved Credit <span class="appr">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Approved</span></label>
  </div>
  <div class="form-group col-md-12">
    <label for="formGroupExampleInput2">Balance Credit <span class="appr">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Approved</span></label>
  </div>
  <div class="form-group col-md-12">
    <label for="formGroupExampleInput2">App. Credit Val. Date <span class="appr">Approved</span></label>
  </div>
        </div>



         </div>
       </div>
    
      </div>
      </div><!--End Row-->
                                                
                                                
                                            <div class="button">
                                                <button type="submit" class="btn btn-primary cancel">CANCEL</button>
                                                <button type="submit" class="btn btn-primary save">SAVE</button>
                                        </form>
                                    </div>

                                </div>
                                <div id="tabe-18" class="container tab-pane fade">
                                    <form>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>VEHICLE VARIANTS</label>
                                                    <select class="form-control multiple-select" multiple="multiple" id="vehicle">
                                                        
                                                        <option>Ciaz</option>
                                                        <option>Honda City</option>
                                                        <option>Creata</option>
                                                        <option>i20</option>
                                                        <option>Baleno</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>TENURE</label>
                                                    <select class="form-control multiple-select" multiple="multiple" id="tenure">
                                                        <option>2 yrs</option>
                                                        <option>4 yrs</option>
                                                        <option>5 yrs</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>MILEAGE</label>
                                                    <select class="form-control multiple-select" multiple="multiple" id="milleage">
                                                        <option>100000</option>
                                                        <option>200000</option>
                                                        <option>220000</option>
                                                        <option>260000</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>CITY</label>
                                                    <select class="form-control multiple-select" multiple="multiple" id="inputCity">
                                                        <!--<option>Delhi</option>-->
                                                        <!--<option>Mumbai</option>-->
                                                        <!--<option>Gurugram</option>-->
                                                        <!--<option>Noida</option>-->
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
                                            <div class="col-md-3">
                                            <div class="form-group ">
                                                <label>Down payment</label>
                                            <input type="text" class="form-control" id="input-1">
                                           </div>
                                           </div>
                                           <div class="col-md-3">
                                            <div class="form-group ">
                                                <label>Security Deposit</label>
                                            <input type="text" class="form-control" id="input-1">
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
                                        <div class="col-lg-12 col-md-12 col-sm-12 pl-0 pr-0"> <div class="div-table"> <div class="table"> <div class="tr"> <div class="td">Vehicle</div> <div class="td">City</div> <div class="td">Mileage</div> <div class="td">Tenure</div> <div class="td">Product</div> <div class="td"> Ex-showroom price</div> <div class="td"> Road Tax</div> <div class="td"> Registration charges</div> <div class="td"> Other Charges</div> <div class="td">Net Price</div> <div class="td">Base price</div> <div class="td">GST and Cess%</div> <div class="td">Vehicle Discount %</div> <div class="td">Insurance</div> <div class="td"> Insurance Cost</div> <div class="td">Financial Lease</div> <div class="td">Accessories</div> <div class="td">Accessories cost</div> <div class="td">Services</div> <div class="td"> Services Cost</div> <div class="td">Total Rental Lease</div> </div> </div> </div> </div>

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
                                </div>
                                </div>
                                </div>
                            </div>
                        </div>
          <!--End Dashboard Content-->
      <!--start overlay-->
      <div class="overlay toggle-menu"></div>
    <!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
    
   
  </div><!--End wrapper-->



