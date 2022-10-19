<html>
<head></head>
<body>
<?php
$link= baglan("http://www.balikesir.edu.tr/",0);
preg_match_all('@src="(.*?)"@', $link,$resimadresi);
//$resimadresi[1]="http://www.balikesir.edu.tr" . $resimadresi[1];
echo "<pre>";
print_r($resimadresi);



//$link= baglan($resimadresi[1],1);

function baglan($a,$b)
{

    $c = curl_init();
    curl_setopt($c,CURLOPT_URL,$a);
    curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($c,CURLOPT_SSL_VERIFYHOST,false);
    curl_setopt($c,CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($c , CURLOPT_TIMEOUT , 10);
/*
    if ($b=="1") {
        $dosya = fopen("resimler/" . date("d.m.y h.i.s") . ".jpg", "w");
        curl_setopt($c, CURLOPT_FILE, $dosya);
    }
*/
    $kaydet = curl_exec($c);
    curl_close($c);
    return $kaydet;

}

?>

</body>
</html>



