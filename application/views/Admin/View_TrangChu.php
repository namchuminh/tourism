<?php require(__DIR__.'/layouts/header.php'); ?>


<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Trang Chủ</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/'); ?>">Hệ Thống</a></li>
                            <li class="breadcrumb-item active">Trang Chủ</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="bx bx-layer float-right m-0 h2 text-muted"></i>
                        <h6 class="text-muted text-uppercase mt-0">Số Lượng Vé Đặt Trong Ngày</h6>
                        <h3 class="mb-3" data-plugin="counterup">+<?php echo $sumTicketDay[0]['TongSoLuongVe'] == NULL ? "0" : $sumTicketDay[0]['TongSoLuongVe']; ?> vé đã đặt</h3>
                        <span class="badge badge-success mr-1"> 
                        	+<?php echo $sumTicketWeek[0]['TongSoLuongVe'] == NULL ? "0" : $sumTicketDay[0]['TongSoLuongVe']; ?> vé
                        </span> <span class="text-muted">trong tuần này</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="bx bx-dollar-circle float-right m-0 h2 text-muted"></i>
                        <h6 class="text-muted text-uppercase mt-0">DOANH THU HÔM NAY</h6>
                        <h3 class="mb-3"><span data-plugin="counterup">+<?php echo number_format($sumRevenueDay); ?>đ</span></h3>
                        <span class="badge badge-danger mr-1">
                        	<?php echo number_format($sumRevenueWeek); ?>đ
                        </span> <span class="text-muted">trong tuần này</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="bx bx-bx bx-analyse float-right m-0 h2 text-muted"></i>
                        <h6 class="text-muted text-uppercase mt-0">SỐ LƯỢNG TOUR CHƯA KHỞI HÀNH</h6>
                        <h3 class="mb-3"><span data-plugin="counterup">
                        	+<?php echo $tourStart; ?> tour chưa khởi hành
                        </span></h3>
                        <span class="badge badge-warning mr-1"></span> <span class="text-muted">Số lượng tour đã lên lịch nhưng chưa khởi hành</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="bx bxs-user float-right m-0 h2 text-muted"></i>
                        <h6 class="text-muted text-uppercase mt-0">KHÁCH HÀNG MỚI HÔM NAY</h6>
                        <h3 class="mb-3" data-plugin="counterup">
                        	+<?php echo $sumCumstomerDay; ?> khách hàng
                        </h3>
                        <span class="badge badge-success mr-1">
                        	<?php echo $sumCumstomerWeek; ?> khách hàng
                        </span> <span class="text-muted">trong tuần này</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title d-inline-block">Doanh Thu Theo Tháng</h4>
                        <canvas id="myChart" style="width:100%;"></canvas>
                    </div>
                </div>
            </div> <!-- end col -->

        </div>
        <!-- end row-->

    </div> <!-- container-fluid -->
</div>

<?php require(__DIR__.'/layouts/footer.php'); ?>