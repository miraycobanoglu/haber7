<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haber7 Mobil Prototip</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap-grid.min.css" rel="stylesheet">
</head>
<body>

    <!-- 402px -->
    <div class="mobile-container">
        <!-- BURGER MENU OVERLAY -->
         <div class="yan-menu-overlay" id="yanMenuOverlay">
            <div class="yan-menu-icerik">
                <div class="yan-menu-baslik">
                    <img src="images/logo.png" alt="Haber7" class="menu-logo">
                    <button class="menu-kapat-btn" id="menuKapatBtn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18M6 6L18 18" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </button>
                </div>
                <div class="arama-kutusu">
                    <input type="text"  placeholder="">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_428_147)">
                        <path d="M6.875 11.875C9.63642 11.875 11.875 9.63642 11.875 6.875C11.875 4.11358 9.63642 1.875 6.875 1.875C4.11358 1.875 1.875 4.11358 1.875 6.875C1.875 9.63642 4.11358 11.875 6.875 11.875Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.125 13.125L10.4062 10.4062" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_428_147">
                        <rect width="15" height="15" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                </div>
                <nav class="yan-menu-linkler">
                    <a href="index.html" class="yan-menu-link active">ANASAYFA</a>
                    <a href="galeri.html"class="yan-menu-link ">GALERİ</a>
                    <a href="gazeteler.html" class="yan-menu-link ">GAZETELER</a>
                    <a href="kesfet.html" class="yan-menu-link">KEŞFET</a>
                    <a href="spor.html" class="yan-menu-link">SPOR</a>
                </nav>
                
                <div class="yan-menu-alt">
                    <div class="sosyal-ikonlar">
                        <span><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_429_175)">
                        <path d="M10.625 1.25H4.375C2.64911 1.25 1.25 2.64911 1.25 4.375V10.625C1.25 12.3509 2.64911 13.75 4.375 13.75H10.625C12.3509 13.75 13.75 12.3509 13.75 10.625V4.375C13.75 2.64911 12.3509 1.25 10.625 1.25Z" stroke="#DA2027" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 7.10626C10.0771 7.62641 9.98829 8.15764 9.7461 8.62439C9.50391 9.09114 9.12072 9.46964 8.65102 9.70605C8.18132 9.94246 7.64903 10.0248 7.12987 9.94121C6.6107 9.85767 6.1311 9.61256 5.75927 9.24073C5.38745 8.8689 5.14233 8.3893 5.05879 7.87014C4.97525 7.35098 5.05754 6.81869 5.29395 6.34899C5.53037 5.87929 5.90887 5.49609 6.37562 5.25391C6.84236 5.01172 7.3736 4.92287 7.89375 5.00001C8.42433 5.07868 8.91553 5.32592 9.29481 5.7052C9.67409 6.08447 9.92132 6.57568 10 7.10626Z" stroke="#DA2027" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.9375 4.0625H10.9438" stroke="#DA2027" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_429_175">
                        <rect width="15" height="15" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                        </span>
                        <span><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.25 1.25H9.375C8.5462 1.25 7.75134 1.57924 7.16529 2.16529C6.57924 2.75134 6.25 3.5462 6.25 4.375V6.25H4.375V8.75H6.25V13.75H8.75V8.75H10.625L11.25 6.25H8.75V4.375C8.75 4.20924 8.81585 4.05027 8.93306 3.93306C9.05027 3.81585 9.20924 3.75 9.375 3.75H11.25V1.25Z" stroke="#DA2027" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        </span>
                        <span><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.75 2.00628C14.1515 2.42846 13.4888 2.75135 12.7875 2.96253C12.4111 2.52973 11.9108 2.22297 11.3544 2.08374C10.798 1.94451 10.2122 1.97953 9.6763 2.18407C9.14042 2.3886 8.68028 2.75279 8.35811 3.22736C8.03595 3.70193 7.86731 4.26399 7.875 4.83753V5.46253C6.77665 5.49101 5.6883 5.24742 4.70688 4.75344C3.72546 4.25946 2.88145 3.53043 2.25 2.63128C2.25 2.63128 -0.25 8.25628 5.375 10.7563C4.08783 11.63 2.55447 12.0681 1 12.0063C6.625 15.1313 13.5 12.0063 13.5 4.81878C13.4994 4.64469 13.4827 4.47103 13.45 4.30003C14.0879 3.67097 14.538 2.87673 14.75 2.00628Z" stroke="#DA2027" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        </span>
                        <span><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_429_183)">
                        <path d="M10 5C10.9946 5 11.9484 5.39509 12.6517 6.09835C13.3549 6.80161 13.75 7.75544 13.75 8.75V13.125H11.25V8.75C11.25 8.41848 11.1183 8.10054 10.8839 7.86612C10.6495 7.6317 10.3315 7.5 10 7.5C9.66848 7.5 9.35054 7.6317 9.11612 7.86612C8.8817 8.10054 8.75 8.41848 8.75 8.75V13.125H6.25V8.75C6.25 7.75544 6.64509 6.80161 7.34835 6.09835C8.05161 5.39509 9.00544 5 10 5Z" stroke="#DA2027" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3.75 5.625H1.25V13.125H3.75V5.625Z" stroke="#DA2027" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2.5 3.75C3.19036 3.75 3.75 3.19036 3.75 2.5C3.75 1.80964 3.19036 1.25 2.5 1.25C1.80964 1.25 1.25 1.80964 1.25 2.5C1.25 3.19036 1.80964 3.75 2.5 3.75Z" stroke="#DA2027" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_429_183">
                        <rect width="15" height="15" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                        </span>
                        <span><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_429_187)">
                        <path d="M14.0875 4.0125C14.0133 3.71588 13.8621 3.44411 13.6492 3.22463C13.4363 3.00515 13.1692 2.84574 12.875 2.7625C11.8 2.5 7.5 2.5 7.5 2.5C7.5 2.5 3.2 2.5 2.125 2.7875C1.83078 2.87074 1.56373 3.03015 1.35084 3.24963C1.13795 3.46911 0.986742 3.74088 0.912499 4.0375C0.715758 5.12847 0.619521 6.23519 0.624999 7.34375C0.617986 8.46065 0.714229 9.57581 0.912499 10.675C0.994348 10.9624 1.14894 11.2238 1.36134 11.434C1.57374 11.6443 1.83676 11.7961 2.125 11.875C3.2 12.1625 7.5 12.1625 7.5 12.1625C7.5 12.1625 11.8 12.1625 12.875 11.875C13.1692 11.7918 13.4363 11.6323 13.6492 11.4129C13.8621 11.1934 14.0133 10.9216 14.0875 10.625C14.2827 9.54224 14.379 8.44396 14.375 7.34375C14.382 6.22685 14.2858 5.11169 14.0875 4.0125Z" stroke="#DA2027" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.09375 9.38749L9.6875 7.34374L6.09375 5.29999V9.38749Z" stroke="#DA2027" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_429_187">
                        <rect width="15" height="15" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                        </span>
                    </div>
                    <div class="telif-hakkında">
                    <p class="telif-hakkında__metin1">&copy; Copyright 2026 Haber7 Gazetecilik ve Matbaacılık A.Ş</p>
                    <p class="telif-hakkında__metin2">Kullanım Koşulları,Gizlilik Politikası,İletişim için bu linkleri kullanabilirsiniz. Login olduğunuz taktirde kullanım koşullarını ve gizlilik politikasını kabul etmiş olursunuz.</p>
                    </div>
                    <div class="market-butonlari">
                        <img src="images/app-store.png">
                        <img src="images/google-play.png">
                    </div>
                </div>
            </div>
        </div>

<header class="ust-bar">
            <button class="burger-menu-btn" id="menuAcBtn"><svg width="24" height="24"  xmlns="http://www.w3.org/2000/svg">
            <path d="M17 10H3" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M21 6H3" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M21 14H3" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M17 18H3" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </button>
            <div class="header-title">
                <?php echo isset($pageTitle) ? $pageTitle : 'Haber7'; ?>
            </div>
            <div class="ust-ikonlar">
                <span class="canli-yayin-ikonu"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 7H4C2.89543 7 2 7.89543 2 9V20C2 21.1046 2.89543 22 4 22H20C21.1046 22 22 21.1046 22 20V9C22 7.89543 21.1046 7 20 7Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17 2L12 7L7 2" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </span>
                <span class="bildirim-ikonu"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M13.73 21C13.5542 21.3031 13.3018 21.5547 12.9982 21.7295C12.6946 21.9044 12.3504 21.9965 12 21.9965C11.6496 21.9965 11.3054 21.9044 11.0018 21.7295C10.6981 21.5547 10.4458 21.3031 10.27 21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </span>
            </div>
        </header>