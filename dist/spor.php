<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spor</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap-grid.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
</head>
<body>

<main class="spor-sayfa">
    <div class="mobil-cerceve">
        <div class="spor-ust-bar">
            <button type="button" onclick="history.back()" class="spor-sol-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#111111" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                     <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
            </button>
            <h1 class="spor-baslik">Puan Durumu</h1>
            </div>

            <div class="ligler" id="ligFiltre">
    <div class="ligler__baslik" id="ligBaslik">
        <span class="ligler__metin" id="ligSecilenMetin">La Liga</span>
        <span class="ligler__ikon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 9l6 6 6-6"/>
            </svg>
        </span>
    </div>

    <!-- Açılıp Kapanacak Lig Listesi -->
    <div class="ligler__icerik">
        <ul class="ligler__liste">
            <li class="ligler__liste-eleman">La Liga</li>
            <li class="ligler__liste-eleman">Premier Lig</li>
            <li class="ligler__liste-eleman">Serie A</li>
            <li class="ligler__liste-eleman">Bundesliga</li>
            <li class="ligler__liste-eleman">Ligue 1</li>
        </ul>
    </div>
</div>
</div>
</main>


<script>
    const ligFiltre = document.getElementById('ligFiltre');
    const ligBaslik = document.getElementById('ligBaslik');
    const ligSecilenMetin = document.getElementById('ligSecilenMetin');
    const listeElemanlari = document.querySelectorAll('.ligler__liste-eleman');

    const kaydedilenLig = localStorage.getItem('secilenLig');
    if (kaydedilenLig) {
        ligSecilenMetin.textContent = kaydedilenLig;
    }
    ligBaslik.addEventListener('click', function () {
        ligFiltre.classList.toggle('ligler--acik');
    });

    listeElemanlari.forEach(eleman => {
        eleman.addEventListener('click', function () {
        const secilenDeger = this.textContent;
        ligSecilenMetin.textContent = secilenDeger;
        ligFiltre.classList.remove('ligler--acik');
        localStorage.setItem('secilenLig', secilenDeger);
        });
    });
</script>
</body>
</html>
