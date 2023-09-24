<?php require(__DIR__.'/layouts/header.php'); ?>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Quản Lý Chuyến Đi</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/'); ?>">Trang Chủ</a></li>
                            <li class="breadcrumb-item active">Chuyến Đi</li>
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
                    <h4 class="card-title">Danh sách chuyến đi</h4>
                    <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">

                            <div class="col-sm-12">
                                <div id="basic-datatable_filter" class="dataTables_filter" style="text-align: left;">
                                    <label>Tìm kiếm:
                                        <input
                                            type="search" class="form-control form-control-sm" placeholder="Tên chuyến đi"
                                            aria-controls="basic-datatable">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                            	<div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th tabindex="0" aria-controls="basic-datatable"
                                                rowspan="1" colspan="1"
                                                >Hình Ảnh</th>
	                                            <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
	                                                colspan="1"
	                                                >Tên Chuyến Đi</th>
	                                            <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
	                                                colspan="1"
	                                                >Mô Tả</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Điểm Khởi Hành</th>
	                                            <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
	                                                colspan="1"
	                                                >Điểm Đến
	                                            </th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Ngày Khời Hành
                                                </th>
	                                            <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
	                                                colspan="1"
	                                                >Ngày Trở Về
	                                            </th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Chi Phí
                                                </th>
                                                <th style="text-align: center;" tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Hình Ảnh
                                                </th>
                                                <th style="text-align: center;" tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Lịch Trình
                                                </th>
                                                <th style="text-align: center;" tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Vị Trí
                                                </th>
	                                            <th style="text-align: center;" tabindex="0" aria-controls="basic-datatable" rowspan="1"
	                                                colspan="1"
	                                                >Cập Nhật
	                                            </th>
	                                            <th style="text-align: center;" tabindex="0" aria-controls="basic-datatable" rowspan="1"
	                                                colspan="1"
	                                                >Thùng Rác
	                                            </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($list as $key => $value): ?>
                                        		<tr role="row" class="odd">
    	                                            <td style="white-space: unset;"><img style="image-rendering: optimizeQuality;" src="<?php echo $value['AnhChinh']; ?>" width="100" height="100"></td>

    	                                            <td style="white-space: unset;"><a style="font-weight: bold;" href="<?php echo base_url('admin/chuyen-di/sua/'.$value['MaChuyenDi'].'/') ?>"><?php echo $value['TenChuyenDi']; ?></a></td>

    	                                            <td><?php echo $value['MoTaNgan']; ?></td>

                                                    <td><?php echo $value['DiemKhoiHanh']; ?></td>

                                                    <td><?php echo $value['TenDiemDen']; ?></td>

                                                    <td><?php echo $value['GioKhoiHanh']; ?></td>

                                                    <td><?php echo $value['GioQuayVe']; ?></td>

                                                    <td><?php echo number_format($value['GiaChuyenDi']); ?> VNĐ / 1 người</td>

                                                    <td style="text-align: center;"><a href="<?php echo base_url('admin/chuyen-di/hinh-anh/'.$value['MaChuyenDi'].'/') ?>"><i style="font-size: 16px; color: #393f4e;" class="fa-solid fa-image"></i></a> </td>

                                                    <td style="text-align: center;"><a href="<?php echo base_url('admin/chuyen-di/lich-trinh/'.$value['MaChuyenDi'].'/') ?>"><i style="font-size: 16px; color: #393f4e;" class="fa-solid fa-list-ol"></i></a> </td>

                                                    <td style="text-align: center;"><a href="<?php echo base_url('admin/chuyen-di/vi-tri/'.$value['MaChuyenDi'].'/') ?>"><i style="font-size: 16px; color: #393f4e;" class="fa-solid fa-map-location-dot"></i></a> </td>

    	                                            <td style="text-align: center;"><a href="<?php echo base_url('admin/chuyen-di/sua/'.$value['MaChuyenDi'].'/') ?>"><i style="font-size: 18px; color: #393f4e;" class="bx bx-detail"></i></a> </td>                                

    	                                            <td style="text-align: center;"><a href="<?php echo base_url('admin/chuyen-di/them-thung-rac/'.$value['MaChuyenDi'].'/'); ?>"><i style="font-size: 18px; color: #393f4e;" class="bx bx-trash-alt"></i></a></td>
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
                                       		<li style="margin-right: 5px;" class="paginate_button page-item"><a href="<?php echo base_url('admin/chuyen-di/trang/'.$i.'/') ?>"
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