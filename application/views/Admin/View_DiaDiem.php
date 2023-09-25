<?php require(__DIR__.'/layouts/header.php'); ?>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Quản Lý Địa Điểm</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/'); ?>">Trang Chủ</a></li>
                            <li class="breadcrumb-item active">Địa Điểm</li>
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
                    <h4 class="card-title">Danh sách Địa Điểm</h4>
                    <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
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
                                                    >Tên Địa Điểm</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Quốc Gia</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Ngôn Ngữ</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Yêu Cầu Visa</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Diện Tích</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Chuyên Mục</th>
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

                                                <td style="white-space: unset;"><a style="font-weight: bold;" href="<?php echo base_url('admin/dia-diem/sua/'.$value['MaDiemDen'].'/') ?>"><?php echo $value['TenDiemDen']; ?></a></td>

                                                <td><?php echo $value['QuocGia']; ?></td>
                                                <td><?php echo $value['NgonNgu']; ?></td>
                                                <td><?php echo $value['YeuCauVisa'] == 1 ? "Yêu cầu có Visa" : "Không yêu cầu Visa"; ?></td>
                                                <td><?php echo $value['DienTich']; ?> km<sup>2</sup></td>
                                                <td><?php echo $value['TenChuyenMuc']; ?></td>

                                                <td style="text-align: center;"><a href="<?php echo base_url('admin/dia-diem/sua/'.$value['MaDiemDen'].'/') ?>"><i style="font-size: 18px; color: #393f4e;" class="bx bx-detail"></i></a> </td>

                                                <td style="text-align: center;"><a href="<?php echo base_url('admin/dia-diem/them-thung-rac/'.$value['MaDiemDen'].'/'); ?>"><i style="font-size: 18px; color: #393f4e;" class="bx bx-trash-alt"></i></a></td>
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
                                            <li style="margin-right: 5px;" class="paginate_button page-item"><a href="<?php echo base_url('admin/dia-diem/trang/'.$i.'/') ?>"
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