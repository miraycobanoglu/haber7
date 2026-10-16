console.log("app.js başarıyla yüklendi ve güncellendi!");
const screens = document.querySelectorAll('.screen');
const overlay = document.getElementById('onboardingOverlay');

let currentIndex = parseInt(localStorage.getItem('onboardingIndex')) || 0;
const isCompleted = localStorage.getItem('onboardingCompleted');

if (overlay) {
    if (isCompleted === 'true') {
        overlay.style.display = 'none';
    } else {
        showScreen(currentIndex); 
    }
}

function showScreen(index) {
    if (index < 0 || index >= screens.length) return;
    currentIndex = index;

    localStorage.setItem('onboardingIndex', currentIndex);

    screens.forEach((screen, idx) => {
        if (idx === currentIndex) {
            screen.classList.add('screen--active');
        } else {
            screen.classList.remove('screen--active');
        }
    });

    screens.forEach((screen) => {
        const dots = screen.querySelectorAll('.dots__item');
        dots.forEach((dot, dIdx) => {
            if (dIdx === currentIndex) {
                dot.classList.add('dots__item--active');
            } else {
                dot.classList.remove('dots__item--active');
            }
        });
    });
}

// ileri butonu
const nextButtons = document.querySelectorAll('.btn--primary:not(#finishBtn)');
nextButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        if (currentIndex < screens.length - 1) {
            showScreen(currentIndex + 1);
        }
    });
});

function completeOnboarding() {
    overlay.style.display = 'none';
    localStorage.setItem('onboardingCompleted', 'true');
}

// başlat ve atla butonu
const finishBtn = document.getElementById('finishBtn');
if (finishBtn) {
    finishBtn.addEventListener('click', completeOnboarding);
}

document.querySelectorAll('.skip-action').forEach(btn => {
    btn.addEventListener('click', completeOnboarding);
});

screens.forEach((screen) => {
    const dots = screen.querySelectorAll('.dots__item');
    dots.forEach((dot, dIdx) => {
        dot.addEventListener('click', () => {
            showScreen(dIdx);
        });
    });
});


// sol menü
    const menuAcBtn = document.getElementById('menuAcBtn');
    const menuKapatBtn = document.getElementById('menuKapatBtn');
    const yanMenuOverlay = document.getElementById('yanMenuOverlay');


    if (menuAcBtn && yanMenuOverlay) {
        menuAcBtn.addEventListener('click', () => {
            yanMenuOverlay.style.display = 'flex';
        });
    }

    if (menuKapatBtn && yanMenuOverlay) {
        menuKapatBtn.addEventListener('click', () => {
            yanMenuOverlay.style.display = 'none';
        });
    }

document.addEventListener('DOMContentLoaded', () => {
    const currentUrl = window.location.href;

    const tabItems = document.querySelectorAll('.alt-tab-bar .tab-item');

    tabItems.forEach(item => {
        const itemHref = item.getAttribute('href');

        if (currentUrl.includes(itemHref)) {
            tabItems.forEach(el => el.classList.remove('active'));
            item.classList.add('active');
        }
    });
});


    const gazeteContainer = document.getElementById('gazeteContainer');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    if (gazeteContainer && prevBtn && nextBtn) {
        nextBtn.addEventListener('click', () => {
            const slideWidth = gazeteContainer.clientWidth;
            gazeteContainer.scrollBy({
                left: slideWidth,
                behavior: 'smooth'
            });
        });

        prevBtn.addEventListener('click', () => {
            const slideWidth = gazeteContainer.clientWidth;
            gazeteContainer.scrollBy({
                left: -slideWidth,
                behavior: 'smooth'
            });
        });
    }

// dolar
async function fetchDolarKuru() {
    try {
        let response = await fetch('https://open.er-api.com/v6/latest/USD');
        let data = await response.json();
        
        let tryRate = data.rates.TRY;
        let formattedRate = tryRate.toFixed(2).replace('.', ',');
        
        document.getElementById('dolarFiyat').textContent = formattedRate;
    } catch (error) {
        console.error('Döviz kuru alınamadı:', error);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    fetchDolarKuru();
});

