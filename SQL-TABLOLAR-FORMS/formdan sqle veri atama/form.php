<?php
include "baglan.php";
$listeleme = $baglanti -> prepare("SELECT * FROM kayit ");
$listeleme -> execute();

$degeral = $listeleme->fetchAll(PDO::FETCH_ASSOC);
?>

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
    <table border="1" id="personel">
        <th>ID</th>
        <th>ADI SOYADI</th>
        <th>KULLANICI ADI</th>
        <th>SİFRESİ</th>
        <th colspan="2">İŞLEMLER</th>
        <th>VESİKALIK</th>
        <?php foreach ($degeral as $value){?>
            <tr>
                <td><?php echo $value["id"];?></td>
                <td><?php echo $value["adsoyad"];?></td>
                <td><?php echo $value["kullaniciadi"];?></td>
                <td><?php echo $value["sifre"];?></td>
                    <td><a href='guncelle.php?id= <?php echo $value["id"];?>'>GUNCELLEME</a></td>
                    <td><a href='dersislem.php?silinecekid= <?php echo $value["id"];?>'>SİLME</a></td>
                <td>
                    <img src="<?php echo $value["file"]; ?>" width="100px">
                </td>
            </tr>
        <?php
        }
        ?>




    </table>


</body>



</html>
