<?php
require 'baglan.php';
if (isset($_POST["sepettencikar"])) {
    echo "silindi...";
    $sil = $_POST["sepettencikar"];
    $sorguUsers5 = $baglanti->prepare(" DELETE FROM sepet WHERE id=?");
    $sorguUsers5->execute([$sil]);
    header('Location: ./sepet.php');
} ?>
