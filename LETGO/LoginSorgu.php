<?php

require 'baglan.php';

$count = 0;

$sorguUsers = $baglanti ->query(" select * from users ");
$usersListele = $sorguUsers -> fetchall();

if(isset($_POST['loginUsername'],$_POST['loginPassword'])) {
    foreach ($usersListele as $user) {
        if ($_POST['loginPassword'] == $user['password'] && $_POST["loginUsername"] == $user["username"]) {

            $sorguUsers2 = $baglanti->prepare(" select * from users WHERE username= ? ");

            $sorguUsers2 -> execute([$_POST['loginUsername']]);
            $usersListe = $sorguUsers2 -> fetch();
            $loginID = $usersListe["id"];
            if($usersListe["yetki"] == "1"){
                session_start();
                $_SESSION["loginUsernameAdmin"] = $user["username"];
                header('Location: ./adminPanel.php');

            }else{
                session_start();
                $_SESSION["loginUsername"] = $user["username"];
                header('Location: ./curl.php');
            }
            break;
        } else {
            $count++;
        }
    }
}
if(isset($_POST['NewloginUsername'],$_POST['NewloginPassword'])) {
    $newusername = $_POST['NewloginUsername'];
    $newpassword = $_POST['NewloginPassword'];
    $newusers = $baglanti->prepare(" INSERT INTO users SET username=?,password=?");
    $newusers->execute([$newusername,$newpassword]);
    echo "Kaydınız oluşturuldu ana sayfaya döndürüleceksiniz...";
    header("Refresh: 5; url=./index.php");
}
$countRow = $sorguUsers -> rowCount();
if ($count == $countRow){
    echo "Kullanıcı adı veya Şifre hatalı";

}