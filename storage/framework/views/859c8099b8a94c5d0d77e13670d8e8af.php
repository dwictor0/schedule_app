<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um novo produto</title>
</head>
<body>
    <form action="<?php echo e(route('register_activity')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="">Nome</label>
        <input type="text" name="nome">
        
        <label for="">Atividade</label>
        <input type="text" name="atividade">

        <label for="">Categoria</label>
        <input type="text" name="categoria">
        <button>Enviar</button>
    
    </form>
</body>
</html><?php /**PATH /var/www/html/projetos/lab2/schedule_app/resources/views/add/create.blade.php ENDPATH**/ ?>