<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);

function autoload($className)
{
    $class = "classes/" . $className . ".php";
    if (file_exists($class)) {
        require_once($class);
    }
}
spl_autoload_register("autoload");
// Daten-"Model"
$model = new ShopData();

// Shop-"Controller"
$controller = new ShopActions($model);

//"Vorlagen" f�r Views
require "views/Seite.php";  // Eltern-Klasse "Seite"
require "views/ISeite.php"; // Interface "ISeite"

// View
if (isset($_GET['page'])) {
    $page = htmlspecialchars($_GET['page'], ENT_QUOTES);
    $page = str_replace("/", "", $page);
    $page = str_replace("\\", "", $page);
    $page = str_replace(".", "", $page);
} else {
    $page = "Startseite";
}
$pagePath = "views/$page.php";
if (!file_exists($pagePath)) {
    $pagePath = "views/Startseite.php";
    $page = "Startseite";
}

require $pagePath;
$view = new $page($controller, $model);

// Ausgabe
echo $view->output();