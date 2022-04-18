<?php
require_once 'pasien.php';


class bmipasien extends pasien  {
    public $tanggal;

function __construct($kode, $nama, $tgl){
    parent::__construct($kode, $nama);
    $this->tanggal = $tgl;
}
}
?>