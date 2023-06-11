<?= $this->extend('template/admin') ?>

<?= $this->section('conteudo_pagina') ?>
    <h1>Criar Produto</h1>
    
    <?php
    #var_dump(validation_errors());
    ?>
    
    <form action="<?=url_to('Produtos.store')?>" method="POST" class="form-control">
        <input type="text" name="nome" class="is-invalid" placeholder="nome" value="<?=set_value('nome')?>">
        <?php
        if (validation_show_error('nome')){
        ?>
        <div class="invalid-feedback"><?=validation_show_error('nome')?></div>
        <?php
        }
        ?>
        <br>
        <br>
        <input type="text" name="codigo" class="is-invalid" placeholder="codigo" value="<?=set_value('codigo')?>">
        <?php
        if (validation_show_error('codigo')){
        ?>
        <div class="invalid-feedback"><?=validation_show_error('codigo')?></div>
        <?php
        }
        ?>
        <br>
        <br>
        <button type="submit">Salvar</button>
    </form>
<?= $this->endSection() ?>