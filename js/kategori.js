$(document).ready(function () {

    // Manşet slider
    $('.manset-slider').slick({
        arrows: true,
        prevArrow: $('.manset-ok-sol'),
        nextArrow: $('.manset-ok-sag'),
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    // Sağ üstteki sayaç (1/10) slayt değişince güncellenir
    $('.manset-slider').on('beforeChange', function (event, slick, mevcutSlayt, sonrakiSlayt) {
        $('#aktifSlayt').text(sonrakiSlayt + 1);
    });

});

