<?php

include 'database.php';

$id_alunos = $_GET['id_alunos'];

$query = "DELETE FROM alunos WHERE id_alunos = $id_alunos";

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');
