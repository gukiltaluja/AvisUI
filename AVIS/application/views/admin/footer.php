
<!--Start footer--> 
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          © All Rights Reserved. Amazin Automation Solution India Pvt. Ltd.
        </div>
      </div>
    </footer>
	<!--End footer-->


 <script src="<?php echo ASSET_URL; ?>admin/js/jquery.min.js"></script>
  <script src="<?php echo ASSET_URL; ?>admin/js/popper.min.js"></script>
  <script src="<?php echo ASSET_URL; ?>admin/js/bootstrap.min.js"></script>

  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>

  <!-- simplebar js -->
  <script src="<?php echo ASSET_URL; ?>admin/plugins/simplebar/js/simplebar.js"></script>
  <!-- waves effect js -->
  <script src="<?php echo ASSET_URL; ?>admin/js/waves.js"></script>
  <!-- sidebar-menu js -->
  <script src="<?php echo ASSET_URL; ?>admin/js/sidebar-menu.js"></script>
  <!-- Custom scripts -->
  <script src="<?php echo ASSET_URL; ?>admin/js/app-script.js"></script>
  
  <!--Data Tables js-->
  <script src="<?php echo ASSET_URL; ?>admin/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo ASSET_URL; ?>admin/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo ASSET_URL; ?>admin/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo ASSET_URL; ?>admin/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
  <script src="<?php echo ASSET_URL; ?>admin/plugins/bootstrap-datatable/js/jszip.min.js"></script>
  <script src="<?php echo ASSET_URL; ?>admin/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
  <script src="<?php echo ASSET_URL; ?>admin/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
  <script src="<?php echo ASSET_URL; ?>admin/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
  <script src="<?php echo ASSET_URL; ?>admin/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
  <script src="<?php echo ASSET_URL; ?>admin/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>
 <!-- ~~~~~~~~~~~~~~~~START API INTEGRATION CODE ~~~~~~~~~~~~~~  -->
 <!-- <script src="<?php echo ASSET_URL; ?>admin/plugins/validator.js"></script> -->
      <script src="<?php echo ASSET_URL; ?>admin/js/url.js"></script>
      <script src="<?php echo ASSET_URL; ?>admin/js/ajaxDef.js"></script>

      <?php
            $data = $this->uri->segment(3);
            //echo $data;
            if($data == 'addeditmastervariant')
            {?>
                <script src="<?php echo ASSET_URL; ?>admin/js/variant.js"></script>
            
       <?php }?>

