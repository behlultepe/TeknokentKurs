<?php

require 'baglan.php';


$sorguUsers = $baglanti ->query(" select * from anket ");
$usersListele = $sorguUsers -> fetchall();

if(isset($_POST['loginUsername'],$_POST['loginPassword'])) {
    foreach ($usersListele as $user) {
        if ($_POST['loginPassword'] == $user['password'] && $_POST["loginUsername"] == $user["username"]) {

            $sorguUsers2 = $baglanti->prepare(" select * from anket WHERE username= ? ");

            $sorguUsers2->execute([$_POST['loginUsername']]);
            $usersListe = $sorguUsers2->fetch();
            $loginID = $usersListe["id"];
            session_start();
            $_SESSION["loginUsernameAdmin"] = $user["username"];
            header('Location: ./anket1.php');
        }
    }
}
