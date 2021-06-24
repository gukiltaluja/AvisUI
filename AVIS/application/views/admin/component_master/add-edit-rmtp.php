 
 
<!-- Start wrapper-->
 <div id="wrapper">
  
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
    
      
    <div class="row pt-2 pb-2">
        <div class="col-sm-12">
        <h4 class="page-title">RMTB</h4>
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">Basic Master-->
<!--</a></li>-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">RMTB</a></li>-->
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
           
        <!--   <div class="form-group col-md-3">-->
        <!--    <select id="modelName" class="form-control">-->
        <!--      <option>Model Name</option>-->
        <!--<option></option>-->
        <!--<option></option>-->
        <!--</select>-->
        <!--   </div>-->
           
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="modelName" placeholder="Model Name *">
           </div>
           
           <div class="form-group col-md-3">
               <input type="text" class="form-control" id="manuName" placeholder="Manufacturer Name *" disabled>
            
           </div>
           
           <div class="form-group col-md-3">
           <input type="text" class="form-control" id="rmtbup" placeholder="RMTB UP *">
           </div>
           
           <div class="form-group col-md-3">
           <input type="text" class="form-control" id="rmtbRight" placeholder="RMTB Right">
           </div>
           <div class="form-group col-md-3">
           <input type="text" class="form-control" id="rmtbDown" placeholder="RMTB Down ">
           </div>
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="months12" placeholder="12 Months 20000 KM (rs per KM) *">
           </div>
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="months24" placeholder="24 Months 40000 KM (rs per KM)">
           </div>
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="months36" placeholder="36 Months 60000 KM (rs per KM)">
           </div>

           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="months48" placeholder="48 Months 80000 KM (rs per KM)">
           </div>
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="months60" placeholder="60 Months 100000 KM (rs per KM)">
           </div>
           
           <div class="form-group col-md-12">
        <div class="form-check padd mb-2">
                <input type="checkbox" class="form-check-input" id="check2" value="">
                <label class="form-check-label" for="check2">Active</label>
                </div>
           </div>
        </div>
          </form>
          </div>
          <div class="buttondd" style="text-align: right;">
  <button type="submit" class="btn btn-primary save" onclick = "rmtbCreate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspSave</button>
  <button type="submit" class="btn btn-primary save" onclick = "rmtbUpdate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspUpdate</button>
  <button type="submit" class="btn btn-primary cancel">Reset</button>

          
      </div>
         </div>
         </div>
       </div>

      </div>
        
        <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
              <table id="rmtbTable" class="table table-bordered">
                <thead>
                    <tr>
                         <th>View</td>
                        <th>Manufacturer Name</th>
                        <th>Model</th>
                        <th>Action</th>
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
