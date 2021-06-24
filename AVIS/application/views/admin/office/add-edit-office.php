<!-- Start wrapper-->
 <div id="wrapper">

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
    
      
    <div class="row pt-2 pb-2">
        <div class="col-sm-12">
        <h4 class="page-title">Avis Office</h4>

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
            <input type="text" class="form-control" id="officeNameId" placeholder="Office Name" >
           </div>
           
             <div class="form-group col-md-3">
            
             <input type="text" class="form-control" id="officeaddressId" placeholder="Address">
            </div>
            <div class="form-group col-md-3">
            
             <input type="text" class="form-control" id="officepincode" placeholder="Pin code">
            </div>
             <div class="form-group col-md-3" style="position:relative">
             <input class="form-control" type="text" id="officecity" name="officecity" placeholder="City">
            </div>
             <div class="form-group col-md-3">
            <input type="text" class="form-control" id="officestate" placeholder="State">
            </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="officeCountry" placeholder="Country">
            </div>
           
            <div class="form-group col-md-3">
            
             <input type="text" class="form-control" id="officeGst" placeholder="GSTN">
            </div>
            <div class="form-group col-md-3">
            
             <input type="text" class="form-control" id="officePan" placeholder="Pan Number ">
            </div>
           <input type="hidden" id="officeId">
        </div>
         
          </div>
          
            <div class="buttondd" style="text-align: right;">
              <button type="button" class="btn btn-primary save" onclick="officeCreates();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspSave</button>
              <button type="button" class="btn btn-primary save" onclick="officeUpdate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspUpdate</button>
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
      					<table class="table table-bordered" id="officeTable">
      						<thead>
      							<tr>
      								<th width="100">View</th>
      								<th width="94">Office Name</th>
      								<th width="305">Office Address</th>
      								<th width="94">Pin Code</th>
      								<th width="305">City</th>
      								<th width="94">State</th>
      								<th width="305">Country</th>
      								<th width="94">gst In</th>
      								<th width="305">Pan Number</th>
      								<th width="134">Active</th>
      								<th width="311">Tools</th>
      							</tr>
      						</thead>
      						<tbody>
      						</tbody>
      					</table>
      				</div>
      			</div>
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