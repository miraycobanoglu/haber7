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

</main>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="js/tumSpor.js?v=<?php echo time(); ?>"></script>
</body>
</html>
