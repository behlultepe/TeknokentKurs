<?php
$sayi = 18;
$asalmi = 0;

for($i=2 ; $i<$sayi ; $i++){
    if($sayi % $i == 0)
        $asalmi++;
}

if($asalmi == 0)
    print("Sayı asal");
else
    print("Asal Değil");
?>