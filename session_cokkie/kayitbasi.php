<?php
require 'baglan.php';
$sorgu = $baglanti ->query("select * from kullaniciler ");
$liste = $sorgu ->fetchAll();

foreach ($liste as $giris){
    $gelenad = $_GET['adi'];
    $gelensoy = $_GET['soyadi'];
    if ($gelenad == $giris['adi'] and $gelensoy == $giris['soyadi']){
        echo $_GET['adi'] . " hoşgeldin". "<br>";
        echo "en son giriş : ". $tarih ;
    }
    else
        echo "GİRİŞ BAŞARISIZ...";
}

?>
