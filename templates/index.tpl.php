<?php
session_start();

if (file_exists('./logicals/'.$keres['fajl'].'.php')) {
	include("./logicals/{$keres['fajl']}.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
	<link rel="stylesheet" href="./styles/stilus.css" type="text/css">
	<?php if (file_exists('./styles/'.$keres['fajl'].'.css')) { ?>
		<link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css">
	<?php } ?>
</head>
<body>
	<header>
		<div class="title">
			<img src="./images/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>">
			<h1><?= $fejlec['cim'] ?></h1>
		</div>

		<nav class="nav">
			<?php foreach ($oldalak as $url => $oldal) { ?>
				<?php if (! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
					<a href="<?= ($url == '/') ? '.' : $url ?>" class="<?= (($oldal == $keres) ? 'active' : '') ?>">
						<?= $oldal['szoveg'] ?>
					</a>
				<?php } ?>
			<?php } ?>

			<?php if (isset($_SESSION['login'])) { ?>
				<div>
					Bejelentkezett: <?= $_SESSION['csn'] . " " . $_SESSION['un'] . " (" . $_SESSION['login'] . ")" ?>
				</div>
			<?php } ?>
		</nav>

		<div class="hamburger">
			<span></span>
			<span></span>
			<span></span>
		</div>

		<nav class="hamburger-menu open">
			<?php foreach ($oldalak as $url => $oldal) { ?>
				<?php if (! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
					<a href="<?= ($url == '/') ? '.' : $url ?>" class="<?= (($oldal == $keres) ? 'active' : '') ?>">
						<?= $oldal['szoveg'] ?>
					</a>
				<?php } ?>
			<?php } ?>
		</nav>
	</header>

	<div id="content">
		<?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
	</div>
	
	<footer>
		<?php if (isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		&nbsp;
		<?php if (isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
	</footer>

	<script>
		const burger = document.querySelector(".hamburger");
		const burgerMenu = document.querySelector(".hamburger-menu");

		burgerMenu.style.setProperty("--h", `${burgerMenu.clientHeight}px`);
		burger.classList.remove("open");
		burgerMenu.classList.remove("open");

		burger.addEventListener("click", () => {
			if (burger.classList.contains("open")) {
				burger.classList.remove("open");
				burgerMenu.classList.remove("open");
			} else {
				burger.classList.add("open");
				burgerMenu.classList.add("open");
			}
		});

		document.addEventListener("DOMContentLoaded", () => {
			burgerMenu.style.transition = "0.25s";
		});
	</script>
</body>
</html>
