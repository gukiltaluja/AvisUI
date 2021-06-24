 <!-- Start wrapper-->
    <div id="wrapper">
     
        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row pt-2 pb-2">
                    <div class="col-sm-12">
                        <h4 class="page-title">Invoicing Module</h4>
<!--                        <ol class="breadcrumb">-->
<!--                            <li class="breadcrumb-item"><a href="javaScript:void();">Application</a></li>-->
<!--                            <li class="breadcrumb-item"><a href="javaScript:void();">  Invoicing Module-->
<!--</a></li>-->
<!--                        </ol>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body ffff ssss">
                               <div class="card-header text-uppercase">PRINCIPAL</div>
                                <hr>
                                <form style="padding: 0px 20px 0px 20px;">
                                 
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" id="input-1" placeholder="Contract Number" >
                                        </div>
                                        <!--<div class="form-group col-md-3">-->
                                        <!--    <input type="text" class="form-control" id="input-3" placeholder="Client Number">-->
                                        <!--</div>-->
                                        <!--<div class="form-group col-md-3">-->
                                        <!--    <input type="text" class="form-control" id="input-2" placeholder="Quotation Number">-->
                                        <!--</div>-->
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" id="input-2" placeholder="Client Name">
                                        </div>
                                     <div class="form-group col-md-4">
                                            <input type="text" class="form-control" id="input-2" placeholder="Client Id">
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
                                        <a class="nav-link active" data-toggle="tab" href="#tabe-17"><span class="hidden-xs">Summary</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabe-18"><span class="hidden-xs">INVOICE</span></a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tabe-17" class="container tab-pane active">
                                        <form>

                                           

      <div class="row">
      <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
             <form>
                 <div class="row">
                         <div class="form-group col-md-4">
                                            <input type="text" class="form-control" id="input-1" placeholder="Contract Status" >
                                        </div>
                                        
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" id="input-2" placeholder="Contract Status">
                                        </div>
                                     <div class="form-group col-md-4">
                                            <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5" placeholder="Invoicing Centre"></textarea>
                                        </div>
                 </div>
          </form>
         </div>
         </div>
       </div>

      </div><!--End Row-->

        <div class="row">
      <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
            <div class="card-header text-uppercase background-non">VEHICLE</div>
             <form>
                 <div class="row">
                         <div class="form-group col-md-4">
                                            <input type="text" class="form-control" id="input-1" placeholder="Model" >
                                        </div>
                                        
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" id="input-2" placeholder="Extra /item List">
                                        </div>
                                     <div class="form-group col-md-4">
                                      <input type="text" class="form-control" id="input-2" placeholder="Registration Number">
                                        </div>
                                        <div class="form-group col-md-4">
                                      <input type="text" class="form-control" id="input-2" placeholder="Vehicle Colour">
                                        </div>
                 </div>
          </form>
         </div>
         </div>
       </div>

      </div><!--End Row-->

           <div class="row">
      <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
            <div class="card-header text-uppercase background-non">Vehicle Departure</div>
             <form>
                 <div class="row">
                         <div class="form-group col-md-4">
                          <label class="form-label">Departure Date</label>
                                            <input type="date" class="form-control" id="input-1" placeholder="Departure Date" >
                                        </div>
                                        
                                        <div class="form-group col-md-4">
                                          <label class="form-label">Departure Time</label>
                                            <input type="time" class="form-control" id="input-2" placeholder="Departure Time">
                                        </div>
                                     <div class="form-group col-md-4">
                                      <label class="form-label">Mileage</label>
                                      <input type="text" class="form-control" id="input-2" placeholder="Mileage">
                                        </div>
</br>
</br>

<div class="Basis-price">
<table id="example" class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Basis price(tax ex.)</th>
                        <th>Discount</th>
                        <th>Total (tax ex.)</th>
                        <th>VAT Rate</th>
                        <th>Total(tax in.)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
