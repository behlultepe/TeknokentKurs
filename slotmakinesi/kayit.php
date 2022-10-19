<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
<div class="bg-image" 
     style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
            height: 100vh">
  <nav class="navbar navbar-expand-lg bg-light">
    <a class="navbar-brand" href="index.php">SLOT MAKİNESİ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    </div>
  </nav>

  <form class="mt-3 w-25 p-3 text-center" method="POST" action="LoginSorgu.php" style="margin: auto;">
    <div class="mb-3 p-3 d-flex align-items-center ">
        <label for="InputUsername1" class="form-label"></label>
        <input type="text" class="form-control text-center " name="NewloginUsername" aria-describedby="emailHelp" placeholder="Kullanıcı Adınız">
        
    </div>
    <div class="mb-3 p-3 d-flex align-items-center" >
        <label for="InputPassword1" class="form-label"></label>
        <input type="password" class="form-control text-center" name="NewloginPassword" placeholder="Şifreniz">
    </div>
    <button type="submit" class="btn btn-success w-50">Üye Ol</button>
</form>



</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
</body>

</html>