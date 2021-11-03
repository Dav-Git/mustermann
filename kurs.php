<?php
class Kurs
{
    public $kurs;
    public $zeit;

    public function __construct($kurs, $zeit)
    {
        $this->kurs = $kurs;
        $this->zeit = $zeit;
    }
}
$kurs = new Kurs(rand(50, 100), time());
echo json_encode($kurs);