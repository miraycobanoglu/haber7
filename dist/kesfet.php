<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keşfet</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap-grid.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
</head>
<body>
<main class="kesfet-sayfa">
    <div class="mobil-cerceve" id="mobilCerceve">
        
        <!-- Üst Bar ve Geri Butonu -->
        <div class="kesfet-ust-bar">
            <button onclick="history.back()" class="kesfet-geri-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
        </div>

        <!-- Ana Keşfet Kartı -->
        <div class="kesfet-kart" id="kesfetKart">
            
            <!-- İçerik Alanı -->
            <div class="kesfet-kart__icerik">
                <span class="kesfet-kart__etiket">Ekonomi</span>
                <h2 class="kesfet-kart__baslik">Cumhurbaşkanı Erdoğan’dan milli aşı müjdesi</h2>
                <time class="kesfet-kart__tarih">22 Haziran 2021</time>
                
                <div class="kesfet-kart__metin-alani" id="metinAlani">
                    <p class="kesfet-kart__paragraf">
                        Katıldığımız tüm programlarda aşı meselesinin yeni adaletsizliklere yol açmaması gerektiğinin altını çiziyoruz. Yıl sonuna doğru kullanıma hazır hale getirmeyi planladığımız milli aşı çalışmalarımızı da bu hassasiyetle yürütüyoruz. Türkiye’nin geliştirdiği COVID-19 aşısının inşallah milletimizle birlikte tüm insanlığın da aşısı olacağının müjdesini buradan paylaşmak istiyorum.
                        Katıldığımız tüm programlarda aşı meselesinin yeni adaletsizliklere yol açmaması gerektiğinin altını çiziyoruz. Yıl sonuna doğru kullanıma hazır hale getirmeyi planladığımız milli aşı çalışmalarımızı da bu hassasiyetle yürütüyoruz.
                        Türkiye’nin sağlık alanındaki bağımsızlığı ve yerli üretim gücü, uluslararası alanda örnek teşkil etmeye devam ediyor. İlgili bakanlıklarımız ve bilim insanlarımız süreçleri titizlikle takip ediyor.
                        Katıldığımız tüm programlarda aşı meselesinin yeni adaletsizliklere yol açmaması gerektiğinin altını çiziyoruz. Yıl sonuna doğru kullanıma hazır hale getirmeyi planladığımız milli aşı çalışmalarımızı da bu hassasiyetle yürütüyoruz. Türkiye’nin geliştirdiği COVID-19 aşısının inşallah milletimizle birlikte tüm insanlığın da aşısı olacağının müjdesini buradan paylaşmak istiyorum.
                    </p>
                </div>
            </div>

            <div class="kesfet-kart__kaydirma-ipucu" id="kaydirmaIpucu">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 15l-6-6-6 6"/></svg>
                <span>Tamamını okumak için yukarı kaydır</span>
            </div>

        </div>

    </div>
</main>

<script>
    const kart = document.getElementById('kesfetKart');
    const metinAlani = document.getElementById('metinAlani');
    const ipucu = document.getElementById('kaydirmaIpucu');
    const cerceve = document.getElementById('mobilCerceve');

    let startY = 0;
    kart.addEventListener('touchstart', (e) => {
        startY = e.touches[0].clientY;
    });

    kart.addEventListener('touchmove', (e) => {
        let moveY = e.touches[0].clientY;
        if (startY - moveY > 30) { 
            metinAlani.classList.add('is-expanded');
            ipucu.style.opacity = '0';
        }
    });

    kart.addEventListener('click', () => {
        if (!metinAlani.classList.contains('is-expanded')) {
            metinAlani.classList.add('is-expanded');
            ipucu.style.opacity = '0';
        }
    });

    cerceve.addEventListener('click', (e) => {
        if (e.target === cerceve || e.target.classList.contains('kesfet-ust-bar')) {
            metinAlani.classList.remove('is-expanded');
            ipucu.style.opacity = '0.8';
        }
    });
</script>
    
</body>
</html>