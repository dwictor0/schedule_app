<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir um produto</title>
</head>

<body>
    <form action="{{ route('delete_activity',['id' -> $activity->id]) }}" method="POST">
        @csrf
        <label for="">Tem certeza que deseja excluir esse usuario?</label>
        <input type="text" name="nome" value="{{$activity->nome}}">
        <button>Sim</button>
     </form>
</body>

</html>