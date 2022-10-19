<?php
/*
 date_default_timezone_set('europe/istanbul');
echo date('d-m-Y H:i:s' , time())."<br>";
$birtday =  mktime(0,0,0,10,19,1999);
echo "birtday : " . $birtday . "<br>";
$today = time();
echo  "today : " . $today . "<br>";
$diff_days = ($today - $birtday);
$days = (int)($diff_days/86400);
print $days ." kadar gün yaşadın!"."<br>";
$ay = (int)($days / 30);
print $ay ." kadar ay yaşadın!"."<br>";
$yil = (int)($days / 365);
print $yil." kadar yıl yaşadın!"."<br>";

$year = (int)($days / 365) ;
$diffDay = $days - ($year * 365);

$mounth = (int)($diffDay / 30) ;

$diffDay = $diffDay - ($mounth * 30);

echo $year . " yıl " . $mounth . " ay " . $diffDay . " gün yaşadın ";
*/
/*
function yashesaplama ($saniy){
    $gecenyil = floor($saniy/60/60/24/365);
    $saniy = $saniy-$gecenyil*31536000;
    $gecenay =floor(($saniy/60/60/24/365*12));
    $saniy = $saniy-2592000*$gecenay;
    $gecengun = floor($saniy / 60 / 60 / 24);
    $saniy = $saniy-86400*$gecengun;
    $gecensaat = floor($saniy / 60 / 60);
    $saniy = $saniy-3600*$gecensaat;
    $gecendk = floor($saniy/60);
    $saniy = $saniy - 60*$gecendk;
    $gecensn = floor($saniy);
    echo "Geçen YIL : ".$gecenyil."<br>";
    echo "Geçen AY : ".$gecenay."<br>";
    echo "Geçen GÜN : ".$gecengun."<br>";
    echo "Geçen SAAT : ".$gecensaat."<br>";
    echo "Geçen DAKİKA : ".$gecendk."<br>";
    echo "Geçen SANİYE : ".$gecensn."<br>";
}

$gecici = mktime(50 ,55,60 , 80 , 70 , 5 );
$gecici = time()-$gecici;
echo $gecici;
*/
/*
date_default_timezone_set('europe/istanbul');
echo date('d-m-Y H:i:s' , time())."<br>";
echo time()."<br>";
*/
// sa dk sn ay gün yıl
/*
$yıl=2022;
$ay=9;
$gun=1;
$sn=50;
$dk=30;
$sa=3;
//echo mktime($sa , $dk , $sn , $gun , $ay , $yıl )."<br>";
//echo time();
date_default_timezone_set('europe/istanbul');
echo date('d-m-Y H:i:s', mktime($sa-29 , $dk , $sn , $ay , $gun , $yıl ))."<br>";
*/
// bir önceki gün yaptık ve -5 saat .
// doğ gün kaç sn yaşadık+kaçgün+kaçyıl
/*
date_default_timezone_set('europe/istanbul');
echo date('d-m-Y H:i:s' , time())."<br>";
$birtday =  mktime(20,40,10,10,18,1999);
echo "birtday : " . $birtday . "<br>";
$today = time();
echo  "today : " . $today . "<br>";
$diff_days = ($today - $birtday);
$days = ($diff_days/86400);
echo $days ." kadar gün yaşadın!"."<br>";
$ay = ($days / 30);
echo $ay ." kadar ay yaşadın!"."<br>";
$yil = ($days / 365);
echo $yil." kadar yıl yaşadın!"."<br>";

$year = (int)($days / 365) ;

$diffDay = $days - ($year * 365);

$mounth = (int)($diffDay / 30) ;

$diffDay = $diffDay - ($mounth * 30);

$diffSeconds = ($diffDay - (int)($diffDay)) * 24 * 60 * 60 ;

$hours = (int)($diffSeconds/3600);

$diffSeconds = $diffSeconds - ($hours * 3600);

$minute = (int)($diffSeconds/60);

$diffSeconds = $diffSeconds - ($minute * 60);

$seconds = (int)($diffSeconds);
echo $year . " yıl " . $mounth . " ay " . (int)$diffDay . " gün " . $hours . " saat " . $minute . " dakika " . $seconds . " saniyedir yaşıyor "."<br>";


for ($i=1999 ; $i<2023 ; $i++){
    $ingilizce = array(
        "MONDAY",
        "TUESDAY",
        "WEDNESDAY",
        "THURSDAY",
        "FRİDAY",
        "SATURDAY",
        "SUNDAY"
    );
    $turkce = array(
        "PAZARTESİ",
        "SALI",
        "ÇARŞAMBA",
        "PERŞEMBE",
        "CUMA",
        "CUMARTESİ",
        "PAZAR"
    );
    echo str_replace($ingilizce,$turkce,date('d m Y l',strtotime("18 OCT".$i)))."<br>";

}
*/





























