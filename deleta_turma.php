<?php

include 'database.php';

$id_turmas = $_GET['id_turmas'];

$query = "DELETE FROM turmas WHERE id_turmas = $id_turmas";

mysqli_query($conexao, $query);

header('location:index.php?pagina=turmas');

