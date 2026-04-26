<main>
  <div class="title">
    <img src="./images/logo.png" alt="Oldal logója">
    <h2><?= $fejlec['cim'] ?></h2>
  </div>

  <div class="content">
    <div class="text-content">
      <h3>Videó saját könyvtárból</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In perferendis ullam mollitia facilis accusantium sequi nobis aliquam eveniet voluptates. Excepturi quae accusantium esse, sed ea ex voluptas eum praesentium, culpa sit modi? Non earum temporibus illo minima provident quia dicta.</p>
    </div>
    <div class="iframe">
      <video id="vm-player" playsinline controls data-poster="/path/to/poster.jpg">
        <source src="/path/to/video.mp4" type="video/mp4" />
      </video>
    </div>
  </div>

  <div class="content frame-left">
    <div class="text-content">
      <h3>Visual Studio Code</h3>

      <p><b>Mi az a Visual Studio Code?</b></p>
      <p>A Visual Studio Code egy ingyenes, modern forráskód-szerkesztő, amelyet a Microsoft fejlesztett. Többféle programozási nyelvet támogat, és bővítményekkel egyszerűen testre szabható.</p>
      
      <p><b>Miért érdemes telepíteni?</b></p>
      <p>A Visual Studio Code gyors és könnyen kezelhető, így ideális választás kezdők számára is, ugyanakkor haladó fejlesztők igényeit is kielégíti. Beépített hibakeresési eszközöket kínál, és a rengeteg elérhető bővítménynek köszönhetően szinte bármilyen fejlesztési feladathoz igazítható.</p>

      <div>
        <a href="https://code.visualstudio.com/" target="_blank"><button>Visual Studio Code</button></a>
        <a href="https://www.youtube.com/watch?v=cu_ykIfBprI" target="_blank"><button>Videó megtekintése a YouTube-on</button></a>
      </div>
    </div>
    <div class="iframe">
      <div id="yt-player" class="plyr__video-embed">
        <iframe
          src="https://www.youtube.com/embed/cu_ykIfBprI?si=Rwing2JB4ZVMCntK?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
          allowfullscreen
          allowtransparency
          allow="autoplay"
        ></iframe>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="text-content">
      <h3>Cég elhelyezkedése</h3>

      <p>A cég telephelye a térképen látható helyszínen található, személyes látogatást itt lehet megejteni.</p>
      
      <a href="https://www.google.com/maps?cid=4685242891940547924&g_mp=CiVnb29nbGUubWFwcy5wbGFjZXMudjEuUGxhY2VzLkdldFBsYWNlEAIYASAA&hl=hu&gl=HU&source=embed" target="_blank"><button>Térkép megtekintése a Google Maps-en</button></a>

      <p>Megjegyzést az oldalhoz vagy tartalomhoz a Kapcsolat oldalon tud írni, ehhez nem szükséges személyes látogatás.</p>
      <p>Amennyiben nevet is szeretne csatolni az üzenethez, kérjük jelentkezzen be az oldalra. Ha még nem rendelkezik felhasználóval, a Belépés oldalon regisztrálni is tud.</p>

      <div>
        <a href="/kapcsolat"><button>Kapcsolat</button></a>
        <a href="/belepes"><button>Bejelentkezés és regisztráció</button></a>
      </div>
    </div>
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5172.410137026133!2d19.29558375992861!3d46.6269881203757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743b2ff70a326d1%3A0x41055396348a4d54!2sTesco!5e0!3m2!1shu!2shu!4v1777201974441!5m2!1shu!2shu" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</main>

<script src="https://cdn.plyr.io/3.8.4/plyr.js"></script>
<link rel="stylesheet" href="https://cdn.plyr.io/3.8.4/plyr.css" />
<script>
  const vmplayer = new Plyr('#vm-player');
  const ytplayer = new Plyr('#yt-player');
</script>