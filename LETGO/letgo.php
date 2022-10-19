<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>LETGO</title>
</head>

<body>
    <?php

    session_start();
    if (isset($_SESSION["loginUsername"])) {
        require 'baglan.php';
        if (!isset($_COOKIE["dil"])) {
            setcookie("dil", substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) . '.php', time() + (86400 * 30));
            sleep(2);
            header("Refresh:0; url=http://localhost/letgo.php");
        }
        require $_COOKIE["dil"];
    } else {
        goto end;
    } ?>

    <?php if (isset($_GET["dil"])) {
        if ($_GET["dil"] == "tr") {
            $_COOKIE["dil"] = "tr.php";
            require $_COOKIE["dil"];
            //header("http://localhost/letgo.php");

        } elseif ($_GET["dil"] == "en") {
            $_COOKIE["dil"] = "en.php";
            require $_COOKIE["dil"];
            //header("http://localhost/letgo.php");

        }
    }

    ?>

    <nav class="navbar navbar-expand-lg bg-light">
        <a class="navbar-brand" href="#">LETGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link active" aria-current="page" href="./letgo.php"><?php echo $dil["letgoMainPage"] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $dil["letgoCar"] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $dil["letgoPhone"] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $dil["letgoElectronic"] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><?php echo $dil["quit"] ?></a>
                </li>
            </ul>
        </div>

        <div class="dropdown">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
            </button>
            <ul class="dropdown-menu">
                <?php
                $userID = $_SESSION["loginUsername"];
                $sorguUsers5 = $baglanti->prepare(" SELECT * FROM sepet WHERE userid=? ");
                $sorguUsers5->execute([$userID]);
                $usersListele2 = $sorguUsers5->fetchAll();
                foreach ($usersListele2 as $user) { ?>
                    <li><img width="50px" height="50px" src='<?php echo $user['urunresim']; ?>'></li>
                    <li><?php echo $user["baslik"]; ?></li>
                <?php } ?>
            </ul>
        </div>


        <a href="?dil=tr"><img src="https://cdn-icons-png.flaticon.com/512/197/197518.png" width="50px" height="50px"></a>
        <a href="?dil=en"><img src="https://cdn-icons-png.flaticon.com/512/4060/4060233.png" width="50px" height="50px"><a>

                </span>

    </nav>


    <div class="row">
        <?php
        require 'baglan.php';
        $sayfa = $_GET['sayfa'] ?? 1;
        $adet = 9;
        //sayfa min deger
        if ($sayfa < 1) {
            $sayfa = 1;
        }
        //toplam ürün sayısı bulma
        $toplamurunsayisisorgusu = $baglanti->query("SELECT COUNT(*) FROM products");
        $toplamurunsayisisorgususonucu = $toplamurunsayisisorgusu->fetch();
        $toplamurunsayisi = $toplamurunsayisisorgususonucu['COUNT(*)'];
        $toplamurun = ceil($toplamurunsayisi / $adet);
        //sayfa max deger
        if ($sayfa > $toplamurun) {
            $sayfa = $toplamurun;
        }

        $baslangic = ($sayfa - 1) * $adet;

        $sorguUsers = $baglanti->query(" select * from products LIMIT {$baslangic},{$adet}");

        $usersListele = $sorguUsers->fetchall();

        foreach ($usersListele as $user) {

        ?>
            <div class="col-4 mt-3 ">
                <div class="card mx-auto" style="width: 35rem;">
                    <img src="<?php echo $user["urls"] ?>" class="card-img-top" alt="..." height="200px" width="200px">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $user['baslik']; ?></h5>
                        <p class="card-text"><?php echo $user['fiyat'] . " TL yerine " . $user['indirimli'] . " TL "; ?></p>
                        <form class="mt-3" method="post" action="./sepet.php">
                            <button type="submit" class="btn btn-success" name="Sepet" value="<?php echo $user['id']; ?>">Sepete Ekle</button>
                        </form>
                        <form action="config.php" method="POST">
                            <div>
                                <input type="hidden" name="oyla" id="oyla" value="<?= $user['id'] ?>" />
                                <input type="submit" class="btn btn-secondary mt-3" name="asd" value="Oyla !">
                            </div>
                            <label>Oylama Yapınız:
                                ( <?php $ID = $user['id'];
                                    $sorguUsers = $baglanti->prepare(" SELECT * FROM products WHERE id=?");
                                    $sorguUsers->execute([$ID]);
                                    $usersListele = $sorguUsers->fetch();

                                    $subID = $usersListele['id'];
                                    $sorguUsers2 = $baglanti->prepare(" SELECT * FROM rating where subid =?");
                                    $sorguUsers2->execute([$subID]);
                                    $users = $sorguUsers2->fetchAll();
                                    $toplam = 0;
                                    $i = 0;
                                    foreach ($users as $user) {

                                        $sorguUsers = $baglanti->query(" SELECT * FROM products");
                                        $usersListele = $sorguUsers->fetchall();
                                        foreach ($usersListele as $user2) {

                                            if ($user['subid'] == $user2['id']) {
                                                $toplam = $user['rating'] + $toplam;
                                                $i++;
                                            }
                                        }
                                    }
                                    if ($i == 0) {
                                        echo $i;
                                    } elseif (($toplam / $i) > 0) {
                                        echo ($toplam / $i);
                                        ?>
                                <?php }

                                ?> ) </label>

                            <select name="rating" class="form-select">
                                <option selected>---</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                    </div>
                    </form>
                </div>
            </div>

        <?php
        } ?>
    </div>
    <!-- İçerik Bitiş -->
    <!--sayfalar arası geçiş -->
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php
            for ($i = 1; $i <= $toplamurun; $i++) {
                $active = ($i == $sayfa) ? 'active' : '';
            ?>
                <li class="page-item <?= $active ?> "><a class="page-link" href="?sayfa=<?= $i ?>"><?= $i ?></a></li>
            <?php } ?>
        </ul>
    </nav>

    <?php end: ?>


</body>

</html>