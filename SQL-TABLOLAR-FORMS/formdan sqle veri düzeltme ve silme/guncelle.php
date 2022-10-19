<?php

require "baglan.php";
$gelenid = $_GET['id'];

$sorgu = $baglanti ->prepare("SELECT * FROM kayit WHERE id =?");

$sorgu ->execute([$gelenid]);

$kayitt = $sorgu->fetch(PDO::FETCH_ASSOC);

?>

<form action="guncelle1.php" method="post">
    <input type="hidden" name="id" value="<?php echo $kayitt['id'] ?>">
    <input type="text" name="adisoyadi" value="<?php echo $kayitt['adisoyadi'] ?>">
    <input type="text" name="kullanici" value="<?php echo $kayitt['kullanici'] ?>">
    <input type="text" name="sifre" value="<?php echo $kayitt['sifre'] ?>">
    <input type="submit" name="guncelle">

</form>
