<?php
require 'baglan.php';
$sorgu = $baglanti ->query("select * from kayit ");
$liste = $sorgu ->fetchAll();
foreach ($liste as $giris)
    $gelenad = $_GET['kullanici'];
    $gelensifre = $_GET['sifre'];
    if ($gelenad == $giris['kullanici'] and $gelensifre == $giris['sifre']){
        echo $_GET['kullanici'] . " hoşgeldin". "<br>";
    }
    else
        echo "GİRİŞ BAŞARISIZ...";

?>
