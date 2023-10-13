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



//   Đọc dữ liệu từ một mảng
var data = [{ id: 0, text: 'enhancement' }, { id: 1, text: 'bug' }, { id: 2, text: 'duplicate' }, { id: 3, text: 'invalid' }, { id: 4, text: 'wontfix' }];

var data = [
    {
        id: 0,
        text: 'enhancement'
    },
    {
        id: 1,
        text: 'bug'
    },
    {
        id: 2,
        text: 'duplicate'
    },
    {
        id: 3,
        text: 'invalid'
    },
    {
        id: 4,
        text: 'wontfix'
    }
];

// slider-small
$(document).ready(function(){
    $('.slide__holiday').owlCarousel({
        stagePadding: Number,
        loop:true,
        margin:10,
        nav:false,
        autoplay:6000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            768:{
                items:2
            },
            1024:{
                items:3
            },
            1025:{
                items:5
            }
        }
    })


    $('.slider-small').owlCarousel({
        stagePadding: 0,
        items:1,
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:6000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
    $('.slider-readTheTop').owlCarousel({
        stagePadding: Number,
        items: 3,
        loop:true,
        margin:10,
        nav:false,
        autoplay:6000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            768:{
                items:2
            },
            1024:{
                items:3
            }
        }
    })
    $('.liveshow-packup').owlCarousel({
        stagePadding: 0,
        items:5,
        loop:true,
        margin:0,
        nav:true,
        dots:false,
        autoplay:6000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            375:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
});

// trung js vs FAQ (botton search)
const btnSearch = document.getElementById("search")
const boxSearch = document.getElementById("box-search")

btnSearch.addEventListener("click", () => {
    btnSearch.classList.toggle('start');
    boxSearch.classList.toggle('start');
})




// bat tat chu FAQ
$('.all-under-head-qts .all-under-head-qts-top').click(function(){
    $(this).next().slideToggle(300);
    $(this).parent('.all-under-head-qts').toggleClass('rotate__icons');
    $('.all-under-head-qts').not($(this).parent('.all-under-head-qts')).removeClass('rotate__icons');
})
$('.under-head-qts .all-under-head-qts').click(function(){
    $(this).siblings().children('.all-under-head-qts-bottomm').slideUp(300);
})


// sliderToggle navbar
$(document).ready(function() {
    $('.toggle').click(function() {
        $('ul.navbar-nav').slideToggle();
    });
    
})  

// $(document).ready(function() {
// $(".navbar-nav .nav-link").click(function(){
//     $('.dropdown-menu').slideToggle();
//   });
// })



// goc

// $('.nav-item .nav-link').click(function(){
//     $(this).next().slideToggle(300);
//     $(this).parent('.nav-item').toggleClass('dropdown');
// })
// $('.navbar-nav .nav-item.dropdown').click(function(){
//     $(this).siblings().children('.dropdown-menu').slideUp(300);
// })

// nhap

// $('.nav-item .nav-link').click(function(){
//     $(this).next().slideToggle(300);
//     $(this).parent('.nav-item').removeClass('dropdown');
//     $(this).parent('.nav-item').toggleClass('dropdown');
// })
// $('.navbar-nav .nav-item.dropdown').click(function(){
//     $(this).siblings().children('.dropdown-menu').slideUp(300);
// })



// moi sua lai
// $('#menu-right-icon').click(function(){
//     $("nav.main-menu").toggleClass("open");
    
//     $('.main-menu.open ul li a').click(function() {
//         $("nav.main-menu").removeClass("open");
//     });
// })
// $('.nav-item .nav-link').click(function(){
//     $(this).next().slideToggle(300);
//     $(this).parent('.nav-item').toggleClass('new');
//     // $('.nav-item .nav-link').not($(this).parent('.nav-item .nav-link')).removeClass('.dropdown');

// })
// $('.navbar-nav .nav-item.dropdown').click(function(){
//     $(this).siblings().children('.dropdown-menu').slideUp(300);
// })

// click vào buttom on top
$(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
        $('button.toptop').addClass('ontop-now');
    }
    else {
        $('button.toptop').removeClass('ontop-now');
    }
})
