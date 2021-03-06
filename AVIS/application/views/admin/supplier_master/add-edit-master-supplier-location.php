

<!-- Start wrapper-->
 <div id="wrapper">
  
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
    <div class="row pt-2 pb-2">
        <div class="col-sm-12">
        <h4 class="page-title">Master Supplier Location Details</h4>
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">Basic Master-->
<!--</a></li>-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">Master Supplier Location Details</a></li>-->
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
            <select id="supplierId" name="supplierId" class="form-control">
              <option>Supplier Name</option>
        <option></option>
        <option></option>
        </select>
           </div>
            

            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="supplierLocAddress" placeholder="Supplier Loc Address">
           </div>
           
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="inputCity" placeholder="City Name" >
           </div>
           
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="inputState" placeholder="State Name" disabled>
           </div>
           
        <!--    <div class="form-group col-md-3">-->
        <!--    <select id="stateId" class="form-control">-->
        <!--      <option>Supplier State</option>-->
        <!--<option></option>-->
        <!--<option></option>-->
        <!--</select>-->
        <!--   </div>-->
           
        <!--   <div class="form-group col-md-3">-->
        <!--    <input type="text" class="form-control" id="cityId" placeholder="Supplier City">-->
        <!--   </div>-->
            
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="supplierPinCode" placeholder="Supplier Pincode">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="supplierLocPhone" placeholder="Supplier Loc Phone">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="contactPhone" placeholder="Contact Phone *">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="contactName" placeholder="Contact Name *">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="accPacCode" placeholder="Acc Pac Code">
           </div>
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="supplierEmail" placeholder="Email ID *">
           </div>
            <input type="hidden" id="supplierLocationId">
           <div class="form-group col-md-12">
        <div class="form-check padd mb-2">
                <input type="checkbox" class="form-check-input" id="check2" value="">
                <label class="form-check-label" for="check2">Active</label>
                </div>
           </div>
        </div>

          </div>
          <div class="buttondd" style="text-align: right;">
  <button type="submit" class="btn btn-primary save" onclick="supplierLocationCreate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspSave</button>
  <button type="submit" class="btn btn-primary save" onclick="supplierLocationUpdate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspUpdate</button>
  <button type="reset" class="btn btn-primary cancel">Reset</button>
          </form>
          
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
              <table class="table table-bordered" id="supplierLocationTable">
                <thead>
                    <tr>
                    <th>View</th>
                    <th>Supplier</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Pincode</th>
                    <th>Supplier LOC Phone</th>
                    <th>Contact No.</th>
                    <th>Contact Name</th>
                    <th>Acc Pac Code</th>
                    <th>Email ID *</th>
                    <th>Active</th>
                    <th>Tools</th>
                   </tr>
                </thead>
                <tbody>
                   
                    
                </tbody>
                <!--<tfoot>-->
                <!--    <tr>-->
                <!--        <th>View</th>-->
                <!--        <th>Manufacturer</th>-->
                <!--        <th>Model</th>-->
                <!--        <th>Tyre Size</th>-->
                <!--        <th>Active</th>-->
                <!--        <th>Tools</th>-->
                <!--    </tr>-->
                <!--</tfoot>-->
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
   
  </div><!--End wrapper-->
  
