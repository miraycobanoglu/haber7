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
                <a href="tumSporDetay.php" class="mozaik-kart mozaik-kart-blok2">
                    <img src="images/tumspor5.png" alt="Haber" class="mozaik-kart__resim">
                    <div class="mozaik-kart__icerik">
                        <h3 class="mozaik-kart__baslik">Galatasaray'ın gençleri Fransa'da Lille'e direnemedi!</h3>
                    </div>
                </a>

                <a href="tumSporDetay.php" class="mozaik-kart mozaik-kart-blok2">
                    <img src="images/tumspor1.png" alt="Haber" class="mozaik-kart__resim">
                    <div class="mozaik-kart__icerik">
                        <h3 class="mozaik-kart__baslik">Colin Kazım Richards'ın sözleşmesi feshedildi!</h3>
                    </div>
                </a>

                <a href="tumSporDetay.php" class="mozaik-kart mozaik-kart-blok2">
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
                <div class="bolum-baslik__yazi">GÜNÜN YAZILARI</div>
                <div class="gunun-yazilari-baslik-cizgi"></div>
            </div>

            <div class="gunun-yazilari">
                <a href="#" class="yazar-kart">
                    <img src="images/yazarlar/mehmet-acet.png" alt="Evren Göz" class="yazar-kart__resim">
                    <div class="yazar-kart__bilgi">
                        <span class="yazar-kart__isim">Evren Göz</span>
                        <p class="yazar-kart__baslik">Merhaba Şampiyonlar Ligi!</p>
                    </div>
                </a>

                <a href="#" class="yazar-kart">
                    <img src="images/yazarlar/cihad-islam-yilmaz.png" alt="Evren Göz" class="yazar-kart__resim">
                    <div class="yazar-kart__bilgi">
                        <span class="yazar-kart__isim">Evren Göz</span>
                        <p class="yazar-kart__baslik">Galatasaray'ın doymuşluk sorunu</p>
                    </div>
                </a>

                <a href="#" class="yazar-kart">
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
                        <img src="images/fixture-ball-icon.png" class="fixture-ball-icon">
                        <div class="puan-durumu-baslik">PUAN DURUMU</div>
                    </div>
                    <div class="puan-durumu-kart__sag">
                        <div class="fixture-baslik">FİKSTÜR</div>
                        <svg  class="refresh-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                            <path d="M21.5 2v6h-6M2.5 22v-6h6M2 11.5a10 10 0 0 1 18.8-4.3M22 12.5a10 10 0 0 1-18.8 4.2"/>
                        </svg>
                    </div>
                </div>

                <section class="puan-durumu-info">
                    <div class="puan-durumu-ligler">
                        <img src="images/la-liga.png" class="lig-sekme lig-sekme--aktif"></img>
                        <img src="images/la-liga.png" class="lig-sekme"></img>
                        <img src="images/la-liga.png" class="lig-sekme"></img>
                        <img src="images/la-liga.png" class="lig-sekme"></img>
                        <img src="images/la-liga.png" class="lig-sekme"></img>
                    </div>

                    <table class="puan-tablo">
                        <thead class="puan-durumu-thead">
                            <tr>
                                <th class="puan-tablo__takim-baslik">TAKIM</th>
                                <th>O</th>
                                <th>G</th>
                                <th>P</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td><span class="sira-no sira-no--sampiyon">1</span>Galatasaray</td><td>8</td><td>6</td><td>19</td></tr>
                            <tr><td><span class="sira-no sira-no--sampiyon">2</span>Amed SK</td><td>8</td><td>5</td><td >17</td></tr>
                            <tr><td><span class="sira-no sira-no--sampiyon">3</span>Fenerbahçe</td><td>8</td><td>5</td><td >16</td></tr>
                            <tr><td><span class="sira-no sira-no--sampiyon">4</span>Trabzonspor</td><td>8</td><td>5</td><td >16</td></tr>
                            <tr><td><span class="sira-no">5</span>Beşiktaş</td><td>8</td><td>5</td><td>15</td></tr>
                            <tr><td><span class="sira-no">6</span>Çorum FK</td><td>8</td><td>4</td><td>13</td></tr>
                            <tr><td><span class="sira-no">7</span>Kasımpaşa</td><td>8</td><td>3</td><td>13</td></tr>
                            <tr><td><span class="sira-no">8</span>Kocaelispor</td><td>8</td><td>4</td><td>12</td></tr>
                            <tr><td><span class="sira-no">9</span>Alanyaspor</td><td>8</td><td>3</td><td>12</td></tr>
                            <tr><td><span class="sira-no">10</span>Başakşehir FK</td><td>8</td><td>3</td><td>11</td></tr>
                            <tr><td><span class="sira-no">11</span>Erzurumspor FK</td><td>8</td><td>3</td><td>11</td></tr>
                            <tr><td><span class="sira-no">12</span>Çaykur Rizespor</td><td>8</td><td>3</td><td>10</td></tr>
                            <tr><td><span class="sira-no">13</span>Göztepe</td><td>8</td><td>2</td><td>9</td></tr>
                            <tr><td><span class="sira-no">14</span>Gaziantep FK</td><td>8</td><td>2</td><td>8</td></tr>
                            <tr><td><span class="sira-no sira-no--kume">15</span>Gençlerbirliği</td><td>8</td><td>2</td><td>8</td></tr>
                            <tr><td><span class="sira-no sira-no--kume">16</span>Konyaspor</td><td>8</td><td>1</td><td>5</td></tr>
                            <tr><td><span class="sira-no sira-no--kume">17</span>Samsunspor</td><td>8</td><td>1</td><td >4</td></tr>
                            <tr><td><span class="sira-no sira-no--kume">18</span>Eyüpspor</td><td>8</td><td>1</td><td>3</td></tr>
                        </tbody>
                    </table>
                </section>
            </div>
            </div>
        </div>

        <section class="multimedya-bolumu">
            <div class="multimedya-baslik-alani">
                <div class="multimedya-baslik-sol">
                    <h2 class="multimedya-baslik-yazi">MULTİMEDYA</h2>
                    <span class="multimedya-baslik-cizgi"></span>
                </div>
                <div class="multimedya-linkler">
                    <a href="tumSporDetay.php" class="multimedya-link">VİDEO GALERİ</a>
                    <span class="multimedya-nokta">•</span>
                    <a href="tumSporDetay.php" class="multimedya-link">
                        FOTO GALERİ
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-6">
                    <a href="tumSporDetay.php" class="multimedya-kart multimedya-kart--buyuk">
                        <span class="multimedya-rozet multimedya-rozet--video">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                                <polygon points="5 3 19 12 5 21 5 3"></polygon>
                            </svg>
                            VİDEO
                        </span>
                        <img src="images/multimedya/multimedya-video-görsel.png" alt="Haber" class="multimedya-kart__resim">
                        <div class="multimedya-kart__icerik">
                            <span class="multimedya-kart__serit"></span>
                            <h3 class="multimedya-kart__baslik">Sergen Yalçın 'Gördük çöpleri' diyerek meydan okudu!</h3>
                        </div>
                    </a>
                </div>

                <div class="col-6">
                    <div class="row g-3">
                        <div class="col-6">
                            <a href="tumSporDetay.php" class="multimedya-kart multimedya-kart--kucuk">
                                <span class="multimedya-rozet multimedya-rozet--foto">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                        <polyline points="21 15 16 10 5 21"></polyline>
                                    </svg>
                                </span>
                                <img src="images/multimedya/multimedya-görsel.png" alt="Haber" class="multimedya-kart__resim">
                                <div class="multimedya-kart__icerik multimedya-kart__icerik--center">
                                    <h3 class="multimedya-kart__baslik">Süper Lig devi, UEFA kulüpler sıralamasında 15 basamak yükseldi</h3>
                                    <p class="multimedya-kart__ozet">Temsilcilerimizin maçlarının ardından UEFA kulüpler sıralamasında son durum</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="tumSporDetay.php" class="multimedya-kart multimedya-kart--kucuk">
                                <span class="multimedya-rozet multimedya-rozet--foto">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                        <polyline points="21 15 16 10 5 21"></polyline>
                                    </svg>
                                </span>
                                <img src="images/multimedya/multimedya-görsel.png" alt="Haber" class="multimedya-kart__resim">
                                <div class="multimedya-kart__icerik multimedya-kart__icerik--center">
                                    <h3 class="multimedya-kart__baslik">UEFA ülke puanında son durum</h3>
                                    <p class="multimedya-kart__ozet">Avrupa kupaları sonrası Türkiye'nin ülke puanı ve klasmandaki yeri</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="tumSporDetay.php" class="multimedya-kart multimedya-kart--kucuk">
                                <span class="multimedya-rozet multimedya-rozet--foto">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                        <polyline points="21 15 16 10 5 21"></polyline>
                                    </svg>
                                </span>
                                <img src="images/multimedya/multimedya-görsel.png" alt="Haber" class="multimedya-kart__resim">
                                <div class="multimedya-kart__icerik multimedya-kart__icerik--center">
                                    <h3 class="multimedya-kart__baslik">Şampiyonlar Ligi'nde güncel puan durumu! G.Saray ilk 24'te! Peki F.Bahçe kaçıncı?</h3>
                                    <p class="multimedya-kart__ozet">Şampiyonlar Ligi'nde heyecan devam ediyor! İşte takımların sıralaması</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="tumSporDetay.php" class="multimedya-kart multimedya-kart--kucuk">
                                <span class="multimedya-rozet multimedya-rozet--foto">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                        <polyline points="21 15 16 10 5 21"></polyline>
                                    </svg>
                                </span>
                                <img src="images/multimedya/multimedya-görsel.png" alt="Haber" class="multimedya-kart__resim">
                                <div class="multimedya-kart__icerik multimedya-kart__icerik--center">
                                    <h3 class="multimedya-kart__baslik">Aslan, Avrupa'da siftah yaptı! Ülke puanı güncellendi</h3>
                                    <p class="multimedya-kart__ozet">Galatasaray, sezonun ilk Şampiyonlar Ligi galibiyetini Fransa'da Lille deplasmanında</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-3 mt-1">
                <div class="col-3">
                    <a href="tumSporDetay.php" class="multimedya-kart multimedya-kart--kucuk">
                        <span class="multimedya-rozet multimedya-rozet--play">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                                <polygon points="6 4 20 12 6 20 6 4"></polygon>
                            </svg>
                        </span>
                        <img src="images/multimedya/multimedya-görsel.png" alt="Haber" class="multimedya-kart__resim">
                        <div class="multimedya-kart__icerik">
                            <h3 class="multimedya-kart__baslik">Süper Lig ve 1.Lig hakem kararları mercek altında! Antyony Taylar masada...</h3>
                            <p class="multimedya-kart__ozet">MHK kritik kararları ve tartışmalı hakem pozisyonlarını masaya yatırdı</p>
                        </div>
                    </a>
                </div>

                <div class="col-3">
                    <a href="tumSporDetay.php" class="multimedya-kart multimedya-kart--kucuk">
                        <span class="multimedya-rozet multimedya-rozet--play">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                                <polygon points="6 4 20 12 6 20 6 4"></polygon>
                            </svg>
                        </span>
                        <img src="images/multimedya/multimedya-görsel.png" alt="Haber" class="multimedya-kart__resim">
                        <div class="multimedya-kart__icerik">
                            <h3 class="multimedya-kart__baslik">Galatasaraylı taraftarlar Barcelona kafilesine uyku uyutmadı</h3>
                            <p class="multimedya-kart__ozet">Sarı-kırmızılı taraftarlar Barcelona kafilesinin kaldığı otel önünde meşaleler yaktı</p>
                        </div>
                    </a>
                </div>

                <div class="col-3">
                    <a href="tumSporDetay.php" class="multimedya-kart multimedya-kart--kucuk">
                        <span class="multimedya-rozet multimedya-rozet--play">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                                <polygon points="6 4 20 12 6 20 6 4"></polygon>
                            </svg>
                        </span>
                        <img src="images/multimedya/multimedya-görsel.png" alt="Haber" class="multimedya-kart__resim">
                        <div class="multimedya-kart__icerik">
                            <h3 class="multimedya-kart__baslik">Arda Güler'e yapılan faul Mourinho'yu çıldırttı: Hakeme sert tepki</h3>
                            <p class="multimedya-kart__ozet">Real Madrid, LaLiga'nın 8. haftasında Villarreal'i 1-0 mağlup etti. Karşılaşmada Arda Güler'e</p>
                        </div>
                    </a>
                </div>

                <div class="col-3">
                    <a href="tumSporDetay.php" class="multimedya-kart multimedya-kart--kucuk">
                        <span class="multimedya-rozet multimedya-rozet--play">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                                <polygon points="6 4 20 12 6 20 6 4"></polygon>
                            </svg>
                        </span>
                        <img src="images/multimedya/multimedya-görsel.png" alt="Haber" class="multimedya-kart__resim">
                        <div class="multimedya-kart__icerik">
                            <h3 class="multimedya-kart__baslik">Hakem Yasin Kol İstanbul'da sağlık kontrolünden geçirildi</h3>
                            <p class="multimedya-kart__ozet">Süper Lig hakemi Yasin Kol detaylı sağlık ve kondisyon kontrolünden geçirildi</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

</main>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="js/tumSpor.js?v=<?php echo time(); ?>"></script>
</body>
</html>
