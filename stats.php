<?php
ini_set("session.use_cookies", "1");

session_start();
if (!isset($_SESSION['time'])) {
    $_SESSION['time'] = time();
}
if (!isset($_SESSION['pages'])) {
    $pages = 0;
} else {
    $pages = $_SESSION['pages'];
}
$pages++;
$_SESSION['pages'] = $pages;