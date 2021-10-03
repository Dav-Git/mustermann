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
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
              <button class="btn btn-outline-dark" type="submit"><img src="bootstrap5.0.1/icons/search.svg"></button>
            </form>
          </div>
        </div>
      </nav>

      <div class="p-4 mb-4 mt-4 bg-white rounded-3 border border-ligh">
        <div class="container-fluid py-5">

          <h1 class="display-5 fw-bold">Vielen Dank</h1>

          <p class="col-md-9 fs-4">Vielen Dank für Ihr Interesse an unseren Produkten,
            wir senden Ihnen eine Preiseliste an folgende Adresse:
            <?php
            error_reporting(E_ERROR);

            $plz = str_replace("D-", "", $_REQUEST['plz']);
            $anzahl = htmlspecialchars(str_replace(" Mitarbeiter", "", $_REQUEST['anzahl']), ENT_NOQUOTES);
            $firma = htmlspecialchars($_REQUEST['firma'], ENT_QUOTES);
            $ausgabe = "<p>";
            if (!isset($_REQUEST['sex'])) {
              $ausgabe = $ausgabe . "Keine Ansprache ausgewählt</br>";
            } else {
              $ausgabe = $ausgabe . "{$_REQUEST['sex']} ";
            }

            if (strlen($_REQUEST['vorname']) == 0) {
              $ausgabe = $ausgabe . "Kein Vornamen eingegeben</br>";
            } else {
              $ausgabe = $ausgabe . "{$_REQUEST['vorname']} ";
            }

            if (strlen($_REQUEST['nachname']) == 0) {
              $ausgabe = $ausgabe . "Kein Nachnamen eingegeben</br>";
            } else {
              $ausgabe = $ausgabe . "{$_REQUEST['nachname']}</br>";
            }

            if (strlen($_REQUEST['firma']) == 0) {
              $ausgabe = $ausgabe . "Keine Firma angegeben</br>";
            } else {
              $ausgabe = $ausgabe . "{$_REQUEST['firma']}</br>";
            }

            if (strlen($_REQUEST['strasse']) == 0) {
              $ausgabe = $ausgabe . "Keine Strasse angegeben</br>";
            } else {
              $ausgabe = $ausgabe . "{$_REQUEST['strasse']}</br>";
            }

            if (!isset($_REQUEST['plz']) || !is_numeric($plz)) {
              $ausgabe = $ausgabe . "Keine Postleitzahl eingegeben</br>";
            } else {
              $ausgabe = $ausgabe . "{$_REQUEST['plz']} ";
            }

            if (strlen($_REQUEST['ort']) == 0) {
              $ausgabe = $ausgabe . "Kein Ort eingegeben</br>";
            } else {
              $ausgabe = $ausgabe . "{$_REQUEST['ort']} ";
            }

            if (strlen($_REQUEST['land']) == 0) {
              $ausgabe = $ausgabe . "Kein Land eingegeben</br>";
            } else {
              $ausgabe = $ausgabe . "{$_REQUEST['land']}</br>";
            }

            if (strlen($_REQUEST['anzahl']) == 0) {
              $ausgabe = $ausgabe . "Keine Mitarbeiteranzahl eingegeben</br>";
            } else {
              $ausgabe = $ausgabe . "{$_REQUEST['anzahl']} Mitarbeiter*innen";
            }

            $ausgbae = $ausgabe . "</p>";

            echo $ausgabe;

            $handle = fopen("preislog.csv", 'a');
            fputcsv($handle, array($_REQUEST['firma'], $_REQUEST['vorname'], $_REQUEST['nachname'], $_REQUEST['strasse'], $_REQUEST['plz'], $_REQUEST['ort'], $_REQUEST['land'], $_REQUEST['anzahl']), ",");
            fclose($handle);
            ?>
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