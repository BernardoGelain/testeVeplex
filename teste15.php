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
    <label> Insira o primeiro valor
        <input type="number" name="numero1">
    </label><br><br>
    <label> Insira o segundo valor
        <input type="number" name="numero2">
    </label><br><br>
    <label> Qual operação deseja realizar? (*, +, -, /, %, **) <br><br>
        <input type="text" name="operacao">
    </label><br><br>

    <input type="submit" value="Calcular">
    </form>
    <?php
       
       $num1 = $_POST['numero1'];
       $num2 = $_POST['numero2'];
       $operacao = $_POST['operacao'];
       $total = 0;

       switch ($operacao){
        case "+":
            $total = $num1 + $num2;
            echo "<h3> Total: $total </h3>";
            break;
        case "-":
            $total = $num1 - $num2;
            echo "<h3> Total: $total </h3>";
            break;
        case "*":
            $total = $num1 * $num2;
            echo "<h3> Total: $total </h3>";
            break;
        case "**":
            $total = $num1 ** $num2;
            echo "<h3> Total: $total </h3>";
            break;
        case "%":
            $total = $num1 % $num2;
            echo "<h3> Total: $total </h3>";
            break;
        case "/":
            $total = $num1 / $num2;
            echo "<h3> Total: $total </h3>";
            break;
         default:
        echo "<h3>Insira um valor válido!</h3>";
       }
    ?>
 </body>
 
 </html>
