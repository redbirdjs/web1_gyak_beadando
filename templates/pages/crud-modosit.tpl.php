<?php
require "includes/db.php";

if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
  echo "<script>window.location = '/crud'</script>";
  return;
}

$stmt = $dbh->prepare("SELECT * FROM szoftver WHERE id = ?");
$stmt->execute([ $_GET["id"] ]);

if ($stmt->rowCount() == 0) {
  echo "<script>window.location = '/crud'</script>";
  return;
}

$row = $stmt->fetch();
?>
<main>
  <form action="/logicals/modosit-szoftver" method="post">
    <h2>Szoftver módosítás</h2>
    
    <input type="number" name="id" id="id" value="<?= $row["id"] ?>" readonly hidden>
    <input type="text" name="nev" placeholder="Név" value="<?= $row["nev"] ?>" required>
    <input type="text" name="kategoria" placeholder="Kategória" value="<?= $row["kategoria"] ?>" required>

    <button type="submit">Adat módosítása</button>
  </form>
</main>