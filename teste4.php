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
    
    <input type="submit" value="enviar">
    </form>
    <?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];
    $numero4 = $_POST['numero4'];
    $numero5 = $_POST['numero5'];
    $soma = $numero1 + $numero2 + $numero3 + $numero4 + $numero5;
    $media = ($numero1 + $numero2 + $numero3 + $numero4 + $numero5)/5;
    $conjunto = array($numero1,$numero2,$numero3,$numero4,$numero5);
    sort($conjunto);
    $maior = $conjunto[4];
    $menor = $conjunto[0];

    echo "O menor número é: ". $menor. "<br>";  
    echo "O maior número é: ". $maior . "<br>";
    echo "a soma dos números é: " . $soma . "<br>"; 
    echo "A média dos números é: " . $media . "<br>";

    ?>
    </body>
 </html>