<?php         
            if($data == 'addedittyre')
            {?>
                <script src="<?php echo ASSET_URL; ?>admin/js/tyre.js"></script>
            
       <?php }?>
       <?php           
            if($data == 'addeditusagetype')
            {?>
                <script src="<?php echo ASSET_URL; ?>admin/js/usagetype.js"></script>
            
       <?php }?>

       <?php            
            if($data == 'addeditcarprice')
            {?>
                <script src="<?php echo ASSET_URL; ?>admin/js/addcarprice.js"></script>
            
       <?php }?>

      <?php            
            if($data == 'addeditpart')
            {?>
                <script src="<?php echo ASSET_URL; ?>admin/js/part.js"></script>
            
       <?php }?>

       <?php            
            if($data == 'addeditparttype')
            {?>
                <script src="<?php echo ASSET_URL; ?>admin/js/parttype.js"></script>
            
       <?php }?>
       <?php           
            if($data == 'addeditrv')
            {?>
                <script src="<?php echo ASSET_URL; ?>admin/js/rv.js"></script>
            
       <?php }?>

       <?php            
            if($data == 'addeditrmtp')
            {?>
                <script src="<?php echo ASSET_URL; ?>admin/js/rmtb.js"></script>
            
       <?php }?>
       <?php          
            if($data == 'addeditfueltype')
            {?>
                <script src="<?php echo ASSET_URL; ?>admin/js/fueltype.js"></script>
            
       <?php }?>

       <?php            
            if($data == 'addeditfueltanktype')
            {?>
                <script src="<?php echo ASSET_URL; ?>admin/js/fueltanktype.js"></script>
            
       <?php }?>
       <?php           
            if($data == 'addeditvehiclesegment')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/vehiclesegment.js"></script>
            
       <?php }?>
       <?php           
            if($data == 'addeditcolorcode')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/colorcode.js"></script>
            
       <?php }?>
       <?php            
            if($data == 'addeditbankmaster')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/bankmaster.js"></script>
            
       <?php }?>
       <?php            
            if($data == 'addeditmastermenufacturer')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/manufacturer.js"></script>
            
       <?php }?>
       <?php           
            if($data == 'addeditmastermenufacturerc')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/manufacturer.js"></script>
            
       <?php }?>
       <?php          
            if($data == 'addeditmasterinsurancecomp')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/inscompany.js"></script>          
       <?php }?>
       <?php           
            if($data == 'addeditinsuranceidv')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/insidv.js"></script>          
       <?php }?>
       <?php           
            if($data == 'addeditmasterroadtypetx')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/roadtypetax.js"></script>          
       <?php }?>
       <?php           
            if($data == 'addeditInsuranceZoneVehicle')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/vehiclesegment.js"></script>          
       <?php }?>
       
       <?php          
            if($data == 'addeditaccessoriestype')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/accessoriesType.js"></script>          
       <?php }?>
       <?php          
            if($data == 'addeditstate')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/state.js"></script>          
       <?php }?>
       <?php           
            if($data == 'addeditcity')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/city.js"></script>          
       <?php }?>
       <?php           
            if($data == 'addeditcityservice')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/cityservice.js"></script>          
       <?php }?>
       <?php           
            if($data == 'addeditsuppliermasters')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/supplier.js"></script>         
       <?php }?>
       <?php           
            if($data == 'addeditmastersupplierlocation')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/supplierLocation.js"></script>         
       <?php }?>
       <?php           
            if($data == 'addeditmastersuppliertype')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/supplierType.js"></script>         
       <?php }?>   
        <?php           
            if($data == 'addeditquotation')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/addquotation.js"></script>         
       <?php }?>
       
        <?php           
            if($data == 'addlistservicename')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/servicename.js"></script>         
       <?php }?>
       <?php           
            if($data == 'addliscarcategory')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/carcategory.js"></script>         
       <?php }?>
       <?php           
            if($data == 'addliscarcategoryservcot')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/carcategoryservcost.js"></script>         
       <?php }?>
      
       <?php           
            if($data == 'addlisaccessories')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/accessories.js"></script>         
       <?php }?>
       <?php           
            if($data == 'addlismodel')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/models.js"></script>         
       <?php }?>
       <?php           
            if($data == 'addlisserviceschedule')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/serviceschedule.js"></script>         
       <?php }?>
       <?php           
            if($data == 'addeditcitydoc')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/citydocument.js"></script>         
       <?php }?>
       <?php           
            if($data == 'addlistinsurancezone')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/insurancezone.js"></script>         
       <?php }?>
       
       <?php           
            if($data == 'addeditmaster')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/client.js"></script>         
       <?php }?>
       
       <?php           
            if($data == 'addedittransmission')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/transmission.js"></script>         
       <?php }?>
       
        
       <?php           
            if($data == 'addeditemission')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/emission.js"></script>         
       <?php }?>
       
        
       <?php           
            if($data == 'addeditmasterncap')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/ncap.js"></script>         
       <?php }?>

          <?php           
            if($data == 'addeditmastermenufacturerc')
            {?>
            <script src="<?php echo ASSET_URL; ?>admin/js/manufacturerContact.js"></script>         
       <?php }?>
      <!-- ~~~~~~~~~~~~~~~~END API INTEGRATION CODE ~~~~~~~~~~~~~~  -->

<!-- newly added js by akhilesh start -->
 <!--Multi Select Js-->
