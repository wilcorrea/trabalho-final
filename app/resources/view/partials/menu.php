<?php
foreach ($this->get('menu', false) as $href => $label) {
    ?>
    <a class="nav-item" href="<?php $this->href($href); ?>">
        <?php out($label); ?>
    </a>
    <?php
}
