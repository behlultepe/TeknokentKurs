<html>
<head>

</head>
<body>
<?php
$dizin = './';
$yuklenecek_dosya = $dizin . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $yuklenecek_dosya))
{
    echo '<img src='."$yuklenecek_dosya".' width="20% height="50%" "><br>';
    ?>
    <H2 style="text-align: center">Başarıyla Yüklenmiştir...</H2>
<?php
} else {?>
    <H2>Dosya yüklenemedi...</H2>
<?php
}
?>


</body>

</html>
