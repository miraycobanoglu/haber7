
            <?php 
            $pageTitle = '
                <img src="images/logo.png" alt="Haber7 Logo" class="site-logo site-logo--light">
                <img src="images/logo-dark.png" alt="Haber7 Logo" class="site-logo site-logo--dark">
            '; 
        include 'header.php'; 
        ?>

        <main class="ana-icerik" id="mainScreen">

            <div class="son-dakika-bandi">
                <span class="etiket">SON DAKİKA</span>
                <div class="son-dakika-kayan-alan">
                <p>Muğla'da korkutan deprem!</p>
                </div>
            </div>

            <section class="manset-alani">
                <div class="manset-kart" id="manset-kart-slider">
                    <img src="images/Manşet.png" alt="Manset" class="manset-gorsel" >
                    <img src="images/Manşet.png" alt="Manset" class="manset-gorsel" >
                    <img src="images/Manşet.png" alt="Manset" class="manset-gorsel" >
                    <img src="images/Manşet.png" alt="Manset" class="manset-gorsel" >
                </div>
                 <div class="foto-sayac">
                    <span id="aktifIndex">1</span>
                    <span>/</span>
                    <span class="toplam-foto" id="toplamFoto"></span>
                </div>
            </section>

            <section class="piyasa-alani">
                <div class="piyasa-kutu">
                    <span class="dolar"><svg width="10" height="17" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.81113 16V14.4605C3.01193 14.3627 2.28429 14.1245 1.62823 13.7457C0.984095 13.3547 0.441352 12.8477 0 12.2245L0.984096 11.1249C1.41352 11.6869 1.84891 12.1329 2.29026 12.4628C2.74354 12.7805 3.2505 12.9882 3.81113 13.0859V8.41237C2.7495 8.11913 1.9503 7.69149 1.41352 7.12944C0.87674 6.55517 0.60835 5.80374 0.60835 4.87514C0.60835 4.23979 0.763419 3.67774 1.07356 3.189C1.3837 2.68805 1.80716 2.27873 2.34394 1.96105C2.89264 1.64338 3.51292 1.45399 4.20477 1.3929V0H5.51093V1.41123C6.27435 1.50897 6.93042 1.74112 7.47913 2.10767C8.02783 2.46201 8.47515 2.90798 8.82107 3.44559L7.81909 4.47194C7.5328 4.04429 7.19881 3.68996 6.8171 3.40894C6.43539 3.11569 6 2.91409 5.51093 2.80412V7.27606C6.60835 7.58152 7.46123 8.01527 8.06958 8.57732C8.68986 9.12715 9 9.84192 9 10.7216C9 11.4181 8.83897 12.0412 8.5169 12.5911C8.19483 13.1287 7.74155 13.5624 7.15706 13.8923C6.57256 14.2222 5.89264 14.4238 5.1173 14.4971V16H3.81113ZM2.03976 4.83849C2.03976 5.35166 2.2008 5.76709 2.52286 6.08477C2.85686 6.40244 3.41749 6.67736 4.20477 6.90951V2.74914C3.56064 2.82245 3.03579 3.0546 2.63022 3.44559C2.23658 3.82436 2.03976 4.28866 2.03976 4.83849ZM7.56859 10.9966C7.56859 10.4101 7.36581 9.94578 6.96024 9.60367C6.55467 9.26155 5.94036 8.97442 5.1173 8.74227V13.1409C5.82107 13.0676 6.40557 12.8354 6.87078 12.4444C7.33598 12.0535 7.56859 11.5708 7.56859 10.9966Z" fill="black"/>
</svg>

                        </svg>
                    </span> 
                    <span class="artisAzalis-icon" id="dovizIconContainer">
                        <div class="artis-icon">
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 4.90274L5 1L1 4.90274" fill="#63CE94"/>
                        <path d="M9 4.90274L5 1L1 4.90274" stroke="#63CE94" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <line x1="1.12365" y1="4.90274" x2="9.12365" y2="4.90274" stroke="#63CE94" stroke-width="2"/>
                        </svg>
                        </div>
                        <div class="azalis-icon"> 
                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.07295L5.03542 4.93906L8.99967 1.00001" fill="#DA2027"/>
                            <path d="M1 1.07295L5.03542 4.93906L8.99967 1.00001" stroke="#DA2027" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <line x1="8.87603" y1="1.00115" x2="0.876363" y2="1.07409" stroke="#DA2027" stroke-width="2"/>
                            </svg>

                        </div>

                    </span>
                    <strong class="dolar-fiyat" id="dolarFiyat"></strong>
                </div>
                <div class="havaDurumu-kutu">
                    <div class="hava-durumu-kutu__flex">
                    <div class="havaDurumu-kutu__gorsel">
                        <img id="havaDurumuIkon" src="" alt="Hava Durumu" width="27" height="20">
                        <p class="havaDurumu-kutu__gorsel-derece" id="havaDerece"></p>
                    </div>
                    <div class="havaDurumu-kutu__sehir">
                        <select id="sehirSecim" class="sehir-select">
                            <option value="Istanbul" selected>İstanbul</option>
                            <option value="Ankara">Ankara</option>
                            <option value="Izmir">İzmir</option>
                            <option value="Antalya">Antalya</option>
                            <option value="Bursa">Bursa</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="namaz-vakti" id="namazVaktiAlani" style="cursor: pointer;">
                    <span><svg width="30" height="30" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1347_677)">
