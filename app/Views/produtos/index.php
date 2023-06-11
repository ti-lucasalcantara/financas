<?= $this->extend('template/admin') ?>

<?= $this->section('conteudo_pagina') ?>
    <h1>Listar Estoque</h1>
    <table class="table table-striped">
    <?php
    foreach ($produtos as $produto) {
    ?>
    <tr>
        <td><?=$produto->nome?></td>
        <td><?=$produto->codigo?></td>
    </tr>
    <?php
    }
    ?>
    </table>
<?= $this->endSection() ?>