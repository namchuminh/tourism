<?php require(__DIR__.'/layouts/header.php'); ?>

<!-- background header -->
    <div class="background-under-header Items-tour">
        <div class="ChooseThePerfectHoliday-text background-under">
            <span class="choose header-abu">Chi tiết Tour</span>
            <h2 class="theperfect header-abu"><?php echo $detail[0]['TenChuyenDi']; ?></h2>
        </div>
    </div>

<!-- content -->
    <div class="content-Items-tour">
        <div class="all-content-Items-tour">
            <div class="content-standard-tour-left">
                <div class="all-content-standard-tour-left">
                <!-- Tab items -->
                    <div class="tabs">
                        <div class="tab-item active">
                            <i class="fa-solid fa-newspaper"></i>
                            THÔNG TIN
                        </div>
                        <div class="tab-item">
                            <i class="fa-regular fa-calendar-days"></i>
                            LỊCH TRÌNH
                        </div>
                        <div class="tab-item">
                            <i class="fa-solid fa-location-dot"></i>
                            ĐIỂM ĐẾN
                        </div>
                        <div class="tab-item">
                            <i class="fa-solid fa-camera"></i>
                            HÌNH ẢNH
                        </div>
                        <div class="tab-item">
                            <i class="fa-regular fa-comments"></i>
                            ĐÁNH GIÁ
                        </div>
                        <div class="line"></div>
                    </div>

                <!-- Tab content -->
                    <div class="all-content">
                        <div class="tab-content">
                            <div class="tab-pane active">
                                <div class="information">
                                    <div class="infomation-opera">
                                        <div class="title-info">
                                            <h1 class="opra"><?php echo $detail[0]['TenChuyenDi']; ?></h1>
                                            <div class="person">
                                                <span class="ney"><?php echo number_format($detail[0]['GiaChuyenDi']); ?> VNĐ</span>
                                                <span class="mony">/ 1 người</span>
                                            </div>
                                        </div>
                                        <div class="star-day">
                                            <span class="star-vote"><i class="fa-solid fa-star"></i></span>
                                            <span class="star-vote"><i class="fa-solid fa-star"></i></span>
                                            <span class="star-vote"><i class="fa-solid fa-star"></i></span>
                                            <span class="star-vote"><i class="fa-solid fa-star"></i></span>
                                            <span class="star-vote"><i class="fa-regular fa-star"></i></span>
                                            <span class="rev"> (1 Review)</span>
                                        </div>
                                        <p class="laren-again">
                                            <?php echo $detail[0]['MoTaNgan']; ?>
                                        </p>
                                        <div class="tag-for-blog">
                                            <div class="tags-con">
                                                <a href="" class="link-to-tags-left"><i class="fa-regular fa-calendar"></i> <?php echo date("d-m-Y", strtotime($detail[0]['GioKhoiHanh'])); ?></a>
                                                <a href="" class="link-to-tags-right"><i class="fa-solid fa-user"></i> <?php echo $detail[0]['DoTuoi']; ?>+ tuổi</a>
                                                <a href="" class="link-to-tags-left"><i class="fa-solid fa-location-dot"></i> <?php echo $detail[0]['TenDiemDen']; ?></a>
                                            </div>
                                        </div>
                                        <div class="ticket">
                                            <ul class="all-inf-tic">
                                                <li class="inf-fix">
                                                    <h1 class="inf-left">Điểm du lịch</h1>
                                                    <div class="inf-right">
                                                        <a href="" class="link-by-me"><?php echo $detail[0]['TenDiemDen']; ?></a>
                                                    </div>
                                                </li>
                                                <li class="inf-fix">
                                                    <h1 class="inf-left">Điểm khởi hành</h1>
                                                    <div class="inf-right">
                                                        <a href="" class="link-by-me"><?php echo $detail[0]['DiemKhoiHanh']; ?></a>
                                                    </div>
                                                </li>
                                                <li class="inf-fix">
                                                    <h1 class="inf-left">Ngày khởi hành</h1>
                                                    <div class="inf-right">
                                                        <a href="" class="link-by-me"><?php echo $detail[0]['GioKhoiHanh']; ?></a>
                                                    </div>
                                                </li>
                                                <li class="inf-fix">
                                                    <h1 class="inf-left">Ngày trở về</h1>
                                                    <div class="inf-right">
                                                        <a href="" class="link-by-me"><?php echo $detail[0]['GioQuayVe']; ?></a>
                                                    </div>
                                                </li>
                                                <li class="inf-fix">
                                                    <h1 class="inf-left">Quy định trang phục</h1>
                                                    <div class="inf-right">
                                                        <a href="" class="link-by-me"><?php echo $detail[0]['QuyDinhTrangPhuc']; ?></a>
                                                    </div>
                                                </li>
                                                <?php 
                                                    $baogom = explode(",", $detail[0]['BaoGom']);
                                                    $khongbaogom = explode(",", $detail[0]['KhongBaoGom']);
                                                ?>
                                                <li class="inf-fix">
                                                    <h1 class="inf-left">Bao gồm dịch vụ</h1>
                                                    <div class="inf-right">
                                                        <?php foreach ($baogom as $key => $value): ?>
                                                            <div class="four-opti"><?php echo $value; ?></div>
                                                        <?php endforeach ?>
                                                    </div>
                                                </li>
                                                <li class="inf-fix">
                                                    <h1 class="inf-left">Không bao gồm dịch vụ</h1>
                                                    <div class="inf-right">
                                                        <?php foreach ($khongbaogom as $key => $value): ?>
                                                            <div class="four-opti-new"><?php echo $value; ?></div>
                                                        <?php endforeach ?>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="From-our-gallery">
                                            <div class="all-From-our-gallery">
                                                <div class="textFrom-our-gallery">
                                                    <h1 class="from">Hình Ảnh Tour</h1>
                                                    <p class="laren-again">Một vài hình ảnh thú vị chi tiết về chuyến đi "<?php echo $detail[0]['TenChuyenDi']; ?>" cho các bạn tham khảo!</p>
                                                </div>
                                                <div class="img-From-our-gallery">
                                                    <div class="row from-gallery">
                                                        <?php if(count($images) >= 1){ ?>
                                                            <div class="col">
                                                                <div class="hovereffect">
                                                                    <img class="img-responsive" src="<?php echo base_url($images[0]['DuongDan']); ?>" alt="">
                                                                </div>
                                                            </div>
                                                        <?php } ?>

                                                        <?php if(count($images) >= 2){ ?>
                                                            <div class="col">
                                                                <div class="hovereffect">
                                                                    <img class="img-responsive" src="<?php echo base_url($images[1]['DuongDan']); ?>" alt="">
                                                                </div>
                                                            </div>
                                                        <?php } ?>

                                                        <?php if(count($images) >= 3){ ?>
                                                            <div class="col">
                                                                <div class="hovereffect">
                                                                    <img class="img-responsive" src="<?php echo base_url($images[2]['DuongDan']); ?>" alt="">
                                                                </div>
                                                            </div>
                                                        <?php } ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="information-gallery"></div>
                                </div>
                            </div>
                            <div class="tab-pane">
                                <div class="Tour-plan-Items-tour">
                                    <div class="all-day">
                                        <h1 class="tour-itmes">Lịch Trình: <?php echo $detail[0]['TenChuyenDi']; ?></h1>
                                    </div>

                                    <?php if(count($plan) >= 1){ ?>
                                        <?php foreach ($plan as $key => $value): ?>
                                            <div class="day-rest">
                                                <div class="all-h1box">
                                                    <div class="one-box"><?php echo $key + 1; ?></div>
                                                    <span class="line">
                                                        <span class="line-into"></span>
                                                    </span>
                                                    <h1 class="text-titl"><?php echo $value['TieuDe']; ?></h1>
                                                </div>
                                                <div class="content-box">
                                                    <?php echo $value['NoiDung']; ?>
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                    <?php } ?>
                                    
                                </div>
                            </div>
                            <div class="tab-pane">
                                <div class="locaiton-Items-tour">
                                    <div class="tour-location">
                                        <h1 class="tour-itmes">Địa điểm: <?php echo $detail[0]['TenDiemDen']; ?></h1>
                                        <?php if(count($location) >= 1){ ?>
                                            <p class="loca-items"><?php echo $location[0]['MoTaNgan']; ?></p>
                                        <?php } ?>
                                        
                                    </div>
                                    <div class="map-in-location">
                                        <div id="map">
                                            <div class="google-map">
                                                <?php if(count($location) >= 1){ ?>
                                                    <?php echo $location[0]['BanDo']; ?>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Hystory-Items-tour">
                                        <?php if(count($location) >= 1){ ?>
                                            <h1 class="Hystory">Lịch Sử Điểm Du Lịch: <?php echo $detail[0]['TenDiemDen']; ?></h1>
                                            <?php echo $location[0]['MoTaDai']; ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane">
                                <div class="gallery-Items-tour">
                                    <div class="tour-location">
                                        <h1 class="tour-itmes"> Hình Ảnh Du Lịch</h1>
                                        <p class="loca-items">Một vài hình ảnh thú vị chi tiết về chuyến đi "<?php echo $detail[0]['TenChuyenDi']; ?>" cho các bạn tham khảo!</p>
                                    </div>
                                    <!-- 9 image -->
                                    <div class="nine-img">
                                        <div class="row for-gallery-tour">
                                            <?php if(count($images) >= 1){ ?>
                                                <?php foreach ($images as $key => $value): ?>
                                                    <div class="col-6 col-md-4">
                                                        <div class="hovereffect">
                                                            <img class="img-responsive" src="<?php echo base_url($value['DuongDan']); ?>" alt="">
                                                        </div>
                                                    </div>
                                                <?php endforeach ?>
                                            <?php } ?>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane">
                                <div class="review-Items-tour">
                                    <div class="tour-location">
                                        <h1 class="tour-itmes"> Reviews Scores and Score Breakdown</h1>
                                        <p class="loca-items">Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies</p>
                                    </div>
                                    <div class="vote-version">
                                        <div class="all-vote-version">
                                            <div class="row vt-version">
                                                <div class="col-3">
                                                    <H1 class="seven">7.7</H1>
                                                    <div class="sta-tx">
                                                        <span class="sta"><i class="fa-sharp fa-solid fa-star"></i></span>
                                                        <span class="tx">Superb</span>
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="skill__detail">
                                                        <div class="list__tech">
                                                            <div class="tech">
                                                                <span>Rating</span>
                                                                <div class="progressbar">
                                                                    <div class="element__progress tech1">
                                                                        <div class="percentage">
                                                                            <p>60%</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list__tech">
                                                            <div class="tech">
                                                                <span>Comfort</span>
                                                                <div class="progressbar">
                                                                    <div class="element__progress tech2">
                                                                        <div class="percentage">
                                                                            <p>100%</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list__tech">
                                                            <div class="tech">
                                                                <span>Food</span>
                                                                <div class="progressbar">
                                                                    <div class="element__progress tech3">
                                                                        <div class="percentage">
                                                                            <p>100%</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list__tech">
                                                            <div class="tech">
                                                                <span>Hospitality</span>
                                                                <div class="progressbar">
                                                                    <div class="element__progress tech4">
                                                                        <div class="percentage">
                                                                            <p>60%</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list__tech">
                                                            <div class="tech">
                                                                <span>Hygiene</span>
                                                                <div class="progressbar">
                                                                    <div class="element__progress tech5">
                                                                        <div class="percentage">
                                                                            <p>80%</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list__tech">
                                                            <div class="tech">
                                                                <span>Resception</span>
                                                                <div class="progressbar">
                                                                    <div class="element__progress tech6">
                                                                        <div class="percentage">
                                                                            <p>60%</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-a-coment">
                                        <div class="standard-left-five">
                                            <div class="leave-form">
                                                <div class="all-fromct-us from-items-destina">
                                                    <form action="#" class="contactus from-items-destina">
                                                        <div class="contactbuttun">
                                                            <div class="text-form-contact-us">
                                                                <h1 class="for-contactus">Post a Comment</h1>
                                                                <div class="vote-star-review">
                                                                    <div class="row rating-now">
                                                                        <div class="col">
                                                                            <div class="rat1">
                                                                                <span class="test">Rating</span>
                                                                                <span class="star-authen">
                                                                                    <div>
                                                                                        <input type="hidden" name="Star" value="3" class="rating-loading" step="1" data-size="xs" data-show-clear="false" data-show-caption="false" />
                                                                                    </div>
                                                                                </span>
                                                                            </div>
                                                                            <div class="rat2">
                                                                                <span class="test">Hospitality</span>
                                                                                <span class="star-authen">
                                                                                    <div>
                                                                                        <input type="hidden" name="Star" value="3" class="rating-loading" step="1" data-size="xs" data-show-clear="false" data-show-caption="false" />
                                                                                    </div>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="rat1">
                                                                                <span class="test">Comfort</span>
                                                                                <span class="star-authen">
                                                                                    <div>
                                                                                        <input type="hidden" name="Star" value="3" class="rating-loading" step="1" data-size="xs" data-show-clear="false" data-show-caption="false" />
                                                                                    </div>
                                                                                </span>
                                                                            </div>
                                                                            <div class="rat2">
                                                                                <span class="test">Hygiene</span>
                                                                                <span class="star-authen">
                                                                                    <div>
                                                                                        <input type="hidden" name="Star" value="3" class="rating-loading" step="1" data-size="xs" data-show-clear="false" data-show-caption="false" />
                                                                                    </div>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="rat1">
                                                                                <span class="test">Food</span>
                                                                                <span class="star-authen">
                                                                                    <div>
                                                                                        <input type="hidden" name="Star" value="3" class="rating-loading" step="1" data-size="xs" data-show-clear="false" data-show-caption="false" />
                                                                                    </div>
                                                                                </span>
                                                                            </div>
                                                                            <div class="rat2">
                                                                                <span class="test">Reception</span>
                                                                                <span class="star-authen">
                                                                                    <div>
                                                                                        <input type="hidden" name="Star" value="3" class="rating-loading" step="1" data-size="xs" data-show-clear="false" data-show-caption="false" />
                                                                                    </div>
                                                                                </span>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="btn-for-form-ctu">
                                                                <div class="input-group flex-nowrap">
                                                                    <div class="input-group-prepend">
                                                                    </div>
                                                                    <textarea name="" id="" cols="30" rows="10" class="form-control cotx yourmessage" placeholder=" Comment" aria-label="Comment"></textarea>
                                                                    <!-- <input type="text" class="form-control cotx yourmessage" placeholder="Your Message" aria-label="Your Message" aria-describedby="addon-wrapping"> -->
                                                                </div>
                                                                <div class="email-and-name-btn">
                                                                    <div class="input-group flex-nowrap">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1 forr-ourcontact"><i class="fa-solid fa-user"></i></span>
                                                                        </div>
                                                                        <input type="text" class="form-control cotx" placeholder="Name" aria-label="Name" aria-describedby="addon-wrapping">
                                                                    </div>
                                                                    <div class="input-group flex-nowrap">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1 forr-ourcontact"><i class="fa-regular fa-envelope"></i></span>
                                                                        </div>
                                                                        <input type="text" class="form-control cotx" placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping">
                                                                    </div>
                                                                </div>
                                                                <div class="checkbox-review">
                                                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                                    <label for="vehicle1"> Save my name, email, and website in this browser for the next time I comment.</label><br>
                                                                </div>
                                                                <div class="submitall">
                                                                    <a class="submit-all" href="#"> <button class="submit-contact">Submit</button> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-standard-tour-right">
                            <div class="all-content-standard-tour-right informatinal">
                                <div class="search-for-faq">
                                    <div class="col fm-faq">
                                        <div class="content-footer-three sbm-faq">
                                            <h4 class="Our-rent">Đặt Vé Tour Này</h4>
                                            <?php if(isset($error) && !empty($error)){ ?>
                                                <p class="text--footer faq-n" style="color: #fff700;"><?php echo $error; ?></p>
                                            <?php }else if(isset($success) && !empty($success)){ ?>
                                                <p class="text--footer faq-n"><?php echo $success; ?></p>
                                            <?php }else{ ?>
                                                <p class="text--footer faq-n">Điền thông tin của bạn vào để đặt vé ngay cho Tour du lịch "<?php echo $detail[0]['TenChuyenDi']; ?>"</p>
                                            <?php } ?>
                                            <form class="form-footer" role="search" method="POST">
                                                
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1 bgr-form-fa"><i class="fa-solid fa-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control bgr-form-fa" placeholder="Họ tên khách hàng" aria-label="Name*" aria-describedby="basic-addon1" value="<?php echo isset($_SESSION['TenKhachHang']) ? $_SESSION['TenKhachHang'] : '' ?>" <?php echo isset($_SESSION['khachhang']) ? "disabled" : "" ?> required name="fullname">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1 bgr-form-fa"><i class="fa-regular fa-envelope"></i></i></span>
                                                    </div>
                                                    <input type="email" class="form-control bgr-form-fa" placeholder="Email khách hàng" aria-label="Email*" aria-describedby="basic-addon1" value="<?php echo isset($_SESSION['Email']) ? $_SESSION['Email'] : '' ?>" <?php echo isset($_SESSION['khachhang']) ? "disabled" : "" ?> required name="email">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1 bgr-form-fa"><i class="fa-solid fa-phone"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control bgr-form-fa" placeholder="Số điện thoại" aria-label="Phone" aria-describedby="basic-addon1" value="<?php echo isset($_SESSION['SoDienThoai']) ? $_SESSION['SoDienThoai'] : '' ?>" <?php echo isset($_SESSION['khachhang']) ? "disabled" : "" ?> required name="phone">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1 bgr-form-fa"><i class="fa-solid fa-tags fa-rotate-90"></i></span>
                                                    </div>
                                                    <input type="number" class="form-control bgr-form-fa" min="1" placeholder="Số lượng vé" aria-label="Number of Tickets*" aria-describedby="basic-addon1" required name="number" value="<?php echo isset($number) ? $number : '' ?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <textarea name="message" id="" cols="30" rows="10" class="form-control cotx yourmessage" placeholder="Lời nhắn..." aria-label="Your Message" name="message"><?php echo isset($message) ? $message : '' ?></textarea>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <button class="btn-sub sbm-for-faqa" type="submit">ĐẶT NGAY</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="ah-standaer-tour">
                                            <a href="#" class="link-to-shop">
                                                <img src="<?php echo base_url('public/website/Image/standard-tour-img-right.jpg') ?>" alt="" class="next-to-shop">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require(__DIR__.'/layouts/footer.php'); ?>
