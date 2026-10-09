function initSlider() {
    const sliderContainer = document.querySelector('.manset-kart');
    const images = document.querySelectorAll('.manset-gorsel');
    const aktifIndexElement = document.getElementById('aktifIndex');
    const toplamFotoElement = document.getElementById('toplamFoto');

    if (!sliderContainer || images.length === 0) return;

    if (toplamFotoElement) {
        toplamFotoElement.textContent = images.length;
    }

    sliderContainer.addEventListener('scroll', () => {
        const scrollLeft = sliderContainer.scrollLeft;
        const itemWidth = sliderContainer.clientWidth;

        let currentIndex = Math.round(scrollLeft / itemWidth) + 1;

        if (currentIndex < 1) currentIndex = 1;
        if (currentIndex > images.length) currentIndex = images.length;

        if (aktifIndexElement) {
            aktifIndexElement.textContent = currentIndex;
        }
    });
 }
 document.addEventListener('DOMContentLoaded', () => {
     initSlider();
 });

 $(document).ready(function(){
    $('.haber-kartlari-grid').slick({
        dots: true,              // Alttaki 3 noktayı otomatik oluşturur
        infinite: false,         // Sonsuz döngü olmasın (ilk ve son durak olsun)
        speed: 300,              // Kayma hızı
        slidesToShow: 2,         // Ekranda aynı anda 2 kart görünecek
        slidesToScroll: 2,       // Kaydırdığında 2'şer 2'şer ilerleyecek (Böylece 3 nokta oluşur)
        arrows: false,           // Ok tuşlarını gizle, sadece kaydırarak/noktalarla ilerlensin
        autoplay: false,    
       // variableWidth: true,   // Değişken genişlikte kaydırma

        swipe: true,
        touchMove: true,
        draggable: true,
        touchThreshold: 10,
        accessibility: true

    });
});

$(document).ready(function(){
    $('.banner-slide').slick({
        dots: false,             // Noktalar olmayacak
        arrows: true,            // Oklar aktif olacak
        infinite: false,          // Sürmanşet döngüsel dönsün
        slidesToShow: 1,         // Ekranda tek bir sürmanşet görseli görünecek
        slidesToScroll: 1,
        autoplay: false,          // Sürmanşet olduğu için otomatik dönebilir
        swipe: true,
        draggable: true
    });
});