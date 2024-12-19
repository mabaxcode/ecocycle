<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
	<!--begin::Toolbar container-->
	<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
		<!--begin::Title-->
		<h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Profile Details</h1>
		<!--end::Title-->
		<!--begin::Breadcrumb-->
		<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
			<!--begin::Item-->
			<li class="breadcrumb-item text-muted">
				<a href="index.html" class="text-muted text-hover-primary">Home</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="breadcrumb-item">
				<span class="bullet bg-gray-500 w-5px h-2px"></span>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="breadcrumb-item text-muted">Profile Details</li>
		</ul>
		<!--end::Breadcrumb-->
	</div>
</div>
<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
	<!--begin::Content container-->
	<div id="kt_app_content_container" class="app-container container-fluid">
		<!--begin::Basic info-->
		<div class="card mb-5 mb-xl-10">
			<!--begin::Card header-->
			<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
				<!--begin::Card title-->
				<div class="card-title m-0">
					<h3 class="fw-bold m-0">Details</h3>
				</div>
				<!--end::Card title-->
			</div>
			<!--begin::Card header-->
			<!--begin::Content-->
			<div id="kt_account_settings_profile_details" class="collapse show">
				<!--begin::Form-->
				<form id="kt_account_profile_details_form" class="form">
					<input type="hidden" name="id" value="<?=$user['id']?>">
					<!--begin::Card body-->
					<div class="card-body border-top p-9">
						<!--begin::Input group-->
						<div class="row mb-6">
							<!--begin::Label-->
							<label class="col-lg-4 col-form-label required fw-semibold fs-6">Name</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<input type="text" name="name" class="form-control form-control-lg" placeholder="Name" value="<?= $user['name']?>" />
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-6">
							<!--begin::Label-->
							<label class="col-lg-4 col-form-label fw-semibold fs-6 required">Email</label>
							<!-- <div class="stepper-desc text-muted fs-8">* Username can't be edit</div> -->
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<input type="text" name="email" class="form-control form-control-lg" placeholder="Email" value="<?= $user['email']?>"/>
							</div>
							<!--end::Col-->
						</div>
						<div class="row mb-6">
							<!--begin::Label-->
							<label class="col-lg-4 col-form-label fw-semibold fs-6 required">Phone No.</label>
							<!-- <div class="stepper-desc text-muted fs-8">* Username can't be edit</div> -->
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<input type="text" name="phone_no" class="form-control form-control-lg" placeholder="Phone No." value="<?= $participant['phone_no']?>"/>
							</div>
							<!--end::Col-->
						</div>
						<div class="row mb-6">
							<!--begin::Label-->
							<label class="col-lg-4 col-form-label fw-semibold fs-6 required">Address</label>
							<!-- <div class="stepper-desc text-muted fs-8">* Username can't be edit</div> -->
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<textarea class="form-control" rows="3" name="address"><?= $participant['address']?></textarea>
								<!-- <input type="text" name="department" class="form-control form-control-lg" placeholder="Department" value="<?= $user['department']?>"/> -->
							</div>
							<!--end::Col-->
						</div>
						<div class="row mb-6">
							<!--begin::Label-->
							<label class="col-lg-4 col-form-label fw-semibold fs-6">Emergency Contact Name</label>
							<!-- <div class="stepper-desc text-muted fs-8">* Username can't be edit</div> -->
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<input type="text" name="eme_name" class="form-control form-control-lg" placeholder="Emergency Contact Name" value="<?= $participant['eme_name']?>"/>
							</div>
							<!--end::Col-->
						</div>
						<div class="row mb-6">
							<!--begin::Label-->
							<label class="col-lg-4 col-form-label fw-semibold fs-6">Emergency Contact No.</label>
							<!-- <div class="stepper-desc text-muted fs-8">* Username can't be edit</div> -->
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<input type="text" name="eme_phone_no" class="form-control form-control-lg" placeholder="Emergency Contact No." value="<?= $participant['eme_phone_no']?>"/>
							</div>
							<!--end::Col-->
						</div>
					</div>
					<!--end::Card body-->
					<!--begin::Actions-->
					<div class="card-footer d-flex justify-content-end py-6 px-9">
						<button type="submit" class="btn btn-primary save-profile-change">Save Changes</button>
					</div>
					<!--end::Actions-->
				</form>
				<!--end::Form-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Basic info-->
		<!--begin::Sign-in Method-->
		<?/*
		<div class="card mb-5 mb-xl-10">
			<!--begin::Card header-->
			<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
				<div class="card-title m-0">
					<h3 class="fw-bold m-0">Sign-in Method</h3>
				</div>
			</div>
			<!--end::Card header-->
			<!--begin::Content-->
			<div id="kt_account_settings_signin_method" class="collapse show">
				<!--begin::Card body-->
				<div class="card-body border-top p-9">
					<!--begin::Email Address-->
					<div class="d-flex flex-wrap align-items-center">
						<!--begin::Label-->
						<div id="kt_signin_email">
							<div class="fs-6 fw-bold mb-1">Email Address</div>
							<div class="fw-semibold text-gray-600"><?= $user['email']?></div>
						</div>
						<!--end::Label-->
						<!--begin::Edit-->
						<div id="kt_signin_email_edit" class="flex-row-fluid d-none">
							<!--begin::Form-->
							<form id="kt_signin_change_email" class="form" novalidate="novalidate">
								<div class="row mb-6">
									<div class="col-lg-6 mb-4 mb-lg-0">
										<div class="fv-row mb-0">
											<label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New Email Address</label>
											<input type="email" class="form-control form-control-lg" id="emailaddress" placeholder="Email Address" name="emailaddress" value="" />
										</div>
									</div>
									<div class="col-lg-6">
										<div class="fv-row mb-0">
											<label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirm Password</label>
											<input type="password" class="form-control form-control-lg" name="confirmemailpassword" id="confirmemailpassword" />
										</div>
									</div>
								</div>
								<div class="d-flex">
									<button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Update Email</button>
									<button id="kt_signin_cancel" type="button" class="btn btn-color-gray-500 btn-active-light-primary px-6">Cancel</button>
								</div>
							</form>
							<!--end::Form-->
						</div>
						<!--end::Edit-->
						<!--begin::Action-->
						<div id="kt_signin_email_button" class="ms-auto">
							<button class="btn btn-light btn-active-light-primary">Change Email</button>
						</div>
						<!--end::Action-->
					</div>
					<!--end::Email Address-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Password-->
					<div class="d-flex flex-wrap align-items-center mb-10">
						<!--begin::Label-->
						<div id="kt_signin_password">
							<div class="fs-6 fw-bold mb-1">Password</div>
							<div class="fw-semibold text-gray-600">************</div>
						</div>
						<!--end::Label-->
						<!--begin::Edit-->
						<div id="kt_signin_password_edit" class="flex-row-fluid d-none">
							<!--begin::Form-->
							<form id="kt_signin_change_password" class="form" novalidate="novalidate">
								<div class="row mb-1">
									<div class="col-lg-4">
										<div class="fv-row mb-0">
											<label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>
											<input type="password" class="form-control form-control-lg" name="currentpassword" id="currentpassword" />
										</div>
									</div>
									<div class="col-lg-4">
										<div class="fv-row mb-0">
											<label for="newpassword" class="form-label fs-6 fw-bold mb-3">New Password</label>
											<input type="password" class="form-control form-control-lg" name="newpassword" id="newpassword" />
										</div>
									</div>
									<div class="col-lg-4">
										<div class="fv-row mb-0">
											<label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New Password</label>
											<input type="password" class="form-control form-control-lg" name="confirmpassword" id="confirmpassword" />
										</div>
									</div>
								</div>
								<div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
								<div class="d-flex">
									<button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update Password</button>
									<button id="kt_password_cancel" type="button" class="btn btn-color-gray-500 btn-active-light-primary px-6">Cancel</button>
								</div>
							</form>
							<!--end::Form-->
						</div>
						<!--end::Edit-->
						<!--begin::Action-->
						<div id="kt_signin_password_button" class="ms-auto">
							<button class="btn btn-light btn-active-light-primary">Change Password</button>
						</div>
						<!--end::Action-->
					</div>
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Content-->
		</div>
		*/?>
	</div>
	<!--end::Content container-->
</div>
<!--end::Content-->

