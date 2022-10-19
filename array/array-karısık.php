<?php
//çarpım tablosu while
/*
$y = 1;

while($y < 10 ){
    $y ++ ;
    for($x = 0 ;$x <= 10; $x++ ){

        echo "$y x $x = "  . $y * $x . "<br>" ;
    }
    echo "<br>";
}
*/
//çarpım tablosu for içinde for

/*for($x=1 ; $x <= 10 ; $x++){

    for($y=0 ; $y <=10 ; $y++){
        echo "$y x $x = ". $y * $x . "<br>";
    }
    echo "<br>";
}*/

//2 dizi 3 ortak

/*$a = array(1,2,3,4,5,6);
$b = array(6,4,7,8,5,9);

if(count(array_intersect($a,$b)) > 0){

    $c = array_intersect($a,$b);
    print_r($c);
    echo "Ortak eleman bulundu."."<br>";
echo " ";
}

else {
    echo "iki dizinin ortak elemanı yok !"."<br>";
}
*/

//dizi forla
/*
$a = [1,2,3,4,5];
$b = [5,4,7,8,9];
$t = 0;
for($i=0;$i<count($a);$i++){
    for($j=0;$j<count($b);$j++){
        if($a[$i]==$b[$j]){
            $t++;
            echo $a[$i]." - ".$b[$j]."<br>";
        }
    }
}
echo $t . " tane aynı"."<br>";
*/
/*
$dizi = [];
for($j=0;$j<count($dizi);$j++){
    $count = 0;
    for($i=0;$i<count($dizi);$i++){
        if($dizi[$j==$dizi[$i]]){
            $count++;
            if($count!=1){
                echo "Bulunuyor.";
                break;
            }
        }
    }
}
echo "bulunmuyor";
*/
/*
// BİR TURU 30DK DA TAMAMLAYAN KOŞUCU HER BİR TURDA +5 DK DAHA GEÇ BİTİRİYOR BU KOŞUCU 50 TUR ATTIĞINDA KAÇ DK KOŞMUŞTUR ?

$dk = 30 ; // İLK TURDA KOŞULAN SÜREYİ YAZDIK
$top = 30; // İLK TURDAKİ TOPLAMIDA KATIP TOPLAM SÜREYİ TANIMLADIK
echo "1. TURDA TOPLAM = ".$dk."<br>";
for($i=2 ; $i <= 50 ; $i++){//2'DEN BAŞLADIK ÇÜNKÜ YAZDIRIRKEN 0'DAN VE 1'DEN BAŞLAMASINI İSTEMEDİK
    $dk+=5;//HER TURDA +5 DK EKLEMEYİ SAĞLAR
    $top+=$dk;//HER TURDA +5 DK EKLENMİŞ SÜREYİ TOPLAM SÜREYE EKLER
    echo $i.". TURDA TOPLAM = ".$top. "<br>";

}
*/
/*
// 1,100 arası random sayı oluştur 50'den küçükse %10 büyükse %20 sini al

$sayi = rand(1,100);

if ($sayi < 50){
    $s = $sayi * 0.1 ;
    echo "SAYI = ".$sayi."<br>";
    echo "YÜZDESİ = ". $s;

}
if($sayi > 50){
    $s = $sayi * 0.2 ;
    echo "SAYI = ".$sayi."<br>";
    echo "YÜZDESİ = ". $s;
}
*/
/*
//DİZİDEKİ EN BÜYÜK VE EN KÜÇÜK DEĞERLERİ BULMAK

$dizi = array(15,25,86,12,96,5,7,3);
$enk = 100;
$enb = 1;
foreach ($dizi as $karakter){
    if ($karakter<$enk){
        $enk = $karakter;
    }
    elseif ($karakter>$enb){
        $enb = $karakter;
    }
}
echo "<br>"."EN KÜÇÜK SAYI = ".$enk;
echo "<br>"."EN BÜYÜK SAYI = ".$enb;
*/
/*

//RASTGELE OLUŞTURULAN SAYININ ÇARPIM TABLOSUNU OLUŞTURMA
$rastgele = rand(1,10);
for ($i=0 ; $i<=10 ; $i++){
    echo $rastgele ."x".$i." = ".$rastgele*$i."<br>";
}
*/

// İKİ AÇISI VERİLEN ÜÇGENİN ÜÇÜNCÜ AÇISINI HESAPLAYIN
/*
$a = 30 ;
$b = 50 ;

$c = 180 - ($a+$b);

echo "birinci açı =  ".$a ."<br>";
echo "ikinci açı =  ".$b ."<br>";
echo "bulunan açı =  ".$c."<br>" ;
*/
/*

$rastgele = rand(1,10);
echo "Seçilen Sayı = ".$rastgele."<br>";
if($rastgele % 2 == 0){
    echo "SEÇİLEN SAYI ÇİFT OLD. İÇİN KARESİ ALINACAK = ";
    echo $rastgele**2;
}
else{
    echo "SEÇİLEN SAYI TEK OLD. İÇİN KÜPÜ ALINACAK = ";
    echo $rastgele**3;
}
*/
/*
$kume = array();//BOŞ KÜME OLUŞTURDUK...
for ($i = 41 ; $i <= 100 ; $i++){//KÜMEYİ TEK TEK YAZMAK YERİNE FOR DÖNGÜSÜYLE HIZLI BİR ŞEKİLDE YAZDIRDIK
    array_push($kume,$i); //ARRAY PUSHLA KUMEYİ ELEMANLARI SOKTUK
}

foreach ($kume as $eleman){ // DİZİYİ TEK TEK SIRALADIK
    if ($eleman % 7 == 0){ // 7'YE TAM BÖLÜNENLERİ İF'LE ALDIK

        echo "7'ye tam bölünen = ".$eleman."<br>";

    }

}
*/
/*
$sayac = 0;
$dizi = array();
for ($i = 1 ; $i <=1000 ; $i++){
    $dizi[]="$i";
}
for ($i = 1 ; $i >= 1000 ; $i--){
    $dizi[]="$i";
}
for ($i=0; $i < count($dizi);$i++){
    for ($j=$i+1; $j < count($dizi);$j++){
        if ($dizi[$i]==$dizi[$j]){
            $sayac++;
        }

    }
}
if($sayac==0){
    echo "tekrarlayan eleman yok";
}
*/

































