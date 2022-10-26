<?php
$conjunto = [52, 15, 17, 25, 39, 48, 63, 72, 10];

for ( $i= 0;  $i< count($conjunto); $i++) {
    if($conjunto[$i] > 50 || $conjunto[$i] < 18){
        echo "<li>'$conjunto[$i]'</li>";
    } 
}
?>
