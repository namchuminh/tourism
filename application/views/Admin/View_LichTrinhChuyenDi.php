<?php require(__DIR__.'/layouts/header.php'); ?>

<?php if(isset($error) && !empty($error)){ ?>
<div style="position: fixed; top: 72px; z-index: 100000; right: 11px; display: block; opacity: 1;" class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
    <div class="toast-header">
        <strong class="mr-auto">Thông Báo</strong>
        <small>Có Lỗi Khi Thêm</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true" class="thoat">×</span>
        </button>
    </div>
    <div class="toast-body">
        <?php echo $error; ?>
    </div>
</div>
<?php } ?>

<?php if(isset($success) && !empty($success)){ ?>
<div style="position: fixed; top: 72px; z-index: 100000; right: 11px; display: block; opacity: 1;" class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
    <div class="toast-header">
        <strong class="mr-auto">Thông Báo</strong>
        <small>Thành Công</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true" class="thoat">×</span>
        </button>
    </div>
    <div class="toast-body">
        <?php echo $success; ?>
    </div>
</div>
<?php } ?>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Quản Lý Bài Viết</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/'); ?>">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/chuyen-di/'); ?>">Chuyến Đi</a></li>
                            <li class="breadcrumb-item active">Lịch Trình Chuyến Đi</li>
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
                    <h4 class="card-title">Nhập nội dung Lịch trình</h4>
                    <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <?php if(count($numberList) <= 0){ ?>
                                                <?php for($i = 1; $i <= $days; $i++){ ?>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label for="simpleinput">Lịch Trình Ngày <?php echo $i; ?></label>
                                                            <input type="text" id="simpleinput" class="form-control" value="Ngày thứ <?php echo $i; ?>" required name="ngay<?php echo $i; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea required class="form-control" id="myTextarea<?php echo $i; ?>" name="noidung<?php echo $i; ?>">
                                                            </textarea>
                                                        </div>
                                                    </div>   
                                                <?php } ?>
                                            <?php }else{ ?>
                                                <?php foreach ($numberList as $key => $value): ?>
                                                    <input type="hidden" id="simpleinput" class="form-control" value="<?php echo $value['MaLichTrinh']; ?>" required name="malichtrinh<?php echo $key + 1; ?>">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label for="simpleinput">Lịch Trình Ngày <?php echo $key + 1; ?></label>
                                                            <input type="text" id="simpleinput" class="form-control" value="<?php echo $value['TieuDe']; ?>" required name="ngay<?php echo $key + 1; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea required class="form-control" id="myTextarea<?php echo $key + 1; ?>" name="noidung<?php echo $key + 1; ?>"><?php echo $value['NoiDung']; ?></textarea>
                                                        </div>
                                                    </div>   
                                                <?php endforeach ?>
                                            <?php } ?>
                                        </div>

                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            <?php 
                                                if(count($numberList) <= 0){
                                                    echo "Thêm Lịch Trình";
                                                }else{
                                                    echo "Cập Nhật Lịch Trình";
                                                } 
                                            ?>
                                        </button>
                                        
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
<script src="<?php echo base_url('public/ckeditor/ckeditor.js'); ?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    for(let i = 1; i <= <?php echo $days; ?>; i++){
        CKEDITOR.replace('myTextarea'+i, {
            toolbar: [
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
                { name: 'links', items: ['Link', 'Unlink'] },
                { name: 'insert', items: ['Image', 'Table'] },
                { name: 'tools', items: ['Maximize'] }
            ],
            height: '150'
        });
    }
    
</script>
<script>
    $(document).ready(function(){
        $('.close').click(function(){
            $(".toast").attr("style", "display: none;")
        })
    });
</script>
<?php require(__DIR__.'/layouts/footer.php'); ?>