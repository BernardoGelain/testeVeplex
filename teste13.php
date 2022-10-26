<?php
$array = array(
    array("Fernando", 34),
    array("Marcelo", 25),
    array("Roberto", 30),
    array("Sandra", 22),
    array("Tiago", 18)
    );

    for($i = 0; $i < count($array); $i++){
        if($array[$i][1] <= 25){
            echo '<pre>'; 
            print_r($array[$i]); 
            echo '</pre>';
        
        }
    }
?>
