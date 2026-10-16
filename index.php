
            <?php 
            $pageTitle = '<img src="images/logo.png" alt="Haber7 Logo" class="site-logo">'; 
        include 'header.php'; 
        ?>

        <main class="ana-icerik" id="mainScreen">

            <div class="son-dakika-bandi">
                <span class="etiket">SON DAKİKA</span>
                <div class="son-dakika-kayan-alan">
                <p>Muğla'da korkutan deprem!</p>
                </div>
            </div>

            <section class="manset-alani">
                <div class="manset-kart" id="manset-kart-slider">
                    <img src="images/Manşet.png" alt="Manset" class="manset-gorsel" >
                    <img src="images/Manşet.png" alt="Manset" class="manset-gorsel" >
                    <img src="images/Manşet.png" alt="Manset" class="manset-gorsel" >
                    <img src="images/Manşet.png" alt="Manset" class="manset-gorsel" >
                </div>
                 <div class="foto-sayac">
                    <span id="aktifIndex">1</span>
                    <span>/</span>
                    <span class="toplam-foto" id="toplamFoto"></span>
                </div>
            </section>

            <section class="piyasa-alani">
                <div class="piyasa-kutu">
                    <span class="dolar"><svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <circle cx="17.5" cy="17.5" r="17.5" fill="#D9D9D9" fill-opacity="0.25"/>
                        <rect x="13" y="10" width="9" height="16" fill="url(#pattern0_12_199)"/>
                        <defs>
                        <pattern id="pattern0_12_199" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_12_199" transform="scale(0.111111 0.0625)"/>
                        </pattern>
                        <image id="image0_12_199" width="9" height="16" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAQCAYAAADESFVDAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAOdEVYdFNvZnR3YXJlAEZpZ21hnrGWYwAAALZJREFUeAF9kF0RwjAQhAOtACQUB5WQR15RAA5AQiVUQh2AgyIBB+CAOgi7YTNcU8LOfMnk5+72rnJLjWALbumiMo8NOIId2IAVuNvoAwjgZeD5oeC48KI35Trd89OlxtLqsZ9bc0+w516rvjO7VfS0BlcwMa2MF9WqfjCGiwGd+3Y5687K67FRJn4e/32i2HGg8ZP7DPOXJhHTMfqcZfIqF+fH+QyZ4bQPeeomeVCXvmBhYTzqDZuCNZcwiEtsAAAAAElFTkSuQmCC"/>
                        </defs>
                        </svg>
                    </span> 
                    <span class="artisAzalis-icon" id="dovizIconContainer">
                        <div class="artis-icon">
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 4.90274L5 1L1 4.90274" fill="#63CE94"/>
                        <path d="M9 4.90274L5 1L1 4.90274" stroke="#63CE94" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <line x1="1.12365" y1="4.90274" x2="9.12365" y2="4.90274" stroke="#63CE94" stroke-width="2"/>
                        </svg>
                        </div>
                        <div class="azalis-icon"> 
                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.07295L5.03542 4.93906L8.99967 1.00001" fill="#DA2027"/>
                            <path d="M1 1.07295L5.03542 4.93906L8.99967 1.00001" stroke="#DA2027" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <line x1="8.87603" y1="1.00115" x2="0.876363" y2="1.07409" stroke="#DA2027" stroke-width="2"/>
                            </svg>

                        </div>

                    </span>
                    <strong class="dolar-fiyat" id="dolarFiyat"></strong>
                </div>
                <div class="havaDurumu-kutu">
                    <div class="hava-durumu-kutu__flex">
                    <div class="havaDurumu-kutu__gorsel">
                        <img id="havaDurumuIkon" src="" alt="Hava Durumu" width="27" height="20">
                        <p class="havaDurumu-kutu__gorsel-derece" id="havaDerece"></p>
                    </div>
                    <div class="havaDurumu-kutu__sehir">
                        <select id="sehirSecim" class="sehir-select">
                            <option value="Istanbul" selected>İstanbul</option>
                            <option value="Ankara">Ankara</option>
                            <option value="Izmir">İzmir</option>
                            <option value="Antalya">Antalya</option>
                            <option value="Bursa">Bursa</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="namaz-vakti" id="namazVaktiAlani" style="cursor: pointer;">
                    <span><svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="27" height="27" fill="url(#pattern0_13_269)"/>
                    <defs>
                    <pattern id="pattern0_13_269" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_13_269" transform="scale(0.0294118)"/>
                    </pattern>
                    <image id="image0_13_269" width="34" height="34" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAiCAYAAAA6RwvCAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAOdEVYdFNvZnR3YXJlAEZpZ21hnrGWYwAACAJJREFUeAGtWElsHNcRfb1Md0/3rCSH4iImQyvaZUiME8VBFtPIAtsIYOsQ+GgbQc6ODkGgXEyenJuUQ045xEGWUwDRF0OKYWgAy6akhKIoWaIUUdJIYsRlyNmne3r7neoezpDDRaRiF/DJ7vr1f72uelX9ezg8g4w88BJho/Y247ijHodjPPPSHscl/DnO84qM57I8uKznsQ8BIXPqYDi70725nRi9P20MA957NIa3s+1WOHSHG9sqHDcG3vv9T1LhzHbruG0ApMn5n3YCYBUIjTDfuhfIQwjcmCh5J19Obh2hLYH87rb+LhgbaYb+y8jBOA9V5IqMsdFXetQz2CmQ96drlAaMYAcSFmiIW8+LHIcBbdUN3Y5QqkbX2wUxPHXqt2f/HxC+DGg8BiNbj7UgfPE8jHycM95r3jd9N5/lDf+Pnw7P80bwDJKtMkRDT7ehtAQkXgvm3LxeWklT4Js7ffp0olKpFpQfvTnEkn0XvgpOrBeJ4v58kl+n5YoLU+MnHl7+/EL/4UNJsV6331C1CEKWfkH/ikH4FbMn6hN1s1kvISjRs2FNA6sZb/Oe577lU1bMP2kD4S48hDX9L2wn9uP/wL53/algHA+YvTmF+bt3YDK0xvLMdILnBbiO9brIMedhhybCNErBwgihl6gSarVl2DSiElCytgbC8vNbzrkEYLrEgmvn3n0IPV/HfwusNS+6DJ3Ud+rVMsQfvvBcRlW1t7KJA6gQ+v3xRi7vLj2CbJvYo7j4whFgsc2dpSMCHDGMHJ4uodIi1FgEtTW6/kNHcNB+DCUS/bModfUlEmoYYTkO1wbuVRgEo4rK3CwSqRSsShH7EylU1kTFsuqYnZqAc2cCWbr2hbsxAXFgL/hD3yWvcjuKufuUQxNhswSDnDChUWaKqiIR6oGpdCb4eXnXS7wgUqNpRKJIDhdyy40OU6+gurwUsN4PoT8idhm5j/4O6/pFMNOgdVwwoJdh3roC9snfAqdrxSosUZ+wwZENKyy29P463/cSHzsqml4o7Ss7qc73KSslFhtED9uHZETF7ODBtk3nr11GKbcAWZZhmiZEUaS+4MG27UBXz+egTX4C7/hrrTXSoeP4fmQBUlc/zqv9WC8ljzsmWpwQAPGfOiqsTmqxOKKJzrYFdu4Jqg9uE5k5aGEFnmNRSsXgyepgUH0dhT6Uy4I3iqiHVwsxluxAKLmLymUDDuIfnxZ7F64nihQJZpiYUI61Jn/KhyBJCiaWGyzVjDz2PfoU396bgih/bcVq49M1xVkax3j/j+HwDT6IIYmiJ7UBSSzeRjki09saCTEX7kHEeIxCNNIyUBwdXr0Kq66hyy2jyIWRLt+F3rEHneY8oskktpNHYgr7c1dxJ/VNRKwS7WVAqJehshh0vkHmgtyJSHUetXAfRCfWXezuEhN5Yi9WKkNkNqxSngB4UKNJVIkTi9M3kH7+COKpbsSTPS2Hi0t5qiILu/t62oCUDQ437kyDk9NQRBPlQh4C8Qnq7pYNF0+hWw5jVuwv0nnFzZLu2NpNqlKcktoFhVr/nNCBPjmPdLoLGqdD4JMB069ev4lLVybpWkAoFEJEU3Hk4F4cPrA32KNXqCL2wn5MhyzMiL0YikbhKB2taKwViWdZXmPG1Gah5Xkepl6DzW18UfggMp9eoryHAhAB+JqOS/+ews3bdzfY+zxhrksh4DdzhTDYQ76Lla+tn2DVIiau3cFnV6cbzWg9kGtfEJElCIKwCchblCq7Hcj8Q3w2OYOJqzeCfrNedovGmNjF2x8QPU+vBaH/86/Q9QoikQi4Kx+B7d8D26uBUfjLpQKe641BpTmZ8ruZMNeBY1uolanJcQu033k4BLxmztHLf4xOwG+2dV86z2TEwaGXizPXL2Y67dlhiAeQcKv4Rp8GSSZORBqVxDvUEalbesxFSJIxsCsJRj1EjbZHxGMMWryDIsVRlbgwqVLitRkc29dHe0VpTyWwm7bK0EMpxApZFEX3w6MHvpUNCGCbxqghSsP+eU0VGPo6VEiUe1mTUK9VIChhVAu1NqcudVJ/tOkce0N04poCjfaMJiPkp06VE4KqyNDhHwU46JV8cJhund8+H89cKBrmsN9DZKsaVENTZEUJWnnIfyLqoo7vkMjHixuJ7DsSqHn5IO3mO4dsRYqkQzpe4KkqE1QEVG1gY98ZevGEb9LaiSvOvRP32CQhS1DJBO+P1hzdS2G1dR8iR3jKOdW1rVW74GLln9zgRZzVKAL0eSHwJ1s+1m5w69K5X4HnTq/fOKzFiZzbd9NnEUrjyb49R1rfOG2FfejFV87QcWDUP75ZhkHGDvxrv4H5Q6+UiYT11v1WOvqQQqW4vEFXzi8F15TT0bUgfNnQCP7wx79kfv7qD7gn92eGRZ5afCxJlaKguJTD1MXzMGsFdPamg4ZX16u4/PFZ6KUFJLp6V3hgYfzcP1ArLCDWkYKkNFLq25VysxAFYXTwyPGR9X43bXUvnfjliCKrJ23LLDZ1vgPfuV/CzG1UR71WbTyNIATRa9oFtqSzqXybUtdrRddjJw9/79WRzXxu3nNJXvvFr8/Q7kN0OQZiuEANSFKjdARQwYjHjH6XECgCclOHhs4fvi4ka1QKUnBPVMy4Lj/0s3d+c2Yrfzv6WeLB48fD9PvHu1j5KnsGydAH2+jgwEBmO8MdAWnK+ORkmkg1TCey12lpmlT+aB7D/DRmOXjXqPSniJIfDA0NFXe69/8A0eZD0QESGLEAAAAASUVORK5CYII="/>
                    </defs>
                    </svg>
                    </span> 
                    <div class="ezan">
                        <strong class="ezan__vakit" id="namazVakitAdi"></strong>
                         <small class="ezan__saat" id="namazVakitSaat"></small>
                    </div>
                    
                </div>
            </section>

            <!-- Son dakika haberleri -->
            <section class="haber-listesi-bolumu">
                <div class="bolum-baslik">
                    <h3>Son Dakika Haberleri</h3>
                     <a href="#" class="tumunu-gor">Tümü</a>
                </div>

            <!-- Slick Slider buradaki grid yapısını ikili ikili kaydıracak -->
            <div class="haber-kartlari-grid">
   
                <div class="haber-karti">
                 <img class="haber-karti__gorsel" src="images/sondakika1.png" alt="Haber">
                    <p class="haber-karti__guncelDurum">Güncel</p>
            <p class="haber-karti__info">Son dakika: Hükümetten kamu işçilerine zam teklifi..</p>
                </div>
                <div class="haber-karti">
                    <img class="haber-karti__gorsel" src="images/sondakika2.png" alt="Haber">
                    <p class="haber-karti__guncelDurum">Güncel</p>
                    <p class="haber-karti__info">BBP'li yönetici ters kelepçeyle gözaltına alınmıştı</p>
             </div>

        <div class="haber-karti">
            <img class="haber-karti__gorsel" src="images/sondakika1.png" alt="Haber">
            <p class="haber-karti__guncelDurum">Güncel</p>
            <p class="haber-karti__info">İstanbul'da beklenen sağanak yağış başladı</p>
        </div>
        <div class="haber-karti">
            <img class="haber-karti__gorsel" src="images/sondakika2.png" alt="Haber">
            <p class="haber-karti__guncelDurum">Güncel</p>
            <p class="haber-karti__info">Merkez Bankası yeni faiz kararını açıkladı</p>
        </div>

        <div class="haber-karti">
            <img class="haber-karti__gorsel" src="images/sondakika1.png" alt="Haber">
            <p class="haber-karti__guncelDurum">Güncel</p>
            <p class="haber-karti__info">Teknoloji devinden çığır açan yapay zeka hamlesi</p>
        </div>
        <div class="haber-karti">
            <img class="haber-karti__gorsel" src="images/sondakika2.png" alt="Haber">
            <p class="haber-karti__guncelDurum">Güncel</p>
            <p class="haber-karti__info">Süper Lig'de haftanın en kritik maçı oynanıyor</p>
        </div>
    </div>