async function fetchHavaDurumu(sehir) {
    try {
        let response = await fetch(`https://wttr.in/${sehir}?format=j1`);
        let data = await response.json();

        let currentCondition = data.current_condition[0];
        let tempC = currentCondition.temp_C; 
        let weatherDesc = currentCondition.weatherDesc[0].value.toLowerCase(); 

        document.getElementById('havaDerece').textContent = tempC;

        updateWeatherIcon(weatherDesc);

    } catch (error) {
        console.error('Hava durumu bilgisi alınamadı:', error);
    }
}

function updateWeatherIcon(condition) {
    let ikonElementi = document.getElementById('havaDurumuIkon');

    if (condition.includes('rain') || condition.includes('yağmur') || condition.includes('shower')) {
        ikonElementi.src = 'images/yagmurlu.png';
    } else if (condition.includes('sun') || condition.includes('clear')) {
        ikonElementi.src = 'images/gunesli.png';
    } else {
        ikonElementi.src = 'images/bulutlu.png';
    }
}
// namaz vakti
async function fetchNamazVakitleri(sehir) {
    try {
        let response = await fetch(`https://api.aladhan.com/v1/timingsByCity?city=${sehir}&country=Turkey&method=13`);
        let data = await response.json();
        let timings = data.data.timings;

        let vakitlerListesi = [
            { ad: 'İmsak', saat: timings.Fajr },
            { ad: 'Güneş', saat: timings.Sunrise },
            { ad: 'Öğle', saat: timings.Dhuhr },
            { ad: 'İkindi', saat: timings.Asr },
            { ad: 'Akşam', saat: timings.Maghrib },
            { ad: 'Yatsı', saat: timings.Isha }
        ];

        let simdi = new Date();
        let simdikiDakika = simdi.getHours() * 60 + simdi.getMinutes();

        let secilenVakit = vakitlerListesi[0]; 

        for (let i = 0; i < vakitlerListesi.length; i++) {
            let [saat, dakika] = vakitlerListesi[i].saat.split(':').map(Number);
            let vakitDakika = saat * 60 + dakika;

            if (simdikiDakika <= vakitDakika) {
                secilenVakit = vakitlerListesi[i];
                break;
            }
        }

        document.getElementById('namazVakitAdi').textContent = secilenVakit.ad;
        document.getElementById('namazVakitSaat').textContent = secilenVakit.saat;

        // Modal içindeki vakitleri ve detayları güncelle
        guncelleEzanModal(vakitlerListesi, timings, data.data.date);

    } catch (error) {
        console.error('Namaz vakitleri alınamadı:', error);
    }
}

// namaz vakti modal
let ezanSayacInterval = null;

