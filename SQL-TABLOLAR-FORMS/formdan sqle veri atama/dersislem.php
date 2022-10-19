<?php
include "baglan.php";

$id = $_GET['silinecekid'];

$sil = $baglanti->prepare("DELETE FROM kayit WHERE id =?");
$sil->execute([$id]);

if ($sil) {
    header("location:form.php");
}

?>