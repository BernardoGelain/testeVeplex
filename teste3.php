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
    $total = 0;

    for ($i = 1; $i <= 10; $i++) {
        $total = $numero * $i; 
        echo $numero . "x" . $i . " = ". "$total<br>";
    }
    
    

?>
 </body>
 </html>
