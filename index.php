<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PetShop</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<img src="topo.jpg" class="img-fluid">
				<hr>
					<h1 style="text-align: center;">Cadastro de Pets</h1>
				<form action="sistema.php" method="post">
					<label>Nome do Pet:</label>
					<input type="text" name="nome" class="form-control">
					<br>
					Idade:
					<input type="number" name="idade" class="form-control">
					<br>
					Responsável:
					<input type="text" name="responsavel" class="form-control">
					<br>
					<input type="submit" name="" value="Cadastrar" class="btn btn-primary">
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col">
				
			</div>
		</div>
	</div>
</body>
</html>