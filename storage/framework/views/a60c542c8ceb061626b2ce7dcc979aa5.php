<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="<?php echo e(asset('style/css/edit.css')); ?>" rel="stylesheet">
</head>
<div class="card">

    <body>
        <form action="<?php echo e(route('edit_activity', ['id' => $activity->id])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            
            <div class="mb-3">

        <label for="exampleinputName1" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" value="<?php echo e($activity->nome); ?>">
        
        <label for="exampleinputActivity1" class="form-label">Atividade</label>
        <input type="text" class="form-control" name="atividade" value="<?php echo e($activity->atividade); ?>">
        
        <label for="exampleinputCategory1" class="form-label">Categoria</label>
        <input type="text" class="form-control" name="categoria" value="<?php echo e($activity->categoria); ?>">
        <button class="btn btn-primary" >Salvar</button>
    </form>
</div>
</body>

</html><?php /**PATH /var/www/html/projetos/lab2/schedule_app/resources/views/add/edit.blade.php ENDPATH**/ ?>