<?php

include 'database.php';

$id_alunos = $_POST['id_alunos'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$data_nascimento = $_POST['data_nascimento'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];

$query = "UPDATE alunos SET nome = '$nome', sexo = '$sexo', data_nascimento = '$data_nascimento', cidade = '$cidade', bairro = '$bairro', rua = '$rua', numero = $numero, complemento = '$complemento' WHERE id_alunos = $id_alunos";

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');