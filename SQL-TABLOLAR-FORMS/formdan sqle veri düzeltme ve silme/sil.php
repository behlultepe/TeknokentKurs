<?php
require "baglan.php";
$gelenid = $_POST['silid'];

$sorgu2 = $baglanti ->prepare("DELETE FROM kayit WHERE id=?");
$sorgu2 ->execute([$gelenid]);

if ($sorgu2){
    echo "kayıt başarıyla silindi ...";
}
?>