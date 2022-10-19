<?php
require 'baglan.php';
//oylama işlemleri
session_start();
$userID = $_SESSION["loginUsername"];
$subID = $_POST["oyla"];
if (isset($_POST['rating'])) {
    echo "<hr>";
echo $_POST["oyla"] . ". ürün için oylama yapılıyor...";
echo "<hr>";
echo $_SESSION["loginUsername"] . " kullanıcısı oylama yapıyor...";
echo "<hr>";
    $rating = intval($_POST['rating']);
    $oy = $baglanti->query("SELECT * FROM rating WHERE userid='" . $userID . "' AND subid='" . $subID . "'")->rowCount();
    if ($oy == 0) {
        $insert = $baglanti->query("INSERT INTO rating(subid,userid,rating) VALUES('$subID','$userID','$rating')");

        if ($insert) {
            echo "Oylama Yapıldı...";
        } else {
            echo "Oylama Yapılırken Bir hata oluştu";
        }
    } else {
        echo "Daha Önce Oylama Yapılmış...";
    }
}

$total_rating = $baglanti->query("SELECT * FROM rating WHERE subid='" . $subID . "'")->rowCount();

function ratingcount($rating, $subID)
{
    global $baglanti;

    return $baglanti->query("SELECT * FROM rating WHERE subid='" . $subID . "' AND rating='" . $rating . "'")->rowCount();
}

$oy1 = ratingcount(1, $subID) * 1;
$oy2 = ratingcount(2, $subID) * 2;
$oy3 = ratingcount(3, $subID) * 3;
$oy4 = ratingcount(4, $subID) * 4;
$oy5 = ratingcount(5, $subID) * 5;

if ($total_rating == 0) {
    $rating_reponse = 0;
} else {
    $rating_reponse = (($oy1 + $oy2 + $oy3 + $oy4 + $oy5) / $total_rating);
}
echo "<br>" . "ORTALAMASI : " . $rating_reponse ."<br>";


?>
<a href="letgo.php"><button type="button" >Geri Dön</button></a>
