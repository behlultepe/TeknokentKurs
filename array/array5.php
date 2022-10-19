<?php
/*
$sayi = 50;

function topla($sayi1,$sayi2,$sayi){
    return $sayi1 + $sayi2 + $sayi;
}

echo topla(10,20,$sayi)."<br>";
echo topla(50,60,$sayi);
*/
function ort($vize,$final){

    return $vize*0.4 + $final*0.6 ;

}
$ogrenciler = array(

    array("ad = " => "Behlül", "soyad = " => "Tepe", "Vize"=> 50,"Final" => 80),
    array("ad = " => "Vehbi", "soyad = " => "Yavaş", "Vize"=> 40,"Final" => 60),
    array("ad = " => "Adem", "soyad = " => "Taş", "Vize"=> 30,"Final" => 30),
);

for ($i=0 ; $i< count($ogrenciler); $i++){

    $ort = ort( $ogrenciler[$i]["Vize"] , $ogrenciler[$i]["Final"]);
    if($ort>=50){
        echo "ADI = ".$ogrenciler[$i]["ad = "] . " ". "Geçtiniz ..."."<br>";

    }
    else {
        echo "ADI = " . $ogrenciler[$i]["ad = "] . " " . "Kaldınız ..." . "<br>";
    }
}
