<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um novo produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="<?php echo e(asset('style/css/create.css')); ?>" rel="stylesheet">
</head>
<div class="card">

    <body>
    <form action="<?php echo e(route('register_activity')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">

            <label for="exampleinputName1" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome">
            
        <label for="exampleinputActivity1" class="form-label">Atividade</label>
        <input type="text" class="form-control" name="atividade">

        <label for="exampleinputCategory" class="form-label">Categoria</label>
        <input type="text" class="form-control" name="categoria">
        <button class="btn btn-primary">Enviar</button>
        
    </form>
</div>
</div>


</body>
</html><?php /**PATH /var/www/html/projetos/lab2/schedule_app/resources/views/add/create.blade.php ENDPATH**/ ?>