<!--Bootstrap Touchspin Js-->
    <script src="<?php echo ASSET_URL; ?>admin/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
    <script src="<?php echo ASSET_URL; ?>admin/plugins/bootstrap-touchspin/js/bootstrap-touchspin-script.js"></script>

    <!--Select Plugins Js-->
    <script src="<?php echo ASSET_URL; ?>admin/plugins/select2/js/select2.min.js"></script>
    <!--Inputtags Js-->
    <script src="<?php echo ASSET_URL; ?>admin/plugins/inputtags/js/bootstrap-tagsinput.js"></script>

    <script src="<?php echo ASSET_URL; ?>admin/plugins/jquery-multi-select/jquery.multi-select.js"></script>
    <script src="<?php echo ASSET_URL; ?>admin/plugins/jquery-multi-select/jquery.quicksearch.js"></script>

    <script src="<?php echo ASSET_URL; ?>admin/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="<?php echo ASSET_URL; ?>admin/plugins/ion-rangeslider/js/range-slider-script.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- newly added js by akhilesh end -->


   <script>
             function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        
        
        $(document).on('keyup', "input[type=text]", function () {
            $(this).val(function (_, val) {
                return val.toUpperCase();
            });
        });
    </script>

 
    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


      var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>



    <script>
       $(document).ready(function() {
            $('.single-select').select2();
            $('.multiple-select').select2();
            //multiselect start

            $('#my_multi_select1').multiSelect();
            $('#my_multi_select2').multiSelect({
                selectableOptgroup: true
            });

            $('#my_multi_select3').multiSelect({
                selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                afterInit: function(ms) {
                    var that = this,
                        $selectableSearch = that.$selectableUl.prev(),
                        $selectionSearch = that.$selectionUl.prev(),
                        selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                        selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                        .on('keydown', function(e) {
                            if (e.which === 40) {
                                that.$selectableUl.focus();
                                return false;
                            }
                        });

                    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                        .on('keydown', function(e) {
                            if (e.which == 40) {
                                that.$selectionUl.focus();
                                return false;
                            }
                        });
                },
                afterSelect: function() {
                    this.qs1.cache();
                    this.qs2.cache();
                },
                afterDeselect: function() {
                    this.qs1.cache();
                    this.qs2.cache();
                }
            });

            $('.custom-header').multiSelect({
                selectableHeader: "<div class='custom-header'>Selectable items</div>",
                selectionHeader: "<div class='custom-header'>Selection items</div>",
                selectableFooter: "<div class='custom-header'>Selectable footer</div>",
                selectionFooter: "<div class='custom-header'>Selection footer</div>"
            });



        });
    </script>

     <script>
        $('.add').on('click', add);
        $('.remove').on('click', remove);

        function add() {
            var new_chq_no = parseInt($('#total_chq').val()) + 1;
            var new_input = "<input type='text'class='form-control mt-4'  placeholder='Vehicle Model' id='new_" + new_chq_no + "'>";
            $('#new_chq').append(new_input);
            $('#total_chq').val(new_chq_no);
        }

        function remove() {
            var last_chq_no = $('#total_chq').val();
            if (last_chq_no > 1) {
                $('#new_' + last_chq_no).remove();
                $('#total_chq').val(last_chq_no - 1);
            }
        }
    </script>
    
    <script>
        $('.add1').on('click', add);
        $('.remove1').on('click', remove);

        function add() {
            var new_chq_no = parseInt($('#total_chq').val()) + 1;
            var new_input = "<input type='text'class='form-control mt-4'  placeholder='Vehicle Varients' id='new_" + new_chq_no + "'>";
            $('#new_chq1').append(new_input);
            $('#total_chq1').val(new_chq_no);
        }

        function remove() {
            var last_chq_no = $('#total_chq1').val();
            if (last_chq_no > 1) {
                $('#new_' + last_chq_no).remove();
                $('#total_chq1').val(last_chq_no - 1);
            }
        }
    </script>

    <script>
        $('.add2').on('click', add);
        $('.remove2').on('click', remove);

        function add() {
            var new_chq_no = parseInt($('#total_chq2').val()) + 1;
            var new_input = "<input type='text'class='form-control mt-4'  placeholder='City' id='new_" + new_chq_no + "'>";
            $('#new_chq2').append(new_input);
            $('#total_chq2').val(new_chq_no);
        }

        function remove() {
            var last_chq_no = $('#total_chq2').val();
            if (last_chq_no > 1) {
                $('#new_' + last_chq_no).remove();
                $('#total_chq2').val(last_chq_no - 1);
            }
        }
    </script>

    <script>
        $('.add3').on('click', add);
        $('.remove3').on('click', remove);

        function add() {
            var new_chq_no = parseInt($('#total_chq2').val()) + 1;
            var new_input = "<input type='text'class='form-control mt-4'  placeholder='Product' id='new_" + new_chq_no + "'>";
            $('#new_chq3').append(new_input);
            $('#total_chq3').val(new_chq_no);
        }

        function remove() {
            var last_chq_no = $('#total_chq3').val();
            if (last_chq_no > 1) {
                $('#new_' + last_chq_no).remove();
                $('#total_chq3').val(last_chq_no - 1);
            }
        }
    </script>

    <script>
        $('.add4').on('click', add);
        $('.remove4').on('click', remove);

        function add() {
            var new_chq_no = parseInt($('#total_chq4').val()) + 1;
            var new_input = "<input type='text'class='form-control mt-4'  placeholder='Tenure' id='new_" + new_chq_no + "'>";
            $('#new_chq4').append(new_input);
            $('#total_chq4').val(new_chq_no);
        }

        function remove() {
            var last_chq_no = $('#total_chq3').val();
            if (last_chq_no > 1) {
                $('#new_' + last_chq_no).remove();
                $('#total_chq4').val(last_chq_no - 1);
            }
        }
    </script>


    <script>
        function getVals() {

            let parent = this.parentNode;
            let slides = parent.getElementsByTagName("input");
            let slide1 = parseFloat(slides[0].value);
            let slide2 = parseFloat(slides[1].value);

            if (slide1 > slide2) {
                let tmp = slide2;
                slide2 = slide1;
                slide1 = tmp;
            }

            let displayElement = parent.getElementsByClassName("rangeValues")[0];
            displayElement.innerHTML = slide1 + "-" + slide2;
        }

        window.onload = function() {

            let sliderSections = document.getElementsByClassName("range-slider");
            for (let x = 0; x < sliderSections.length; x++) {
                let sliders = sliderSections[x].getElementsByTagName("input");
                for (let y = 0; y < sliders.length; y++) {
                    if (sliders[y].type === "range") {
                        sliders[y].oninput = getVals;

                        sliders[y].oninput();
                    }
                }
            }
        }
    </script>


    <script>
    
        $('#vehicle').on('change', function(e, data) {
            var data = $(this).val();
            var milleage = $('#milleage').val();
            var tenure =  $('#tenure').val();
            var city = $('#vehiclecity').val();
            var product = $('#vehicleproduct').val();

            if (milleage == null && city == null && product == null && tenure == null) {
                $('#quotationvalue').html((data.length));
                $('#quotationvalueinput').val((data.length));
            } else if (milleage != null && city == null && product == null && tenure == null) {
                $('#quotationvalue').html((data.length) * (milleage.length));
                $('#quotationvalueinput').val((data.length) * (milleage.length));
            } else if (milleage == null && city != null && product == null && tenure == null) {
                $('#quotationvalue').html((data.length) * (city.length));
                $('#quotationvalueinput').val((data.length) * (city.length));
            } else if (milleage == null && city == null && product != null && tenure == null) {
                $('#quotationvalue').html((data.length) * (product.length));
                $('#quotationvalueinput').val((data.length) * (product.length));
            }else if (milleage == null && city == null && product == null && tenure != null) {
                $('#quotationvalue').html((data.length) * (tenure.length));
                $('#quotationvalueinput').val((data.length) * (tenure.length));
            } else if (milleage != null && city != null && product == null) {
                $('#quotationvalue').html((data.length) * (milleage.length) * (city.length));
                $('#quotationvalueinput').val((data.length) * (milleage.length) * (city.length));
            } else if (milleage != null && city == null && product != null) {
                $('#quotationvalue').html((data.length) * (milleage.length) * (product.length));
                $('#quotationvalueinput').val((data.length) * (milleage.length) * (product.length));
            } else if (milleage == null && city != null && product != null) {
                $('#quotationvalue').html((data.length) * (city.length) * (product.length));
                $('#quotationvalueinput').val((data.length) * (city.length) * (product.length));
            } else if (milleage != null && city == null && product != null) {
                $('#quotationvalue').html((data.length) * (milleage.length) * (product.length));
                $('#quotationvalueinput').val((data.length) * (milleage.length) * (product.length));
            } else {
                $('#quotationvalue').html((data.length) * (milleage.length) * (city.length) * (product.length));
                $('#quotationvalueinput').val((data.length) * (milleage.length) * (city.length) * (product.length));
            }

            var combinition = $('#quotationvalueinput').val();
              console.log(combinition);
            if (combinition <= 48) {
                console.log('pass');
            } else {
                swal("Warning", "You can't create More than 48 Combination", "warning");
            }

        });

        $('#tenure').on('change', function(e, data) {
            var model = $('#vehicle').val();
            var data = $(this).val();
            var city = $('#vehiclecity').val();
            var product = $('#vehicleproduct').val();
            var milleage = $('#milleage').val();

            if (model == null && city == null && product == null && milleage == null) {
                $('#quotationvalue').html((data.length));
                $('#quotationvalueinput').val((data.length));
            } else if (model != null && city == null && product == null && milleage == null) {
                $('#quotationvalue').html((data.length) * (model.length));
                $('#quotationvalueinput').val((data.length) * (model.length));
            } else if (model == null && city != null && product == null && milleage == null) {
                $('#quotationvalue').html((data.length) * (city.length));
                $('#quotationvalueinput').val((data.length) * (city.length));
            } else if (model == null && city == null && product != null && milleage == null) {
                $('#quotationvalue').html((data.length) * (product.length));
                $('#quotationvalueinput').val((data.length) * (product.length));
            } else if (model == null && city == null && product == null && milleage != null) {
                $('#quotationvalue').html((data.length) * (product.length));
                $('#quotationvalueinput').val((data.length) * (milleage.length));
            } else if (model != null && city != null && product == null && milleage == null) {
                $('#quotationvalue').html((data.length) * (model.length) * (city.length));
                $('#quotationvalueinput').val((data.length) * (model.length) * (city.length));
            } else if (model != null && city == null && product != null && milleage == null) {
                $('#quotationvalue').html((data.length) * (model.length) * (product.length));
                $('#quotationvalueinput').val((data.length) * (model.length) * (product.length));
            } else if (model == null && city != null && product != null && milleage == null) {
                $('#quotationvalue').html((data.length) * (city.length) * (product.length));
                $('#quotationvalueinput').val((data.length) * (city.length) * (product.length));
            } else if (model != null && city == null && product != null && milleage == null) {
                $('#quotationvalue').html((data.length) * (model.length) * (product.length));
                $('#quotationvalueinput').val((data.length) * (model.length) * (product.length));
            } else {
                $('#quotationvalue').html((data.length) * (model.length) * (city.length) * (product.length));
                $('#quotationvalueinput').val((data.length) * (model.length) * (city.length) * (product.length));
            }
            var combinition = $('#quotationvalueinput').val();

             console.log(combinition);
            if (combinition <= 48) {
                console.log('pass');
            } else {
                swal("Warning", "You can't create More than 48 Combination", "warning");
            }

        })

        $('#milleage').on('change', function(e, data) {
            var model = $('#vehicle').val();
            var data = $(this).val();
            var city = $('#vehiclecity').val();
            var product = $('#vehicleproduct').val();
            var tenure = $('#tenure').val();

            if (model == null && tenure == null && city == null && product == null) {
                $('#quotationvalue').html((data.length));
                $('#quotationvalueinput').val((data.length));
            } 
            else if (model != null && tenure == null && city == null && product == null) {
                $('#quotationvalue').html((data.length) * (model.length));
                $('#quotationvalueinput').val((data.length) * (model.length));
            }
            else if (model == null && tenure != null && city == null && product == null) {
                $('#quotationvalue').html((data.length) * (tenure.length));
                $('#quotationvalueinput').val((data.length) * (tenure.length));
            }
            else if (model == null  && tenure == null && city != null && product == null) {
                $('#quotationvalue').html((data.length) * (city.length));
                $('#quotationvalueinput').val((data.length) * (city.length));

            } else if (model == null && tenure == null && city == null && product != null) {
                $('#quotationvalue').html((data.length) * (product.length));
                $('#quotationvalueinput').val((data.length) * (product.length));

            } else if (model != null && tenure != null && city == null && product == null) {
                $('#quotationvalue').html((data.length) * (model.length) * (tenure.length));
                $('#quotationvalueinput').val((data.length) * (model.length) * (tenure.length));

            }else {
                $('#quotationvalue').html((data.length) * (model.length) * (tenure.length) * (city.length) * (product.length));
                $('#quotationvalueinput').val((data.length) * (model.length) * (tenure.length) * (city.length) * (product.length));
            }
            var combinition = $('#quotationvalueinput').val();

             console.log(combinition);
            if (combinition <= 48) {
                console.log('pass');
            } else {
                swal("Warning", "You can't create More than 48 Combination", "warning");
            }

        })

        $('#vehiclecity').on('change', function(e, data) {
            var data = $(this).val();
            var model = $('#vehicle').val();
            var product = $('#vehicleproduct').val();
            var milleage = $('#milleage').val();
            var tenure =  $('#tenure').val();

            if (model == null  && tenure == null && product == null  && milleage == null) {
                $('#quotationvalue').html((data.length));
                $('#quotationvalueinput').val((data.length));
            } 
            else if (model != null && tenure == null && product == null  && milleage == null) {
                $('#quotationvalue').html((data.length) * (model.length));
                $('#quotationvalueinput').val((data.length) * (model.length));
            } 
            else if (model == null && tenure != null && product == null  && milleage == null) {
                $('#quotationvalue').html((data.length) * (tenure.length) );
                $('#quotationvalueinput').val((data.length) * (tenure.length));
            } 
            else if (model == null && tenure == null && product != null  && milleage == null) {
                $('#quotationvalue').html((data.length) * (product.length));
                $('#quotationvalueinput').val((data.length) * (product.length));
            }
            else if (model == null && tenure == null && product == null  && milleage != null) {
                $('#quotationvalue').html((data.length) * (milleage.length));
                $('#quotationvalueinput').val((data.length) * (milleage.length)); 
            }
            else if (model != null && tenure != null && product == null  && milleage == null) {
                $('#quotationvalue').html((data.length) * (model.length) * (tenure.length));
                $('#quotationvalueinput').val((data.length) * (model.length) * (tenure.length));
            } 
            else if (model != null && tenure == null && product != null  && milleage == null) {
                $('#quotationvalue').html((data.length) * (model.length) * (product.length));
                $('#quotationvalueinput').val((data.length) * (model.length) * (product.length));
            } 
            else if (model == null && tenure != null && product != null  && milleage == null) {
                $('#quotationvalue').html((data.length) * (tenure.length) * (product.length));
                $('#quotationvalueinput').val((data.length) * (tenure.length) * (product.length));
            } 
            else if (model != null && tenure == null && product != null  && milleage == null) {
                $('#quotationvalue').html((data.length) * (model.length) * (product.length));
                $('#quotationvalueinput').val((data.length) * (model.length) * (product.length));
            } 
            else if (model != null && tenure == null && product == null  && milleage != null) {
                $('#quotationvalue').html((data.length) * (model.length) * (product.length));
                $('#quotationvalueinput').val((data.length) * (model.length) * (milleage.length));
            } 


            else if (model != null && tenure != null && product == null  && milleage != null) {
                $('#quotationvalue').html((data.length) * (model.length) * (tenure.length) * (milleage.length));
                $('#quotationvalueinput').val((data.length) * (model.length) * (tenure.length) * (milleage.length));
            }

            else if (model != null && tenure != null && product != null  && milleage == null) {
                $('#quotationvalue').html((data.length) * (model.length) * (tenure.length) * (product.length));
                $('#quotationvalueinput').val((data.length) * (model.length) * (product.length));
            }


            else {
                $('#quotationvalue').html((data.length) * (model.length) * (tenure.length) * (product.length)* (milleage.length));
                $('#quotationvalueinput').val((data.length) * (model.length) * (tenure.length) * (product.length)* (milleage.length));
            }
            var combinition = $('#quotationvalueinput').val();
            console.log(combinition);
            if (combinition <= 48) {
                console.log('pass');
            } else {
                swal("Warning", "You can't create More than 48 Combination", "warning");
            }
        })

        $('#vehicleproduct').on('change', function(e, data) {
            var data = $(this).val();
            var model = $('#vehicle').val();
            var milleage = $('#milleage').val();
            var city = $('#vehiclecity').val();
            var tenure =  $('#tenure').val();
            
            $('#quotationvalue').html((data.length) * (model.length) * (milleage.length) * (city.length)* (tenure.length));
            $('#quotationvalueinput').val((data.length) * (model.length) * (milleage.length) * (city.length)* (tenure.length));

            var combinition = $('#quotationvalueinput').val();
            if (combinition <= 48) {
                console.log('pass');
            } else {
                swal("Warning", "You can't create More than 48 Combination", "warning");
            }
        })
    </script>

