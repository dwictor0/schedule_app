<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando usuario</title>
</head>

<body>
    <form action="<?php echo e(route('edit_activity', ['id' => $activity->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="">Nome</label>
        <input type="text" name="nome" value="<?php echo e($activity->nome); ?>">

        <label for="">Atividade</label>
        <input type="text" name="atividade" value="<?php echo e($activity->atividade); ?>">

        <label for="">Categoria</label>
        <input type="text" name="categoria" value="<?php echo e($activity->categoria); ?>">
    <button>Salvar</button>
    </form>
</body>

</html><?php /**PATH /var/www/html/projetos/lab2/schedule_app/resources/views/add/edit.blade.php ENDPATH**/ ?>