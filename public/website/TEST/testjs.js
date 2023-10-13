$('.btn-active').click(function () {
    $('html').animate({
        scrollTop: 0
    }, 500);
})

$('.menu__bar').click(function(){
    $('.menu__mobile').animate({
        height: 'toggle'
    })
})

$('.sub__menu__mobile .menu__title__mobile').click(function(){
    $(this).parent('.sub__menu__mobile').toggleClass('show__dropdown');
    $('.sub__menu__mobile').not($(this).parent('.sub__menu__mobile')).removeClass('show__dropdown');
    $(this).parent('.sub__menu__mobile').toggleClass('rotate__icons');
    $('.sub__menu__mobile').not($(this).parent('.sub__menu__mobile')).removeClass('rotate__icons');
})

$('.main__menu__mobile .sub__menu__mobile').click(function(){
    $(this).siblings().children('.dropdown__menu__mobile').slideUp(300);
    $(this).toggleClass('show__dropdown').children('.dropdown__menu__mobile').slideToggle(300);
})