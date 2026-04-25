<?php
require "includes/db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!isset($_POST["nev"]) || !isset($_POST["kategoria"])) {
    header("Location: /crud-uj");
    return;
  }

  $stmt = $dbh->prepare("INSERT INTO szoftver(nev, kategoria) values(?, ?)");
  $stmt->execute([ $_POST["nev"], $_POST["kategoria"] ]);

  header("Location: /crud");
  return;
}
?>