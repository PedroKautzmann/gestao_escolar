<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir novo aluno</a><br>
<table class="table table-hover table-striped" id="alunos">
	<thead>
		<tr>
			<th>Matrícula</th>
			<th>Nome</th>
			<th>Sexo</th>
			<th>Data de Nascimento</th>
			<th>Cidade</th>
			<th>Bairro</th>
			<th>Rua</th>
			<th>Número</th>
			<th>Complemento</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>

	<tbody>
		<?php
			while($linha = mysqli_fetch_array($consulta_alunos)){
				echo '<tr><td>'.$linha['id_alunos'].'</td>';
				echo '<td>'.$linha['nome'].'</td>';
				echo '<td>'.$linha['sexo'].'</td>';
				echo '<td>'.$linha['data_nascimento'].'</td>';
				echo '<td>'.$linha['cidade'].'</td>';
				echo '<td>'.$linha['bairro'].'</td>';
				echo '<td>'.$linha['rua'].'</td>';
				echo '<td>'.$linha['numero'].'</td>';
				echo '<td>'.$linha['complemento'].'</td>';
				?>

			<td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_alunos']; ?>">
				<i class="fas fa-user-edit"></i>
			</a></td>	
			<td><a href="deleta_aluno.php?id_alunos=<?php echo $linha['id_alunos']; ?>">
				<i class="fas fa-user-times"></i>
			</a></td></tr>;
			
			<?php
			}
			?>
	</tbody>	
</table>