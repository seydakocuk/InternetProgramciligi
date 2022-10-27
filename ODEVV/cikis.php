<?php
session_start();

$_SESSION=array();

session_destroy();
$message = "";

echo $message = "Yanlış şifre veya kullanıcı adı girdiniz.";
echo "<br/>";
echo "<a href = '2510.php'>Giriş sayfasına dön.</a> ";

?>