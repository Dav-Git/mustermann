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

                    <h1 class="display-5 fw-bold">Vohl 1 Nices Amgebot</h1>

                    <?php
          class Beamer
          {
            public string $hersteller;
            public string $modell;
            public float $tagespreis;
            public int $lumen;
            public bool $wlan = false;

            public function getHersteller(): string
            {
              return $this->hersteller;
            }

            public function setHersteller(string $hersteller): void
            {
              $this->hersteller = $hersteller;
            }

            public function getModell(): string
            {
              return $this->modell;
            }

            public function setModell(string $modell): void
            {
              $this->modell = $modell;
            }

            public function getTagespreis(): float
            {
              return $this->tagespreis;
            }

            public function setTagespreis(float $tagespreis): void
            {
              $this->tagespreis = $tagespreis;
            }

            public function getLumen(): int
            {
              return $this->lumen;
            }

            public function setLumen(int $lumen): void
            {
              $this->lumen = $lumen;
            }

            public function getWlan(): bool
            {
              return $this->wlan;
            }

            public function setWlan(bool $wlan): void
            {
              $this->wlan = $wlan;
            }

            public function __construct(string $hersteller, string $modell, float $tagespreis, int $lumen, bool $wlan = false)
            {
              $this->hersteller = $hersteller;
              $this->modell = $modell;
              $this->tagespreis = $tagespreis;
              $this->lumen = $lumen;
              $this->wlan = $wlan;
            }

            public function getWochenPreis(): float
            {
              return $this->tagespreis * 7 * 0.9;
            }
          }

          $beamer = new Beamer("Acer", "H65 Pro", "19", "1500");
          if ($beamer->getWlan()) {
            $igittPhpIstDoof = "ja";
          } else {
            $igittPhpIstDoof = "nein";
          }
          echo "<p>Hersteller: " . $beamer->getHersteller() . "</p>";
          echo "<p>Modell: " . $beamer->getModell() . "</p>";
          echo "<p>Tagespreis: " . $beamer->getTagespreis() . "</p>";
          echo "<p>Lumen: " . $beamer->getLumen() . "</p>";
          echo "<p>WLAN: " . $igittPhpIstDoof . "</p>";
          echo "<p>Wochenpreis: " . $beamer->getWochenPreis() . "</p>";

          ?>

                    <h1>K1s nices Somderamgebot</h1>
                    <?php

          $array = [new Beamer("Ich", "Du", 12001020, 2, true), new Beamer("Er", "Sie", 1, 2000000000, true), new Beamer("Es", "Wir", 7643276, 676878745)];
          foreach ($array as $beamer) {
            echo "<p>Hersteller: " . $beamer->getHersteller();
            echo "\tModell: " . $beamer->getModell();
            echo "\tTagespreis: " . $beamer->getTagespreis();
            echo "\tLumen: " . $beamer->getLumen();
            echo "\tWLAN: " . $beamer->getWlan();
            echo "\tWochenpreis: " . $beamer->getWochenPreis() . "</p>";
          }
          ?>
                    <p class="col-md-9 fs-5">
                        <a class="btn btn-outline-secondary" href="index.html">zurück zur Startseite</a>
                    </p>

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