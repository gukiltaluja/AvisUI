<!-- Start wrapper-->
 <div id="wrapper">
 <div class="clearfix"></div>  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!--Start Dashboard Content-->   
      
    <div class="row pt-2 pb-2">
        <div class="col-sm-12">
        <h4 class="page-title">Master Model</h4>
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">Basic Master-->
<!--</a></li>-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">Master Model</a></li>-->
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
                <select id="manufacturerId" class="form-control">
                    <option value="">Select Manufacturer </option>
                 </select>
            </div>
            
            <div class="form-group col-md-3">
                <input type="text" class="form-control" id="modelName" placeholder="Model Name">
            </div>
         
           
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="managementFees" placeholder="Management Fees">
           </div>
           
            <div class="form-group col-md-3">
              <select id="carCategoryId" class="form-control carCategoryClass">
              <option value="">Car Category</option>
              </select>
           </div>
           
            <div class="form-group col-md-3">
          <select id="insuranceCompanyId" class="form-control">
          <option value="">Insurance Company Name</option>
          </select>
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="insuranceMaxDiscountPercent" placeholder="Insurance Max Discount in Percentage(%)">
           </div>
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="adwPercentage" placeholder="ADW in Percentage(%)">
           </div>
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="interestOnAdw" placeholder="Interest On ADW in Percentage(%)">
           </div>
           
            <div class="form-group col-md-3">
              <select id="replacementCarCategoryId" class="form-control carCategoryClass">
              <option value="">Replacement Car Category</option>
              </select>
           </div>
           
           
           
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="hsnCode" placeholder="HSN Code">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="sacCode" placeholder="SAC Code">
           </div>
            
             <div class="form-group col-md-3">
            <input type="text" class="form-control" id="launchYear" placeholder="Launch Year">
           </div>
            <div class="form-group col-md-3">
            <select id="emission" class="form-control">
                <option value="">Emission</option>
            </select>
           </div>
           
        <div class="form-group col-md-3">
          <select id="nCap" class="form-control">
          <option value="">N-Cap</option>
          </select>
        </div>
            <input type="hidden" id="modelId">
            
           <div class="form-group col-md-12">
        <div class="form-check padd mb-2">
                <input type="checkbox" class="form-check-input" id="check2" value="">
                <label class="form-check-label" for="check2">Active</label>
                </div>
           </div>
        </div>
        
          </div>
          <div class="buttondd" style="text-align: right;">
  <button type="button" class="btn btn-primary save" onclick="modelsCreate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspSave</button>
  <button type="button" class="btn btn-primary save" onclick="modelsUpdate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspUpdate</button>
  <button type="reset" class="btn btn-primary cancel">Reset</button>

          
      </div>
        </form>
         </div>
         </div>
       </div>

      </div><!--End Row-->

    <div class="row">
        <div class="col-md-12"> 
           <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                <table  class="table table-bordered" id="modelsTable">
                      <thead>
                        <tr>
                          <th scope="col">View</th>
                          <th scope="col">Menufacturer</th>
                          <th scope="col">Model</th>
                          <th scope="col">Management Fees</th>
                          <th scope="col">Car Category</th>
                          <th scope="col">Insurance Company</th>
                          <th scope="col">Insurance Max Discount</th>
                          <th scope="col">ADW</th>
                          <th scope="col">Interest On ADW</th>
                          <th scope="col">Replacement Car Category</th>
                          <th scope="col">HSN Code</th>
                          <th scope="col">SAC Code</th>
                          <th scope="col">Launch Year</th>
                          <th scope="col">Emission</th>
                          <th scope="col">N-Cap</th>
                          <th scope="col">Active</th>
                          <th scope="col">Tools</th>
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