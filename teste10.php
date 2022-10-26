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
$hoje = strtotime(date('d m Y h:i:s A'));

$nascimento = strtotime($_POST['date']);

/* converti as datas para string e depois entendi o que os valores significavam
após isso, realizei alguns testes para me certificar que estava autorizando apenas pessoas maiores de idade
levando em consideração a data do dia atual, dinâmicamente através da função date() 
e considerando o fuso horario de sao paulo*/


$idade = $nascimento - $hoje;

if($idade > 1098759600){
    echo "Você é menor de idade e não pode tirar a habilitação de motorista";
} else {
    echo "você é maior de idade e pode tirar sua habilitação de motorista";
}

echo "<br<br>". $idade
?>
</body>
</html>
