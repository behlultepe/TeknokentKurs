<?php
require "baglan.php";
$gelenid = $_POST['id'];
$gelenad = $_POST['adisoyadi'];
$gelenkullanici = $_POST['kullanici'];
$gelensifre = $_POST['sifre'];

$sorgu2 = $baglanti ->prepare("UPDATE kayit SET adisoyadi=?,kullanici=?,sifre=? WHERE id=?");

if ($sorgu2){
    echo "kayıt başarıyla guncellendi...";
}
?>