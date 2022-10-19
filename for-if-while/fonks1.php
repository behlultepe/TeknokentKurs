<?php
$sayi = 50;
$sayi1 = 15555;
function topla($sayi1,$sayi2,$sayi){
    global $sayi;
    $sonuc = $sayi1 + $sayi2 + $sayi;

    echo "Sayıların Toplamı = ".$sonuc."<br>";
};

topla(5,10,$sayi);

topla(20,58,$sayi);

echo $sayi1 ;