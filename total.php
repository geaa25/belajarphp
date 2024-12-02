<?php
    $total=0;
    $telur=30000;
    $minyak=15000;
    $sabunmandi=20000;
    $discount=0.10;

    $total+=$telur;
    $total+=$minyak;
    $total+=$sabunmandi;
    $total-= $total* $discount;

    var_dump($total);
?>