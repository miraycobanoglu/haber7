<?php
$ayarBaslik = isset($ayarBaslik) ? $ayarBaslik : "Spor";
$ikonTuru = isset($ikonTuru) ? $ikonTuru : "back";
$ustBarRengi = "rgba(33, 143, 91, 1)";
$titleBaslik = isset($titleBaslik) ? $titleBaslik : "Spor";
$ayarBaslikRengi = "#ffffff";
$ayarlarSolBtnRengi = "#ffffff";
$ustBarYuksekligi = "55px";


include 'ayarlarHeader.php';

$mansetler = [
    ['id' => 1,  'tip' => 'foto',  'resim' => 'images/manşet-sürm.png',      'baslik' => "Hoffenheim maçı öncesi Beşiktaş'ta Dusan Vlahovic şoku!"],
    ['id' => 2,  'tip' => 'foto',  'resim' => 'images/manşet-sürm2.png',     'baslik' => "Fotoğraflarla Aston Villa - Fenerbahçe maçının öncesi"],
    ['id' => 3,  'tip' => 'video', 'resim' => 'images/slider-gorsel1.png',   'baslik' => "Galatasaray'ın Barcelona maçındaki gol anları"],
    ['id' => 4,  'tip' => 'foto',  'resim' => 'images/slider-gorsel2.png',   'baslik' => "Milli takımda kadro açıklandı"],
    ['id' => 5,  'tip' => 'video', 'resim' => 'images/slider-gorsel3.png',   'baslik' => "Süper Lig'de haftanın programı belli oldu"],
    ['id' => 6,  'tip' => 'foto',  'resim' => 'images/Manşet.png',           'baslik' => "Derbi öncesi tribünlerden renkli görüntüler"],
    ['id' => 7,  'tip' => 'foto',  'resim' => 'images/Sürmanşet.png',        'baslik' => "Transferde sürpriz gelişme: Yıldız isim yolda"],
    ['id' => 8,  'tip' => 'video', 'resim' => 'images/manşet-sürmanşet.png', 'baslik' => "Teknik direktörden maç sonu açıklaması"],
    ['id' => 9,  'tip' => 'foto',  'resim' => 'images/sondakika1.png',       'baslik' => "Şampiyonlar Ligi'nde puan durumu güncellendi"],
    ['id' => 10, 'tip' => 'video', 'resim' => 'images/sondakika2.png',       'baslik' => "Basketbolda milli maç heyecanı başlıyor"],
];

$haberler = [
    ['id' => 11, 'tip' => 'foto',  'resim' => 'images/sondakika1.png',     'tarih' => '14 Ekim 2026, 09:54', 'baslik' => "G.Saray, Barcelona'ya kaybetti! Türkiye ilk 8'e ne kadar yakın? Ülke puanında son durum"],
    ['id' => 12, 'tip' => 'video', 'resim' => 'images/sondakika2.png',     'tarih' => '14 Ekim 2026, 10:52', 'baslik' => "Tümer Metin'den maç sonrası Galatasaraylı yıldız için flaş sözler! 'Gırtlağına yapışırım'"],
    ['id' => 13, 'tip' => 'video', 'resim' => 'images/slider-gorsel1.png', 'tarih' => '14 Ekim 2026, 09:27', 'baslik' => "Aston Villa - Fenerbahçe CANLI şifresiz izle! İşte karşılaşmanın linki!"],
    ['id' => 14, 'tip' => 'foto',  'resim' => 'images/slider-gorsel2.png', 'tarih' => '14 Ekim 2026, 09:30', 'baslik' => "Kanarya İngiltere deplasmanında! Aston Villa-Fenerbahçe muhtemel 11'ler"],
    ['id' => 15, 'tip' => 'foto',  'resim' => 'images/slider-gorsel3.png', 'tarih' => '14 Ekim 2026, 08:45', 'baslik' => "Beşiktaş'ta kritik karşılaşma öncesi sakatlık krizi"],
    ['id' => 16, 'tip' => 'video', 'resim' => 'images/Manşet.png',         'tarih' => '14 Ekim 2026, 08:20', 'baslik' => "Trabzonspor'da yeni sezon hedefleri belirlendi"],
];
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">


<div class="kategori-icerik">

    <!-- Manşet slider -->
    <div class="kategori-manset">
        <div class="manset-slider">
            <?php foreach ($mansetler as $manset): ?>
                <a href="galeriDetay.php?tip=<?php echo $manset['tip']; ?>&id=<?php echo $manset['id']; ?>" class="manset-slayt">
                    <img src="<?php echo $manset['resim']; ?>" alt="<?php echo $manset['baslik']; ?>" class="manset-resim">
                    <h2 class="manset-baslik"><?php echo $manset['baslik']; ?></h2>
                </a>
            <?php endforeach; ?>
        </div>

        <button type="button" class="manset-ok manset-ok-sol">
            <svg width="20" height="30" viewBox="0 0 24 26" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 4L7 13l8 9"/></svg>
        </button>
        <button type="button" class="manset-ok manset-ok-sag">
            <svg width="20" height="30" viewBox="0 0 24 26" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 4l8 9-8 9"/></svg>
        </button>

        <div class="manset-sayac">
            <span id="aktifSlayt">1</span>/<span id="toplamSlayt"><?php echo count($mansetler); ?></span>
        </div>
    </div>

    <!-- Haber listesi -->
    <div class="haber-listesi">
        <?php foreach ($haberler as $haber): ?>
            <a href="galeriDetay.php?tip=<?php echo $haber['tip']; ?>&id=<?php echo $haber['id']; ?>" class="haber-satir">
                <img src="<?php echo $haber['resim']; ?>" alt="<?php echo $haber['baslik']; ?>" class="haber-resim">
                <div class="haber-yazi">
                    <h3 class="haber-baslik"><?php echo $haber['baslik']; ?></h3>
                    <span class="haber-tarih"><?php echo $haber['tarih']; ?></span>
                </div>
            </a>
        <?php endforeach; ?>
    </div>

</div>

    </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="js/kategori.js?v=<?php echo time(); ?>"></script>
</body>
</html>
