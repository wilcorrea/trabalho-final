<?php
/** @var Simples\Core\Template\Engine $this */
?>
<div class="hero-head">

    <header class="hero-nav nav has-shadow is-fixed is-max-width">
        <?php
        $this->append('layout/fork-me.php');
        ?>
        <div class="container">
            <div class="nav-left">
                <a class="nav-item-brand" href="<?php $this->href('index'); ?>">
                    <img src="<?php $this->image('logo.png'); ?>" alt="Logo">
                </a>
            </div>

            <span class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </span>

            <div class="nav-right nav-menu">
                <?php
                if (is_array($this->get('menu'))) {
                    $this->append('layout/menu.php');
                }
                ?>
                <span class="nav-item">
                    <a href="//github.com/phpzm/trabalho-final" class="button is-info is-outlined is-inverted">
                        <i class="fa fa-github"></i>
                    </a>
                </span>

            </div>
        </div>
    </header>
</div>
