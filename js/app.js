const screens = document.querySelectorAll('.screen');
const overlay = document.getElementById('onboardingOverlay');

// 1. Sayfa yenilendiğinde hafızadan hangi slaytta kaldığını al (Yoksa 0. slayttan başla)
let currentIndex = parseInt(localStorage.getItem('onboardingIndex')) || 0;
const isCompleted = localStorage.getItem('onboardingCompleted');

// 2. Kullanıcı daha önce "Atla" veya "Başlat" dediyse pop-up'ı hiç gösterme
if (isCompleted === 'true') {
    overlay.style.display = 'none';
} else {
    showScreen(currentIndex); // Kaldığı slayttan ekrana getir
}

function showScreen(index) {
    if (index < 0 || index >= screens.length) return;
    currentIndex = index;

    // Hangi slayttaysak tarayıcı hafızasına yaz (Yenilenince unutmasın)
    localStorage.setItem('onboardingIndex', currentIndex);

    // Slaytları göster/gizle
    screens.forEach((screen, idx) => {
        if (idx === currentIndex) {
            screen.classList.add('screen--active');
        } else {
            screen.classList.remove('screen--active');
        }
    });

    // Noktaları (dots) güncelle
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

// İleri Butonları
const nextButtons = document.querySelectorAll('.btn--primary:not(#finishBtn)');
nextButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        if (currentIndex < screens.length - 1) {
            showScreen(currentIndex + 1);
        }
    });
});

// Pop-up'ı kapatıp "tamamlandı" olarak hafızaya kaydeden fonksiyon
function completeOnboarding() {
    overlay.style.display = 'none';
    localStorage.setItem('onboardingCompleted', 'true');
}

// Başlat ve Atla butonları
const finishBtn = document.getElementById('finishBtn');
if (finishBtn) {
    finishBtn.addEventListener('click', completeOnboarding);
}

document.querySelectorAll('.skip-action').forEach(btn => {
    btn.addEventListener('click', completeOnboarding);
});

// Noktalara tıklayarak geçiş yapma
screens.forEach((screen) => {
    const dots = screen.querySelectorAll('.dots__item');
    dots.forEach((dot, dIdx) => {
        dot.addEventListener('click', () => {
            showScreen(dIdx);
        });
    });
});
const reopenBtn = document.getElementById('reopenOnboarding');
if (reopenBtn) {
    reopenBtn.addEventListener('click', () => {
        // 1. Hafızadaki tamamlandı ve index bilgilerini temizle
        localStorage.removeItem('onboardingCompleted');
        localStorage.removeItem('onboardingIndex');
        
        currentIndex = 0;
        
        // 2. Overlay'i görünür yap (CSS'teki flex özelliğini koruyarak)
        overlay.style.display = 'flex';
        
        // 3. İlk ekranı ve noktaları tekrar aktif et
        showScreen(0);
    });
}