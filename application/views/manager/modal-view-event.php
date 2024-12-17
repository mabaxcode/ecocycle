
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-850px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Form-->
					<form class="form" action="#" id="complete_staff_regis_data_evt">
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
						<!--begin::Modal body-->
						<div class="modal-body py-10 px-lg-17">
							<!--begin::Scroll-->
							<div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
								<!--begin::Notice-->
								<!--begin::Notice-->
								
								<!--end::Notice-->
								<!--end::Notice-->
								<!--begin::Input group-->

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
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Location</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6 text-gray-800"><?=$event['location']?></span>
						</div>
						<!--end::Col-->
					</div>
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Event Date Time</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6 text-gray-800"><?=convert_date($event['event_dt'])?></span>
						</div>
						<!--end::Col-->
					</div>
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Recycling Centre</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6 text-gray-800">
								<?=$centre['name']?>
							</span>
						</div>
						<!--end::Col-->
					</div>
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Request By </label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6 text-gray-800">
								<?=strtoupper($users['name'])?>
							</span>
						</div>
						<!--end::Col-->
					</div>
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-semibold text-muted">Status</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6 text-gray-800">
								
								<span class="badge badge-warning">Pending Approval</span>
								
							</span>
						</div>
						<!--end::Col-->
					</div>

								

								<!--end::Input group-->
								<!--begin::Input group-->
								
							</div>
							<!--end::Scroll-->
						</div>
						<input type="hidden" name="id" value="<?=$event['id']?>">
						<!--end::Modal body-->
						<!--begin::Modal footer-->
						<div class="modal-footer flex-center">
							<!--begin::Button-->
							<button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Close</button>
							<!--end::Button-->
							<!--begin::Button-->
			
							<!--end::Button-->
						</div>
						<!--end::Modal footer-->
					</form>
					<!--end::Form-->
				</div>
			</div>


			<script type="text/javascript">
	$( document ).ready(function() {

        completeStaffRegisEvt('complete_staff_regis_data_evt');

    });
</script>
