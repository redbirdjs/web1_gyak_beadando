<?php
try {
    $dbh = new PDO('mysql:host=172.24.32.1;dbname=web_beadando', 'root', 'Admin1234',
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
} catch (PDOException $e) {
    die('Hiba történt az adatbázis létrehozásakor!');
}