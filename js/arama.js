document.addEventListener('DOMContentLoaded', function () {
    const aramaFormu = document.querySelector('.arama-kutusu');
    const aramaInputu = document.querySelector('.menu-arama-input');

    if (aramaFormu) {
        aramaFormu.addEventListener('submit', function (e) {
            const arananMetin = aramaInputu ? aramaInputu.value.trim() : '';
            if (!arananMetin) {
                e.preventDefault();
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

    const tumSporAramaBtn = document.getElementById('tumSporAramaBtn');
    const tumSporAramaPanel = document.getElementById('tumSporAramaPanel');
    const tumSporMenuBtn = document.getElementById('tumSporMenuBtn');
    const tumSporMegaMenu = document.getElementById('tumSporMegaMenu');

    if (tumSporAramaBtn && tumSporAramaPanel) {
        tumSporAramaBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            if (tumSporMenuBtn && tumSporMegaMenu) {
                tumSporMenuBtn.classList.remove('aktif');
                tumSporMegaMenu.classList.remove('acik');
            }
            tumSporAramaBtn.classList.toggle('aktif');
            tumSporAramaPanel.classList.toggle('acik');
            if (tumSporAramaPanel.classList.contains('acik')) {
                const inp = tumSporAramaPanel.querySelector('input');
                if (inp) inp.focus();
            }
        });
    }

    if (tumSporMenuBtn && tumSporMegaMenu) {
        tumSporMenuBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            if (tumSporAramaBtn && tumSporAramaPanel) {
                tumSporAramaBtn.classList.remove('aktif');
                tumSporAramaPanel.classList.remove('acik');
            }
            tumSporMenuBtn.classList.toggle('aktif');
            tumSporMegaMenu.classList.toggle('acik');
        });
    }

    document.addEventListener('click', function (e) {
        if (tumSporMegaMenu && tumSporMegaMenu.classList.contains('acik')) {
            if (!tumSporMegaMenu.contains(e.target) && (!tumSporMenuBtn || !tumSporMenuBtn.contains(e.target))) {
                tumSporMegaMenu.classList.remove('acik');
                if (tumSporMenuBtn) tumSporMenuBtn.classList.remove('aktif');
            }
        }
        if (tumSporAramaPanel && tumSporAramaPanel.classList.contains('acik')) {
            if (!tumSporAramaPanel.contains(e.target) && (!tumSporAramaBtn || !tumSporAramaBtn.contains(e.target))) {
                tumSporAramaPanel.classList.remove('acik');
                if (tumSporAramaBtn) tumSporAramaBtn.classList.remove('aktif');
            }
        }
    });
});
