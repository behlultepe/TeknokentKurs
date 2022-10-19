<?php
$vize = 50  ;
$final = 30 ;
$sonuc = (0.4 * $vize) + (0.6 * $final) ;
echo $sonuc . "<br>";
if ($sonuc < 30)
    echo "Kaldınız ... ";
elseif ($sonuc > 30 && $sonuc < 50)
    echo "Bütünlemeye Kaldınız ... ";
elseif ($sonuc > 50 )
    echo "Geçtiniz ... ";
?>
