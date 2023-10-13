<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Playfair+Display&family=Poppins:wght@300;400;600&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">    

    
    <!-- <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" /> -->
    <!-- owlcarousel -->
    <link rel="stylesheet" href="<?php echo base_url('public/website/owlcarousel/assets/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/website/owlcarousel/assets/owl.theme.default.min.css'); ?>">
    <!-- link star -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- select -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->



    <link rel="stylesheet" href="<?php echo base_url('public/website/CSS/mainsensail.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/website/navbars/stylemain-nav.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/website/TEST/test.css'); ?>">


    
    <title><?php echo $title; ?></title>
    
</head>
<body>
    <div id="inheader">
        <div class="inheader-left">
            <a class="contact-link" href="">
                <span class="icon-left"><i class="fa-regular fa-envelope"></i></span>
                <span class="text-inheader">setsail@qode.com</span>
            </a>
            <a class="contact-link" href="">
                <span class="icon-left"><i class="fa-solid fa-phone"></i></span>
                <span class="text-inheader">1 562 867 5309</span>
            </a>
            <a class="contact-link" href="">
                <span class="icon-left"><i class="fa-solid fa-location-dot"></i></span>
                <span class="text-inheader">Broadway & Morris St, New York</span>
            </a>
        </div>
        <div class="inheader-right">
            <a class="contact-link" href="">
                <span class="icon-right"><i class="fa-brands fa-twitter"></i></span>
            </a>
            <a class="contact-link" href="">
                <span class="icon-right"><i class="fa-brands fa-pinterest-p"></i></span>
            </a>
            <a class="contact-link" href="">
                <span class="icon-right"><i class="fa-brands fa-facebook"></i></span>
            </a>
            <a class="contact-link" href="">
                <span class="icon-right"><i class="fa-brands fa-instagram"></i></span>
            </a>
        </div>
    </div>
