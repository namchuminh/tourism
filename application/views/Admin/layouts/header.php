<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Trang Quản Trị Dành Cho Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link href="<?php echo base_url('public/'); ?>plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('public/'); ?>plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('public/'); ?>plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('public/'); ?>plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="<?php echo base_url('public/admin/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('public/admin/'); ?>css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('public/admin/'); ?>css/theme.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex align-items-left">
                    <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                </div>
                <div class="d-flex align-items-left">
                    <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </div>

                <div class="d-flex align-items-center">

                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="<?php echo $_SESSION['anhchinh']; ?>"
                                alt="Header Avatar">
                            <span class="d-none d-sm-inline-block ml-1"><?php echo $_SESSION['hoten']; ?></span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="<?php echo base_url('admin/ca-nhan/') ?>">
                                Cá Nhân
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="<?php echo base_url('admin/dang-xuat/') ?>">
                                <span>Đăng Xuất</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <div class="navbar-brand-box">
                    <a href="<?php echo base_url('admin/'); ?>" class="logo">
                        Hệ Thống
                    </a>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">QUẢN LÝ TOUR DU LỊCH</li>

                        <li>
                            <a href="<?php echo base_url('admin/'); ?>" class="waves-effect"><i class='bx bx-home-smile'></i><span class="badge badge-pill badge-primary float-right"></span><span>Trang Chủ</span></a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bxs-news"></i><span>Bài Viết</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?php echo base_url('admin/bai-viet/'); ?>">Danh Sách</a></li>
                                <li><a href="<?php echo base_url('admin/bai-viet/them/'); ?>">Thêm Mới</a></li>
                                <li><a href="<?php echo base_url('admin/bai-viet/thung-rac/'); ?>">Thùng Rác</a>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bxs-plane"></i><span>Chuyến Đi</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?php echo base_url('admin/chuyen-di/'); ?>">Danh Sách</a></li>
                                <li><a href="<?php echo base_url('admin/chuyen-di/them/'); ?>">Thêm Mới</a></li>
                                <li><a href="<?php echo base_url('admin/chuyen-di/thung-rac/'); ?>">Thùng Rác</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-layer"></i><span>Chuyên Mục</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?php echo base_url('admin/chuyen-muc/'); ?>">Danh Sách</a></li>
                                <li><a href="<?php echo base_url('admin/chuyen-muc/them/'); ?>">Thêm Mới</a></li>
                                <li><a href="<?php echo base_url('admin/chuyen-muc/thung-rac/'); ?>">Thùng Rác</a>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bxs-map"></i><span>Địa Điểm</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?php echo base_url('admin/dia-diem/'); ?>">Danh Sách</a></li>
                                <li><a href="<?php echo base_url('admin/dia-diem/them/'); ?>">Thêm Mới</a></li>
                                <li><a href="<?php echo base_url('admin/dia-diem/thung-rac/'); ?>">Thùng Rác</a>
                            </ul>
                        </li>

                        <li class="menu-title">QUẢN LÝ BÁN HÀNG</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-barcode"></i><span>Đơn Đặt Vé</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?php echo base_url('admin/don-hang/'); ?>">Danh Sách</a></li>
                                <li><a href="<?php echo base_url('admin/don-hang/thung-rac/'); ?>">Thùng Rác</a>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bxs-user"></i><span>Khách Hàng</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?php echo base_url('admin/khach-hang/'); ?>">Danh Sách</a></li>
                                <li><a href="<?php echo base_url('admin/khach-hang/thung-rac/'); ?>">Đang Cấm</a>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">