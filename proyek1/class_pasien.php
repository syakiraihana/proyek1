<?php
require_once 'bmi.php';

$pas1 = new bmi("P001","Ahmad", "20 Maret 2022", 69.8, 169);
$pas1->gender="L";
$pas1->tmp_lahir="Bandung";
$pas1->tgl_lahir="2000-10-20";
$pas1->email="ahmad@gmail.com";

$pas2 = new bmi("P002","Rina", "21 Maret 2022", 55.3, 165);
$pas2->gender="P";
$pas2->tmp_lahir="Balikpapan";
$pas2->tgl_lahir="2001-11-22";
$pas2->email="rina@gmail.com";

$pas3 = new bmi("P003","Lutfi", "22 Maret 2022", 45.2, 171);
$pas3->gender="L";
$pas3->tmp_lahir="Balikpapan";
$pas3->tgl_lahir="2001-11-22";
$pas3->email="rina@gmail.com";

$_tgl = $_POST['tanggal'];
$_nama = $_POST['nama'];
$_kode = $_POST['kode'];
$_gender = $_POST['gender'];
$_berat = $_POST['berat'];
$_tinggi = $_POST['tinggi'];

$pas4 = new bmi($_kode, $_nama, $_tgl, $_berat, $_tinggi);
$pas4->gender=$_gender;

$ar_pasien = [$pas1, $pas2, $pas3, $pas4];

?>
<h1 style="text-align:center">Data Pasien</h1>
<table class="table" border="1" width="100%">
    <thead>
        <tr>
            <th>No</th><th>Tanggal Periksa</th><th>Nama Pasien</th>
            <th>Gender</th><th>Berat (kg)</th><th>Tinggi (cm)</th><th>Nilai BMI</th>
            <th>Status BMI</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor=1;
        foreach($ar_pasien as $obj){
        ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$obj->tanggal?></td>
            <td><?=$obj->nama?></td>
            <td><?=$obj->gender?></td>
            <td><?=$obj->berat?></td>
            <td><?=$obj->tinggi?></td>
            <td><?=$obj->nilaibmi()?></td>
            <td><?=$obj->status()?></td>

        </tr>
        
    <?php  
    $nomor++;      
        }
    ?>
    </tbody> 
</table>
