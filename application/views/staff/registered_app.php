






<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar pt-6 pb-2">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
									<!--begin::Toolbar wrapper-->
									<div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
										<!--begin::Page title-->
										<div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
											<!--begin::Title-->
											<h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Volunteer & Participant</h1>
											<!--end::Title-->
											<!--begin::Breadcrumb-->
											<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
												<!--begin::Item-->
												<li class="breadcrumb-item text-muted">
													<a href="index.html" class="text-muted text-hover-primary">Staff Management</a>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item">
													<span class="bullet bg-gray-500 w-5px h-2px"></span>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item text-muted">Volunteer & Participant</li>
												<!--end::Item-->
												
											</ul>
											<!--end::Breadcrumb-->
										</div>
										<!--end::Page title-->
										<!--begin::Actions-->
										
										<!--end::Actions-->
									</div>
									<!--end::Toolbar wrapper-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-fluid">



									<div class="card mb-5 mb-xl-10">
										<div class="card-body pt-9 pb-0">
											<div class="row">

									            <div class="col-lg-12 mb-5 mt-5">
									                

									                <div class="col-lg-12">
									                    <table class="table text-uppercase bt-0">
									                        <tbody>
									                        	
									                            <tr>
									                                <th class="pt-5" style="width:11%;">KEYWORD</th>
									                                <td>
									                                    <input type="text" class="form-control inpt_data dt-select" name="inpt_data" value="" placeholder="Search by name">
									                                </td>
									                            </tr>
									                           
									                            <tr>
									                                <th class="pt-5" style="width:20%;">Search By Events</th>
									                                <td colspan="3">
									                                <select class="js-example-basic-single form-control select-single inpt_centre dt-select">
									                                   		<option value="">Select Centre Events</option>
									                                   		<? foreach($events as $centre){ ?>
									                                   				<option value="<?=$centre['id']?>"><?=strtoupper($centre['name'])?></option>
									                                   		<? } ?>
									                                </select>
									                            </td>
									                            </tr>
									                            <tr></tr>
									                        </tbody>
									                    </table>
									                </div>
									                <div class="col-lg-12" style="text-align: right;">
									                    <a class="btn btn-warning font-weight-bold mr-2 mb-5 btn-reset-search-nurse">Reset</a>
									                    <a class="btn btn-primary font-weight-bold mr-2 mb-5 btn-search">Search</a>
									                </div>
									               
									            </div>
									        </div>
										</div>
									</div>



									<!--begin::Card-->
									<div class="card">
										<!--begin::Card header-->
										<?/*
										<div class="card-header border-0 pt-6">
											<!--begin::Card title-->
											<div class="card-title">
												<!--begin::Search-->
												<div class="d-flex align-items-center position-relative my-1">
													<i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i>
													<input type="text" data-kt-user-table-filter="search" class="form-control w-250px ps-13" placeholder="Search" />
												</div>
												<!--end::Search-->
											</div>
											<!--begin::Card title-->
											
										</div>
										*/?>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body py-4">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="result-staff-centres">
												<thead>
													<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
														<th class="min-w-125px">No</th>
														<th class="min-w-125px">Name</th>
														<th class="min-w-125px">Email</th>
														<th class="min-w-125px">Joined Event</th>
														<th class="min-w-125px">Status</th>
														<th class="min-w-100px">Actions</th>
													</tr>
												</thead>
												<?/*
												<tbody class="text-gray-600 fw-semibold">
													<? if($staffs){ ?>
													<? foreach ($staffs as $key) { ?>
													<tr>
														<td class="d-flex align-items-center">
															<!--begin::User details-->
															<div class="d-flex flex-column">
																<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1"><?=$key['name']?></a>
																<!-- <span>smith@kpmg.com</span> -->
															</div>
															<!--begin::User details-->
														</td>
														<td><?=$key['email']?></td>
														<td><?=$key['phone_no']?></td>
														<td><?=$key['status']?></td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-primary btn-flex btn-center btn-sm detail-register" data-kt-menu-placement="bottom-end" data-init="<?=$key['id']?>">Details</a>
															<!-- <a href="#" class="btn btn-light btn-danger btn-flex btn-center btn-sm" data-kt-menu-placement="bottom-end">Delete</a> -->
														</td>
													</tr>
													<? } ?>
													<? } ?>
												</tbody>
												*/?>
											</table>
											<!--end::Table-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>



						<?/*
						<div class="modal fade" id="kt_modal_new_address_staff" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-850px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Form-->
					<form class="form" action="#" id="kt_modal_new_address_form_staff">
						<!--begin::Modal header-->
						<div class="modal-header" id="kt_modal_new_address_header">
							<!--begin::Modal title-->
							<h2>Add New Staff</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
								<i class="ki-outline ki-cross fs-1"></i>
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body py-10 px-lg-17">
							<!--begin::Scroll-->
							<div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
								<!--begin::Notice-->
								<!--begin::Notice-->
								
								<!--end::Notice-->
								<!--end::Notice-->
								<!--begin::Input group-->

								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class="required fs-5 fw-semibold mb-2">Centre</label>
									<!--end::Label-->
									<!--begin::Input-->
									<select class="form-select" name="centre" data-control="select2" data-dropdown-parent="#kt_modal_new_address_staff" data-placeholder="Select an option" data-allow-clear="true">
				                        <option value="">Select Centres</option>
									    <? foreach($approved_centre as $keyCentre){ ?>
									    <option value="<?=$keyCentre['id']?>"><?=$keyCentre['name']?></option>
										<? } ?>
				                    </select>
									<!--end::Input-->
								</div>
								
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class="required fs-5 fw-semibold mb-2">Name</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control" placeholder="Centre Name" name="name" />
									<!--end::Input-->
								</div>

						
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class="required fs-5 fw-semibold mb-2">Email</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control" placeholder="Email" name="email" />
									<!--end::Input-->
								</div>
								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class="required fs-5 fw-semibold mb-2">Phone No.</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control" placeholder="Phone No." name="phone_no" />
									<!--end::Input-->
								</div>
								
							</div>
							<!--end::Scroll-->
						</div>
						<!--end::Modal body-->
						<!--begin::Modal footer-->
						<div class="modal-footer flex-center">
							<!--begin::Button-->
							<button type="reset" id="kt_modal_new_address_cancel_staff" class="btn btn-light me-3">Discard</button>
							<!--end::Button-->
							<!--begin::Button-->
							<button type="submit" id="kt_modal_new_address_submit_staff" class="btn btn-primary">
								<span class="indicator-label">Register</span>
								<span class="indicator-progress">Please wait... 
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
							<!--end::Button-->
						</div>
						<!--end::Modal footer-->
					</form>
					<!--end::Form-->
				</div>
			</div>
		</div>
		*/?>

	

		
