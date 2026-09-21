
            <?php 
        include 'header.php'; 
        ?>

        <!-- ANA SAYFA İÇERİK AKIŞI -->
        <main class="ana-icerik" id="mainScreen">
            
            <!-- Son Dakika-->
            <div class="son-dakika-bandi">
                <span class="etiket">SON DAKİKA</span>
                <p>Muğla'da korkutan deprem!</p>
            </div>

            <!-- Manşet Slider Alanı -->
            <section class="manset-alani">
                <div class="manset-kart">
                    <img src="images/Manşet.png" alt="Manset" class="manset-gorsel" >
                </div>
            </section>

            <!-- Döviz ve Hava Durumu -->
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
                    <span class="artisAzalis-icon"><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.00004 4.14634L5.00004 1L1.00004 4.14634" fill="#63CE94"/>
                    <path d="M9.00004 4.14634L5.00004 1L1.00004 4.14634" stroke="#63CE94" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </span>
                    <strong class="dolar-fiyat">8,77</strong>
                </div>
                <div class="havaDurumu-kutu">
                    <div class="hava-durumu-kutu__flex">
                    <div class="havaDurumu-kutu__gorsel">
                        <svg width="27" height="19" viewBox="0 0 27 19" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="27" height="19" fill="url(#pattern0_12_201)"/>
                        <defs>
                        <pattern id="pattern0_12_201" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_12_201" transform="scale(0.037037 0.0526316)"/>
                        </pattern>
                        <image id="image0_12_201" width="27" height="19" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAATCAYAAABhh3Y4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAOdEVYdFNvZnR3YXJlAEZpZ21hnrGWYwAAAjhJREFUeAGtVL1uE0EQ/nbvcjEmKKYIDRKynwAjoETYiuj9BrYjUUDjvIFJSwN5AWwqykAPcigQHUlBjymQEI3PwfHZ8e4Os2dh4bPvdMb5pL3T7vx8M7MzC6wJ+rB3lFZXYl0IyqVVTUVGnVqeVy6G7CDJbmUyGJRAohMlpJP9PLYy7PRxcZForwmF2lxcSAl6X6uA4ItH7WM6edoA0TM+npIbAka6i7F+C2kOwnOFCuu+/C+yGemXJx3+lZYKxwoYqi4klUW53Y2K3TinQRDkHdINaFWkydAXavxu48fz25xdKc4Gm+yOkMdItXhXjoqXZqaCQVUbas8dXgwhht/h/nrDPTFCLLii6I8Bbcq25P+K5LKMFogsvCwocxPm2l0kwobv8keKSlS0UEah1X7sTboZ6K37cM4+IZlQTMuJcOhbXIo8d/PrGZnNSOiLihR4SHFOHFaXmyB3G0L148mILGEv5N19Vf97HJZxcv67KY36JoR8wWrF+IhZXbowV+8hEdqGaz4umAeDs5oUooVVYMy0STQvUuzkJ+TgFPL8K7e/5vafdMVuqxA1cx0hGoQVISVfSZbLmg235O3AeLfgkAen/9m3c7bULLFsaWEbwuPm2X7AG3MnDCDyLoZkvHxcBuQGZ5rh0Jt+6JPEEXXq1Xkyg0NcBoyy3664XvD5qfL5Usv8Zs4NkaBeLzfx3M5a5bStHlj/uu7dKLTj1GbMtisdiCrZAVwFStnZOTWkDq/sFI6TVP8AzA7rcUaNm1sAAAAASUVORK5CYII="/>
                        </defs>
                        </svg>
                        <p class="havaDurumu-kutu__gorsel-derece">22</p>
                    </div>
                    <div class="havaDurumu-kutu__sehir">
                        <p>İstanbul</p>
                    </div>
                    </div>
                </div>
                <div class="namaz-vakti">
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
                        <strong class="ezan__vakit">İkindi</strong> <small class="ezan__saat">17:13</small>
                    </div>
                    
                </div>
            </section>

            <!-- Son Dakika Haberleri Bölümü (Slider Noktalı) -->
            <section class="haber-listesi-bolumu">
                <div class="bolum-baslik">
                    <h3>Son Dakika Haberleri</h3>
                    <a href="#" class="tumunu-gor">Tümü > </a>
                </div>
                <div class="haber-kartlari-grid">
                    <div class="haber-karti">
                        <img class="haber-karti__gorsel" src="images/sondakika1.png" alt="Haber">
                        <p class="haber-karti__guncelDurum" >Güncel</p>
                        <p class="haber-karti__info">Son dakika: Hükümetten kamu işçilerine zam teklıfı..</p>
                    </div>
                    <div class="haber-karti">
                        <img class="haber-karti__gorsel" src="images/sondakika2.png" alt="Haber">
                        <p class="haber-karti__guncelDurum" >Güncel</p>
                        <p class="haber-karti__info">BBP'li yönetici ters kelepçeyle gözaltına alınmıştı</p>
                    </div>
                </div>
                <!-- Son Dakika Slider Noktaları -->
                <div class="slider-dots">
                    <span class="dot dot-active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </section>

            <!-- İkinci Manşet / Kaydırmalı Banner Alanı -->
            <section class="ikinci-manset-alani">
                <div class="banner-slider-wrapper">
                    <div class="banner-slide">
                        <img src="images/manşet-sürmanşet.png" alt="" class="banner-gorsel">
                    </div>
                </div>
            </section>

            <!-- Spor Bölümü (Tümspor) -->
            <section class="spor-bolumu">
                <div class="bolum-baslik tumspor-baslik">
                    <img src="images/tumspor.png" class="tumspor-baslik__gorsel">
                    <a href="#" class="tumunu-gor">Tümü <span class="tumspor-ok"><svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 11.0063L6 6.00315L1 1" stroke="#40761C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </span>
                    </a>
                </div>


    <!-- Bootstrap row ve col-6 yapısı -->
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
                <!-- ALT TAB BAR (SAYFA GEÇİŞ ÇUBUĞU) -->
        <?php 
        include 'footer.php'; 
        ?>