<!--Bootstrap Datepicker Js-->
  <script src="<?php echo ASSET_URL; ?>admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script> 
<script>

  $('#apprClientcsd').datepicker({
    autoclose: true,
    todayHighlight: true
  });

  $('#apprClientcad').datepicker({
    autoclose: true,
    todayHighlight: true
  }); 

  $('#apprClientcamrevd').datepicker({
    autoclose: true,
    todayHighlight: true
  }); 
  $('#apprClientacvd').datepicker({
    autoclose: true,
    todayHighlight: true
  });

  $('#apprClientReqd').datepicker({
    autoclose: true,
    todayHighlight: true
  });

  $('#apprClientcamval').datepicker({
    autoclose: true,
    todayHighlight: true
  });

  $('#dateragne-picker .input-daterange').datepicker({
   });
</script>

 <script>
       $('#my_multi_select1').multiSelect();
  </script>
  
  <script>
             function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
      <script>  
        
  $(document).ready(function() {
    var max_fields      = 50; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_buttons"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
             //text box increment
            $(wrapper).append('<div class="row getlengthofcontactdetails" name="test"><div class="form-group col-md-2"><input type="text" class="form-control contactdetailsname" id="Name"'+x+' placeholder="Name" name="personName"></div><div class="form-group col-md-2"><input type="text" class="form-control contactdetailsfunction" id="function"'+x+' placeholder="Function" name="personDesignation"></div><div class="form-group col-md-2"><input type="text" class="form-control contactdetailsmobile" id="contact"'+x+' placeholder="Mobile Number" name="personMobileNo"></div><div class="form-group col-md-2"> <input type="text" class="form-control contactdetailslandline" id="email"'+x+' placeholder="Landline Number" name="landlineNo"></div><div class="form-group col-md-2"> <input type="text" class="form-control contactdetailsemail" id="email"'+x+' placeholder="Email Id" name="personEmailId"></div><div class="form-group col-md-2"><select id="coor"'+x+' class="form-control contactdetailscordinate" name="coordinator"><option value="Coordinator">Coordinator</option><option value="Approver">Approver</option><option>Other</option></select></div><div class="form-group col-md-2"><input type="text" class="form-control contactdetailsresponsibilities" id="" placeholder="Area of Responsibility" name="areaResponsibility"></div> <div class="form-group col-md-2"><input type="hidden" name="clientId" class="clientIddata"></div></div><button type="button" class="btn btn-danger sg-remove remove_field"> <i class="fa fa-minus" aria-hidden="true"></i></button></div>'); //add input box
            x++;
          }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>

<!-- 
<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Delhi","Delhi","Delhi","Delhi","Delhi","Delhi","Delhi","Delhi","Delhi","Delhi","Delhi", "Dehradun", "Dehradun", "Dehradun", "Dehradun", "Dehradun" ,"Mumbai", "Gurugram", "Noida", "Karnal",];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
autocomplete(document.getElementById("myInput1"), countries);
autocomplete(document.getElementById("myInput2"), countries);
autocomplete(document.getElementById("myInput3"), countries);
autocomplete(document.getElementById("myInput4"), countries);
</script> -->



  
