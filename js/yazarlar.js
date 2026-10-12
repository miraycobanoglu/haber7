document.addEventListener('DOMContentLoaded', () => {
    const kartlar = document.querySelectorAll('.yazar-karti');
    const modal = document.getElementById('yazarModal');
    const kapatBtn = document.getElementById('modalKapatBtn');
    const overlay = document.getElementById('modalKapatOverlay');
    const modalAvatar = document.getElementById('modalYazarAvatar');
    const modalYazarAdi = document.getElementById('modalYazarAdi');
    const modalYaziBaslik = document.getElementById('modalYaziBaslik');
    const modalYaziMetni = document.getElementById('modalYaziMetni');

    kartlar.forEach(kart => {
        kart.addEventListener('click', () => {
            const imgElement = kart.querySelector('.yazar-karti__profil');
            const isimElement = kart.querySelector('.yazar-karti__isim');
            const yaziElement = kart.querySelector('.yazar-karti__sonYazi');
            const imgSrc = imgElement ? imgElement.src : '';
            const isimText = isimElement ? isimElement.textContent : '';
            const yaziText = yaziElement ? yaziElement.textContent : '';

            modalAvatar.src = imgSrc;
            modalYazarAdi.textContent = isimText;
            modalYaziBaslik.textContent = yaziText;
            
            modalYaziMetni.innerHTML =
             `  <p>Bir çocuk, dükkânın camını kırar. Etrafta toplananlar, öfkeli dükkân sahibini teselli eder. Camcı para kazanacak, aldığı parayı harcayacak, işler canlanacaktır.</p>
                <p>İlk bakışta zarar gibi görünen olayda bir ekonomik fayda bulmuşlardır.</p>
                <p>Frédéric Bastiat, 1850 tarihli “Görünen ve Görünmeyen” denemesinde bu akıl yürütmenin eksik hesabını gösterir. Camcıya giden para görünür. Dükkân sahibinin o parayla artık alamayacağı ayakkabı veya kitap görünmez.</p>
                <p>Bir çocuk, dükkânın camını kırar. Etrafta toplananlar, öfkeli dükkân sahibini teselli eder. Camcı para kazanacak, aldığı parayı harcayacak, işler canlanacaktır.</p>
                <p>İlk bakışta zarar gibi görünen olayda bir ekonomik fayda bulmuşlardır.</p>
                <p>Bir çocuk, dükkânın camını kırar. Etrafta toplananlar, öfkeli dükkân sahibini teselli eder. Camcı para kazanacak, aldığı parayı harcayacak, işler canlanacaktır.</p>
                <p>İlk bakışta zarar gibi görünen olayda bir ekonomik fayda bulmuşlardır.</p>
                <p>Bir çocuk, dükkânın camını kırar. Etrafta toplananlar, öfkeli dükkân sahibini teselli eder. Camcı para kazanacak, aldığı parayı harcayacak, işler canlanacaktır.</p>
                <p>İlk bakışta zarar gibi görünen olayda bir ekonomik fayda bulmuşlardır.</p>`;

            modal.classList.add('aktif');
        });
    });

    function modalKapat() {
        modal.classList.remove('aktif');
    }

    if (kapatBtn) kapatBtn.addEventListener('click', modalKapat);
    if (overlay) overlay.addEventListener('click', modalKapat);

    const tumYazilariAcBtn = document.querySelector('.yazar-modal__tumYazilari');
    const tumYazilarModal = document.getElementById('tumYazilarModal');
    const tumYazilarKapatBtn = document.getElementById('tumYazilarKapatBtn');
    const tumYazilarOverlay = document.getElementById('tumYazilarOverlay');

    if (tumYazilariAcBtn) {
        tumYazilariAcBtn.addEventListener('click', (e) => {
            e.preventDefault();
            tumYazilarModal.classList.add('aktif');
        });
    }

    function listeKapat() {
        tumYazilarModal.classList.remove('aktif');
    }

    if (tumYazilarKapatBtn) tumYazilarKapatBtn.addEventListener('click', listeKapat);
    if (tumYazilarOverlay) tumYazilarOverlay.addEventListener('click', listeKapat);
});
