<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
</head>
<body>
    <!-- Yetkisiz Girişi Önleme Başlangıç -->
<?php session_start();
if(isset($_SESSION["loginUsernameAdmin"])){
    require'baglan.php';
    setcookie("dil","tr.php",time()+(86400*30));
}else{
    goto end;
} ?>
<!-- Yetkisiz Girişi Önleme Bitiş -->
<!-- Sayfa Dili Belirleme Başlangıç -->
<?php if(!isset($_COOKIE["dil"])){
    $_COOKIE["dil"] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2) .".php";
    require substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2).".php";
}else {
    if ($_COOKIE["dil"] == "tr.php"){
        require $_COOKIE["dil"];
        //header("http://localhost/adminPanel.php");
    }
    elseif($_COOKIE["dil"] == "en.php"){
        require $_COOKIE["dil"];
        //header("http://localhost/adminPanel.php");
    }
} ?>
<!-- Sayfa Dili Belirleme Bitiş -->
<!-- HTML Admin Tablo Başlıklar Başlangıç -->
<table class="table table-sm">
    <thead>
    <tr>
        <th><?php echo $dil["id"] ?></th>
        <th><?php echo $dil["username"] ?></th>
        <th><?php echo $dil["password"] ?></th>
        <th><?php echo $dil["yetki"] ?></th>
        <th><?php echo $dil["indirim_orani"] ?></th>
    </tr>
    </thead>
    <!-- HTML Admin Tablo Başlıklar Bitiş -->
    
    <!-- Admin Tablo Verileri Veritabanından Alma Başlangıç -->
    <?php
    $sorguUsers = $baglanti->query(" select * from users ");
    $usersListele = $sorguUsers -> fetchall();
    foreach ($usersListele as $user) { ?>
    <tr>
        <form method="POST" action="UpdateAdminPanel.php">
            <td><input type="hidden" name="id" value="<?php echo $user['id']?>"></td>
            <td><input type="text" name="username" value="<?php echo $user['username']?>"></td>
            <td><input type="text" name="password" value="<?php echo $user['password']?>"></td>
            <td><input type="text" name="yetki" value="<?php echo $user['yetki']?>"></td>
            <td><input type="text" name="indirim_orani" value="<?php echo $user['indirim_orani']?>"></td>
            <td><input class="btn btn-primary" type="submit" value="Submit">
        </form>

        <?php } ?>
    </tr>
    
    <!-- Admin Tablo Verileri Veritabanından Alma Bitiş -->
</table>
<?php end: ?>
</body>
</html>