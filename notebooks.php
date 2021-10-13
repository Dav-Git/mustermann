<?php

declare(strict_types=1);
setcookie("notebook", 1, time() + 60 * 60 * 24 * 30);
require("notebook-functions.php")
?>
<!doctype html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mustermann IT-Systeme</title>
    <link href="bootstrap5.0.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <main>
        <div class="container py-4">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <span class="navbar-brand h1">Mustermann GmbH</span>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.html">Startseite</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">IT-Schulungen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Online-Shop</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Service
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Hardware-Support</a></li>
                                    <li><a class="dropdown-item" href="#">Software-Support</li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Impressum</a></li>
                                    <li><a class="dropdown-item" href="#">Datenschutz</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Suche" aria-label="Search">
                            <button class="btn btn-outline-dark" type="submit"><img
                                    src="bootstrap5.0.1/icons/search.svg"></button>
                        </form>
                    </div>
                </div>
            </nav>

            <div class="p-4 mb-4 mt-4 bg-white rounded-3 border border-ligh">
                <div class="container-fluid py-5">

                    <h1 class="display-5 fw-bold">Leih-Notebooks</h1>
                    Sie benötigen Notebooks für ihre Schulung, Veranstaltung oder als Ersatzgerät für ihre
                    Mitarbeiter*innen? Wir verleihen folgende Geräte (inkl. Office 365 und Win 10 Pro bzw. aktuelles Max
                    OS):
                    <br>
                    <?php
          define("UMST", 1.19);
          $nettopreise = [
            "Surface Pro (12,3 Zoll)" => 19.80,
            "Surface Laptop (13,5 Zoll)" => 29,
            "Mac Book Pro (13 Zoll)" => 34.99
          ];

          ?>
                    <table class="table table-striped">
                        <thead>
                            <td>Notebook</td>
                            <td>Tagesmietpreis Netto</td>
                            <td>Tagesmietpreis Brutto</td>
                            <td>Tagesmietpreis Brutto 2020 (16% MwSt.)</td>
                        </thead>
                        <?php
            foreach ($nettopreise as $key => $value) {
              echo "<tr>";
              echo "<td>$key</td>";
              echo "<td>" . number_format($value, 2, ",", ".") . "€</td>";
              echo "<td>" . number_format(brutto($value), 2, ",", ".") . " €</td>";
              echo "<td>" . number_format(brutto($value, 1.16), 2, ",", ".") . " €</td>";
              echo "</tr>";
            }
            ?>
                    </table>

                </div>
            </div>

            <footer class="pt-3 mt-4 text-muted border-top">
                &copy; 2021 Mustermann GmbH - eine Demoseite Übungen (Modul Web-Technologien)
            </footer>
        </div>
    </main>

    <script src="bootstrap5.0.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>