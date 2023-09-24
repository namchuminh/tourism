<?php require(__DIR__.'/layouts/header.php'); ?>

<?php if(isset($error) && !empty($error)){ ?>
<div style="position: fixed; top: 72px; z-index: 100000; right: 11px;opacity: 1;" class="toast fade show">
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
                    <h4 class="mb-0 font-size-18">Quản Lý Chuyên Mục</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/'); ?>">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/chuyen-muc/'); ?>">Chuyên Mục</a></li>
                            <li class="breadcrumb-item active">Sửa Chuyên Mục</li>
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
                    <h4 class="card-title">Nhập thông tin Chuyên Mục</h4>
                    <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="simpleinput">Tên Chuyên Mục</label>
                                            <input type="text" id="simpleinput" class="form-control tensanpham" placeholder="Tên chuyên mục" required name="tenchuyenmuc" value="<?php echo $detail[0]['TenChuyenMuc']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="duongdan">Đường Dẫn</label>
                                            <span id="taoduongdan" style="float: right; cursor: pointer; text-decoration: underline;">Tạo Tự Động</span>
                                            <input type="text" id="duongdan" class="form-control" placeholder="Đường dẫn chuyên mục.." required name="duongdan" value="<?php echo $detail[0]['DuongDan']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Ảnh Chính</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="anhchinh" id="customFile" onchange="loadFile(event, 'anhchinhload')">
                                                <label class="custom-file-label" for="customFile">Chọn Ảnh</label>
                                            </div>
                                            <br>
                                            <br> 
                                            <img id="anhchinhload" src="<?php echo $detail[0]['AnhChinh']; ?>" style="width: 270px; height: 320px;">    
                                        </div>

                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Cập Nhật Chuyên Mục</button>
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
    CKEDITOR.replace('myTextarea', {
        height: '500px'
    });
</script>
<script>
    function createSlug(str) {
        // Chuyển đổi tiếng Việt thành dạng slug
        str = str.toLowerCase().trim();
        str = str.replace(/\s+/g, '-'); // Thay thế khoảng trắng bằng dấu gạch ngang
        str = convertVietnameseToSlug(str); // Xử lý các dấu tiếng Việt

        return str;
    }

    function convertVietnameseToSlug(str) {
        var slug = str;

        // Xử lý dấu tiếng Việt
        slug = slug.replace(/[áàảãạăắằẳẵặâấầẩẫậ]/g, 'a');
        slug = slug.replace(/[éèẻẽẹêếềểễệ]/g, 'e');
        slug = slug.replace(/[íìỉĩị]/g, 'i');
        slug = slug.replace(/[óòỏõọôốồổỗộơớờởỡợ]/g, 'o');
        slug = slug.replace(/[úùủũụưứừửữự]/g, 'u');
        slug = slug.replace(/[ýỳỷỹỵ]/g, 'y');
        slug = slug.replace(/đ/g, 'd');

        return slug;
    }

    var loadFile = function(event, idLoad) {
        var output = document.getElementById(idLoad);
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
          URL.revokeObjectURL(output.src) // free memory
        }
    };

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