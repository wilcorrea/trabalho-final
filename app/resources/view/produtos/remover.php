<?php

$this->extend('layout/html.php', 'body');

$this->append('partials/nav.php');

$produto = new Fagoc\Produto();

$id = $this->get('id', false);

$apagado = $produto->delete("id = '{$id}'");

if ($apagado) {
    // show message
}
