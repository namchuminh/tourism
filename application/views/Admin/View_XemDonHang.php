<?php require(__DIR__.'/layouts/header.php'); ?>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Quản Lý Đơn Đặt Vé</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/'); ?>">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/don-hang/'); ?>">Đơn Đặt Vé</a></li>
                            <li class="breadcrumb-item active">Xem Chi Tiết</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Thông tin Vé</h4>
                    <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="simpleinput">Mã Vé Đặt</label>
                                            <input type="text" id="simpleinput" class="form-control" required value="<?php echo $detail[0]['MaTimKiem']; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleinput">Tên Chuyến Đi</label>
                                            <input type="text" id="simpleinput" class="form-control" required value="<?php echo $detail[0]['TenChuyenDi']; ?>" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="duongdan">Giá Vé</label>
                                            <input type="text" class="form-control" required value="<?php echo number_format($detail[0]['GiaChuyenDi']); ?>VNĐ / 1 người" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="duongdan">Số Lượng Vé</label>
                                            <input type="text" class="form-control" required value="<?php echo $detail[0]['SoLuongVe']; ?> vé" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="duongdan">Tổng Tiền</label>
                                            <input type="text" class="form-control" required value="<?php echo number_format($detail[0]['GiaChuyenDi'] * $detail[0]['SoLuongVe']); ?>VNĐ" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Lời Nhắn</label>
                                            <textarea required class="form-control" rows="5" disabled><?php echo $detail[0]['LoiNhan']; ?></textarea>
                                        </div>

                                        <?php if($detail[0]['TrangThai'] == 1){ ?>
                                            <a class="btn btn-light" href="<?php echo base_url('admin/don-hang/hanh-dong/2/'.$detail[0]['MaDatVe'].'/'); ?>">Duyệt Vé</a>
                                        <?php }else if ($detail[0]['TrangThai'] == 2) { ?>
                                            <a class="btn btn-secondary" href="<?php echo base_url('admin/don-hang/hanh-dong/3/'.$detail[0]['MaDatVe'].'/'); ?>">Chuẩn Bị Vé</a>
                                        <?php }else if ($detail[0]['TrangThai'] == 3) { ?>
                                            <a class="btn btn-info" href="<?php echo base_url('admin/don-hang/hanh-dong/4/'.$detail[0]['MaDatVe'].'/'); ?>">Đã Gửi Vé</a>
                                        <?php }else{ ?>
                                            <a class="btn btn-primary" href="<?php echo base_url('admin/don-hang/'); ?>">Quay Lại</a>
                                        <?php } ?>
                                    </form>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                        </div>
                        </div>
                        
                    </div>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
<style type="text/css">
    .form-control:disabled, .form-control[readonly]{
        background-color: #ffffff;
        opacity: 1;
    }
</style>
<?php require(__DIR__.'/layouts/footer.php'); ?>

