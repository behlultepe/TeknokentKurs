<?php

$ogrenciler = array(

    array( "ad" => "Emre", "soyad" => "Karabay", "numara" => "100","vize" => 50 , "final2" => 60),
    array( "ad" => "Süleyman", "soyad" => "Eskişehir", "numara" => "200","vize" => 40 , "final2" => 80),
    array( "ad" => "Karabay", "soyad" => "Bandırma", "numara" => "300","vize" => 30 , "final2" => 70),
    array( "ad" => "Emre2", "soyad" => "Karabay", "numara" => "100","vize" => 50 , "final2" => 60),
    array( "ad" => "Süleyman2", "soyad" => "Eskişehir", "numara" => "200","vize" => 40 , "final2" => 80),
    array( "ad" => "Karabay2", "soyad" => "Bandırma", "numara" => "300","vize" => 30 , "final2" => 70),
    array( "ad" => "Emre3", "soyad" => "Karabay", "numara" => "100","vize" => 50 , "final2" => 60),
    array( "ad" => "Süleyman3", "soyad" => "Eskişehir", "numara" => "200","vize" => 1 , "final2" => 60),
    array( "ad" => "Karabay3", "soyad" => "Bandırma", "numara" => "300","vize" => 20 , "final2" => 70),
    array( "ad" => "Emre4", "soyad" => "Karabay", "numara" => "100","vize" => 50 , "final2" => 60),
    array( "ad" => "Süleyman4", "soyad" => "Eskişehir", "numara" => "200","vize" => 50 , "final2" => 80),
    array( "ad" => "Karabay4", "soyad" => "Bandırma", "numara" => "300","vize" => 30 , "final2" => 70),
    array( "ad" => "Emre5", "soyad" => "Karabay", "numara" => "100","vize" => 50 , "final2" => 60),
    array( "ad" => "Süleyman5", "soyad" => "Eskişehir", "numara" => "200","vize" => 40 , "final2" => 80),
    array( "ad" => "Karabay5", "soyad" => "Bandırma", "numara" => "300","vize" => 30 , "final2" => 70),
    array( "ad" => "Emre6", "soyad" => "Karabay", "numara" => "100","vize" => 50 , "final2" => 60),
    array( "ad" => "Süleyman6", "soyad" => "Eskişehir", "numara" => "200","vize" => 40 , "final2" => 80),
    array( "ad" => "Karabay6", "soyad" => "Bandırma", "numara" => "300","vize" => 30 , "final2" => 70),
    array( "ad" => "Emre7", "soyad" => "Karabay", "numara" => "100","vize" => 50 , "final2" => 60),
    array( "ad" => "Süleyman7", "soyad" => "Eskişehir", "numara" => "200","vize" => 40 , "final2" => 80),
    array( "ad" => "Karabay7", "soyad" => "Bandırma", "numara" => "300","vize" => 10 , "final2" => 10),
    array( "ad" => "Emre8", "soyad" => "Karabay", "numara" => "100","vize" => 50 , "final2" => 60),
    array( "ad" => "Süleyman8", "soyad" => "Eskişehir", "numara" => "200","vize" => 20 , "final2" => 80),
    array( "ad" => "Karabay8", "soyad" => "Bandırma", "numara" => "300","vize" => 30 , "final2" => 70),
    array( "ad" => "Emre9", "soyad" => "Karabay", "numara" => "100","vize" => 10 , "final2" => 10),
    array( "ad" => "Süleyman9", "soyad" => "Eskişehir", "numara" => "200","vize" => 10 , "final2" => 10),
    array( "ad" => "Karabay9", "soyad" => "Bandırma", "numara" => "300","vize" => 10 , "final2" => 10)

);

for($i = 0 ; $i < count($ogrenciler) ; $i++){
    $donemNotu = $ogrenciler[$i]["vize"] * 0.3 +  $ogrenciler[$i]["final2"] * 0.7;

    if($donemNotu > 50 ){

        echo "Ad:".$ogrenciler[$i]["ad"]."***"." Soyad:".$ogrenciler[$i]["soyad"]."***"." geçti"."***". " Donem notu ". $donemNotu . "<br>";
    }
    else
        echo "Ad:".$ogrenciler[$i]["ad"]."***"." Soyad:".$ogrenciler[$i]["soyad"]."***"." kaldı"."***". " Donem notu ". $donemNotu . "<br>";

}