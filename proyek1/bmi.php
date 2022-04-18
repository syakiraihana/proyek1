<?php
require_once 'pasien.php';
require_once 'bmipasien.php';
class bmi extends  bmipasien {
    public $berat;
    public $tinggi;


    function __construct($kode, $nama, $tgl, $berat, $tinggi) {
        parent::__construct($kode, $nama, $tgl);
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    function bmi() {
        echo "<br/>Berat : " .$this->berat ."<br/>Tinggi : " .$this->tinggi;
    }

    function nilaibmi() {
        return $this->berat / (($this->tinggi * $this->tinggi)/10000); 
    }

    function status() {
        if ($this->nilaibmi() >= 30){
            echo "Kegemukan (Obesitas)";
        } elseif ($this->nilaibmi() >= 25 && $this->nilaibmi() <= 29.9) {
            echo "Kelebihan berat badan";
        } elseif ($this->nilaibmi() >=18.5 && $this->nilaibmi() <= 24.9) {
            echo "Normal (Ideal)";
        } else {
            echo "Kekurangan Berat Badan";
        }
    }
}

?>