<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="col-8 m-auto">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Atividade</th>
      <th scope="col">Categoria</th>
    </tr>
  </thead>
  <tbody>

  @foreach($activity as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->nome }}</td>
			<td>{{ $value->atividade }}</td>
			<td>{{ $value->categoria }}</td>

			
			<td>
			<a class="btn btn-small btn-success" href="{{ URL::to('add/' . '/delete' . $value=>id) }}">Excluir</a>

				
			<a class="btn btn-small btn-info" href="{{ URL::to('add/' . $value->id . '/edit') ) }}">Editar</a>

			</td>
		</tr>
	@endforeach
    
  </tbody>
</table>
</div>

</body>
</html>
