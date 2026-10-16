document.addEventListener('DOMContentLoaded', function () {
    const aramaFormu = document.querySelector('.arama-kutusu');
    const aramaInputu = document.querySelector('.menu-arama-input');

    // Arama yapıldığında boş değilse arama.php sayfasına yönlendirir
    if (aramaFormu) {
        aramaFormu.addEventListener('submit', function (e) {
            const arananMetin = aramaInputu ? aramaInputu.value.trim() : '';
            if (!arananMetin) {
                e.preventDefault(); // Boş arama yapılmasını engelle
                if (aramaInputu) aramaInputu.focus();
            }
        });
    }

    // Sayfa içi arama formu varsa onun da kontrolünü sağla
    const sayfaAramaFormu = document.querySelector('.arama-form');
    const sayfaAramaInputu = document.querySelector('.arama-form__input');
    if (sayfaAramaFormu) {
        sayfaAramaFormu.addEventListener('submit', function (e) {
            const aranan = sayfaAramaInputu ? sayfaAramaInputu.value.trim() : '';
            if (!aranan) {
                e.preventDefault();
                if (sayfaAramaInputu) sayfaAramaInputu.focus();
            }
        });
    }
});
