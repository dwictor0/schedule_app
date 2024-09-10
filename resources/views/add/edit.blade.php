<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('style/css/edit.css') }}" rel="stylesheet">
</head>
<div class="card">

    <body>
        <form action="{{ route('edit_activity', ['id' => $activity->id]) }}" method="POST">
            @csrf
            
            <div class="mb-3">

        <label for="exampleinputName1" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" value="{{ $activity->nome }}">
        
        <label for="exampleinputActivity1" class="form-label">Atividade</label>
        <input type="text" class="form-control" name="atividade" value="{{ $activity->atividade }}">
        
        <label for="exampleinputCategory1" class="form-label">Categoria</label>
        <input type="text" class="form-control" name="categoria" value="{{ $activity->categoria }}">
        <button class="btn btn-primary" >Salvar</button>
    </form>
</div>
</body>

</html>