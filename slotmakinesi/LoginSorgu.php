<?php

require 'baglan.php';

$count = 0;

$sorguUsers = $baglanti ->query(" select * from slot ");
$usersListele = $sorguUsers -> fetchall();

if(isset($_POST['loginUsername'],$_POST['loginPassword'])) {
    foreach ($usersListele as $user) {
        if ($_POST['loginPassword'] == $user['password'] && $_POST["loginUsername"] == $user["username"]) {

            $sorguUsers2 = $baglanti->prepare(" select * from slot WHERE username= ? ");

            $sorguUsers2 -> execute([$_POST['loginUsername']]);
            $usersListe = $sorguUsers2 -> fetch();
            $loginID = $usersListe["id"];
            if($usersListe["hakkiniz"] == "0"){
                date_default_timezone_set('Europe/Istanbul');
                echo "Bugün Hakkınız Kalmadı..."."<br>";
                $time = $user['tarih'];
                $newDate = strtotime('+1 hour',strtotime($time));
                $newDate = date('d.m.Y H:i:s' ,$newDate );
                echo $newDate."'de sistem tekrar açılacaktır";
                $date = date('d.m.Y H:i:s');
                $date2 = date('H:i:s');
                echo "<br>"."Şuanki Saat = ".$date2;
                if($date>=$newDate){
                    $newpiece=5;
                    $userID = $user["username"];
                    $new = $baglanti->prepare(" UPDATE slot SET hakkiniz=? WHERE username=?");
                    $new->execute([$newpiece,$userID]);
                    session_start();
                    $_SESSION["loginUsername"] = $user["username"];
                    header('Location: ./slot.php');
                }
                
                
            }else{
                session_start();
                $_SESSION["loginUsername"] = $user["username"];
                header('Location: ./slot.php');
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
    $newpiece = 5;
    $newusers = $baglanti->prepare(" INSERT INTO slot SET username=?,password=?,hakkiniz=?");
    $newusers->execute([$newusername,$newpassword,$newpiece]);
    echo "Kaydınız oluşturuldu ana sayfaya döndürüleceksiniz...";
    header("Refresh: 5; url=./index.php");
}
$countRow = $sorguUsers -> rowCount();
if ($count == $countRow){
    echo "Kullanıcı adı veya Şifre hatalı";

}