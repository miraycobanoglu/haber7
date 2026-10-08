
function initSlider() {
    const sliderContainer = document.querySelector('.slider-container');
    const images = document.querySelectorAll('.slider-img');
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