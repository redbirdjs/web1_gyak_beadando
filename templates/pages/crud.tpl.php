<?php
require "includes/db.php";
$stmt = $dbh->prepare("SELECT * FROM szoftver");
$stmt->execute();
$result = $stmt->fetchAll();
?>
<main>
  <div class="title">
    <h2>Szoftverek CRUD</h2>
    <a href="/crud-uj"><button>Új adat</button></a>
  </div>

  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Név</th>
          <th>Kategória</th>
          <th>Műveletek</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($result as $row) { ?>
          <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["nev"] ?></td>
            <td><?= $row["kategoria"] ?></td>
            <td>
              <a href="<?= "/crud-modosit?id=" . $row["id"] ?>"><button>Módosítás</button></a>
              <a href="<?= "/crud-torol?id=" . $row["id"] ?>"><button class="btn-red">Törlés</button></a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <div class="table-container-mobile">
    <?php foreach ($result as $row) { ?>
      <div class="table-data-mobile">
        <table>
          <tbody>
            <tr>
              <td>ID</td>
              <td><?= $row["id"] ?></td>
            </tr>
            <tr>
              <td>Név</td>
              <td><?= $row["nev"] ?></td>
            </tr>
            <tr>
              <td>Kategória</td>
              <td><?= $row["kategoria"] ?></td>
            </tr>        
            <tr>
              <td>Műveletek</td>
              <td>
                <a href="<?= "/crud-modosit?id=" . $row["id"] ?>"><button>Módosítás</button></a>
                <a href="<?= "/crud-torol?id=" . $row["id"] ?>"><button class="btn-red">Törlés</button></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    <?php } ?>
  </div>
</main>