<?php
$meyve = ['armut','portakal','şeftali','erik','elma','mandalin','vişne','incir'];

$secilen = 3;
$can = 5;
$sayac = 0;

while(true){
    $random = rand(0,7);
    $sayac++;
    if($random==$secilen){
        echo "Doğru tahmin cevap : ".$secilen ."'di"." ".$sayac ."defada bulundu .";
        break;
    }
    if($sayac>$can){
        echo "Doğru olanı bulamadık başka sefere "." ".$sayac ." "."defa denedin .";
        break;
    }
}