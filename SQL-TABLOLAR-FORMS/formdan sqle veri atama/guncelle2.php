<?php
include "baglan.php";
$gelenid=$_POST['idno'];
$gelenad=$_POST['ad'];
$gelenkadi=$_POST['kadi'];
$gelensifre=$_POST['sifre'];
$isim=$_FILES['file']['name'];
$gelenfile=$_FILES['file']['name'];

if(empty($gelenfile)){

    $isimson=rand(0,1000).rand(0,1000).$isim;
    move_uploaded_file($_FILES['file']['tmp_name'], $isimson);

    $sorgu2=$baglanti->prepare("UPDATE kayit SET adsoyad=?,kullaniciadi=?,sifre=? where id =?");
    $sorgu2->execute([$gelenad,$gelenkadi,$gelensifre,$gelenid]);

    header("location:form.php");
}
else{
    $isimson=rand(0,1000).rand(0,1000).$isim;
    move_uploaded_file($_FILES['file']['tmp_name'], $isimson);

    $sorgu2=$baglanti->prepare("UPDATE kayit SET adsoyad=?,kullaniciadi=?,sifre=?,file=? where id =?");
    $sorgu2->execute([$gelenad,$gelenkadi,$gelensifre,$isimson,$gelenid]);

    header("location:form.php");

}
?>