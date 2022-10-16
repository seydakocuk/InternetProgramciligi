<?php
echo min(10,20,-6);
echo "<br>";

echo max(20,30,100);
echo "<br>";

echo rand(7,38);
echo "<br>";

$vize = 50;
$final = 50;
$sonucc = $vize * 0.4 + $final * 0.6;
echo $sonucc;
echo "<br>";

$a = 20;
$b = 20;
$sonuc = ($a <=> $b);
if($sonuc == 0) {
    echo "DEĞERLER EŞİT";
}

elseif ($sonuc == 1) {
    echo "İLK DEĞER BÜYÜK";
}

elseif ($sonuc == -1){
    echo "İKİNCİ DEĞER BÜYÜK";
}
echo "<br>";

$k = 20;
$p = 10;
$sonuccc = ($k <=> $p);
switch($sonuccc){
    case 0: echo "DEĞERLER EŞİT";
    break;
    case 1: echo "İLK DEĞER BÜYÜK";
    break;
    case -1: echo "İKİNCİ DEĞER BÜYÜK";
    break;
}
echo "<br>";

$m = true;
$n = false;
if($m && $n) {
    echo "+";
}
else{
    echo "-";
}
echo "<br>";

//ARRAY (DİZİLER)
    $aylar = array("Ocak" , "Şubat" , "Mart" , "Nisan");
    print_r($aylar);
    echo "<br>";
    echo count($aylar); 
    echo "<br>";
    var_dump($aylar);
    echo "<br>";

    $aylarr =["Mayıs" ,"Haziran" , "Ağustos"];
    print_r($aylarr);
    echo "<br>";

    $ogrenciler = [
        "202151502047" => "Şeydanur Koçuk" ,
        "202151502005" => "Arzu Çakır" ,
        "202151502028" => "Aymiha Cevahir" , 
        "202151502015" => "Rabia Gül Kuzuoğlu"
    ];
    echo $ogrenciler[202151502047];
    echo "<br>";

    $sehir = [
        "Balıkesir" ,
        "Kütahya" , 
        "Bursa",
        "Afyon",
        "Denizli",
        "İzmit",
        "Adana"
    ];
    $indis = count($sehir)-1;
    echo $sehir[$indis];
    echo "<br>";

    for($i = 1;$i <= 50;$i++ ){
        echo $i;
        echo "<br>";
    }
    echo "<br>";

    

  
 
?>