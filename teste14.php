<?php
$array = array(
    array("Camiseta", 125.99),
    array("Calça", 254.30),
    array("Tênis", 458.99),
    array("Boné", 35),
    array("Relógio", 50)
    );
    $dias = [];

    /* esse for soma o valor das vendas */
    for($i = 0; $i < count($array); $i++){
        $total += $array[$i][1];
        } 
    
    /*criei um array para comportar o segundo item do array bidimensional, no caso os preços
            e depois usar a função max() do php para retornar a maior venda*/    

    for($i = 0; $i < count($array); $i++){
            array_push($dias, $array[$i][1]);
            };  
        
    $maiorVenda = max($dias);


    

        
        echo "O total de vendas foi: <b>" . $total . "</b><br><br>";  
        
        for($i = 0; $i < count($array); $i++){
            if($maiorVenda ==  $array[$i][1]){
                echo "A maior venda foi de <b>" . $array[$i][0] .  "</b> e vendeu <b>" . $maiorVenda . "</b> reais. <br><br>" ;
            }
    
            } /*Usei a mesma estrutura do primeiro laço for porém mudando as instruções,
            aqui ele pegou o maior preço e procurou o item que teve essa venda, para assim
            expor para o usuário de forma amigável no HTML também.*/
    
?>
