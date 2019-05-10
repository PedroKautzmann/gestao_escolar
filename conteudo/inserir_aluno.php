<?php if(!isset($_GET['editar'])){ ?>
<h1>Inserir novo aluno</h1>
<form method="post" action="processa_aluno.php">
	<br>
	<label class="badge badge-light">Nome do aluno</label><br>
	<input class="form-control" type="text" name="nome" placeholder="Insira o nome do aluno">
	<br><br>
	<label class="badge badge-light">Sexo</label><br>
	<input class="form-control" type="text" name="sexo" placeholder="Insira o sexo do aluno">
	<br><br>
	<label class="badge badge-light">Data de nascimento</label><br>
	<input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento">
	<br><br>
	<label class="badge badge-light">Cidade</label><br>
	<input class="form-control" type="text" name="cidade" placeholder="Insira a cidade">
	<br><br>
	<label class="badge badge-light">Bairro</label><br>
	<input class="form-control" type="text" name="bairro" placeholder="Insira o bairro">
	<br><br>
	<label class="badge badge-light">Rua</label><br>
	<input class="form-control" type="text" name="rua" placeholder="Insira a rua">
	<br><br>
	<label class="badge badge-light">Número</label><br>
	<input class="form-control" type="text" name="numero" placeholder="Insira o número">
	<br><br>
	<label class="badge badge-light">Complemento</label><br>
	<input class="form-control" type="text" name="complemento" placeholder="Insira o complemento">
	<br><br>
	<input type="submit" class="btn btn-success" value="Inserir aluno">
</form>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_alunos)){ ?>
		<?php if($linha['id_alunos'] == $_GET['editar']){ ?>
			<h1>Editar aluno</h1>
					<form method="post" action="edita_aluno.php">
						<input type="hidden" name="id_alunos" value="<?php echo $linha['id_alunos']; ?> ">
						<br>
						<label class="badge badge-light">Nome do aluno</label><br>
						<input class="form-control" type="text" name="nome" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome'];?> ">
						<br><br>
						<label class="badge badge-light">Sexo</label><br>
						<input class="form-control" type="text" name="sexo" placeholder="Insira o sexo do aluno" value="<?php echo $linha['sexo'];?> ">
						<br><br>
						<label class="badge badge-light">Data de nascimento</label><br>
						<input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento" value="<?php echo $linha['data_nascimento'];?> ">
						<br><br>
						<label class="badge badge-light">Cidade</label><br>
						<input class="form-control" type="text" name="cidade" placeholder="Insira a cidade" value="<?php echo $linha['cidade'];?> ">
						<br><br>
						<label class="badge badge-light">Bairro</label><br>
						<input class="form-control" type="text" name="bairro" placeholder="Insira o bairro" value="<?php echo $linha['bairro'];?> ">
						<br><br>
						<label class="badge badge-light">Rua</label><br>
						<input class="form-control" type="text" name="rua" placeholder="Insira a rua" value="<?php echo $linha['rua'];?> ">
						<br><br>
						<label class="badge badge-light">Número</label><br>
						<input class="form-control" type="text" name="numero" placeholder="Insira o número" value="<?php echo $linha['numero'];?> ">
						<br><br>
						<label class="badge badge-light">Complemento</label><br>
						<input class="form-control" type="text" name="complemento" placeholder="Insira o complemento" value="<?php echo $linha['complemento'];?> ">
						<br><br>
						<input type="submit" class="btn btn-success" value="Editar aluno" value="<?php echo $linha['nome'];?> ">
					</form>
					<?php } ?>
	<?php } ?>
<?php } ?>

