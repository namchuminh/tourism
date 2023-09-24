<?php require(__DIR__.'/layouts/header.php'); ?>

<?php if(isset($error) && !empty($error)){ ?>
<div style="position: fixed; top: 72px; z-index: 100000; right: 11px;opacity: 1;" class="toast fade show">
    <div class="toast-header">
        <strong class="mr-auto">Thông Báo</strong>
        <small>Có Lỗi Khi Sửa</small>
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
<div style="position: fixed; top: 72px; z-index: 100000; right: 11px; opacity: 1;" class="toast">
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
                    <h4 class="mb-0 font-size-18">Quản Lý Chuyến Đi</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/'); ?>">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/chuyen-di/'); ?>">Chuyến Đi</a></li>
                            <li class="breadcrumb-item active">Hình Ảnh Chuyến Đi</li>
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
                    <h4 class="card-title">Nội dung Chuyến Đi</h4>
                    <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="simpleinput">Tên Chuyến Đi</label>
                                            <input type="text" id="simpleinput" class="form-control tensanpham" placeholder="Tên chuyến đi" required name="tenchuyendi" value="<?php echo $detail[0]['TenChuyenDi']; ?>" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="simpleinput">Điểm Khởi Hành</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Nhập điểm khởi hành" required name="diemkhoihanh" value="<?php echo $detail[0]['DiemKhoiHanh']; ?>" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Điểm Đến</label>
                                            <select required class="form-control" id="exampleFormControlSelect1" name="diemden" disabled>
                                                <?php foreach ($destinations as $key => $value): ?>
                                                    <?php if($detail[0]['MaDiemDen'] == $value['MaDiemDen']){ ?>
                                                        <option value="<?php echo $value['MaDiemDen']; ?>" selected><?php echo $value['TenDiemDen']; ?></option>
                                                    <?php }else{ ?>
                                                        <option value="<?php echo $value['MaDiemDen']; ?>"><?php echo $value['TenDiemDen']; ?></option>       
                                                    <?php } ?>
                                                <?php endforeach ?>
                                            </select>
                                        </div>          
                                        
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Loại Chuyến Đi</label>
                                            <select name="loaichuyendi" required class="form-control" id="exampleFormControlSelect1" disabled>
                                                <?php if($detail[0]['LoaiChuyenDi'] == 1){ ?>
                                                    <option value="1" selected>Bình Thường</option>
                                                    <option value="2">Nổi Bật</option>
                                                    <option value="3">Siêu Giảm Giá</option>
                                                    <option value="4">Phổ Biến</option>
                                                <?php }else if($detail[0]['LoaiChuyenDi'] == 2){ ?>
                                                    <option value="1">Bình Thường</option>
                                                    <option value="2" selected>Nổi Bật</option>
                                                    <option value="3">Siêu Giảm Giá</option>
                                                    <option value="4">Phổ Biến</option>
                                                <?php }else if($detail[0]['LoaiChuyenDi'] == 3){ ?>
                                                    <option value="1">Bình Thường</option>
                                                    <option value="2">Nổi Bật</option>
                                                    <option value="3" selected>Siêu Giảm Giá</option>
                                                    <option value="4">Phổ Biến</option>
                                                <?php }else if($detail[0]['LoaiChuyenDi'] == 4){ ?>
                                                    <option value="1">Bình Thường</option>
                                                    <option value="2">Nổi Bật</option>
                                                    <option value="3">Siêu Giảm Giá</option>
                                                    <option value="4" selected>Phổ Biến</option>
                                                <?php } ?>
                                            </select> 
                                        </div>

                                        <div class="form-group">
                                            <label>Chọn Nhiều Hình Ảnh</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="images[]" id="upload" required multiple>
                                                <label class="custom-file-label" for="upload">Chọn Ảnh</label>
                                            </div>   
                                        </div>

                                        <div id="preview">
                                            <?php if(count($img) > 0){ ?>
                                                <?php foreach ($img as $key => $value) { ?>
                                                    <img src="<?php echo base_url($value['DuongDan']); ?>">
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Cập Nhật Hình Ảnh</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style type="text/css">
    #preview {
      display: flex;
      flex-wrap: wrap;
    }

    #preview img {
      width: 24%;
      margin: 5px;
    }
</style>
<script>
    document.getElementById('upload').addEventListener('change', function(e) {
        var files = e.target.files; 

        var preview = document.getElementById('preview');
        preview.innerHTML = ''; // Xóa các hình ảnh xem trước cũ

        for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader(); 

        reader.readAsDataURL(file);
            reader.onload = function(e) {
                var img = document.createElement('img'); 
                img.src = e.target.result;
                preview.appendChild(img); 
            }
        }
    });

    $(document).ready(function(){
        $('#taoduongdan').click(function(){
            if($(".tensanpham").val() == ""){
                alert("Vui lòng nhập tiêu đề bài viết")
            }else{
                $("#duongdan").val(createSlug($(".tensanpham").val()))
            }
        })

        $('.close').click(function(){
            $(".toast").attr("style", "display: none;")
        })
    });
</script>
<?php require(__DIR__.'/layouts/footer.php'); ?>