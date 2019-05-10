<?php

include 'database.php';

$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$data_nascimento = $_POST['data_nascimento'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];


$query = "INSERT INTO alunos(nome, sexo, data_nascimento, cidade, bairro, rua, numero, complemento) VALUES ('$nome', '$sexo', '$data_nascimento', '$cidade', '$bairro', '$rua', '$numero', '$complemento')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');
