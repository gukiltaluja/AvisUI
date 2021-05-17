<!-- Start wrapper-->
<div id="wrapper">

    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">

            <!--Start Dashboard Content-->


            <div class="row pt-2 pb-2">
                <div class="col-sm-12">
                    <h4 class="page-title">Color Code</h4>
                    <!--        <ol class="breadcrumb">-->
                    <!--            <li class="breadcrumb-item"><a href="javaScript:void();">Basic Master-->
                    <!--</a></li>-->
                    <!--            <li class="breadcrumb-item"><a href="javaScript:void();">Color Code</a></li>-->
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
                                      <input type="hidden" name="" id="colorId">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="colorCode" placeholder="Color Code">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="rvCorrection" placeholder="RV Correction (decimal)">
                                        </div>


                                        <div class="form-group col-md-6">
                                            <div class="form-check padd mb-2">
                                                <input type="checkbox" class="form-check-input" id="check2" value="">
                                                <label class="form-check-label" for="check2">Active</label>
                                            </div>
                                        </div>
                                    </div>

                            </div>

                            <div class="buttondd" style="text-align: right;">
                                <button type="button" class="btn btn-success save" onclick="colorCodeCreate()"><i class="fa fa-address-card-o" aria-hidden="true"></i> &nbsp&nbspSave</button>

                                <button type="button" class="btn btn-primary update d-none" onclick="colorCodeUpdate()"><i class="fa fa-address-card-o" aria-hidden="true"></i> &nbsp&nbspUpdate</button>
                                <button type="reset" class="btn btn-primary cancel">Reset</button>
                            </div>
                            </form>
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
                                <table class="table table-bordered" id="colorCodeTable">
                                    <thead>
                                        <tr>
                                            <th width="437">View</th>
                                            <th width="260">Color Code</th>
                                            <th width="398">RV Correction</th>
                                            <th width="162">Active</th>
                                            <th width="177">Tools</th>
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

    </div>
    <!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

</div>
<!--End wrapper-->