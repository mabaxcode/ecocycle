
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-850px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Form-->
					<form class="form" action="#" id="complete_staff_regis_data">
						<!--begin::Modal header-->
						<div class="modal-header" id="kt_modal_new_address_header">
							<!--begin::Modal title-->
							<h2>Staff registration centre</h2>
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
									<label class="required fs-5 fw-semibold mb-2">Recycling Centre</label>
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
								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class="required fs-5 fw-semibold mb-2">Phone No.</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control" placeholder="Phone No." name="phone_no" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class="required fs-5 fw-semibold mb-2">Position</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control" placeholder="Position" name="position" />
									<!--end::Input-->
								</div>

								<input type="hidden" name="staff_id" value="<?=$staff_id?>">
								<!--end::Input group-->
								<!--begin::Input group-->
								
							</div>
							<!--end::Scroll-->
						</div>
						<!--end::Modal body-->
						<!--begin::Modal footer-->
						<div class="modal-footer flex-center">
							<!--begin::Button-->
							<button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Discard</button>
							<!--end::Button-->
							<!--begin::Button-->
							<button type="submit" class="btn btn-primary btn-register-staff">
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


			<script type="text/javascript">
	$( document ).ready(function() {

        completeStaffRegis('complete_staff_regis_data');

    });
</script>
