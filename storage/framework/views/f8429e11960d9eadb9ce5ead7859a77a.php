<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir um produto</title>
</head>

<body>
    <form action="" method="POST">
        <?php echo csrf_field(); ?>
        <label for="">Tem certeza que deseja excluir esse usuario?</label>
        <input type="text" name="nome" value="<?php echo e($activity->nome); ?>">
        <button>Sim</button>
     </form>
</body>

</html><?php /**PATH /var/www/html/projetos/lab2/schedule_app/resources/views/add/delete.blade.php ENDPATH**/ ?>