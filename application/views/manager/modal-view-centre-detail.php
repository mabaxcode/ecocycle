<div class="modal-dialog modal-dialog-centered mw-850px">
	<!--begin::Modal content-->
	<div class="modal-content">
		<!--begin::Form-->
		<form class="form" action="#" id="kt_modal_new_address_form">

			<!--begin::Modal header-->
			<div class="modal-header" id="kt_modal_new_address_header">
				<!--begin::Modal title-->
				<h2>Recycling Centres Details</h2>
				<!--end::Modal title-->
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-outline ki-cross fs-1"></i>
				</div>
				<!--end::Close-->
			</div>
			<!--end::Modal header-->
			


				<!--begin::Card body-->
				<div class="card-body p-9">
					<!--begin::Row-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Centre Name</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6 text-gray-800"><?=strtoupper($centre['name'])?></span>
							<? if($centre['status'] == '0'){ ?>
							<!-- <span class="badge badge-">Registered</span> -->
							<? } else { ?>
							&nbsp;
							<span class="badge badge-success">Verified</span>
							<? } ?>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Address</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8 fv-row">
							<span class="fw-semibold text-gray-800 fs-6"><?=$centre['address1']?>, <?=$centre['address2']?></span>
							<br>
							<span class="fw-semibold text-gray-800 fs-6"><?=$centre['address3']?></span>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">postcode</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8 d-flex align-items-center">
							<span class="fw-bold fs-6 text-gray-800 me-2"><?=$centre['postcode']?></span>
							<!-- <span class="badge badge-success">Verified</span> -->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">City</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary"><?=$city?></a>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">State</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6 text-gray-800"><?=$state?></span>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Phone No.</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6 text-gray-800"><?=$centre['phone_no']?></span>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-10">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Email</label>
						<!--begin::Label-->
						<!--begin::Label-->
						<div class="col-lg-8">
							<span class="fw-semibold fs-6 text-gray-800"><?=$centre['email']?></span>
						</div>
						<!--begin::Label-->
					</div>
					<!--end::Input group-->
					<!--begin::Notice-->
					<? if($centre['status'] == '0'){ ?>
					<div class="notice d-flex bg-light-info rounded border-info border border-dashed p-6">
						<!--begin::Icon-->
						<i class="ki-outline ki-information fs-2tx text-info me-4"></i>
						<!--end::Icon-->
						<!--begin::Wrapper-->
						<div class="d-flex flex-stack flex-grow-1">
							<!--begin::Content-->
							<div class="fw-semibold">
								<!-- <h4 class="text-gray-900 fw-bold">In Review !</h4> -->
								<? if($centre['status'] == '0'){ ?>
								<span class="badge badge-warning">In Review</span>
								<? } else { ?>
								<span class="badge badge-info">Registered</span>
								<? } ?>
								<div class="fs-6 text-gray-700">Your Recycling Centres Registration currently under review process.
								<!-- <a class="fw-bold" href="account/billing.html">Add Payment Method</a>. -->
								</div>
							</div>
							<!--end::Content-->
						</div>
						<!--end::Wrapper-->
					</div>
					<? } ?>
					<!--end::Notice-->
				</div>
				<!--end::Card body-->
			


			<!--begin::Modal footer-->
			<div class="modal-footer flex-center">
				<!--begin::Button-->
				<button type="reset" data-bs-dismiss="modal" class="btn btn-primary me-3">Close</button>
				<!--end::Button-->
				<!--begin::Button-->
				<!-- <button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
					<span class="indicator-label">Register</span>
					<span class="indicator-progress">Please wait... 
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
				</button> -->
				<!--end::Button-->
			</div>
			<!--end::Modal footer-->
		</form>
		<!--end::Form-->
	</div>
</div>