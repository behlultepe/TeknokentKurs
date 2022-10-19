<?php
include "baglan.php";
$link = baglan("https://www.letgo.com/", 0);
preg_match_all('@src="(.*?)"@', $link,$photo);
preg_match_all('@data-aut-id="itemTitle">(.*?)</span>@', $link, $adres);
echo "<pre>";
print_r($adres);
echo "<pre>";
print_r($photo);


function baglan($a, $b)
{

    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $a);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($c, CURLOPT_TIMEOUT, 10);


    $kaydet = curl_exec($c);
    curl_close($c);
    return $kaydet;
}