<!-- header -->
    <div id="header">
        <div class="homelist">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <div class="logo-and-nav">
                        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img class="logo" src="<?php echo base_url('public/website/Image/LOGO.png'); ?>" alt="logo"></a>
                        <div class="toggle">
                            <div id="container-navbars">
                                <div id="b1" class="box">
                                    <svg id="i1" class="icon" viewBox="0 0 100 100">
                                    <path id="top-line-1"     d="M30,37 L70,37 Z"></path>
                                    <path id="middle-line-1"    d="M30,50 L70,50 Z"></path>
                                    <path id="bottom-line-1"    d="M30,63 L70,63 Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="menu__bar">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active " aria-current="page" href="<?php echo base_url(); ?>" >
                            Trang Chủ
                            </a>
                        </li>
            
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Page
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../HTML/AboutUs.html">About Us</a></li>
                            <li><a class="dropdown-item" href="../HTML/OurTeams.html">Our Team</a></li>
                            <li><a class="dropdown-item" href="../HTML/ContactUs.html">Contact Us</a></li>
                            <li><a class="dropdown-item" href="../HTML/Faq.html">FAQ Page</a></li>
                            </ul>
                        </li>
            
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo base_url('dia-diem/'); ?>" >Điểm Du Lịch</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo base_url('tour-du-lich/'); ?>">
                            Tour Du Lịch
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo base_url('tin-tuc/'); ?>">
                            Tin Tức
                            </a>
                        </li>
                        </ul>
                    </div>
                    <!-- menu bomile -->
                    <!-- mobile -->
                    <div class="menu__mobile">
                        <ul class="main__menu__mobile">
                            <li class="sub__menu__mobile">
                                <a href="../Index.html" class="menu__title__mobile">Home</a>
                            </li>
                            <li class="sub__menu__mobile">
                                <a class="menu__title__mobile">Pages <i class="fa-solid fa-angle-down"></i></a>
                                <ul class="dropdown__menu__mobile">
                                    <li><a href="./AboutUs.html">About Us</a></li>
                                    <li><a href="./OurTeams.html">Our team</a></li>
                                    <!-- <li><a href="teamDetail.html">Team Detail</a></li> -->
                                    <li><a href="./ContactUs.html">Contact Us</a></li>
                                    <li><a href="./Faq.html">FAQ</a></li>
                                </ul>
                            </li>
                            <li class="sub__menu__mobile">
                                <a  class="menu__title__mobile">Destinations <i class="fa-solid fa-angle-down"></i></a>
                                <ul class="dropdown__menu__mobile">
                                    <li><a href="./ListDestinations.html">Destinations List</a></li>
                                    <li><a href="./ItemsDestintion.html">Destinations Items</a></li>
                                </ul>
                            </li>
                            <li class="sub__menu__mobile">
                                <a class="menu__title__mobile">Tour <i class="fa-solid fa-angle-down"></i></a>
                                <ul class="dropdown__menu__mobile">
                                    <li><a href="./ListTour.html">Tour List</a></li>
                                    <li><a href="./ItemsTour.html">Tour Items</a></li>
                                </ul>
                            </li>
                            <li class="sub__menu__mobile">
                                <a  class="menu__title__mobile">Blog <i class="fa-solid fa-angle-down"></i></a>
                                <ul class="dropdown__menu__mobile">
                                    <li><a href="./ListBlog.html">Blog List</a></li>
                                    <li><a href="./ItemsBlog.html">Blog Items</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    
                    <!-- end  -->
                    <div class="btn-box-search">
                        <div id="search">
                            <i class="fa-solid fa-x btn-close-search"></i>
                            <i class="fa-sharp fa-solid fa-magnifying-glass fa-rotate-90 btn-open"></i>
                        </div>
                        <form action="<?php echo base_url('tim-kiem/'); ?>" method="GET" id="box-search" class="test-search">
                            <div class="all-bnt-search">
                                <input type="text" class="input-now" placeholder="Nhập tên bài viết..." name="s" autocomplete="off" required>
                                <button type="submit" class="find-n">Tìm Kiếm</button>
                            </div>
                        </form>
                    </div>

                    <div class="login">
                        <?php if(isset($_SESSION['khachhang']) && !empty($_SESSION['khachhang'])){ ?>
                            <a href="<?php echo base_url('khach-hang/'); ?>" id="login">Chào, <?php echo $_SESSION['khachhang']; ?></a>
                            /
                            <a href="<?php echo base_url('dang-xuat/'); ?>" id="login">Đăng Xuất</a>
                        <?php }else{ ?>
                            <a href="<?php echo base_url('dang-nhap/'); ?>" id="login">Đăng Nhập</a>
                            /
                            <a href="<?php echo base_url('dang-ky/'); ?>" id="login">Đăng Ký</a>
                        <?php } ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
