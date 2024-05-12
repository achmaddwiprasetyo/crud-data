<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        include "views/home.php";
        break;

    case 'barang':
        include "views/barang.php";
        break;

    default:
        include "views/404.php";
        exit();
}
