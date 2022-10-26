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
    <?php
    $numero = $_POST['numero'];
    $parametro = $numero;
    
    function fibonacci($parametro, $zero = false){
        if($parametro >= 2){ 
            $saida = ($zero) ? [0,1] : [1,1]; 
            for($i = 2; $i < $parametro; $i++){
                $saida[$i] = $saida[$i-1] + $saida[$i-2];		
            }
            return $saida;
        }
        return ($parametro == 1) ? [1] : [];
    }
   
    echo '<pre>'; print_r(fibonacci($numero, true)); 
    echo '</pre>';

    ?>
 </body>
 </html>
