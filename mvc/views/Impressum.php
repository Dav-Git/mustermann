<?php
class Impressum extends Seite implements ISeite
{
    public function output(): string
    {
        $title = "Impressum";
        $content = "<p>Niemand hat irgendeine Verantwortung. Verantwortung ist nämlich voll doof.</p>";
        ob_start();
        require 'templates/vorlage.php';
        $html = ob_get_contents();
        ob_end_clean();

        return $html;
    }
}