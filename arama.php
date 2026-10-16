<?php
$pageTitle = '
    <img src="images/logo.png" alt="Haber7 Logo" class="site-logo site-logo--light">
    <img src="images/logo-dark.png" alt="Haber7 Logo" class="site-logo site-logo--dark">
';
include 'header.php';

// URL'den aranan kelimeyi alıyoruz
$arananKelime = isset($_GET['q']) ? trim($_GET['q']) : '';

// Türkçe karakter uyumlu küçük harfe çevirme yardımcı fonksiyonu
function kucukHarfYap($metin) {
    return mb_strtolower(str_replace(['I', 'İ'], ['ı', 'i'], (string)$metin), 'UTF-8');
}

// Tüm haberler
$tumHaberler = [
    [
        'id' => 1,
        'kategori' => 'GÜNCEL',
        'zaman' => '1 SAAT ÖNCE',
        'resim' => 'images/sondakika1.png',
        'baslik' => "Bakan Kurum ve Bakan Çiftçi Ayazağa'da! 'Kaybolan bir kişi sağ bulundu!'",
        'ozet' => "Son Dakika: Çevre, Şehircilik ve İklim Değişikliği Bakanı Murat Kurum ve İçişleri Bakanı Mustafa Çiftçi sel afetinin yaşandığı Ayazağa'da incelemelerde bulundu."
    ],
    [
        'id' => 2,
        'kategori' => 'GÜNCEL',
        'zaman' => '1 SAAT ÖNCE',
        'resim' => 'images/cumhurbaskani.png',
        'baslik' => "COP31 öncesinde Moskova'da kritik temas: Sahadaki sorunlar diplomasi masasına taşınacak",
        'ozet' => "Sıfır Atık Vakfı Başkanı ve COP31 Yüksek Düzeyli İklim Şampiyonu Samed Ağırbaş, Moskova'da katıldığı Rusya Enerji Haftası'nda Antalya'da düzenlenecek COP31 öncesinde sıfır atık, gıda israfı ve uluslararası iş birliğinin önemini vurguladı. Görüşmelerde Bakan Murat Kurum temasları da değerlendirildi."
    ],
    [
        'id' => 3,
        'kategori' => 'GÜNCEL',
        'zaman' => '13 SAAT ÖNCE',
        'resim' => 'images/sondakika2.png',
        'baslik' => "İstanbul'dan acı haber! Sel felaketinde ölü sayısı yükseldi! Başkan Erdoğan'dan talimat",
        'ozet' => "Son dakika haberi... İstanbul'da yaşanan sel felaketi nedeniyle hayatını kaybedenlerin sayısı 4'e yükseldi. İçişleri Bakanı Mustafa Çiftçi, 6 vatandaş için kayıp ihbarı yapıldığını bildirdi. Murat Kurum bölgedeki koordinasyonu sürdürüyor."
    ],
    [
        'id' => 4,
        'kategori' => 'GÜNCEL',
        'zaman' => '16 SAAT ÖNCE',
        'resim' => 'images/manşet-sürm.png',
        'baslik' => "Bakan Kurum İstanbul'da incelemelerde bulunacak",
        'ozet' => "Çevre, Şehircilik ve İklim Değişikliği Bakanı Murat Kurum, sel felaketinin yaşandığı İstanbul'da afetzedelerle buluşacak ve çalışmaları yerinde inceleyecek."
    ],
    [
        'id' => 5,
        'kategori' => 'GÜNCEL',
        'zaman' => '1 GÜN ÖNCE',
        'resim' => 'images/manşet-sürm2.png',
        'baslik' => "Siyasilerden peş peşe İstanbul açıklaması",
        'ozet' => "İstanbul'da hayatı felç eden sağanak yağışla ilgili siyasilerden peş peşe açıklamalar geldi. Murat Kurum ve beraberindeki heyet sahada incelemelerini tamamladı."
    ],
    [
        'id' => 6,
        'kategori' => 'GÜNCEL',
        'zaman' => '1 GÜN ÖNCE',
        'resim' => 'images/Manşet.png',
        'baslik' => "Bakan Kurum'dan kentsel dönüşüm mesajı: İstanbul için kaybedecek vaktimiz yok",
        'ozet' => "Bakan Murat Kurum, kentsel dönüşüm seferberliğinde yeni dönemi başlattıklarını belirterek 'Tüm yapılarımızı afetlere dirençli hale getireceğiz' dedi."
    ],
    [
        'id' => 7,
        'kategori' => 'SPOR',
        'zaman' => '2 SAAT ÖNCE',
        'resim' => 'images/slider-gorsel1.png',
        'baslik' => "Hoffenheim maçı öncesi Beşiktaş'ta Dusan Vlahovic şoku!",
        'ozet' => "Süper Lig temsilcimiz Beşiktaş'ta kritik Avrupa karşılaşması öncesi yıldız golcü Vlahovic'ten kötü haber geldi."
    ],
    [
        'id' => 8,
        'kategori' => 'SPOR',
        'zaman' => '4 SAAT ÖNCE',
        'resim' => 'images/slider-gorsel2.png',
        'baslik' => "G.Saray, Barcelona'ya kaybetti! Türkiye ilk 8'e ne kadar yakın?",
        'ozet' => "Şampiyonlar Ligi'nde temsilcimiz Galatasaray sahasında Barcelona'ya mağlup oldu. Ülke puanında son durum netleşti."
    ],
    [
        'id' => 9,
        'kategori' => 'EKONOMİ',
        'zaman' => '3 SAAT ÖNCE',
        'resim' => 'images/cumhurbaskani.png',
        'baslik' => "Merkez Bankası faiz kararını açıkladı! İşte piyasalara ilk yansıması",
        'ozet' => "TCMB Para Politikası Kurulu faiz kararını duyurdu. Borsa İstanbul ve döviz kurlarında anlık hareketlilik yaşandı."
    ],
    [
        'id' => 10,
        'kategori' => 'EKONOMİ',
        'zaman' => '5 SAAT ÖNCE',
        'resim' => 'images/slider-gorsel3.png',
        'baslik' => "Altın fiyatlarında rekor üstüne rekor! Gram altın ve çeyrek altında son durum",
        'ozet' => "Ons altının yükselişiyle birlikte iç piyasada gram altın tarihi zirvesini yeniledi. Kapalıçarşı güncel rakamları açıklandı."
    ]
];


