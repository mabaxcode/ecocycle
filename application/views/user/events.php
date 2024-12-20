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
											<h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Events</h1>
											<!--end::Title-->
											<!--begin::Breadcrumb-->
											<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
												<!--begin::Item-->
												<li class="breadcrumb-item text-muted">
													<a href="index.html" class="text-muted text-hover-primary">Menu</a>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item">
													<span class="bullet bg-gray-500 w-5px h-2px"></span>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item text-muted">Events</li>
												<!--end::Item-->
												
											</ul>
											<!--end::Breadcrumb-->
										</div>
										<!--end::Page title-->
										<!--begin::Actions-->
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
														<th class="min-w-125px">Event Name</th>
														<!-- <th class="min-w-125px">Event Date</th> -->
														<th class="min-w-125px">Location</th>
														<th class="min-w-125px">Recycling Centre</th>
														<th class="min-w-125px">Description</th>
														<th class="text-end min-w-100px">Actions</th>
													</tr>
												</thead>
												<tbody class="text-gray-600 fw-semibold">
													<? if($events){ ?>
													<? foreach ($events as $key) { ?>
													<?
													$centre = get_any_table_row(array('id' => $key['centre_id']), 'centre');
													?>
													<tr>
														<td><?=strtoupper($key['name'])?><br><span class="badge badge-primary">Date <?=dmy($key['event_dt'])?></span></td>
														
														<td><?=$key['location']?></td>
														<td><?=$centre['name']?><br><span class="badge badge-success">Available Slots <?=$key['balance_slot']?></span></td>
														<td>
															<?//=$key['justification']?>
															<?php echo substr($key['justification'], 0, '50') ?>...
														</td>
														<td class="text-end">
															<? if($key['balance_slot'] == '0'){ ?>
															<b><span class="text-danger">All Slots Taken</span></b>
															<? } else { ?>

															<?

															$joined_event = get_any_table_row(array('user_id' => $user['id'], 'event_id' => $key['id']), 'joined_event');

															if ($joined_event == true) {
																echo '<b><span class="text-danger">Already Joined</span></b>';
															} else { ?>
															<a href="javascript:void(0);" class="btn btn-light btn-info btn-flex btn-center btn-sm" onclick="book_slot('<?=$key['id']?>')" data-init="<?=$key['id']?>">Join Event</a>
															<? }
															?>

															



															<? } ?>
															
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




