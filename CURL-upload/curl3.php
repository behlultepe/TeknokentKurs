<?php
include "baglan.php";
$listeleme = $baglanti -> prepare("SELECT * FROM caldiklarim ");
$listeleme -> execute();

$degeral = $listeleme->fetchAll();
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
    <th>METİN</th>
    <th>URL</th>
    <th>RESİM</th>
    <?php foreach ($degeral as $value){?>
        <tr>
            <td><?php echo $value["id"];?></td>
            <td><?php echo $value["baslik"];?></td>
            <td><?php echo $value["photo"];?></td>
            <td><img src="<?php echo $value["photo"] ?>"></td>
        </tr>
        <?php
    }
    ?>




</table>


</body>



</html>
