<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("Funcoes.php") ?>
    <h1>Links para outras atividades:</h1>
    <a href="Ex01.php"> Exercicio 1 </a> <br>
    <a href="Ex02.php"> Exercicio 2 </a> <br>
    <a href="Ex03.php"> Exercicio 3 </a> <br>
    <a href="Ex04.php"> Exercicio 4 </a> <br>
    <a href="Ex05.php"> Exercicio 5 </a> <br>
    <a href="Ex06.php"> Exercicio 6 </a> <br>
    <a href="Ex07.php"> Exercicio 7 </a> <br>
    <a href="Ex08.php"> Exercicio 8 </a> <br>
    <a href="Ex09.php"> Exercicio 9 </a> <br>
    <a href="Ex10.php"> Exercicio 10 </a> <br>
    <a href="Ex11.php"> Exercicio 11 </a> <br>
    <a href="Ex12.php"> Exercicio 12 </a> <br>
    <a href="Ex13.php"> Exercicio 13 </a> <br>
    <a href="Ex14.php"> Exercicio 14 </a> <br>
    <hr>
<h1> Exercício 15: </h1>
<h3> Função de calculo de IMC: </h3>
<?php 
$input_peso = 60;
$input_altura = 1.80;
echo 'Altura: ' . $input_altura . '<br>';
echo 'Peso: ' . $input_peso . '<br>';
echo 'IMC: ' . calcularIMC($input_altura,$input_peso)['imc'] . '<br>';
echo 'Resultado: ' . calcularIMC($input_altura,$input_peso)['categoria'] . '<br>'
?>
<h3> Função de validação de e-mail: </h3>
<?php 
$input_email = "joshuadobar@protonmail.com";
$input_email2 = "hjgashdjjdasjgd";
echo 'Email 1: ' . $input_email . ' <b>' . validarEmail($input_email) . '</b> <br>';
echo 'Email 1: ' . $input_email2 . ' <b>' . validarEmail($input_email2) . '</b> <br>';
?>
<h3> Função de gerar senha: </h3>
<?php
$input_tamanho = 12;
echo 'Tamanho da senha: ' . $input_tamanho . '<br>';
echo 'Senha aleatória: ' . gerarSenha($input_tamanho);
?>
<h3> Função de contar vogais: </h3>
<?php 
$input_texto = "Ritacildo Quilombástico Calvacante";
echo 'Texto: ' . $input_texto . '<br>';
echo 'Vogais: ' . vogaisTexto($input_texto);
?>
<h3> Função de inverter texto: </h3>
<?php 
$input_texto_inverter = "Socorro, subi no elevador em jaraparequajá";
echo 'Texto original: ' . $input_texto_inverter . '<br>';
echo 'Texto invertido: ' . inverterTexto($input_texto_inverter);
?>
<h3> Função de calcular idade: </h3>
<?php 
$input_nascimento = "06/07/1969";
echo 'Data de nascimento: ' . $input_nascimento . '<br>';
echo 'Idade: ' . calcularIdade($input_nascimento);
?>
<h3> Função de converter moedas: </h3>
<?php 
$input_reais = 12;
echo 'Quantidade em reais: ' . $input_reais . '<br>';
echo 'Quantidade em dólares: ' . converterMoeda($input_reais)['dollar'] . '<br>';
echo 'Quantidade em euros: ' . converterMoeda($input_reais)['euro'];
?>
<h3> Função de formatar telefones: </h3>
<?php 
$input_telefone = 47991234567;
echo 'Telefone informado: ' . $input_telefone . '<br>';
echo 'Telefone formatado: ' . formatarTelefone($input_telefone);
?>
<h3> Função de saudações: </h3>
<?php 
$input_caso_voce_queira_falar_bom_dia_nao_importa_o_horario_por_algum_motivo = false;
echo saudacoes($input_caso_voce_queira_falar_bom_dia_nao_importa_o_horario_por_algum_motivo);
?>
<h3> Função de validar senhas: </h3>
<?php 
$input_senha = "FuckingPiecaShitGodDamn1234";
echo 'Senha informada: ' . $input_senha . '<br>';
echo 'Segurança da senha: ' . validarSenha($input_senha)
?>
</body>
</html>