<?php
$sifre = 123456;
echo md5($sifre);//çıktısı 32 byte
echo "<br>";
echo sha1($sifre);//çıktısı 40 byte
echo "<br>";
echo crypt($sifre,rand(1,999));//devamlı farklı şifre oluşturma
echo "<br>";
$encode_veri = base64_encode($sifre); // çıktısı: MTIzNDU2
$orjinal_veri = base64_decode($encode_veri); // çıktısı: 123456
echo 'Encode edilen veri:'.$encode_veri.'<br />';
echo 'Orjinal veri:'.$orjinal_veri;
echo "<br>";
