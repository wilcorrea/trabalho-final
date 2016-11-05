<section class="section">

<form method="post">

    <div class="control is-horizontal">
      <div class="control-label">
        <label class="label">Dados</label>
      </div>
      <div class="control is-grouped">
        <p class="control is-expanded">
          <input name="nome" class="input" type="text" placeholder="Nome" required>
        </p>
        <p class="control is-expanded">
          <input name="email" class="input" type="email" placeholder="Email" required>
        </p>
      </div>
    </div>
    <div class="control is-horizontal">
      <div class="control-label">
        <label class="label">Assunto</label>
      </div>
      <div class="control">
        <div class="select is-fullwidth">
          <select name="assunto" required>
            <option>Treta Séria</option>
          </select>
        </div>
      </div>
    </div>
    <div class="control is-horizontal">
      <div class="control-label">
        <label class="label">Mensagem</label>
      </div>
      <div class="control">
        <textarea name="mensagem" class="textarea" placeholder="Como podemos ajudar..."></textarea>
      </div>
    </div>

    <p class="control">
        <input type="submit" class="button is-primary" value="Enviar"/>
        <input type="reset" class="button is-link" value="Cancelar"/>
    </p>

</form>
</section>
