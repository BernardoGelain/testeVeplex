<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.min.js"></script>
    <title>Document</title>
 </head>
 <body>
    <br><br>
    <form method="GET">
    <label> Informe os numeros que deseja fazer a media <b>separados por espaço</b>
        <input type="text" id = "numero1" name="elementos">
    </label><br><br>


    <input type="submit" id = id value="enviar" name = "button">
    

    </form>
    <form method="GET" id="teste">
        <?php
        $lista = [];
        $elementos = $_GET['elementos'];
        $lista = explode(" ",$elementos);

        $media = array_sum($lista) / count($lista) ;
        $soma = array_sum($lista) + count($lista) ;  

        $elementos = count($lista);
        echo "A <b>média</b> dos algarismos é de: ".$media;
        echo "<br><br> A <b>soma</b> dos algarismos informados é de: " . $soma;
        echo "<br><br> Você informou : " . $elementos ." elementos para realizar os calculos";

?>
                
    </form>
    </body>
 </html>
