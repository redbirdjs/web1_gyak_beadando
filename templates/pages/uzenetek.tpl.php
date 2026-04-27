<?php
    require "includes/db.php";

    try {
        $stmt = $dbh->prepare("SELECT * FROM uzenetek ORDER BY datum DESC");
        $stmt->execute();
        $uzenetek = $stmt->fetchAll();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
?>
<main>
    <h2>Üzenetek</h2>
    <hr>

    <?php if (count($uzenetek) === 0): ?>
        <p class="no_message">Nincsenek még üzenetek!</p>
    <?php endif; ?>
    <?php foreach ($uzenetek as $uzenet): ?>
        <div class="message">
            <p><?= htmlspecialchars($uzenet['uzenet']) ?></p>
            <p><?= $uzenet['kuldo'] ?> <span>•</span> <?= $uzenet['datum'] ?></p>
        </div>
    <?php endforeach; ?>
</main>
