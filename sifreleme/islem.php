<?php
include 'baglan.php';
$count = 0;

$sorguUsers = $baglanti ->query(" select * from aktivasyon ");
$usersListele = $sorguUsers -> fetchall();

if(isset($_POST['kullaniciadi'],$_POST['sifre'])) {
    foreach ($usersListele as $user) {
        if ($_POST['kullaniciadi'] == $user['kullaniciadi'] && $_POST["sifre"] == $user["sifre"]) {

            $sorguUsers2 = $baglanti->prepare(" select * from aktivasyon WHERE kullaniciadi= ? ");

            $sorguUsers2 -> execute([$_POST['kullaniciadi']]);
            $usersListe = $sorguUsers2 -> fetch();
            $loginID = $usersListe["id"];
            if($usersListe["kullanici_lv"] == "1"){
                session_start();
                $_SESSION["admin"] = $user["username"];
                header('Location: ./adminPanel.php');

            }else{

                $gelencode = md5($_POST["kullanici_code"]);

                session_start();
                $_SESSION["kullaniciadi"] = $user["kullaniciadi"];


                $sorguUsers = $baglanti->prepare(" UPDATE aktivasyon SET kullanici_code=? WHERE id=?");
                $sorguUsers ->execute([$gelencode]);
                ?>
                <form action="islem.php" method="post">
                <input type="text" placeholder="Aktivasyon Kodu" name="aktive" <?php $user["kullanici_code"] ?>>
                    <input type="submit" value="Onayla" />
                </form>
<?php
            }
            break;
        } else {
            $count++;
        }
    }
}
$countRow = $sorguUsers -> rowCount();
if ($count == $countRow){
    echo "Kullanıcı adı veya sifre yanlıştır...";

}