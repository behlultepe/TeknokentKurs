<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<div class="bg-image" 
     style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
            height: 100vh">
<nav class="navbar navbar-expand-lg bg-light">
        <a class="navbar-brand" href="#">SLOT MAKİNESİ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        </div>

    </nav>
<form class="mt-3 w-25 p-3 text-center" method="POST" action="LoginSorgu.php" style="margin: auto;">
    <div class="mb-3 p-3 d-flex align-items-center ">
        <label for="InputUsername1" class="form-label"></label>
        <input type="text" class="form-control text-center " name="loginUsername" aria-describedby="emailHelp" placeholder="Kullanıcı Adınız">
        
    </div>
    <div class="mb-3 p-3 d-flex align-items-center" >
        <label for="InputPassword1" class="form-label"></label>
        <input type="password" class="form-control text-center" name="loginPassword" placeholder="Şifreniz">
    </div>
    <button type="submit" class="btn btn-success w-50">Giriş Yap</button>
    <a href="kayit.php"><button type="button" class="btn btn-danger">Kayıt Ol</button></a>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>