<?php
$conjunto = [2, 5, 7, 9, 12, 16, 19, 23, 29, 32];

for ($i= 0; $i < count($conjunto); $i++) {
    if($conjunto[$i] % 2 == 0){
        echo "<li>$conjunto[$i] é um número par</li>";
    } else {
        echo "<li>$conjunto[$i] é um número ímpar</li>";
    }
}
