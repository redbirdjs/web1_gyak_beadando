<?php
require "includes/db.php";

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
      header("Location: /crud");
      return;
    }

    $stmt = $dbh->prepare("SELECT * FROM szoftver WHERE id = ?");
    $stmt->execute([ $_GET["id"] ]);

    if ($stmt->rowCount() == 0) {
      header("Location: /crud");
      return;
    }

    $row = $stmt->fetch();
    break;

  case 'POST':
    if (!isset($_POST["id"]) || !isset($_POST["nev"]) || !isset($_POST["kategoria"])) {
      header("Location: /crud-modosit");
      return;
    }

    $stmt = $dbh->prepare("UPDATE szoftver SET nev = ?, kategoria = ? WHERE id = ?");
    $stmt->execute([ $_POST["nev"], $_POST["kategoria"], $_POST["id"] ]);

    header("Location: /crud");
    return;

  default:
    header("Location: /crud");
    return;
}
?>