<!-- content -->
    <div id="Container">
        <div class="slidershow-under-header">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img src="<?php echo base_url('public/website/Image/h1-slider-img-1-.jpg'); ?>" alt="Chania" width="460" height="345">
                        <div class="carousel-caption">
                            <span class="slider-text">Let's Go Now</span>
                            <h2 class="slider-text-slo">Explore and travel.</h2>
                            <p class="slider-text-gan">Lorem ipsum dolor sit amet, consecte ipiscing elit. Aenean ct dolor.<br> Aenean massa. Cum sociis Aenean commodo ligula eget dolor. Aenean.</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?php echo base_url('public/website/Image/h1-slider-img-2-.jpg'); ?>" alt="Chania" width="460" height="345">
                        <div class="carousel-caption">
                            <span class="slider-text">Come with us</span>
                            <h2 class="slider-text-slo">Relax and Enjoy</h2>
                            <p class="slider-text-gan">Lorem ipsum dolor sit amet, consecte ipiscing elit. Aenean ct dolor.<br> Aenean massa. Cum sociis Aenean commodo ligula eget dolor. Aenean.</p>
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Sau</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Trước</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="box-search">
           
            <form class="search-form" action="<?php echo base_url('tim-kiem-tour/'); ?>" role="search">
                <input type="hidden" name="t" value="home">
                <div class="row home-select">
                    <div class="col under-header">
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
                    </div>
                    <div class="col under-header">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1 bgr-form-fa"><i class="fa-regular fa-calendar"></i></span>
                            </div>
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
                            </select>
                        </div>
                    </div>
                    <div class="col under-header">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1 bgr-form-fa"><i class="fa-solid fa-thumbtack"></i></span>
                            </div>
                            <!-- <input type="select" class="form-control bgr-form-fa" placeholder="Where To?" aria-label="Where To?" aria-describedby="basic-addon1"> -->
                            <select name="loai" class="month-select" data-select2-id="1" tabindex="-1" aria-hidden="true" required>
                                <option value="" hidden>Loại Tour</option>
                                <option value="1">Tour Bình Thường</option>
                                <option value="2">Tour Nổi Bật</option>
                                <option value="3">Tour Siêu Giảm Giá</option>
                                <option value="4">Tour Phổ Biến</option>
                            </select>
                        </div>
                    </div>
                    <div class="col under-header">
                        <button type="submit" class="find-n">Tìm Kiếm</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="ChooseThePerfectHoliday">
            <div class="ChooseThePerfectHoliday-text">
                <span class="choose">Choose Your</span>
                <h2 class="theperfect">Perfect Holiday</h2>
                <p class="holiday">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<br> Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the.</p>
            </div>
            <div class="ChooseThePerfectHoliday-img">
                <div class="all-img-choose">

                    <?php if(count($location) >= 1){ ?>

                        <?php foreach ($location as $key => $value): ?>
                            <a href="<?php echo base_url('dia-diem/'.$value['DuongDan'].'/'); ?>">
                                <div class="col-12 col-sm-6 col-md-4 p-2">
                                    <div class="d-flex flex-column text-center border height100">
                                    <div class="hovereffect">
                                        <img class="img-responsive diff" src="<?php echo $value['AnhChinh']; ?>" alt="">
                                        <div class="overlay round">
                                            <h2 class="new-special-text"><?php echo $value['TenDiemDen']; ?></h2>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach ?>
                        
                    <?php } ?>

                </div>
            </div>
            <div class="getting-paris">
                <img class="paris" src="<?php echo base_url('public/website/Image/greetings from paris.png'); ?>" alt="">
            </div>
        </div>
        <div class="BreathtakingCities">
            <div class="all-BreathtakingCities">
                <div class="text-and-video">
                    <div class="text-BreathtakingCities" >
                        <span class="go-and-discover"> Go & Discover</span>
                        <h1 class="breakthtalking">Breathtaking Cities</h1>
                        <p class="discover">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the</p>
                    </div>
                    <a href="<?php echo base_url('public/website/Videos/TRAVEL LOVE.mp4'); ?>" class="bao-video">
                        <video class="video-BreathtakingCities">
                            <div class="icon-video">
                                <span class="click-play-vs">
                                    <img class="play-video" src="<?php echo base_url('public/website/Image/playvideo.png'); ?>" alt="" >
                                </span>
                            </div>
                        </video>
                    </a>
                </div>
            </div>
        </div>
        <div class="infomation-sensail">
            <div class="all-infomation-sensail">
                <div class="restaurand sen">
                    <div class="img-restaurand">
                        <img src="<?php echo base_url('public/website/Image/camera.png'); ?>" alt="" class="icon-infomation">
                    </div>
                    <div class="text-restaurand">
                        <h1 class="info-sensail">restaurand</h1>
                        <p class="mation">Aenean commodo ligula eget dolor. Lorem ipsum</p>
                    </div>
                </div>
                <div class="sightseeing sen">
                    <div class="img-sightseeing">
                        <img src="<?php echo base_url('public/website/Image/location.png'); ?>" alt="" class="icon-infomation">
                    </div>
                    <div class="text-sightseeing">
                        <h1 class="info-sensail">Sightseeing</h1>
                        <p class="mation">Aenean commodo ligula eget dolor. Lorem ipsum</p>
                    </div>
                </div>
                <div class="shops-boutiques sen">
                    <div class="imgshops-boutiques">
                        <img src="<?php echo base_url('public/website/Image/shop.png'); ?>" alt="" class="icon-infomation">
                    </div>
                    <div class="text-shops-boutiques">
                        <h1 class="info-sensail">Shops&boutiques</h1>
                        <p class="mation">Aenean commodo ligula eget dolor. Lorem ipsum</p>
                    </div>
                </div>
                <div class="where-to-say sen">
                    <div class="img-where-to-say">
                        <img src="<?php echo base_url('public/website/Image/planetostay.png'); ?>" alt="" class="icon-infomation">
                    </div>
                    <div class="text-where-to-say">
                        <h1 class="info-sensail">where to say</h1>
                        <p class="mation">Aenean commodo ligula eget dolor. Lorem ipsum</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="PlanThePerfectHoliday">
            <div class="all-PlanThePerfectHoliday">
                <div class="text-PlanThePerfectHoliday">
                    <span class="text-plan">Plan The</span>
                    <h1 class="text-the-perfect">Perfect Holiday</h1>
                    <p class="text-holiday">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the</p>
                </div>
                <div class="slider-PlanThePerfectHoliday">
                    <div class="slide__holiday owl-carousel owl-theme">

                        <?php if(count($tour) >= 1){ ?>

                            <?php foreach ($tour as $key => $value): ?>
                                <div class="item slider-plane">
                                    <div class="ing-ne hovereffect">
                                        <a href="<?php echo base_url('tour-du-lich/'.$value['DuongDan'].'/') ?>" class="link-theplane">
                                            <img src="<?php echo $value['AnhChinh']; ?>" alt="" class="img-slider img-responsive">
                                        </a>
                                    </div>
                                    <div class="note-plane">
                                        <div class="all-note-plane">
                                            <span class="note-in-img-st" >
                                                <p class="img-note"><i class="fa-regular fa-calendar"></i></p>
                                                <p class="text-note"><?php echo date("d-m-Y", strtotime($value['GioKhoiHanh'])); ?></p>
                                            </span>
                                            <span class="note-in-img-2th">
                                                <p class="img-note"><i class="fa-solid fa-user"></i></p>
                                                <p class="text-note"><?php echo $value['DoTuoi']; ?>+</p>
                                            </span>
                                            <span class="note-in-img-3th">
                                                <p class="img-note"><i class="fa-solid fa-location-dot"></i></p>
                                                <p class="text-note"><?php echo $value['TenDiemDen']; ?></p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="all-textunder-imgtheplane">
                                        <a href="<?php echo base_url('tour-du-lich/'.$value['DuongDan'].'/') ?>" class="link-here">
                                            <h4 class="text-under-img-theplane"><?php echo $value['TenChuyenDi']; ?></h4>
                                        </a>
                                        <p class="text-under-text">
                                            <?php echo substr($value['MoTaNgan'], 0, 55); ?>
                                        </p>
                                        <span class="monny"><?php echo number_format($value['GiaChuyenDi']); ?>đ / 1 người</span>
                                    </div>
                                </div>
                            <?php endforeach ?>

                        <?php } ?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-con">
            <div class="all-slider-con">
                <div class="owl-carousel slider-small owl-theme">
                    <div class="item">
                        <div class="slider-nhat">
                            <div class="img-slider-small">
                                <img src="<?php echo base_url('public/website/Image/slider-smile.png'); ?>" alt="" class="smile">
                            </div> 
                            <span class="smile-text">
                                Dolor ipsum dolor sit amet, consectetuer adipiscing elit. Lorem commodo ligula eg dolor. Lorem Aenean msa. Cum sociis natoque
                            </span>
                            <p class="smile-under-text">
                                John Rios
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-hai">
                            <div class="img-slider-small">
                                <img src="<?php echo base_url('public/website/Image/slider-smile2.png'); ?>" alt="" class="smile">
                            </div> 
                            <span class="smile-text">
                                Dolor ipsum dolor sit amet, consectetuer adipiscing elit. Lorem commodo ligula eg dolor. Lorem Aenean msa. Cum sociis natoque
                            </span>
                            <p class="smile-under-text">
                                Marianna Loreto
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="TheUnforgettableMediterranean">
            <div class="all-TheUnforgettableMediterranean">
                <div class="text-TheUnforgettableMediterranean">
                    <span class="text-plan the-unforget">The Unforgettable</span>
                    <h1 class="text-the-perfect table-me">Mediterranean</h1>
                    <p class="text-holiday diterranean">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis</p>
                </div>
                <div class="container theunforget">
                    <a href="../HTML/ItemsTour.html">
                        <div class="col-12 col-sm-6 col-md-4 p-2 TheUnforgettableMediterranean ">
                            <div class="d-flex flex-column text-center border height100">
                                <div class="hovereffect">
                                    <img class="img-responsive" src="<?php echo base_url('public/website/Image/img-unforget1.jpg'); ?>" alt="">
                                    <div class="text-sell">
                                        <p class="sell">50% Off</p>
                                    </div>
                                    <div class="location-theunfor">
                                        <h2 class="location-theunfor-text">Valencia</h2>
                                        <h2 class="location-theunfor-text">$1990</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="../HTML/ItemsTour.html">
                        <div class="col-12 col-sm-6 col-md-4 p-2 TheUnforgettableMediterranean">
                            <div class="d-flex flex-column text-center border height100">
                                <div class="hovereffect">
                                    <img class="img-responsive" src="<?php echo base_url('public/website/Image/img-unforget2.jpg'); ?>" alt="">
                                    <div class="text-sell">
                                        <p class="sell">Special Offer</p>
                                    </div>
                                    <div class="location-theunfor">
                                        <h2 class="location-theunfor-text">Varadero</h2>
                                        <h2 class="location-theunfor-text">$2300</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="../HTML/ItemsTour.html">
                        <div class="col-12 col-sm-6 col-md-4 p-2 TheUnforgettableMediterranean">
                            <div class="d-flex flex-column text-center border height100">
                            <div class="hovereffect">
                                <img class="img-responsive" src="<?php echo base_url('public/website/Image/img-unforget3.jpg'); ?>" alt="">
                                <div class="location-theunfor">
                                    <h2 class="location-theunfor-text">Italy Tour</h2>
                                    <h2 class="location-theunfor-text">$2560</h2>
                                </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="ReadTheTopTravelReviews">
            <div class="all-ReadTheTopTravelReviews" style="background-image: url(<?php echo base_url('public/website/Image/bgr-readthetop.jpg'); ?>);">
                <div class="text-TheUnforgettableMediterranean Reviews">
                    <span class="text-plan Read">Read The Top</span>
                    <h1 class="text-the-perfect TheTop">Travel Reviews</h1>
                    <p class="text-holiday Travel">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the</p>
                </div>
                <div class="container slider-readthetop">
                    <div class="owl-carousel slider-readTheTop owl-theme">
                        <div class="item read-new">
                            <div class="slider-readthetop">
                                <div class="img-slider-small new-theread">
                                    <img src="<?php echo base_url('public/website/Image/slider-read1.png'); ?>" alt="" class="img-slider-readthhetop">
                                </div>
                                <div class="text-intheslider">
                                    <h1 class="readinslider">Holland Canals</h1>
                                    <span class="thetopinslider">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                    <p class="travelintheslider">Sa etor aviues lmpedlt tes, vof ef nihc agem qupaios. Ai apvy </p>
                                    <b class="reviewsintheslider">Ema Cooper</b>
                                </div>
                            </div>
                        </div>
                        <div class="item read-new">
                            <div class="slider-readthetop">
                                <div class="img-slider-small new-theread">
                                    <img src="<?php echo base_url('public/website/Image/slider-read2.png'); ?>" alt="" class="img-slider-readthhetop">
                                </div>
                                <div class="text-intheslider">
                                    <h1 class="readinslider">Taipei</h1>
                                    <span class="thetopinslider">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                    <p class="travelintheslider">Pe utor aviuas lwpadit tas, vut et nihc egam yubulas. Si euvy </p>
                                    <b class="reviewsintheslider">Susan Day</b>
                                </div>
                            </div>
                        </div>
                        <div class="item read-new">
                            <div class="slider-readthetop">
                                <div class="img-slider-small new-theread">
                                    <img src="<?php echo base_url('public/website/Image/slider-read3.png'); ?>" alt="" class="img-slider-readthhetop">
                                </div>
                                <div class="text-intheslider">
                                    <h1 class="readinslider">Kaohsiung</h1>
                                    <span class="thetopinslider">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                    <p class="travelintheslider">Fa etor eviuas lwqedit tas, vut et nihc egam yubulas. Ei euvy </p>
                                    <b class="reviewsintheslider">Roger Brooks</b>
                                </div>
                            </div>
                        </div>
                        <div class="item read-new">
                            <div class="slider-readthetop">
                                <div class="img-slider-small new-theread">
                                    <img src="<?php echo base_url('public/website/Image/slider-read4.png'); ?>" alt="" class="img-slider-readthhetop">
                                </div>
                                <div class="text-intheslider">
                                    <h1 class="readinslider">Barcelona</h1>
                                    <span class="thetopinslider">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                    <p class="travelintheslider">Fa etor eviuas lwqedit tas, vut et nihc egam yubulas. Ei euvy</p>
                                    <b class="reviewsintheslider">James Fisher</b>
                                </div>
                            </div>
                        </div>
                        <div class="item read-new">
                            <div class="slider-readthetop">
                                <div class="img-slider-small new-theread">
                                    <img src="<?php echo base_url('public/website/Image/slider-read5.png'); ?>" alt="" class="img-slider-readthhetop">
                                </div>
                                <div class="text-intheslider">
                                    <h1 class="readinslider">Madrid</h1>
                                    <span class="thetopinslider">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                    <p class="travelintheslider">Pe ator eviuas lwqedit tas, vut et nihc egam yubulas. Ei euvy</p>
                                    <b class="reviewsintheslider">Sam Smith</b>
                                </div>
                            </div>
                        </div>
                        <div class="item read-new">
                            <div class="slider-readthetop">
                                <div class="img-slider-small new-theread">
                                    <img src="<?php echo base_url('public/website/Image/slider-read6 and 8.png'); ?>" alt="" class="img-slider-readthhetop">
                                </div>
                                <div class="text-intheslider">
                                    <h1 class="readinslider">Tarragona</h1>
                                    <span class="thetopinslider">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                    <p class="travelintheslider">Fa etor eviuas lwqedit tas, vut et nihc egam yubulas. Ei euvy</p>
                                    <b class="reviewsintheslider">Carl Moore</b>
                                </div>
                            </div>
                        </div>
                        <div class="item read-new">
                            <div class="slider-readthetop">
                                <div class="img-slider-small new-theread">
                                    <img src="<?php echo base_url('public/website/Image/slider-read7.png'); ?>" alt="" class="img-slider-readthhetop">
                                </div>
                                <div class="text-intheslider">
                                    <h1 class="readinslider">Beautiful Holland</h1>
                                    <span class="thetopinslider">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                    <p class="travelintheslider">Fo etor uvluoc iwpodit res, vet of nihc egam yubulas. Al uavq</p>
                                    <b class="reviewsintheslider">Carol Silva</b>
                                </div>
                            </div>
                        </div>
                        <div class="item read-new">
                            <div class="slider-readthetop">
                                <div class="img-slider-small new-theread">
                                    <img src="<?php echo base_url('public/website/Image/slider-read6 and 8.png'); ?>" alt="" class="img-slider-readthhetop">
                                </div>
                                <div class="text-intheslider">
                                    <h1 class="readinslider">Tarragona</h1>
                                    <span class="thetopinslider">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                    <p class="travelintheslider">Fa etor eviuas lwqedit tas, vut et nihc egam yubulas. Ei euvy</p>
                                    <b class="reviewsintheslider">Carl Moore</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="FromOurBlog">
            <div class="all-FromOurBlog">
                <div class="FromOurBlog-left">
                    <div class="text-FromOurBlog-left">
                        <h2 class="frombg">From Our Blog</h2>
                        <span class="ourbg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the</span>
                    </div>

                    <?php if(count($news) >= 1){ ?>
                        <?php foreach ($news as $key => $value): ?>
                            <div class="img-and-text-FromOurBlog-left">
                                <a href="<?php echo base_url('tin-tuc'.$value['DuongDan'].'/') ?>" class="link-to-blog">
                                    <div class="img-FromOurBlog-left hovereffect">
                                        <img class="img-lefft img-responsive" src="<?php echo $value['AnhChinh']; ?>" alt="">
                                    </div>
                                </a>
                                <div class="text-under-img-FromOurBlog-left">
                                    <a href="" class="link-h3"><?php echo $value['TieuDe']; ?> </a>
                                    <p class="normal"><?php echo substr($value['NoiDung'], 0, 79); ?>...</p>
                                    <div class="all-comment">
                                        <a href="" class="timeline">Ngày đăng: <?php echo date("d-m-Y", strtotime($value['NgayDang'])); ?></a>
                                        <a href="" class="comment">
                                            <span class="icon-fromlg">
                                                <i class="fa-regular fa-comment"></i>
                                            </span>
                                            <span class="text-nextto-icon-frombg">Chuyên mục: <?php echo $value['TenChuyenMuc']; ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php } ?>
                </div>
                <div class="FromOurBlog-right">
                    <div class="img-FromOurBlog-right">
                        <a href="" class="link-img-FromOurBlog-right">
                            <img src="<?php echo base_url('public/website/Image/img-banner-from our blog.jpg'); ?>" alt="" class="woman">
                        </a>
                    </div>
                    <!-- <div class="saleupto"> -->
                        <div class="qodef-banner-text-holder">
                            <div class="qodef-banner-text-outer">
                                <div class="qodef-banner-text-inner">
                                    <h5 class="qodef-banner-subtitle">travel.com</h5>
                                    <h2 class="qodef-banner-title">Sale Up To 70%</h2>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>

    <div id="footer">
        <div class="row onlyfooter">
            <div class="col-3">
                <div class="content-footer-one">
                    <div class="all-content-footer-one">
                        <div class="img-row-one">
                            <a href="" class="link-to-home">
                                <img src="<?php echo base_url('public/website/Image/logo-footer.png'); ?>" alt="" class="logo-footer">
                            </a>
                        </div>
                        <span class="text-footer">Lorem ipsum dolor sit ametco nsec te tuer adipiscing elitae</span>
                        <div class="contact-footer">
                            <a class="contact-footer-link" href="">
                                <span class="icon-footer-left"><i class="fa-regular fa-envelope"></i></span>
                                <span class="text-footer-inheader">setsail@qode.com</span>
                            </a>
                            <a class="contact-footer-link" href="">
                                <span class="icon-footer-left"><i class="fa-solid fa-phone"></i></span>
                                <span class="text-footer-inheader">1 562 867 5309</span>
                            </a>
                            <a class="contact-footer-link" href="">
                                <span class="icon-footer-left"><i class="fa-solid fa-location-dot"></i></span>
                                <span class="text-footer-inheader">Broadway & Morris St, New York</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="content-footer-two">
                    <h4 class="Our-rent">Our Recent Posts</h4>
                    <div class="all-visit">
                        <div class="link-to-pay">
                            <a href="" class="visit-world-one">Visit Thailand, Bali And China</a>
                            <a href="" class="visit-world-two">September 7, 2016</a>
                        </div>
                        <div class="link-to-pay">
                            <a href="" class="visit-world-one">The Sound Of Our Jungle</a>
                            <a href="" class="visit-world-two">September 7, 2016</a>
                        </div>
                        <div class="link-to-pay">
                            <a href="" class="visit-world-one">New Year, New Resolutions!</a>
                            <a href="" class="visit-world-two">September 7, 2016</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="content-footer-three">
                    <h4 class="Our-rent">Subscribe to our Newsletter</h4>
                    <p class="text--footer">Etiam rhoncus. Maecenas temp us, tellus eget condimentum rho</p>
                    <form class="form-footer" role="search">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-envelope"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                        </div>
                        <button class="btn-sub">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="col-3">
                <div class="content-footer-four">
                    <h4 class="Our-rent">Our Instagram</h4>
                    <p class="text--footer">Aliquam lorem ante, dapibus inviver raqui feugiat a, tellus. Phasellus null</p>
                    <div class="all-img-footer-four">
                        <a href="">
                            <div class="col-12 col-sm-6 col-md-4 p-2 four-footerr">
                                <div class="d-flex flex-column text-center border height100">
                                <div class="hovereffect card-photo footer-four-high">
                                    <img class="img-responsive footer-four" src="<?php echo base_url('public/website/Image/footer1.jpg'); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="col-12 col-sm-6 col-md-4 p-2 four-footerr">
                                <div class="d-flex flex-column text-center border height100">
                                <div class="hovereffect footer-four-high">
                                    <img class="img-responsive footer-four" src="<?php echo base_url('public/website/Image/footer2.jpg'); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </a><a href="">
                            <div class="col-12 col-sm-6 col-md-4 p-2 four-footerr">
                                <div class="d-flex flex-column text-center border height100">
                                <div class="hovereffect footer-four-high">
                                    <img class="img-responsive footer-four" src="<?php echo base_url('public/website/Image/footer3.jpg'); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </a><a href="">
                            <div class="col-12 col-sm-6 col-md-4 p-2 four-footerr">
                                <div class="d-flex flex-column text-center border height100">
                                <div class="hovereffect footer-four-high">
                                    <img class="img-responsive footer-four" src="<?php echo base_url('public/website/Image/footer4.jpg'); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </a><a href="">
                            <div class="col-12 col-sm-6 col-md-4 p-2 four-footerr">
                                <div class="d-flex flex-column text-center border height100">
                                <div class="hovereffect footer-four-high">
                                    <img class="img-responsive footer-four" src="<?php echo base_url('public/website/Image/footer5.jpg'); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </a><a href="">
                            <div class="col-12 col-sm-6 col-md-4 p-2 four-footerr">
                                <div class="d-flex flex-column text-center border height100">
                                <div class="hovereffect footer-four-high">
                                    <img class="img-responsive footer-four" src="<?php echo base_url('public/website/Image/footer6.jpg'); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </a><a href="">
                            <div class="col-12 col-sm-6 col-md-4 p-2 four-footerr">
                                <div class="d-flex flex-column text-center border height100">
                                <div class="hovereffect footer-four-high">
                                    <img class="img-responsive footer-four" src="<?php echo base_url('public/website/Image/footer7.jpg'); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </a><a href="">
                            <div class="col-12 col-sm-6 col-md-4 p-2 four-footerr">
                                <div class="d-flex flex-column text-center border height100">
                                <div class="hovereffect footer-four-high">
                                    <img class="img-responsive footer-four" src="<?php echo base_url('public/website/Image/footer8.jpg'); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </a><a href="">
                            <div class="col-12 col-sm-6 col-md-4 p-2 four-footerr">
                                <div class="d-flex flex-column text-center border height100">
                                <div class="hovereffect footer-four-high">
                                    <img class="img-responsive footer-four" src="<?php echo base_url('public/website/Image/footer9.jpg'); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </a><a href="">
                            <div class="col-12 col-sm-6 col-md-4 p-2 four-footerr">
                                <div class="d-flex flex-column text-center border height100">
                                <div class="hovereffect footer-four-high">
                                    <img class="img-responsive footer-four" src="<?php echo base_url('public/website/Image/footer10.jpg'); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- button on top -->
    <div id="on-top-now">
        <a href="#" class="len-top">
            <button class="toptop">Top</button>
        </a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <!-- js owl -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="<?php echo base_url('public/website/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <!-- select -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/409445/animateAnything.js"></script>
    <script src="<?php echo base_url('public/website/navbars/mainjs-nav.js'); ?>"></script>
    <!-- menu_mobile -->
    <script src="<?php echo base_url('public/website/TEST/testjs.js'); ?>"></script>
    
    <script src="<?php echo base_url('public/website/JS/JsSensil.js'); ?>"></script>

    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
          width: 100%;
          margin: auto;
        }

    </style>
</body>
</html>