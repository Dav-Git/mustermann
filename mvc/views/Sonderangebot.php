<?php
class Sonderangebot extends Seite implements ISeite
{
  public function output(): string
  {
    $tempSonderAngebot = $this->model->getSpecialOffer();

    $html = "
          <html>
          <head><title>Sonderangebot</title></head>
		  
          <body>
          <h1>Mustermann IT-Service</h1>
          <h2>Sonderangebot</h2>
		  
          <p>Voll billig {$tempSonderAngebot['produktname']}
          zum Preis von nur {$tempSonderAngebot['preis']}</p>
          <p>Zurück zur <a href=?>Startseite</a></p>

</body>

</html>
";

return $html;
}
}