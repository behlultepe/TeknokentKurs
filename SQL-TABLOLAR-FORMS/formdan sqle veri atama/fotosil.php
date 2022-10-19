<?php

include "baglan.php";

$gelenid=$_GET['id'];
$url="yok.jpeg";


$sorgu2=$baglanti->prepare("UPDATE kayit SET file=? where id =?");
$sorgu2->execute([$url,$gelenid]);

header("location:sali.php");
?>