<?php
include 'tumSporHeader.php';
include 'tumSporVeri.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$haber = null;
foreach ($tumSporHaberler as $h) {
    if ($h['id'] === $id) {
        $haber = $h;
        break;
    }
}
?>

<main class="tumSpor-icerik">
    <div class="row">
        <div class="col-md-8">
        <header class="news-header">
            <div class="category">
				<span>
					<a class="category" href="https://spor.haber7.com" title="Spor Haberleri">SPOR HABERLERİ</a>
				</span>
                <span>
					<a class="category" href="https://spor.haber7.com/avrupa-ligleri" title="AVRUPA LİGLERİ">AVRUPA LİGLERİ</a>
				</span>
            </div>
            <h1 class="title">Hakan'lı Inter'den 2 dakikada 2 gol! Rahat kazandılar</h1>
            <h2 class="spot">İtalya Serie A'nın 9. haftasında Inter, Venezia'yı deplasmanda 2-0'lık skorla mağlup etti.</h2>
        </header>
        <img src="https://i20.haber7.net/resize/1280x720//haber/haber7/photos/2026/44/hakanli_interden_2_dakikada_2_gol_rahat_kazandilar_1793222829_5329.jpg"
         alt="Hakan'lı Inter'den 2 dakikada 2 gol! Rahat kazandılar" class="js-detail-image" width="620" height="360">

         <div class="haber-info">
            <div class="tarih">
                <span class="tarih-item added">
                   <span>GİRİŞ</span> 29.10.2026 00:27
                </span>
                 <span class="tarih-item updated">
                    <span>GÜNCELLEME</span> 29.10.2026 00:27
                 </span>
             </div>

                <div class="text-size" title="Metin Boyutu"></div>

                <div class="news-share-secondary">
                    <i class="command-icon fa-regular fa-comment-dots" style="color: rgb(255, 255, 255);"></i>
                    <i class=" fa-brands fa-facebook-f" style="color: rgb(255, 255, 255);"></i>
                </div>
        </div>





        <aside class="col-md-4">

        </aside>


    </div>
</main>

</div>
</body>
</html>