<path d="M17 34C26.3888 34 34 26.3888 34 17C34 7.61116 26.3888 0 17 0C7.61116 0 0 7.61116 0 17C0 26.3888 7.61116 34 17 34Z" fill="#87D7F5"/>
<path d="M13.5634 12.4363H12.4048H12.1606H10.977H10.057C9.56842 12.4363 9.17231 12.0402 9.17231 11.5516C9.17231 11.063 8.7762 10.6669 8.28758 10.6669H4.83598C4.35958 10.6669 3.94966 11.033 3.92728 11.5088C3.90337 12.0169 4.30818 12.4363 4.81101 12.4363H6.20408C6.68048 12.4363 7.09041 12.8024 7.11278 13.2783C7.13669 13.7864 6.73188 14.2058 6.22905 14.2058H2.9102C2.4338 14.2058 2.02387 14.5719 2.0015 15.0478C1.97759 15.5558 2.3824 15.9753 2.88523 15.9753H11.2759C11.7645 15.9753 12.1607 15.5791 12.1607 15.0905C12.1607 14.6019 12.5568 14.2058 13.0454 14.2058H13.5884C14.0912 14.2058 14.496 13.7864 14.4721 13.2783C14.4497 12.8024 14.0398 12.4363 13.5634 12.4363Z" fill="#BAEAF7"/>
<path d="M23.0012 1.09082H21.2381C20.7495 1.09082 20.3534 1.48693 20.3534 1.97555C20.3534 2.46417 20.7495 2.86028 21.2381 2.86028H24.3394C24.828 2.86028 25.2241 3.25639 25.2241 3.74501C25.2241 4.23363 24.828 4.62974 24.3394 4.62974H21.4738H17.0776C16.589 4.62974 16.1929 5.02585 16.1929 5.51447C16.1929 6.00309 16.589 6.3992 17.0776 6.3992H21.4738H25.1013C25.59 6.3992 25.9861 6.79531 25.9861 7.28393C25.9861 7.77255 25.59 8.16866 25.1013 8.16866H24.7287C24.2401 8.16866 23.844 8.56477 23.844 9.05339C23.844 9.54201 24.2401 9.93812 24.7287 9.93812H32.4676C30.6109 5.87791 27.2026 2.67647 23.0012 1.09082Z" fill="#BAEAF7"/>
<path d="M17 16.3313H15.5814H11.3783V25.9062C11.6819 25.9062 22.2639 25.9062 22.6217 25.9062V16.3313H17Z" fill="#EBE4DD"/>
<path d="M12.0907 16.3313H11.9109H11.3783V25.9062C11.8993 25.9062 12.2773 25.9062 12.803 25.9062V16.3313H12.0907Z" fill="#D8CCBC"/>
<path d="M17 16.3313H15.5814H11.3783V18.1214C12.6261 18.1214 21.3568 18.1214 22.6217 18.1214V16.3313H17Z" fill="#D8CCBC"/>
<path d="M12.8032 16.3313H12.0908H11.9111H11.3784V18.1214H12.8032V16.3313Z" fill="#C6B6A5"/>
<path d="M10.4484 17.2203C10.7338 17.2203 10.965 17.4516 10.965 17.737V19.3102C10.965 19.5956 10.7338 19.8268 10.4484 19.8268C10.1631 19.8268 9.93176 19.5956 9.93176 19.3102V17.737C9.93176 17.4516 10.1631 17.2203 10.4484 17.2203Z" fill="#C6B6A5"/>
<path d="M8.03313 13.7368H6.1731V25.9064H8.03313V13.7368Z" fill="#EBE4DD"/>
<path d="M7.10278 13.7368H6.1731V25.9064H7.10278V13.7368Z" fill="#D8CCBC"/>
<path d="M11.3787 18.9258H9.51868V25.9057H11.3787V18.9258Z" fill="#C6B6A5"/>
<path d="M11.3787 22.3245H9.51868V25.9064H11.3787V22.3245Z" fill="#BFA993"/>
<path d="M11.3783 18.926H9.51843C9.5952 18.4691 9.98221 18.1215 10.4484 18.1215C10.9146 18.1215 11.3014 18.4691 11.3783 18.926Z" fill="#888889"/>
<path d="M7.10319 19.9762C7.38854 19.9762 7.61983 20.2075 7.61983 20.4928V22.0661C7.61983 22.3514 7.38854 22.5827 7.10319 22.5827C6.81784 22.5827 6.58655 22.3514 6.58655 22.0661V20.4928C6.58655 20.2075 6.81784 19.9762 7.10319 19.9762Z" fill="#C6B6A5"/>
<path d="M9.51801 23.369H4.68762V25.2886H9.51801V23.369Z" fill="#D8CCBC"/>
<path d="M6.58631 23.369H4.68762V25.2886H6.58631V23.369Z" fill="#C6B6A5"/>
<path d="M9.51833 23.369H4.68774C4.88716 22.1823 5.89229 21.2794 7.10301 21.2794C8.31372 21.2794 9.31892 22.1823 9.51833 23.369Z" fill="#888889"/>
<path d="M8.05247 21.4758C7.76048 21.3495 7.43981 21.2795 7.10313 21.2795C5.89234 21.2795 4.88728 22.1824 4.68787 23.3691H6.58655C6.73046 22.5124 7.29444 21.8038 8.05247 21.4758Z" fill="#79797A"/>
<path d="M6.15715 17.5938H8.04064H8.49632C8.58358 17.5938 8.6448 17.6798 8.61618 17.7623L8.02875 19.4537H7.39464H6.80309H6.16897L5.59104 17.7897C5.55777 17.6939 5.62896 17.5938 5.73036 17.5938L6.15715 17.5938Z" fill="#D8CCBC"/>
<path d="M6.06986 23.9854C6.35521 23.9854 6.5865 24.2166 6.5865 24.502V25.2886H5.55322V24.502C5.55322 24.2166 5.78452 23.9854 6.06986 23.9854Z" fill="#BFA993"/>
<path d="M8.13639 23.9854C8.42174 23.9854 8.65303 24.2166 8.65303 24.502V25.2886H7.61975V24.502C7.61982 24.2166 7.85104 23.9854 8.13639 23.9854Z" fill="#BFA993"/>
<path d="M23.5517 17.2205C23.2663 17.2205 23.035 17.4518 23.035 17.7371V19.3103C23.035 19.5957 23.2663 19.827 23.5517 19.827C23.837 19.827 24.0683 19.5957 24.0683 19.3103V17.7371C24.0683 17.4518 23.837 17.2205 23.5517 17.2205Z" fill="#C6B6A5"/>
<path d="M16.9655 9.21301C16.6801 9.21301 16.4489 9.44431 16.4489 9.72965V11.3029C16.4489 11.5882 16.6801 11.8195 16.9655 11.8195C17.2508 11.8195 17.4821 11.5882 17.4821 11.3029V9.72965C17.4821 9.44431 17.2509 9.21301 16.9655 9.21301Z" fill="#79797A"/>
<path d="M11.6014 16.3314H22.3295C21.8866 13.769 19.6544 11.8195 16.9655 11.8195C14.2765 11.8195 12.0444 13.769 11.6014 16.3314Z" fill="#888889"/>
<path d="M12.7081 16.3314H21.2918C20.9374 13.769 19.1514 11.8195 17 11.8195C14.8485 11.8195 13.0625 13.769 12.7081 16.3314Z" fill="#79797A"/>
<path d="M13.853 16.3314H20.147C19.8871 13.769 18.5775 11.8195 17 11.8195C15.4225 11.8195 14.1129 13.769 13.853 16.3314Z" fill="#888889"/>
<path d="M14.9559 16.3314H18.9752C18.8092 13.769 17.973 11.8195 16.9655 11.8195C15.9581 11.8195 15.1219 13.769 14.9559 16.3314Z" fill="#79797A"/>
<path d="M16.2373 16.3314H17.7628C17.6998 13.769 17.3824 11.8195 17 11.8195C16.6177 11.8195 16.3003 13.769 16.2373 16.3314Z" fill="#888889"/>
<path d="M17 18.7659C14.8944 18.7825 13.1506 20.314 12.8031 22.3243C14.4361 22.3243 19.1802 22.3243 21.197 22.3243C20.8495 20.314 19.1057 18.7825 17 18.7659Z" fill="#888889"/>
<path d="M17.807 18.8487C17.5457 18.7968 17.2761 18.7679 17.0001 18.7657C14.8944 18.7823 13.1506 20.3139 12.8031 22.3241H14.4169C14.7189 20.5774 16.0752 19.1928 17.807 18.8487Z" fill="#79797A"/>
<path d="M22.6373 16.8479H11.2937C11.0084 16.8479 10.7771 16.6166 10.7771 16.3312C10.7771 16.0459 11.0084 15.8146 11.2937 15.8146H22.6374C22.9227 15.8146 23.154 16.0459 23.154 16.3312C23.1539 16.6166 22.9227 16.8479 22.6373 16.8479Z" fill="#C6B6A5"/>
<path d="M12.3614 16.3312C12.3614 16.0459 12.5926 15.8146 12.8781 15.8146H11.2937C11.0084 15.8146 10.7771 16.0459 10.7771 16.3312C10.7771 16.6166 11.0084 16.8479 11.2937 16.8479H12.8781C12.5926 16.8479 12.3614 16.6166 12.3614 16.3312Z" fill="#BFA993"/>
<path d="M27.8268 13.7368H25.9668V25.9064H27.8268V13.7368Z" fill="#EBE4DD"/>
<path d="M26.8965 13.7368H25.9668V25.9064H26.8965V13.7368Z" fill="#D8CCBC"/>
<path d="M8.03313 13.7368H6.1731V15.1997H8.03313V13.7368Z" fill="#D8CCBC"/>
<path d="M7.10278 13.7368H6.1731V15.1997H7.10278V13.7368Z" fill="#C6B6A5"/>
<path d="M27.8268 13.7368H25.9668V15.1997H27.8268V13.7368Z" fill="#D8CCBC"/>
<path d="M26.8965 13.7368H25.9668V15.1997H26.8965V13.7368Z" fill="#C6B6A5"/>
<path d="M24.482 18.9258H22.6219V25.9057H24.482V18.9258Z" fill="#D8CCBC"/>
<path d="M24.482 22.3245H22.6219V25.9064H24.482V22.3245Z" fill="#C6B6A5"/>
<path d="M12.8031 22.3242V25.9061C15.4649 25.9061 18.5352 25.9061 21.197 25.9061V22.3242C19.9581 22.3242 14.1106 22.3242 12.8031 22.3242Z" fill="#D8CCBC"/>
<path d="M12.8031 22.3242V25.9061C13.3723 25.9061 13.8519 25.9061 14.4169 25.9061V22.3242C13.8576 22.3242 13.406 22.3242 12.8031 22.3242Z" fill="#C6B6A5"/>
<path d="M31.5465 25.2886C30.7124 25.2886 3.23443 25.2886 2.45349 25.2886V25.8022C4.44017 29.0784 7.50236 31.6298 11.1504 32.9668C11.7978 32.9668 22.1991 32.9668 22.8497 32.9668C26.4977 31.6299 29.5599 29.0784 31.5465 25.8022V25.2886Z" fill="#EBE4DD"/>
<path d="M9.51845 25.2886H2.45349V25.8022C4.13616 28.5769 6.5904 30.8316 9.51845 32.269V25.2886Z" fill="#D8CCBC"/>
<path d="M2.45349 25.2886V25.8022C2.71978 26.2412 3.00599 26.6668 3.30973 27.0787C4.77505 27.0787 29.2005 27.0787 30.6904 27.0787C30.9941 26.6668 31.2803 26.2412 31.5466 25.8022V25.2886C30.7124 25.2886 3.2345 25.2886 2.45349 25.2886Z" fill="#D8CCBC"/>
<path d="M9.51845 25.2886H2.45349V25.8022C2.71978 26.2412 3.00599 26.6668 3.30973 27.0787H9.51845V25.2886V25.2886Z" fill="#C6B6A5"/>
<path d="M22.6217 18.926H24.4815C24.4048 18.4691 24.0178 18.1215 23.5516 18.1215C23.0854 18.1215 22.6985 18.4691 22.6217 18.926Z" fill="#888889"/>
<path d="M16.0356 11.8986H17.8955C17.8187 11.4418 17.4317 11.0941 16.9655 11.0941C16.4994 11.0941 16.1125 11.4418 16.0356 11.8986Z" fill="#CBD0D1"/>
<path d="M17.4804 11.2522C17.3322 11.1528 17.1558 11.0941 16.9656 11.0941C16.4994 11.0941 16.1125 11.4418 16.0356 11.8986H17.0652C17.1107 11.6281 17.2654 11.3967 17.4804 11.2522Z" fill="#B3BBBC"/>
<path d="M26.8969 19.9762C26.6115 19.9762 26.3802 20.2075 26.3802 20.4928V22.0661C26.3802 22.3514 26.6115 22.5827 26.8969 22.5827C27.1822 22.5827 27.4135 22.3514 27.4135 22.0661V20.4928C27.4135 20.2075 27.1822 19.9762 26.8969 19.9762Z" fill="#C6B6A5"/>
<path d="M29.3117 23.369H24.4813V25.2886H29.3117V23.369Z" fill="#D8CCBC"/>
<path d="M26.38 23.369H24.4813V25.2886H26.38V23.369Z" fill="#C6B6A5"/>
<path d="M24.4816 23.369H29.3122C29.1127 22.1823 28.1076 21.2794 26.8968 21.2794C25.6861 21.2795 24.681 22.1823 24.4816 23.369Z" fill="#888889"/>
<path d="M27.8462 21.4758C27.5542 21.3495 27.2335 21.2795 26.8968 21.2795C25.6861 21.2795 24.681 22.1824 24.4816 23.3691H26.3803C26.5242 22.5124 27.0881 21.8038 27.8462 21.4758Z" fill="#79797A"/>
<path d="M27.8428 17.5938H25.9594H25.5037C25.4164 17.5938 25.3552 17.6798 25.3838 17.7623L25.9713 19.4537H26.6054H27.1969H27.831L28.409 17.7897C28.4422 17.6939 28.3711 17.5938 28.2696 17.5938L27.8428 17.5938Z" fill="#D8CCBC"/>
<path d="M26.9203 17.5938H25.9593H25.5036C25.4163 17.5938 25.3551 17.6798 25.3837 17.7622L25.9711 19.4536H26.6052H27.1967H27.3878L26.8004 17.7622C26.7718 17.6798 26.833 17.5938 26.9203 17.5938Z" fill="#C6B6A5"/>
<path d="M27.9302 23.9854C27.6449 23.9854 27.4136 24.2166 27.4136 24.502V25.2886H28.4469V24.502C28.4469 24.2166 28.2156 23.9854 27.9302 23.9854Z" fill="#BFA993"/>
<path d="M25.8636 23.9854C25.5782 23.9854 25.3469 24.2166 25.3469 24.502V25.2886H26.3802V24.502C26.3802 24.2166 26.149 23.9854 25.8636 23.9854Z" fill="#BFA993"/>
<path d="M11.8545 28.7015C11.1468 28.7015 10.5732 29.2751 10.5732 29.9828V31.9335H13.1357V29.9828C13.1357 29.2751 12.5622 28.7015 11.8545 28.7015Z" fill="#BFA993"/>
<path d="M12.4951 28.8743C12.3065 28.7651 12.0882 28.7015 11.8545 28.7015C11.1468 28.7015 10.5732 29.2751 10.5732 29.9828V31.9335H11.8545V29.9828C11.8545 29.5087 12.1125 29.0959 12.4951 28.8743Z" fill="#AA927D"/>
<path d="M17 23.0898C16.7147 23.0898 16.4834 23.3211 16.4834 23.6065V25.2886H17.5167V23.6065C17.5167 23.3211 17.2854 23.0898 17 23.0898Z" fill="#BFA993"/>
<path d="M14.9335 23.0898C14.6482 23.0898 14.4169 23.3211 14.4169 23.6065V25.2886H15.4502V23.6065C15.4502 23.3211 15.2189 23.0898 14.9335 23.0898Z" fill="#BFA993"/>
<path d="M19.0666 23.0898C18.7812 23.0898 18.5499 23.3211 18.5499 23.6065V25.2886H19.5832V23.6065C19.5832 23.3211 19.3519 23.0898 19.0666 23.0898Z" fill="#BFA993"/>
<path d="M0.593628 21.46C1.01258 23.0048 1.64324 24.4624 2.45347 25.7993V10.6829H0.593628V21.46Z" fill="#EBE4DD"/>
<path d="M1.52346 24.0383V10.6829H0.593506V21.46C0.835025 22.3506 1.14733 23.2121 1.52346 24.0383Z" fill="#D8CCBC"/>
<path d="M0.581408 16.1582H2.46489H2.92057C3.00783 16.1582 3.06905 16.2443 3.04043 16.3267L2.453 18.018H1.81889H1.22734H0.593294L0.0153607 16.3541C-0.0179088 16.2583 0.0532123 16.1582 0.154681 16.1582H0.581408Z" fill="#D8CCBC"/>
<path d="M7.14152 17.5938H6.15711H5.73039C5.62892 17.5938 5.55773 17.6938 5.59107 17.7896L6.169 19.4536H6.80311H7.39466H7.58013L7.0022 17.7896C6.96893 17.6938 7.04012 17.5938 7.14152 17.5938Z" fill="#C6B6A5"/>
<path d="M1.56584 16.1582H0.581431H0.154704C0.0532356 16.1582 -0.0179519 16.2583 0.015384 16.3541L0.593318 18.018H1.22743H1.81898H2.00445L1.42652 16.3541C1.39318 16.2583 1.46437 16.1582 1.56584 16.1582Z" fill="#C6B6A5"/>
<path d="M2.87578 23.3989H2.46486H1.2467C1.50708 24.0393 1.80531 24.6601 2.13874 25.2588H2.45304L3.02573 23.6097C3.06159 23.5066 2.98502 23.3989 2.87578 23.3989Z" fill="#D8CCBC"/>
<path d="M31.5465 25.7993C32.3568 24.4625 32.9875 23.0049 33.4064 21.4601V10.6829H31.5465V25.7993Z" fill="#EBE4DD"/>
<path d="M32.4765 10.6829H31.5465V25.7993C31.8896 25.2332 32.2002 24.6452 32.4765 24.0383V10.6829Z" fill="#D8CCBC"/>
<path d="M10.8924 31.9336H8.87048C9.59976 32.3314 10.3613 32.6777 11.1503 32.9669C12.1341 32.9669 23.4196 32.9669 22.8497 32.9669C23.6387 32.6777 24.4003 32.3315 25.1295 31.9336C23.2832 31.9336 12.4255 31.9336 10.8924 31.9336Z" fill="#E0E2E2"/>
<path d="M11.1503 32.9668C12.9742 33.6352 14.9444 34.0001 16.9999 34.0001C19.0554 34.0001 21.0257 33.6352 22.8496 32.9668C21.4016 32.9668 12.6677 32.9668 11.1503 32.9668Z" fill="#CBD0D1"/>
<path d="M33.4185 16.1582H31.5351H31.0794C30.9921 16.1582 30.9309 16.2443 30.9595 16.3267L31.5469 18.018H32.181H32.7725H33.4066L33.9846 16.3541C34.0178 16.2583 33.9467 16.1582 33.8453 16.1582H33.4185Z" fill="#D8CCBC"/>
<path d="M32.4287 16.1582H31.5351H31.0794C30.9921 16.1582 30.9309 16.2443 30.9595 16.3267L31.5469 18.018H32.181H32.7725H32.8963L32.3089 16.3267C32.2803 16.2443 32.3415 16.1582 32.4287 16.1582Z" fill="#C6B6A5"/>
<path d="M31.5352 23.3988H31.1242C31.015 23.3988 30.9384 23.5065 30.9742 23.6096L31.5469 25.2587H31.8612C32.1946 24.6601 32.4928 24.0392 32.7532 23.3989H31.5352V23.3988V23.3988Z" fill="#C6B6A5"/>
<path d="M7.10307 9.21301C7.38841 9.21301 7.61971 9.44431 7.61971 9.72965V9.86167V10.5103V10.6542V11.3029V11.4349C7.61971 11.7202 7.38841 11.9515 7.10307 11.9515C6.81772 11.9515 6.58643 11.7202 6.58643 11.4349V11.3029V10.6542V10.5103V9.86167V9.72965C6.58649 9.44431 6.81772 9.21301 7.10307 9.21301Z" fill="#79797A"/>
<path d="M5.73266 12.9586L6.60258 10.4539H7.60379L8.47378 12.9586C8.54297 13.0466 8.58461 13.1572 8.58461 13.2777C8.58461 13.5631 8.35332 13.7944 8.06797 13.7944H6.13847C5.85312 13.7944 5.62183 13.5631 5.62183 13.2777C5.62183 13.1571 5.6634 13.0465 5.73266 12.9586Z" fill="#9DA4A5"/>
<path d="M7.38862 13.7914C7.26424 13.7643 7.16722 13.5447 7.16722 13.2777C7.16722 13.1571 7.18715 13.0464 7.22028 12.9586L7.62629 10.5162L7.60464 10.4539H6.60343L5.73351 12.9586C5.66432 13.0465 5.62268 13.1572 5.62268 13.2777C5.62268 13.5631 5.85397 13.7944 6.13932 13.7944H7.38862V13.7914V13.7914Z" fill="#888889"/>
<path d="M8.06792 13.7943H6.13835C5.853 13.7943 5.6217 13.563 5.6217 13.2777C5.6217 13.1571 5.66334 13.0465 5.73254 12.9586H8.47366C8.54286 13.0465 8.58449 13.1572 8.58449 13.2777C8.58456 13.563 8.35327 13.7943 8.06792 13.7943Z" fill="#888889"/>
<path d="M5.7326 12.9584C5.66334 13.0464 5.6217 13.157 5.6217 13.2775C5.6217 13.4737 5.73101 13.6443 5.89204 13.7318C5.96522 13.7716 6.04916 13.7942 6.13834 13.7942H7.38765V13.7912C7.26327 13.7641 7.16625 13.5445 7.16625 13.2775C7.16625 13.1569 7.18617 13.0463 7.21931 12.9584H5.7326V12.9584Z" fill="#79797A"/>
<path d="M33.4063 10.6827H31.5463V12.1457H33.4063V10.6827Z" fill="#D8CCBC"/>
<path d="M32.476 10.6827H31.5463V12.1457H32.476V10.6827Z" fill="#C6B6A5"/>
<path d="M2.45367 10.6827H0.593628V12.1457H2.45367V10.6827Z" fill="#D8CCBC"/>
<path d="M1.52331 10.6827H0.593628V12.1457H1.52331V10.6827Z" fill="#C6B6A5"/>
<path d="M32.488 5.25244C32.2026 5.25244 31.9713 5.48373 31.9713 5.76908V6.54976V7.34232V8.12299C31.9713 8.40834 32.2026 8.63963 32.488 8.63963C32.7733 8.63963 33.0046 8.40834 33.0046 8.12299V7.34232V6.54976V5.76908C33.0046 5.48373 32.7734 5.25244 32.488 5.25244Z" fill="#79797A"/>
<path d="M33.8585 9.84706L32.9886 7.34229H31.9874L31.1174 9.84706C31.0482 9.93499 31.0066 10.0456 31.0066 10.1661C31.0066 10.4515 31.2379 10.6828 31.5232 10.6828H33.4527C33.7381 10.6828 33.9694 10.4515 33.9694 10.1661C33.9694 10.0456 33.9278 9.93492 33.8585 9.84706Z" fill="#9DA4A5"/>
<path d="M32.4879 10.1661C32.4879 10.0456 32.5087 9.93492 32.5433 9.84706L32.9783 7.34229H31.9873L31.1173 9.84706C31.0481 9.93499 31.0065 10.0456 31.0065 10.1661C31.0065 10.4515 31.2378 10.6828 31.5231 10.6828H32.7462C32.6036 10.6828 32.4879 10.4515 32.4879 10.1661Z" fill="#888889"/>
<path d="M31.5232 10.6828H33.4527C33.7381 10.6828 33.9694 10.4515 33.9694 10.1661C33.9694 10.0455 33.9278 9.9349 33.8585 9.84705H31.1174C31.0482 9.93497 31.0066 10.0456 31.0066 10.1661C31.0066 10.4515 31.2379 10.6828 31.5232 10.6828Z" fill="#888889"/>
<path d="M32.4879 10.1661C32.4879 10.0455 32.5087 9.9349 32.5433 9.84705H31.1173C31.0481 9.93497 31.0065 10.0456 31.0065 10.1661C31.0065 10.3623 31.1158 10.533 31.2768 10.6204C31.3061 10.6364 31.3371 10.6495 31.3694 10.6595C31.418 10.6747 31.4696 10.6828 31.5231 10.6828H32.7462C32.6036 10.6828 32.4879 10.4515 32.4879 10.1661Z" fill="#79797A"/>
<path d="M6.68448 28.7015C6.14281 28.7015 5.68068 29.0381 5.49329 29.5132C6.25636 30.2151 7.08378 30.8481 7.96572 31.4025V29.9828C7.96566 29.2751 7.39211 28.7015 6.68448 28.7015Z" fill="#BFA993"/>
<path d="M6.68448 29.9827C6.68448 29.5087 6.94247 29.0959 7.3251 28.8743C6.64504 28.4804 5.7791 28.7887 5.49329 29.5131C5.87466 29.864 6.27217 30.1976 6.68448 30.5128V29.9827V29.9827Z" fill="#AA927D"/>
<path d="M17 28.7015C16.2923 28.7015 15.7188 29.2751 15.7188 29.9828V31.9335H18.2812V29.9828C18.2812 29.2751 17.7077 28.7015 17 28.7015Z" fill="#BFA993"/>
<path d="M17.6406 28.8743C17.452 28.7651 17.2337 28.7015 17 28.7015C16.2923 28.7015 15.7188 29.2751 15.7188 29.9828V31.9335H17V29.9828C17 29.5087 17.258 29.0959 17.6406 28.8743Z" fill="#AA927D"/>
<path d="M22.1455 28.7015C21.4378 28.7015 20.8643 29.2751 20.8643 29.9828V31.9335H23.4267V29.9828C23.4267 29.2751 22.8532 28.7015 22.1455 28.7015Z" fill="#BFA993"/>
<path d="M22.7861 28.8743C22.5975 28.7651 22.3792 28.7015 22.1455 28.7015C21.4378 28.7015 20.8643 29.2751 20.8643 29.9828V31.9335H22.1455V29.9828C22.1455 29.5087 22.4036 29.0959 22.7861 28.8743Z" fill="#AA927D"/>
<path d="M26.0099 29.9828V31.4178C26.894 30.8642 27.7232 30.2313 28.4883 29.5295C28.3051 29.0459 27.839 28.7015 27.2911 28.7015C26.5834 28.7016 26.0099 29.2752 26.0099 29.9828Z" fill="#BFA993"/>
<path d="M27.2911 29.9827C27.2911 29.5087 27.5491 29.0958 27.9317 28.8742C27.0887 28.3859 26.0099 28.9884 26.0099 29.9827V31.4177C26.451 31.1415 26.8785 30.8455 27.2911 30.5311V29.9827Z" fill="#AA927D"/>
<path d="M1.52348 5.25244C1.23813 5.25244 1.00684 5.48373 1.00684 5.76908V6.54976V7.34232V8.12299C1.00684 8.40834 1.23813 8.63963 1.52348 8.63963C1.80882 8.63963 2.04012 8.40834 2.04012 8.12299V7.34232V6.54976V5.76908C2.04012 5.48373 1.80882 5.25244 1.52348 5.25244Z" fill="#79797A"/>
<path d="M2.89406 9.84706L2.02414 7.34229H1.02287L0.152946 9.84706C0.083751 9.93499 0.0421143 10.0456 0.0421143 10.1661C0.0421143 10.4515 0.273407 10.6828 0.558755 10.6828H2.48826C2.7736 10.6828 3.0049 10.4515 3.0049 10.1661C3.0049 10.0456 2.96326 9.93492 2.89406 9.84706Z" fill="#9DA4A5"/>
<path d="M1.52351 10.1661C1.52351 10.0456 1.54429 9.93492 1.57889 9.84706L2.01385 7.34229H1.02287L0.152946 9.84706C0.083751 9.93499 0.0421143 10.0456 0.0421143 10.1661C0.0421143 10.4515 0.273407 10.6828 0.558755 10.6828H1.78183C1.63912 10.6828 1.52351 10.4515 1.52351 10.1661Z" fill="#888889"/>
<path d="M0.558755 10.6828H2.48826C2.7736 10.6828 3.0049 10.4515 3.0049 10.1661C3.0049 10.0455 2.96326 9.9349 2.89406 9.84705H0.152946C0.083751 9.93497 0.0421143 10.0456 0.0421143 10.1661C0.0421143 10.4515 0.273341 10.6828 0.558755 10.6828Z" fill="#888889"/>
<path d="M1.5235 10.1663C1.5235 10.0457 1.54429 9.93502 1.57889 9.84717H0.152946C0.083751 9.93509 0.0421143 10.0457 0.0421143 10.1663C0.0421143 10.3624 0.151419 10.5331 0.312454 10.6205C0.341739 10.6365 0.372751 10.6496 0.405091 10.6596C0.453634 10.6748 0.505231 10.6829 0.558755 10.6829H1.78183C1.63912 10.6829 1.5235 10.4516 1.5235 10.1663Z" fill="#79797A"/>
<path d="M26.8969 9.21301C27.1822 9.21301 27.4135 9.44431 27.4135 9.72965V9.86167V10.5103V10.6542V11.3029V11.4349C27.4135 11.7202 27.1822 11.9515 26.8969 11.9515C26.6115 11.9515 26.3802 11.7202 26.3802 11.4349V11.3029V10.6542V10.5103V9.86167V9.72965C26.3802 9.44431 26.6115 9.21301 26.8969 9.21301Z" fill="#79797A"/>
<path d="M25.5264 12.9586L26.3963 10.4539H27.3975L28.2675 12.9586C28.3367 13.0466 28.3783 13.1572 28.3783 13.2777C28.3783 13.5631 28.147 13.7944 27.8617 13.7944H25.9322C25.6468 13.7944 25.4155 13.5631 25.4155 13.2777C25.4155 13.1571 25.4572 13.0465 25.5264 12.9586Z" fill="#9DA4A5"/>
<path d="M27.1815 13.7914C27.0571 13.7643 26.9601 13.5447 26.9601 13.2777C26.9601 13.1571 26.98 13.0464 27.0131 12.9586L27.4191 10.5162L27.3975 10.4539H26.3963L25.5264 12.9586C25.4572 13.0465 25.4155 13.1572 25.4155 13.2777C25.4155 13.5631 25.6468 13.7944 25.9322 13.7944H27.1815V13.7914V13.7914Z" fill="#888889"/>
<path d="M27.8617 13.7943H25.9322C25.6468 13.7943 25.4155 13.563 25.4155 13.2777C25.4155 13.1571 25.4571 13.0465 25.5264 12.9586H28.2675C28.3367 13.0465 28.3783 13.1572 28.3783 13.2777C28.3783 13.563 28.147 13.7943 27.8617 13.7943Z" fill="#888889"/>
<path d="M25.5264 12.9584C25.4571 13.0464 25.4155 13.157 25.4155 13.2775C25.4155 13.4737 25.5248 13.6443 25.6859 13.7318C25.759 13.7716 25.8429 13.7942 25.9321 13.7942H27.1814V13.7912C27.057 13.7641 26.96 13.5445 26.96 13.2775C26.96 13.1569 26.9799 13.0463 27.0131 12.9584H25.5264V12.9584V12.9584Z" fill="#79797A"/>
</g>
<defs>
<clipPath id="clip0_1347_677">
<rect width="34" height="34" fill="white"/>
</clipPath>
</defs>
</svg>

                    </span> 
                    <div class="ezan">
                        <strong class="ezan__vakit" id="namazVakitAdi"></strong>
                         <small class="ezan__saat" id="namazVakitSaat"></small>
                    </div>
                    
                </div>
            </section>

            <!-- Son dakika haberleri -->
            <section class="haber-listesi-bolumu">
                <div class="bolum-baslik">
                    <h3>Son Dakika Haberleri</h3>
                     <a href="#" class="tumunu-gor">Tümü</a>
                </div>

            <!-- Slick Slider buradaki grid yapısını ikili ikili kaydıracak -->
            <div class="haber-kartlari-grid">
   
                <div class="haber-karti">
                 <img class="haber-karti__gorsel" src="images/sondakika1.png" alt="Haber">
                    <p class="haber-karti__guncelDurum">Güncel</p>
            <p class="haber-karti__info">Son dakika: Hükümetten kamu işçilerine zam teklifi..</p>
                </div>
                <div class="haber-karti">
                    <img class="haber-karti__gorsel" src="images/sondakika2.png" alt="Haber">
                    <p class="haber-karti__guncelDurum">Güncel</p>
                    <p class="haber-karti__info">BBP'li yönetici ters kelepçeyle gözaltına alınmıştı</p>
             </div>

        <div class="haber-karti">
            <img class="haber-karti__gorsel" src="images/sondakika1.png" alt="Haber">
            <p class="haber-karti__guncelDurum">Güncel</p>
            <p class="haber-karti__info">İstanbul'da beklenen sağanak yağış başladı</p>
        </div>
        <div class="haber-karti">
            <img class="haber-karti__gorsel" src="images/sondakika2.png" alt="Haber">
            <p class="haber-karti__guncelDurum">Güncel</p>
            <p class="haber-karti__info">Merkez Bankası yeni faiz kararını açıkladı</p>
        </div>

        <div class="haber-karti">
            <img class="haber-karti__gorsel" src="images/sondakika1.png" alt="Haber">
            <p class="haber-karti__guncelDurum">Güncel</p>
            <p class="haber-karti__info">Teknoloji devinden çığır açan yapay zeka hamlesi</p>
        </div>
        <div class="haber-karti">
            <img class="haber-karti__gorsel" src="images/sondakika2.png" alt="Haber">
            <p class="haber-karti__guncelDurum">Güncel</p>
            <p class="haber-karti__info">Süper Lig'de haftanın en kritik maçı oynanıyor</p>
        </div>
    </div>
