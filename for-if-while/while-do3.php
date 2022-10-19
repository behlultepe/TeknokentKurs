<?php
$sayi = 10 ;
$sayac = 0;
while(true){
    $tahmin = rand(1,25);
    $sayac++;
    if ($sayi == $tahmin) {

        echo "Tahmininiz Doğru : " . " " . $sayi."<br>";
        break;
    }
    if($tahmin<$sayi) {
        echo "sayınız tahminden büyük" ." "."<br>";
    }
    if ($tahmin>$sayi);{
        echo "sayınız tahminden küçük" ." "."<br>";
    }
}
echo $sayac . "defa denendi";