<?php 
$pageTitle = "Galeri"; 
include 'header.php'; 
?>

<div class="content-container">
    <div class="gallery-card">
        <div class="gallery-card__image-wrapper">
            <a href="galeriDetay.php?tip=video&id=1" class="badge badge--video">
                <img src="images/galeri-icon.png" alt=""> Videoya Git
            </a>
            <img src="images/manşet-sürm.png" alt="Haber Görseli">
        </div> 
        <div class="gallery-card__content">
            <h2 class="gallery-card__title">Sultangazi'de motokuryelerin çarpıştığı feci kaza kamerada</h2>
            <span class="gallery-card__date">16:06, 8 Temmuz 2021, Perşembe</span>
        </div>
    </div>
    <div class="gallery-card">
        <div class="gallery-card__image-wrapper">
            <a href="galeriDetay.php?tip=foto&id=1"class="badge badge--photo">
                <img src="images/galeri-icon.png" alt=""> 5 Fotoğraf
            </a>
            <img src="images/manşet-sürm2.png" alt="Aventador">
        </div>
        <div class="gallery-card__content">
            <h2 class="gallery-card__title">Efsane modele veda! Lamborghini Aventador 780 beygir ile geldi!</h2>
            <span class="gallery-card__date">16:06, 8 Temmuz 2021, Perşembe</span>
        </div>
    </div>
        <div class="gallery-card">
        <div class="gallery-card__image-wrapper">
            <a href="galeriDetay.php?tip=foto&id=1" class="badge badge--photo">
                <img src="images/galeri-icon.png" alt=""> 5 Fotoğraf
            </a>
            <img src="images/manşet-sürm2.png" alt="Aventador">
        </div>
        <div class="gallery-card__content">
            <h2 class="gallery-card__title">Efsane modele veda! Lamborghini Aventador 780 beygir ile geldi!</h2>
            <span class="gallery-card__date">16:06, 8 Temmuz 2021, Perşembe</span>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>