</section>

            <section class="ikinci-manset-alani">
                <div class="banner-slider-wrapper">
                    <div class="banner-slide">
                        <img src="images/Sürmanşet.png" alt="" class="banner-gorsel">
                        <img src="images/Sürmanşet.png" alt="" class="banner-gorsel">
                        <img src="images/Sürmanşet.png" alt="" class="banner-gorsel">
                        <img src="images/Sürmanşet.png" alt="" class="banner-gorsel">
                        <img src="images/Sürmanşet.png" alt="" class="banner-gorsel">
                        <img src="images/Sürmanşet.png" alt="" class="banner-gorsel">
                        <img src="images/Sürmanşet.png" alt="" class="banner-gorsel">
                        <img src="images/Sürmanşet.png" alt="" class="banner-gorsel">
                    </div>
                </div>
            </section>

            <!-- spor bölümü -->
            <section class="spor-bolumu">
                <div class="bolum-baslik tumspor-baslik">
                    <img src="images/tumspor.png" class="tumspor-baslik__gorsel">
                    <a href="#" class="tumunu-gor">Tümü <span class="tumspor-ok"><svg width="7" height="10" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 11.0063L6 6.00315L1 1" stroke="#40761C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </span>
                    </a>
                </div>

    <div class="row spor-grid">
        <div class="col-6">
            <div class="spor-karti">
                <img src="images/fatihterim.png" alt="Fatih Terim">
                <p>Fatih Terim: Galatasaray'da benim hayallerimi</p>
            </div>
        </div>
        <div class="col-6">
            <div class="spor-karti">
                <img src="images/fatihterim.png" alt="Fatih Terim">
                <p>Fatih Terim: Galatasaray'da benim hayallerimi</p>
            </div>
        </div>
        <div class="col-6">
            <div class="spor-karti">
                <img src="images/fatihterim.png" alt="Fatih Terim">
                <p>Fatih Terim: Galatasaray'da benim hayallerimi</p>
            </div>
        </div>
        <div class="col-6">
            <div class="spor-karti">
                <img src="images/fatihterim.png" alt="Fatih Terim">
                <p>Fatih Terim: Galatasaray'da benim hayallerimi</p>
            </div>
        </div>
    </div>
        </section>
        </main>
    

        <!-- popup -->
        <div class="onboarding-overlay" id="onboardingOverlay">
            
            <!-- GİRİŞ 1 -->
            <section class="screen screen--active" data-index="0">
                <div class="onboarding">
                    <div class="onboarding__preview">
                        <img src="images/giris1.png" alt="Giriş 1 Önizleme" class="onboarding__image">
                    </div>
                    <div class="onboarding__aciklama">
                    <div class="onboarding__content">
                        <h2 class="onboarding__title">Diğer haberler için kaydırın.</h2>
                        <p class="onboarding__desc">Önceki ve sonraki haberler için kaydırabilirsin veya ok butonlarına basıp kullanabilirsiniz.</p>
                    </div>
                    <div class="onboarding__footer">
                        <div class="dots">
                            <span class="dots__item dots__item--active"></span>
                            <span class="dots__item"></span>
                            <span class="dots__item"></span>
                        </div>
                        <div class="onboarding__actions">
                            <button class="btn btn--skip skip-action">Atla</button>
                            <button class="btn btn--primary" onclick="nextSlide()">İleri</button>
                        </div>
                    </div>
                </div>
                </div>
            </section>

            <!-- GİRİŞ 2 -->
            <section class="screen" data-index="1">
                <div class="onboarding">
                    <div class="onboarding__logo-area">
                        <img src="images/logo.png" alt="Haber7" class="onboarding__logo">
                    </div>
                    <div class="onboarding__preview preview-2">
                        <img src="images/giris2.png" alt="Giriş 2 Önizleme" class="onboarding__image-2">
                    </div>
                    <div class="onboarding__aciklama">
                    <div class="onboarding__content">
                        <h2 class="onboarding__title2">Açık ve Koyu Görünüm</h2>
                        <p class="onboarding__desc">Görünüm seçimi yapabilir ve metin puntosunu ayarlayabilirsiniz.</p>
                    </div>
                    <div class="onboarding__footer">
                        <div class="dots">
                            <span class="dots__item dots__item--active"></span>
                            <span class="dots__item"></span>
                            <span class="dots__item"></span>
                        </div>
                        <div class="onboarding__actions">
                            <button class="btn btn--skip skip-action">Atla</button>
                            <button class="btn btn--primary" onclick="nextSlide()">İleri</button>
                        </div>
                    </div>
                </div>
                </div>
            </section>

            <!-- GİRİŞ 3 -->
            <section class="screen" data-index="2">
                <div class="onboarding">
                    <div class="onboarding__logo-area">
                        <img src="images/logo.png" alt="Haber7" class="onboarding__logo">
                    </div>
                    <div class="onboarding__preview preview-2">
                        <img src="images/giris3.png" alt="Giriş 3 Önizleme" class="onboarding__image-3">
                    </div>
                    <div class="onboarding__aciklama">
                    <div class="onboarding__content">
                        <h2 class="onboarding__title3">Haberi Keşfet</h2>
                        <p class="onboarding__desc">Görünüm seçimi yapabilir ve metin puntosunu ayarlayabilirsiniz.</p>
                    </div>
                    <div class="onboarding__footer">
                        <div class="dots">
                            <span class="dots__item dots__item--active"></span>
                            <span class="dots__item"></span>
                            <span class="dots__item"></span>
                        </div>
                        <div class="onboarding__actions">
                            <button class="btn btn--skip skip-action">Atla</button>
                            <button class="btn btn--primary" id="finishBtn" onclick="nextSlide()">Başlat</button>
                        </div>
                    </div>
                </div>
                </div>
            </section>

        </div>

