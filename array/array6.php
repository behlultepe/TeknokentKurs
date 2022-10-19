<?php
function ort($vize,$final){

    return $vize*0.4 + $final*0.6 ;

}
$ogrenciler = array(

    array("ad = " => "Behlül", "soyad = " => "Tepe", "Vize"=> 50,"Final" => 80),
    array("ad = " => "Vehbi", "soyad = " => "Yavaş", "Vize"=> 40,"Final" => 60),
    array("ad = " => "Adem", "soyad = " => "Taş", "Vize"=> 30,"Final" => 30),
);
foreach ($ogrenciler as $o){

    $ort = ort($o ["Vize"],$o["Final"]) ;
    if($ort>=50){
        echo "ADI = ".$o["ad = "] . " ". "Geçtiniz ..."."<br>";
    }
}