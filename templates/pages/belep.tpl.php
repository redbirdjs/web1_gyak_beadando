<main>
  <?php if (isset($row)) { ?>
    <?php if ($row) { ?>
      <h2>Sikeres bejelentkezés!</h2>
      <p>Azonosító: <strong><?= $row['id'] ?></strong></p>
      <p>Név: <strong><?= $row['csaladi_nev']." ".$row['uto_nev'] ?></strong></p>
      <div>
        <a href="/"><button>Főoldal</button></a>
      </div>
    <?php } else { ?>
      <h2>Sikertelen bejelentkezés!</h2>
      <p>Hibás felhasználónév vagy jelszó.</p>
      <div>
        <a href="/"><button>Főoldal</button></a>
        <a href="/belepes"><button>Vissza a bejelentkezéshez</button></a>
      </div>
    <?php } ?>
  <?php } ?>
  <?php if (isset($errormessage)) { ?>
    <h2>Hiba történt!</h2>
    <p><?= $errormessage ?></p>
    <div>
      <a href="/"><button>Főoldal</button></a>
      <a href="/belepes"><button>Bejelentkezés</button></a>
    </div>
  <?php } ?>
</main>