<!-- ezan vakti popup -->

<div class="ezan-vakti-modal" id="ezanVaktiModal">
    <div class="ezan-vakti-modal__container">

        <div class="ezan-sehir-bar">
            <div class="ezan-sehir-secim-sarmal">
                <select class="ezan-sehir-select" id="ezanModalSehirSecim">
                    <option value="Istanbul" selected>İstanbul</option>
                    <option value="Ankara">Ankara</option>
                    <option value="Izmir">İzmir</option>
                    <option value="Bursa">Bursa</option>
                </select>
                <svg class="ezan-sehir-ok" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </div>
            <button type="button" class="ezan-modal-kapat" id="ezanModalKapatBtn" aria-label="Kapat">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <div class="ezan-vakti-modal__body">
            <div class="ezan-aktif-kart">
                <div class="ezan-aktif-kart__sol">
                    <div class="ezan-aktif-kart__vakit-baslik">
                        <span class="ezan-hilal-ikon">☾</span>
                        <span id="ezanModalAktifVakitAdi">Yatsı</span>
                    </div>
                    <div class="ezan-aktif-kart__saat-alani">
                        <svg class="ezan-saat-ikon" viewBox="0 0 24 24" fill="none" stroke="#da2027" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span class="ezan-aktif-saat" id="ezanModalAktifSaat">21:43</span>
                    </div>
                    <div class="ezan-aktif-kart__tarih" id="ezanModalMiladiTarih">12 Temmuz Pazartesi</div>
                </div>
                <div class="ezan-aktif-kart__sag">
                    <svg class="ezan-cami-svg" width="105" height="105" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="48" fill="#BFE8FA"/>
                        <path d="M20 38c0-4 4-7 8-6 2-5 8-8 13-5 3-2 8-2 11 1 3-1 6 0 7 2 3 0 5 3 5 6H20z" fill="#E6F6FD" opacity="0.8"/>
                        <path d="M48 28c0-3 3-5 6-4 2-4 6-6 10-4 2-2 6-2 9 1 2-1 5 0 6 2 2 0 4 2 4 5H48z" fill="#E6F6FD" opacity="0.8"/>
                        <rect x="23" y="28" width="3" height="45" fill="#88B8CE"/>
                        <polygon points="23,28 24.5,21 26,28" fill="#88B8CE"/>
                        <rect x="74" y="28" width="3" height="45" fill="#88B8CE"/>
                        <polygon points="74,28 75.5,21 77,28" fill="#88B8CE"/>
                        <rect x="33" y="24" width="3.5" height="48" fill="#A8CADB"/>
                        <polygon points="33,24 34.75,17 36.5,24" fill="#A8CADB"/>
                        <rect x="64" y="24" width="3.5" height="48" fill="#A8CADB"/>
                        <polygon points="64,24 65.75,17 67.5,24" fill="#A8CADB"/>
                        <rect x="28" y="56" width="44" height="26" fill="#DDD5C8"/>
                        <rect x="24" y="66" width="52" height="18" fill="#CFC4B5"/>
                        <rect x="20" y="74" width="60" height="12" fill="#BFAF9E"/>
                        <path d="M46 72c0-3 1.8-5 4-5s4 2 4 5v12h-8V72z" fill="#8C7D6E"/>
                        <path d="M36 74c0-2.2 1.3-4 3-4s3 1.8 3 4v8h-6V74z" fill="#9C8D7E"/>
                        <path d="M58 74c0-2.2 1.3-4 3-4s3 1.8 3 4v8h-6V74z" fill="#9C8D7E"/>
                        <circle cx="34" cy="62" r="2.2" fill="#8C7D6E"/>
                        <circle cx="42" cy="61" r="2.2" fill="#8C7D6E"/>
                        <circle cx="50" cy="60" r="2.2" fill="#8C7D6E"/>
                        <circle cx="58" cy="61" r="2.2" fill="#8C7D6E"/>
                        <circle cx="66" cy="62" r="2.2" fill="#8C7D6E"/>
                        <path d="M26 80c0-2 1-3 2.5-3s2.5 1 2.5 3v4h-5v-4z" fill="#8C7D6E"/>
                        <path d="M70 80c0-2 1-3 2.5-3s2.5 1 2.5 3v4h-5v-4z" fill="#8C7D6E"/>
                        <path d="M30 56c0-7 6-12 13-12v12H30z" fill="#8FAAB8"/>
                        <path d="M57 56c0-7 6-12 13-12v12H57z" fill="#7E9AA8"/>
                        <path d="M37 54c0-10 6-18 13-18s13 8 13 18H37z" fill="#698B9E"/>
                        <line x1="50" y1="36" x2="50" y2="31" stroke="#9A8570" stroke-width="1.2"/>
                        <circle cx="50" cy="30" r="1.5" fill="#9A8570"/>
                        <rect x="25" y="32" width="4" height="42" fill="#C5B8A7"/>
                        <polygon points="25,32 27,22 29,32" fill="#5F7F91"/>
                        <rect x="24" y="44" width="6" height="2" fill="#9A8570"/>
                        <rect x="71" y="32" width="4" height="42" fill="#C5B8A7"/>
                        <polygon points="71,32 73,22 75,32" fill="#5F7F91"/>
                        <rect x="70" y="44" width="6" height="2" fill="#9A8570"/>
                    </svg>
                </div>
            </div>

            <div class="ezan-kalan-kutu">
                <div class="ezan-kalan-kutu__baslik" id="ezanKalanBaslik">İmsak Vaktine Kalan Süre</div>
                <div class="ezan-kalan-kutu__sayac" id="ezanKalanSayac">04:54:36</div>
            </div>

            <div class="ezan-vakitler-bolumu">
                <div class="ezan-vakitler-bolumu__baslik">Vakitler</div>


                <div class="ezan-vakit-satir" data-vakit="İmsak">
                    <div class="ezan-vakit-satir__sol">
                        <span class="ezan-vakit-satir__ikon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2v4M4.93 7.93l2.83 2.83M19.07 7.93l-2.83 2.83M2 18h20M5 18a7 7 0 0 1 14 0"/>
                            </svg>
                        </span>
                        <span class="ezan-vakit-satir__isim">İmsak</span>
                    </div>
                    <span class="ezan-vakit-satir__saat" id="ezanVakitImsak">03:44</span>
                </div>

                <div class="ezan-vakit-satir" data-vakit="Güneş">
                    <div class="ezan-vakit-satir__sol">
                        <span class="ezan-vakit-satir__ikon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 3v3M4 14h16M2 18h20M6 14a6 6 0 0 1 12 0"/>
                            </svg>
                        </span>
                        <span class="ezan-vakit-satir__isim">Güneş</span>
                    </div>
                    <span class="ezan-vakit-satir__saat" id="ezanVakitGunes">05:25</span>
                </div>

                <!-- öğle -->
                <div class="ezan-vakit-satir" data-vakit="Öğle">
                    <div class="ezan-vakit-satir__sol">
                        <span class="ezan-vakit-satir__ikon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="4"/>
                                <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/>
                            </svg>
                        </span>
                        <span class="ezan-vakit-satir__isim">Öğle</span>
                    </div>
                    <span class="ezan-vakit-satir__saat" id="ezanVakitOgle">12:52</span>
                </div>

                <div class="ezan-vakit-satir" data-vakit="İkindi">
                    <div class="ezan-vakit-satir__sol">
                        <span class="ezan-vakit-satir__ikon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 18a5 5 0 0 0-10 0M2 18h20M12 4v4M6.3 7.3l2.8 2.8M17.7 7.3l-2.8 2.8"/>
                            </svg>
                        </span>
                        <span class="ezan-vakit-satir__isim">İkindi</span>
                    </div>
                    <span class="ezan-vakit-satir__saat" id="ezanVakitIkindi">16:42</span>
                </div>

                <div class="ezan-vakit-satir" data-vakit="Akşam">
                    <div class="ezan-vakit-satir__sol">
                        <span class="ezan-vakit-satir__ikon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 18h20M7 18a5 5 0 0 1 10 0M12 9v3M6 9l2 2M18 9l-2 2"/>
                            </svg>
                        </span>
                        <span class="ezan-vakit-satir__isim">Akşam</span>
                    </div>
                    <span class="ezan-vakit-satir__saat" id="ezanVakitAksam">20:09</span>
                </div>

                <div class="ezan-vakit-satir ezan-vakit-satir--aktif" data-vakit="Yatsı">
                    <div class="ezan-vakit-satir__sol">
                        <span class="ezan-vakit-satir__ikon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#da2027" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
                            </svg>
                        </span>
                        <span class="ezan-vakit-satir__isim">Yatsı</span>
                    </div>
                    <span class="ezan-vakit-satir__saat" id="ezanVakitYatsi">21:43</span>
                </div>

            </div>

        </div>

    </div>
</div>




        <?php 
        include 'footer.php'; 
        ?>
