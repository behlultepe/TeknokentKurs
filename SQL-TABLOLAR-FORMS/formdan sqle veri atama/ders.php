<?php
include "baglan.php";
$degisken = $baglanti ->prepare("SELECT * FROM kayit");
$degisken->execute();//query kullansaydık bunu yazmamıza gerek yoktu
/*
$ad = "behlül";
$kullaniciadi = "belo";
$sifre = "123";
$degiskenekle = $baglanti -> prepare("INSERT INTO kayit (adsoyad,kullaniciadi,sifre) VALUES (?,?,?)");
$degiskenekle -> execute([$ad,$kullaniciadi,$sifre]);
*/
/*
$id = 3;
$guncelleme = $baglanti ->prepare("UPDATE kayit SET adsoyad = 'can' WHERE id=?");
$guncelleme -> execute([$id]);
*/
$deger = $degisken-> fetchAll();
$degersayisi = $degisken ->rowCount();


foreach ($deger as $value){
    echo $value['adsoyad'];
}











?>