$sonuclar = [];
if ($arananKelime !== '') {
    $arananKucuk = kucukHarfYap($arananKelime);

    foreach ($tumHaberler as $haber) {
        $metin = kucukHarfYap($haber['baslik'] . ' ' . $haber['ozet'] . ' ' . $haber['kategori']);
        if (strpos($metin, $arananKucuk) !== false) {
            $sonuclar[] = $haber;
        }
    }
}
$sonucSayisi = count($sonuclar);
?>

<main class="arama-sayfa">
    <div class="arama-kapsayici">

        <!-- sayfanın içindeki arama kutusu -->
        <form action="arama.php" method="GET" class="arama-form">
            <div class="arama-form__kutu">
                <input type="text" name="q" class="arama-form__input" placeholder="Haberlerde ara..." value="<?php echo htmlspecialchars($arananKelime); ?>">
                <button type="submit" class="arama-form__buton" aria-label="Ara">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </button>
            </div>
        </form>

        <!-- aranan kelime başlığı -->
        <?php if ($arananKelime !== ''): ?>
            <div class="arama-bilgi">
                <p class="arama-bilgi__metin">
                    “<span class="arama-bilgi__kelime"><?php echo htmlspecialchars($arananKelime); ?></span>” kelimesini içeren <span class="arama-bilgi__sayi"><?php echo $sonucSayisi; ?></span> sonuç bulundu.
                </p>
            </div>
        <?php else: ?>
            <div class="arama-bilgi">
                <p class="arama-bilgi__metin">Arama yapmak için lütfen bir kelime yazıp aratın.</p>
            </div>
        <?php endif; ?>

        <!-- haber listesi -->
        <div class="arama-liste">
            <?php if ($sonucSayisi > 0): ?>
                <?php foreach ($sonuclar as $haber): ?>
                    <a href="galeriDetay.php?tip=foto&id=<?php echo $haber['id']; ?>" class="arama-kart">
                        <div class="arama-kart__resim-alani">
                            <img src="<?php echo $haber['resim']; ?>" alt="<?php echo htmlspecialchars($haber['baslik']); ?>" class="arama-kart__resim">
                        </div>
                        <div class="arama-kart__detay">
                            <div class="arama-kart__ust">
                                <span class="arama-kart__kategori"><?php echo $haber['kategori']; ?></span>
                                <span class="arama-kart__zaman"><?php echo $haber['zaman']; ?></span>
                            </div>
                            <h2 class="arama-kart__baslik"><?php echo $haber['baslik']; ?></h2>
                            <p class="arama-kart__ozet"><?php echo $haber['ozet']; ?></p>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php elseif ($arananKelime !== ''): ?>
                <div class="arama-bos">
                    <p>“<strong><?php echo htmlspecialchars($arananKelime); ?></strong>” ile ilgili herhangi bir haber bulunamadı.</p>
                </div>
            <?php endif; ?>
        </div>

    </div>
</main>

<?php include 'footer.php'; ?>

