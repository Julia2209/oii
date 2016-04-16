<?php
    if (!isset($_COOKIE['isLogged'])) {
        header('Location: ' . '/login.php');
    }
    $pagetitle = "Cabinet";
    $content = "template.mycabinet.php";
    include "template.php";
?>