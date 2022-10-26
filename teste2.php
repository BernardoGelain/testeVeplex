EXERCICIO RETORNA VALOR IMPAR

 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <br><br>
    <form method="POST">
    <label> Insira um valor
        <input type="number" id = "numero" name="numero">
    </label>
    <input type="submit" value="enviar">
    </form>
 </body>
 </html>
<?php
    
    $numero = $_POST['numero'];
    $total = 0;
    if($numero < 0){
        echo "Digite um valor positivo!";
    };
    for($i=0;$i<=$numero;$i++){
        if($i%2 != 0){
            $total += $i;
            
        }
        
    };
    echo "A soma total dos números ímpares nesse intervalo é de : " . $total;
