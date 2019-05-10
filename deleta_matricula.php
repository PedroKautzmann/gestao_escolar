<?php

include 'database.php';

$id_alunos_turmas = $_GET['id_alunos_turmas'];

$query = "DELETE FROM alunos_turmas WHERE id_alunos_turmas = $id_alunos_turmas";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');