<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
       <h5 class="logo-text">AVIS</h5>
   </div>
   <ul class="sidebar-menu do-nicescrol">
    <li>
        <a href="<?php echo base_url('/')?>" class="waves-effect">
         <i class="icon-home"></i> <span>Dashboard</span>
        </a>
      </li>
      <!--<li>-->
      <!--   <a href="<?php echo base_url('/')?>" class="waves-effect">-->
      <!--     <i class="icon-layers"></i> <span>Masters</span> <i class="fa fa-angle-left pull-right"></i>-->
      <!--  </a>-->
      <!--  <ul class="sidebar-submenu">-->
      <!--            <li><a href="<?php echo base_url('admin/master/addeditmaster')?>">Client Masters</a></li>-->
      <!--            <li><a href="<?php echo base_url('admin/ordermaster/addeditomaster')?>">Order Masters</a></li>-->
      <!--            <li><a href="<?php echo base_url('admin/delivery/addeditdelivery')?>">Delivery Module</a></li>-->
      <!--  </ul>-->
      <!--</li>-->
      
      
       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-graduation-cap"></i> <span>Master</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
         <ul class="sidebar-submenu">
          <li>
            <a href="javaScript:void();"><i class="fa fa-circle-o"></i> MANUFACTURER  <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="sidebar-submenu">
                             <li><a href="<?php echo base_url('admin/mastermenufacturerdetails/addeditmastermenufacturer')?>"> <i class="fa fa-circle-o"></i> Manufacturer </a></li>
                               <li><a href="<?php echo base_url('admin/mastermenufacturercontact/addeditmastermenufacturerc')?>"><i class="fa fa-circle-o"></i>Manufacture Contact </a></li>           
            </ul>
          </li>
        </ul>
         <ul class="sidebar-submenu">
          <li><a href="javaScript:void();"> </a></li>
          <li>
            <a href="javaScript:void();"><i class="fa fa-circle-o"></i> MODEL  <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="sidebar-submenu">
                             <li><a href="<?php echo base_url('admin/model/addlismodel')?>"><i class="fa fa-circle-o"></i> Model</a></li>
                               <li><a href="<?php echo base_url('admin/serviceschedule/addlisserviceschedule')?>"><i class="fa fa-circle-o"></i> Service Schedule</a></li>    
            </ul>
          </li>
        </ul> <ul class="sidebar-submenu">
          <li><a href="javaScript:void();"> </a></li>
          <li>
            <a href="javaScript:void();"><i class="fa fa-circle-o"></i> VARIANT  <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="sidebar-submenu">
                <li><a href="<?php echo base_url('admin/mastervariantdetails/addeditmastervariant')?>"><i class="fa fa-circle-o"></i> Variant </a></li>           
                <li><a href="<?php echo base_url('admin/mastervariantdetails/addedittransmission')?>"><i class="fa fa-circle-o"></i> Transmission </a></li>           
                <li><a href="<?php echo base_url('admin/mastervariantdetails/addeditemission')?>"><i class="fa fa-circle-o"></i> Emission </a></li>           
                <li><a href="<?php echo base_url('admin/mastervariantdetails/addeditmasterncap')?>"><i class="fa fa-circle-o"></i> N-Cap </a></li>           
            </ul>
          </li>
        </ul>
        <ul class="sidebar-submenu">
          <li><a href="javaScript:void();"> </a></li>
          <li>
            <a href="javaScript:void();"><i class="fa fa-circle-o"></i> COMPONENT  <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="sidebar-submenu">
               <li><a href="<?php echo base_url('admin/tyre/addedittyre')?>">  <i class="fa fa-circle-o"></i> Tyre</a></li>
                            <li><a href="<?php echo base_url('admin/usagetype/addeditusagetype')?>"> <i class="fa fa-circle-o"></i> Usage Type</a></li>
                            <li><a href="<?php echo base_url('admin/carprice/addeditcarprice')?>"> <i class="fa fa-circle-o"></i> Car Price</a></li>
                            <li><a href="<?php echo base_url('admin/part/addeditpart')?>"> <i class="fa fa-circle-o"></i> Part</a></li>
                            <li><a href="<?php echo base_url('admin/parttype/addeditparttype')?>"> <i class="fa fa-circle-o"></i> Part Type</a></li>
                            <li><a href="<?php echo base_url('admin/rv/addeditrv')?>"> <i class="fa fa-circle-o"></i> RV</a></li>
                            <li><a href="<?php echo base_url('admin/rmtp/addeditrmtp')?>"> <i class="fa fa-circle-o"></i> RMTB</a></li>
                            <li><a href="<?php echo base_url('admin/fueltype/addeditfueltype')?>"> <i class="fa fa-circle-o"></i> Fuel Type</a></li>
                            <li><a href="<?php echo base_url('admin/fueltanktype/addeditfueltanktype')?>"> <i class="fa fa-circle-o"></i> Fuel Tank Type</a></li>
                            <li><a href="<?php echo base_url('admin/vehiclesegment/addeditvehiclesegment')?>"> <i class="fa fa-circle-o"></i> Vehicle Segment</a></li>
                            <li><a href="<?php echo base_url('admin/colorcode/addeditcolorcode')?>"> <i class="fa fa-circle-o"></i> Color Code</a></li>
            </ul>
          </li>
          
        </ul>
         
        
         <ul class="sidebar-submenu">
          <li><a href="javaScript:void();"> </a></li>
          <li>
            <a href="javaScript:void();"><i class="fa fa-circle-o"></i> STATE CITY <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="sidebar-submenu">
                             <li><a href="<?php echo base_url('admin/masterstate/addeditstate')?>"><i class="fa fa-circle-o"></i> State</a></li>
                               <li><a href="<?php echo base_url('admin/mastercity/addeditcity')?>"><i class="fa fa-circle-o"></i> City</a></li>   
                               <li><a href="<?php echo base_url('admin/cityunlimited/addeditcityunlimited')?>"><i class="fa fa-circle-o"></i> City Unlimited Usage</a></li>  
                                <li><a href="<?php echo base_url('admin/citydocument/addeditcitydoc')?>"><i class="fa fa-circle-o"></i> City Document</a></li>  
                                <li><a href="<?php echo base_url('admin/cityservice/addeditcityservice')?>"><i class="fa fa-circle-o"></i> City Services</a></li>     
            </ul>
          </li>
        </ul>
       
         <ul class="sidebar-submenu">
          <li><a href="javaScript:void();"> </a></li>
          <li>
            <a href="javaScript:void();"><i class="fa fa-circle-o"></i> SUPPLIER  <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="sidebar-submenu">
                           <li><a href="<?php echo base_url('admin/suppliermastersupplier/addeditsuppliermasters')?>"><i class="fa fa-circle-o"></i>  Supplier</a></li>
                            <li><a href="<?php echo base_url('admin/mastersupplierlocationdetails/addeditmastersupplierlocation')?>"><i class="fa fa-circle-o"></i>  Supplier Location</a></li>
                            <li><a href="<?php echo base_url('admin/mastersuppliertypedetails/addeditmastersuppliertype')?>"><i class="fa fa-circle-o"></i>  Supplier Type</a></li>           
            </ul>
          </li>
        </ul>
        <ul class="sidebar-submenu">
          <li><a href="javaScript:void();"> </a></li>
          <li>
            <a href="javaScript:void();"><i class="fa fa-circle-o"></i> BANK <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="sidebar-submenu">
                            <li><a href="<?php echo base_url('admin/bankmaster/addeditbankmaster')?>"> <i class="fa fa-circle-o"></i> Bank</a></li>           
            </ul>
          </li>
        </ul>
         
        
         
       

       

        
        

        <ul class="sidebar-submenu">
            <li><a href="javaScript:void();"> </a></li>
          <li><a href="<?php echo base_url('admin/office/addlistOffice')?>" style="    font-size: 11px;"><i class="fa fa-circle-o"></i> AVIS OFFICE </a></li>
         
        </ul>
         <ul class="sidebar-submenu">
             <li><a href="javaScript:void();"> </a></li>
          <li><a href="<?php echo base_url('admin/company/addlistCompany')?>" style="    font-size: 11px;"> <i class="fa fa-circle-o"></i> COMPANY GROUP </a></li>
         
        </ul>
        <ul class="sidebar-submenu"><li><a href="javaScript:void();"> </a></li>
          <li><a href="<?php echo base_url('admin/logose/addlistlogos')?>" style="    font-size: 11px;"> <i class="fa fa-circle-o"></i> LOGOS </a></li>
         
        </ul>
        <ul class="sidebar-submenu"><li><a href="javaScript:void();"> </a></li>
          <li><a href="<?php echo base_url('admin/master/addeditmaster')?>" style="    font-size: 11px;"> <i class="fa fa-circle-o"></i> CLIENT MASTER </a></li>
         
        </ul>

      </li>
    
         <li>
         <a href="index.html" class="waves-effect">
           
           <i class="fa fa-plus-square"></i> <span>Insurance Master</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
    
             <ul class="sidebar-submenu">
                             <li><a href="<?php echo base_url('admin/masterinsurancecompany/addeditmasterinsurancecomp')?>"> <i class="fa fa-circle-o"></i>Insurance Company </a></li> 
                           <li><a href="<?php echo base_url('admin/insuranceidv/addeditinsuranceidv')?>"><i class="fa fa-circle-o"></i> Insurance IDV  </a></li>
                           <li><a href="<?php echo base_url('admin/masterroadtypetax/addeditmasterroadtypetx')?>"><i class="fa fa-circle-o"></i> Road Type Tax </a></li>
                           <li><a href="<?php echo base_url('admin/masterinsurancethirdparty/addeditInsuranceThirdParty')?>"><i class="fa fa-circle-o"></i>Insurance Third Party</a></li>
                           <li><a href="<?php echo base_url('admin/Insurancezone/addlistinsurancezone')?>"><i class="fa fa-circle-o"></i> Insurance Zone</a></li>   
                           <li><a href="<?php echo base_url('admin/masterinsurancezonevehicle/addeditInsuranceZoneVehicle')?>"><i class="fa fa-circle-o"></i> Insurance Zone Vehicle Segment Car CC </a></li>  
                           <li><a href="<?php echo base_url('admin/masteraccessoriestype/addeditaccessoriestype')?>"><i class="fa fa-circle-o"></i> Accessories Type </a></li>        
            </ul>
      </li>
       <li>
         <a href="index.html" class="waves-effect">
           <i class="fa fa-wrench"></i> <span> Services Master </span> <i class="fa fa-angle-left pull-right"></i>
        </a>
         <ul class="sidebar-submenu">
                             <li><a href="<?php echo base_url('admin/servicename/addlistservicename')?>"><i class="fa fa-circle-o"></i> Service Name</a></li>
                               <li><a href="<?php echo base_url('admin/carcategory/addliscarcategory')?>"><i class="fa fa-circle-o"></i> Car Category</a></li>   
                               <li><a href="<?php echo base_url('admin/carcategoryservicecost/addliscarcategoryservcot')?>"><i class="fa fa-circle-o"></i> Car Category Service Cost</a></li>  
                                <li><a href="<?php echo base_url('admin/accessories/addlisaccessories')?>"><i class="fa fa-circle-o"></i> Accessories</a></li>      
            </ul>
      </li>
      <!-- <li>-->
      <!--  <a href="<?php echo base_url('admin/master/addeditmaster')?>" class="waves-effect">-->
      <!--   <i class="fa fa-user-circle-o"></i> <span>Client Masters</span>-->
      <!--  </a>-->
      <!--</li>-->
      <!--<li>-->
      <!--  <a href="<?php echo base_url('admin/ordermaster/addeditomaster')?>" class="waves-effect">-->
      <!--   <i class="fa fa-first-order"></i> <span>Order Module</span>-->
      <!--  </a>-->
      <!--</li>-->
       <li>
        <a href="<?php echo base_url('admin/quotationmodule/addeditquotation')?>" class="waves-effect">
         <i class="fa fa-quote-left"></i> <span>Quotation Module</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/delivery/addeditdelivery')?>" class="waves-effect">
         <i class="fa fa-first-order"></i> <span>Order & Delivery Module</span>
        </a>
      </li>
     
     

      <li>
         <a href="index.html" class="waves-effect">
           <i class="fa fa-sticky-note-o"></i> <span>Invoicing Module</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
         <li><a href="<?php echo base_url('admin/invoicingmodule/addeditinvoicingmod')?>"><i class="fa fa-circle-o"></i> Invoicing Module</a></li>
         <li><a href="<?php echo base_url('admin/miscellaneousinvoice/addeditmiscellinvoice')?>"> <i class="fa fa-circle-o"></i>  Miscellaneous Invoice</a></li>          
         <li><a href="<?php echo base_url('admin/remarketinginvoices/addeditremarketing')?>"> <i class="fa fa-circle-o"></i>  Re-marketing Invoices</a></li>  
        </ul>
      </li>
        <li>
        <a href="#" class="waves-effect">
         <i class="fa fa-file"></i> <span>Reports</span>
        </a>
      </li>
      
   
    </ul>
      
   
   </div>
   <!--End sidebar-wrapper-->