<td style="height: 17px; width: 274.4px;">BWM SERIES 3 SD 3161 PREMIUM 4K</td>
<td style="height: 17px; width: 168px;">50000</td>
<td style="height: 17px; width: 180px;">0%</td>
<td style="height: 17px; width: 178.4px;">50000</td>
<td style="height: 17px; width: 144.8px;">18%</td>
<td style="height: 17px; width: 167.2px;">59000</td>
</tr>
<tr>
<td style="height: 17px; width: 274.4px;">Discount Percentage</td>
<td style="height: 17px; width: 168px;">&nbsp;</td>
<td style="height: 17px; width: 180px;">0%</td>
<td style="height: 17px; width: 178.4px;">0</td>
<td style="height: 17px; width: 144.8px;">&nbsp;</td>
<td style="height: 17px; width: 167.2px;">&nbsp;</td>
</tr>
<tr>
<td style="height: 17px; width: 274.4px;">Discount Amount</td>
<td style="height: 17px; width: 168px;">&nbsp;</td>
<td style="height: 17px; width: 180px;">0%</td>
<td style="height: 17px; width: 178.4px;">0</td>
<td style="height: 17px; width: 144.8px;">&nbsp;</td>
<td style="height: 17px; width: 167.2px;">&nbsp;</td>
</tr>
<tr>
<td style="height: 17px; width: 274.4px;">Rebate</td>
<td style="height: 17px; width: 168px;">&nbsp;</td>
<td style="height: 17px; width: 180px;">0%</td>
<td style="height: 17px; width: 178.4px;">0</td>
<td style="height: 17px; width: 144.8px;">&nbsp;</td>
<td style="height: 17px; width: 167.2px;">&nbsp;</td>
</tr>
<tr>
<td style="height: 17px; width: 274.4px;">Total Vehicle</td>
<td style="height: 17px; width: 168px;">50000</td>
<td style="height: 17px; width: 180px;">0%</td>
<td style="height: 17px; width: 178.4px;">50000</td>
<td style="height: 17px; width: 144.8px;">18%</td>
<td style="height: 17px; width: 167.2px;">59000</td>
</tr>
<tr>
<td style="height: 17px; width: 274.4px;">Options</td>
<td style="height: 17px; width: 168px;">&nbsp;</td>
<td style="height: 17px; width: 180px;">0%</td>
<td style="height: 17px; width: 178.4px;">&nbsp;</td>
<td style="height: 17px; width: 144.8px;">&nbsp;</td>
<td style="height: 17px; width: 167.2px;">&nbsp;</td>
</tr>
<tr>
<td style="height: 17px; width: 274.4px;">Total Options</td>
<td style="height: 17px; width: 168px;">0</td>
<td style="height: 17px; width: 180px;">0%</td>
<td style="height: 17px; width: 178.4px;">50000</td>
<td style="height: 17px; width: 144.8px;">18%</td>
<td style="height: 17px; width: 167.2px;">59000</td>
</tr>
<tr>
<td style="height: 17px; width: 274.4px;">Equipments</td>
<td style="height: 17px; width: 168px;">&nbsp;</td>
<td style="height: 17px; width: 180px;">0%</td>
<td style="height: 17px; width: 178.4px;">&nbsp;</td>
<td style="height: 17px; width: 144.8px;">&nbsp;</td>
<td style="height: 17px; width: 167.2px;">&nbsp;</td>
</tr>      
<tr>
<td style="height: 17px; width: 274.4px;">Total Equipments</td>
<td style="height: 17px; width: 168px;">0</td>
<td style="height: 17px; width: 180px;">0%</td>
<td style="height: 17px; width: 178.4px;">0</td>
<td style="height: 17px; width: 144.8px;">&nbsp;</td>
<td style="height: 17px; width: 167.2px;">0</td>
</tr>      
<tr>
<td style="height: 17px; width: 274.4px;">Taxes</td>
<td style="height: 17px; width: 168px;">&nbsp;</td>
<td style="height: 17px; width: 180px;">0%</td>
<td style="height: 17px; width: 178.4px;">&nbsp;</td>
<td style="height: 17px; width: 144.8px;">&nbsp;</td>
<td style="height: 17px; width: 167.2px;">&nbsp;</td>
</tr> 
<tr>
<td style="height: 17px; width: 274.4px;">Total Taxes</td>
<td style="height: 17px; width: 168px;">19246.76</td>
<td style="height: 17px; width: 180px;">0%</td>
<td style="height: 17px; width: 178.4px;">19246.76</td>
<td style="height: 17px; width: 144.8px;">&nbsp;</td>
<td style="height: 17px; width: 167.2px;">22603.52</td>
</tr> 
<tr>
<td style="height: 17px; width: 274.4px;">Total</td>
<td style="height: 17px; width: 168px;">69246.76</td>
<td style="height: 17px; width: 180px;">0%</td>
<td style="height: 17px; width: 178.4px;">69246.76</td>
<td style="height: 17px; width: 144.8px;">&nbsp;</td>
<td style="height: 17px; width: 167.2px;">81603.52</td>
</tr>           
                </tbody>
          
            </table>
          </div>


</br>
</br>








                                        <div class="form-group col-md-4">
                                      <input type="text" class="form-control" id="input-2" placeholder="Supplier Name">
                                        </div>
                                         <div class="form-group col-md-4">
                                      <input type="text" class="form-control" id="input-2" placeholder="Supplier Code">
                                        </div>
                                         <div class="form-group col-md-4">
                                      <input type="text" class="form-control" id="input-2" placeholder="Driver Name">
                                        </div>
                                         <div class="form-group col-md-4">
                                      <input type="text" class="form-control" id="input-2" placeholder="Product And Services">
                                        </div>
                                         <div class="form-group col-md-4">
                                      <input type="text" class="form-control" id="input-2" placeholder="Contact Person">
                                        </div>
                                         <div class="form-group col-md-4">
                                     <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5" placeholder="Remarks"></textarea>
                                        </div>
                                       
                 </div>
          </form>
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
                                           <div class="form-group col-md-4">
                          <label class="form-label">Type Of Invoicing</label>
                                            <select id="inputState" class="form-control">
                                              <option>Type Of Invoicing</option>
                                              <option></option>
                                              <option></option>
                                              </select>
                                        </div>
                                         <div class="form-group col-md-4">
                          <label class="form-label"> Invoice Contracts Upto </label>
                                            <input type="date" class="form-control" id="input-1" placeholder="Departure Date" >
                                        </div>
                                         <div class="form-group col-md-4">
                          <label class="form-label">Accounting Invoicing Date</label>
                                            <input type="date" class="form-control" id="input-1" placeholder="Departure Date" >
                                        </div>
                                         
                                        </div>
                                    </form>
                                  
                                  </div>

                   

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay toggle-menu"></div>
        </div>
        <!-- End container-fluid-->

    </div>
    <!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
    </div>
    <!--End wrapper-->