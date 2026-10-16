document.addEventListener('DOMContentLoaded', function () {
    const aramaFormu = document.querySelector('.arama-kutusu');
    const aramaInputu = document.querySelector('.menu-arama-input');

    if (aramaFormu) {
        aramaFormu.addEventListener('submit', function (e) {
            const arananMetin = aramaInputu ? aramaInputu.value.trim() : '';
            if (!arananMetin) {
                e.preventDefault(); // boş arama yapmasını engelliyo
                if (aramaInputu) aramaInputu.focus();
            }
        });
    }

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
