<!-- Start wrapper-->
 <div id="wrapper">
 
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
    
      
    <div class="row pt-2 pb-2">
        <div class="col-sm-12">
        <h4 class="page-title">Master Service </h4>
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">Basic Master-->
<!--</a></li>-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();"> Master Service  </a></li>-->
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
            <input type="text" class="form-control" id="insurance_company_name" placeholder="Service Name">
           </div>
           
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="insurance_company_name" placeholder="Services Description">
           </div>
           
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="accpacServiceCode" placeholder="Accpac Service Code">
           </div>
        
        <!--    <div class="form-group col-md-12">-->
        <!--<div class="form-check padd mb-2">-->
        <!--        <input type="checkbox" class="form-check-input" id="accpacServiceCode" value="1">-->
        <!--        <label class="form-check-label" for="check2">Special Services</label>-->
        <!--        </div>-->
        <!--   </div>-->
        
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
  <button type="submit" class="btn btn-primary save" onclick="serviceNameCreate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspSave</button>
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
              <table id="serviceNameTable" class="table table-bordered">
                <thead>
                     <tr>
                        <th width="443"><i class="fa fa-stop-circle-o" aria-hidden="true"></i></th>
                        <th width="443">View Service</th>
                        <th width="65">Tools</th>
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