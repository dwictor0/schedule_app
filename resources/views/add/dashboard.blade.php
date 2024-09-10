<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <!-- <link rel="stylesheet" href="../../css/"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
  <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Agenda de Tarefas</a>
      <a href="{{ route('create_activity') }}" class="btn btn-primary">Criar usuario</a>
  </nav>
  
 

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
				<a class="btn btn-small btn-danger" href="{{ route('delet', $value->id) }}">Excluir</a>
        <a class="btn btn-small btn-primary" href="{{ route('edite', $value->id) }}">Editar</a>
			</td>
		</tr>
	@endforeach
    
  </tbody>
</table>
</div>

</body>
</html>