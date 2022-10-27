<?php
session_start();

$message ="";

if (isset($_POST['kullanici_adi']) && isset($_POST['sifre'])){

    $kullanici_adi = "seyda";
    $sifre = "kocuk";

    if ($_POST['kullanici_adi'] == $kullanici_adi && $_POST['sifre'] == $sifre){
        $_SESSION['user'] = $_POST['kullanici_adi'];
        $message = "Giriş Başarılı";
        header("location:sonuc.php");
    }
    else {
        $message = "Hatalı kullanıcı bilgileri";
        header("location:cikis.php");
         
        
    }
}
?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Uygulamaları</title>
</head>
<body>
     
    <p><?php echo $message; ?></p>
    <form action="" method ="post">
        <input type="text" name = "kullanici_adi" placeholder = "Kullanıcı Adı" />
        <input type="password" name = "sifre" placeholder = "Şifre" />
        <input type="submit" value = "Giriş" />
    </form>
</body>
</html>


