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

    <?php foreach ($uzenetek as $uzenet): ?>
        <div class="message">
            <p><?= htmlspecialchars($uzenet['uzenet']) ?></p>
            <p><?= $uzenet['kuldo'] ?> <span>•</span> <?= $uzenet['datum'] ?></p>
        </div>
    <?php endforeach; ?>
</main>
