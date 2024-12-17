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
											<h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Centre Report</h1>
											<!--end::Title-->
											<!--begin::Breadcrumb-->
											<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
												<!--begin::Item-->
												<li class="breadcrumb-item text-muted">
													<a href="index.html" class="text-muted text-hover-primary">Report</a>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item">
													<span class="bullet bg-gray-500 w-5px h-2px"></span>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item text-muted">Centre Report</li>
												<!--end::Item-->
												
											</ul>
											<!--end::Breadcrumb-->
										</div>
										<!--end::Page title-->
										<!--begin::Actions-->
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
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card header-->
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
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body py-4">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="dt_staff_list">
												<thead>
													<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
														<th class="min-w-5px">No</th>
														<th class="min-w-125px">Centre Name</th>
														<th class="min-w-125px">Register Date</th>
														<th class="min-w-125px">Status</th>
														<th class="min-w-125px">Total Staff</th>
														<th class="text-end min-w-100px">Actions</th>
													</tr>
												</thead>
												<tbody class="text-gray-600 fw-semibold">
													<? if($centres){ ?>
													<? $no = 1; ?>
													<? foreach ($centres as $key) { ?>
													<?
													//$centre = get_any_table_row(array('id' => $key['centre_id']), 'centre');
													?>
													<tr>
														<td><?=$no++;?></td>
														<td><?=strtoupper($key['name'])?></td>
														<td><?=convert_date($key['create_dt'])?></td>
														<td>
															<? if($key['status'] == 0){ ?>
															<span class="badge badge-warning">Pending Approval</span>
															<? } else { ?>
															<span class="badge badge-success">Registered</span>
															<? } ?>
														</td>
														<td>100</td>
														<td class="text-end">
															<a href="<?=base_url('manager/report_details/'.$key['id'])?>" class="btn btn-light btn-primary btn-flex btn-center btn-sm">Report</a>
															<!-- <a href="#" class="btn btn-light btn-danger btn-flex btn-center btn-sm" data-kt-menu-placement="bottom-end">Delete</a> -->
														</td>
													</tr>
													<? } ?>
													<? } ?>
												</tbody>
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




						<div class="modal fade" id="kt_modal_new_address" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-850px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Form-->
					<form class="form" action="#" id="kt_modal_new_address_form">
						<!--begin::Modal header-->
						<div class="modal-header" id="kt_modal_new_address_header">
							<!--begin::Modal title-->
							<h2>Register New Recycling Centres</h2>
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
								<div class="d-flex flex-column mb-1 fv-row">
									<!--begin::Label-->
									<label class="required fs-5 fw-semibold mb-2">Address</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control" placeholder="Address" name="address1" />
									<!--end::Input-->
								</div>
								<div class="d-flex flex-column mb-1 fv-row">
									<!--begin::Label-->
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control" placeholder="Address" name="address2" />
									<!--end::Input-->
								</div>
								<div class="d-flex flex-column mb-5 fv-row">
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control" placeholder="Address" name="address3" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
						
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row g-9 mb-5">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--begin::Label-->
										<label class="fs-5 fw-semibold mb-2">Postcode</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input class="form-control" type="text" placeholder="Postcode" name="postcode" />
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--begin::Label-->
										<label class="fs-5 fw-semibold mb-2">City</label>
										<!--end::Label-->
										<!--begin::Input-->
										<!-- <input class="form-control" type="text" placeholder="City" name="city" /> -->
										<select class="form-select" name="city" data-control="select2" data-dropdown-parent="#kt_modal_new_address" data-placeholder="Select an option" data-allow-clear="true">
					                        <option value="">Select City</option>
										    <? foreach($ref_city as $city){ ?>
										    <option value="<?=$city['id']?>"><?=$city['descs']?></option>
											<? } ?>
					                    </select>
										<!--end::Input-->
										<!--end::Input-->
									</div>
									<!--end::Col-->
								</div>
								<div class="row g-9 mb-5">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--begin::Label-->
										<label class="fs-5 fw-semibold mb-2">State</label>
										<!--end::Label-->
										<!--begin::Input-->
										<!-- <input class="form-control" type="text" placeholder="State" name="state" /> -->
										<select class="form-select" name="state" data-control="select2" data-dropdown-parent="#kt_modal_new_address" data-placeholder="Select an option" data-allow-clear="true">
					                        <option value="">Select State</option>
										    <? foreach($ref_state as $state){ ?>
										    <option value="<?=$state['id']?>"><?=$state['descs']?></option>
											<? } ?>
					                    </select>
										<!--end::Input-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--begin::Label-->
										<label class="fs-5 fw-semibold mb-2">Phone No.</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input class="form-control" type="text" placeholder="Phone No." name="phone_no" />
										<!--end::Input-->
									</div>
									<!--end::Col-->
								</div>
								<div class="row g-9 mb-5">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--begin::Label-->
										<label class="fs-5 fw-semibold mb-2">Email</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input class="form-control" type="text" placeholder="Email" name="email" />
										<!--end::Input-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<!--end::Col-->
								</div>
							</div>
							<!--end::Scroll-->
						</div>
						<!--end::Modal body-->
						<!--begin::Modal footer-->
						<div class="modal-footer flex-center">
							<!--begin::Button-->
							<button type="reset" id="kt_modal_new_address_cancel" class="btn btn-light me-3">Discard</button>
							<!--end::Button-->
							<!--begin::Button-->
							<button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
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