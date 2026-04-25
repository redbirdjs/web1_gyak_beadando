<?php
$files = array_diff(scandir('uploads/'), array('.', '..'));
?>

<main>
    <h2>Képek</h2>
    <?php if (isset($_SESSION['login'])): ?>
        <form class="feltoltes-form" enctype="multipart/form-data" action="/logicals/feltoltes.php" method="post">
            <div>
                <label for="fajl" class="btn">Kép hozzáadás</label>
                <p id="f_nev">Nincs fájl kiválasztva.</p>
                <input type="file" id="fajl" name="fajl" accept=".png,.jpg,.jpeg,.gif,.webp" onchange="fajlMod()" required hidden />
            </div>
            <button class="btn">Feltöltés</button>
        </form>
    <?php endif; ?>
    <hr>
    <div class="images">
        <?php foreach ($files as $file): ?>
            <div class="image">
                <img src="/uploads/<?= $file ?>" alt="<?= $file ?>" />
                <?php if (isset($_SESSION['login'])): ?>
                    <form method="post" action="/logicals/keptorles.php">
                        <input type="text" id="fajlnev" name="fajlnev" value="<?= $file ?>" hidden/>
                        <button class="del-btn">Törlés</button>
                    </form>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</main>
<script>
    const f_nev = document.getElementById("f_nev");
    const fileInput = document.getElementById("fajl");

    const fajlMod = () => {
        if (fileInput.files.length == 0) {
            f_nev.innerText = 'Nincs fájl kiválasztva.'
        } else {
            f_nev.innerText = fileInput.files[0].name;
        }
    }
</script>