<?php
include 'tumSporHeader.php';

include 'tumSporVeri.php'; // haber listesi
?>

<main class="tumSpor-icerik">

    <div class="tumSpor-slider-alan">
        <div class="tumSpor-slider">
            <?php foreach ($tumSporHaberler as $slayt): ?>
                <a href="tumSporDetay.php?id=<?php echo $slayt['id']; ?>" class="tumSpor-slayt">
                    <img src="<?php echo $slayt['resim']; ?>" alt="<?php echo $slayt['baslik']; ?>" class="tumSpor-slayt__resim">
                    <div class="tumSpor-slayt__yazi">
                        <h2 class="tumSpor-slayt__baslik"><?php echo $slayt['baslik']; ?></h2>
                        <p class="tumSpor-slayt__aciklama"><?php echo $slayt['aciklama']; ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <button type="button" class="tumSpor-ok tumSpor-ok-sol" aria-label="Önceki">
            <svg width="26" height="46" viewBox="0 0 24 44" fill="none" stroke="#ffffff" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 4L6 22l12 18"/></svg>
        </button>
        <button type="button" class="tumSpor-ok tumSpor-ok-sag" aria-label="Sonraki">
            <svg width="26" height="46" viewBox="0 0 24 44" fill="none" stroke="#ffffff" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 4l12 18L6 40"/></svg>
        </button>

        <div class="tumSpor-noktalar-alan"></div>
    </div>

    <div class="top-headline row">
        <div class="col-md-3 top-headline-column">
            <a href="tumSporDetay.php" title="Alperen Şengün double-double yaptı! Houston Rockets farklı kazandı" target="_blank" class="top-headline-item basketbol">
						<!-- Image-->
						<div class="image-container">
							<img src="images/alperenşengül.png" alt="Alperen Şengün double-double yaptı! Houston Rockets farklı kazandı" class="image">
                           
						</div>

						<!-- Category -->
						<span class="category">Basketbol</span>
						<!-- Title -->
						<div class="title">
							<span>Alperen Şengün double-double yaptı! Houston Rockets farklı kazandı</span>
						</div>
             </a>
        </div>
            
         <div class="col-md-3 top-headline-column">
            <a href="tumSporDetay.php" title="Alperen Şengün double-double yaptı! Houston Rockets farklı kazandı" target="_blank" class="top-headline-item basketbol">
						<!-- Image-->
						<div class="image-container">
							<img src="images/alperenşengül.png" alt="Alperen Şengün double-double yaptı! Houston Rockets farklı kazandı" class="image">
                           
						</div>

						<!-- Category -->
						<span class="category">Basketbol</span>
						<!-- Title -->
						<div class="title">
							<span>Alperen Şengün double-double yaptı! Houston Rockets farklı kazandı</span>
						</div>
             </a>
        </div>
         <div class="col-md-3 top-headline-column">
            <a href="tumSporDetay.php" title="Alperen Şengün double-double yaptı! Houston Rockets farklı kazandı" target="_blank" class="top-headline-item basketbol">
						<!-- Image-->
						<div class="image-container">
							<img src="images/alperenşengül.png" alt="Alperen Şengün double-double yaptı! Houston Rockets farklı kazandı" class="image">
                           
						</div>

						<!-- Category -->
						<span class="category">Basketbol</span>
						<!-- Title -->
						<div class="title">
							<span>Alperen Şengün double-double yaptı! Houston Rockets farklı kazandı
                                Alperen Şengün double-double yaptı! Houston Rockets farklı kazandı
                            </span>
						</div>
             </a>
        </div>
         <div class="col-md-3 top-headline-column">
            <a href="tumSporDetay.php" title="Alperen Şengün double-double yaptı! Houston Rockets farklı kazandı" target="_blank" class="top-headline-item basketbol">
						<!-- Image-->
						<div class="image-container">
							<img src="images/alperenşengül.png" alt="Alperen Şengün double-double yaptı! Houston Rockets farklı kazandı" class="image">
						</div>

						<!-- Category -->
						<span class="category">Basketbol</span>
						<!-- Title -->
						<div class="title">
							<span>Alperen Şengün double-double</span>
						</div>
             </a>
        </div>

    </div>

    <div class="spor-ana-alan">
        <div class="spor-sol-kolon">
            <div class="bolum-baslik bolum-baslik--yesil">
                <h2 class="bolum-baslik__yazi">SPOR HABERLERİ</h2>
                <span class="bolum-baslik__cizgi"></span>
            </div>

            <div class="mozaik-blok-1">
                <a href="tumSporDetay.php" class="mozaik-kart mozaik-kart--dikey">
                    <img src="images/tumspor1.png" alt="Haber" class="mozaik-kart__resim">
                    <div class="mozaik-kart__icerik">
                        <h3 class="mozaik-kart__baslik">Genç oyuncunun Salah heyecanı: 'Televizyonda izleyerek büyüdük'</h3>
                    </div>
                </a>

                <div class="mozaik-blok-1__sag">
                    <div class="mozaik-blok-1__ust">
                        <a href="tumSporDetay.php" class="mozaik-kart">
                            <img src="images/tumspor2.png" alt="Haber" class="mozaik-kart__resim">
                            <div class="mozaik-kart__icerik">
                                <h3 class="mozaik-kart__baslik">Icardi'ye LaLiga'dan 2 talip! Transferin önünde tek engel var</h3>
                            </div>
                        </a>

                        <a href="tumSporDetay.php" class="mozaik-kart">
                            <img src="images/tumspor3.png" alt="Haber" class="mozaik-kart__resim">
                            <div class="mozaik-kart__icerik">
                                <h3 class="mozaik-kart__baslik">Crystal Palace cephesinden Beşiktaş açıklaması: Büyük şans!</h3>
                            </div>
                        </a>
                    </div>

                    <a href="tumSporDetay.php" class="mozaik-kart mozaik-kart--genis">
                        <img src="images/tumspor4.png" alt="Haber" class="mozaik-kart__resim">
                        <div class="mozaik-kart__icerik">
                            <h3 class="mozaik-kart__baslik">TFF 2. Lig ekibinden Vincenzo Montella'ya teşekkür</h3>
                        </div>
                    </a>
                </div>
            </div>

            <div class="mozaik-blok-2">
                <a href="tumSporDetay.php" class="mozaik-kart">
                    <img src="images/tumspor5.png" alt="Haber" class="mozaik-kart__resim">
                    <div class="mozaik-kart__icerik">
                        <h3 class="mozaik-kart__baslik">Galatasaray'ın gençleri Fransa'da Lille'e direnemedi!</h3>
                    </div>
                </a>

                <a href="tumSporDetay.php" class="mozaik-kart">
                    <img src="images/tumspor1.png" alt="Haber" class="mozaik-kart__resim">
                    <div class="mozaik-kart__icerik">
                        <h3 class="mozaik-kart__baslik">Colin Kazım Richards'ın sözleşmesi feshedildi!</h3>
                    </div>
                </a>

                <a href="tumSporDetay.php" class="mozaik-kart">
                    <img src="images/tumspor2.png" alt="Haber" class="mozaik-kart__resim">
                    <div class="mozaik-kart__icerik">
                        <h3 class="mozaik-kart__baslik">Beşiktaş Avrupa'da 267. kez sahaya çıkacak!</h3>
                    </div>
                </a>
            </div>

            <div class="mozaik-blok-3">
                <div class="mozaik-blok-3__sol">
                    <a href="tumSporDetay.php" class="mozaik-kart mozaik-kart--genis">
                        <img src="images/fatihterim.png" alt="Haber" class="mozaik-kart__resim">
                        <div class="mozaik-kart__icerik">
                            <h3 class="mozaik-kart__baslik">Okan Buruk Fatih Terim'i takip etmeye devam ediyor!</h3>
                        </div>
                    </a>

                    <div class="mozaik-blok-3__alt">
                        <a href="tumSporDetay.php" class="mozaik-kart">
                            <img src="images/tumspor3.png" alt="Haber" class="mozaik-kart__resim">
                            <div class="mozaik-kart__icerik">
                                <h3 class="mozaik-kart__baslik">Slavia Prag'ın hocasından Kadıköy sözleri: Birbirimizi duyamadık</h3>
                            </div>
                        </a>

                        <a href="tumSporDetay.php" class="mozaik-kart">
                            <img src="images/tumspor4.png" alt="Haber" class="mozaik-kart__resim">
                            <div class="mozaik-kart__icerik">
                                <h3 class="mozaik-kart__baslik">Kerem Aktürkoğlu ıslıklandı! Verdiği karşılık gündem oldu</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <a href="tumSporDetay.php" class="mozaik-kart mozaik-kart--dikey">
                    <img src="images/tumspor5.png" alt="Haber" class="mozaik-kart__resim">
                    <div class="mozaik-kart__icerik">
                        <h3 class="mozaik-kart__baslik">UEFA Avrupa Ligi'nde 3. hafta heyecanı! İşte maç programı</h3>
                    </div>
                </a>
            </div>

            <div class="bolum-baslik bolum-baslik--lacivert">
                <h2 class="bolum-baslik__yazi">GÜNÜN YAZILARI</h2>
                <span class="bolum-baslik__cizgi"></span>
            </div>

            <div class="gunun-yazilari">
                <a href="tumSporDetay.php" class="yazar-kart">
                    <img src="images/yazarlar/mehmet-acet.png" alt="Evren Göz" class="yazar-kart__resim">
                    <div class="yazar-kart__bilgi">
                        <span class="yazar-kart__isim">Evren Göz</span>
                        <p class="yazar-kart__baslik">Merhaba Şampiyonlar Ligi!</p>
                    </div>
                </a>

                <a href="tumSporDetay.php" class="yazar-kart">
                    <img src="images/yazarlar/cihad-islam-yilmaz.png" alt="Evren Göz" class="yazar-kart__resim">
                    <div class="yazar-kart__bilgi">
                        <span class="yazar-kart__isim">Evren Göz</span>
                        <p class="yazar-kart__baslik">Galatasaray'ın doymuşluk sorunu</p>
                    </div>
                </a>

                <a href="tumSporDetay.php" class="yazar-kart">
                    <img src="images/yazarlar/yuksel-oksak.png" alt="Evren Göz" class="yazar-kart__resim">
                    <div class="yazar-kart__bilgi">
                        <span class="yazar-kart__isim">Evren Göz</span>
                        <p class="yazar-kart__baslik">Galatasaray'ın hedefi...</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="spor-sag-kolon">
            <div class="one-cikanlar-baslik-alani">
                <h2 class="one-cikanlar-baslik-yazi">ÖNE ÇIKANLAR</h2>
                <span class="one-cikanlar-cubuk">
                </span>
            </div>

            <div class="one-cikanlar-wrapper">
                <div class="one-cikanlar-track" id="oneCikanlarTrack">
                    <div class="one-cikanlar-sayfa">
                        <a href="tumSporDetay.php" class="one-cikan-kart">
                            <span class="one-cikan-kart__sira">1</span>
                            <div class="one-cikan-kart__kutu">
                                <h3 class="one-cikan-kart__baslik">Davide Ancelotti: Şampiyonlar Ligi'nde küçük hatalara af yok</h3>
                            </div>
                            <img src="images/tumspor1.png" alt="Haber" class="one-cikan-kart__resim">
                        </a>

                        <a href="tumSporDetay.php" class="one-cikan-kart">
                            <span class="one-cikan-kart__sira">2</span>
                            <div class="one-cikan-kart__kutu">
                                <h3 class="one-cikan-kart__baslik">UEFA'dan Halil Umut Meler'e görev</h3>
                            </div>
                            <img src="images/tumspor2.png" alt="Haber" class="one-cikan-kart__resim">
                        </a>

                        <a href="tumSporDetay.php" class="one-cikan-kart">
                            <span class="one-cikan-kart__sira">3</span>
                            <div class="one-cikan-kart__kutu">
                                <h3 class="one-cikan-kart__baslik">Eski Fenerbahçeli, 1. Lig ekibinin yeni hocası oldu</h3>
                            </div>
                            <img src="images/tumspor3.png" alt="Haber" class="one-cikan-kart__resim">
                        </a>

                        <a href="tumSporDetay.php" class="one-cikan-kart">
                            <span class="one-cikan-kart__sira">4</span>
                            <div class="one-cikan-kart__kutu">
                                <h3 class="one-cikan-kart__baslik">Michael Owen'ın rekoru 28 yıl sonra kırıldı!</h3>
                            </div>
                            <img src="images/tumspor4.png" alt="Haber" class="one-cikan-kart__resim">
                        </a>

                        <a href="tumSporDetay.php" class="one-cikan-kart">
                            <span class="one-cikan-kart__sira">5</span>
                            <div class="one-cikan-kart__kutu">
                                <h3 class="one-cikan-kart__baslik">Bir ilk! Türkiye'nin Formula 1 hayali gerçek oluyor</h3>
                            </div>
                            <img src="images/tumspor5.png" alt="Haber" class="one-cikan-kart__resim">
                        </a>
                    </div>

                    <div class="one-cikanlar-sayfa">
                        <a href="tumSporDetay.php" class="one-cikan-kart">
                            <span class="one-cikan-kart__sira">6</span>
                            <div class="one-cikan-kart__kutu">
                                <h3 class="one-cikan-kart__baslik">UEFA'dan Atilla Karaoğlan'a görev!</h3>
                            </div>
                            <img src="images/tumspor2.png" alt="Haber" class="one-cikan-kart__resim">
                        </a>

                        <a href="tumSporDetay.php" class="one-cikan-kart">
                            <span class="one-cikan-kart__sira">7</span>
                            <div class="one-cikan-kart__kutu">
                                <h3 class="one-cikan-kart__baslik">Konferans Ligi'nde 2. hafta başlıyor! İşte maç programı</h3>
                            </div>
                            <img src="images/tumspor5.png" alt="Haber" class="one-cikan-kart__resim">
                        </a>

                        <a href="tumSporDetay.php" class="one-cikan-kart">
                            <span class="one-cikan-kart__sira">8</span>
                            <div class="one-cikan-kart__kutu">
                                <h3 class="one-cikan-kart__baslik">Galatasaray'dan Lille maçına saatler kala 4 maddelik açıklama!</h3>
                            </div>
                            <img src="images/tumspor3.png" alt="Haber" class="one-cikan-kart__resim">
                        </a>

                        <a href="tumSporDetay.php" class="one-cikan-kart">
                            <span class="one-cikan-kart__sira">9</span>
                            <div class="one-cikan-kart__kutu">
                                <h3 class="one-cikan-kart__baslik">NBA'de sezon başladı! LeBron, yeni takımıyla ilk maçında 12 sayı kaydetti</h3>
                            </div>
                            <div class="one-cikan-kart__resim one-cikan-kart__resim--bos"></div>
                        </a>

                        <a href="tumSporDetay.php" class="one-cikan-kart">
                            <span class="one-cikan-kart__sira">10</span>
                            <div class="one-cikan-kart__kutu">
                                <h3 class="one-cikan-kart__baslik">Dortmund, Azerbaycan'da 2 golle kazandı</h3>
                            </div>
                            <div class="one-cikan-kart__resim one-cikan-kart__resim--bos"></div>
                        </a>
                    </div>
                </div>
            </div>

            <a href="macMerkezi.php" class="mac-merkezi-banner">
                <div class="mac-merkezi-banner__yazi">
                    <span class="mac-merkezi-banner__canli">CANLI</span>
                    <span class="mac-merkezi-banner__baslik">MAÇ MERKEZİ</span>
                </div>
            </a>

            <div class="puan-durumu-kart">
                <div class="puan-durumu-kart__baslik">
                    <div class="puan-durumu-kart__sol">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/>
                            <path d="M2 12h20"/>
                        </svg>
                        <span>PUAN DURUMU</span>
                    </div>
                    <div class="puan-durumu-kart__sag">
                        <span>FİKSTÜR</span>
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2">
                            <path d="M21.5 2v6h-6M2.5 22v-6h6M2 11.5a10 10 0 0 1 18.8-4.3M22 12.5a10 10 0 0 1-18.8 4.2"/>
                        </svg>
                    </div>
                </div>

                <div class="puan-durumu-ligler">
                    <span class="lig-sekme lig-sekme--aktif">Süper Lig</span>
                    <span class="lig-sekme">1. Lig</span>
                    <span class="lig-sekme">Premier</span>
                    <span class="lig-sekme">Bundesliga</span>
                    <span class="lig-sekme">La Liga</span>
                </div>

                <table class="puan-tablo">
                    <thead>
                        <tr>
                            <th class="puan-tablo__takim-baslik">TAKIM</th>
                            <th>O</th>
                            <th>G</th>
                            <th>P</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td><span class="sira-no sira-no--sampiyon">1</span>Galatasaray</td><td>8</td><td>6</td><td class="puan-vurgu">19</td></tr>
                        <tr><td><span class="sira-no sira-no--sampiyon">2</span>Amed SK</td><td>8</td><td>5</td><td class="puan-vurgu">17</td></tr>
                        <tr><td><span class="sira-no sira-no--sampiyon">3</span>Fenerbahçe</td><td>8</td><td>5</td><td class="puan-vurgu">16</td></tr>
                        <tr><td><span class="sira-no sira-no--sampiyon">4</span>Trabzonspor</td><td>8</td><td>5</td><td class="puan-vurgu">16</td></tr>
                        <tr><td><span class="sira-no">5</span>Beşiktaş</td><td>8</td><td>5</td><td class="puan-vurgu">15</td></tr>
                        <tr><td><span class="sira-no">6</span>Çorum FK</td><td>8</td><td>4</td><td class="puan-vurgu">13</td></tr>
                        <tr><td><span class="sira-no">7</span>Kasımpaşa</td><td>8</td><td>3</td><td class="puan-vurgu">13</td></tr>
                        <tr><td><span class="sira-no">8</span>Kocaelispor</td><td>8</td><td>4</td><td class="puan-vurgu">12</td></tr>
                        <tr><td><span class="sira-no">9</span>Alanyaspor</td><td>8</td><td>3</td><td class="puan-vurgu">12</td></tr>
                        <tr><td><span class="sira-no">10</span>Başakşehir FK</td><td>8</td><td>3</td><td class="puan-vurgu">11</td></tr>
                        <tr><td><span class="sira-no">11</span>Erzurumspor FK</td><td>8</td><td>3</td><td class="puan-vurgu">11</td></tr>
                        <tr><td><span class="sira-no">12</span>Çaykur Rizespor</td><td>8</td><td>3</td><td class="puan-vurgu">10</td></tr>
                        <tr><td><span class="sira-no">13</span>Göztepe</td><td>8</td><td>2</td><td class="puan-vurgu">9</td></tr>
                        <tr><td><span class="sira-no">14</span>Gaziantep FK</td><td>8</td><td>2</td><td class="puan-vurgu">8</td></tr>
                        <tr><td><span class="sira-no sira-no--kume">15</span>Gençlerbirliği</td><td>8</td><td>2</td><td class="puan-vurgu">8</td></tr>
                        <tr><td><span class="sira-no sira-no--kume">16</span>Konyaspor</td><td>8</td><td>1</td><td class="puan-vurgu">5</td></tr>
                        <tr><td><span class="sira-no sira-no--kume">17</span>Samsunspor</td><td>8</td><td>1</td><td class="puan-vurgu">4</td></tr>
                        <tr><td><span class="sira-no sira-no--kume">18</span>Eyüpspor</td><td>8</td><td>1</td><td class="puan-vurgu">3</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="js/tumSpor.js?v=<?php echo time(); ?>"></script>
</body>
</html>
