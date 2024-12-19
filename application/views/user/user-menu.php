<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<!--begin::Wrapper-->
						<div class="app-sidebar-wrapper">
							<div id="kt_app_sidebar_wrapper" class="hover-scroll-y my-5 my-lg-2 mx-4" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_sidebar_wrapper" data-kt-scroll-offset="5px">
								<!--begin::Sidebar menu-->
								<div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary px-3 mb-5">
									<!--begin:Menu item-->


									<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
										<!--begin:Menu link-->
										<a class="menu-link" href="<?=base_url('user')?>">
											<span class="menu-icon">
												<i class="ki-outline ki-home-2 fs-2"></i>
											</span>
											<span class="menu-title">Dashboards</span>
										</a>
									</div>

									<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
										<!--begin:Menu link-->
										<a class="menu-link <? if($this->uri->segment(2) == 'participant_details'){ echo "active"; } ?>" href="<?=base_url('user/participant_details')?>">
											<span class="menu-icon">
												<i class="ki-duotone ki-user-tick fs-2">
												 <span class="path1"></span>
												 <span class="path2"></span>
												 <span class="path3"></span>
												</i>
											</span>
											<span class="menu-title">Profile Details</span>
										</a>
									</div>

									<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
										<!--begin:Menu link-->
										<a class="menu-link <? if($this->uri->segment(2) == 'participant_details'){ echo "active"; } ?>" href="<?=base_url('user/participant_details')?>">
											<span class="menu-icon">
												<i class="ki-duotone ki-user-tick fs-2">
												 <span class="path1"></span>
												 <span class="path2"></span>
												 <span class="path3"></span>
												</i>
											</span>
											<span class="menu-title">Event Participated</span>
										</a>
									</div>

										<?/*
									<div data-kt-menu-trigger="click" class="menu-item <? if($this->uri->segment(2) == 'add_inventory'){ echo "here show"; } ?>" href="<?=base_url('staff/add_inventory')?> menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-abstract-26 fs-2"></i>
											</span>
											<span class="menu-title">Application</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link <? if($this->uri->segment(2) == 'add_inventory'){ echo "active"; } ?>" href="<?=base_url('staff/add_inventory')?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Add New Inventory</span>
												</a>
												<!--end:Menu link-->
											</div>
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link <? if($this->uri->segment(2) == 'add_event'){ echo "active"; } ?>" href="<?=base_url('staff/add_event')?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Add New Events</span>
												</a>
												<!--end:Menu link-->
											</div>
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link <? if($this->uri->segment(2) == 'add_blog'){ echo "active"; } ?>" href="<?=base_url('staff/add_blog')?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Add New Blog Post</span>
												</a>
												<!--end:Menu link-->
											</div>
											
											<!--end:Menu item-->
											<!--begin:Menu item-->
											
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion <? if($this->uri->segment(2) == 'registered_centre'){ echo "here show"; } ?>" href="<?=base_url('manager/registered_centre')?>">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-bank fs-2">
												 <span class="path1"></span>
												 <span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Listing</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link <? if($this->uri->segment(2) == 'registered_centre'){ echo "active"; } ?>" href="<?=base_url('manager/registered_centre')?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">All Inventory</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<!--end:Menu item-->
										</div>
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link <? if($this->uri->segment(2) == 'registered_centre'){ echo "active"; } ?>" href="<?=base_url('manager/registered_centre')?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">All Events</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<!--end:Menu item-->
										</div>
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link <? if($this->uri->segment(2) == 'registered_centre'){ echo "active"; } ?>" href="<?=base_url('manager/registered_centre')?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">All Blog Post</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>

								
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion <? if($this->uri->segment(2) == 'staff_management' || $this->uri->segment(2) == 'registered_staff'){ echo "here show"; } ?>" href="<?=base_url('manager/staff_management')?>">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-user-tick fs-2">
												 <span class="path1"></span>
												 <span class="path2"></span>
												 <span class="path3"></span>
												</i>
											</span>
											<span class="menu-title">Management</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link <? if($this->uri->segment(2) == 'staff_management'){ echo "active"; } ?>" href="<?=base_url('manager/staff_management')?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Volunteer</span>
												</a>
												<!--end:Menu link-->
											</div>
											
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									

									<div data-kt-menu-trigger="click" class="menu-item menu-accordion <? if($this->uri->segment(2) == 'inventory_submit' || $this->uri->segment(2) == 'event_submit' || $this->uri->segment(2) == 'blog_post'){ echo "here show"; } ?>" href="<?=base_url('manager/inventory_submit')?>">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-questionnaire-tablet fs-2">
												 <span class="path1"></span>
												 <span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Approval</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link <? if($this->uri->segment(2) == 'inventory_submit'){ echo "active"; } ?>" href="<?=base_url('manager/inventory_submit')?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Inventory Submissions</span>
												</a>
												<!--end:Menu link-->
											</div>
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link <? if($this->uri->segment(2) == 'event_submit'){ echo "active"; } ?>" href="<?=base_url('manager/event_submit')?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Events Submissions</span>
												</a>
												<!--end:Menu link-->
											</div>
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link <? if($this->uri->segment(2) == 'blog_post'){ echo "active"; } ?>" href="<?=base_url('manager/blog_post')?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Blog Post</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											
										</div>
										<!--end:Menu sub-->
									</div>


								
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion <? if($this->uri->segment(2) == 'centre_report'){ echo "here show"; } ?>" href="<?=base_url('manager/centre_report')?>">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-document fs-2">
												 <span class="path1"></span>
												 <span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">Report</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link <? if($this->uri->segment(2) == 'centre_report'){ echo "active"; } ?>" href="<?=base_url('manager/centre_report')?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Centre Report</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>

									*/?>
									<!--end:Menu item-->
									<br>
									<div class="app-sidebar-menu-secondary menu menu-rounded menu-column px-3">
									<!--begin::Heading-->
									<? if($user['participant_status'] <> '0'){ ?>
									<div class="menu-item menu-labels">
										<div class="menu-content d-flex flex-stack fw-bold text-gray-600 text-uppercase fs-7">
											<span class="menu-heading ps-1">Menu</span>
											<!--begin::Link-->
											<a class="menu-btn ps-2" href="authentication/layouts/corporate/sign-in.html">
												
											</a>
											<!--end::Link-->
										</div>
									</div>
									<!--end::Heading-->
									<!--begin::Separator-->
									<div class="app-sidebar-separator separator mx-4 mt-2 mb-2"></div>
									<!--end::Separator-->
									<!--begin::Menu Item-->
									<div class="menu-item">
										<!--begin::Menu link-->
										<a class="menu-link" href="<?=base_url('user/events')?>">
											<!--begin::Bullet-->
											<span class="menu-icon">
												<i class="ki-outline ki-abstract-35 fs-2"></i>
											</span>
											<!--end::Bullet-->
											<!--begin::Title-->
											<span class="menu-title text-gray-700 fw-bold fs-6">Upcoming Events</span>
											<!--end::Title-->
											<!--begin::Badge-->
											<!--end::Badge-->
										</a>
										<!--end::Menu link-->
									</div>
									<div class="menu-item">
										<!--begin::Menu link-->
										<a class="menu-link" href="<?=base_url('user/blog')?>">
											<!--begin::Bullet-->
											<span class="menu-icon">
												<i class="ki-outline ki-abstract-35 fs-2"></i>
											</span>
											<!--end::Bullet-->
											<!--begin::Title-->
											<span class="menu-title text-gray-700 fw-bold fs-6">Blog Post</span>
											<!--end::Title-->
											<!--begin::Badge-->
											<!--end::Badge-->
										</a>
										<!--end::Menu link-->
									</div>
									<div class="menu-item">
										<!--begin::Menu link-->
										<a class="menu-link" href="apps/projects/project.html">
											<!--begin::Bullet-->
											<span class="menu-icon">
												<i class="ki-outline ki-abstract-35 fs-2"></i>
											</span>
											<!--end::Bullet-->
											<!--begin::Title-->
											<span class="menu-title text-gray-700 fw-bold fs-6">Certificate</span>
											<!--end::Title-->
											<!--begin::Badge-->
											<!--end::Badge-->
										</a>
										<!--end::Menu link-->
									</div>

									<div class="menu-item">
										<!--begin::Menu link-->
										<a class="menu-link" href="apps/projects/project.html">
											<!--begin::Bullet-->
											<span class="menu-icon">
												<i class="ki-outline ki-abstract-35 fs-2"></i>
											</span>
											<!--end::Bullet-->
											<!--begin::Title-->
											<span class="menu-title text-gray-700 fw-bold fs-6">Event Feedback</span>
											<!--end::Title-->
											<!--begin::Badge-->
											<!--end::Badge-->
										</a>
										<!--end::Menu link-->
									</div>
									
								<? } ?>
									<!--end::Menu Item-->
								</div>
								</div>
								<!--end::Sidebar menu-->
							</div>
						</div>
						<!--end::Wrapper-->
					</div>