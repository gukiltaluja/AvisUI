

 <!-- Start wrapper-->
 <div id="wrapper">
 
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
    
      
    <div class="row pt-2 pb-2">
        <div class="col-sm-12">
        <h4 class="page-title">Master State</h4>
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">Basic Master-->
<!--</a></li>-->
<!--            <li class="breadcrumb-item"><a href="javaScript:void();">Master State</a></li>-->
<!--         </ol>-->
     </div>
     </div>

     <div class="row">
      <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
              <div class="buttondd" style="text-align: right;">
  <button type="submit" class="btn btn-primary save"onclick="stateCreate();"><i class="fa fa-address-card-o" aria-hidden="true"></i>  &nbsp&nbspSave</button>
  <button type="submit" class="btn btn-primary cancel">Reset</button>

          
      </div>
           <!-- <div class="card-header text-uppercase">PRINCIPAL</div> -->
           <div class="pt-4">
            <form>
             <div class="row">
          
           <div class="form-group col-md-4">
            <input type="text" class="form-control" id="stateName" placeholder="State Name ">
           </div>
           <div class="form-group col-md-4">
            <input type="text" class="form-control" id="vatOnLr" placeholder="GST On LR">
           </div>
           <div class="form-group col-md-4">
            <input type="text" class="form-control" id="serviceTax" placeholder="GSTIN Number">
           </div>
           <div class="form-group col-md-4">
            <input type="text" class="form-control" id="stateAddress" placeholder="State Address">
           </div>
           <!--<div class="form-group col-md-4">-->
           <!-- <input type="text" class="form-control" id="swachhBharatCess" placeholder="Swachh Bharat Cess">-->
           <!--</div>-->
           <!-- <div class="form-group col-md-4">-->
           <!-- <input type="text" class="form-control" id="krishiKalyanCess" placeholder="Krishi Kalyan Cess">-->
           <!--</div>-->
                <div class="form-group col-md-4">
        <div class="form-check padd mb-2">
                <input type="checkbox" class="form-check-input" id="vatInputCredit" value="1">
                <label class="form-check-label" for="check2">GST input credit available</label>
                </div>
           </div>
            <div class="form-group col-md-4">
        <div class="form-check padd mb-2">
                <input type="checkbox" class="form-check-input" id="vatInputCreditPassed" value="1">
                <label class="form-check-label" for="check2">GST input Credit to be Passed</label>
                </div>
           </div>  

           <!--  <div class="form-group col-md-4">-->
           <!-- <input type="text" class="form-control" id="tinNo" placeholder="Tin No">-->
           <!--</div>    -->

            <div class="form-group col-md-4">
            <input type="text" class="form-control" id="lstNo" placeholder="Last Invoice Number">
           </div>  
            <div class="form-group col-md-4">
            <input type="text" class="form-control" id="purchaseVat" placeholder="GST on Purchase">
           </div>
            <div class="form-group col-md-4">
            <input type="text" class="form-control" id="saleVat" placeholder="GST on Sale">
           </div>

           <!-- <div class="form-group col-md-4">-->
           <!-- <input type="text" class="form-control" id="accessiruesVat" placeholder="Accessirues Vat">-->
           <!--</div>-->

            <div class="form-group col-md-4">
            <input type="text" class="form-control" id="invoiceFooter" placeholder="Invoice Footer">
           </div>

               <div class="form-group col-md-4">
            <input type="text" class="form-control" id="sateCode" placeholder="State Code">
           </div>

               <div class="form-group col-md-4">
            <input type="text" class="form-control" id="panNo" placeholder="Pan No">
           </div>

<!--            <div class="form-group col-md-4">-->
<!--            <input type="text" class="form-control" id="vatRegNo" placeholder="Vat Reg No">-->
<!--           </div>-->
           <!--<div class="form-group col-md-4">-->
           <!-- <input type="text" class="form-control" id="serviceTaxRegNo" placeholder="Service tax Reg No">-->
           <!--</div>-->
           <!--<div class="form-group col-md-4">-->
           <!-- <input type="text" class="form-control" id="educationCess" placeholder="Education Cess">-->
           <!--</div>-->
           <!--<div class="form-group col-md-4">-->
           <!-- <input type="text" class="form-control" id="seniorHigherEduCess" placeholder="Senior & Higher Educcation Cess">-->
           <!--</div>-->

        <!--     <div class="form-group col-md-4">-->
        <!--<div class="form-check padd mb-2">-->
        <!--        <input type="checkbox" class="form-check-input" id="tradeCertificate" value="1">-->
        <!--        <label class="form-check-label" for="check2">Trade Certificate</label>-->
        <!--        </div>-->
        <!--   </div>-->
        <!--    <div class="form-group col-md-4">-->
        <!--<div class="form-check padd mb-2">-->
        <!--        <input type="checkbox" class="form-check-input" id="vatOnLr" value="1">-->
        <!--        <label class="form-check-label" for="check2">VAT ON LR</label>-->
        <!--        </div>-->
        <!--   </div>  -->

            <div class="form-group col-md-4">
            <input type="text" class="form-control" id="gstOnLr" placeholder="GST ON LR">
           </div>

            <div class="form-group col-md-4">
            <input type="text" class="form-control" id="gstOnFms" placeholder="GST On FMS">
           </div>


<div class="form-group col-md-4">
            <input type="text" class="form-control" id="gstOnLrElecVehic" placeholder="GST on LR(Electrical Vehicle)">
           </div>

           <!--<div class="form-group col-md-4">-->
           <!-- <input type="text" class="form-control" id="gstnNumber" placeholder="GSTN Number">-->
           <!--</div>-->

            <div class="form-group col-md-4">
        <div class="form-check padd mb-2">
                <input type="checkbox" class="form-check-input" id="unionTerritory" value="1">
                <label class="form-check-label" for="check2">Union Territory</label>
                </div>
           </div>  


           
           <div class="form-group col-md-12">
        <div class="form-check padd mb-2">
                <input type="checkbox" class="form-check-input" id="check2" value="1">
                <label class="form-check-label" for="check2">Active</label>
                </div>
           </div>
        </div>
          </form>
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
              <table class="table table-bordered" id="stateTable">
                <thead>
                    <tr>
                        <th>View</th>
                        <th>State Name</th>
                        <th>VAT On LR</th>
                        <th>Service Tax</th>
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
  
