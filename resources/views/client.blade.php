<!DOCTYPE html>
<html>
<head>
	<title>Clientes</title>
</head>
<body>
	<form action="{{url('/oauth/clients') }}" method="POST">
		<p>
			<input type="text" name="name">	
		</p>
		<p>
			<input type="text" name="redirect">	
		</p>
		<p>
			<input type="submit" name="send" value="Enviar">
		</p>
		{{ csrf_field() }}
	</form>

	{{ $clients }}
</body>
</html>