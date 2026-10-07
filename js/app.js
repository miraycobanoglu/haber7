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

    } catch (error) {
        console.error('Namaz vakitleri alınamadı:', error);
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
});
