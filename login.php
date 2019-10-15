<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="asset/css/login.css">
	<!-- <script src="asset/javascript/jquery-3.4.1.min.js"></script> -->
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


	<script>
		$(document).ready(function() {
			$('#form-login').on('submit', function(e) {
				e.preventDefault();
				var dados = $(this).serialize();
				console.log(dados);
				console.log('yes');
				$.ajax({
					url: 'controller/LoginController.php?action=autenticar',
					type: 'POST',
					data: dados,
					success: function(data) {
						if (data['status'] === 'sucess') {
							window.location.replace('index.php');
						} else {
							$(".alert-danger").show();
							setTimeout(function() {
								$(".alert-danger").hide();
							}, 3000);
						}

						console.log(data);
					}
				});
			});
		});
	</script>

	<title>Página de login</title>
</head>

<body>

	<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Erro!</strong> Dados incorretos. Tente novamente!.
	</div>

	<div class="wrapper">
		<div class="card box-login">
			<div class="card-header text-center">
				SCM
			</div>
			<div class="card-body">
				<form id="form-login">
					<div class="form-group">
						<label for="inputEmail">Usuário</label>
						<input type="text" class="form-control" id="inputEmail" name="login" aria-describedby="emailHelp" placeholder="Enter user">
					</div>
					<div class="form-group">
						<label for="inputSenha">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Password">
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Check me out</label>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>