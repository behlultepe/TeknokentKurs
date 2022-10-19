<?php
function baglan($a){
    $c = curl_init();
    curl_setopt($c , CURLOPT_URL , $a);//curlu başlattık urlden alacağımızı belirttik
    curl_setopt($c , CURLOPT_RETURNTRANSFER , true);
    curl_setopt($c , CURLOPT_SSL_VERIFYHOST , false);//güvenli baglantiyi devre dısı bıraktık
    curl_setopt($c , CURLOPT_SSL_VERIFYPEER , false);//güvenli baglantiyi devre dısı bıraktık
    $dosya = fopen("resimler/".date("dmyhis").".png", "w");
    curl_setopt($c , CURLOPT_FILE , $dosya);
    $kaydet = curl_exec($c);
    curl_close($c);
    return $kaydet ;

}
$link = baglan("https://www.google.com/");
$a = preg_match('<img class="lnXdpd" alt="Google" height="92" src="(.*?)" srcset="/images/branding/googlelogo/1x/googlelogo_light_color_272x92dp.png 1x, /images/branding/googlelogo/2x/googlelogo_light_color_272x92dp.png 2x" width="272" data-atf="1" data-frt="0">' , $link , $resimadresi );


