
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

    <!--Bootstrap Datepicker Js-->
    <script src="<?php echo ASSET_URL; ?>admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>


    <script src="<?php echo ASSET_URL; ?>admin/plugins/jquery-multi-select/jquery.multi-select.js"></script>
    <script src="<?php echo ASSET_URL; ?>admin/plugins/jquery-multi-select/jquery.quicksearch.js"></script>

    <script src="<?php echo ASSET_URL; ?>admin/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="<?php echo ASSET_URL; ?>admin/plugins/ion-rangeslider/js/range-slider-script.js"></script>
    
     <script src="<?php echo ASSET_URL; ?>admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

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

    <script>
        $('#generate_quotation').on('click', function(e, data){
             var model = $('#vehicle').val();
             var milleage = $('#milleage').val();
             var city = $('#vehiclecity').val();
             var products = $('#vehicleproduct').val();
             var tenure = $('#tenure').val();
             console.log(tenure);
             $(".quotationarea").html('');
            $.each(model, function (index, datas) 
            { 

              $(".quotationarea").append('<div class="col-md-12 pl-0 pr-0"><ul class="sg-data-listone"> <li> <p style="width: 120px;">'+ datas +'</p> <ul class="sg-data-listtwo quotationarea_city"> </ul> </li></ul></div>');
                  $('.headingarea').removeClass('d-none');
                  $(".quotationarea_city").html('');
                  $(".quotationarea_milleage").html('');
                  $(".quotationarea_tenure").html('');
                  $(".quotationarea_products").html('');
                  
                  $.each(city, function (index, city_datas) 
                  {
                    $(".quotationarea_city").append('<li style="border:1px solid; border-top:none;border-right:none"> <p style="width: 120px;">'+ city_datas +'</p> <ul class="sg-data-listthree quotationarea_milleage"></ul></li>');
                  });
                  $.each(milleage, function (index, milleage_datas) 
                  {
                    $(".quotationarea_milleage").append('<li style="border:1px solid; border-top:none;border-right:none"> <p style="width: 120px;">'+ milleage_datas +'</p> <ul class="sg-data-listfour quotationarea_tenure"> </ul> </li> ');
                  });

                  $.each(tenure, function (index, tenure_datas) 
                  {
                    $(".quotationarea_tenure").append('<li style="border:1px solid; border-top:none;border-right:none"> <p style="width: 120px;">'+ tenure_datas +'</p> <ul class="sg-data-listfive quotationarea_products"></ul> </li>');
                  });
                   $.each(products, function (index, products_datas) 
                  {
                    $(".quotationarea_products").append('<li style="border:1px solid; border-top:none;border-right:none;"> <p >'+ products_datas +'</p> <ul class="sg-data-listsix"><li style="border:1px solid; border-top:none;border-right:none"><p >-</p><ul class="sg-data-listsix"><li style="border:1px solid; border-top:none;border-right:none"><p >-</p><ul class="sg-data-listsix"><li style="border:1px solid; border-top:none;border-right:none"><p >-</p><ul class="sg-data-listsix"><li style="border:1px solid; border-top:none;border-right:none"><p >-</p><ul class="sg-data-listsix"><li style="border:1px solid; border-top:none;border-right:none"><p >-</p><ul class="sg-data-listsix"><li style="border:1px solid; border-top:none;border-right:none"><p >-</p><ul class="sg-data-listsix"><li style="border:1px solid; border-top:none;border-right:none"><p >-</p><ul class="sg-data-listsix"><li style="border:1px solid; border-top:none;border-right:none"><p >-</p><ul class="sg-data-listsix"><li style="border:1px solid; border-top:none;border-right:none"><p >-</p><ul class="sg-data-listsix"><li style="border:1px solid; border-top:none;border-right:none"><p >-</p><ul class="sg-data-listsix"><li style="border:1px solid; border-top:none;border-right:none"><p >-</p><ul class="sg-data-listsix"><li style="border:1px solid; border-top:none;border-right:none"><p >-</p><ul class="sg-data-listsix"><li style="border:1px solid; border-top:none;border-right:none"><p >-</p><ul class="sg-data-listsix"><li style="border:1px solid; border-top:none;border-right:none"><p >-</p><ul class="sg-data-listsix"><li style="border:1px solid; border-top:none;border-right:none"><p >-</p><ul class="sg-data-listsix"><li style="border:1px solid; border-top:none;border-right:none"><p >-</p></li> </ul></li> </ul></li> </ul></li> </ul></li> </ul></li> </ul></li> </ul></li> </ul></li> </ul></li> </ul></li> </ul></li> </ul></li> </ul></li> </ul></li> </ul></li> </ul></li>');
                  });
            });
        });

    </script>
    

    <script>
      $('#default-datepicker').datepicker({
        todayHighlight: true
      });
      $('#autoclose-datepicker').datepicker({
        autoclose: true,
        todayHighlight: true
      });

      $('#inline-datepicker').datepicker({
         todayHighlight: true
      });

      $('#dateragne-picker .input-daterange').datepicker({
       });

    </script>
