<?php
include 'templates/header.php';
?>
<div class="tile">
    <?php if (isset($printMsg) && $printMsg != '') : ?>
        <p id="msg"><?= $printMsg; ?></p>
    <?php endif; ?>
    <h3 class="tile-title top-cci" style="margin: 30px 0 30px;text-align: center;">MATERIAL DE INFORMÁTICA DO CCI</h3>
    <div class="table-responsive">
        <table class="table table-bordered ">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Subcelula</th>
                    <th>Numero de Patrimônio</th>
                    <th>Tipo de material</th>
                    <th>Observações</th>
                    <th>Cautela</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($equipamentos as $equipamento): ?>
                    <tr>
                        <td><?= strtoupper($equipamento["id"]) ?></td>
                        <td><?= strtoupper($equipamento["nome"]) ?></td>
                        <td><?= strtoupper($equipamento["subcelula"]) ?></td>
                        <td><?= strtoupper($equipamento["patrimonio"]) ?></td>
                        <td><?= strtoupper($equipamento["material"]) ?></td>
                        <td><?= strtoupper($equipamento["descricao"]) ?></td>
                        <td><?= strtoupper($equipamento["cautela"]) ?></td>
                        <td>
                            <a href="<?= strtoupper($BASE_URL) ?>show.php?id=<?= strtoupper($equipamento["id"]) ?>"><i class="fas fa-eye"></i></a>
                            <a href="<?= strtoupper($BASE_URL) ?>edit.php?id=<?= strtoupper($equipamento["id"]) ?>"><i class="fa-solid fa-pen-to-square"></i></a>

                            <form class="delete-form" action="<?= strtoupper($BASE_URL) ?>config/process.php" method="POST">
                                <input type="hidden" name="type" value="delete">
                                <input type="hidden" name="id" value="<?= strtoupper($contact["id"]) ?>">
                                <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                            </form>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

<?php
include 'templates/footer.php';
?>