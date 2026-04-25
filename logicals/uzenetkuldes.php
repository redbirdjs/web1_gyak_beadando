<?php
require "includes/db.php";

if ($_SERVER["REQUEST_METHOD"] != "POST" || !isset($_POST["uzenet"]) || strlen($_POST["uzenet"]) < 1) {
    header('Location: /kapcsolat');
    return;
}
if (isset($_SESSION['login'])) {
    $nev = trim($_SESSION['un']) . " " . trim($_SESSION['csn']);
} else {
    $nev = "Vendég";
}

try {
    $ido = date("Y-m-d H:i:s");

    $stmt = $dbh->prepare("INSERT INTO uzenetek (uzenet, kuldo, datum) VALUES (?, ?, ?)");
    $stmt->execute([$_POST['uzenet'], $nev, $ido]);
} catch (PDOException $e) {
    die($e->getMessage());
}
?>
