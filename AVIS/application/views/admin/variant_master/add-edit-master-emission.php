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
        <h4 class="page-title">Emission</h4>
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
                        <input type="text" class="form-control" id="emission" placeholder="Emission">
                    </div>
                    <input type="hidden" id="emissionId">
                    <div class="form-group col-md-12">
                        <div class="form-check padd mb-2">
                            <input type="checkbox" class="form-check-input" id="status" value="">
                            <label class="form-check-label" for="status">Active</label>
                        </div>
                    </div>
                     </div>
                    <div class="buttondd" style="text-align: right;">
                      <button type="button" class="btn btn-primary save" onclick="emissionCreate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspSave</button>
                      <button type="button" class="btn btn-primary save" onclick="emissionUpdate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspUpdate</button>
                      <button type="reset" class="btn btn-primary cancel">Reset</button>
                    </div>
               
          </form>
          </div>
         </div>
         </div>
       </div>

      </div><!--End Row-->
       
                  <div class="row">
            <div class="col-md-12"> 
               <div class="card">
                <div class="card-body">
                    
            <table class="table table-bordered table-responsive" id="emissionTable">
                <thead>
                    <tr>
                      <th width="100"><i class="fa fa-stop-circle-o" aria-hidden="true"></i></th>
                        <th width="800">Emission</th>
                        <th width="100">Status</th>
                        <th width="100">Tool</th>
                    </tr>
                  </thead>
                <tbody></tbody>
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