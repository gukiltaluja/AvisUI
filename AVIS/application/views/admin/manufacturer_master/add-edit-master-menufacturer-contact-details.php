
<!-- Start wrapper-->
 <div id="wrapper">
 
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!--Start Dashboard Content-->
    <div class="row pt-2 pb-2">
        <div class="col-sm-12">
        <h4 class="page-title">Master Manufacturer Contact Details</h4>
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
                <select id="manuName"  class="form-control">
                    <option>Select Manufacturer</option>
                </select>
             
            </div>
            
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="contactName" placeholder="Contact Name">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="phone1" placeholder="Phone 1">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="phone2" placeholder="Phone 2">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="mobile" placeholder="Mobile">
           </div>
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="email" placeholder="Email Id">
           </div>
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="designation" placeholder="Designation">
           </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="region" placeholder="Region">
           </div>
         <input type="hidden" id="manufactureContactId">
           <div class="form-group col-md-12">
            <div class="form-check padd mb-2">
                    <input type="checkbox" class="form-check-input" id="check2" value="">
                    <label class="form-check-label" for="check2">Active</label>
            </div>
           </div>
        </div>
          
          </div>
            <div class="buttondd" style="text-align: right;">
              <button type="button" class="btn btn-primary save" onclick="manufacturerContactCreates();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspSave</button>
              <button type="button" class="btn btn-primary save" onclick="manufacturerContactUpdate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspUpdate</button>
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
          <table class="table table-bordered table-responsive" id="manufacturerContacttable" style="width:100%;">
          <thead>
            <tr>
              <th>View</th>
              <th>Manufacturer</th>
              <th>Contact Name</th>
              <th>Phone 1</th>
              <th>Phone 2</th>
              <th>Mobile</th>
              <th>Email</th>
              <th>Designation</th>
              <th>Region</th>
              <th>Active</th>
              <th>Tools</th>
            </tr>
          </thead>
  <tbody>
    <!--<tr>-->
    <!--  <th scope="row"><i class="fa fa-stop-circle-o" aria-hidden="true"></i></th>-->
    <!--  <td>Audi india</td>-->
    <!--  <td>A3 Diesel</td>-->
    <!--  <td>225 50 R17</td>-->
    <!--   <td>True</td>-->
    <!--  <td><i class="fa fa-plus-square" aria-hidden="true"></i>   <i class="fa fa-times" aria-hidden="true"></i></td>-->
    <!--</tr>-->
    <!--<tr>-->
    <!-- <th scope="row"><i class="fa fa-stop-circle-o" aria-hidden="true"></i></th>-->
    <!--  <td>Audi india</td>-->
    <!--  <td>A3 Diesel</td>-->
    <!--  <td>225 50 R17</td>-->
    <!--   <td>True</td>-->
    <!--  <td><i class="fa fa-plus-square" aria-hidden="true"></i>   <i class="fa fa-times" aria-hidden="true"></i></td>-->
    <!--</tr>-->
    <!--<tr>-->
    <!-- <th scope="row"><i class="fa fa-stop-circle-o" aria-hidden="true"></i></th>-->
    <!--  <td>Audi india</td>-->
    <!--  <td>A3 Diesel</td>-->
    <!--  <td>225 50 R17</td>-->
    <!--   <td>True</td>-->
    <!--  <td><i class="fa fa-plus-square" aria-hidden="true"></i>   <i class="fa fa-times" aria-hidden="true"></i></td>-->
    <!--</tr>-->
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
  
