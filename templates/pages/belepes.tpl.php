<main>
  <form action = "belep" method = "post">
    <h2>Bejelentkezés</h2>
    
    <input type="text" name="felhasznalo" placeholder="Felhasználónév" required>
    <input type="password" name="jelszo" placeholder="Jelszó" required>

    <button type="submit">Bejelentkezés</button>
  </form>

  <form action = "regisztral" method = "post">
    <h2>Regisztráció</h2>

    <input type="text" name="vezeteknev" placeholder="Vezetéknév" required>
    <input type="text" name="utonev" placeholder="Utónév" required>
    <input type="text" name="felhasznalo" placeholder="Felhasználónév" required>
    <input type="password" name="jelszo" placeholder="Jelszó" required>

    <button type="submit">Regisztráció</button>
  </form>
</main>