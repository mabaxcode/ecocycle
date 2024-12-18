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
											<h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Blog Post</h1>
											<!--end::Title-->
											<!--begin::Breadcrumb-->
											<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
												<!--begin::Item-->
												<li class="breadcrumb-item text-muted">
													<a href="index.html" class="text-muted text-hover-primary">Home</a>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												
												<!--end::Item-->
												<!--begin::Item-->
												
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item">
													<span class="bullet bg-gray-500 w-5px h-2px"></span>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item text-muted">Blog Post</li>
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
									<!--begin::Post card-->
									<div class="card">
										<!--begin::Body-->
										<div class="card-body p-lg-20 pb-lg-0">
											<!--begin::Layout-->
											<div class="d-flex flex-column flex-xl-row">
												<!--begin::Content-->
												<div class="flex-lg-row-fluid me-xl-15">
													<!--begin::Post content-->
													<div class="mb-17">
														<!--begin::Wrapper-->
														<div class="mb-8">
															<!--begin::Info-->
															<div class="d-flex flex-wrap mb-6">
																<!--begin::Item-->
																<div class="me-9 my-1">
																	<!--begin::Icon-->
																	<i class="ki-outline ki-element-11 text-primary fs-2 me-1"></i>
																	<!--end::Icon-->
																	<!--begin::Label-->
																	<span class="fw-bold text-gray-500"><?=convert_date($blog['create_dt'])?></span>
																	<!--end::Label-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																
																<!--end::Item-->
															</div>
															<!--end::Info-->
															<!--begin::Title-->
															<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold"><?=$blog['title']?>
															<!-- <span class="fw-bold text-muted fs-5 ps-1"><?=ucfirst($users['name'])?></span> -->
														</a>
															<!--end::Title-->
															<!--begin::Container-->
															<?/*
															<div class="overlay mt-8">
																<!--begin::Image-->
																<div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px" style="background-image:url('assets/media/stock/1600x800/img-1.jpg')"></div>
																<!--end::Image-->
																<!--begin::Links-->
																<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																	<a href="pages/about.html" class="btn btn-primary">About Us</a>
																	<a href="pages/careers/apply.html" class="btn btn-light-primary ms-3">Join Us</a>
																</div>
																<!--end::Links-->
															</div>
															*/?>
															<!--end::Container-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Description-->
														<div class="fs-5 fw-semibold text-gray-600">
															<!--begin::Text-->
															<p class="mb-8"><?=$blog['content']?></p>
															<!--end::Text-->
															<!--begin::Text-->
															
														</div>


														<div class="d-flex align-items-center gap-2 gap-lg-3">
															<a href="<?=base_url('user/blog')?>" class="btn btn-flex btn-primary h-40px fs-7 fw-bold"><i class="ki-duotone ki-black-left fs-1"></i>Back</a>
														</div>

														<!--end::Description-->
														<!--begin::Block-->
													</div>
													<!--end::Post content-->
												</div>
												<!--end::Content-->
												<!--begin::Sidebar-->
												
												<!--end::Sidebar-->
											</div>
											<!--end::Layout-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Post card-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>