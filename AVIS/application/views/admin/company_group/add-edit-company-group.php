<!-- Start wrapper-->
 <div id="wrapper">

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
    
      
    <div class="row pt-2 pb-2">
        <div class="col-sm-12">
        <h4 class="page-title">Company Group</h4>

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
                <label for="input-3">Company Group Name</label>
            <input type="text" class="form-control" id="groupNameId" placeholder="Company Group Name" >
           </div>
           
            <div class="form-group col-md-3">
                <label for="input-3">Client Name / Client Id</label>
            <input type="text" class="form-control" id="clientNameId" placeholder="Client Name / Client Id" >
           </div>

            <div class="form-group col-md-3">
                <label for="input-3">Creation Date</label>
            <input type="date" class="form-control" id="bankName" >
           </div>
           
            <div class="form-group col-md-3">
                <label for="input-3"> Modified Date</label>
            <input type="date" class="form-control" id="bankBranch" >
           </div>
           <input type="hidden" id="companyGroupId">

           
        </div>
         
          </div>
          
            <div class="buttondd" style="text-align: right;">
              <button type="button" class="btn btn-primary save" onclick="companyGroupCreates();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspSave</button>
              <button type="button" class="btn btn-primary save" onclick="companyGroupUpdate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspUpdate</button>
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
              <table class="table table-bordered" id="companyGroupTable">
                <thead>
                     <tr>
                      <th width="100">View</th>
                        <th width="94">Company Group</th>
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
      </div>
         
       </div>
        
       
       
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