<?php

$this->extend('layout/html.php', 'body');

$this->append('partials/nav.php');

//$this->get('all');
$status = 'error';
if (true) {
    $status = 'success';
}
$this->append('messages/' . $status . '.php');

$this->append('partials/footer.php');
