<?php
$tip = isset($_GET['tip']) ? $_GET['tip'] : 'video';
$baslik = ($tip == 'foto') ? 'Fotoğraf Galeri' : 'Video Galeri';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $baslik; ?> - Haber7</title>
    <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
</head>
<body class="detay-body">
    <div class="app-container">
        <header class="detay-header">
            <a href="galeri.php" class="geri-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 18L9 12L15 6" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <h1 class="detay-baslik-ust"><?php echo $baslik; ?></h1>
        </header>

        <main class="detay-icerik">

            <!-- foto-->
            <?php if ($tip == 'foto'): ?>
                <div class="foto-slider-wrapper">
                    <div class="slider-container">
                        <img src="images/manşet-sürm2.png" alt="Fotoğraf 1" class="slider-img">
                        <img src="images/slider-gorsel1.png" alt="Fotoğraf 2" class="slider-img">
                        <img src="images/slider-gorsel2.png" alt="Fotoğraf 2" class="slider-img">
                        <img src="images/slider-gorsel3.png" alt="Fotoğraf 2" class="slider-img">
                    </div>
                    <div class="foto-sayac"><span id="aktifIndex">1</span>/<span class=toplam-foto>4</span></div>
                </div>
            <?php else: ?>
                <!-- video -->
                <div class="video-wrapper">
                    <video controls width="100%" height="100%">
                        <source src="https://v.haber7.net/videos/mp4/2021/33/1629096633570_1629096633570qa6uv7ww67ue2grozsron.mp4" type="video/mp4">
                        Tarayıcınız video etiketini desteklemiyor.
                    </video>
                </div>
            <?php endif; ?>

            <!-- Haber Başlığı ve Metni -->
            <section class="haber-detay-metin">
                <h2>Sultangazi'de motokuryelerin çarpıştığı feci kaza kamerada</h2>
                <p>
                    Kaza, Sultangazi 50. yıl Mahallesi Orhangazi Caddesi'nde dün sabah saatlerinde meydana geldi. 
                    Edinilen bilgiye göre siparişe giden ve siparişten dönen iki motorlu kurye kafa kafaya çarptıştı. 
                    Çarpışmanın etkisiyle motokuryeler sağa sola savruldu. Yaralanan kuryelerin yardımına çevredekiler koşarken 
                    bir kişinin ise kazayı eli cebinde izlediği bir dükkanın güvenlik kamerası tarafından kaydedildi. 
                    Yolda yürüyen bir kadının ise korkuyla kaçtığı görülüyor.
                </p>
            </section>

            <!-- yorumlar -->
            <section class="yorumlar-bolumu">
                <div class="yorum-header">
                    <div class="yorum-baslik-sol">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                        <span>Yorumlar</span>
                        <span class="yorum-sayi">78</span>
                    </div>
                    <a href="#" class="tum-yorumlar">Tümü</a>
                </div>

                <div class="yorum-kart">
                    <div class="yorum-user-info">
                        <span class="user-name">Ali Ünlüer</span>
                        <span class="yorum-zaman">2 gün önce</span>
                    </div>
                    <p class="yorum-icerik-text">
                        Bazı konularda bence de haklı, ülkeler arası ilişkilere duygusallık karıştırılması gerekir, karışsa da fazla uzatılmamalı. Mısır olayında toparladım neyseki
                    </p>
                    <div class="yorum-aksiyonlar">
                        <button class="action-btn">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" xmlns="http://www.w3.org/2000/svg"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                            Beğen <span class="begeni-sayisi">(12)</span>
                        </button>
                        <button class="action-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="black"><path d="M744-210v-144q0-50-35-85t-85-35H282l123 123-51 51-210-210 210-210 51 51-123 123h342q80 0 136 56t56 136v144h-72Z"/></svg>
                            Cevapla
                        </button>
                    </div>
                </div>
            </section>

            <!-- yorum yap -->
            <section class="yorum-yap-alani">
                <p>Yorum Yap</p>
                <form action="" method="POST" class="yorum-form">
                    <textarea placeholder="Yorum yazın..." rows="3"></textarea>
                    <button type="submit" class="gonder-btn">Gönder</button>
                </form>
            </section>

        </main>
    </div>
    <script src="js/app.js?v=<?php echo time(); ?>"></script>
</body>
</html>