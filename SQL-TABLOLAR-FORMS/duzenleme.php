<?php

include 'baglan.php';
echo $gelenkullanici = $_GET['kullanici'];

$sorgu2 = $baglanti ->prepare("select * from kayit where kullanici=?");

$sorgu2 ->execute(['$gelenkullanici']);

$kayit1 = $sorgu2 -> fetch(PDO::FETCH_ASSOC);

echo "Güncellenecek kaydın adı = ".$kayit1['kullanici'];