<?php
include "baglan.php";
$gelenid = $_GET['id'];

$verigetir = $baglanti ->prepare("SELECT * FROM kayit WHERE id =?");
$verigetir ->execute([$gelenid]);
$kayit = $verigetir-> fetch(PDO::FETCH_ASSOC);

?>
<html>
<head>

</head>
<body>
<form method="post" action="guncelle2.php" enctype="multipart/form-data">
    <input type="hidden" name="idno" value="<?php echo $kayit["id"];?>">
    <input type="text" name="ad" value="<?php echo $kayit["adsoyad"];?>">
    <input type="text" name="kadi" value="<?php echo $kayit["kullaniciadi"];?>">
    <input type="text" name="sifre" value="<?php echo $kayit["sifre"];?>">
    <input type="file" name="file" >
    <br> <br> <input type="submit" name="guncelle" <img src="<?php echo $kayit['file'] ?>">

</form>

</body>
</html>


