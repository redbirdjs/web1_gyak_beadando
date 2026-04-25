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

		<nav>
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
	</header>

	<div id="content">
		<?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
	</div>
	
	<footer>
		<?php if (isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		&nbsp;
		<?php if (isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
	</footer>
</body>
</html>
