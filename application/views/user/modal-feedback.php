<div class="modal-dialog modal-dialog-centered mw-850px">
	<!--begin::Modal content-->
	<div class="modal-content">
		<!--begin::Form-->
		<form class="form" action="#" id="kt_modal_new_address_form">

			<!--begin::Modal header-->
			<div class="modal-header" id="kt_modal_new_address_header">
				<!--begin::Modal title-->
				<h2>Event Feedback</h2>
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
						<label class="col-lg-2 fw-semibold text-muted">Your Feedback</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-10">
							<textarea rows="5" class="form-control" id="feedback"></textarea>
						</div>
						<!--end::Col-->
					</div>
					
					<!--end::Input group-->
					<!--begin::Input group-->
					<?/*
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Status</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6 text-gray-800">
								<? if($users['status'] == 0){ ?>
								<span class="badge badge-danger">In Active</span>
								<? } else { ?>
								<span class="badge badge-success">Active</span>
								<? } ?>
							</span>
						</div>
						<!--end::Col-->
					</div>
					*/?>
					
					<!--end::Input group-->
				</div>
				<!--end::Card body-->
			


			<!--begin::Modal footer-->
			<div class="modal-footer flex-center">
				<!--begin::Button-->
				<a class="btn btn-primary me-3 save-feedback" data-init="<?=$id?>">Give Feedback</a>
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