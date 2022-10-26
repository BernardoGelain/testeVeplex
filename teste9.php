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
    <label> Insira um valor: 
        <input type="number" id = "numero" name="numero">
    </label><br><br>
    <input type="submit" value="enviar">
    </form>
<?php 
    $n = $_POST['numero'];
    $primos = [];
   
    
    function verificaPrimo($n,$divisores){

    for($count=2; $count<$n; $count++){
     if($n % $count == 0){
      return false;
     }}
     return true;
    }
    
    for($i = 0; $i < $n; $i++){
    
    if(verificaPrimo($i,0)){
        array_push($primos, $i);

    }    

     }
     echo '<pre>'; print_r($primos); 
    echo '</pre>';
?>
</body>
</html>
