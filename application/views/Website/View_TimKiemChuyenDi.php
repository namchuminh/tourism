<?php require(__DIR__.'/layouts/header.php'); ?>

<!-- background header -->
    <div class="background-under-header standard-tour">
        <div class="ChooseThePerfectHoliday-text background-under">
            <span class="choose header-abu">Tìm kiếm</span>
            <h2 class="theperfect header-abu">Tour du lịch</h2>
        </div>
    </div>

<!-- content -->
<div class="content-standard-tour">
    <div class="all-in-content-standard-tour">
        <div class="content-standard-tour-left">
            <div class="all-content-standard-tour-left">
            <!-- Tab items -->
                <div class="tabs">
                    <div class="tab-item active">
                        <?php if(count($list) <= 0){ ?>
                            KHÔNG TÌM THẤY TOUR NÀO!
                        <?php }else{ ?>
                            KẾT QUẢ TÌM KIẾM
                        <?php } ?>
                    </div>
                    <div class="line"></div>
                </div>

            <!-- Tab content -->
                <div class="all-content">
                    <div class="tab-content">
                        <div class="tab-pane active">
                            <div class="one-content-standard-tour-left ">
                                <div class="row standard-tour-ab">
                                    <?php 
                                        $prices = array_column($tour, "GiaChuyenDi");
                                        $maxPrice = max($prices);
                                        $minPrice = min($prices);
                                    ?>

                                    <?php if(count($list) <= 0){ ?>
                                        <?php echo "DANH SÁCH TẤT CẢ TOUR HIỆN CÓ"; ?>
                                        <hr>
                                        <?php foreach ($allList as $key => $value): ?>
                                            <div class="col-6 col-md-4">
                                                <div class="ing-ne hovereffect">
                                                    <a href="<?php echo base_url('tour-du-lich/'.$value['DuongDan'].'/') ?>" class="link-theplane">
                                                        <img style="height: 328px" src="<?php echo $value['AnhChinh']; ?>" alt="" class="img-slider img-responsive">
                                                    </a>
                                                </div>
                                                <div class="note-plane">
                                                    <div class="all-note-plane">
                                                        <span class="note-in-img-st" >
                                                            <p class="img-note"><i class="fa-regular fa-calendar"></i></p>
                                                            <p class="text-note">Khởi hành: <?php echo date("d-m-Y", strtotime($value['GioKhoiHanh'])); ?></p>
                                                        </span>
                                                        <span class="note-in-img-2th">
                                                            <p class="img-note"><i class="fa-solid fa-user"></i></p>
                                                            <p class="text-note">Độ tuổi: <?php echo $value['DoTuoi']; ?>+</p>
                                                        </span>
                                                        <span class="note-in-img-2th">
                                                            <p class="img-note"><i class="fa-solid fa-location-dot"></i></p>
                                                            <p class="text-note">Điểm đến: <?php echo $value['TenDiemDen']; ?></p>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="all-textunder-imgtheplane tour-stand">
                                                    <a href="<?php echo base_url('tour-du-lich/'.$value['DuongDan'].'/') ?>" class="link-here">
                                                        <h4 class="text-under-img-theplane"><?php echo $value['TenChuyenDi']; ?></h4>
                                                    </a>
                                                    <p class="text-under-text">
                                                        <?php echo substr($value['MoTaNgan'], 0, 55); ?>
                                                    </p>
                                                    <div class="vote" style="justify-content: space-between;">
                                                        <span class="monny">
                                                            Giá vé: <?php echo number_format($value['GiaChuyenDi']); ?>đ / 1 người
                                                        </span>
                                                        <div class="text-start">
                                                            <span class="text-next-to-start">Đánh giá: 6.7</span>
                                                            <span class="number-start"><i class="fa-regular fa-star-half-stroke"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                    <?php }else{ ?>
                                        <?php foreach ($list as $key => $value): ?>
                                            <div class="col-6 col-md-4">
                                                <div class="ing-ne hovereffect">
                                                    <a href="<?php echo base_url('tour-du-lich/'.$value['DuongDan'].'/') ?>" class="link-theplane">
                                                        <img style="height: 328px" src="<?php echo $value['AnhChinh']; ?>" alt="" class="img-slider img-responsive">
                                                    </a>
                                                </div>
                                                <div class="note-plane">
                                                    <div class="all-note-plane">
                                                        <span class="note-in-img-st" >
                                                            <p class="img-note"><i class="fa-regular fa-calendar"></i></p>
                                                            <p class="text-note">Khởi hành: <?php echo date("d-m-Y", strtotime($value['GioKhoiHanh'])); ?></p>
                                                        </span>
                                                        <span class="note-in-img-2th">
                                                            <p class="img-note"><i class="fa-solid fa-user"></i></p>
                                                            <p class="text-note">Độ tuổi: <?php echo $value['DoTuoi']; ?>+</p>
                                                        </span>
                                                        <span class="note-in-img-2th">
                                                            <p class="img-note"><i class="fa-solid fa-location-dot"></i></p>
                                                            <p class="text-note">Điểm đến: <?php echo $value['TenDiemDen']; ?></p>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="all-textunder-imgtheplane tour-stand">
                                                    <a href="<?php echo base_url('tour-du-lich/'.$value['DuongDan'].'/') ?>" class="link-here">
                                                        <h4 class="text-under-img-theplane"><?php echo $value['TenChuyenDi']; ?></h4>
                                                    </a>
                                                    <p class="text-under-text">
                                                        <?php echo substr($value['MoTaNgan'], 0, 55); ?>
                                                    </p>
                                                    <div class="vote" style="justify-content: space-between;">
                                                        <span class="monny">
                                                            Giá vé: <?php echo number_format($value['GiaChuyenDi']); ?>đ / 1 người
                                                        </span>
                                                        <div class="text-start">
                                                            <span class="text-next-to-start">Đánh giá: 6.7</span>
                                                            <span class="number-start"><i class="fa-regular fa-star-half-stroke"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-standard-tour-right">
                        <div class="all-content-standard-tour-right">
                            <div class="search-for-faq">
                                <div class="col fm-faq">
                                    <div class="content-footer-three sbm-faq">
                                        <h4 class="Our-rent">Chuyến Di Của Bạn</h4>
                                        <p class="text--footer faq-n">Hãy lựa chọn các chuyến đi hoàn hảo!</p>
                                        <form action="<?php echo base_url('tim-kiem-tour/'); ?>" class="form-footer" role="search" method="GET">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1 bgr-form-fa"><i class="fa-regular fa-compass"></i></span>
                                                </div>
                                                <select name="diemden" class="month-select" data-select2-id="1" tabindex="-1" aria-hidden="true" required>
                                                    <option value="" hidden>Địa điểm du lịch?</option>
                                                    <?php if(count($location) >= 1){ ?>
                                                        <?php foreach ($location as $key => $value): ?>
                                                            <option value="<?php echo $value['MaDiemDen']; ?>"><?php echo $value['TenDiemDen']; ?></option>
                                                        <?php endforeach ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1 bgr-form-fa"><i class="fa-regular fa-calendar"></i></span>
                                                </div>
                                                <!-- <input type="select" class="form-control bgr-form-fa" placeholder="Where To?" aria-label="Where To?" aria-describedby="basic-addon1"> -->
                                                <select name="thang" class="month-select" data-select2-id="1" tabindex="-1" aria-hidden="true" required>
                                                    <option value="" hidden>Chọn Tháng</option>
                                                    <option value="1">Tháng Một</option>
                                                    <option value="2">Tháng Hai</option>
                                                    <option value="3">Tháng Ba</option>
                                                    <option value="4">Tháng Tư</option>
                                                    <option value="5">Tháng Năm</option>
                                                    <option value="6">Tháng Sáu</option>
                                                    <option value="7">Tháng Bảy</option>
                                                    <option value="8">Tháng Tám</option>
                                                    <option value="9">Tháng Chín</option>
                                                    <option value="10">Tháng Mười</option>
                                                    <option value="11">Tháng Mười Một</option>
                                                    <option value="12">Tháng Mười Hai</option>
                                                    </select>
                                            </div>
                                            
                                            <div class="select-muti">
                                                <div class="wrapper">
                                                    <header>
                                                        <h1> Chọn Khoảng Giá </h1>
                                                    </header>
                                        
                                                    <div class="slider">
                                                        <div class="progress"></div>
                                                    </div>
                                                    <div class="range-input">
                                                        <input type="range" class="range-min" min="0" max="<?php echo $maxPrice; ?>" value="<?php echo (int)$maxPrice / 2; ?>" step="1">
                                                        <input type="range" class="range-max" min="0" max="<?php echo $maxPrice; ?>" value="<?php echo (int)$maxPrice / 2; ?>" step="1">
                                                    </div>
                                                    <div class="price-input">
                                                        <span>Khoảng: </span>
                                                        <div class="field">
                                                            <input type="number" name="min_gia" class="input-min" value="<?php echo $minPrice; ?>">
                                                            <div class="separator">-</div>
                                                            <input type="number" name="max_gia" class="input-max" value="<?php echo $maxPrice; ?>">
                                                        </div>
                                                    </div>
                                                </div>
        
        
                                                <div class="boxes" style="padding: 0; padding-bottom: 50px;">
                                                    <input type="checkbox" id="box-1" name="loai[]" value="1">
                                                    <label for="box-1">Tour Bình Thường</label>
                                                
                                                    <input type="checkbox" id="box-2" name="loai[]" value="2">
                                                    <label for="box-2">Tour Nổi Bật</label>
                                                
                                                    <input type="checkbox" id="box-3" name="loai[]" value="3"> 
                                                    <label for="box-3">Tour Siêu Giảm Giá</label>
                                                    
                                                    <input type="checkbox" id="box-4" name="loai[]" value="4">
                                                    <label for="box-4">Tour Phổ Biến</label>
                                                </div>
                                                
                                            </div>
                                            
                                            <button class="btn-sub sbm-for-faqa" type="submit">Tìm Kiếm</button>
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    $(document).ready(function() {
        $('.toggle').click(function() {
            $('ul.navbar-nav').slideToggle();
        });
    })  
    
</script>


<script>
    const $a = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const tabs = $$(".tab-item");
    const panes = $$(".tab-pane");

    const tabActive = $a(".tab-item.active");
    const line = $a(".tabs .line");

    // SonDN fixed - Active size wrong size on first load.
    // Original post: https://www.facebook.com/groups/649972919142215/?multi_permalinks=1175881616551340
    requestIdleCallback(function () {
    line.style.left = tabActive.offsetLeft + "px";
    line.style.width = tabActive.offsetWidth + "px";
    });

    tabs.forEach((tab, index) => {
    const pane = panes[index];

    tab.onclick = function () {
        $a(".tab-item.active").classList.remove("active");
        $a(".tab-pane.active").classList.remove("active");

        line.style.left = this.offsetLeft + "px";
        line.style.width = this.offsetWidth + "px";

        this.classList.add("active");
        pane.classList.add("active");
    };
    });

        const btnSearch = document.getElementById("search")
        const boxSearch = document.getElementById("box-search")
        
        btnSearch.addEventListener("click", () => {
            btnSearch.classList.toggle('start');
            boxSearch.classList.toggle('start');
    })
          //background sroll chuot homlist
          jQuery(document).ready(function($) { 
            $(window).scroll(function () {
                if ($(this).scrollTop() > 10) {
                    $('.homelist').addClass('active');
                }
                else {
                    $('.homelist').removeClass('active');
                }
            })
            })
    
    //butoon on top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $('button.toptop').addClass('ontop-now');
        }
        else {
            $('button.toptop').removeClass('ontop-now');
        }
    })
</script>


<script src="<?php echo base_url('public/website/RangerSlider/js/MainRanger.js'); ?>"></script>


<?php require(__DIR__.'/layouts/footer.php'); ?>


