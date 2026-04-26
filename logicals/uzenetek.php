<?php
    if (!isset($_SESSION['login'])) {
        header('Location: /kapcsolat');
        return;
    }