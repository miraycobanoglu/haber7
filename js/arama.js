document.addEventListener('DOMContentLoaded', function () {
    const aramaInputu = document.querySelector('.menu-arama-input');
    const menuLinkleri = document.querySelectorAll('.yan-menu-linkler .yan-menu-link');

    if (aramaInputu) {
        aramaInputu.addEventListener('input', function (e) {
            const arananMetin = e.target.value.trim().toLocaleLowerCase('tr');

            menuLinkleri.forEach(link => {
                const linkMetni = link.textContent.toLocaleLowerCase('tr');

                if (linkMetni.includes(arananMetin)) {
                    link.style.display = 'flex';
                } else {
                    link.style.display = 'none';
                }
            });
        });
    }
});