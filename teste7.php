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
    <label> Insira o valor do carro <br><br>
        <input type="number" id = "numero" name="carro">
    </label><br><br><hr>
    <label> Insira o número de parcelas <br><br>
    <li>0, caso queira pagar a vista!</li>
    <li>6x *acrescido por 3% de juros.</li>
    <li>12x *acrescido por 6% de juros.</li>
    <li>18x *acrescido por 9% de juros.</li>
    <li>24x *acrescido por 12% de juros.</li>
    <li>36x *acrescido por 18% de juros.</li>
    <li>48x *acrescido por 24% de juros.</li>
        <input type="number" id = "numero" name="parcela">
    </label><br><br>
    <input type="submit" value="enviar">
    </form>
    <?php
    $carro = $_POST['carro'];
    $parcela = $_POST['parcela'];
    $total = 0;
    $juros = 0;

    if($parcela > 0 && $parcela < 6 ){
        $juros = $carro * 0.00;
        $total = $carro + $juros;
        echo "O total a pagar é: " . $total . " a vista!";

    } else if ($parcela == 6  ){
        $juros = $carro * 0.03;
        $total = $carro + $juros;
        echo "O total a pagar é: " . $total . " acrescido de: ". $juros . " reais de juros";

    } else if ($parcela == 12){
        $juros = $carro * 0.06;
        $total = $carro + $juros;
        echo "O total a pagar é: " . $total . " acrescido de: ". $juros . " reais de juros";


    } else if ($parcela == 18 ){
        $juros = $carro * 0.09;
        $total = $carro + $juros;
        echo "O total a pagar é: " . $total . " acrescido de: ". $juros . " reais de juros";

        
    } else if ($parcela == 24 ){
        $juros = $carro * 0.12;
        $total = $carro + $juros;
        echo "O total a pagar é: " . $total . " acrescido de: ". $juros . " reais de juros";

        
    } else if ($parcela == 36 ){
        $juros = $carro * 0.18;
        $total = $carro + $juros;
        echo "O total a pagar é: " . $total . " acrescido de: ". $juros . " reais de juros";

        
    } else if ($parcela == 48 ){
        $juros = $carro * 0.24;
        $total = $carro + $juros;
        echo "O total a pagar é: " . $total . " acrescido de: ". $juros . " reais de juros";

        
    } else {
        echo "insira um número de parcelas válido!";
    }
    ?>
 </body>
 </html>
