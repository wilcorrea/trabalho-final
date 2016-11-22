<?php
$this->extend('layout/html.php', 'body');

$this->append('partials/nav.php');
?>
<section class="section">

<form method="post" action="<?php $this->href('produtos/save'); ?>">

    <div class="control is-horizontal">
      <div class="control-label">
        <label class="label">Nome</label>
      </div>
      <div class="control is-grouped">
        <p class="control is-expanded">
          <input name="nome" class="input" type="text" placeholder="Nome" required>
        </p>
        <p class="control is-expanded">
          <input name="valor" class="input" type="number" placeholder="Valor" required>
        </p>
      </div>
    </div>
    <div class="control is-horizontal">
      <div class="control-label">
        <label class="label">Vencimento</label>
      </div>
      <div class="control">
        <input name="vencimento" type="date" required/>
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
