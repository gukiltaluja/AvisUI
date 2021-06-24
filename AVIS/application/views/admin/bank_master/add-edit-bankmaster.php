<!-- Start wrapper-->
 <div id="wrapper">

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
    
    <div class="row pt-2 pb-2">
        <div class="col-sm-12">
        <h4 class="page-title">Bank Master</h4>

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
            <input type="text" class="form-control" id="inputCity" placeholder="City Name" >
           </div>
           
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="inputState" placeholder="State Name" disabled>
           </div>     
                 
        <!--   <div class="form-group col-md-3">-->
        <!--    <select id="inputState" class="form-control">-->
        <!--      <option value="">State Name</option>-->
        <!--        <option></option>-->
        <!--        <option></option>-->
        <!--        </select>-->
        <!--   </div>-->
           
        <!--<div class="form-group col-md-3">-->
        <!--    <select id="inputCity" class="form-control">-->
        <!--      <option value="">City Name</option>-->
        <!--    <option></option>-->
        <!--    <option></option>-->
        <!--    </select>-->
        <!--</div>-->

            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="bankName" placeholder="Bank Name">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="bankBranch" placeholder="Bank Branch">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="accountNumber" placeholder="Account No">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="ifscCode" placeholder="IFSC Code">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="rtgsCode" placeholder="RTGS Code">
           </div>
            <input type="hidden" id="bankId">
           
           <div class="form-group col-md-12">
        <div class="form-check padd mb-2">
                <input type="checkbox" class="form-check-input" id="check2" value="">
                <label class="form-check-label" for="check2">Active</label>
                </div>
           </div>
        </div>
         
          </div>
          
            <div class="buttondd" style="text-align: right;">
              <button type="button" class="btn btn-primary save" onclick="bankMasterCreate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspSave</button>
              <button type="button" class="btn btn-primary save" onclick="bankUpdate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspUpdate</button>
              <button type="reset" class="btn btn-primary cancel">Reset</button>

          
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
              <div class="table-responsive">
              <table class="table table-bordered" id="bankMasterTable">
                <thead>
                     <tr>
                      <th width="100">View</th>
                        <th width="94">City</th>
                        <th width="305">Bank Name</th>
                        <th width="384">Bank Branch</th>
                        <th width="384">Acc. No.</th>
                        <th width="384">IFSC Code</th>
                        <th width="384">RTGS Code</th>
                        <th width="134">Active</th>
                        <th width="311">Tools</th>
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
   
  </div><!--End wrapper-->