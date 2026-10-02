<?php
$ayarBaslik = isset($ayarBaslik) ? $ayarBaslik : "Ayarlar";
$ikonTuru = isset($ikonTuru) ? $ikonTuru : "back";
include 'ayarlarHeader.php';
?>

        <div class="ayarlar-liste">
            <a href="gorunum-ayarlari.php" class="ayar-item">
                <div class="ayar-item__sol">
                    <span class="ayar-item__ikon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                    </span>
                    <span class="ayar-item__metin">Görünüm Ayarları</span>
                </div>
                <span class="ayar-item__ok">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                </span>
            </a>

            <a href="bildirim-ayarlari.php" class="ayar-item">
                <div class="ayar-item__sol">
                <span class="ayar-item__ikon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                    </span>
                    <span class="ayar-item__metin">Bildirim Ayarları</span>
                </div>
                <span class="ayar-item__ok">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                </span>
            </a>

            <a href="sozlesme.php" class="ayar-item">
                <div class="ayar-item__sol">
                    <span class="ayar-item__ikon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    </span>
                    <span class="ayar-item__metin">Kullanıcı Sözleşmesi, KVKK</span>
                </div>
                <span class="ayar-item__ok">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                </span>
            </a>

            <a href="widget-ayarlari.php" class="ayar-item">
                <div class="ayar-item__sol">
                    <span class="ayar-item__ikon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>
                    </span>
                    <span class="ayar-item__metin">Widget Ayarları</span>
                </div>
                <span class="ayar-item__ok">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                </span>
            </a>

            <a href="yardim.php" class="ayar-item">
                <div class="ayar-item__sol">
                <span class="ayar-item__ikon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                    </span>
                    <span class="ayar-item__metin">Yardım</span>
                </div>
                <span class="ayar-item__ok">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                </span>
            </a>

        </div>

    </div>
</main>

</body>
</html>