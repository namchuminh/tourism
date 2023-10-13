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
    
    
    <link rel="stylesheet" href="<?php echo base_url('public/website/CSS/MainSensail.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/website/navbars/stylemain-nav.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/website/TEST/test.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/website/RangerSlider/css/main.css'); ?>">
    
    <title><?php echo $title; ?></title>
    
</head>
<body>
<!-- inheader -->
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
                                    <path id="middle-line-1" 	d="M30,50 L70,50 Z"></path>
                                    <path id="bottom-line-1" 	d="M30,63 L70,63 Z"></path>
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
                                <a href="<?php echo base_url(); ?>" class="menu__title__mobile">Trang Chủ</a>
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
                                <a class="menu__title__mobile" href="<?php echo base_url('dia-diem/'); ?>">Điểm Du Lịch</a>
                            </li>
                            <li class="sub__menu__mobile">
                                <a class="menu__title__mobile" href="<?php echo base_url('tour-du-lich/'); ?>">Tour Du Lịch</a>
                            </li>
                            <li class="sub__menu__mobile">
                                <a  class="menu__title__mobile" href="<?php echo base_url('tin-tuc/'); ?>">Tin Tức</a>
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