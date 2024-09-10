<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir um produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="<?php echo e(asset('style/css/delete.css')); ?>" rel="stylesheet">
</head>

<body>
    
    <div class="card" >
    <form action="<?php echo e(route('destroy_activity',['id' => $activity->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="" class="form-label">Tem certeza que deseja excluir esse usuario?</label> <br>
        <input type="text" class="form-control" name="nome" value="<?php echo e($activity->nome); ?>"><br>

        

        <button class="btn btn-primary">Confirmar</button>
    </form>
    <hr>
</div>

       
</body>

</html><?php /**PATH /var/www/html/projetos/lab2/schedule_app/resources/views/add/delete.blade.php ENDPATH**/ ?>