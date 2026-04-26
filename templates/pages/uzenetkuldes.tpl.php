<h2>Üzenet sikeresen elküldve!</h2>
<hr>
<h3>Üzenet adatai:</h3>
<div class="elrendezes">
    <div class="message">
        <p><?= htmlspecialchars($_POST['uzenet']) ?></p>
        <p class="adatok"><?= $nev ?> <span>•</span> <?= $ido ?></p>
    </div>
    <?php if (isset($_SESSION['login'])): ?>
        <a href="/uzenetek"><button class="btn">Ugrás az üzenetekre</button></a>
    <?php else: ?>
        <a href="/"><button class="btn">Vissza a főoldalra</button></a>
    <?php endif; ?>
</div>
