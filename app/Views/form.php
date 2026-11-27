<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf8">
    <title><?php echo esc($titulo); ?></title>
    <?php echo link_tag('assets/css/bootstrap.min.css'); ?>
</head>
<body>
    <div class="container mt-3">
        <div class="mb-3">
            <a href="/" class="btn btn-primary">Voltar</a>
        </div>
        <form method="post" action="<?php echo $acao; ?>">
            <?php echo csrf_field();?>
            <div class="mb-3">
                <label for="txtTitulo" class="form-label">Título</label><br>
                <input id="txtTitulo" name="txtTitulo" type="text" class="form-control" value="<?php echo isset($dtTitulo) ? esc($dtTitulo) : ''; ?>">
            </div>
            <div class="mb-3">
                <label for="txtDescricao" class="form-label">Descrição</label><br>
                <textarea id="txtDescricao" name="txtDescricao" cols="7" rows="10" class="form-control"><?php echo isset($dtDescricao) ? esc($dtDescricao) : ''; ?></textarea>
            </div>
        
            <button type="submit" class="btn btn-success">Salvar Dados</button>
        </form>
    </div>
    
    <?php echo script_tag('assets/css/bootstrap.bundle.min.js'); ?>
</body>
</html>
