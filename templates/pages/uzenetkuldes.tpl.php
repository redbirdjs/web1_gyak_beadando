<h2>Üzenet sikeresen elküldve!</h2>
<hr>
<p>Üzenet adatai:</p>
<div>
    <p>Küldő: <?= $nev ?></p>
    <p>Üzenet:</p>
    <textarea><?= $_POST['uzenet'] ?></textarea>
    <p>Küldés ideje: <?= $ido ?></p>
    <a href="/uzenetek">Ugrás az üzenetekre</a>
</div>