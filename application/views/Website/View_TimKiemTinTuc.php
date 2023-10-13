<?php require(__DIR__.'/layouts/header.php'); ?>
<div class="background-under-header">
        <div class="ChooseThePerfectHoliday-text background-under">
            <span class="choose header-abu">Tìm kiếm</span>
            <h2 class="theperfect header-abu">
                <?php if(count($list) >= 1){ ?>
                    Bài viết: <?php echo $_GET['s']; ?>
                <?php }else{ ?>
                    Không tìm thấy bài viết!
                <?php } ?>
            </h2>
        </div>
    </div>
<!-- content 6 image -->
    <div class="holiday-time">
        <div class="all-holiday-time">
            <div class="row for-listblog">

                <?php foreach ($list as $key => $value): ?>

                    <div class="col-6 col-md-4">
                        <div class="ch-img-text">
                            <div class="img-hld-time">
                                <a href="<?php echo base_url('tin-tuc/'.$value['DuongDan'].'/') ?>" class="link-to-blog">
                                    <img src="<?php echo $value['AnhChinh']; ?>" alt="" class="picic">
                                </a>
                            </div>
                            <div class="text-hld-time">
                                <div class="two-text-top">
                                    <a href="<?php echo base_url('tin-tuc/'.$value['DuongDan'].'/') ?>" class="link-conti">
                                        <h1 class="name-holiday"><?php echo $value['TieuDe']; ?></h1>
                                    </a>
                                    <p class="name-tric-holiday"><?php echo substr($value['NoiDung'], 0, 79); ?>...</p>
                                </div>
                                <div class="standard-letf-four-text">
                                    <a href="#" class="link-from-blog-stand">
                                        <h1 class="time-ne">Ngày đăng: <?php echo date("d-m-Y", strtotime($value['NgayDang'])); ?></h1>
                                    </a>
                                    <a href="" class="link-from-blog-stand">
                                        <div class="h1m">
                                            <span class="icon-blog-stand"><i class="fa-regular fa-comment"></i></span>
                                            <p class="cmtt">Chuyên mục: <?php echo $value['TenChuyenMuc']; ?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>

            </div>

        </div>
    </div>


<div id="intoop-header">
    <div class="all-suprise">
        <div class="sup">
            <p class="sup-now">Đăng Ký Không Bỏ Lỡ Tin Tức Du Lịch Mới Nhất!</p>
        </div>
        <div class="join">
            <a href="" class="link-joininnow">
                <button class="join-now">Đăng Ký</button>
            </a>
        </div>
    </div>
</div>

<?php require(__DIR__.'/layouts/footer.php'); ?>

