<main>
  <form action="/crud-modosit" method="post">
    <h2>Szoftver módosítás</h2>
    
    <input type="number" name="id" id="id" value="<?= $row["id"] ?>" readonly hidden>
    <input type="text" name="nev" placeholder="Név" value="<?= $row["nev"] ?>" required>
    <input type="text" name="kategoria" placeholder="Kategória" value="<?= $row["kategoria"] ?>" required>

    <button type="submit">Adat módosítása</button>
  </form>
</main>