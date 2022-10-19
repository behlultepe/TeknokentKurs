<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="slot.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="bg-image" 
     style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
            height: 100vh">

    <?php require 'baglan.php'; 
    session_start();
    ?>
    <nav class="navbar navbar-expand-lg bg-light">
        <a class="navbar-brand" href="#">SLOT MAKİNESİ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Ana Sayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hesap Bilgileri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cüzdanım</a>
                </li>
            </ul>
        </div>
        <div class="dropleft ">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
                    <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z" />
                </svg>
            </button>
            <ul class="dropdown-menu">
            <?php
                $userID = $_SESSION["loginUsername"];
                $sorguUsers5 = $baglanti->prepare(" SELECT * FROM slot WHERE username=? ");
                $sorguUsers5->execute([$userID]);
                $usersListele2 = $sorguUsers5->fetchAll();
                foreach ($usersListele2 as $user) { ?>
                    <li><?php echo "Bakiyeniz : ".$user["money"]." $"; ?></li>
                <?php } ?>
            </ul>
        </div>
    </nav>

    <?php
    
    $sorguUsers = $baglanti->prepare(" SELECT * from slot WHERE username= ? ");
    $sorguUsers->execute([$_SESSION["loginUsername"]]);
    $usersListele = $sorguUsers->fetchAll();
    foreach ($usersListele as $user) {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $num3 = rand(1, 10);
    ?>
        <h1 style="text-align: center;"><?php echo "Kalan Hakkınız : " . $user['hakkiniz']; ?></h1>
        <div class="container" style="text-align: center">
            <div class="disdiv">
                <button type="checkbox" class="btn btn-success btn-lg"><?php echo $num1; ?></button>
                <button type="checkbox" class="btn btn-success btn-lg"><?php echo $num2; ?></button>
                <button type="checkbox" class="btn btn-success btn-lg"><?php echo $num3; ?></button><br><br>
            </div>
            <a href="slot.php"><button type="checkbox" class="btn btn-danger btn-lg" name="mach">Slotu Başlat</button></a><br><br>

        </div>

        <?php

if($num1==$num2 and $num3==$num2){?>
    <div class="alert alert-success" role="alert" style="text-align: center;"><?php echo "100$ kazandınız...";?></div>
    <?php
    $newmoney = $user['money']+100;
    $new = $baglanti->prepare(" UPDATE slot SET money=? WHERE username=?");
    $new->execute([$newmoney,$userID]);
}
elseif($num1==$num2 or $num1==$num3 or $num2==$num3){?>
   <div class="alert alert-primary" role="alert" style="text-align: center;"><?php echo "5 hak ve 20$ kazandınız...";?></div>
    <?php $newmoney = $user['money']+20;
    $newpiece= $user['hakkiniz']+5;
    $new = $baglanti->prepare(" UPDATE slot SET hakkiniz=?,money=? WHERE username=?");
    $new->execute([$newpiece,$newmoney,$userID]);
}
elseif($user['hakkiniz']==0){?>
    <div class="alert alert-danger" role="alert" style="text-align: center;"><?php echo "Bugün Ki Hakkınız Bitmiştir..."."<br>";?></div>
    <?php
    $newpiece=0;
    date_default_timezone_set('Europe/Istanbul');
    $time = date('d.m.Y H:i:s');
    $new = $baglanti->prepare(" UPDATE slot SET hakkiniz=?,tarih=? WHERE username=?");
    $new->execute([$newpiece,$time,$userID]);
    echo "ana sayfaya döndürüleceksiniz..."."<br>";
   header("Refresh: 2; url=./index.php");
    
}
else{?>
    <div class="alert alert-primary" role="alert" style="text-align: center;"><?php echo "Tekrar Deneyiniz...";?></div>
    <?php
    $newpiece=$user['hakkiniz']-1;
    $new = $baglanti->prepare(" UPDATE slot SET hakkiniz=? WHERE username=?");
    $new->execute([$newpiece,$userID]);
}
        ?>
    <?php } ?>

    <?php
    /*
for($hak=5;$hak>0;$hak--){
    $num1=rand(1,10);
    $num2=rand(1,10);
    $num3=rand(1,10);
    echo "<br>".$num1."  ".$num2."  ".$num3."<br>";
if($num1==$num2 and $num3==$num2){
    echo "Winner";
    break;
}
elseif($num1==$num2 or $num1==$num3 or $num2==$num3){
    echo "Yeni Hak Kazandınız...";
    $hak=$hak+1;
}
elseif($hak==0){
    echo "Bugün Ki Hakkınız Bitmiştir...";
}
else{
    echo "Tekrar Deneyiniz...";
}
echo $hak;

}
*/

    ?>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>