<br><h1 style="text-align:center">Seja Bem-vindo!</h1><br><br>

<form method="post" action="login.php">
	
	<label class="badge badge-light">Usuário:</label>
	<input type="text" name="usuario" placeholder="Nome do usuário" class="form-control">

	<br>
	<label class="badge badge-light">Senha:</label>
	<input type="password" name="senha" placeholder="Digite a senha" class="form-control">

	<br>
	<input type="submit" value="Entrar" class="btn btn-success">

</form>
<br>
<?php if(isset($_GET['erro'])){ ?>
	<div class="alert alert-danger" role="alert">
  		Usuário e/ou senha inválidos.
	</div>

<?php } ?>