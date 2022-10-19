<?php
session_start();
if(isset($_SESSION["loginUsername"])){
    require 'baglan.php';
}else{
    goto end;
}
$link = baglan("https://www.letgo.com/");

preg_match_all('@data-aut-id="itemTitle">(.*?)</span>@', $link, $urlArray);
preg_match_all('@><img src="https://apollo(.*?)" alt@', $link, $imgArray);
preg_match_all('@data-aut-id="itemPrice">(.*?)</span>@', $link, $priceArray);



function baglan($a)
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
/*
//letgodan veri çeker
$sorgu=$baglanti->prepare("INSERT INTO products (baslik,urls,fiyat,indirimli) values(?,?,?,?)");
$sorguUsers = $baglanti->prepare(" select * from users WHERE username=?");
$sorguUsers->execute([$_SESSION["loginUsername"]]);
$usersListele = $sorguUsers -> fetch();
for($i=0; $i < count($priceArray[1]);$i++){
    $price = (int)filter_var($priceArray[1][$i], FILTER_SANITIZE_NUMBER_INT);
    $x = "https://apollo" . $imgArray[1][$i];
    $discountPrice = $price - (($price * $usersListele["indirim_orani"])/100);
    $sorgu->execute([$urlArray[1][$i],$x,$price,$discountPrice]);
}
*/

$sorguUsers = $baglanti->prepare(" select * from users WHERE username=?");
$sorguUsers->execute([$_SESSION["loginUsername"]]);
$usersListele = $sorguUsers -> fetch();
$count = 0;


for($i=0; $i < count($priceArray[1]);$i++){
    $sorgu=$baglanti->prepare("UPDATE products SET baslik=?,urls=?,fiyat=?,indirimli=? WHERE id=?");
    $price = (int)filter_var($priceArray[1][$i], FILTER_SANITIZE_NUMBER_INT);
    $x = "https://apollo" . $imgArray[1][$i];
    $discountPrice = $price - (($price * $usersListele["indirim_orani"])/100);
    $sorgu->execute([$urlArray[1][$i],$x,$price,$discountPrice,$i+1021]);
    $count++;
}

if($count == count($priceArray[1])){
    header('Location: ./letgo.php');
}
end: