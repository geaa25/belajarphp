<?php

$baris=5;
for($i=1; $i<=$baris; $i++){
    for($j=1; $j <=$i; $j++ ){
        echo"*";
    }
    echo "<br>";
}
for($i = $baris; $i>=1; $i--){
    for($j = 1; $j <$i; $j++){
        echo"*";
    }
    echo"<br>";
}
?>