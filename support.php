<?php

declare(strict_types=1);
require("stats.php");
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
                    <?php
                    if (@$_GET['b'] == "s") {
                        $type = "Software";
                    } else {
                        $type = "Hardware";
                    }
                    ?>

                    <h1 class="display-5 fw-bold">
                        <?php echo ($type) ?>-Support-Hotline</h1>

                    <?php

                    $ruckgabe1 = "<p>Am heutigen ";
                    $ruckgabe2 = " erreichen Sie unsere $type-Support-Hotline von ";
                    $ruckgabe3 = ", Ihre Fragen beantwortet</br>";
                    $ruckgabe4 = " unter der Telefonnummer</p>";

                    $wochentag = ["Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag"];
                    $sachbearbeiter = ["Herr Müller", "Herr Meier", "Frau Unger", "Herr Peters", "Frau Schmid"];
                    $uhrzeit = ["8 bis 16 Uhr", "8 bis 17 Uhr", "8 bis 17 Uhr", "8 bis 19 Uhr", "8 bis 13 Uhr"];
                    $zeit = [[8, 16], [8, 17], [8, 17], [8, 19], [8, 13]];

                    $tag = date("N") - 1;
                    $stunde = date("h");

                    echo $ruckgabe1 . "<strong>" . $wochentag[$tag] . "</strong>" . $ruckgabe2 . "<strong>" . $uhrzeit[$tag] . "</strong>" . $ruckgabe3 . $sachbearbeiter[$tag] . $ruckgabe4;
                    $telephone = "<p class='fs-3'>
            <svg xmlns='http://www.w3.org/2000/svg' width='40' height='40' fill='currentColor' class='bi bi-telephone' viewBox='0 0 16 16'>
                <path d='M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z'/>
            </svg>
            0711 - 123 456 789";

                    if ($stunde >= $zeit[$tag][0] && $stunde < $zeit[$tag][1]) {
                        $telephone = $telephone . " (Leider können Sie uns derzeit nicht erreichen)";
                    }

                    $telephone = $telephone . "</p>";

                    echo $telephone;

                    $tabruckgabe = "<table class='table table-striped'><tbody>";
                    $tabruckgabe2 = "</tbody></table";

                    for ($day = 0; $day < 5; $day++) {
                        $tabruckgabe = $tabruckgabe . "<tr><td>$wochentag[$day]</td><td>$uhrzeit[$day]</td><td>$sachbearbeiter[$day]</td></tr>";
                    }

                    echo $tabruckgabe . $tabruckgabe2;
                    ?>

                </div>
            </div>

            <footer class="pt-3 mt-4 text-muted border-top">
                &copy; 2021 Mustermann GmbH - eine Demoseite Übungen (Modul Web-Technologien)
                <?php
                require("stats_display.php");
                ?>
            </footer>
        </div>
    </main>

    <script src="bootstrap5.0.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>