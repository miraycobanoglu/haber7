<?php
include 'ayarlarHeader.php';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">

<div class="kategori-icerik">

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

