<?php
class Sonderangebot extends Seite implements ISeite
{
  public function output(): string
  {
    $tempSonderAngebot = $this->model->getSpecialOffer();
    $title = "Sonderangebot";
    $content = "<p>Voll billig {$tempSonderAngebot['produktname']}
    zum Preis von nur {$tempSonderAngebot['preis']}</p>";

    ob_start();
    require 'templates/vorlage.php';
    $html = ob_get_contents();
    ob_end_clean();

    return $html;
  }
}