<?php
require 'baglan.php';
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
<table border="1" id="personel" >
    <tr>
        <th> ADI </th>
        <th> SİFRE </th>
    </tr>
    <tr>
        <?php

        $verileriCek = $baglanti -> query("select * from kayit");
        $liste = $verileriCek ->fetchAll();
        foreach ($liste as $veri) {?>
            $kullanici = $veri['kullanici'];
            $sifre = $veri['sifre'];
            echo "<tr>
                    <td>$kullanici</td>
                    <td>$sifre</td> 
                    </tr>";
        }


    </tr>
</table>


</body>



</html>