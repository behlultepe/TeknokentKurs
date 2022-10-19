<?php
$ogrenciler = array(

    array("ad = " => "Behlül", "soyad = " => "Tepe", "Vize" => 50, "Final" => 80),
    array("ad = " => "Vehbi", "soyad = " => "Yavaş", "Vize" => 40, "Final" => 60),
    array("ad = " => "Adem", "soyad = " => "Taş", "Vize" => 30, "Final" => 30),
);
for ($i = 0; $i < count($ogrenciler); $i++) {

    $notort = $ogrenciler[$i]["Vize"] * 0.4 + $ogrenciler[$i]["Final"] * 0.6;
    if ($notort >= 50) {
        echo "Geçtiniz...";
    } else
        echo "Kaldınız ...";
    echo "<br>" . "ADI = " . $ogrenciler[$i]["ad = "] . "<br>" . "SOYADI = " . $ogrenciler[$i]["soyad = "] . "<br>" . "NOT ORTALAMASI = " . $notort . "<br>" . "<br>";

}


?>

