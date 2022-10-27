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
    <label> Insira sua data de nascimento 
        <input type="date" name="date">
    </label><br><br>
    <input type="submit" value="enviar">
    </form>


<?php
date_default_timezone_set('America/Sao_Paulo');
$h = date('Y-m-d');
$nascimento = $_POST['date'];


$data_inicio = new DateTime("$h");
$data_fim = new DateTime("$nascimento");

// Resgata diferença entre as datas
$dateInterval = $data_inicio->diff($data_fim);

$anos = $dateInterval->y;

$dias = $dateInterval->days;


function meses ($h,$nascimento){
$data_inicio = new DateTime("$h");
$data_fim = new DateTime("$nascimento");

// Resgata diferença entre as datas
$dateInterval = $data_inicio->diff($data_fim);

$meses = $dateInterval->m;

return $meses;

}




if($anos < 18 ){
    echo "Você é menor de idade e não pode tirar a habilitação de motorista<br><br>";
    $ano1 = date("Y");
    $ano = $ano1 - 18;
    
    $mesDia = substr($h, 5 , 5);
    $mesDiaAno = $ano."-".$mesDia;

    $dataFinal = new DateTime("$mesDiaAno");
  


    
function diasDatas($data_inicial,$data_final) {
    $diferenca = strtotime($data_final) - strtotime($data_inicial);
    $dias = floor($diferenca / (60 * 60 * 24)); 
    return $dias;}

   $tempo = diasDatas($mesDiaAno,$nascimento);
 
   $diaHoje = substr($h, 8 , 2);
   $diaNascimento = substr($nascimento, 8 , 2);

function dia($diaHoje, $diaNascimento){
    if (number_format($diaNascimento) >= number_format($diaHoje) ){
        $dia = $diaNascimento - $diaHoje;
    } elseif (number_format($diaHoje) > number_format($diaNascimento)) {
        $dia = ($diaNascimento+ 30) - $diaHoje;
    }
    return $dia;}
    $mesDiaAno = $ano."-".$mesDia;

    $dataFinal = new DateTime("$mesDiaAno");
 
    $anos = intdiv($tempo,365);
    $meses = meses($mesDiaAno,$nascimento);
    $diasRestantes = dia($diaHoje,$diaNascimento);
 
 
    echo "<br>Faltam ".$diasRestantes . " dia(s) " . $meses. " mes(es)" . " e " . $anos ." ano(s) para voce poder tirar a habilitação";

   } else {
    echo "você é maior de idade e pode tirar sua habilitação de motorista<br><br>";
}


?>
</body>
</html>
