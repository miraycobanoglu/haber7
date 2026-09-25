<?php
$ayarBaslik = "Görünüm Ayarları";
$ikonTuru = "back"; 
include 'ayarlarHeader.php';
?>

        <div class="gorunum-icerik">
            <div class="gorunum-icerik__grup-baslik">Görünüş</div>
            
            <div class="tema-secim">

                <div class="tema-secim__kart tema-secim__kart--aktif" data-tema="acik" id="kartAcik">
                    <div class="tema-secim__gorsel acik-ornek">
                        <img src="images/lightMode.png" alt="Açık Mod Örnek">
                    </div>
                    <span class="tema-secim__isim">Açık</span>
                    <label class="tema-secim__radio-label">
                        <input type="radio" name="tema" checked class="tema-secim__input">
                        <span class="tema-secim__custom-radio"></span>
                    </label>
                </div>

                <div class="tema-secim__kart" data-tema="koyu" id="kartKoyu">
                    <div class="tema-secim__gorsel koyu-ornek">
                        <img src="images/darkMode.png" alt="Koyu Mod Örnek">
                    </div>
                    <span class="tema-secim__isim">Koyu</span>
                    <label class="tema-secim__radio-label">
                        <input type="radio" name="tema" class="tema-secim__input">
                        <span class="tema-secim__custom-radio"></span>
                    </label>
                </div>

            </div>

            <div class="gorunum-liste">
                <a href="metin-puntosu.php" class="ayar-item">
                    <div class="ayar-item__sol">
                        <span class="ayar-item__ikon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7V4h16v3M9 20h6M12 4v16"/></svg>
                        </span>
                        <span class="ayar-item__metin">Metin puntosu</span>
                    </div>
                    <span class="ayar-item__ok">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </span>
                </a>

                <div class="ayar-item " id="videoAyariBtn" style="cursor:pointer;">
                    <div class="ayar-item__sol">
                        <span class="ayar-item__ikon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                        </span>
                        <span class="ayar-item__metin">Videolar Otomatik Oynatılsın</span>
                    </div>
                    <div class="ayar-item__sag-detay">
                        <span class="ayar-item__deger" id="videoDegerText">Asla</span>
                    </div>
                    </div>
            </div>

        </div>

    </div>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const kartlar = document.querySelectorAll('.tema-secim__kart');
        const kaydedilenTema = localStorage.getItem('secilenTema') || 'acik';
        kartlar.forEach(kart => {
            const temaTuru = kart.getAttribute('data-tema');
            const radioInput = kart.querySelector('.tema-secim__input');

            if (temaTuru === kaydedilenTema) {
                kart.classList.add('tema-secim__kart--aktif');
                radioInput.checked = true;
            } else {
                kart.classList.remove('tema-secim__kart--aktif');
                radioInput.checked = false;
            }

            kart.addEventListener('click', function () {
                kartlar.forEach(k => {
                    k.classList.remove('tema-secim__kart--aktif');
                    k.querySelector('.tema-secim__input').checked = false;
                });
                this.classList.add('tema-secim__kart--aktif');
                radioInput.checked = true;
                localStorage.setItem('secilenTema', temaTuru);
            });
        });

        const videoAyariBtn = document.getElementById('videoAyariBtn');
        const videoDegerText = document.getElementById('videoDegerText');
        const kaydedilenVideoTercihi = localStorage.getItem('videoOynatilsin') || 'Asla';
        videoDegerText.textContent = kaydedilenVideoTercihi;

        videoAyariBtn.addEventListener('click', function () {
            if (videoDegerText.textContent === 'Asla') {
                videoDegerText.textContent = 'Evet';
                localStorage.setItem('videoOynatilsin', 'Evet');
            } else {
                videoDegerText.textContent = 'Asla';
                localStorage.setItem('videoOynatilsin', 'Asla');
            }
        });
    });

</script>

</body>
</html>