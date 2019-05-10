<a class="btn btn-success" href="?pagina=inserir_turma">Inserir nova turma</a><br>

<table class="table table-hover table-striped" id="turmas">
	<thead>
		<tr>
			<th>Número da Turma</th>
			<th>Descrição</th>
			<th>Número de vagas</th>
			<th>Professor</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>

	<tbody>
		<?php
			while($linha = mysqli_fetch_array($consulta_turmas)){
				echo '<tr><td>'.$linha['id_turmas'].'</td>';
				echo '<td>'.$linha['descricao'].'</td>';
				echo '<td>'.$linha['vagas'].'</td>';
				echo '<td>'.$linha['professor'].'</td>';
		?>
			<td><a href="?pagina=inserir_turma&editar=<?php echo $linha['id_turmas']; ?>">
				<i class="fas fa-edit"></i>
			</a></td>
			<td><a href="deleta_turma.php?id_turmas=<?php echo $linha['id_turmas']; ?>">
				<i class="fas fa-trash-alt"></i>
			</a></td></tr>;
			
			<?php
			}
			?>
	</tbody>	
</table>