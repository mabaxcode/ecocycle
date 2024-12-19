<div class="modal-dialog modal-dialog-centered mw-850px">
	<!--begin::Modal content-->
	<div class="modal-content">
		<!--begin::Form-->
		<form class="form" action="#" id="kt_modal_new_address_form">

			<!--begin::Modal header-->
			<div class="modal-header" id="kt_modal_new_address_header">
				<!--begin::Modal title-->
				<h2>Event Details</h2>
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
						<label class="col-lg-4 fw-semibold text-muted">Event Name</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6 text-gray-800"><?=strtoupper($event['name'])?></span>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Date</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6 text-gray-800"><?=dmy($event['event_dt'])?></span>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Location</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6 text-gray-800"><?=ucfirst($event['location'])?></span>
						</div>
						<!--end::Col-->
					</div>
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Volunteer Slots</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6 text-gray-800"><?=$event['slot']?></span>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group--> 
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Description</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6 text-gray-800"><?=$event['justification']?></span>
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
					<div class="row mb-7">
					
						<div class="col-lg-12">
							<span class="fw-bold fs-6 text-gray-800"></span>
					
						<!--end::Col-->

						    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault_eco" />
							    <label class="form-check-label" for="flexCheckDefault">
							        I agree, with the terms and condition.
							    </label>
							</div>
					</div>
					<!--end::Input group-->
				</div>
				<!--end::Card body-->
			


			<!--begin::Modal footer-->
			<div class="modal-footer flex-center">
				<!--begin::Button-->
				<a class="btn btn-primary me-3 proceed-booked" data-init="<?=$key['id']?>">Proceed</a>
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