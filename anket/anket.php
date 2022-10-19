<?php
include 'baglan.php';

$sorgu = $baglanti ->query(" select * from anket ");
$anket = $sorgu -> fetchall();
$sonuc1 = $_GET['sonuc1'];
$sonuc2 = $_GET['sonuc2'];

if (isset($sonuc1,$sonuc2)) {

    $hit++;
    $sorgu = $baglanti->prepare("UPDATE anket SET hit ");
    $sorgu->execute([$hit]);
}