</section>

            <section class="ikinci-manset-alani">
                <div class="banner-slider-wrapper">
                    <div class="banner-slide">
                        <img src="images/Sürmanşet.png" alt="" class="banner-gorsel">
                        <img src="images/Sürmanşet.png" alt="" class="banner-gorsel">
                        <img src="images/Sürmanşet.png" alt="" class="banner-gorsel">
                        <img src="images/Sürmanşet.png" alt="" class="banner-gorsel">
                        <img src="images/Sürmanşet.png" alt="" class="banner-gorsel">
                        <img src="images/Sürmanşet.png" alt="" class="banner-gorsel">
                        <img src="images/Sürmanşet.png" alt="" class="banner-gorsel">
                        <img src="images/Sürmanşet.png" alt="" class="banner-gorsel">
                    </div>
                </div>
            </section>

            <!-- spor bölümü -->
            <section class="spor-bolumu">
                <div class="bolum-baslik tumspor-baslik">
                    <img src="images/tumspor.png" class="tumspor-baslik__gorsel">
                    <a href="tumSpor.php" class="tumunu-gor">Tümü <span class="tumspor-ok"><svg width="7" height="10" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 11.0063L6 6.00315L1 1" stroke="#40761C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </span>
                    </a>
                </div>

    <div class="row spor-grid">
        <div class="col-6">
            <div class="spor-karti">
                <img src="images/fatihterim.png" alt="Fatih Terim">
                <p>Fatih Terim: Galatasaray'da benim hayallerimi</p>
            </div>
        </div>
        <div class="col-6">
            <div class="spor-karti">
                <img src="images/fatihterim.png" alt="Fatih Terim">
                <p>Fatih Terim: Galatasaray'da benim hayallerimi</p>
            </div>
        </div>
        <div class="col-6">
            <div class="spor-karti">
                <img src="images/fatihterim.png" alt="Fatih Terim">
                <p>Fatih Terim: Galatasaray'da benim hayallerimi</p>
            </div>
        </div>
        <div class="col-6">
            <div class="spor-karti">
                <img src="images/fatihterim.png" alt="Fatih Terim">
                <p>Fatih Terim: Galatasaray'da benim hayallerimi</p>
            </div>
        </div>
    </div>
        </section>
        </main>
    

        <!-- popup -->
        <div class="onboarding-overlay" id="onboardingOverlay">
            
            <!-- GİRİŞ 1 -->
            <section class="screen screen--active" data-index="0">
                <div class="onboarding">
                    <div class="onboarding__preview">
                        <img src="images/giris1.png" alt="Giriş 1 Önizleme" class="onboarding__image">
                    </div>
                    <div class="onboarding__aciklama">
                    <div class="onboarding__content">
                        <h2 class="onboarding__title">Diğer haberler için kaydırın.</h2>
                        <p class="onboarding__desc">Önceki ve sonraki haberler için kaydırabilirsin veya ok butonlarına basıp kullanabilirsiniz.</p>
                    </div>
                    <div class="onboarding__footer">
                        <div class="dots">
                            <span class="dots__item dots__item--active"></span>
                            <span class="dots__item"></span>
                            <span class="dots__item"></span>
                        </div>
                        <div class="onboarding__actions">
                            <button class="btn btn--skip skip-action">Atla</button>
                            <button class="btn btn--primary" onclick="nextSlide()">İleri</button>
                        </div>
                    </div>
                </div>
                </div>
            </section>

            <!-- GİRİŞ 2 -->
            <section class="screen" data-index="1">
                <div class="onboarding">
                    <div class="onboarding__logo-area">
                        <img src="images/logo.png" alt="Haber7" class="onboarding__logo">
                    </div>
                    <div class="onboarding__preview preview-2">
                        <img src="images/giris2.png" alt="Giriş 2 Önizleme" class="onboarding__image-2">
                    </div>
                    <div class="onboarding__aciklama">
                    <div class="onboarding__content">
                        <h2 class="onboarding__title2">Açık ve Koyu Görünüm</h2>
                        <p class="onboarding__desc">Görünüm seçimi yapabilir ve metin puntosunu ayarlayabilirsiniz.</p>
                    </div>
                    <div class="onboarding__footer">
                        <div class="dots">
                            <span class="dots__item dots__item--active"></span>
                            <span class="dots__item"></span>
                            <span class="dots__item"></span>
                        </div>
                        <div class="onboarding__actions">
                            <button class="btn btn--skip skip-action">Atla</button>
                            <button class="btn btn--primary" onclick="nextSlide()">İleri</button>
                        </div>
                    </div>
                </div>
                </div>
            </section>

            <!-- GİRİŞ 3 -->
            <section class="screen" data-index="2">
                <div class="onboarding">
                    <div class="onboarding__logo-area">
                        <img src="images/logo.png" alt="Haber7" class="onboarding__logo">
                    </div>
                    <div class="onboarding__preview preview-2">
                        <img src="images/giris3.png" alt="Giriş 3 Önizleme" class="onboarding__image-3">
                    </div>
                    <div class="onboarding__aciklama">
                    <div class="onboarding__content">
                        <h2 class="onboarding__title3">Haberi Keşfet</h2>
                        <p class="onboarding__desc">Görünüm seçimi yapabilir ve metin puntosunu ayarlayabilirsiniz.</p>
                    </div>
                    <div class="onboarding__footer">
                        <div class="dots">
                            <span class="dots__item dots__item--active"></span>
                            <span class="dots__item"></span>
                            <span class="dots__item"></span>
                        </div>
                        <div class="onboarding__actions">
                            <button class="btn btn--skip skip-action">Atla</button>
                            <button class="btn btn--primary" id="finishBtn" onclick="nextSlide()">Başlat</button>
                        </div>
                    </div>
                </div>
                </div>
            </section>

        </div>

