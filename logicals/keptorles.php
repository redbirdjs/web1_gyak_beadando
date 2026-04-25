<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] != 'POST' || !isset($_SESSION['login']) || !isset($_POST['fajlnev'])) {
    header('Location: /kepek');
    return;
}

try {
    unlink('../uploads/' . $_POST['fajlnev']);

    header('Location: /kepek');
} catch (Exception $e) {
    die($e->getMessage());
}