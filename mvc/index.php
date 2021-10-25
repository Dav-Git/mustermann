<?php 
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);

// Daten-"Model"
require "classes/ShopData.php";
$model = new ShopData();

// Shop-"Controller"
require "classes/ShopActions.php";
$controller = new ShopActions($model);

//"Vorlagen" für Views
require "views/Seite.php";  // Eltern-Klasse "Seite"
require "views/ISeite.php"; // Interface "ISeite"

// View
require "views/Startseite.php";
$view = new Startseite($controller, $model);

// Ausgabe
echo $view->output();
