<?php

include 'database.php';

$id_turmas = $_POST['id_turmas'];
$descricao = $_POST['descricao'];
$vagas = $_POST['vagas'];
$professor = $_POST['professor'];

$query = "UPDATE turmas SET descricao = '$descricao', vagas = $vagas, professor = '$professor' WHERE id_turmas = $id_turmas";

mysqli_query($conexao, $query);

header('location:index.php?pagina=turmas');