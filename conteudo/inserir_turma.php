<?php if(!isset($_GET['editar'])){ ?>
<h1>Inserir nova turma</h1>
<form method="post" action="processa_turma.php">
	<br>
	<label class="badge badge-light">Descrição da turma</label><br>
	<input class="form-control" type="text" name="descricao" placeholder="Insira a descrição">
	<br><br>
	<label class="badge badge-light">Número de vagas</label><br>
	<input class="form-control" type="text" name="vagas" placeholder="Insira o número de vagas">
	<br><br>
	<label class="badge badge-light">Nome do professor</label><br>
	<input class="form-control" type="text" name="professor" placeholder="Insira o professor">
	<br><br>
	<input class="btn btn-success" type="submit" value="Inserir turma">
</form>


<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_turmas)){ ?>
		<?php if($linha['id_turmas'] == $_GET['editar']){ ?>
			
			<h1>Editar turma</h1>
			<form method="post" action="edita_turma.php">
				<input type="hidden" name="id_turmas" value="<?php echo $linha['id_turmas']; ?> ">
				<br>
				<label class="badge badge-light">Descrição da turma</label><br>
				<input class="form-control" type="text" name="descricao" placeholder="Insira a descrição" value="<?php echo $linha['descricao']; ?> ">
				<br><br>
				<label class="badge badge-light">Número de vagas</label><br>
				<input class="form-control" type="text" name="vagas" placeholder="Insira o número de vagas" value="<?php echo $linha['vagas']; ?> ">
				<br><br>
				<label class="badge badge-light">Nome do professor</label><br>
				<input class="form-control" type="text" name="professor" placeholder="Insira o professor" value="<?php echo $linha['professor']; ?> ">
				<br><br>
				<input class="btn btn-success" type="submit" value="Editar turma">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>