function guncelleEzanModal(vakitler, timings, dateInfo) {
    const elImsak   = document.getElementById('ezanVakitImsak');
    const elGunes   = document.getElementById('ezanVakitGunes');
    const elOgle    = document.getElementById('ezanVakitOgle');
    const elIkindi  = document.getElementById('ezanVakitIkindi');
    const elAksam   = document.getElementById('ezanVakitAksam');
    const elYatsi   = document.getElementById('ezanVakitYatsi');

    if (elImsak && timings) elImsak.textContent = timings.Fajr;
    if (elGunes && timings) elGunes.textContent = timings.Sunrise;
    if (elOgle && timings) elOgle.textContent = timings.Dhuhr;
    if (elIkindi && timings) elIkindi.textContent = timings.Asr;
    if (elAksam && timings) elAksam.textContent = timings.Maghrib;
    if (elYatsi && timings) elYatsi.textContent = timings.Isha;

    const simdi = new Date();
    const simdikiDakika = simdi.getHours() * 60 + simdi.getMinutes();

    let aktifVakit = vakitler[vakitler.length - 1]; 
    let sonrakiVakit = vakitler[0]; 

    for (let i = 0; i < vakitler.length; i++) {
        let [s, d] = vakitler[i].saat.split(':').map(Number);
        let vakitDakika = s * 60 + d;

        if (simdikiDakika < vakitDakika) {
            sonrakiVakit = vakitler[i];
            aktifVakit = i === 0 ? vakitler[vakitler.length - 1] : vakitler[i - 1];
            break;
        }
    }

    const elAktifAd = document.getElementById('ezanModalAktifVakitAdi');
    const elAktifSaat = document.getElementById('ezanModalAktifSaat');
    if (elAktifAd) elAktifAd.textContent = aktifVakit.ad;
    if (elAktifSaat) elAktifSaat.textContent = aktifVakit.saat;

    document.querySelectorAll('.ezan-vakit-satir').forEach(satir => {
        if (satir.getAttribute('data-vakit') === aktifVakit.ad) {
            satir.classList.add('ezan-vakit-satir--aktif');
            const svg = satir.querySelector('svg');
            if (svg) svg.setAttribute('stroke', '#da2027');
        } else {
            satir.classList.remove('ezan-vakit-satir--aktif');
            const svg = satir.querySelector('svg');
            if (svg) svg.removeAttribute('stroke');
        }
    });

    const aylar = ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'];
    const gunler = ['Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi'];
    const elMiladi = document.getElementById('ezanModalMiladiTarih');

    if (elMiladi) {
        elMiladi.textContent = `${simdi.getDate()} ${aylar[simdi.getMonth()]} ${gunler[simdi.getDay()]}`;
    }


    const elKalanBaslik = document.getElementById('ezanKalanBaslik');
    const elKalanSayac = document.getElementById('ezanKalanSayac');
    if (elKalanBaslik) {
        elKalanBaslik.textContent = `${sonrakiVakit.ad} Vaktine Kalan Süre`;
    }

    if (ezanSayacInterval) clearInterval(ezanSayacInterval);

    function sayaciGuncelle() {
        if (!elKalanSayac) return;
        const suan = new Date();
        let [hedefSaat, hedefDakika] = sonrakiVakit.saat.split(':').map(Number);
        
        let hedefTarih = new Date(suan);
        hedefTarih.setHours(hedefSaat, hedefDakika, 0, 0);

        // Eğer hedef saat geçmişse yarına aittir (örneğin gece vakti İmsak)
        if (hedefTarih <= suan) {
            hedefTarih.setDate(hedefTarih.getDate() + 1);
        }

        let farkSn = Math.floor((hedefTarih - suan) / 1000);
        if (farkSn < 0) farkSn = 0;

        let saat = Math.floor(farkSn / 3600);
        let dakika = Math.floor((farkSn % 3600) / 60);
        let saniye = farkSn % 60;

        elKalanSayac.textContent = 
            String(saat).padStart(2, '0') + ':' +
            String(dakika).padStart(2, '0') + ':' +
            String(saniye).padStart(2, '0');
    }

    sayaciGuncelle();
    ezanSayacInterval = setInterval(sayaciGuncelle, 1000);
}

function initEzanModal() {
    const namazVaktiAlani = document.querySelector('.namaz-vakti');
    const modal = document.getElementById('ezanVaktiModal');
    const overlay = document.getElementById('ezanVaktiOverlay');
    const kapatBtn = document.getElementById('ezanModalKapatBtn');
    const modalSehirSecim = document.getElementById('ezanModalSehirSecim');
    const anasayfaSehirSecim = document.getElementById('sehirSecim');

    if (!modal) return;

    if (namazVaktiAlani) {
        namazVaktiAlani.style.cursor = 'pointer';
        namazVaktiAlani.addEventListener('click', () => {
            modal.classList.add('aktif');
            if (modalSehirSecim && anasayfaSehirSecim) {
                modalSehirSecim.value = anasayfaSehirSecim.value;
            }
        });
    }

    const modalKapat = () => modal.classList.remove('aktif');

    if (overlay) overlay.addEventListener('click', modalKapat);
    if (kapatBtn) kapatBtn.addEventListener('click', modalKapat);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('aktif')) {
            modalKapat();
        }
    });

    if (modalSehirSecim && anasayfaSehirSecim) {
        modalSehirSecim.addEventListener('change', (e) => {
            const yeniSehir = e.target.value;
            anasayfaSehirSecim.value = yeniSehir;
            fetchHavaDurumu(yeniSehir);
            fetchNamazVakitleri(yeniSehir);
        });
    }
}

document.getElementById('sehirSecim').addEventListener('change', (e) => {
    let secilenSehir = e.target.value;
    fetchHavaDurumu(secilenSehir);
    fetchNamazVakitleri(secilenSehir);
});

document.addEventListener('DOMContentLoaded', () => {
    let baslangicSehri = document.getElementById('sehirSecim').value;
    fetchHavaDurumu(baslangicSehri);
    fetchNamazVakitleri(baslangicSehri);
    initEzanModal();
});




