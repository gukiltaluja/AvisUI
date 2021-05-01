 

 <!-- Start wrapper-->
 <div id="wrapper">
 

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
    
      
    <div class="row pt-2 pb-2">
        <div class="col-sm-12">
        <h4 class="page-title">Car Price</h4>
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">Basic Master-->
<!--</a></li>-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">Car Price</a></li>-->
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
                <input type="text" class="form-control" id="modelName" placeholder="Model Name">
              </div>

          <div class="form-group col-md-3">
              <input type="text" class="form-control" id="manuName" placeholder="Manufacturar Name" disabled>
           </div>
           
           <div class="form-group col-md-3">
            <select id="variantId" class="form-control">
              <option>Variant</option>
        <option></option>
        <option></option>
        </select>
           </div>
           
           <div class="form-group col-md-3">
            <select id="cityId" class="form-control">
              <option>City</option>
        <option></option>
        <option></option>
        </select>
           </div>
           
           <div class="form-group col-md-3">
            <select id="colorCodeId" class="form-control">
              <option>Color</option>
        <option></option>
        <option></option>
        </select>
           </div>
           
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="exShowroomPrice" placeholder="Ex Showroom Price">
           </div>
           
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="availableDiscount" placeholder="Available Discount">
           </div>
           
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="roadTaxPrivate" placeholder="Road Tax Private">
           </div>

           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="roadTaxCommercial" placeholder="Road Tax Commercial Initial">
           </div>
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="roadTaxCommercial2" placeholder="Road Tax Commercial Second Yr">
           </div>
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="roadTaxCommercial3" placeholder="Road Tax Commercial Third Yr">
           </div>
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="roadTaxCommercial4" placeholder="Road Tax Commercial Forth Yr">
           </div>
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="roadTaxCommercial5" placeholder="Road Tax Commercial Fifth Yr">
           </div>

            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="priceValidDays" placeholder="Price Valid Days">
           </div>
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="modelYear" placeholder="Model Year">
           </div>
           <div class="form-group col-md-6">
             <textarea class="form-control" id="intColorDesc1" name="val-suggestions" rows="5" placeholder="Internal Color Description"></textarea>
           </div>
           <div class="form-group col-md-6">
             <textarea class="form-control" id="intColorPrice" name="val-suggestions" rows="5" placeholder="Price"></textarea>
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
  <button type="submit" class="btn btn-primary save" onclick="carpriceCreatess();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspSave</button>
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
              <table class="table table-bordered" id="tyretable">
                <thead>
                    <tr>
                        <th>View</th>
                        <th>Manufacturer/Model</th>
                        <th>Tyre Size</th>
                        <th>Active</th>
                        <th>Tools</th>
                    </tr>
                </thead>
                <tbody></tbody>
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
