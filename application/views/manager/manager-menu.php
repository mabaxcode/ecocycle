<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<!--begin::Wrapper-->
						<div class="app-sidebar-wrapper">
							<div id="kt_app_sidebar_wrapper" class="hover-scroll-y my-5 my-lg-2 mx-4" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_sidebar_wrapper" data-kt-scroll-offset="5px">
								<!--begin::Sidebar menu-->
								<div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary px-3 mb-5">
									<!--begin:Menu item-->


									<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
										<!--begin:Menu link-->
										<a class="menu-link" href="<?=base_url('manager')?>">
											<span class="menu-icon">
												<i class="ki-outline ki-home-2 fs-2"></i>
											</span>
											<span class="menu-title">Dashboards</span>
										</a>
									</div>


									<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-abstract-26 fs-2"></i>
											</span>
											<span class="menu-title">My Application</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link <? if($this->uri->segment(2) == 'centre_registration'){ echo "active"; } ?>" href="<?=base_url('manager/centre_registration')?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Centre Registration</span>
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
									
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion here show">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-briefcase fs-2"></i>
											</span>
											<span class="menu-title">My Centres</span>
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
													<span class="menu-title">Registered Centre</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>

									<div data-kt-menu-trigger="click" class="menu-item menu-accordion here show">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-briefcase fs-2"></i>
											</span>
											<span class="menu-title">Staff Management</span>
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
													<span class="menu-title">Staff Registration</span>
												</a>
												<!--end:Menu link-->
											</div>
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link <? if($this->uri->segment(2) == 'registered_staff'){ echo "active"; } ?>" href="<?=base_url('manager/registered_staff')?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Registered Staff</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>

									<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-home-2 fs-2"></i>
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
												<a class="menu-link" href="index.html">
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
												<a class="menu-link" href="index.html">
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
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion here show">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-briefcase fs-2"></i>
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
												<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities">
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
									<!--end:Menu item-->
								</div>
								<!--end::Sidebar menu-->
							</div>
						</div>
						<!--end::Wrapper-->
					</div>