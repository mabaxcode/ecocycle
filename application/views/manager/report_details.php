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
                                            <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Details Of Centre</h1>
                                            <!--end::Title-->
                                            <!--begin::Breadcrumb-->
                                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                                                <!--begin::Item-->
                                                <li class="breadcrumb-item text-muted">
                                                    <a href="index.html" class="text-muted text-hover-primary">Report</a>
                                                </li>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <li class="breadcrumb-item">
                                                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                                                </li>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <li class="breadcrumb-item text-muted">Centre Report</li>
                                                <!--end::Item-->
                                                
                                            </ul>
                                            <!--end::Breadcrumb-->
                                        </div>
                                        <div class="d-flex align-items-center gap-2 gap-lg-3">
                                            <a href="<?=base_url('manager/centre_report')?>" class="btn btn-flex btn-primary h-40px fs-7 fw-bold"><i class="ki-duotone ki-black-left fs-1"></i>Back</a>
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
                                    <div class="card ">
                                        <div class="card-header card-header-stretch">
                                            <h3 class="card-title"><?=strtoupper($centre['name'])?></h3>
                                            <div class="card-toolbar">
                                                <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_7">Recycling Centres Details</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_8">Staff</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_9">Event</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_10">Inventory</a>
                                                    </li> 
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_11">Volunteer Participation</a>
                                                    </li> 
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="kt_tab_pane_7" role="tabpanel">
                                                    <? $this->load->view('manager/form/centre_details_form') ?>
                                                </div>

                                                <div class="tab-pane fade" id="kt_tab_pane_8" role="tabpanel">
                                                    <? $this->load->view('manager/form/staff_details_form') ?>
                                                </div>

                                                <div class="tab-pane fade" id="kt_tab_pane_9" role="tabpanel">
                                                    <? $this->load->view('manager/form/event_details_form') ?>
                                                </div>

                                                <div class="tab-pane fade" id="kt_tab_pane_10" role="tabpanel">
                                                    <? $this->load->view('manager/form/inventory_details_form') ?>
                                                </div>

                                                <div class="tab-pane fade" id="kt_tab_pane_11" role="tabpanel">
                                                    <? $this->load->view('manager/form/volunteer_details_form') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->
                        </div>




           