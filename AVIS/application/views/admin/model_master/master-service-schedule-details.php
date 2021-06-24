<!-- Start wrapper-->
 <div id="wrapper">
 
 <div class="clearfix"></div>  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!--Start Dashboard Content-->
    <div class="row pt-2 pb-2">
        <div class="col-sm-12">
        <h4 class="page-title">Master Service Schedule</h4>
        <!--<ol class="breadcrumb">-->
        <!--    <li class="breadcrumb-item"><a href="javaScript:void();">Basic Master-->
        <!--    </a></li>-->
        <!--    <li class="breadcrumb-item"><a href="javaScript:void();">Master Service Schedule</a></li>-->
        <!-- </ol>-->
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
           </div>
           
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="warrantyInYears" placeholder="Warranty in Years">
           </div>
           
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="warrantyInKm" placeholder="Warranty In KM">
           </div>
           
            <div class="form-group col-md-3">
              <input id="noOfFreeServices" class="form-control" placeholder="No of Free Service" / >
           </div>
          
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="paidFreeServiceMonths" placeholder="Paid Service Month">
           </div>
           
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="paidFreeServiceKm" placeholder="Paid Service KM">
           </div>
           
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="InterestOnAdw" placeholder="Interest On ADW">
           </div>
          
            <input type="hidden" id="serviceScheduleId">
            <input type="hidden" id="manufactureId">
            <input type="hidden" id="modelId">
           <div class="form-group col-md-12">
            <div class="form-check padd mb-2">
                <input type="checkbox" class="form-check-input" id="check2" value="1">
                <label class="form-check-label" for="check2">Active</label>
                </div>
           </div>
           
        </div>
         
          </div>
          <div class="buttondd" style="text-align: right;">
  <button type="button" class="btn btn-primary save" onclick="serviceScheduleCreate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspSave</button>
  <button type="button" class="btn btn-primary save" onclick="serviceScheduleUpdate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspUpdate</button>
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
              <table id="serviceScheduleTable" class="table table-bordered">
                <thead>
                    <tr>
              <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;View &quot;}">View</th>
                <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Manufacture&quot;}">Model/Manufacture</th>
                <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Model&quot;}">Warrenty in Years</th>
                <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Warranty In Months&quot;}">Warranty In KM</th>
                <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Warranty In Months&quot;}">No of Free Service</th>
                <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Warranty In Months&quot;}">Paid Service Month</th>
                <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Warranty In Months&quot;}">Paid Service KM</th>
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
    
  </div><!--End wrapper-->