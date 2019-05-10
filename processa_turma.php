<?php

include 'database.php';

$descricao = $_POST['descricao'];
$vagas = $_POST['vagas'];
$professor = $_POST['professor'];

$query = "INSERT INTO turmas(descricao, vagas, professor) VALUES ('$descricao', '$vagas', '$professor')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=turmas');
