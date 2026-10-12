<?php
$ayarBaslik = isset($ayarBaslik) ? $ayarBaslik : "Yazarlar";
$ikonTuru = isset($ikonTuru) ? $ikonTuru : "back";
$ustBarRengi = "rgba(134, 98, 99, 1)";
$titleBaslik = isset($titleBaslik) ? $titleBaslik : "Yazarlar";
include 'ayarlarHeader.php';
?>
<main class="yazarlar-icerik">
    <div class="yazarlar-baslik-haber7">
        <p>Haber 7 Yazarları</p>
    </div>
    
    <div class="yazarlar-listesi">
        
        <div class="yazar-karti">
            <div class="yazar-karti__sol">
                <img src="images/yazarlar/yuksel-oksak.png" alt="Doç. Dr. Yüksel Okşak" class="yazar-karti__profil">
            </div>
            <div class="yazar-karti__sag">
                <p class="yazar-karti__isim">Doç. Dr. Yüksel Okşak</p>
                <p class="yazar-karti__sonYazi">Faizin Üç Yolu, Tercihin Bir Bedeli</p>
            </div>
        </div>

        <div class="yazar-karti">
            <div class="yazar-karti__sol">
                <img src="images/yazarlar/hasan-ozturk.png" alt="Hasan Öztürk" class="yazar-karti__profil">
            </div>
            <div class="yazar-karti__sag">
                <p class="yazar-karti__isim">Hasan Öztürk</p>
                <p class="yazar-karti__sonYazi">Mehmetçik Yemen'e değil ama Suudi Arabistan'a neden gitmesin</p>
            </div>
        </div>

        <div class="yazar-karti">
            <div class="yazar-karti__sol">
                <img src="images/yazarlar/mehmet-acet.png" alt="Mehmet Acet" class="yazar-karti__profil">
            </div>
            <div class="yazar-karti__sag">
                <p class="yazar-karti__isim">Mehmet Acet</p>
                <p class="yazar-karti__sonYazi">Sırada Mansur Yavaş mı var?</p>
            </div>
        </div>

        <div class="yazar-karti">
            <div class="yazar-karti__sol">
                <img src="images/yazarlar/mehmet-ali-bal.png" alt="Mehmet Ali Bal" class="yazar-karti__profil">
            </div>
            <div class="yazar-karti__sag">
                <p class="yazar-karti__isim">Mehmet Ali Bal</p>
                <p class="yazar-karti__sonYazi">Adı Yemendir, Kendisi Kimdir?</p>
            </div>
        </div>

        <div class="yazar-karti">
            <div class="yazar-karti__sol">
                <img src="images/yazarlar/zakir-avsar.png" alt="Prof. Dr. Zakir Avşar" class="yazar-karti__profil">
            </div>
            <div class="yazar-karti__sag">
                <p class="yazar-karti__isim">Prof. Dr. Zakir Avşar</p>
                <p class="yazar-karti__sonYazi">Güneş ve Rüzgâr Enerjisinde Türkiye'nin Yeni Eşiği</p>
            </div>
        </div>

        <div class="yazar-karti">
            <div class="yazar-karti__sol">
                <img src="images/yazarlar/zekeriya-say.png" alt="Zekeriya Say" class="yazar-karti__profil">
            </div>
            <div class="yazar-karti__sag">
                <p class="yazar-karti__isim">Zekeriya Say</p>
                <p class="yazar-karti__sonYazi">Birileri “hukuk yolsuzluğu” mu dedi?</p>
            </div>
        </div>

         <div class="yazarlar-baslik-konuk">
        <p>Konuk Yazarlar</p>
        </div>
        <div class="yazar-karti">
            <div class="yazar-karti__sol">
                <img src="images/yazarlar/cihad-islam-yilmaz.png" alt="cihad islam yılmaz " class="yazar-karti__profil">
            </div>
            <div class="yazar-karti__sag">
                <hp class="yazar-karti__isim">Cihad İslam Yılmaz</hp>
                <p class="yazar-karti__sonYazi">Haritalar yalan söylemez, niyetleri ele verir</p>
            </div>
        </div>

        <div class="yazarlar-baslik-alinti">
        <p>Alıntı Yazarlar</p>
        </div>
         <div class="yazar-karti">
            <div class="yazar-karti__sol">
                <img src="images/yazarlar/ihsan-karahasanoglu.png" alt="İhsan Karahasanoglu" class="yazar-karti__profil">
            </div>
            <div class="yazar-karti__sag">
                <p class="yazar-karti__isim">İhsan Karahasanoglu</p>
                <p class="yazar-karti__sonYazi">Haritalar yalan söylemez, niyetleri ele verir</p>
            </div>
        </div>
    </div>
</main>

