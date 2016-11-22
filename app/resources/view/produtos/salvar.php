<?php

$this->extend('layout/html.php', 'body');

$this->append('partials/nav.php');

$produto = new Fagoc\Produto();

$id = isset($_POST['id']) ? $_POST['id'] : '';

$fields = ['nome', 'valor', 'vencimento'];
$values = [];
foreach ($fields as $field) {
    $values[$field] = isset($_POST[$field]) ? $_POST[$field] : '';
}

if ($id) {
    $salvo = $produto->update($fields, array_values($values), "id = '{$id}'");
} else {
    $salvo = $produto->insert($fields, $values);
}

if ($salvo) {
    // show message
}
