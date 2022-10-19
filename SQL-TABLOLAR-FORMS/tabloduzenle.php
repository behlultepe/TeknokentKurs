<html>
<head>
    <style>
        #personel{
            width: 50%;
            font: bold 1.25em "Trebuchet MS", Verdana, Arial, Helvetica,
            sans-serif;
            border: 15px solid #506050;
            letter-spacing: 2px;
            text-align: left;
            padding: 6px 6px 6px 12px;
            background: #C1DAD7;
            border-collapse: collapse;
        }

        #personel th{
            color: #41AA7F;
            padding: 6px 6px 6px 12px;

        }

        #personel td{
            padding: 6px 6px 6px 12px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 300;
        }
        #personel tr{
            color: #112233;
            background: #fff;
        }
        #personel tr:hover{
            background:#202020;
            color:#fff;
        }
    </style>
</head>
<body>
<?php
include 'baglan.php';
$gelenkullanici = $_GET['kullanici'];
$gelensifre = $_GET['sifre'];

$sorgu = $baglanti -> prepare("select * from kayit where kullanici =? and sifre =?");

$sorgu -> execute([$gelenkullanici,$gelensifre]);

$kayitsayi = $sorgu ->rowCount();

$kayitsay = $sorgu ->fetchAll(PDO::FETCH_ASSOC);

echo "<table border = '1' align = 'center'>"; ?>

<tr>
    <th>KULLANICI</th>
    <th>SİFRE</th>
</tr>
<?php
foreach ($kayitsay as $say){
    ?>
<tr>
    <td>
        <?php
        echo $say['kullanici'];
        ?>
    </td>
    <td>
        <?php
        echo $say['sifre'];
        ?>
    </td>
    <td>
        <a href='duzenleme.php?kullanici=<?php echo $say['kullanici']?>'>Düzenle</a>
    </td>
</tr>
<?php
}
echo "</table>";
?>
</body>
</html>

