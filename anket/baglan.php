<?php

try {
    $baglanti = new PDO("mysql:host=localhost;dbname=anket",'root','');//mysql bağlantımızı açtık
    $baglanti ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//hata kodu ayarlaması yaptık

} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
}

