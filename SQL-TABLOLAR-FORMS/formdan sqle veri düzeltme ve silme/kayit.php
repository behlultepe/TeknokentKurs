<?php
require 'baglan.php';

$gelenkullanici = $_GET['kullanici'];
$gelensifre = $_GET['sifre'];

$sorgu = $baglanti -> prepare("SELECT * FROM kayit WHERE kullanici =? and sifre =?");

$sorgu -> execute([$gelenkullanici,$gelensifre]);

$kayitsayi = $sorgu ->rowCount();

$kayitt = $sorgu -> fetchAll(PDO::FETCH_ASSOC);

echo "<table border = '1' align='center' >" ; ?>

<tr>
    <th>adisoyadi</th>
    <th>kullanici</th>
    <th>sifre</th>
</tr>
<?php
foreach ($kayitt as $value){
    ?>
    <tr>
        <td><?php echo $value['adisoyadi']; ?> </td>
        <td><?php echo $value['kullanici']; ?> </td>
        <td><?php echo $value['sifre']; ?> </td>
        <td><a href='guncelle.php?id=<?php echo $value['id'] ?>'> Duzenle </td>
        <td><a href='sil.php?silid=<?php echo $value['id'] ?>'> Sil </td>
    </tr>
<?php
}
echo "</table>";
?>