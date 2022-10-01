<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"><?= $title; ?></h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active"><?= $title; ?></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                <div class="col-xl-7 col-md-6">
                    <div class="col-xl-12">
                        <div class="d-flex flex-column h-100">
                            <div class="row h-100">
                                <div class="col-12">
                                    <div class="card card-light">
                                        <div class="card-body p-0">
                                            <div class="row align-items-end">
                                                <div class="col-sm-8">
                                                    <div class="p-3">
                                                        <p class="card-text fs-2 lh-base">Hi <span class="fw-semibold"><?= $authData['user_name']; ?></span>,</p>
                                                        <div class="mt-3">
                                                            <p class="card-text fs-20 lh-base">Welcome to Mesinkasirpku<br> dashboard</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="px-3">
                                                        <img src="<?= base_url('assets/'); ?>images/user-illustarator-2.png" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end card-body-->
                                    </div>
                                </div> <!-- end col-->
                            </div> <!-- end row-->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <p class="fw-medium text-muted mb-0">Customer</p>
                                                    <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="<?= $total['customer']; ?>">0</span></h2>
                                                </div>
                                                <div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-info rounded-circle fs-2">
                                                            <i class="ri-account-pin-box-line text-info"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                        <div class="card-footer">
                                            <a href="javascript:void(0);" class="link-dark float-end">View all <i class="ri-arrow-right-circle-line ri-lg align-middle ms-1 lh-1"></i></a>
                                        </div>
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                                <div class="col-md-6">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <p class="fw-medium text-muted mb-0">Toko</p>
                                                    <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="<?= $total['store']; ?>">0</span></h2>
                                                </div>
                                                <div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-info rounded-circle fs-2">
                                                            <i data-feather="activity" class="text-info"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                        <div class="card-footer">
                                            <a href="javascript:void(0);" class="link-dark float-end">View all <i class="ri-arrow-right-circle-line ri-lg align-middle ms-1 lh-1"></i></a>
                                        </div>
                                    </div> <!-- end card-->
                                </div> <!-- end col-->
                            </div> <!-- end row-->
                        </div>
                    </div> <!-- end col-->
                </div><!-- end col -->

                <div class="col-xl-5 col-md-6">
                    <div class="col-md-12">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">Maintenance</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold">
                                            <span class="counter-value" data-target="<?= $total['maintanance'];?>">0</span>
                                        </h2>
                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-info rounded-circle fs-2">
                                                <i class="bx bx-desktop text-info"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                            <div class="card-footer" style="margin-top:-15px;">
                                <a href="javascript:void(0);" class="link-dark float-end">View all <i class="ri-arrow-right-circle-line ri-lg align-middle ms-1 lh-1"></i></a>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                    <div class="col-md-12">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">Karyawan</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="<?= $total['staff'];?>">0</span></h2>
                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-info rounded-circle fs-2">
                                                <i data-feather="users" class="text-info"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                            <div class="card-footer" style="margin-top:-15px;">
                                <a href="javascript:void(0);" class="link-dark float-end">View all <i class="ri-arrow-right-circle-line ri-lg align-middle ms-1 lh-1"></i></a>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div><!-- end col -->

            </div> <!-- end row-->
        </div>
        <!-- End Page-content -->