<style>
  .table-responsive{
    width: 100% !important;
  }
  .table{
    font-size: 12px;
  }
</style>
<!-- Start wrapper-->
 <div id="wrapper">
 <div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
      
    <div class="row pt-2 pb-2">
        <div class="col-sm-12">
        <h4 class="page-title">Master Variant Details</h4>
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
            <input type="text" class="form-control" id="modelName" placeholder="Model Name">
           </div>
           
          <div class="form-group col-md-3">
            <input type="text" class="form-control" id="manuName" placeholder="Manufacturer Name" disabled>
          <!-- <select id="manuName" class="form-control">
          <option>Manufacturer Name</option>
          <option></option>
          <option></option>
          <option></option>
          <option></option>
          </select> -->
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="variant" placeholder="Variant">
           </div>
         <input type="hidden" id="variantDisplayName">
          
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="cc" placeholder="Engine CC">
           </div>
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="seatCap" placeholder="Seating Capacity">
           </div>

               <div class="form-group col-md-3">
            <select id="fuelType" class="form-control">
            <option>Fuel Type</option>
          </select>
           </div>
             <div class="form-group col-md-3">
          <select id="segment" class="form-control">
          <option value="">Vehicle Segment</option>
          </select>
           </div>
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="manuWarrenty" placeholder="Manufacturer Warrenty">
           </div>
          
          <div class="form-group col-md-3">
          <select id="fttype" class="form-control">
          <option>Fuel Tank Type</option>
          
          </select>
           </div>
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="maxTenure" placeholder="Max Tenure">
           </div>
           <div class="form-group col-md-3">
               <input type="text"  class="form-control" id="Features" placeholder="Features" />
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="rvCor" placeholder="RV Correction (Percentage)">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="rrmtb" placeholder="RMTB Correction (rs per km)">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="fuelEff" placeholder="Fuel Efficiency">
           </div>
           <div class="form-group col-md-3">
             <input type="text" class="form-control" id="gstCess" placeholder="Category GST Cess"> 
          <!-- <select id="gstCess" class="form-control">
          <option>Category GST Cess</option>
          <option></option>
          <option></option>
          <option></option>
          <option></option>
          </select> -->
           </div>
            <div class="form-group col-md-3">
          <select id="VehType" class="form-control">
          <option>Usage Type</option>
          <!-- <option></option>
          <option></option>
          <option></option>
          <option></option> -->
          </select>
           </div>
           <div class="form-group col-md-3">
            <select id="transmission" class="form-control">
                <option>Transmission</option>
            </select>
           </div>
           <div class="form-group col-md-3">
            <select id="emission" class="form-control">
                <option>Emission</option>
            </select>
           </div>
            <div class="form-group col-md-3">
          <select id="nCap" class="form-control">
                <option>N-Cap</option>
        
          </select>
           </div>
            <input type="hidden" id="variantId">
            <input type="hidden" id="modelId">
            <input type="hidden" id="manufactureId">
           <div class="form-group col-md-12">
        <div class="form-check padd mb-2">
                <input type="checkbox" class="form-check-input" id="status" value="">
                <label class="form-check-label" for="status">Active</label>
                </div>
           </div>
        </div>
          </form>
          </div>
           <div class="buttondd" style="text-align: right;">
  <button type="submit" class="btn btn-primary save" onclick = "vehvariantCreate()"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspSave</button>
  <button type="submit" class="btn btn-primary save" onclick = "vehvariantUpdate()"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspUpdate</button>
  <button type="submit" class="btn btn-primary cancel">Reset</button>

          
      </div>
         </div>
         </div>
       </div>

      </div><!--End Row-->
       
                  <div class="row">
            <div class="col-md-12"> 
               <div class="card">
                <div class="card-body">
                <table class="table table-bordered table-responsive" id="variantTable">
                  <thead>
                    <tr>
                    <th width="100"><i class="fa fa-stop-circle-o" aria-hidden="true"></i></th>
                    <th scope="col">Manufacturer, Variant, Model</th>
                    <th scope="col">Car Category</th>
                    <th scope="col">Manufacturer Warranty</th>
                    <th scope="col">Seating Capacity</th>
                    <th scope="col">Category GST Cess</th>
                    <th scope="col">Management Fees</th>
                    <th scope="col">Engine CC</th>
                    <th scope="col">Fuel Type</th>
                    <th scope="col">Fuel Tank Type</th>
                    <th scope="col">Vehicle Segment</th>
                    <th scope="col">Insurance Company</th>
                    <th scope="col">Replacement Car Category</th>
                    <th scope="col">Hsn Code</th>
                    <th scope="col">Sac Code</th>
                    <th scope="col">Launch Year</th>
                    <th scope="col">Ncap</th>
                    <th scope="col">Max Tenure</th>
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