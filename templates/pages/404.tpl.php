<?php
$url = explode('&', $_SERVER['QUERY_STRING'])[0];
?>

<div class="container">
    <h2>404</h2>
    <h3><?= $keres['szoveg'] ?></h3>
    <p>Az általad keresett oldal (<?= $url ?>) nem található.</p>
    <a href="/"><button class="btn">Vissza a főoldalra</button></a>
</div>