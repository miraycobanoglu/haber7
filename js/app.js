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
        // İleri butonuna basıldığında
        nextBtn.addEventListener('click', () => {
            const slideWidth = gazeteContainer.clientWidth;
            gazeteContainer.scrollBy({
                left: slideWidth,
                behavior: 'smooth'
            });
        });

        // Geri butonuna basıldığında
        prevBtn.addEventListener('click', () => {
            const slideWidth = gazeteContainer.clientWidth;
            gazeteContainer.scrollBy({
                left: -slideWidth,
                behavior: 'smooth'
            });
        });
    }


