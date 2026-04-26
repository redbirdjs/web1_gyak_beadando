<main>
  <h2><?= $ujra ? "Sikertelen regisztráció!" : "Sikeres regisztráció!" ?></h2>
  <?php if(isset($uzenet)) { ?>
    <p><?= $uzenet ?></p>
  <?php } ?>

  <div>
    <a href="/"><button>Főoldal</button></a>
    <?php if($ujra) { ?>
      <a href="/belepes"><button>Vissza a regisztrációhoz</button></a>
    <?php } else { ?>
      <a href="/belepes"><button>Bejelentkezés</button></a>
    <?php } ?>
  </div>
</main>