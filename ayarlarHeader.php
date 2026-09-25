<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayarlar></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap-grid.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
</head>
<body>

<main class="ayarlar-sayfa">
    <div class="mobil-cerceve">
        <div class="ayarlar-ust-bar">
            <button type="button" onclick="history.back()" class="ayarlar-sol-btn">
                <?php if ($ikonTuru === 'close'): ?>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#111111" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                     <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                <?php else: ?>
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#111111" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 18l-6-6 6-6"/>
                    </svg>
                <?php endif; ?>
            </button>
            <h1 class="ayarlar-baslik"><?php echo $ayarBaslik; ?></h1>
        </div>