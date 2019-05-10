<a class="btn btn-success" href="?pagina=inserir_matricula">Inserir matrícula</a><br>
<table class="table table-hover table-striped" id="matriculas">
	<thead>
		<tr>
			<th>Aluno</th>
			<th>Turma</th>
			<th>Deletar</th>
		</tr>
	</thead>

	<tbody>
		<?php
			while($linha = mysqli_fetch_array($consulta_matriculas)){
				//echo '<tr><td>'.$linha['id_turmas'].'</td>';
				echo '<tr><td>'.$linha['nome'].'</td>';
				echo '<td>'.$linha['descricao'].'</td>';
				//echo '<td>'.$linha['vagas'].'</td>';
				//echo '<td>'.$linha['professor'].'</td>';
				?>
			<td><a href="deleta_matricula.php?id_alunos_turmas=<?php echo $linha['id_alunos_turmas']; ?>">
				<i class="fas fa-trash-alt"></i>
			</a></td></tr>;
			
			<?php
			}
			?>
	</tbody>	
</table>