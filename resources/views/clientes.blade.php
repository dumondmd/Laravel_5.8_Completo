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
						<table class="table table-bordered table-hover" id="tableprodutos">
							<thead>
								<tr>
									<th>Código</th>
									<th>Nome</th>
									<th>Endereço</th>
									<th>Idade</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>						
								@foreach($clientes as $c)
								<tr>
									<td>{{$c->id}}</td>
									<td>{{$c->nome}}</td>
									<td>{{$c->endereco}}</td>
									<td>{{$c->idade}}</td>
									<td>{{$c->email}}</td>
								</tr>
								@endforeach								
							</tbody>
						</table>

					</div>
					
				</div>
				
			</div>
		</div>
		
	</main>





<script type="text/javascript" src="{{asset('site/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('site/bootstrap.js')}}"></script>
</body>
</html>