<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de clientes</title>
	<link rel="stylesheet" type="text/css" href="{{asset('site/style.css')}}">
	<style type="text/css">
		body {
			padding: 20px;
		}
	</style>
</head>
<body>
	<main role="main">
		<div class="row">
			<div class="container col-md-8 offset-md-2">
				<div class="card border">
					<div class="card-header">
						<div class="card-title">
							Cadastro de Cliente
						</div>						
					</div>
					<div class="card-body">
						<form action="/cliente" method="POST">
							<div class="form-group">
								<label for="nome">Nome do cliente</label>
								<input type="text" name="nome" class="form-control" name="nome" placeholder="Nome de cliente">
							</div>
							<div class="form-group">
								<label for="idade">Ideade do cliente</label>
								<input type="number" name="idade" class="form-control" name="idade" placeholder="Idade do cliente">
							</div>
							<div class="form-group">
								<label for="endereco">Endereço do cliente</label>
								<input type="text" name="endereco" class="form-control" name="endereco" placeholder="Endereço do cliente">
							</div>
							<div class="form-group">
								<label for="email">Endereço do cliente</label>
								<input type="text" name="email" class="form-control" name="email" placeholder="E-mail do cliente">
							</div>
							<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
							<button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
						</form>
					</div>
					
				</div>
				
			</div>
		</div>
		
	</main>





<script type="text/javascript" src="{{asset('site/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('site/bootstrap.js')}}"></script>
</body>
</html>