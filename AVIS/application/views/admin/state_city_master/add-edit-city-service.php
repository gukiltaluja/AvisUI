
<!-- Start wrapper-->
 <div id="wrapper">
 
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
    
      
    <div class="row pt-2 pb-2">
        <div class="col-sm-12">
        <h4 class="page-title">Part</h4>
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">Basic Master-->
<!--</a></li>-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">Part</a></li>-->
<!--         </ol>-->
     </div>
     </div>

     <div class="row">
      <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
              <div class="buttondd" style="text-align: right;">
  <button type="submit" class="btn btn-primary save" onclick="cityServiceCreate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspSave</button>
  <button type="submit" class="btn btn-primary save" onclick="cityServiceUpdate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspUpdate</button>
  <button type="submit" class="btn btn-primary cancel">Reset</button>

      </div>
           <!-- <div class="card-header text-uppercase">PRINCIPAL</div> -->
           <div class="pt-4">
            <form>
             <div class="row">
                
          <div class="form-group col-md-4">
            <input type="text" class="form-control" id="inputCity" placeholder="City Name" >
           </div>
           
          <div class="form-group col-md-4">
            <input type="text" class="form-control" id="inputState" placeholder="State Name" disabled>
           </div>
              
           </div>
           
           <h4 style="padding-top: 10px; padding-bottom:10px; font-size: 20px;"> service name</h4>
            <div class="row" id="serviceNameId"> 
                 </div>
                 <input type="hidden" id="cityServiceId">
                 <input type="hidden" id="cityId">
                 <input type="hidden" id="stateId">
            </div>
      </div>


          </form>
        </div>
    


      </div><!--End Row-->
     
       


        <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
              <table id="cityServiceTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>View</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Service Name</th>
                        <th>Active</th>
                        <th>Tool</th>
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
  
