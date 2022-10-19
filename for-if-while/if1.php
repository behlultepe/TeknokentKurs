<?php
$dogum = 2008 ;
$yasi = 2022 - $dogum ;
$resit =  18 - $yasi ;
echo "Yasınız : ".$yasi . "<br>";
if ($yasi < 18)
    echo " Reşit Değilsin. " . $resit . " Yıl sonra Reşit olacaksın ... ";
elseif ($yasi > 18 )
    echo "Resit ... ";