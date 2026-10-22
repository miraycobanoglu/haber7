$(document).ready(function () {

    $('.tumSpor-slider').slick({
        arrows: true,
        prevArrow: $('.tumSpor-ok-sol'),
        nextArrow: $('.tumSpor-ok-sag'),
        dots: true,
        dotsClass: 'tumSpor-noktalar',                 // slick-theme'in nokta stilleri karışmasın diye kendi class'ımız
        appendDots: $('.tumSpor-noktalar-alan'),       // noktalar bu div'in içine konur
        customPaging: function (slider, i) {
            return '<button type="button">' + (i + 1) + '</button>'; // nokta yerine sayı
        },
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000
    });

    // Sayının üstüne gelince (hover) de o slayta geçsin
    $('.tumSpor-noktalar-alan').on('mouseenter', '.tumSpor-noktalar li', function () {
        const sira = $(this).index(); // kaçıncı sayı olduğu (0, 1, 2...)
        $('.tumSpor-slider').slick('slickGoTo', sira);
    });

});

