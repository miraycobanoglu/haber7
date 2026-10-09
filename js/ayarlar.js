document.addEventListener('DOMContentLoaded', () => {
    const yardimBtn = document.getElementById('yardimBtn');

    if (yardimBtn) {
        yardimBtn.addEventListener('click', (e) => {
            localStorage.clear();
        });
    }
});