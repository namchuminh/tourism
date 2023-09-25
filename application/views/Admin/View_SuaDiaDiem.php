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
                    <h4 class="mb-0 font-size-18">Quản Lý Địa Điểm</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/'); ?>">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dia-diem/'); ?>">Địa Điểm</a></li>
                            <li class="breadcrumb-item active">Sửa Địa Điểm</li>
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
                    <h4 class="card-title">Nhập thông tin Địa Điểm</h4>
                    <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="simpleinput">Tên Địa Điểm</label>
                                            <input type="text" id="simpleinput" class="form-control tensanpham" placeholder="Tên địa điểm" required name="tendiemden" value="<?php echo $detail[0]['TenDiemDen']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="duongdan">Đường Dẫn</label>
                                            <span id="taoduongdan" style="float: right; cursor: pointer; text-decoration: underline;">Tạo Tự Động</span>
                                            <input type="text" id="duongdan" class="form-control" placeholder="Đường dẫn địa điểm..." required name="duongdan" value="<?php echo $detail[0]['DuongDan']; ?>">
                                        </div>        

                                       <div class="form-group">
                                       	    <label for="exampleFormControlSelect1">Mô Tả Địa Điểm</label>
                                            <textarea required class="form-control" id="myTextarea" name="mota"><?php echo $detail[0]['MoTa']; ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Chuyên Mục</label>
                                            <select required class="form-control" id="exampleFormControlSelect1" name="chuyenmuc">
                                                <?php foreach ($category as $key => $value): ?>
                                                    <?php if($value['MaChuyenMuc'] == $detail[0]['MaChuyenMuc']){ ?>
                                                        <option value="<?php echo $value['MaChuyenMuc']; ?>" selected><?php echo $value['TenChuyenMuc']; ?></option>
                                                    <?php }else{ ?>
                                                        <option value="<?php echo $value['MaChuyenMuc']; ?>"><?php echo $value['TenChuyenMuc']; ?></option>
                                                    <?php } ?>       
                                                <?php endforeach ?>
                                            </select>
                                        </div>  
                                        
                                        <div class="form-group row">
                                        	<div class="col-6">
                                        		<label>Ảnh Chính</label>
	                                            <div class="custom-file">
	                                                <input type="file" class="custom-file-input" name="anhchinh">
	                                                <label class="custom-file-label" for="customFile">Chọn Ảnh</label>
	                                            </div> 
                                        	</div>
                                            <div class="col-6">
                                        		<label>Hình Ảnh</label>
	                                            <div class="custom-file">
	                                                <input type="file" class="custom-file-input" name="images[]" multiple>
	                                                <label class="custom-file-label" for="customFile">Chọn Nhiều Ảnh</label>
	                                            </div> 
                                        	</div>
                                        </div>

                                        <div class="form-group row">
                                        	<div class="col-6">
                                                <label for="simpleinput">Quốc Gia</label>
                                                <div class="input-group">
                                                    <input type="text" id="simpleinput" class="form-control" placeholder="Nhập tên quốc gia" required name="quocgia" value="<?php echo $detail[0]['QuocGia']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="exampleFormControlSelect1">Yêu Cầu Visa?</label>
                                                <select name="yeucauvisa" required class="form-control" id="exampleFormControlSelect1">
                                                    <?php if($detail[0]['YeuCauVisa'] == 1){ ?>
                                                        <option value="0">Không Yêu Cầu Visa</option>
                                                        <option value="1" selected>Có Yêu Cầu Visa</option>
                                                    <?php }else{ ?>
                                                        <option value="0" selected>Không Yêu Cầu Visa</option>
                                                        <option value="1">Có Yêu Cầu Visa</option>
                                                    <?php } ?>
                                                </select> 
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                        	<div class="col-6">
                                                <label for="simpleinput">Diện Tích</label>
                                                <div class="input-group">
                                                    <input type="number" id="simpleinput" class="form-control" placeholder="Nhập diện tích" required name="dientich" value="<?php echo $detail[0]['DienTich']; ?>">
                                                    <span class="input-group-text" id="basic-addon2">km<sup>2</sup></span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="simpleinput">Đơn Vị Tiền</label>
                                                <div class="input-group">
                                                    <input type="text" id="simpleinput" class="form-control" placeholder="Nhập đơn vị tiền" required name="donvitien" value="<?php echo $detail[0]['DonViTien']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-3">
                                        	<div class="col-6">
                                                <label for="simpleinput">Ngôn Ngữ</label>
                                                <div class="input-group">
                                                    <input type="text" id="simpleinput" class="form-control" placeholder="Nhập ngôn ngữ" required name="ngonngu" value="<?php echo $detail[0]['NgonNgu']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-6">
	                                            <label for="simpleinput">Thẻ</label>
	                                            <div class="input-group">
	                                                <input type="text" id="simpleinput" class="form-control" placeholder="Thẻ cách bởi dấu phẩy..." required name="the" value="<?php echo $detail[0]['The']; ?>">
	                                            </div>
	                                        </div>
                                        </div>

                                        

                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Cập Nhật Địa Điểm</button>
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
<script src="<?php echo base_url('public/ckeditor/ckeditor.js'); ?>"></script>

<script>
	CKEDITOR.replace('myTextarea', {
        height: '300'
    });
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