<?php
/*
$no = 15;

try {
    //kodlar bu bloğa yazılır
    if ($no == 17) {
        echo "sayı 17";
    } else {
        throw new Exception("HATA!"); //hata tanımlanır
    }
} catch (Exception $e) {
    //hata var ise burada yakalanır
    echo "mesaj -> " . $e->getMessage(); //hata çıktısı üretilir
}
*/


/*
$dizi = ["araba","ev","uçak",1,2,3];
echo "<pre>";
print_r($dizi);
echo "<pre>";
var_dump($dizi);
*/
/*
for ($i=0 ; $i<10 ; $i++){
    if ($i == 5){
        die("bu bir hata mesajıdır...");

    }
    echo $i."'nci döngü çalışıyor ..."."<br>";
}
*/
/*
$bakiye = 50 ;
$toplam = 70 ;
try {
    if ($bakiye<$toplam) {
        throw new Exception("yetersiz bakiye");
    }
    else
        echo "satın alındı" . "<br>";
    }
catch(Exception $e) {
    echo $e->getMessage();
}
*/
/*
try {
    $baglanti = new PDO("mysql:host=localhost;dbname=TEKNO",'root','');//mysql bağlantımızı açtık

    $baglanti ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//hata kodu ayarlaması yaptık
    echo "BAĞLANTI BAŞARILI ... "."<br>";

    $sorgu = $baglanti -> query("select * from ogrenciler");//sorguyu tüm tabloda tarattık

    echo "toplam bulunan kayıt : ". $sorgu -> rowCount();

    $baglanti = null;//sorguyu durdurduk
}
catch (PDOException $hata) {

    die($hata->getMessage());
}
*/
/*
try {
    $baglanti = new PDO("mysql:host=localhost;dbname=TEKNO",'root','');//mysql bağlantımızı açtık

    $baglanti ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//hata kodu ayarlaması yaptık
    echo "BAĞLANTI BAŞARILI ... "."<br>";
    $sorgu = $baglanti -> query("select * from ogrenciler");//sorguyu tüm tabloda tarattık

    $ekle = $baglanti -> query("INSERT INTO ogrenciler(ad,soyad,numara,kimlik,sinif,telefon,boyu,kilosu,adres)
        VALUES('ali','veli',252,32092110558,2,05428655116,1.86,80,'asdasdasd')");

}
catch (PDOException $hata) {

    die($hata->getMessage());
}
*/
/*
$baglanti = new PDO("mysql:host=localhost;dbname=TEKNO",'root','');//mysql bağlantımızı açtık

$baglanti ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//hata kodu ayarlaması yaptık
echo "BAĞLANTI BAŞARILI ... "."<br>";
$sorgu = $baglanti -> query("select * from ogrenciler");//sorguyu tüm tabloda tarattık
$cikti = $sorgu -> fetch_array();
while($cikti){
    echo "Adı: " . $cikti["ad"] . "<br /> Soyadı: " . $cikti["soyad"] . "<br /> Numarası: " . $cikti["numara"]."<br>"
        ."TC: " . $cikti["kimlik"] . "<br /> Sınıfı: " . $cikti["sinif"] . "<br /> telefonu: " . $cikti["telefon"]."<br>"
        ."BOY: " . $cikti["boyu"] . "<br /> Kilosu: " . $cikti["kilosu"] . "<br /> Adresi: " . $cikti["adres"];

}
*/
/*
try {
    $baglanti = new PDO("mysql:host=localhost;dbname=TEKNO",'root','');//mysql bağlantımızı açtık

    $baglanti ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//hata kodu ayarlaması yaptık
    echo "BAĞLANTI BAŞARILI ... "."<br>";

    $sorgu = $baglanti -> query("select ad,soyad from ogrenciler where ad='Behlül'");//sorguyu sadece ad ve soyadda tarattık

    //$dizi = $sorgu -> fetchAll(PDO::FETCH_ASSOC);
    //echo "<pre>";
    //var_dump($dizi);
    while($dizi = $sorgu -> fetch(PDO::FETCH_ASSOC)){
        echo "Adı: " . $dizi["ad"] . "<br /> Soyadı: " . $dizi["soyad"]."<br>";
        echo "<br>";

    }

}
catch (PDOException $hata) {

    die($hata->getMessage());
}
*/
/*
try {
    $baglanti = new PDO("mysql:host=localhost;dbname=TEKNO",'root','');//mysql bağlantımızı açtık

    $baglanti ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//hata kodu ayarlaması yaptık
    echo "BAĞLANTI BAŞARILI ... "."<br>";

    $sorgu = $baglanti -> query("DELETE FROM ogrenciler where ad = 'Behlül';");//sorguyu istenilen adı siler ...

    while($dizi = $sorgu -> fetch(PDO::FETCH_ASSOC)){
        echo "Adı: " . $dizi["ad"] . "<br /> Soyadı: " . $dizi["soyad"]."<br>";
        echo "<br>";

    }

}
catch (PDOException $hata) {

    die($hata->getMessage());
}
*/
/*
$id = 'ali';
$sifre = 32092110558;
try {
    $baglanti = new PDO("mysql:host=localhost;dbname=TEKNO", 'root', '');//mysql bağlantımızı açtık

    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//hata kodu ayarlaması yaptık
    echo "BAĞLANTI BAŞARILI ... " . "<br>";

    $sorgu = $baglanti->query("select ad,kimlik from ogrenciler");//sorguyu tüm tabloda tarattık
    $liste = $sorgu->fetchAll();
    $dizi = $sorgu->fetch(PDO::FETCH_ASSOC);
    $sayac = 0;
    foreach ($liste as $tek) {

        if ($tek["ad"] == $id and $tek["kimlik"] == $sifre) {
            echo "Kullanıcı adı ve şifre doğru" . " Kullanıcı adı = " . $tek["ad"] . " Şifre = " . $tek["kimlik"] . "<br>";
            $sayac++;
        } else {
            echo "Kullanıcı adı veya şifre yanlış " . "<br>";
        }
    }
} catch (PDOException $hata) {

    die($hata->getMessage());
}
/*if ($sayac > 0){
    echo "Kullanıcı adı ve şifre doğru" . " Kullanıcı adı = " . $tek["ad"] . " Şifre = " . $tek["kimlik"] . "<br>";
}
else
    echo "Kullanıcı adı veya şifre yanlış " . "<br>";

*/

