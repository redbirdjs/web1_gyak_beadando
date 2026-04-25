<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] != 'POST' || !isset($_SESSION['login']) || !isset($_FILES['fajl'])) {
    header('Location: /');
    return;
}

$file = $_FILES['fajl'];

if (!preg_match('#image/*#', $file['type'])) {
    header('Location: /kepek');
    return;
}

$target_dir = "../uploads/";
$target_file = $target_dir . time() . "-" . basename($_FILES["fajl"]["name"]);

move_uploaded_file($_FILES["fajl"]["tmp_name"], $target_file);
header('Location: /kepek');