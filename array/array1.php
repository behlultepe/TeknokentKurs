<?php

$gunler = ['Pazartesi','Salı','Çarsamba','Perşembe','Cuma','Cumartesi','Pazar'];
//$gunler[7] = "8.gün";
//array_push($gunler,"9.gün");
unset($gunler[1]);
//echo $gunler[2] ;

echo "<pre>";
print_r($gunler);
echo "<pre>";