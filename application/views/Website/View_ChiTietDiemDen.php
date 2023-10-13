<?php require(__DIR__.'/layouts/header.php'); ?>

<!-- background header -->
    <div class="background-under-header itmes-deistina ">
        <div class="ChooseThePerfectHoliday-text background-under">
            <span class="choose header-abu">Địa điểm</span>
            <h2 class="theperfect header-abu"><?php echo $detail[0]['TenDiemDen']; ?></h2>
        </div>
    </div>
<!-- Taiwan -->
    <div class="itmes-for-destination">
        <div class="all-items-for-destination">
            <div class="conten--for-destination">
                <div class="bao-content">

                    <div class="text-one-for-destination">
                        <h1 class="soloname"><?php echo $detail[0]['TenDiemDen']; ?></h1>
                        <?php echo $detail[0]['MoTa']; ?>
                    </div>
                    
                    <div class="good-to-know">
                        <div class="all-good-to-know">
                            <h1 class="soloname">Thông Tin Địa Điểm</h1>
                            <p class="test-text">Một số thông tin hữu ích về địa điểm du lịch "<?php echo $detail[0]['TenDiemDen']; ?>" cho bạn tham khảo!</p>
                            <div class="text-into-good-to-know">
                                <div class="text-into-good-to-know-left">
                                    <div class="all-phai-fll">
                                        <div class="phai-fll">
                                            <div class="left-nho">
                                                <span class="icon-left-good"><i class="fa-solid fa-location-dot icon-be"></i></span>
                                                <p class="text-right-icon">Lãnh thổ / Quốc gia</p>
                                            </div>
                                            <div class="right-nho">
                                                <p class="text-right-icon"><?php echo $detail[0]['QuocGia']; ?></p>
                                            </div>
                                        </div>
                                        <div class="phai-fll">
                                            <div class="left-nho">
                                                <span class="icon-left-good"><i class="fa-solid fa-book icon-be"></i></span>
                                                <p class="text-right-icon">Yêu cầu thẻ Visa?</p>
                                            </div>
                                            <div class="right-nho">
                                                <p class="text-right-icon">
                                                    <?php echo $detail[0]['YeuCauVisa'] == 1 ? "Có yêu cầu Visa" : "Không yêu cầu Visa"; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="phai-fll">
                                            <div class="left-nho">
                                                <span class="icon-left-good"><i class="fa-regular fa-comment icon-be"></i></span>
                                                <p class="text-right-icon">Ngôn ngữ / Tiếng nói</p>
                                            </div>
                                            <div class="right-nho">
                                                <p class="text-right-icon"><?php echo $detail[0]['NgonNgu']; ?></p>
                                            </div>
                                        </div>
                                        <div class="phai-fll">
                                            <div class="left-nho">
                                                <span class="icon-left-good"><i class="fa-solid fa-book icon-be"></i></span>
                                                <p class="text-right-icon">Đơn vị tiền tệ</p>
                                            </div>
                                            <div class="right-nho">
                                                <p class="text-right-icon"><?php echo $detail[0]['DonViTien']; ?></p>
                                            </div>
                                        </div>
                                        <div class="phai-fll">
                                            <div class="left-nho">
                                                <span class="icon-left-good"><i class="fa-brands fa-safari icon-be"></i></span>
                                                <p class="text-right-icon">Diện tích(km<sup>2</sup>)</p>
                                            </div>
                                            <div class="right-nho">
                                                <p class="text-right-icon"><?php echo number_format($detail[0]['DienTich']); ?> km<sup>2</sup></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-one-for-destination">
                        <h1 class="soloname">Hình ảnh</h1>
                        <p class="test-text">Một vài hình ảnh miêu tả địa điểm du lịch "<?php echo $detail[0]['TenDiemDen']; ?>" cho các bạn tham khảo!</p>
                    </div>
                    <?php 
                        $hinhanh = explode("#", $detail[0]['HinhAnh']);
                    ?>
                     <!-- 5 imgae -->
                    <?php if(count($hinhanh) > 0){ ?>
                        <div class="five-img-for-destination">
                            <div class="all-five-img-destinal">
                                <div class="container-abouUs destinal-new">
                                    <?php for($i = 0; $i < count($hinhanh); $i++){ ?>
                                        <div class="col for-about-uss">
                                            <a href="#">
                                                <div class="d-flex flex-column text-center border height100">
                                                    <div class="hovereffect card-photo">
                                                        <img class="img-responsive" src="<?php echo $hinhanh[$i]; ?>" alt="">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    
                </div>
            </div>
            <div class="sidebar-for-destination">
                <div class="all-sidebar-for-destination">
                    <div class="search-for-faq">
                        <form action="<?php echo base_url('tim-kiem/'); ?>" method="GET" class="input-group mb-3 faq-searchh">
                            <input type="hidden" name="t" value="diadiem">
                            <input type="text" name="s" class="form-control onefaq" placeholder="Nhập tên địa điểm..." title="Tìm kiếm" aria-label="" aria-describedby="basic-addon1" required>
                            <div class="input-group-prepend">
                              <button type="submit" class="input-group-text" id="basic-addon1 fqaaa" style="background: #3abdc1; color: white;"><i class="fa-solid fa-magnifying-glass fa-rotate-90 for-faqqq"></i></button>
                            </div>
                        </form>
                        <div class="LatestPosts">
                            <h1 class="laila-Categories">Địa Điểm Khác</h1>
                            <?php if(count($related) > 0){ ?>
                                <?php foreach ($related as $key => $value): ?>
                                    <div class="img-and-text-latestposts">
                                        <div class="img-latestposts">
                                            <div class="hovereffect ">
                                                <img style="width: 150px; height: 150px; image-rendering: -webkit-optimize-contrast;" class="img-responsive" src="<?php echo $value['AnhChinh']; ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="text-latestposts">
                                            <a href="<?php echo base_url('tin-tuc/'.$value['DuongDan'].'/') ?>" class="link-hoai">
                                                <h1 class="very"><?php echo $value['TenDiemDen']; ?></h1>
                                                <p class="many">Quốc gia: <?php echo $value['QuocGia']; ?></p>
                                                <p class="many">Ngôn ngữ: <?php echo $value['NgonNgu']; ?></p>
                                                <p class="many">Diện tích: <?php echo number_format($value['DienTich']); ?> km<sup>2</sup></p>
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            <?php } ?>
                        </div>

                        <div class="Categories">
                            <h1 class="laila-Categories">Chuyên Mục</h1>
                            <div class="all-lick-nua">
                                <?php if(count($category) > 0){ ?>
                                    <?php foreach ($category as $key => $value): ?>
                                        <a href="#" class="link-from-Categories"><?php echo $value['TenChuyenMuc']; ?></a>
                                    <?php endforeach ?>
                                <?php } ?>
                            </div>
                        </div>    

                        <div class="Tags">
                            <h1 class="laila-Categories">Thẻ</h1>
                            <br>
                            <div class="tags-con">
                                <?php $listTag = "" ?>
                                <?php if(count($tag) > 0){ ?>
                                    <?php foreach ($tag as $key => $value): ?>
                                        <?php $listTag .= $value['The'].","; ?>
                                    <?php endforeach ?>
                                <?php } ?>

                                <?php 
                                    $array = explode(",", $listTag);
                                    array_pop($array);
                                    $array = array_unique($array);
                                    foreach ($array as $item) {
                                        echo '<a href="#" class="link-to-tags-left">'.$item.'</a>';
                                    }
                                ?>
                            </div>
                        </div>

                        <div class="col fm-faq">
                            <div class="content-footer-three sbm-faq">
                                <h4 class="Our-rent">Đăng Ký</h4>
                                <p class="text--footer faq-n">Nhận thông báo các bài viết du lịch!</p>
                                <form class="form-footer" role="search">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1 bgr-form-fa"><i class="fa-solid fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control bgr-form-fa" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1 bgr-form-fa"><i class="fa-regular fa-envelope"></i></span>
                                        </div>
                                        <input type="text" class="form-control bgr-form-fa" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                                    </div>
                                    <button class="btn-sub sbm-for-faqa">Đăng Ký</button>
                                </form>
                            </div>
                        </div>
                        <div class="follow-me">
                            <h1 class="laila-Categories">Theo Dõi</h1>
                            <br>
                            <div class="icon-followme">
                                <a class="hmmmmmm" href="">
                                    <span class="icon-supper-new"><i class="fa-brands fa-twitter new-iconn"></i></span>
                                </a>
                                <a class="hmmmmmm" href="">
                                    <span class="icon-supper-new"><i class="fa-brands fa-pinterest-p new-iconn"></i></span>
                                </a>
                                <a class="hmmmmmm" href="">
                                    <span class="icon-supper-new"><i class="fa-brands fa-facebook new-iconn"></i></span>
                                </a>
                                <a class="hmmmmmm" href="">
                                    <span class="icon-supper-new"><i class="fa-brands fa-instagram new-iconn"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require(__DIR__.'/layouts/footer.php'); ?>
