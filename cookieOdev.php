<?php

setcookie('tema' , '#dddddd' ,time() +86400*365); echo "<br>";
setcookie('yas' , '21' ,time() +86400*365);

//cookie silme
setcookie(
    "kurabiye" ,
    "test" ,
    time() - 3600
);

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body style = "background-color: <?= isset($_COOKIE['tema']) ? $_COOKIE['tema'] : 'black';  ?>">


<?php

print_r($_COOKIE);
echo "<br/>";

//cookie kontrol etme
echo isset($_COOKIE["tema"]);
echo "<br/>";

if($_COOKIE['yas'])
{
    echo "cookie bulunmaktadır.";
}



?>
    
</body>
</html>