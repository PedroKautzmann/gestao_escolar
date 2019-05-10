<?php

session_start();

include 'database.php';

include 'header.php';

#conteúdo página


if(isset($_SESSION['login'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'matriculas';
	}
}

else{
	$pagina = 'home';
}

switch($pagina){
	case 'alunos'; include 'conteudo/alunos.php'; break;
	case 'turmas'; include 'conteudo/turmas.php'; break;
	case 'matriculas'; include 'conteudo/matriculas.php'; break;
	case 'inserir_aluno'; include 'conteudo/inserir_aluno.php'; break;
	case 'inserir_turma'; include 'conteudo/inserir_turma.php'; break;
	case 'inserir_matricula'; include 'conteudo/inserir_matricula.php'; break;
	default: include 'conteudo/home.php'; break;
}


include 'footer.php';