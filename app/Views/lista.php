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
            <a href="<?php echo route_to('form_anotacao'); ?>" class="btn btn-primary">Adicionar</a>
        </div>

        <table class="table">
            <tr>
                <td>Titulo</td>
                <td>Ações</td>
            </tr>
            <?php foreach ($data as $row): ?>
            <tr>
                <td>
                    <a href="<?php echo route_to('form_anotacao_id', $row['id']); ?>">
                        <?php echo esc($row['titulo']); ?>
                    </a>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" onclick="confirmExcluir(<?php echo $row['id']; ?>);">Excluir</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <?php echo script_tag('assets/js/bootstrap.bundle.min.js'); ?>
    <script>
    function confirmExcluir(id) {
        if (confirm('Deseja realmente excluir esse registro?')) {
            location.assign('<?php echo route_to('excluir_anotacao', 0); ?>'.replace(0, id));
        }
    }
    </script>
</body>
</html>
