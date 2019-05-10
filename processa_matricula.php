<?php

include 'database.php';

$id_alunos = $_POST['escolha_aluno'];
$id_turmas = $_POST['escolha_turma'];



$query = "INSERT INTO alunos_turmas(id_alunos, id_turmas) VALUES ('$id_alunos', '$id_turmas')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');
