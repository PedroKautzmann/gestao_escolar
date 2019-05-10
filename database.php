<?php

$servidor = "localhost";
$usuario = "root";
$senha ="";
$db = "escola_pedrokautzmann";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT * FROM alunos";
$consulta_alunos = mysqli_query($conexao, $query); 

$query = "SELECT * FROM turmas";
$consulta_turmas = mysqli_query($conexao, $query); 

$query = "SELECT alunos_turmas.id_alunos_turmas, alunos.nome, turmas.descricao
			 FROM alunos, turmas, alunos_turmas
			 WHERE alunos_turmas.id_alunos = alunos.id_alunos
			 AND alunos_turmas.id_turmas = turmas.id_turmas";

$consulta_matriculas = mysqli_query($conexao, $query); 