<!-- ezan vakti popup -->

<div class="ezan-vakti-modal" id="ezanVaktiModal">
    <div class="ezan-vakti-modal__container">

        <div class="ezan-sehir-bar">
            <div class="ezan-sehir-secim-sarmal">
                <select class="ezan-sehir-select" id="ezanModalSehirSecim">
                    <option value="Istanbul" selected>İstanbul</option>
                    <option value="Ankara">Ankara</option>
                    <option value="Izmir">İzmir</option>
                    <option value="Bursa">Bursa</option>
                </select>
                <svg class="ezan-sehir-ok" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </div>
            <button type="button" class="ezan-modal-kapat" id="ezanModalKapatBtn" aria-label="Kapat">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <div class="ezan-vakti-modal__body">
            <div class="ezan-aktif-kart">
                <div class="ezan-aktif-kart__sol">
                    <div class="ezan-aktif-kart__vakit-baslik">
                        <span class="ezan-hilal-ikon">☾</span>
                        <span id="ezanModalAktifVakitAdi">Yatsı</span>
                    </div>
                    <div class="ezan-aktif-kart__saat-alani">
                        <svg class="ezan-saat-ikon" viewBox="0 0 24 24" fill="none" stroke="#da2027" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span class="ezan-aktif-saat" id="ezanModalAktifSaat">21:43</span>
                    </div>
                    <div class="ezan-aktif-kart__tarih" id="ezanModalMiladiTarih">12 Temmuz Pazartesi</div>
                </div>
                <div class="ezan-aktif-kart__sag">
                    <svg class="ezan-cami-svg" width="105" height="105" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="48" fill="#BFE8FA"/>
                        <path d="M20 38c0-4 4-7 8-6 2-5 8-8 13-5 3-2 8-2 11 1 3-1 6 0 7 2 3 0 5 3 5 6H20z" fill="#E6F6FD" opacity="0.8"/>
                        <path d="M48 28c0-3 3-5 6-4 2-4 6-6 10-4 2-2 6-2 9 1 2-1 5 0 6 2 2 0 4 2 4 5H48z" fill="#E6F6FD" opacity="0.8"/>
                        <rect x="23" y="28" width="3" height="45" fill="#88B8CE"/>
                        <polygon points="23,28 24.5,21 26,28" fill="#88B8CE"/>
                        <rect x="74" y="28" width="3" height="45" fill="#88B8CE"/>
                        <polygon points="74,28 75.5,21 77,28" fill="#88B8CE"/>
                        <rect x="33" y="24" width="3.5" height="48" fill="#A8CADB"/>
                        <polygon points="33,24 34.75,17 36.5,24" fill="#A8CADB"/>
                        <rect x="64" y="24" width="3.5" height="48" fill="#A8CADB"/>
                        <polygon points="64,24 65.75,17 67.5,24" fill="#A8CADB"/>
                        <rect x="28" y="56" width="44" height="26" fill="#DDD5C8"/>
                        <rect x="24" y="66" width="52" height="18" fill="#CFC4B5"/>
                        <rect x="20" y="74" width="60" height="12" fill="#BFAF9E"/>
                        <path d="M46 72c0-3 1.8-5 4-5s4 2 4 5v12h-8V72z" fill="#8C7D6E"/>
                        <path d="M36 74c0-2.2 1.3-4 3-4s3 1.8 3 4v8h-6V74z" fill="#9C8D7E"/>
                        <path d="M58 74c0-2.2 1.3-4 3-4s3 1.8 3 4v8h-6V74z" fill="#9C8D7E"/>
                        <circle cx="34" cy="62" r="2.2" fill="#8C7D6E"/>
                        <circle cx="42" cy="61" r="2.2" fill="#8C7D6E"/>
                        <circle cx="50" cy="60" r="2.2" fill="#8C7D6E"/>
                        <circle cx="58" cy="61" r="2.2" fill="#8C7D6E"/>
                        <circle cx="66" cy="62" r="2.2" fill="#8C7D6E"/>
                        <path d="M26 80c0-2 1-3 2.5-3s2.5 1 2.5 3v4h-5v-4z" fill="#8C7D6E"/>
                        <path d="M70 80c0-2 1-3 2.5-3s2.5 1 2.5 3v4h-5v-4z" fill="#8C7D6E"/>
                        <path d="M30 56c0-7 6-12 13-12v12H30z" fill="#8FAAB8"/>
                        <path d="M57 56c0-7 6-12 13-12v12H57z" fill="#7E9AA8"/>
                        <path d="M37 54c0-10 6-18 13-18s13 8 13 18H37z" fill="#698B9E"/>
                        <line x1="50" y1="36" x2="50" y2="31" stroke="#9A8570" stroke-width="1.2"/>
                        <circle cx="50" cy="30" r="1.5" fill="#9A8570"/>
                        <rect x="25" y="32" width="4" height="42" fill="#C5B8A7"/>
                        <polygon points="25,32 27,22 29,32" fill="#5F7F91"/>
                        <rect x="24" y="44" width="6" height="2" fill="#9A8570"/>
                        <rect x="71" y="32" width="4" height="42" fill="#C5B8A7"/>
                        <polygon points="71,32 73,22 75,32" fill="#5F7F91"/>
                        <rect x="70" y="44" width="6" height="2" fill="#9A8570"/>
                    </svg>
                </div>
            </div>

            <div class="ezan-kalan-kutu">
                <div class="ezan-kalan-kutu__baslik" id="ezanKalanBaslik">İmsak Vaktine Kalan Süre</div>
                <div class="ezan-kalan-kutu__sayac" id="ezanKalanSayac">04:54:36</div>
            </div>

            <div class="ezan-vakitler-bolumu">
                <div class="ezan-vakitler-bolumu__baslik">Vakitler</div>


                <div class="ezan-vakit-satir" data-vakit="İmsak">
                    <div class="ezan-vakit-satir__sol">
                        <span class="ezan-vakit-satir__ikon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2v4M4.93 7.93l2.83 2.83M19.07 7.93l-2.83 2.83M2 18h20M5 18a7 7 0 0 1 14 0"/>
                            </svg>
                        </span>
                        <span class="ezan-vakit-satir__isim">İmsak</span>
                    </div>
                    <span class="ezan-vakit-satir__saat" id="ezanVakitImsak">03:44</span>
                </div>

                <div class="ezan-vakit-satir" data-vakit="Güneş">
                    <div class="ezan-vakit-satir__sol">
                        <span class="ezan-vakit-satir__ikon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 3v3M4 14h16M2 18h20M6 14a6 6 0 0 1 12 0"/>
                            </svg>
                        </span>
                        <span class="ezan-vakit-satir__isim">Güneş</span>
                    </div>
                    <span class="ezan-vakit-satir__saat" id="ezanVakitGunes">05:25</span>
                </div>

                <!-- öğle -->
                <div class="ezan-vakit-satir" data-vakit="Öğle">
                    <div class="ezan-vakit-satir__sol">
                        <span class="ezan-vakit-satir__ikon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="4"/>
                                <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/>
                            </svg>
                        </span>
                        <span class="ezan-vakit-satir__isim">Öğle</span>
                    </div>
                    <span class="ezan-vakit-satir__saat" id="ezanVakitOgle">12:52</span>
                </div>

                <div class="ezan-vakit-satir" data-vakit="İkindi">
                    <div class="ezan-vakit-satir__sol">
                        <span class="ezan-vakit-satir__ikon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 18a5 5 0 0 0-10 0M2 18h20M12 4v4M6.3 7.3l2.8 2.8M17.7 7.3l-2.8 2.8"/>
                            </svg>
                        </span>
                        <span class="ezan-vakit-satir__isim">İkindi</span>
                    </div>
                    <span class="ezan-vakit-satir__saat" id="ezanVakitIkindi">16:42</span>
                </div>

                <div class="ezan-vakit-satir" data-vakit="Akşam">
                    <div class="ezan-vakit-satir__sol">
                        <span class="ezan-vakit-satir__ikon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 18h20M7 18a5 5 0 0 1 10 0M12 9v3M6 9l2 2M18 9l-2 2"/>
                            </svg>
                        </span>
                        <span class="ezan-vakit-satir__isim">Akşam</span>
                    </div>
                    <span class="ezan-vakit-satir__saat" id="ezanVakitAksam">20:09</span>
                </div>

                <div class="ezan-vakit-satir ezan-vakit-satir--aktif" data-vakit="Yatsı">
                    <div class="ezan-vakit-satir__sol">
                        <span class="ezan-vakit-satir__ikon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#da2027" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
                            </svg>
                        </span>
                        <span class="ezan-vakit-satir__isim">Yatsı</span>
                    </div>
                    <span class="ezan-vakit-satir__saat" id="ezanVakitYatsi">21:43</span>
                </div>

            </div>

        </div>

    </div>
</div>




        <?php 
        include 'footer.php'; 
        ?>
