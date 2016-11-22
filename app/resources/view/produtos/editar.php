<?php

$this->extend('layout/html.php', 'body');

$this->append('partials/nav.php');

$produto = new Fagoc\Produto();

$fields = ['id', 'nome', 'valor', 'vencimento'];

$id = $this->get('id', false);

$produtos = $produto->select($fields, 'id = ' . $id);

$value = null;
if (count($produtos)) {
    $value = $produtos[0];
}

if ($value) {
    ?>
    <section class="section">

    <form method="post" action="<?php $this->href('produtos/save'); ?>">
        <input type="hidden" name="id" value="<?php out($id); ?>"/>
        <div class="control is-horizontal">
          <div class="control-label">
            <label class="label">Nome</label>
          </div>
          <div class="control is-grouped">
            <p class="control is-expanded">
              <input name="nome" class="input" type="text" value="<?php out($value->nome); ?>" placeholder="Nome" required>
            </p>
            <p class="control is-expanded">
              <input name="valor" class="input" type="number" value="<?php out($value->valor); ?>" placeholder="Valor" required>
            </p>
          </div>
        </div>
        <div class="control is-horizontal">
          <div class="control-label">
            <label class="label">Vencimento</label>
          </div>
          <div class="control">
            <input name="vencimento" type="date" value="<?php out($value->vencimento); ?>" required/>
          </div>
        </div>

        <div class="control is-horizontal">
            <p class="control">
                <input type="submit" class="button is-primary" value="Enviar"/>
                <input type="reset" class="button is-link" value="Cancelar"/>
            </p>
        </div>

    </form>
    </section>
    <?php
}