//$baglanti = new PDO("mysql:host=localhost;dbname=TEKNO", 'root', '');//mysql bağlantımızı açtık

/*
$tablo = $baglanti -> query("CREATE TABLE notlar (
    
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    ogrenci_id INT  , 
    vize VARCHAR(3) , 
    final_not VARCHAR(3) , 
    butunleme VARCHAR(3) , 
    sinav_tarih VARCHAR(6)
)");

$liste= $baglanti -> fetchAll(PDO::FETCH_ASSOC);

$sorgu = $baglanti->prepare(
    "INSERT INTO notlar(ogrenci_adi, vize, final_not,butunleme,sinav_tarih) VALUES(1, 40, 80,' ' ,2022/1 )"
);
if (mysqli_query($liste, $sorgu)) {
    echo "Kayıt girildi!";
}
else {
    echo "Kayıt giriş hatası: " . mysqli_error($bag);
}

$sorgu2 = $baglanti->query("select ıd , ad , soyad from ogrenciler");//sorguyu tüm tabloda tarattık
$liste = $sorgu2->fetchAll(PDO::FETCH_ASSOC);

foreach ($liste as $tek) {
    echo $tek["ad"] . " ". $tek["soyad"]. " ";
    $sorgu3 = $baglanti->query("select * from notlar where ogrenci_adi =" . $tek[ıd]);
    $liste2 = $sorgu3->fetchAll(PDO::FETCH_ASSOC);
    foreach ($liste2 as $tek2) {
        echo $tek2["vize"]*0.3." ".$tek2["final_not"]*0.7;
    }
}
*/
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
try {
    $baglanti = new PDO("mysql:host=localhost;dbname=TEKNO", 'root', '');
    // PDO hata modunu istisnaya ayarlama
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // MySQL tablo oluşturma komutu
    /*$sql = "INSERT INTO notlar (ogrenci_id,vize, final_not,butunleme,sinav_tarih) VALUES ('5', '20','60',' ','2022/1')";
    $baglanti->exec($sql);
    echo "Tablo oluşturuldu!";
}
catch(PDOException $e) {
    echo "Hata: " . $e->getMessage();
}
$sorgu = $baglanti ->query("select * from ogrencii");
$dizi = $sorgu -> fetchAll();
$sorgu2 = $baglanti ->query("select * from notlar ");
$dizi2 = $sorgu2 -> fetchAll();

foreach ($dizi as $tek){
    echo $tek['ad']. ' '.$tek['soyad']." ";
    foreach ($dizi2 as $tek2){
        if ($tek2['ogrenci_id'] == $tek['id']){
            echo $tek2['id'] ." numaralı öğrencinin ".$tek2['sinav_tarih']." ortalaması = ".($tek2['vize']*0.3+$tek2['final_not']*0.7."<br>");
        }
    }
}

foreach ($dizi2 as $notlar){
    $sorgula = $baglanti ->query("select * from ogrencii where id = ".$notlar['ogrenci_id']);
    if ($sorgula ->rowCount()==0){
        $sil = $baglanti->query("DELETE FROM notlar where ogrenci_id = ".$notlar['ogrenci_id']);
    }
}


$baglanti = null;

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//$sql = "INSERT INTO ogrencii (ad,soyad,numara) VALUES ('ahmet', 'veli','102')";
//$baglanti->exec($sql);
*/
/*
$username = 'root';
$pass = '';
$baglanti = new PDO("mysql:host=localhost;dbname=TEKNO", $username, $pass);
*/
//$sutunekle = $baglanti ->query("ALTER TABLE ogrenciler add cinsiyet smallint(2) NOT NULL");//sütun ekledik
//$sutunduzenle = $baglanti ->query("ALTER TABLE ogrenciler CHANGE cinsiyet cins int(3)") ;// sütunun yapısını ve adını değiştirir
//$sutunsilme = $baglanti ->query("ALTER TABLE ogrenciler DROP cinsiyet ");
/*$tablobosaltma = $baglanti ->query("TRUNCATE TABLE ogrenciler ");
$tumtablolarilistele = $baglanti ->query("SHOW TABLES ");
foreach ($tumtablolarilistele as $eleman){
    echo $eleman[0]."<br>";*/
}/*
if ($sutunekle){
    echo "Sütun eklendi...";
}
else
    echo "Bir sorun oluştu...";
*/

require 'baglan.php';


$tablo = $baglanti->prepare("INSERT INTO ogrencilerr (ad,soyad,yas,cinsiyet) VALUES (:ad,:soyad,:yas,:cinsiyet)");

$tablo->bindParam(':ad', $ad);
$tablo->bindParam(':soyad', $soyad);
$tablo->bindParam(':yas', $yas);
$tablo->bindParam(':cinsiyet', $cinsiyet);
/*
$ad = 'behlül';
$soyad = 'tepe';
$yas = '18';
$cinsiyet = 'erkek';

$ad = 'yasemin';
$soyad = 'veli';
$yas = '45';
$cinsiyet = 'kadın';

$ad = 'ahmet';
$soyad = 'ikiz';
$yas = '35';
$cinsiyet = 'erkek';
$tablo->execute();
*/

$baglanti = null;
