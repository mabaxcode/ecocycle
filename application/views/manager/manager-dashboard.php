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
											<h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Eco Cycle</h1>
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
												<li class="breadcrumb-item text-muted">Dashboards</li>
												<!--end::Item-->
											</ul>
											<!--end::Breadcrumb-->
										</div>
										<!--end::Page title-->
										<!--begin::Actions-->
										<div class="d-flex align-items-center gap-2 gap-lg-3">
											<a href="<?=base_url('manager/centre_registration')?>" class="btn btn-flex btn-outline btn-color-gray-700 btn-active-color-primary bg-body h-40px fs-7 fw-bold">Centre Registration</a>
											<!-- <a href="#" class="btn btn-flex btn-primary h-40px fs-7 fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">New Campaign</a> -->
										</div>
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
									<!--begin::Row-->
									<div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col-xl-3">
											<!--begin::Card widget 3-->
											<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #F1416C;background-image:url('<?=base_url()?>assets/media/svg/shapes/wave-bg-red.svg')">
												<!--begin::Header-->
												<div class="card-header pt-5 mb-3">
													<!--begin::Icon-->
													<div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #F1416C">
														<i class="ki-outline ki-call text-white fs-2qx lh-0"></i>
													</div>
													<!--end::Icon-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end mb-3">
													<!--begin::Info-->
													<div class="d-flex align-items-center">
														<span class="fs-4hx text-white fw-bold me-6">1.2k</span>
														<div class="fw-bold fs-6 text-white">
															<span class="d-block">Inbound</span>
															<span class="">Calls</span>
														</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Card body-->
												<!--begin::Card footer-->
												<div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
													<!--begin::Progress-->
													<div class="fw-bold text-white py-2">
														<span class="fs-1 d-block">935</span>
														<span class="opacity-50">Problems Solved</span>
													</div>
													<!--end::Progress-->
												</div>
												<!--end::Card footer-->
											</div>
											<!--end::Card widget 3-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-3">
											<!--begin::Card widget 3-->
											<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #7239EA;background-image:url('<?=base_url()?>assets/media/svg/shapes/wave-bg-purple.svg')">
												<!--begin::Header-->
												<div class="card-header pt-5 mb-3">
													<!--begin::Icon-->
													<div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
														<i class="ki-outline ki-call text-white fs-2qx lh-0"></i>
													</div>
													<!--end::Icon-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end mb-3">
													<!--begin::Info-->
													<div class="d-flex align-items-center">
														<span class="fs-4hx text-white fw-bold me-6">427</span>
														<div class="fw-bold fs-6 text-white">
															<span class="d-block">Outbound</span>
															<span class="">Calls</span>
														</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Card body-->
												<!--begin::Card footer-->
												<div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
													<!--begin::Progress-->
													<div class="fw-bold text-white py-2">
														<span class="fs-1 d-block">386</span>
														<span class="opacity-50">Generated Leads</span>
													</div>
													<!--end::Progress-->
												</div>
												<!--end::Card footer-->
											</div>
											<!--end::Card widget 3-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-6">
											<!--begin::Chart widget 36-->
											<div class="card card-flush overflow-hidden h-lg-100">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Performance</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
														<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" data-kt-daterangepicker-range="today" class="btn btn-sm btn-light d-flex align-items-center px-4">
															<!--begin::Display range-->
															<div class="text-gray-600 fw-bold">Loading date range...</div>
															<!--end::Display range-->
															<i class="ki-outline ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0"></i>
														</div>
														<!--end::Daterangepicker-->
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end p-0">
													<!--begin::Chart-->
													<div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6" style="height: 300px"></div>
													<!--end::Chart-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Chart widget 36-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<!--end::Row-->
									<!--begin::Row-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>