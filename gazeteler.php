<?php 
$pageTitle = "Gazete"; 
include 'header.php'
 ?> 

<main class="gazete-icerik-alani">

            <div class="gazete-stack-wrapper">
                <div class="gazete-container" id="gazeteContainer">
                    <div class="gazete-item">
                        <img src="images/gazetepage.png" alt="Gazete Sayfa 1">
                    </div>
                    <div class="gazete-item">
                        <img src="images/gazetepage.png" alt="Gazete Sayfa 2">
                    </div>
                    <div class="gazete-item">
                        <img src="images/gazetepage.png" alt="Gazete Sayfa 3">
                    </div>
                    <div class="gazete-item">
                        <img src="images/gazetepage.png" alt="Gazete Sayfa 4">
                    </div>

                </div>
            </div>

            <div class="gazete-nav-buttons">
                <button class="gazete-btn" id="prevBtn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#e11d48" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
                </button>
                <button class="gazete-btn" id="nextBtn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#e11d48" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                </button>
            </div>

        </main>

        <?php include 'footer.php' ?>