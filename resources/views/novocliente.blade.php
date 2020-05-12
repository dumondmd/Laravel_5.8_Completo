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
							@csrf
							<div class="form-group">
								<label for="nome">Nome do cliente</label>
								<input type="text" name="nome" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" name="nome" placeholder="Nome de cliente">
								@if($errors->has('nome'))
									<div class="invalid-feedback">
										{{$errors->first('nome')}}
									</div>
								@endif
							</div>
							<div class="form-group">
								<label for="idade">Ideade do cliente</label>
								<input type="number" name="idade" class="form-control {{$errors->has('idade') ? 'is-invalid' : ''}}" name="idade" placeholder="Idade do cliente">
								@if($errors->has('idade'))
									<div class="invalid-feedback">
										{{$errors->first('idade')}}
									</div>
								@endif
							</div>
							<div class="form-group">
								<label for="endereco">Endereço do cliente</label>
								<input type="text" name="endereco" class="form-control {{$errors->has('endereco') ? 'is-invalid' : ''}}" name="endereco" placeholder="Endereço do cliente">
								@if($errors->has('endereco'))
									<div class="invalid-feedback">
										{{$errors->first('endereco')}}
									</div>
								@endif
							</div>
							<div class="form-group">
								<label for="email">Endereço do cliente</label>
								<input type="text" name="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" name="email" placeholder="E-mail do cliente">
								@if($errors->has('email'))
									<div class="invalid-feedback">
										{{$errors->first('email')}}
									</div>
								@endif
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