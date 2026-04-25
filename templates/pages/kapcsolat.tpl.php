<h2>Kapcsolat</h2>
<form method="post" action="/uzenetkuldes">
    <label for="uzenet">Üzenet</label>
    <textarea name="uzenet" id="uzenet" oninput="uzenetCheck()" placeholder="Üzenet az oldal tulajdonosának"></textarea>
    <p id="hiba-uzenet" class="hidden hiba-uzenet">A mező kitöltése kötelező!</p>
    <button type="submit" class="btn disabled" id="kuldes" disabled>Küldés</button>
</form>
<script>
    const uzenet = document.getElementById("uzenet");
    const hp = document.getElementById("hiba-uzenet");
    const kuldes = document.getElementById("kuldes");

    function uzenetCheck() {
        if (uzenet.value.length == 0) {
            uzenet.classList.add('kotelezo');
            hp.classList.remove('hidden');
            kuldes.disabled = true;
            kuldes.classList.add('disabled');
        }
        else {
            uzenet.classList.remove('kotelezo');
            hp.classList.add('hidden');
            kuldes.disabled = false;
            kuldes.classList.remove('disabled');
        }
    }
</script>