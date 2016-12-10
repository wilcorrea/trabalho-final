<?php

/** @var Simples\Core\Template\Engine $this */

$this->extend('layout/html.php', 'body');

?>

<div class="hero-section section">

    <div class="container">

        <div class="columns">

            <div class="column">
                <img src="<?php $this->image('/contact.jpg') ?>" alt="">
            </div>

            <div class="column is-two-thirds">

                <h2 class="title is-2">Fale Conosco</h2>

                <form method="post">

                    <div class="columns is-multiline">

                        <div class="column is-half">
                            <label class="label">Nome</label>
                            <div class="control">
                                <input name="name" class="input" type="text" placeholder="Nome" required>
                            </div>
                        </div>

                        <div class="column is-half">
                            <label class="label">E-mail</label>
                            <div class="control">
                                <input name="email" class="input" type="email" placeholder="Email" required>
                            </div>
                        </div>

                        <div class="column is-full">
                            <label class="label">Assunto</label>
                            <div class="select is-fullwidth">
                                <select name="subject" required>
                                    <option value="">-</option>
                                    <option value="treta-seria">Treta Séria</option>
                                    <option value="parada-loka">Parada Loka</option>
                                </select>
                            </div>
                        </div>

                        <div class="column is-full">
                            <label class="label">Mensagem</label>
                            <div class="control">
                                <textarea name="message" class="textarea" placeholder="Como podemos ajudar..." required></textarea>
                            </div>
                        </div>

                        <div class="column is-full">
                            <div class="control">
                                <input type="submit" class="button is-primary" value="Enviar"/>
                                <input type="reset" class="button is-link" value="Cancelar"/>
                            </div>
                        </div>

                    </div>

                </form>

            </div>

        </div>
    </div>

</div>
