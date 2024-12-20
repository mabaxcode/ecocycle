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
											<h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Event Feedback</h1>
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
												<li class="breadcrumb-item text-muted">Event Feedback</li>
												<!--end::Item-->
												<!--begin::Item-->
												
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
									<!--begin::Row-->
									<div class="row g-5 g-xl-8">
										<!--begin::Col-->
										<? if($feedbacks){ ?>
										<? foreach($feedbacks as $feedback){ ?>
										<?
										$user = get_any_table_row(array('id' => $feedback['user_id']), 'users');
										$event = get_any_table_row(array('id' => $feedback['event_id']), 'event');
										?>
										<div class="col-xl-12">
											<!--begin::Feeds Widget 1-->
											<div class="card mb-5 mb-xl-8">
												<!--begin::Body-->
												<div class="card-body pb-0">
													<!--begin::Header-->
													<div class="d-flex align-items-center">
														<!--begin::User-->
														<div class="d-flex align-items-center flex-grow-1">
															<!--begin::Avatar-->
															<div class="symbol symbol-45px me-5">
																<img src="assets/media/avatars/blank.png" alt="" />
															</div>
															<!--end::Avatar-->
															<!--begin::Info-->
															<div class="d-flex flex-column">
																<a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold"><?=$user['name']?></a>
																<span class="text-gray-500 fw-bold">Event : <?=$event['name']?><??></span>
															</div>
															<!--end::Info-->
														</div>
														<!--end::User-->
														<!--begin::Menu-->
														
														<!--end::Menu-->
													</div>
													<!--end::Header-->
													<!--begin::Form-->
													<form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
														<!--begin::Editor-->
														<div class="py-6">
															<?=$feedback['feedback']?>
														</div>
														<!--end::Editor-->
														<div class="separator"></div>
														<!--begin::Toolbar-->
														
														<!--end::Toolbar-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Feeds widget 5-->
											<!--begin::Feeds widget 4, 5 load more-->
											
											<!--end::Feeds widget 4, 5 load more-->
										</div>
										<? } ?>
										<? } ?>
										<!--end::Col-->
										<!--begin::Col-->
										
										<!--end::Col-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>