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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Sipariş Ver</title>
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

<!--<nav class="navbar navbar-expand-lg bg-light">
        <a class="navbar-brand" href="#">LETGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link active" aria-current="page" href="./letgo.php"><?php /* echo $dil["letgoMainPage"] ?></a>
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
                    <a class="nav-link" href="index.php"><?php echo $dil["quit"] */?></a>
                </li>
            </ul>
        </div>
        <a href="?dil=tr"><img src="https://cdn-icons-png.flaticon.com/512/197/197518.png" width="50px" height="50px"></a>
        <a href="?dil=en"><img src="https://cdn-icons-png.flaticon.com/512/4060/4060233.png" width="50px" height="50px"><a>

        </span>
</nav>-->
<div class="mt-3 w-25 p-3 text-center container">
<?php
  require 'baglan.php';
if (isset($_POST["Sepeteekle"])) {
    $ekle = $_POST["Sepeteekle"];
    $sorguUsers = $baglanti->prepare(" SELECT * FROM sepet where id =?");
    $sorguUsers->execute([$ekle]);
    $usersListele = $sorguUsers->fetchAll();
    foreach ($usersListele as $user) { ?>
<td><img width="200px" height="200px" src='<?php echo $user['urunresim']; ?>'></td>
<td><?php echo $user['ucret'] . " TL"; ?></td>

<?php } } ?>
</div>
<div class = "mt-3 w-25 p-3 text-center container" >
    <form action="payment.php" method="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4 " >
    <div class="col">
      <div class="form-outline ">
        <input type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Adınız</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">Soyadınız</label>
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Adresiniz</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form6Example5" class="form-control" />
    <label class="form-label" for="form6Example5">Email</label>
  </div>

  <!-- Number input -->
  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Telefon</label>
  </div>

  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-center mb-4">
    <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
    <label class="form-check-label" for="form6Example8"> Sözleşmeyi Onaylıyorum </label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Onayla</button>
</form>
<div><link href="payment.css" type="text/css" rel="stylesheet" />
<button type="button" class="btn btn-primary launch" data-toggle="modal" data-target="#staticBackdrop"> <i class="fa fa-rocket"></i> Ödeme Sayfası
    </button>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div>
                    <div class="tabs mt-3">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation"> <a class="nav-link active" id="visa-tab" data-toggle="tab" href="#visa" role="tab" aria-controls="visa" aria-selected="true"> <img src="https://i.imgur.com/sB4jftM.png" width="80"> </a> </li>
                            <li class="nav-item" role="presentation"> <a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false"> <img src="https://i.imgur.com/yK7EDD1.png" width="80"> </a> </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="visa" role="tabpanel" aria-labelledby="visa-tab">
                                <div class="mt-4 mx-4">
                                    <div class="text-center">
                                        <h5>Kredi Kartı</h5>
                                    </div>
                                    <div class="form mt-3">
                                        <div class="inputbox"> <input type="text" name="name" class="form-control" required="required"> <span>Kart Sahibi</span> </div>
                                        <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>Kart Numarası</span> <i class="fa fa-eye"></i> </div>
                                        <div class="d-flex flex-row">
                                            <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>Son Kullanma</span> </div>
                                            <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>CVV</span> </div>
                                        </div>
                                        <div class="px-5 pay"> <button class="btn btn-success btn-block">Kart Ekle</button> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">
                                <div class="px-5 mt-5">
                                    <div class="inputbox"> <input type="text" name="name" class="form-control" required="required"> <span>Email Adresi</span> </div>
                                    <div class="pay px-5"> <button class="btn btn-primary btn-block">Kart Ekle</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</body>
</html>