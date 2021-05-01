

 <!-- Start wrapper-->
 <div id="wrapper">
 
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
    
      
    <div class="row pt-2 pb-2">
        <div class="col-sm-12">
        <h4 class="page-title">Master City</h4>
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">Basic Master-->
<!--</a></li>-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">Master City</a></li>-->
<!--         </ol>-->
     </div>
     </div>

     <div class="row">
      <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
              <div class="buttondd" style="text-align: right;">
  <button type="submit" class="btn btn-primary save" onclick="cityCreate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspSave</button>
  <button type="submit" class="btn btn-primary cancel">Reset</button>

          
      </div>
           <!-- <div class="card-header text-uppercase">PRINCIPAL</div> -->
           <div class="pt-4">
            <form>
             <div class="row">
           <div class="form-group col-md-4">
            <select id="inputState" class="form-control">
              <option value="">State Name </option>
        <option></option>
        <option></option>
        </select>
           </div>
           <div class="form-group col-md-4">
            <input type="text" class="form-control" id="cityName" placeholder="City Name">
           </div>
           <div class="form-group col-md-4">
            <input type="text" class="form-control" id="cityCode" placeholder="City Code">
           </div>
                     
          <div class="form-group col-md-4">
            <input type="text" class="form-control" id="rvCorrection" placeholder="RV Correction (decimal)">
           </div>
           <div class="form-group col-md-4">
            <input type="text" class="form-control" id="rmtbCorrection" placeholder="RMTB Correction (rs per km)">
           </div>
           <div class="form-group col-md-4">
            <input type="text" class="form-control" id="insuranceZone" placeholder="Insurance Zone">
           </div>
           <div class="form-group col-md-4">
        <div class="form-check padd mb-2">
                <input type="checkbox" class="form-check-input" id="octApplication" value="1">
                <label class="form-check-label" for="check2">Octrol Applicable</label>
                </div>
           </div>

           <div class="form-group col-md-4">
            <input type="text" class="form-control" id="octPercent" placeholder="Octrol Percent">
           </div>

           <div class="form-group col-md-4">
            <input type="text" class="form-control" id="pinCode" placeholder="Pin Code">
           </div>

           <div class="form-group col-md-4">
            <input type="text" class="form-control" id="emissionNorms" placeholder="Emission Norms">
           </div>

            <div class="form-group col-md-4">
            <input type="text" class="form-control" id="registrationRules" placeholder="Registration Rules">
           </div>

            <div class="form-group col-md-4">
            <input type="text" class="form-control" id="contentBoundry" placeholder="Contracted Boundary">
           </div>

            <div class="form-group col-md-4">
            <select id="inputRegion" class="form-control">
              <option>Region </option>
        <option></option>
        <option></option>
        </select>
           </div>
           <div class="form-group col-md-4">
        <div class="form-check padd mb-2">
                <input type="checkbox" class="form-check-input" id="stateCapital" value="">
                <label class="form-check-label" for="check2">State Capital</label>
                </div>
           </div>


           <div class="form-group col-md-6">
        <div class="form-check padd mb-2">
                <input type="checkbox" class="form-check-input" id="check2" value="1">
                <label class="form-check-label" for="check2">Active</label>
                </div>
           </div>
        </div>
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
              <table class="table table-bordered" id="cityTable">
                <thead>
                    <tr>
                        <th>View</th>
                        <th>City</th>
                        <th>Month 12 Normal</th>
                        <th>Month 12 Extensive</th>
                        <th>Active</th>
                        <th>Tools</th>
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
  
