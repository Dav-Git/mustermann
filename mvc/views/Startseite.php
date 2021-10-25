<?php 
class Startseite extends Seite implements ISeite
{
	public function output() : string
	{
		$html="
          <html>
          <head><title>Startseite</title></head>
		  
          <body>
          <h1>Mustermann IT-Service</h1>
          <h2>Startseite</h2>
		  
          <p>Willkommen auf der Website von Mustermann IT-Service</p>

		  </body>
          </html>
        ";
		
		return $html;
	}
}