
<!-- Start wrapper-->
<div id="wrapper">
	<div class="clearfix"></div>
	<div class="content-wrapper">
		<div class="container-fluid">
			<!--Start Dashboard Content-->		  
			<div class="row pt-2 pb-2">
				<div class="col-sm-12">
					<h4 class="page-title">Client Masters</h4>
					<!--<ol class="breadcrumb">-->
					<!--	<li class="breadcrumb-item"><a href="javaScript:void();">Masters</a></li>-->
					<!--	<li class="breadcrumb-item"><a href="javaScript:void();">Client Masters</a></li>-->
					<!--</ol>-->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body ffff ssss">
							<div class="card-header text-uppercase">PRINCIPAL</div>
							<hr>
							<form>
								<div class="row">

									<div class="form-group col-md-9">
                                     <input type="text" class="form-control" id="compName" placeholder="Company Name">
                                    </div>
                                    <div class="form-group col-md-3">
                                     <input type="text" class="form-control" id="clientId" placeholder="Client Id">
                                    </div>  
									
									<div class="form-group col-md-12">               
										<div class="row" style="padding-left:13px;">
											<div class="card-header text-uppercase col-md-3 background-non">Client Car Policy</div>
											<div class="form-check padd mb-2 col-md-3">
												<input type="checkbox" class="form-check-input margin-t" id="check2" value="">
												<label class="form-check-label margin-t" for="check2">Tool for Trade</label>
											</div>
											<div class="form-check padd mb-2 col-md-3">
												<input type="checkbox" class="form-check-input margin-t" id="check2" value="">
												<label class="form-check-label margin-t" for="check2">Perk Category</label>
											</div>
											<div class="form-check padd mb-2 col-md-3">
												<input type="checkbox" class="form-check-input margin-t" id="check2" value="">
												<label class="form-check-label margin-t" for="check2">CTC</label>
											</div>
										</div>
									</div>
									<div class="form-group col-md-4">
										<input type="text" class="form-control" id="input-3" placeholder="Master Agreement Number">
									</div>

									<div class="form-group col-md-12">

										<div class="row" style="padding-left:13px;">
											<div class="card-header text-uppercase col-md-3 background-non">Client Blocking</div>
											<div class="form-check padd mb-2 col-md-2">
												<input type="checkbox" class="form-check-input margin-t" id="check2" value="">
											</div>

										</div>
									</div>

								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card">
						<div class="card-header text-uppercase">Credit Status</div>
						<div class="card-body darpan">

							<div class="row">           
								<div class="col-md-12 col-sm-4 col-xs-6 demo-col bottem-border">
									<div class="radio icheck-danger">
										<input type="radio" id="danger2" name="danger" />
										<label for="danger2">NOT APPROVED</label>
									</div>  
									<div class="radio icheck-success">
										<input type="radio" id="success2" name="danger" />
										<label for="success2">APPROVED</label>
									</div>
									<div class="radio icheck-warning">
										<input type="radio" id="warning" name="danger" />
										<label for="warning">About to Expire</label>
									</div>
									<div class="radio icheck-pandding">
										<input type="radio" id="pandding" name="danger" />
										<label for="pandding">Pending</label>
									</div>
								</div>
								</hr>
							
								<div class="form-group col-md-12">
									<label for="formGroupExampleInput">Approved Credit <span class="appr">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp - </span></label>
									<!--<input type="text" class="form-control" id="formGroupExampleInput" disabled>-->
								</div>
								<div class="form-group col-md-12">
									<label for="formGroupExampleInput2">Balance Credit <span class="appr">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp - </span></label>
									<!--<input type="text" class="form-control" id="formGroupExampleInput2" disabled>-->
								</div>
								<div class="form-group col-md-12">
									<label for="formGroupExampleInput2">Approved Credit Validity Date <span class="appr"> - </span></label>
									<!--<input type="text" class="form-control" id="formGroupExampleInput2" disabled>-->
								</div>
							</div>
						</div>
					</div>    
				</div>
			</div><!--End Row-->

			<div class="row">      

				<div class="col-lg-12">
					<div class="card">
						<div class="card-body"> 
							<ul class="nav nav-tabs nav-tabs-danger nav-justified top-icon">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#tabe-17"><span class="hidden-xs">Company Profile </span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tabe-18"><span class="hidden-xs">Child Account</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tabe-19"><span class="hidden-xs">Contact Details</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tabe-20"><span class="hidden-xs">Credit Appraisal</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tabe-21"><span class="hidden-xs">Document Upload</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tabe-22"><span class="hidden-xs">Product & Services</span></a>
								</li>
								<!--<li class="nav-item">-->
								<!--	<a class="nav-link" data-toggle="tab" href="#tabe-23"><span class="hidden-xs">Inv. Parameters</span></a>-->
								<!--</li>-->
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								 <div id="tabe-17" class="container tab-pane active">
                        <form>
            <div class="row">
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="company-profile" placeholder="Company Type">
            </div>
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="clientGrp" placeholder="Client Group">
            </div>
            <div class="form-group col-md-3">
  
             <input type="text" class="form-control" id="cinNo" placeholder="CIN number">
            </div>
            <div class="form-group col-md-3">
  
             <input type="text" class="form-control" id="ageComp" placeholder="Age Of Company">
            </div>
            <div class="form-group col-md-3">
    
             <input type="text" class="form-control" id="EcoSec" placeholder="Economic Sector">
            </div>
            <div class="form-group col-md-3">
             
             <input type="text" class="form-control" id="leadSource" placeholder="Lead Source">
            </div>
            <div class="form-group col-md-3">
            
             <input type="text" class="form-control" id="clientSale" placeholder="Client Type/ Sale Cycle">
            </div>
            <div class="form-group col-md-3">
             
             <input type="text" class="form-control" id="compTurnI" placeholder="Company Turnover (In India)">
            </div>
            <div class="form-group col-md-3">
             
             <input type="text" class="form-control" id="compTurnG" placeholder="Company Turnover (Globally)">
            </div>
            <div class="form-group col-md-3">
            
             <input type="text" class="form-control" id="legalStatus" placeholder="Legal Status">
            </div>
            <div class="form-group col-md-3">
            
             <input type="text" class="form-control" id="revp" placeholder="Revenue In %">
            </div>
            <div class="form-group col-md-3">
             
             <input type="text" class="form-control" id="assetBase" placeholder="Asset Base (In Million)">
            </div>
            <div class="form-group col-md-3">
             
             <input type="text" class="form-control" id="keyBankers" placeholder="Key Bankers">
            </div>
            <div class="form-group col-md-3">
             
             <input type="text" class="form-control" id="audi" placeholder="Auditors">
            </div>
            <div class="form-group col-md-3">
             
             <input type="text" class="form-control" id="detailsShare" placeholder="Details Of Shareholders">
            </div>
 
            <div class="form-group col-md-3">
            
             <input type="text" class="form-control" id="fleetSize" placeholder="Fleet Size">
            </div>
            <div class="form-group col-md-3">
            
             <input type="text" class="form-control" id="fleetPot" placeholder="Fleet Potential">
            </div>
            <div class="form-group col-md-3">
            
             <input type="text" class="form-control" id="keyManag" placeholder="Key Management Personnel">
            </div>
 
 
 
           
         </div>
        <h4 style="padding-top: 20px;">COMPANY REGISTERED ADDRESS</h4>
         <div class="row">
 
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="compRegAdd" placeholder="Address">
            </div>
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="compRegAddp" placeholder="Pin code">
            </div>
             <div class="form-group col-md-3" style="position:relative">
                 <input id="compRegAddc" class="form-control" type="text" name="modelname" placeholder="City">
            </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="compRegAdds" placeholder="State" disabled>
            </div>
            <div class="form-group col-md-3">
                <input type="text" class="form-control" id="compRegAddCo" placeholder="Country" disabled>
            </div>
            
            <div class="form-group col-md-3">
            
             <input type="text" class="form-control" id="compRegAddpgstn" placeholder="GSTN">
            </div>
        </div>
           <h4 style="padding-top: 20px;">CORPORATE ADDRESS OF THE COMPANY</h4>
         <div class="row">
 
            <div class="form-group col-md-3">
            
             <input type="text" class="form-control" id="corpAdd" placeholder="Address">
            </div>
            <div class="form-group col-md-3">
            
             <input type="text" class="form-control" id="corpAddp" placeholder="Pin code">
            </div>
             <div class="form-group col-md-3" style="position:relative">
             <input id="corpAddc" class="form-control" type="text" name="modelname" placeholder="City">
            </div>
             <div class="form-group col-md-3">
            <input type="text" class="form-control" id="corpAdds" placeholder="State" disabled>
            </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="corpAddCo" placeholder="Country" disabled>
            </div>
           
            <div class="form-group col-md-3">
            
             <input type="text" class="form-control" id="corpAddgstn" placeholder="GSTN">
            </div>
        </div>
 <div class="button">
  <button type="submit" class="btn btn-primary cancel">CANCEL</button>
  <button type="button" class="btn btn-primary save" onclick="addClientCom()">SAVE</button>
           </form>
         </div>
 
                   </div>

								<div id="tabe-18" class="container tab-pane fade">
									<form>
									    <div class="button">
												<button type="button" class="btn btn-success add_field_button">Add New Child Account</button>
											</div>
											<h4 style="padding-top: 20px;"></h4>
										<div class="row">
											<div class="form-group col-md-3">
												<input type="text" class="form-control" id="company-profile" placeholder="Id">
											</div>
											<div class="form-group col-md-3">

												<input type="text" class="form-control" id="input-2" placeholder="Name">
											</div>
											<div class="form-group col-md-3">

												<input type="text" class="form-control" id="input-3" placeholder="Function">
											</div>
											<div class="form-group col-md-3">

												<input type="text" class="form-control" id="input-4" placeholder="Email Id">
											</div>
											<div class="form-group col-md-3">

												<input type="text" class="form-control" id="input-4" placeholder="Status">
											</div>
										</div>
										<h4 style="padding-top: 20px;">INVOICING ADDRESS</h4>
										<div class="row">

											<div class="form-group col-md-3">

												<input type="text" class="form-control" id="input-4" placeholder="Address">
											</div>
											<div class="form-group col-md-3">
												<input type="text" class="form-control" id="input-4" placeholder="Pin code">
											</div>
											<div class="form-group col-md-3" style="position:relative">
												<input id="myInput2" class="form-control" type="text" name="modelname" placeholder="City">
											</div>

											<div class="form-group col-md-3">
												<input type="text" class="form-control" id="input-4" placeholder="State" disabled>
											</div>

											<div class="form-group col-md-3">
												<input type="text" class="form-control" id="input-4" placeholder="Country" disabled>
											</div>

											<div class="form-group col-md-3">

												<input type="text" class="form-control" id="input-4" placeholder="GSTN">
											</div>
										</div>
										<h4 style="padding-top: 20px;">VEHICLE REGISTRATION ADDRESS</h4>
										<div class="row">

											<div class="form-group col-md-3">

												<input type="text" class="form-control" id="input-4" placeholder="Address">
											</div>
											<div class="form-group col-md-3">

												<input type="text" class="form-control" id="input-4" placeholder="Pin code">
											</div>
											<div class="form-group col-md-3" style="position:relative">
												<input id="myInput3" class="form-control" type="text" name="modelname" placeholder="City">
											</div>

											<div class="form-group col-md-3">
												<input type="text" class="form-control" id="input-4" placeholder="State" disabled>
											</div>

											<div class="form-group col-md-3">
												<input type="text" class="form-control" id="input-4" placeholder="Country" disabled>
											</div>

											<div class="form-group col-md-3">

												<input type="text" class="form-control" id="input-4" placeholder="GSTN">
											</div>
										</div>

										<h4 style="padding-top: 20px;">INVOICE DISPATCH ADDRESS</h4>
										<div class="row">

											<div class="form-group col-md-3">

												<input type="text" class="form-control" id="input-4" placeholder="Address">
											</div>
											<div class="form-group col-md-3">

												<input type="text" class="form-control" id="input-4" placeholder="Pin code">
											</div>
											<div class="form-group col-md-3" style="position:relative">
												<input id="myInput4" class="form-control" type="text" name="modelname" placeholder="City">
											</div>

											<div class="form-group col-md-3">
												<input type="text" class="form-control" id="input-4" placeholder="State" disabled>
											</div>

											<div class="form-group col-md-3">
												<input type="text" class="form-control" id="input-4" placeholder="Country" disabled>
											</div>
											<div class="form-group col-md-3">

												<input type="text" class="form-control" id="input-4" placeholder="GSTN">
											</div>
											
										
										</div>
										
										<h4 style="padding-top: 20px;">INVOICING PARAMETERS</h4>
										<div class="row">
													<div class="form-group col-md-3">
														<input type="text" class="form-control" id="input-1" placeholder="Mode Of Payment">
													</div>
													<div class="form-group col-md-3">
														<select class="form-control">
															<option>Select Invocing Cycle</option>
															<option>Monthly</option>
															<option>Quarterly</option>
															<option>Half yearly</option>
															<option>Yearly</option>
														</select>
													</div>
													<div class="form-group col-md-3">

														<input type="text" class="form-control" id="input-3" placeholder="Credit Period">
													</div>
													<div class="form-group col-md-3">
														<select class="form-control" id="invoicingType">
															<option>Select Invoicing Type</option>
															<option>Pro Rata</option>
															<option>Anniversary</option>
														</select>
													</div>
													<div class="form-group col-md-6 d-none" id="invoicearea">
													    <div class="row">
													        <div class="col-md-6">
														<input class="" name="invoice" type="radio" id="advancebilling"/>
														<lable for="advancebilling">Advance Billing</lable>
														<input class="" name="invoice" type="radio" id="arrears"/>
														<lable for="arrears">Arrears</lable>
														</div>
													
														<div class="col-md-6">
														<input class="" name="consolidated" type="radio" id="single-invoicing"/>
														<lable for="advancebilling">Single Invoicing</lable>
														<input class="" name="consolidated" type="radio" id="consolidated-invoicing"/>
														<lable for="arrears">Consolidated Invoicing</lable>
															</div>
															</div>
													</div>
													
													<div class="form-group col-md-6">
														<textarea rows="4" class="form-control" id="basic-textarea" placeholder="Remarks"></textarea>
													</div>
												

												</div>

										<div class="button">
											<button type="submit" class="btn btn-primary cancel">CANCEL</button>
											<button type="submit" class="btn btn-primary save">SAVE</button>
										</div>
									</form>
								</div>
								<div id="tabe-19" class="container tab-pane fade">
									<form>
										<div class="row">
											<div class="form-group col-md-2">
												<input type="text" class="form-control" id="input-1" placeholder="Name">
											</div>
											<div class="form-group col-md-2">
												<input type="text" class="form-control" id="input-2" placeholder="Function">
											</div>
											<div class="form-group col-md-2">
												<input type="text" class="form-control" id="input-3" placeholder="Mobile Number">
											</div>
												<div class="form-group col-md-2">
												<input type="text" class="form-control" id="input-3" placeholder="Landline Number">
											</div>
											<div class="form-group col-md-2">
												<input type="text" class="form-control" id="input-4" placeholder="Email Id">
											</div>
											<div class="form-group col-md-1">
											</div>
											<div class="form-group col-md-1">
												<button type="button" class="btn btn-success add_field_button"> <i class="fa fa-plus" aria-hidden="true"></i> </button>
											</div>
											<div class="form-group col-md-2">

												<select id="inputState" class="form-control">
													<option>Coordinator</option>
													<option>Approver</option>
													<option>Other</option>
												</select>
											</div>
												<div class="form-group col-md-2">
												<input type="text" class="form-control" id="input-3" placeholder="Area of Responsibility">
											</div>
										
										</div>
										<div class="input_fields_wrap">

										</div>
										<div class="button">
											<button type="submit" class="btn btn-primary cancel">CANCEL</button>
											<button type="submit" class="btn btn-primary save">SAVE</button>
										</div>
									</form>
								</div>
								<!--<div id="tabe-20" class="container tab-pane fade">-->
								<!--	<form>-->
								<!--		<div class="card-body kkkk">-->
								<!--			<h4 style="padding-bottom: 10px;">Cam Profile</h4>-->
								<!--			<div class="row">-->
								<!--				<div class="form-group col-md-3">-->
								<!--					<select id="inputname" class="form-control">-->
								<!--						<option> Name </option>-->
								<!--						<option> Rahul </option>-->
								<!--						<option> Sumit </option>-->
								<!--						<option> Rohan </option>-->
								<!--					</select>-->
								<!--				</div>-->
								<!--				<div class="form-group col-md-3">-->
								<!--					<input type="text" class="form-control" id="input-3" placeholder="Cin Number">-->
								<!--				</div>-->
								<!--				<div class="col-md-12">-->
								<!--					<div class="row">-->
								<!--						<div class="col-md-12">-->
								<!--							<h4 style="padding-bottom: 10px;">Registered Address</h4>-->
								<!--						</div>-->
								<!--						<div class="form-group col-md-3">-->
								<!--							<input type="text" class="form-control" id="input-4" placeholder="Address">-->
								<!--						</div>-->
								<!--						<div class="form-group col-md-3">-->
								<!--							<input type="text" class="form-control" id="input-4" placeholder="Pin code">-->
								<!--						</div>-->

								<!--						<div class="form-group col-md-3">-->
								<!--							<input type="text" class="form-control" id="input-4" placeholder="State" disabled>-->
								<!--						</div>-->
								<!--						<div class="form-group col-md-3">-->
								<!--							<input type="text" class="form-control" id="input-4" placeholder="Country" disabled>-->
								<!--						</div>-->

								<!--						<div class="form-group col-md-3">-->
								<!--							<input type="text" class="form-control" id="input-4" placeholder="City" disabled>-->
								<!--						</div>-->
								<!--						<div class="form-group col-md-3">-->
								<!--							<input type="text" class="form-control" id="input-4" placeholder="GSTN">-->
								<!--						</div>-->
								<!--					</div>-->
								<!--				</div>-->
								<!--				<div class="form-group col-md-12">-->
								<!--					<div class="row">-->
								<!--						<div class="col-md-12">-->
								<!--							<h4 style="padding-bottom: 10px;">Corporate Addres</h4>-->
								<!--						</div>-->
								<!--						<div class="form-group col-md-3">-->
								<!--							<input type="text" class="form-control" id="input-4" placeholder="Address">-->
								<!--						</div>-->
								<!--						<div class="form-group col-md-3">-->
								<!--							<input type="text" class="form-control" id="input-4" placeholder="Pin code">-->
								<!--						</div>-->
								<!--						<div class="form-group col-md-3">-->
								<!--							<input type="text" class="form-control" id="input-4" placeholder="State" disabled>-->
								<!--						</div>-->
								<!--						<div class="form-group col-md-3">-->
								<!--							<input type="text" class="form-control" id="input-4" placeholder="Country" disabled>-->
								<!--						</div>-->

								<!--						<div class="form-group col-md-3">-->
								<!--							<input type="text" class="form-control" id="input-4" placeholder="City" disabled>-->
								<!--						</div>-->
								<!--						<div class="form-group col-md-3">-->
								<!--							<input type="text" class="form-control" id="input-4" placeholder="GSTN">-->
								<!--						</div>-->
								<!--					</div>-->
								<!--				</div>-->


								<!--			</div>-->
								<!--		</form>-->
								<!--	</div>-->
								<!--	<div class="card-body kkkk">-->
								<!--		<form>-->
								<!--			<div class="row">-->
								<!--				<div class="form-group col-md-3">-->
								<!--					<input type="text" class="form-control" id="input-1" placeholder="India">-->
								<!--				</div>-->
								<!--				<div class="form-group col-md-3">-->
								<!--					<input type="text" class="form-control" id="input-3" placeholder="Global">-->
								<!--				</div>-->
								<!--				<div class="form-group col-md-3">-->
								<!--					<input type="text" class="form-control" id="input-2" placeholder="Promoters">-->
								<!--				</div>-->
								<!--				<div class="form-group col-md-3">-->
								<!--					<input type="text" class="form-control" id="input-2" placeholder="Auditors">-->
								<!--				</div>-->
												<!--<div class="form-group col-md-3">-->
													<!-- <input type="text" class="form-control" id="input-2" placeholder="Bankers">-->
													<!--</div>-->
								<!--					<div class="form-group col-md-3">-->
								<!--						<select id="inputname" class="form-control">-->
								<!--							<option> Bankers </option>-->
								<!--							<option>  </option>-->
								<!--							<option>  </option>-->
								<!--							<option>  </option>-->
								<!--						</select>-->
								<!--					</div>-->
								<!--				</div>-->
								<!--			</form>-->
								<!--		</div>-->
								<!--		<div class="card-body kkkk">-->
								<!--			<form>-->
								<!--				<div class="row">-->
								<!--					<div class="form-group col-md-3">-->
								<!--						<input type="text" class="form-control" id="input-1" placeholder="Residual Value">-->
								<!--					</div>-->
								<!--					<div class="form-group col-md-3">-->
								<!--						<input type="text" class="form-control" id="input-3" placeholder="Tenure">-->
								<!--					</div>-->
								<!--					<div class="form-group col-md-3">-->

								<!--						<select class="form-control">-->
								<!--							<option>Select Packages</option>-->
								<!--							<option>Red Carpet Lease</option>-->
								<!--							<option>Premium Lease</option>-->
								<!--							<option>Excutive Lease</option>-->
								<!--						</select>-->


								<!--					</div>-->
								<!--					<div class="form-group col-md-3">-->
								<!--						<input type="text" class="form-control" id="input-2" placeholder="Client Annual Potential">-->
								<!--					</div>-->
								<!--					<div class="form-group col-md-3">-->
								<!--						<input type="text" class="form-control" id="input-2" placeholder="Client Total Potential">-->
								<!--					</div>-->
								<!--					<div class="form-group col-md-3">-->
								<!--						<input type="text" class="form-control" id="input-2" placeholder="Requested Exposure: Amount (In Lacs)">-->
								<!--					</div>-->
								<!--					<div class="form-group col-md-3">-->
								<!--						<input type="text" class="form-control" id="input-2" placeholder="Cam Requested By">-->
								<!--					</div>-->
								<!--					<div class="form-group col-md-3">-->
								<!--						<input type="text" class="form-control" id="input-2" placeholder="Date of Request">-->
								<!--					</div>-->
								<!--				</div>-->
								<!--			</form>-->
								<!--		</div>-->
								<!--		<h4 style="padding-top: 20px;">Appraisal Information</h4>-->
								<!--		<div class="row">-->

								<!--			<div class="form-group col-md-3">-->
								<!--				<input type="text" class="form-control" id="input-1" placeholder="Client Group">-->
								<!--			</div>-->
								<!--			<div class="form-group col-md-3">-->

								<!--				<input type="text" class="form-control" id="input-2" placeholder="CIN number">-->
								<!--			</div>-->
								<!--			<div class="form-group col-md-3">-->

								<!--				<input type="text" class="form-control" id="input-3" placeholder="Request date">-->
								<!--			</div>-->
								<!--			<div class="form-group col-md-3">-->

								<!--				<input type="text" class="form-control" id="input-3" placeholder="Credit Submission Date by Credit Team">-->
								<!--			</div>-->


								<!--			<div class="form-group col-md-3">-->
								<!--				<input type="text" class="form-control" id="input-1" placeholder="Credit Apporval Date">-->
								<!--			</div>-->
								<!--			<div class="form-group col-md-3">-->

								<!--				<input type="text" class="form-control" id="input-2" placeholder="CAM Validity">-->
								<!--			</div>-->
								<!--			<div class="form-group col-md-3">-->

								<!--				<input type="text" class="form-control" id="input-3" placeholder="CAM Review date">-->
								<!--			</div>-->
								<!--			<div class="form-group col-md-3">-->

								<!--				<input type="text" class="form-control" id="input-3" placeholder="Credit Limit Approved">-->
								<!--			</div>-->
								<!--			<div class="form-group col-md-3">-->

								<!--				<input type="text" class="form-control" id="input-2" placeholder="Credit Amount Used">-->
								<!--			</div>-->
								<!--			<div class="form-group col-md-3">-->

								<!--				<input type="text" class="form-control" id="input-2" placeholder="Down Payment">-->
								<!--			</div>-->
								<!--			<div class="form-group col-md-3">-->

								<!--				<input type="text" class="form-control" id="input-2" placeholder="Security Deposit">-->
								<!--			</div>-->
								<!--			<div class="form-group col-md-3">-->

								<!--				<input type="text" class="form-control" id="input-2" placeholder="Management Fee">-->
								<!--			</div>-->
								<!--			<div class="form-group col-md-3">-->
								<!--				<input type="text" class="form-control" id="input-2" placeholder="Balance Credit">-->
								<!--			</div>-->
								<!--			<div class="form-group col-md-3">-->
								<!--				<input type="text" class="form-control" id="input-2" placeholder="Credit Period Month">-->
								<!--			</div>-->
								<!--			<div class="form-group col-md-3">-->
								<!--				<input type="text" class="form-control" id="input-2" placeholder="Approved Credit Validity Date">-->
								<!--			</div>-->
								<!--			<br>-->
								<!--			<br>-->
								<!--			<br>-->
								<!--			<table class="table table-bordered">-->
								<!--				<thead>-->
								<!--					<tr style="text-align: center;">-->
								<!--						<th>Name of Client</th>-->
								<!--						<th colspan="3">In Million</th>-->
								<!--					</tr>-->
								<!--				</thead>-->
								<!--				<tbody>-->
								<!--					<tr style="text-align: center;">-->
								<!--						<td></td>-->
								<!--						<td style="font-size: 12px;">FY 17</td>-->
								<!--						<td style="font-size: 12px;">FY 16</td>-->
								<!--						<td style="font-size: 12px;">FY 15</td>-->
								<!--					</tr>-->
								<!--					<tr style="text-align: center; ">-->
								<!--						<th style="text-align: left; font-size: 12px; width: 152px;">Sales</th>-->
								<!--						<td style="font-size: 12px; width: 200px;"> <input type="text" class="form-control" id="input-2"></td>-->
								<!--						<td style="font-size: 12px;"><input type="text" class="form-control" id="input-2"></td>-->
								<!--						<td style="font-size: 12px;"><input type="text" class="form-control" id="input-2"></td>-->
								<!--					</tr>-->
								<!--					<tr style="text-align: center;">-->
								<!--						<th style="text-align: left; font-size: 12px; width: 152px;">PBT</th>-->
								<!--						<td style="font-size: 12px;"> <input type="text" class="form-control" id="input-2"></td>-->
								<!--						<td style="font-size: 12px;"><input type="text" class="form-control" id="input-2"></td>-->
								<!--						<td style="font-size: 12px;"><input type="text" class="form-control" id="input-2"></td>-->
								<!--					</tr>-->
								<!--					<tr style="text-align: center;">-->
								<!--						<th style="text-align: left; font-size: 12px; width: 152px;">Margin %</th>-->
								<!--						<td style="font-size: 12px;">1.91%</td>-->
								<!--						<td style="font-size: 12px;">4.85%</td>-->
								<!--						<td style="font-size: 12px;">10.56%</td>-->

								<!--					</tr>-->
								<!--					<tr style="text-align: center;">-->
								<!--						<th style="text-align: left; font-size: 12px; width: 152px;">Growth</th>-->
								<!--						<td style="font-size: 12px;">-2%</td>-->
								<!--						<td style="font-size: 12px;">5%</td>-->
								<!--						<td style="font-size: 12px;"></td>-->
								<!--					</tr>-->
								<!--				</tbody>-->
								<!--			</table>-->

								<!--		</div>-->
								<!--		<div class="row" style="margin-top:20px;">-->

								<!--			<div class="input-group mb-3 col-md-3">-->
								<!--				<label class="col-form-label">Email Attachment</label>-->
								<!--				<input type='file' onchange="readURL(this);" />-->
								<!--			</div>-->
								<!--			<div class="form-group col-md-6">-->
								<!--				 <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5" placeholder="Remarks" spellcheck="false"></textarea>-->
								<!--			</div>-->
								<!--			</div>-->
											
								<!--			<div class="button">-->
								<!--				<button type="submit" class="btn btn-primary save">ACCEPT</button>-->
								<!--				<button type="submit" class="btn btn-primary cancel">REJECT</button>-->
								<!--				<button type="submit" class="btn btn-primary DISCUSSION">DISCUSSION</button>-->
								<!--			</div>-->

								<!--		</form>-->
								<!--	</div>-->
									<div id="tabe-20" class="container tab-pane fade">
                      <form>
                     <div class="card-body kkkk">
               <h4 style="padding-bottom: 10px;">Cam Profile</h4>
               <div class="row">
             <div class="form-group col-md-3">
             <select id="camName" class="form-control">
             <option> Name </option>
             <option> Rahul </option>
             <option> Sumit </option>
             <option> Rohan </option>
             </select>
            </div>
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="camCin" placeholder="Cin Number">
            </div>
            <div class="col-md-12">
            <div class="row">
                 <div class="col-md-12">
                     <h6 class="p-3">Register Address</h6>
                 </div>
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="camRegAdd" placeholder="Address">
            </div>
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="camRegAddPin" placeholder="Pin code">
            </div>
            
              <div class="form-group col-md-3">
            <input type="text" class="form-control" id="camRegAdds" placeholder="State" disabled>
            </div>
            <div class="form-group col-md-3">
                <input type="text" class="form-control" id="camRegAddCo" placeholder="Country" disabled>
            </div>
          
             <div class="form-group col-md-3">
            <input type="text" class="form-control" id="camRegAddc" placeholder="City" disabled>
            </div>
            <div class="form-group col-md-3">
                 <input type="text" class="form-control" id="camRegAddgstn" placeholder="GSTN">
            </div>
        </div>
            </div>
             <div class="form-group col-md-12">
                 <div class="row">
                     <div class="col-md-12">
                     <h6 class="p-3">Corporate Address</h6>
                     </div>
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="camCorpAdd" placeholder="Address">
            </div>
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="camCorpAddp" placeholder="Pin code">
            </div>
             <div class="form-group col-md-3">
            <input type="text" class="form-control" id="camCorpAdds" placeholder="State" disabled>
            </div>
            <div class="form-group col-md-3">
                 <input type="text" class="form-control" id="camCorpAddCo" placeholder="Country" disabled>
            </div>
           
             <div class="form-group col-md-3">
            <input type="text" class="form-control" id="camCorpAddc" placeholder="City" disabled>
            </div>
            <div class="form-group col-md-3">
                 <input type="text" class="form-control" id="camCorpAddgstn" placeholder="GSTN">
            </div>
        </div>
             </div>
            
          
         </div>
           </form>
          </div>
           <div class="card-body kkkk">
             <form>
               <div class="row">
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="india" placeholder="India">
            </div>
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="global" placeholder="Global">
            </div>
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="promoters" placeholder="Promoters">
            </div>
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="auditors" placeholder="Auditors">
            </div>
            <div class="form-group col-md-3">
            <input type="text" class="form-control" id="camBankers" placeholder="Bankers">
            </div>
           
         </div>
           </form>
          </div>
           <div class="card-body kkkk">
             <form>
               <div class="row">
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="residualValue" placeholder="Residual Value">
            </div>
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="tenure" placeholder="Tenure">
            </div>
            <div class="form-group col-md-3">
            
                <select class="form-control" id="packages">
                    <option>Select Packages</option>
                    <option>Red Carpet Lease</option>
                    <option>Premium Lease</option>
                    <option>Excutive Lease</option>
                </select>
             
           
            </div>
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="cap" placeholder="Client Annual Potential">
            </div>
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="ctp" placeholder="Client Total Potential">
            </div>
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="reAmount" placeholder="Requested Exposure: Amount (In Lacs)">
            </div>
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="camReqBy" placeholder="Cam Requested By">
            </div>
             <div class="form-group col-md-3">
             <input type="text" class="form-control" id="dor" placeholder="Date of Request">
            </div>
          
           
            
          
         </div>
           </form>
          </div>
         <h4 style="padding-top: 20px;">Appraisal Information</h4>
               <div class="row">
 
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="apprClientGrp" placeholder="Client Group">
            </div>
            <div class="form-group col-md-3">
  
             <input type="text" class="form-control" id="apprClientcin" placeholder="CIN number">
            </div>
            <div class="form-group col-md-3">
    
             <!-- <input type="date" class="form-control" id="apprClientReqd" placeholder="Request date">
             <div class='container'> -->
             <input type='text' class="form-control" id='apprClientReqd'placeholder="dd-mm-yy" >
            
            </div>
            <div class="form-group col-md-3">
    
             <input type="text" class="form-control" id="apprClientcsd" placeholder="Credit Submission Date by Credit Team">
            </div>
 
 
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="apprClientcad" placeholder="Credit Apporval Date">
            </div>
            <div class="form-group col-md-3">
  
             <input type="text" class="form-control" id="apprClientcamval" placeholder="CAM Validity">
            </div>
            <div class="form-group col-md-3">
    
             <input type="text" class="form-control" id="apprClientcamrevd" placeholder="CAM Review date">
            </div>
            <div class="form-group col-md-3">
    
             <input type="text" class="form-control" id="apprClientcla" placeholder="Credit Limit Approved">
            </div>
            <div class="form-group col-md-3">
  
             <input type="text" class="form-control" id="apprClientcmu" placeholder="Credit Amount Used">
            </div>
              <div class="form-group col-md-3">
  
             <input type="text" class="form-control" id="apprClientdp" placeholder="Down Payment">
            </div>
              <div class="form-group col-md-3">
  
             <input type="text" class="form-control" id="apprClientsd" placeholder="Security Deposit">
            </div>
              <div class="form-group col-md-3">
  
             <input type="text" class="form-control" id="apprClientmf" placeholder="Management Fee">
            </div>
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="apprClientbc" placeholder="Balance Credit">
            </div>
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="apprClientcpm" placeholder="Credit Period Month">
            </div>
            <div class="form-group col-md-3">
             <input type="text" class="form-control" id="apprClientacvd" placeholder="Approved Credit Validity Date">
            </div>
            <br>
            <br>
            <br>
             <table class="table table-bordered">
   <thead>
     <tr style="text-align: center;">
       <th>Name of Client</th>
       <th colspan="3">In Million</th>
     </tr>
   </thead>
   <tbody>
       <tr style="text-align: center;">
       <td></td>
       <td style="font-size: 12px;">FY 17</td>
       <td style="font-size: 12px;">FY 16</td>
       <td style="font-size: 12px;">FY 15</td>
     </tr>
     <tr style="text-align: center; ">
       <th style="text-align: left; font-size: 12px; width: 152px;">Sales</th>
       <td style="font-size: 12px; width: 200px;"> <input type="text" class="form-control" id="salesFy17"></td>
       <td style="font-size: 12px;"><input type="text" class="form-control" id="salesFy16"></td>
       <td style="font-size: 12px;"><input type="text" class="form-control" id="salesFy15"></td>
     </tr>
     <tr style="text-align: center;">
       <th style="text-align: left; font-size: 12px; width: 152px;">PBT</th>
       <td style="font-size: 12px;"><input type="text" class="form-control" id="pbtFy17"></td>
       <td style="font-size: 12px;"><input type="text" class="form-control" id="pbtFy16"></td>
       <td style="font-size: 12px;"><input type="text" class="form-control" id="pbtFy15"></td>
     </tr>
     <tr style="text-align: center;">
       <th style="text-align: left; font-size: 12px; width: 152px;">Margin %</th>
       <td style="font-size: 12px;">1.91%</td>
       <td style="font-size: 12px;">4.85%</td>
       <td style="font-size: 12px;">10.56%</td>
       
     </tr>
     <tr style="text-align: center;">
       <th style="text-align: left; font-size: 12px; width: 152px;">Growth</th>
       <td style="font-size: 12px;">-2%</td>
       <td style="font-size: 12px;">5%</td>
       <td style="font-size: 12px;"></td>
     </tr>
   </tbody>
 </table>
            
         </div>
          <div class="row" style="margin-top:20px;">
 
                                          <div class="input-group mb-3 col-md-3">
                                             <label class="col-form-label">Email Attachment</label>
                                             <input type='file' onchange="readURL(this);" id="emailAtt"/>
                                             <img id="blah" src="assets/images/img_avatar.png" alt="your image" style="width: 100%;">
                                         </div>
                                        
                                         <!--  <div class="input-group mb-3 col-md-6">-->
                                         <!--    <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5" placeholder="Remarks"></textarea>-->
                                         <!--</div>-->
                                        
                                     
            
         </div>
          <div class="button">
               <button type="submit" class="btn btn-primary save">ACCEPT</button>
  <button type="submit" class="btn btn-primary cancel">REJECT</button>
  <button type="submit" class="btn btn-primary DISCUSSION">DISCUSSION</button>
 </div>
 
           </form>
                   </div>
									<div id="tabe-21" class="container tab-pane fade">
										<form>

											<div class="row">

												<div class="input-group mb-3 col-md-3">
													<label class="col-form-label">Pan Card</label>
													<input type='file' onchange="readURL(this);" />
												</div>
												<div class="input-group mb-3 col-md-3">
													<label class="col-form-label">Pan Card</label>
													<input type='file' onchange="readURL(this);" />
												</div>
												<div class="input-group mb-3 col-md-3">
													<label class="col-form-label">Pan Card</label>
													<input type='file' onchange="readURL(this);" />
												</div>
												<div class="input-group mb-3 col-md-3">
													<label class="col-form-label">Pan Card</label>
													<input type='file' onchange="readURL(this);" />
												</div>
												<div class="input-group mb-3 col-md-3">
													<label class="col-form-label">Pan Card</label>
													<input type='file' onchange="readURL(this);" />
												</div>
												<div class="input-group mb-3 col-md-3">
													<label class="col-form-label">Pan Card</label>
													<input type='file' onchange="readURL(this);" />
												</div>
												<div class="input-group mb-3 col-md-3">
													<label class="col-form-label">Pan Card</label>
													<input type='file' onchange="readURL(this);" />
												</div>
												<div class="input-group mb-3 col-md-3">
													<label class="col-form-label">Pan Card</label>
													<input type='file' onchange="readURL(this);" />
												</div>

											</div>
										</form>
									</div>
									<div id="tabe-22" class="container tab-pane fade">
										<form>
											<div class="button">
												<button type="submit" class="btn btn-primary save">PDF</button>
											</div>
											<h4 style="padding-top: 20px;">PRODUCTS</h4>
											<div class="row">

												<div class="form-group col-md-3">

													<input type="text" class="form-control" id="input-2" placeholder="RV TYPE">
												</div>
											</div>
											<div class="row">
												<div class="form-group col-md-3">

													<input type="text" class="form-control" id="input-4" placeholder="DEVIATION ON RV (%)">
												</div>
												<div class="form-group col-md-3">

													<input type="text" class="form-control" id="input-4" placeholder="RV % APPLIED">
												</div>
												<div class="form-group col-md-3">
													<select id="inputState" class="form-control">
														<option>INSURANCE MANAGED</option>
														<option>Full term Financed</option>
														<option>Full term Reimbursement</option>
														<option>1st year financed and <br> rest reimbursement</option>
														<option>1st year complimentary <br> and remaining reimbursement</option>
														<option>1st year complimentary <br> and remaining financed.</option>
													</select>
												</div>
												<div class="form-group col-md-3">
													<input type="text" class="form-control" id="input-4" placeholder="MAINTENANCE DEVIATION">
												</div>
												<div class="form-group col-md-3">
													<input type="text" class="form-control" id="input-4" placeholder="MAINTENANCE FEE DEVIATION">
												</div>
												<div class="form-group col-md-3">
													<input type="text" class="form-control" id="input-4" placeholder="FORECLOSURE DISCOUNTING RATE">
												</div>
												<div class="form-group col-md-3">
													<input type="text" class="form-control" id="input-4" placeholder="FORECLOSURE CHARGES-">
												</div>
												<div class="form-group col-md-3">
													<input type="text" class="form-control" id="input-4" placeholder="INTEREST RATE DEVIATION">
												</div>
												<div class="form-group col-md-3">
													<select id="inputState" class="form-control">
														<option>MAINTENANCE TYPE</option>
														<option>INCLUDED IN LEASE RENTAL</option>
														<option>Full term Reimbursement</option>
														<option>PREFIXED BUDGET</option>
														<option>EXCLUDED AVIS SERVICES</option>
													</select>
												</div>
												<div class="form-group col-md-3">
													<input type="text" class="form-control" id="input-4" placeholder="ROAD TAX TYPE">
												</div>
												<div class="form-group col-md-3">
													<input type="text" class="form-control" id="input-4" placeholder="RECONCILIATION-">
												</div>  

												<div class="form-group col-md-3">
													<input type="text" class="form-control" id="input-4" placeholder="TOTAL LOSS RETENTION-">
												</div>
												<!--<div class="form-group col-md-3">-->
													<!-- <input type="text" class="form-control" id="input-4" placeholder="PENAL INTEREST">-->
													<!--</div> -->
													<div class="form-group col-md-6">
														<textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5" placeholder="REMARKS"></textarea>
													</div>        
												</div> 

												<h4 style="padding-top: 20px;">Service Package</h4>
												<div class="card-body">
													<!--<div class="card-header text-uppercase">Service Package</div>-->
													<div class="card-body bbbb">
														<div class="row">
															<div class="col-lg-6">
																<div class="form-group">
																	<select multiple="multiple" class="multi-select" id="my_multi_select1" name="my_multi_select1[]">
																		<option>Red Carpet Lease</option>
																		<option>Premium Lease</option>
																		<option>Executive Lease</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>



												<div class="button">
													<button type="submit" class="btn btn-primary cancel">CANCEL</button>
													<button type="submit" class="btn btn-primary save">SAVE</button>
												</div>
											</form>
										</div>
										<!--<div id="tabe-23" class="container tab-pane fade">-->
										<!--	<form>-->
										<!--		<div class="row">-->
										<!--			<div class="form-group col-md-3">-->
										<!--				<input type="text" class="form-control" id="input-1" placeholder="Mode Of Payment">-->
										<!--			</div>-->
										<!--			<div class="form-group col-md-3">-->
										<!--				<select class="form-control">-->
										<!--					<option>Select Invocing Cycle</option>-->
										<!--					<option>Monthly</option>-->
										<!--					<option>Quarterly</option>-->
										<!--					<option>Half yearly</option>-->
										<!--					<option>Yearly</option>-->
										<!--				</select>-->
										<!--			</div>-->
										<!--			<div class="form-group col-md-3">-->

										<!--				<input type="text" class="form-control" id="input-3" placeholder="Credit Period">-->
										<!--			</div>-->
										<!--			<div class="form-group col-md-3">-->
										<!--				<select class="form-control" id="invoicingType">-->
										<!--					<option>Select Invoicing Type</option>-->
										<!--					<option>Pro Rata</option>-->
										<!--					<option>Anniversary</option>-->
										<!--				</select>-->
										<!--			</div>-->
										<!--			<div class="form-group col-md-6 d-none" id="invoicearea">-->
										<!--				<input class="" name="invoice" type="radio" id="advancebilling"/>-->
										<!--				<lable for="advancebilling">Advance Billing</lable>-->
										<!--				<input class="" name="invoice" type="radio" id="arrears"/>-->
										<!--				<lable for="arrears">Arrears</lable>-->
														
														
										<!--				<input class="" name="invoice" type="radio" id="advancebilling"/>-->
										<!--				<lable for="advancebilling">Single Invoicing</lable>-->
										<!--				<input class="" name="invoice" type="radio" id="arrears"/>-->
										<!--				<lable for="arrears">Consolidated Invoicing</lable>-->
										<!--			</div>-->
													
										<!--			<div class="form-group col-md-6">-->
										<!--				<textarea rows="4" class="form-control" id="basic-textarea" placeholder="Remarks"></textarea>-->
										<!--			</div>-->

										<!--		</div>-->
										<!--		<div class="button">-->
										<!--			<button type="submit" class="btn btn-primary cancel">CANCEL</button>-->
										<!--			<button type="submit" class="btn btn-primary save">SAVE</button>-->
										<!--		</div>-->
										<!--	</form>-->
										<!--</div>-->

									</div>
								</div>
							</div>
						</div>
					</div><!--End Row-->


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
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
             //text box increment
            $(wrapper).append('<div class="row"><div class="form-group col-md-2"><input type="text" class="form-control" id="Name"'+x+' placeholder="Name"></div><div class="form-group col-md-2"><input type="text" class="form-control" id="function"'+x+' placeholder="Function"></div><div class="form-group col-md-2"><input type="text" class="form-control" id="contact"'+x+' placeholder="Contact Number"></div><div class="form-group col-md-2"> <input type="text" class="form-control" id="email"'+x+' placeholder="Email Id"></div><div class="form-group col-md-2"><select id="coor"'+x+' class="form-control"><option value="Coordinator">Coordinator</option><option value="Approver">Approver</option><option>Other</option></select></div><button type="button" class="btn btn-danger sg-remove remove_field">-</button></div></div>'); //add input box
            x++;
          }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>


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
</script>
<script src="<?php echo ASSET_URL; ?>admin/plugins/validator.js"></script>
