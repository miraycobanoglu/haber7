<?php
$ayarBaslik = "Metin Puntosu";
$ikonTuru = "close"; 
include 'ayarlarHeader.php';
?>

<div class="metin-puntosu-kapsayıcı"> 
    <div class="metin-puntosu-metini">
        <p class="metin-puntosu-metini__buyukluk" id="metinParagraf">
            Katıldığımız tüm programlarda aşı meselesinin yeni adaletsizliklere yol açmaması gerektiğinin altını çiziyoruz. Yıl sonuna doğru kullanıma hazır hale getirmeyi planladığımız milli aşı çalışmalarımızı da bu hassasiyetle yürütüyoruz. Türkiye’nin geliştirdiği COVID-19 aşısının inşallah milletimizle birlikte tüm insanlığın da aşısı olacağının müjdesini buradan paylaşmak istiyorum.
            Katıldığımız tüm programlarda aşı meselesinin yeni adaletsizliklere yol açmaması gerektiğinin altını çiziyoruz. Yıl sonuna doğru kullanıma hazır hale getirmeyi planladığımız milli aşı çalışmalarımızı da bu hassasiyetle yürütüyoruz. Türkiye’nin geliştirdiği COVID-19 aşısının inşallah milletimizle birlikte tüm insanlığın da aşısı olacağının müjdesini buradan paylaşmak istiyorum.
        </p>
    </div>

    <div class="puntosu-icerik">
        <div class="puntosu-onizleme">
            <span class="kucuk-a" id="solHarfA">A</span>
            
            <div class="slider-konteyner">
                <input type="range" min="15" max="25" step="2" value="15" class="puntosu-slider" id="puntoSlider">
            </div>
            
            <span class="buyuk-a">A</span>
        </div>
    </div>
</div>

<script>
    const slider = document.getElementById('puntoSlider');
    const solHarf = document.getElementById('solHarfA');
    const metinParagraf = document.getElementById('metinParagraf');
    function puntoyuGuncelle(boyut) {
        solHarf.style.fontSize = boyut + 'px';
        metinParagraf.style.fontSize = boyut + 'px';
        localStorage.setItem('secilenPunto', boyut);
    }
    const kaydedilenPunto = localStorage.getItem('secilenPunto');
    if (kaydedilenPunto) {
        slider.value = kaydedilenPunto;
        puntoyuGuncelle(kaydedilenPunto);
    }

    //Slider kaydırıldıkça çalışacak fonksiyon
    slider.addEventListener('input', function() {
        puntoyuGuncelle(this.value);
    });
</script>

</body>
</html>