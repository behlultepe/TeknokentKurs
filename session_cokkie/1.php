<?php
/*session_start();
$_SESSION["giris"]="Behlul";
echo $_SESSION["giris"];
*/

//setcookie("kullanici","behlul",time()+(86400*30));

//echo $_COOKIE["kullanici"];

date_default_timezone_set('Europe/Istanbul');
setcookie("time",date("Y-m-d H:i:s"),time()+86400*30);

if (isset($_COOKIE["songiris"])){
    setcookie("songiris",$_COOKIE["time"],time()+(86400*30));
    echo "En son Girisiniz : ". $_COOKIE["time"];
}

else
    echo "ilk defa girdiniz...";
    setcookie("songiris","ilkgiris",time()+(86400*30));


