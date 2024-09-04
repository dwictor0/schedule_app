<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando usuario</title>
</head>

<body>
    <form action="{{ route('edit_activity', ['id' => $activity->id]) }}" method="POST">
        @csrf
        <label for="">Nome</label>
        <input type="text" name="nome" value="{{ $activity->nome }}">

        <label for="">Atividade</label>
        <input type="text" name="atividade" value="{{ $activity->atividade }}">

        <label for="">Categoria</label>
        <input type="text" name="categoria" value="{{ $activity->categoria }}">
    <button>Salvar</button>
    </form>
</body>

</html>