<?php
/** @var Simples\Core\Template\Engine $this */

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?php $this->asset('/favicon/favicon.png'); ?>" type="image/png" />

    <link rel="manifest" href="<?php $this->asset('/favicon/manifest.json'); ?>">
    <meta name="msapplication-TileImage" content="<?php $this->asset('/favicon/ms-icon-144x144.png'); ?>">
    <meta name="msapplication-TileColor" content="#0292D3">
    <meta name="theme-color" content="#0292D3">

    <title><?php $this->out('title'); ?></title>

    <link href="<?php $this->css('/all.min.css') ?>" rel="stylesheet"/>
</head>
