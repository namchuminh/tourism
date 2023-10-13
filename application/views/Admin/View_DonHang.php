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
                            <li class="breadcrumb-item active">Đơn Đặt Vé</li>
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
                    <h4 class="card-title">Danh sách Vé</h4>
                    <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                            	<div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th tabindex="0" aria-controls="basic-datatable"
                                                rowspan="1" colspan="1"
                                                >Mã Vé Đặt</th>
	                                            <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
	                                                colspan="1"
	                                                >Tên Khách Hàng</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Email</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Số Điện Thoại</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Loại Khách Hàng</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Trạng Thái
                                                </th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Xem Chi Tiết</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Hành Động
                                                </th>
                                                <th style="text-align: center;" tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Hủy Vé
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($list as $key => $value): ?>
                                    		<tr role="row" class="odd">

	                                            <td style="font-weight: bold; color: #346ee0;"><?php echo $value['MaTimKiem']; ?></td>
                                                <td><?php echo $value['TenKhachHang']; ?></td>
                                                <td><?php echo $value['Email']; ?></td>
                                                <td><?php echo $value['SoDienThoai']; ?></td>
                                                <td>
                                                    <?php echo $value['LoaiKhachHang'] == 0 ? "Chưa đăng ký" : "Có tài khoản"; ?>
                                                </td>
                                                
                                                <td>
                                                    <?php 
                                                        if($value['TrangThai'] == 1){
                                                            echo "Chưa được duyệt"; 
                                                        }else if ($value['TrangThai'] == 2) {
                                                            echo "Chưa Thanh Toán";
                                                        }else if ($value['TrangThai'] == 3) {
                                                            echo "Đang chuẩn bị vé";
                                                        }else if ($value['TrangThai'] == 4) {
                                                            echo "Vé đã gửi cho KH";
                                                        }else if ($value['TrangThai'] == 0) {
                                                            echo "Đã hủy vé";
                                                        }
                                                    ?>
                                                </td>
                                                <td style="text-align: center;"><a href="<?php echo base_url('admin/don-hang/xem/'.$value['MaDatVe'].'/') ?>"><i style="font-size: 18px; color: #393f4e;" class="bx bx-receipt"></i></a> </td>
                                                <td>
                                                    <?php if($value['TrangThai'] == 1){ ?>
                                                        <a class="btn btn-light" href="<?php echo base_url('admin/don-hang/hanh-dong/2/'.$value['MaDatVe'].'/'); ?>">Duyệt Vé</a>
                                                    <?php }else if ($value['TrangThai'] == 2) { ?>
                                                        <a class="btn btn-secondary" href="<?php echo base_url('admin/don-hang/hanh-dong/3/'.$value['MaDatVe'].'/'); ?>">Chuẩn Bị Vé</a>
                                                    <?php }else if ($value['TrangThai'] == 3) { ?>
                                                        <a class="btn btn-info" href="<?php echo base_url('admin/don-hang/hanh-dong/4/'.$value['MaDatVe'].'/'); ?>">Đã Gửi Vé</a>
                                                    <?php }else if ($value['TrangThai'] == 4) { ?>
                                                        Không được phép
                                                    <?php } ?>
                                                </td>
                                                <?php if($value['TrangThai'] == 4){ ?>
                                                    <td>Không được phép</td>
                                                <?php }else{ ?>
	                                               <td style="text-align: center;"><a href="<?php echo base_url('admin/don-hang/them-thung-rac/'.$value['MaDatVe'].'/'); ?>"><i style="font-size: 18px; color: #393f4e;" class="bx bx-basket"></i></a></td>
                                                <?php } ?>
	                                        </tr>
                                    	<?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="dataTables_paginate paging_simple_numbers" id="basic-datatable_paginate">
                                    <ul class="pagination pagination-rounded">
                                        <?php for($i = 1; $i <= $totalPages; $i++){ ?>
                                       		<li style="margin-right: 5px;" class="paginate_button page-item"><a href="<?php echo base_url('admin/don-hang/trang/'.$i.'/') ?>"
                                                class="page-link"><?php echo $i; ?></a></li>
                                        <?php } ?>           
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>

<?php require(__DIR__.'/layouts/footer.php'); ?>