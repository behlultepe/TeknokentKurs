<?php
$meyve = ['armut','portakal','şeftali','erik','elma','mandalin','vişne','incir'];

echo "<pre>";
print_r($meyve);
echo "<pre>";

$secilen = 'erik';
$can = 5;
$count = 0;

while(true){
    $tahmin = rand(0,7);
    if($secilen==$meyve[$tahmin]){

        echo "bulunan ".$meyve[$tahmin]."<br>";
        break;
    }
    if($can == 0 ){
        echo "Kaybettiniz...". "<br>";
    }
    $count++;
    $can--;
}
echo  $count . "defada bulundu ";