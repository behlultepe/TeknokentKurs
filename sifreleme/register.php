<html>
<head>
    <style>
        body{
            padding: 0;
            margin: 0;
            font-family: "Adobe Myungjo Std M",sans-serif;
            text-align: center;
            background: #ffffff;
        }
        header{
            position: relative;
            width: 100%;
            height: 150px;
            left: 0;
            background: darkslategrey;
            top: 0;
        }
        header h2 {
            position: absolute;
            color: white;
            left: 0;
            right: 0;
            margin: auto;
            top: 50px;
            font-size: 30px;
            font-weight: bold;
        }
        .tabloouter{
            width: 750px;
            height: 480px;
            margin: 0 auto;
            background: dimgray;
            border-radius: 10px;
        }
        input[type="text"],
        input[type="password"]{
            width: 60%;
            margin: 10px;
            height: 50px;
            background: white;
            border-radius: 5px;
            text-align: center;
            font-size: 25px;
            color: gray;
        }
        ::placeholder{
            font: 25px;
            text-align: center;
        }
        .sub{
            height: 40px;
            width: 60%;
            border-radius: 5px;
            border: none;
            box-sizing: border-box;
            font-size: 25px;
            color: white;
            font-weight: bolder;
            cursor: pointer;
            margin: 15px;
        }
        #giris{
            background: #10ac84;
        }
        #giris:hover{
            background: #1dd1a1;
        }
        a {
            font-size: 10px;
            color: (100,100,100);
        }
    </style>
    <title>ÜYE OL</title>
</head>
<body>
<header>
    <h2>REGİSTER</h2>
</header>
<div class="TableOuter">
    <?php
    include 'baglan.php';
    $sorguUsers = $baglanti->query(" select * from aktivasyon ");
    $usersListele = $sorguUsers -> fetchall();
    foreach ($usersListele as $user) { ?>
    <h1>ÜYE OL</h1>
    <form action="islem.php" method="post">
        <div class="user">
            <input type="text" placeholder="Kullanıcı Adı" name="username" <?php $user["kullaniciadi"] ?>>
        </div>
        <div class="pass">
            <input type="password" placeholder="Şifre" name="pass" <?php $user["sifre"] ?>>
        </div>
        <?php } ?>
    </form>
    <a href="uye.php"><button type="submit" class="sub" id="giris">Üye Ol</button> </a>
    <a href="loginPage.php"><button type="submit" class="sub" id="giris">Anasayfaya Geri Dön</button> </a>
</div>




</body>
</html>