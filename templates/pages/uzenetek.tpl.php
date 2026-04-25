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
    <?php foreach ($uzenetek as $uzenet): ?>
        <div>
            <p><?= $uzenet['uzenet'] ?></p>
            <p><?= $uzenet['kuldo'] ?></p>
            <p><?= $uzenet['datum'] ?></p>
        </div>
    <?php endforeach; ?>
</main>
