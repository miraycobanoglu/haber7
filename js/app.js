const screens = document.querySelectorAll('.screen');
const overlay = document.getElementById('onboardingOverlay');

let currentIndex = parseInt(localStorage.getItem('onboardingIndex')) || 0;
const isCompleted = localStorage.getItem('onboardingCompleted');

if (isCompleted === 'true') {
    overlay.style.display = 'none';
} else {
    showScreen(currentIndex); 
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

// İleri Butonları
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

// Başlat ve Atla butonları
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

// anasayfa

// Sol Menü Açma ve Kapatma İşlemleri
const yanMenuOverlay = document.getElementById('yanMenuOverlay');
const menuAcBtn = document.getElementById('menuAcBtn');
const menuKapatBtn = document.getElementById('menuKapatBtn');

if (menuAcBtn) {
    menuAcBtn.addEventListener('click', () => {
        yanMenuOverlay.style.display = 'flex';
    });
}
if (menuKapatBtn) {
    menuKapatBtn.addEventListener('click', () => {
        yanMenuOverlay.style.display = 'none';
    });
}


const menuLinks = document.querySelectorAll('.yan-menu-link');
menuLinks.forEach(link => {
    link.addEventListener('click', function() {
        // Önce hepsinden 'active' sınıfını sök
        menuLinks.forEach(item => item.classList.remove('active'));
        // Tıklananın kendisine 'active' ekle
        this.classList.add('active');
    });
});