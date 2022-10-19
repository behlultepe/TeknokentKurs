<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sepetim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                    <a class="nav-link" href="#"><?php echo $dil["account"] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $dil["favorites"] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $dil["ShoppingCart"] ?></a>
                </li>
            </ul>
        </div>
        <span class="navbar-text">
            <a href="?dil=tr"><img src="https://cdn-icons-png.flaticon.com/512/197/197518.png" width="50px" height="50px"></a>
            <a href="?dil=en"><img src="https://cdn-icons-png.flaticon.com/512/4060/4060233.png" width="50px" height="50px"><a>

        </span>

    </nav>
    <div>
        <table class="table table-bordered">
            <thead class="table table-success table-striped">
                <tr>
                    <th scope="col">Ürün Resmi</th>
                    <th scope="col">Ürün Adı</th>
                    <th scope="col">Ödenen ücret</th>
                    <th scope="col">Adeti Giriniz</th>
                    <th scope="col">Sipariş Ver</th>
                    <th scope="col">Ürün Sil</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_POST["Sepet"])) {
                    $userID = $_SESSION["loginUsername"];
                    $id = $_POST["Sepet"];
                    echo "Kullanıcı = ".$userID."<br>";
                    echo "Ürün ID = ".$id;
                    $sorguUsers = $baglanti->prepare(" INSERT INTO sepet SET urunresim=?,baslik=?,ucret=?,userid=?,subid=?");

                    $sorguUsers2 = $baglanti->prepare(" SELECT * FROM products where id =?");
                    $sorguUsers2->execute([$id]);
                    $usersListele = $sorguUsers2->fetch();
                    $sorguUsers ->execute([$usersListele["urls"],$usersListele["baslik"],$usersListele['indirimli'],$userID,$id]);
                }?> <?php
                    $userID = $_SESSION["loginUsername"];
                    $sorguUsers5 = $baglanti->prepare(" SELECT * FROM sepet WHERE userid=? ");
                    $sorguUsers5 ->execute([$userID]);
                    $usersListele2 = $sorguUsers5 -> fetchall();
                    foreach ($usersListele2 as $user) { ?>
                        <tr>
                            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                            <td><img width="50px" height="50px" src='<?php echo $user['urunresim']; ?>'></td>
                            <td><?php echo $user['baslik'];  ?></td>
                            <td><?php echo $user['ucret'] . " TL"; ?></td>
                            <td><input type="text" name="adet" placeholder="Ürün Adetini Giriniz" ></td>
                            <td>
                            <form class="mt-3" method="post" action="./onay.php">
                            <button type="submit" class="btn btn-success" name="Sepeteekle" value="<?php echo $user['id']; ?>">Sepeti Onayla</button>
                            </form>
                    </td>
                    <td><form class="mt-3" method="POST" action="./urunsil.php">
                        <button type="submit" class="btn btn-danger" name="sepettencikar" value="<?php echo $user['id']; ?>">Ürünü Sil</button>
                    </form></td>
                        </tr>
                <?php } ?>
                
            </tbody>
            
        </table>
    </div>
    <div>
                    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>