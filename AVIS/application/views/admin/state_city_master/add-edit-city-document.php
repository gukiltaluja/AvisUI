

 
<!-- Start wrapper-->
 <div id="wrapper">
<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!--Start Dashboard Content-->
      
    <div class="row pt-2 pb-2">
        <div class="col-sm-12">
        <h4 class="page-title">City Document</h4>
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">Basic Master-->
<!--</a></li>-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">City Document</a></li>-->
<!--         </ol>-->
     </div>
     </div>

     <div class="row">
      <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
              <div class="buttondd" style="text-align: right;">
             <button type="submit" class="btn btn-primary save" onclick="citydocumentCreate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspSave</button>
             <button type="submit" class="btn btn-primary save" onclick="cityDocumentUpdate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspUpdate</button>
             <button type="submit" class="btn btn-primary cancel">Reset</button>
      </div>
           <!-- <div class="card-header text-uppercase">PRINCIPAL</div> -->
           <div class="pt-4">
            <form>
             <div class="row">
               
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="inputCity" placeholder="City Name" >
           </div>
           
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="inputState" placeholder="State Name" disabled>
           </div>
           
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="documentName" placeholder="Document Name">
           </div>
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="documentDetails" placeholder="Document Detail">
           </div>
           <input type="hidden" id="cityDocumentId">
</div>
<h4 style="padding-top: 10px; padding-bottom: 10px; font-size: 20px;">Attach Document </h4>
<div class="row">

                                        <!-- <div class="input-group mb-3 col-md-3">-->
                                        <!--    <input type='file' onchange="readURL(this);" />-->
                                        <!--    <img id="blah" src="<?php echo ASSET_URL; ?>images/img_avatar.png" alt="your image" style="width: 100%;">-->
                                        <!--</div>-->
                                        <!--<div class="input-group mb-3 col-md-3">-->
                                        <!--    <input type='file' onchange="readURL(this);" />-->
                                        <!--    <img id="blah" src="<?php echo ASSET_URL; ?>images/img_avatar.png" alt="your image" style="width: 100%;">-->
                                        <!--</div>-->
                                        <!--<div class="input-group mb-3 col-md-3">-->
                                        <!--    <input type='file' onchange="readURL(this);" />-->
                                        <!--    <img id="blah" src="<?php echo ASSET_URL; ?>images/img_avatar.png" alt="your image" style="width: 100%;">-->
                                        <!--</div>-->
                                        <!--<div class="input-group mb-3 col-md-3">-->
                                        <!--    <input type='file' onchange="readURL(this);" />-->
                                        <!--    <img id="blah" src="<?php echo ASSET_URL; ?>images/img_avatar.png" alt="your image" style="width: 100%;">-->
                                        <!--</div>-->
                                        <!--<div class="input-group mb-3 col-md-3">-->
                                        <!--    <input type='file' onchange="readURL(this);" />-->
                                        <!--    <img id="blah" src="<?php echo ASSET_URL; ?>images/img_avatar.png" alt="your image" style="width: 100%;">-->
                                        <!--</div>-->
                                        
           <div class="form-group col-md-12">
        <div class="form-check padd mb-2">
                <input type="checkbox" class="form-check-input" id="check2" value="">
                <label class="form-check-label" for="check2">Active</label>
                </div>
           </div>
        </div>
          </form>
          </div>
         </div>
         </div>
       </div>
      </div>
      <!--End Row-->
     
       


        <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
              <table id="citydocumentTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>View</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Document Name</th>
                        <th>Document Details</th>
                        <th>Active</th>
                        <th>Tools</th>
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
  
