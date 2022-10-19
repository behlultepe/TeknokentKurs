<?php


session_start();
if(isset($_SESSION["loginUsernameAdmin"])){
    require'baglan.php';
}else{
    goto end;
}

$gelenID = $_POST["id"];
$gelenUsername = $_POST["username"];
$gelenPassword = $_POST["password"];
$gelenAuthLevel = $_POST["yetki"];
$gelenDiscountRate = $_POST["indirim_orani"];

$sorguUsers = $baglanti->prepare(" UPDATE users SET username=? , password=? ,yetki=? , indirim_orani=? WHERE id=?");
$sorguUsers ->execute([$gelenUsername,$gelenPassword,$gelenAuthLevel,$gelenDiscountRate,$gelenID]);
if($sorguUsers){
    header('Location: ./adminPanel.php');
}
end:
?>