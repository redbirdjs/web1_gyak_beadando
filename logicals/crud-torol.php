<?php
require "includes/db.php";

$stmt = $dbh->prepare('DELETE FROM szoftver WHERE id = ?');
$stmt->execute([ $_GET['id'] ]);

header("Location: /crud");
?>