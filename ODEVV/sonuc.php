
<?php
session_start();
$message = "";
if($_SESSION['user'] == "")
{
    echo "<a href = 'cikis.php'>Çıkış Yap</a> ";
}
else
{
include("baglanti.php");
}
?>