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
											<h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Blog Post Setting</h1>
											<!--end::Title-->
											<!--begin::Breadcrumb-->
											<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
												<!--begin::Item-->
												<li class="breadcrumb-item text-muted">
													<a href="index.html" class="text-muted text-hover-primary">Setting</a>
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
										<div class="d-flex align-items-center gap-2 gap-lg-3">
											<a href="#" class="btn btn-flex btn-info btn-sm fs-7 fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_new_address_blog">+ Add New Category</a>
											<!-- <a href="#" class="btn btn-flex btn-primary h-40px fs-7 fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Add New Staff</a> -->
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
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card header-->
										<div class="card-header border-0 pt-6">
											<!--begin::Card title-->
											<div class="card-title">
												<!--begin::Search-->
												<div class="d-flex align-items-center position-relative my-1">
													<i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i>
													<input type="text" data-kt-user-table-filter="search" class="form-control w-250px ps-13" placeholder="Search" />
												</div>
												<!--end::Search-->
											</div>
											<!--begin::Card title-->
											
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body py-4">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="dt_staff_list">
												<thead>
													<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
														<th class="min-w-125px">Blog Category</th>
														<th class="min-w-125px">Code</th>
														<th class="min-w-125px">Status</th>
														<th class="text-end min-w-100px">Actions</th>
													</tr>
												</thead>
												<tbody class="text-gray-600 fw-semibold">
													<? if($blog_category){ ?>
													<? foreach ($blog_category as $key) { ?>
													<tr>	
														<td><?=$key['descs']?></td>
														<td>I-<?=$key['id']?></td>
														<td><div class="badge badge-info fw-bold badge-lg">Active</div></td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-danger btn-flex btn-center btn-sm delete-ref-code" data-kt-menu-placement="bottom-end" data-init="<?=$key['id']?>">Remove</a>
															<!-- <a href="#" class="btn btn-light btn-danger btn-flex btn-center btn-sm" data-kt-menu-placement="bottom-end">Delete</a> -->
														</td>
													</tr>
													<? } ?>
													<? } ?>
												</tbody>
											</table>
											<!--end::Table-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>




						<div class="modal fade" id="kt_modal_new_address_blog" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-850px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Form-->
					<form class="form" action="#" id="kt_modal_new_address_form_blog">
						<!--begin::Modal header-->
						<div class="modal-header" id="kt_modal_new_address_header">
							<!--begin::Modal title-->
							<h2>Add New Blog Post Category</h2>
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
								
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class="required fs-5 fw-semibold mb-2">Category Name</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control" placeholder="Category Name" name="descs" />
									<!--end::Input-->
								</div>
							</div>
							<!--end::Scroll-->
						</div>
						<!--end::Modal body-->
						<!--begin::Modal footer-->
						<div class="modal-footer flex-center">
							<!--begin::Button-->
							<button type="reset" id="kt_modal_new_address_blog" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
							<!--end::Button-->
							<!--begin::Button-->
							<button type="submit" id="kt_modal_new_address_submit_blog" class="btn btn-primary">
								<span class="indicator-label">Add</span>
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
		</div>