<?php
try {
    $baglanti = new PDO("mysql:host=localhost;dbname=TEKNO", 'root', '');
    // PDO hata modunu istisnaya ayarlama
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // MySQL tablo oluşturma komutu
    //$sql = "INSERT INTO notlar (ogrenci_id,vize, final_not,butunleme,sinav_tarih) VALUES ('5', '20','60',' ','2022/1')";
    //$baglanti->exec($sql);
} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
}
/*
foreach ($dizi as $tek){
    echo $tek['ad']. ' '.$tek['soyad']." ";
    foreach ($dizi2 as $tek2){
        if ($tek2['ogrenci_id'] == $tek['id']){
            echo $tek2['id'] ." numaralı öğrencinin ".$tek2['sinav_tarih']." ortalaması = ".($tek2['vize']*0.3+$tek2['final_not']*0.7."<br>");
        }
    }
}
/*
foreach ($dizi2 as $notlar){
    $sorgula = $baglanti ->query("select * from ogrencii where id = ".$notlar['ogrenci_id']);
    if ($sorgula ->rowCount()==0){
        $sil = $baglanti->query("DELETE FROM notlar where ogrenci_id = ".$notlar['ogrenci_id']);
    }
}
*/
/*
foreach($dizi2 as $not) {
    $ortalama = ($not['vize'] * 0.3) + ($not['final_not'] * 0.7);
    $sorgu2 = $baglanti -> query(" SELECT * FROM ogrencii WHERE id = " . $not["ogrenci_id"]);

    echo $ortalama . "<br>";

    if($ortalama < 45){
        $sil = $baglanti -> query("DELETE FROM notlar WHERE ogrenci_id = " . $not["ogrenci_id"] );
        $sil2 = $baglanti -> query("DELETE FROM ogrencii WHERE id = " . $not["ogrenci_id"] );
        echo "silindi" . $not["ad"];

    }
}
*//*
$sorgu = $baglanti->query("select * from ogrencii");
$dizi = $sorgu->fetchAll();
foreach ($dizi as $ogr){
    $sorgu2 = $baglanti->query("select * from notlar where ogrenci_id = ". $ogr["id"]);
    $dizi2 = $sorgu2->fetchAll();
    foreach ($dizi2 as $not) {
        $ortalama = ($not['vize'] * 0.3) + ($not['final_not'] * 0.7);
        $ogrencisorgu = $baglanti->query("SELECT * FROM ogrencii WHERE id = " . $not["ogrenci_id"]);
        echo $ogr["ad"] . " " . $ogr["soyad"] . "ortalama = " . $ortalama . "dönem = " . $not["sinav_tarih"] . "<br>";
        $rastgele = rand(1, 100);
        $rastgele2 = rand(1, 100);
        $ogrno = $not["ogrenci_id"];
        $sql1 = $baglanti->query("INSERT INTO notlar (ogrenci_id,vize, final_not,butunleme,sinav_tarih) VALUES ($ogrno, '$rastgele' ,'$rastgele2',' ','2022/2')");

    }

}
*//*
$sorgu = $baglanti->query("select * from ogrencii");
$sorgu2 = $baglanti->query("select * from notlar ");
$dizi2 = $sorgu2->fetchAll();
$dizi = $sorgu->fetchAll();
foreach ($dizi as $tek){
    echo $tek['ad']. ' '.$tek['soyad']." ";
    foreach ($dizi2 as $tek2){
        $ogrno = $tek2["ogrenci_id"];
        if ($tek2['ogrenci_id'] == $tek['id']){
            echo $ogrno ." numaralı öğrencinin ".$tek2['sinav_tarih']." ortalaması = ".($tek2['vize']*0.3+$tek2['final_not']*0.7."<br>");
        }

    }
}
*//*
$sorgu3 = $baglanti->query("select * from ogrencii");
$dizi3 = $sorgu3->fetchAll();
foreach ($dizi3 as $kopya) {
    echo $kopya['ad']. ' '.$kopya['soyad']." ";
    $sorgu4 = $baglanti->query("select * from notlar ");
    $dizi4 = $sorgu4->fetchAll();
    foreach ($dizi4 as $not) {
        $ortalama2 = ($not['vize'] * 0.3) + ($not['final_not'] * 0.7);
    if ($not["ogrenci_id"] == $not["ogrenci_id"] and $ortalama2 == $ortalama2*0.2){
        echo $kopya["ad"]."kopya çekmiştir";

    }
    else
        echo "kimse kopya çekmedi...";
    }
}
*/
$sorgunotlar = $baglanti->query("  SELECT * FROM notlar ");
$notlarlistele = $sorgunotlar->fetchall();
$sorgubilgiler = $baglanti->query("  SELECT * FROM ogrencii ");
$bilgilerlistele = $sorgubilgiler->fetchall();

foreach ($bilgilerlistele as $bilgiler) {

    foreach ($notlarlistele as $notlar) {

        if ($notlar['ogrenci_id'] == $bilgiler['id']) {
            if ($notlar['sinav_tarih'] == "2022/1") {
                $ortalama1[] = $notlar['vize'] * 0.3 + $notlar['final_not'] * 0.7;
            }

            if ($notlar['sinav_tarih'] == "2022/2") {
                $ortalama2[] = $notlar['vize'] * 0.3 + $notlar['final_not'] * 0.7;
            }
        }

    }
}

for ($i = 0; $i < count($ortalama2); $i++) {
    if ($ortalama2[$i] > ($ortalama1[$i] + $ortalama1[$i] * 0.20)) {


        $sorgubilgiler1 = $baglanti->query("  select * from ogrencii ");
        $bilgilerlistele1 = $sorgubilgiler1->fetch((PDO::FETCH_NUM));


        echo "kopyacı eleman " . $bilgilerlistele1[$i + 1] . " ortalaması birinci dönem= " . $ortalama1[$i] . " " . $bilgilerlistele1[$i+1] . " ın ortalaması ikinci dönem= " . $ortalama2[$i] . "<br>";

    }


}
