<?php
    if (!isset($_COOKIE['isLogged'])) {
        header('Location: ' . '/login.php');
    }
    $pagetitle = "Pictures";
    $content = "template.pictures.php";
    include "template.php";
?>