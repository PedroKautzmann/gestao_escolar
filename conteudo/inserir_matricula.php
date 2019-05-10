<h1>Inserir nova matrícula</h1>


<form method="post" action="processa_matricula.php">
	<br><br>
	<p class="badge badge-light">Selecione um aluno</p>
	<select class="form-control" name="escolha_aluno">
		<option>Selecione um aluno</option>
		<?php
		while($linha = mysqli_fetch_array($consulta_alunos)){
			echo '<option value="'.$linha['id_alunos'].'">'.$linha['nome'].'</option>';
		}
		?>
	</select>
	<br><br>
	<p class="badge badge-light">Selecione uma turma</p>
	<select class="form-control" name="escolha_turma">
		<option>Selecione uma turma</option>
		<?php
		while($linha = mysqli_fetch_array($consulta_turmas)){
			echo '<option value="'.$linha['id_turmas'].'">'.$linha['descricao'].'</option>';
		}
		?>
	</select>	
	<br><br>
	<input class="btn btn-success" type="submit" value="Matricular aluno na turma">
	</form>
