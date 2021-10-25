<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);

// Daten-"Model"
require "classes/ShopData.php";
$model = new ShopData();

// Shop-"Controller"
require "classes/ShopActions.php";
$controller = new ShopActions($model);

//"Vorlagen" f�r Views
require "views/Seite.php";  // Eltern-Klasse "Seite"
require "views/ISeite.php"; // Interface "ISeite"

// View
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'Sonderangebot') {
        require "views/Sonderangebot.php";
        $view = new Sonderangebot($controller, $model);
    }
} else {
    require "views/Startseite.php";
    $view = new Startseite($controller, $model);
}

// Ausgabe
echo $view->output();