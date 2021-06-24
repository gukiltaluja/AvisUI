
<!-- Start wrapper-->
 <div id="wrapper">
  
<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!--Start Dashboard Content-->
    <div class="row pt-2 pb-2">
        <div class="col-sm-12">
        <h4 class="page-title">Supplier Master Supplier</h4>
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">Basic Master-->
<!--</a></li>-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();"></a></li>-->
<!--         </ol>-->
     </div>
     </div>
     
  <div class="row">
      <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
              
           <!-- <div class="card-header text-uppercase">PRINCIPAL</div> -->
           <div class="pt-4">
            <form>
             <div class="row">
         

            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="brandName" placeholder="Brand Name *">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="legalName" placeholder="Legal Name *">
           </div>
           
            <div class="form-group col-md-3">
            <select id="supplierTypeId" name="supplierTypeId" class="form-control">
              <option>Supplier Type</option>
        <option></option>
        <option></option>
        </select>
           </div>
           
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="supplierAddress" placeholder="Supplier Address">
           </div>
            <div class="form-group col-md-3">
            <select id="kyc" class="form-control">
              <option>KYC</option>
        <option></option>
        <option></option>
        </select>
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="supplierPhone" placeholder="Supplier Phone">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="gstnNumber" placeholder="GSTN Number">
           </div>

           <div class="form-group col-md-3">
            <input type="text" id="autoclose-datepicker" class="form-control" placeholder="Renewal Date">
           </div>
            
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="accountName" placeholder="Account Name">
           </div>
           
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="bankName" placeholder="Bank Name *">
           </div>
           
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="ifscCode" placeholder="IFSC Code">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="panNo" placeholder="PAN No">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="tinNo" placeholder="Tin No">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="agreedDiscountPart" placeholder="Agreed Discount On Service Parts">
           </div>

           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="agreedDiscountLabor" placeholder="Agreed Discount On Service Labor">
           </div>

          <div class="form-group col-md-3">
            <input type="text" class="form-control" id="agreedDiscAccedPart" placeholder="Agreed Discount On Accidental Parts">
          </div>

          <div class="form-group col-md-3">
            <input type="text" class="form-control" id="agreedDiscAccidLabor" placeholder="Agreed Discount On Accidental Labor">
           </div>

            <div class="form-group col-md-3">
             <select id="inputState" class="form-control">
                <option>Credit On New Car Purchase (In Days)</option>
                <option></option>
                <option></option>
              </select>
           </div>
  
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="accountEmailId" placeholder="Account Email ID">
           </div>

          <div class="form-group col-md-3">
            <input type="text" class="form-control" id="workshopEmailId" placeholder="Workshop Email ID">
           </div>

           <div class="form-group col-md-12">
              <div class="form-check padd mb-2">
                <input type="checkbox" class="form-check-input" id="relationshipWorkshop" value="">
                <label class="form-check-label" for="check2">Relationship Workshop</label>
              </div>
           </div>
            <input type="hidden" id="supplierId">
           <div class="form-group col-md-12">
        <div class="form-check padd mb-2">
                <input type="checkbox" class="form-check-input" id="active" value="">
                <label class="form-check-label" for="check2">Active</label>
                </div>
           </div>
        </div>
          </form>
          </div>
          <div class="buttondd" style="text-align: right;">
  <button type="submit" class="btn btn-primary save" onclick="supplierCreate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspSave</button>
  <button type="submit" class="btn btn-primary save" onclick="supplierUpdate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspUpdate</button>
  <button type="submit" class="btn btn-primary cancel">Reset</button>

          
      </div>
         </div>
         </div>
       </div>

      </div><!--End Row-->

    

 <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered" id="supplierTable">
                <thead>
                    <tr>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;View &quot;}">View</th>
                         <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Service&quot;}">Brand Name</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Service&quot;}">Legal Name</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Service&quot;}">Supplier Type</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Service&quot;}">Supplier Address</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Service&quot;}">Supplier Phone</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Service&quot;}">GSTN Number</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Service&quot;}">Renewal Date</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Service&quot;}">Account Name</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Service&quot;}">Bank Name</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Service&quot;}">IFSC Code</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Service&quot;}">PAN No</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Service&quot;}">TIN No</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Service&quot;}">Agreed Discount On Service Parts</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Service&quot;}">Agreed Discount On Service Labor</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Service&quot;}">Agreed Discount On Accidental Parts</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Service&quot;}">Agreed Discount On Accidental Labor</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Service&quot;}">Credit On New Car Purchase (In Days)</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Service&quot;}">Account Email ID</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Service&quot;}">Workshop Email ID</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Active&quot;}">Active</th>
                        <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Tools&quot;}">Tools</th>
                    </tr>
                </thead>
                <tbody>
                                    
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
     
       <!--End Dashboard Content-->
      <!--start overlay-->
    <div class="overlay toggle-menu"></div>
  <!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
  
  <!--Start footer-->
  <footer class="footer">
      <div class="container">
        <div class="text-center">
          © All Rights Reserved. Amazin Automation Solution India Pvt. Ltd.
        </div>
      </div>
    </footer>
  <!--End footer-->
   
  </div><!--End wrapper-->
  <script src="http://www.datejs.com/build/date.js" type="text/javascript"></script>
  