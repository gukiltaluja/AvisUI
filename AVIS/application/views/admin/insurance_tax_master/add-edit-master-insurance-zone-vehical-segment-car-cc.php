

<!-- Start wrapper-->
 <div id="wrapper">
 
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
    <div class="row pt-2 pb-2">
        <div class="col-sm-12">
        <h4 class="page-title">Master Insurance Zone Vehicle Segment Car CC</h4>
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">Basic Master-->
<!--</a></li>-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">Master Insurance Zone Vehicle Segment Car CC</a></li>-->
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
             <select id="insuranceZone" class="form-control">
              <option>Insurance Zone Name</option>
        </select>
           </div>
           
        <!--    <div class="form-group col-md-3">-->
        <!--     <select id="inputState" class="form-control">-->
        <!--      <option>Vehicle Segment</option>-->
        <!--<option></option>-->
        <!--<option></option>-->
        <!--</select>-->
        <!--   </div>-->
           
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="vehicleSegmentName" placeholder="Vehicle Segment Name *">
           </div>
           
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="input-1" placeholder="Car CC Form">
           </div>
           
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="input-1" placeholder="Car CC To">
           </div>
           
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="input-1" placeholder="OD Percent">
           </div>
           <input type="hidden" id="vehicalSegmentId">
           
                     
           
           <div class="form-group col-md-12">
        <div class="form-check padd mb-2">
                <input type="checkbox" class="form-check-input" id="check2" value="">
                <label class="form-check-label" for="check2">Active</label>
                </div>
           </div>
        </div>
         
          </div>
            <div class="buttondd" style="text-align: right;">
              <button type="buttton" class="btn btn-primary save" onclick="vehiclesegmentCreate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspSave</button>
              <button type="buttton" class="btn btn-primary save" onclick="vehiclesegmentUpdate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspUpdate</button>
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
              <table class="table table-bordered" id="vehiclesegmentTable">
                <thead>
                    <tr>
                       <th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;View &quot;}">View</th>
<th data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Insurance Zone Name&quot;}">Insurance Zone Name</th>
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
  