<!-- pop up -->
<div class="yazar-modal" id="yazarModal">
    <div class="yazar-modal__overlay" id="modalKapatOverlay"></div>
    <div class="yazar-modal__icerikKutu">
        
        <div class="yazar-modal__ustBar">
            <button class="yazar-modal__kapatBtn" id="modalKapatBtn">✕</button>
        </div>

        <div class="yazar-modal__profilKarti">
            <img src="" alt="" class="yazar-modal__avatar" id="modalYazarAvatar">
            <div class="yazar-modal__profilBilgi">
                <h3 class="yazar-modal__yazarAdi" id="modalYazarAdi"></h3>
                <span class="yazar-modal__unvan">HABER7 YAZARI</span>
                <a href="#" class="yazar-modal__tumYazilari">TÜM YAZILARI →</a>
            </div>
        </div>

        <div class="yazar-modal__yaziAlani">
            <h2 class="yazar-modal__yaziBaslik" id="modalYaziBaslik"></h2>
            <div class="yazar-modal__yaziMetni" id="modalYaziMetni"></div>
        </div>

    </div>
</div>


<!-- Tüm yazılar-->
<div class="tum-yazilar-modal" id="tumYazilarModal">
    <div class="tum-yazilar-modal__overlay" id="tumYazilarOverlay"></div>
    <div class="tum-yazilar-modal__container">

        <div class="tum-yazilar-modal__body">
            <div class="yazi-item">
                <span class="yazi-item__tarih">12 Ekim 2026, 09:14</span>
                <h4 class="yazi-item__baslik">Birileri “hukuk yolsuzluğu” mu dedi?</h4>
            </div>
            <div class="yazi-item">
                <span class="yazi-item__tarih">09 Ekim 2026, 09:32</span>
                <h4 class="yazi-item__baslik">Sizce ‘Tayyip Erdoğan’la kazandık!’ derler mi?</h4>
            </div>
            <div class="yazi-item">
                <span class="yazi-item__tarih">06 Ekim 2026, 08:52</span>
                <h4 class="yazi-item__baslik">İP’lidir ne yapsa yeridir!</h4>
            </div>
            <div class="yazi-item">
                <span class="yazi-item__tarih">03 Ekim 2026, 09:01</span>
                <h4 class="yazi-item__baslik">‘Başkan iyi’ de çevresi mi kötü acaba?</h4>
            </div>
            <div class="yazi-item">
                <span class="yazi-item__tarih">29 Eylül 2026, 09:41</span>
                <h4 class="yazi-item__baslik">“Namusum kadar kefilim” demiyor, gereğini yapıyor!</h4>
            </div>
            <div class="yazi-item">
                <span class="yazi-item__tarih">06 Ekim 2026, 08:52</span>
                <h4 class="yazi-item__baslik">İP’lidir ne yapsa yeridir!</h4>
            </div>
            <div class="yazi-item">
                <span class="yazi-item__tarih">03 Ekim 2026, 09:01</span>
                <h4 class="yazi-item__baslik">‘Başkan iyi’ de çevresi mi kötü acaba?</h4>
            </div>
            <div class="yazi-item">
                <span class="yazi-item__tarih">29 Eylül 2026, 09:41</span>
                <h4 class="yazi-item__baslik">“Namusum kadar kefilim” demiyor, gereğini yapıyor!</h4>
            </div>
            <div class="yazi-item">
                <span class="yazi-item__tarih">12 Ekim 2026, 09:14</span>
                <h4 class="yazi-item__baslik">Birileri “hukuk yolsuzluğu” mu dedi?</h4>
            </div>
            <div class="yazi-item">
                <span class="yazi-item__tarih">09 Ekim 2026, 09:32</span>
                <h4 class="yazi-item__baslik">Sizce ‘Tayyip Erdoğan’la kazandık!’ derler mi?</h4>
            </div>
            <div class="yazi-item">
                <span class="yazi-item__tarih">06 Ekim 2026, 08:52</span>
                <h4 class="yazi-item__baslik">İP’lidir ne yapsa yeridir!</h4>
            </div>
            <div class="yazi-item">
                <span class="yazi-item__tarih">03 Ekim 2026, 09:01</span>
                <h4 class="yazi-item__baslik">‘Başkan iyi’ de çevresi mi kötü acaba?</h4>
            </div>
            <div class="yazi-item">
                <span class="yazi-item__tarih">29 Eylül 2026, 09:41</span>
                <h4 class="yazi-item__baslik">“Namusum kadar kefilim” demiyor, gereğini yapıyor!</h4>
            </div>
            <div class="yazi-item">
                <span class="yazi-item__tarih">06 Ekim 2026, 08:52</span>
                <h4 class="yazi-item__baslik">İP’lidir ne yapsa yeridir!</h4>
            </div>
            <div class="yazi-item">
                <span class="yazi-item__tarih">03 Ekim 2026, 09:01</span>
                <h4 class="yazi-item__baslik">‘Başkan iyi’ de çevresi mi kötü acaba?</h4>
            </div>
            <div class="yazi-item">
                <span class="yazi-item__tarih">29 Eylül 2026, 09:41</span>
                <h4 class="yazi-item__baslik">“Namusum kadar kefilim” demiyor, gereğini yapıyor!</h4>
            </div>
        </div>

    </div>
</div>
<script src="js/yazarlar.js"></script>
</body>
</html>


