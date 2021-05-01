<!-- Start wrapper-->
 <div id="wrapper">
 
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
        <div class="row pt-2 pb-2">
        <div class="col-sm-12">
        <h4 class="page-title">Master Category Schedule</h4>
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">Basic Master-->
<!--</a></li>-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();"> Master Category Schedule</a></li>-->
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
              <select id="carCategoryId" class="form-control">
              <option value="">Car Category</option>
              </select>
           </div>
           
           <div class="form-group col-md-3">
              <select id="serviceNameId" class="form-control">
              <option value="">Service Name</option>
              </select>
           </div>
           
           <div class="form-group col-md-3">
              <input type="text" class="form-control" id="price" placeholder="Price">
           </div>
           
           <div class="form-group col-md-3">
              <input type="text" class="form-control" id="percentage" placeholder="Percentage">
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
  <button type="submit" class="btn btn-primary save"onclick="carCategoryServCosttCreate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspSave</button>
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
          <table class="table table-bordered" id="carCategoryServCostTable">
  <thead>
    <tr>
      <th scope="col">View</th>
      <th scope="col">Category Name</th>
      <th scope="col">Service Name</th>
      <th scope="col">Price</th>
      <th scope="col">Percentage</th>
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