<?php

/** @var Simples\Core\Template\Engine $this */

foreach ($this->get('menu') as $href => $label) {
    $active = '';
    if ($this->match($href)) {
        $active = 'is-active';
    }
    ?>
    <a class="nav-item <?php out($active); ?>" href="<?php $this->href($href); ?>">
        <?php out($label); ?>
    </a>
    <?php
}
