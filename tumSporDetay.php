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



</main>

</div>
</body>
</html>

