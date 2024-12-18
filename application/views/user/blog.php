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
										<!-- <div class="d-flex align-items-center gap-2 gap-lg-3">
											<a href="#" class="btn btn-flex btn-outline btn-color-gray-700 btn-active-color-primary bg-body h-40px fs-7 fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">Add Member</a>
											<a href="#" class="btn btn-flex btn-primary h-40px fs-7 fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">New Campaign</a>
										</div> -->
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
											<!--begin::Section-->
											<div class="mb-17">
												<!--begin::Content-->
												<div class="d-flex flex-stack mb-5">
													<!--begin::Title-->
													<h3 class="text-gray-900">Blog Post</h3>
													<!--end::Title-->
													<!--begin::Link-->
													<!-- <a href="#" class="fs-6 fw-semibold link-primary">View All Offers</a> -->
													<!--end::Link-->
												</div>
												<!--end::Content-->
												<!--begin::Separator-->
												<div class="separator separator-dashed mb-9"></div>
												<!--end::Separator-->
												<!--begin::Row-->
												<div class="row g-10">
													<!--begin::Col-->
													<div class="col-md-4">
														<!--begin::Hot sales post-->
														<? if($blogs){ ?>
														<? foreach($blogs as $blog){ ?>
														<? //$users = get_any_table_row(array('id' => $blog['create_by']), 'users'); ?>
														<div class="card-xl-stretch me-md-6">
															<!--begin::Overlay-->
															<?/*
															<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x400/img-23.jpg">
																<!--begin::Image-->
																<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-23.jpg')"></div>
																<!--end::Image-->
																<!--begin::Action-->
																<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																	<i class="ki-outline ki-eye fs-2x text-white"></i>
																</div>
																<!--end::Action-->
															</a>
															*/?>
															<!--end::Overlay-->
															<!--begin::Body-->
															<div class="mt-5">
																<!--begin::Title-->
																<a href="#" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base"><?=$blog['title']?></a>
																<!--end::Title-->
																<!--begin::Text-->
																<div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-5"><?php echo substr($blog['content'], 0, '100') . '...';  ?></div>
																<!--end::Text-->
																<!--begin::Text-->
																<div class="fs-6 fw-bold">
																	<!--begin::Author-->
																	
																	<!--end::Author-->
																	<!--begin::Date-->
																	<span class="text-muted"><?=convert_date($blog['create_dt'])?></span>
																	<!--end::Date-->
																</div>
																<div class="fs-6 fw-bold mt-5 d-flex flex-stack">
																	<!--begin::Label-->
																	
																	<!--end::Label-->
																	<!--begin::Action-->
																	<a href="<?=base_url('user/blog_details/'.$blog['id'])?>" class="btn btn-sm btn-primary">Read more</a>
																	<!--end::Action-->
																</div>
																<!--end::Text-->
															</div>
															<!--end::Body-->
														</div>
														<? } ?>
														<? } ?>
														<!--end::Hot sales post-->
													</div>
													<!--end::Col-->
												<!--end::Row-->
											</div>
											<!--end::Section-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Post card-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>