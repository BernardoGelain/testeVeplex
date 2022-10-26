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
        <input type="number" id = "numero1" name="numero1">
    </label><br><br>
    <label> Insira um valor
        <input type="number" id = "numero2" name="numero2">
    </label><br><br>
    <label> Insira um valor
        <input type="number" id = "numero3" name="numero3">
    </label><br><br>
    <label> Insira um valor
        <input type="number" id = "numero4" name="numero4">
    </label><br><br>
    <label> Insira um valor
        <input type="number" id = "numero5" name="numero5">
    </label>
    <br><br>
    <label> Insira um valor
        <input type="number" id = "numero5" name="numero6">
    </label>
    <br><br>
    <label> Insira um valor
        <input type="number" id = "numero5" name="numero7">
    </label>
    <br><br>
    <label> Insira um valor
        <input type="number" id = "numero5" name="numero8">
    </label>
    <br><br>
    <label> Insira um valor
        <input type="number" id = "numero5" name="numero9">
    </label>
    <br><br><label> Insira um valor
        <input type="number" id = "numero5" name="numero10">
    </label>
    <br><br>
    
    <input type="submit" value="enviar">
    </form>
    <?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];
    $numero4 = $_POST['numero4'];
    $numero5 = $_POST['numero5'];
    $numero6 = $_POST['numero6'];
    $numero7 = $_POST['numero7'];
    $numero8 = $_POST['numero8'];
    $numero9 = $_POST['numero9'];
    $numero10 = $_POST['numero10'];

    $requisitados = [];
    
    $conjunto = array($numero1,$numero2,$numero3,$numero4,$numero5,$numero6,$numero7,$numero8,$numero9,$numero10);
    
    $conta = 0;

    for($i=0; $i < count($conjunto) ; $i++){
        if($conjunto[$i] > 30 && $conjunto[$i] < 90){
            $conta++;
            array_push($requisitados, $conjunto[$i]);
        }
    }

    echo "Existem ". $conta . " números que são maiores que 30 e maiores que 90<br>"; 
    echo '<pre>'; print_r($requisitados); 
    echo '</pre>';

    ?>
    </body>
 </html>
