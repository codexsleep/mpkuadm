<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="detached" data-sidebar="light" data-topbar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title><?= $title; ?> - Mesinkasirpku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/'); ?>favicon.ico">

    <!-- gridjs css -->
    <link rel="stylesheet" href="<?= base_url('assets/libs/'); ?>gridjs/theme/mermaid.min.css">

    <!-- Layout config Js -->
    <script src="<?= base_url('assets/js/'); ?>layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="<?= base_url('assets/css/'); ?>bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('assets/css/'); ?>icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('assets/css/'); ?>app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="<?= base_url('assets/css/'); ?>custom.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img decoding="async" src="<?= base_url('assets/images/'); ?>logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img decoding="async" src="<?= base_url('assets/images/'); ?>logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img decoding="async" src="<?= base_url('assets/images/'); ?>logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg" style="color:white; font-weight:bold; font-size:20px">
                                    MPKU ADM
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                        <form class="app-search d-none d-md-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                                <span class="mdi mdi-magnify search-widget-icon"></span>
                                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                            </div>
                            <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                <div data-simplebar style="max-height: 320px;">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                        <span>Help Center</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                        <span>My account settings</span>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="ms-1 header-item d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                                <i class='bx bx-moon fs-22'></i>
                            </button>
                        </div>
 
                        <div class="dropdown topbar-head-dropdown ms-1 header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class='bx bx-bell fs-22'></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                                <div class="dropdown-head bg-primary bg-pattern rounded-top">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                        <div class="w-25 w-sm-50 pt-3 mx-auto">
                                            <img decoding="async" src="<?= base_url('assets/images/'); ?>svg/bell.svg" class="img-fluid" alt="user-pic">
                                        </div>
                                        <div class="text-center pb-5 mt-2">
                                            <h6 class="fs-18 fw-semibold lh-base">Hey! You have no any notifications </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown ms-sm-3 header-item topbar-user" style="margin-right:-18px;">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img decoding="async" class="rounded-circle header-profile-user" src="<?= base_url('assets/images/'); ?>users/avatar-1.jpg" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?= $authData['user_name']; ?></span>
                                        <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text"><?= $authData['user_role']; ?></span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#<?= base_url(); ?>admin/profile"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url(); ?>admin/auth/logout"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="<?= base_url('admin/dashboard'); ?>" class="logo logo-dark">
                    <span class="logo-sm">
                        <img decoding="async" src="<?= base_url('assets/images/'); ?>logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img decoding="async" src="<?= base_url('assets/images/'); ?>logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="<?= base_url('admin/dashboard'); ?>" class="logo logo-light">
                    <span class="logo-sm">
                        <img decoding="async" src="<?= base_url('assets/images/'); ?>logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img decoding="async" src="<?= base_url('assets/images/'); ?>logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php if ($this->uri->segment(3) != null) { echo base_url('admin/'); } ?>dashboard">
                                <i class="las la-tachometer-alt"></i> <span data-key="t-widgets">Dashboard</span>
                            </a>
                        </li><!-- end Dashboards Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarCustomer" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPublishers">
                                <i class="ri-user-5-line"></i> <span data-key="t-layouts">Customer</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarCustomer">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">

                                        <a href="<?php if($this->uri->segment(3)==null or $this->uri->segment(2)!="customer"){echo base_url('admin/customer/');}?>all" class="nav-link" data-key="t-horizontal">All Customer </a>
                                        <a href="<?php if($this->uri->segment(3)==null or $this->uri->segment(2)!="customer"){echo base_url('admin/customer/');}?>tambah" class="nav-link" data-key="t-horizontal">Tambah Customer</a>
                                    </li>
                                </ul>
                            </div>
                        </li> <!-- end Publishers Menu -->

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarToko" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPublishers">
                                <i class="bx bx-store"></i> <span data-key="t-layouts">Toko</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarToko">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?php if ($this->uri->segment(3) != null) { echo base_url('admin/'); } ?>store" class="nav-link" data-key="t-horizontal">All Toko <span class="badge bg-soft-warning text-warning mt-1 float-end">0</span> <span class="badge bg-soft-danger text-danger mt-1 float-end" style="margin-left:8px;">0</span></a>
                                        <a href="<?php if($this->uri->segment(3)==null or $this->uri->segment(2)!="store"){echo base_url('admin/store/');}?>tambah" class="nav-link" data-key="t-horizontal">Tambah Toko</a>
                                        <a href="<?php if ($this->uri->segment(3) != null) { echo base_url('admin/'); } ?>province" class="nav-link" data-key="t-horizontal">Manage Provinsi</a>
                                        <a href="<?php if ($this->uri->segment(3) != null) { echo base_url('admin/'); } ?>city" class="nav-link" data-key="t-horizontal">Manage Kota</a>
                                        <a href="<?php if ($this->uri->segment(3) != null) { echo base_url('admin/'); } ?>category" class="nav-link" data-key="t-horizontal">Manage Kategori</a>
                                    </li>
                                </ul>
                            </div>
                        </li> <!-- end Publishers Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarStaff" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPublishers">
                                <i class="bx bx-id-card"></i> <span data-key="t-layouts">Staff</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarStaff">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#layouts-horizontal.html" class="nav-link" data-key="t-horizontal">All Staff </a>
                                        <a href="#layouts-horizontal.html" class="nav-link" data-key="t-horizontal">Tambah Staff</a>
                                    </li>
                                </ul>
                            </div>
                        </li> <!-- end Publishers Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarMaintanance" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPublishers">
                                <i class="bx bx-support"></i> <span data-key="t-layouts">Maintenance</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarMaintanance">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#layouts-horizontal.html" class="nav-link" data-key="t-horizontal">All Maintenance </a>
                                        <a href="#layouts-horizontal.html" class="nav-link" data-key="t-horizontal">Tambah Maintenance</a>
                                    </li>
                                </ul>
                            </div>
                        </li> <!-- end Publishers Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#<?= base_url('admin/settings'); ?>">
                                <i class="las la-chart-pie"></i> <span data-key="t-widgets">Laporan</span>
                            </a>
                        </li><!-- end Settings Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#<?= base_url('admin/settings'); ?>">
                                <i class="bx bx-cog"></i> <span data-key="t-widgets">Pengaturan</span>
                            </a>
                        </li><!-- end Settings Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#<?= base_url('admin/settings'); ?>">
                                <i class="mdi mdi-lifebuoy"></i> <span data-key="t-widgets">Pusat Bantuan</span>
                            </a>
                        </li><!-- end Settings Menu -->


                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->