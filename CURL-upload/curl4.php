<?php

include "baglan.php";
$link= "https://www.letgo.com/";
$c = curl_init($link);
curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
curl_setopt($c,CURLOPT_SSL_VERIFYHOST,false);
curl_setopt($c,CURLOPT_SSL_VERIFYPEER, false);

$kaydet = curl_exec($c);
preg_match_all('@><img src="https://apollo(.*?)" alt@', $kaydet,$photo);
preg_match_all('@itemTitle">(.*?)</span>@', $kaydet,$baslik);

for ($i = 0;$i < 20; $i++){
    echo $baslik[1][$i] . "<br>";
    $x = $photo[1][$i];
    echo "<img src='https://apollo$x'>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

}

echo "<pre>";





echo "<pre>";
for ($i=0; $i<20 ;$i++) {
    $sorgu= $baglanti -> prepare("INSERT INTO caldiklarim (baslik,photo) values(?,?)");
    $x = "https://apollo" . $photo[1][$i];
    $sorgu->execute([$baslik[1][$i],$x]);
}
?>