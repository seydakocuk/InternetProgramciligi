<?php
    $sehirler = [
        "Balıkesir" ,
        "Kütahya" ,
        "Eskişehir" ,
        "Afyon",
        "Adana"
    ];
    $kosul = count($sehirler) - 1;
    while($kosul){
        echo $sehirler[$kosul];
        break;
    }
?>