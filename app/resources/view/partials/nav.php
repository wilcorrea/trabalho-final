<div class="hero-head">

    <header class="nav">

        <div class="container">
          <div class="nav-left">
            <a class="nav-item" href="<?php $this->href('index'); ?>">
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
                if (is_array($this->get('menu', false))) {
                    $this->append('partials/menu.php');
                }
              ?>

            <span class="nav-item">
              <a href="<?php $this->href('download'); ?>" class="button is-info is-outlined is-inverted">
                <span class="icon">
                  <i class="fa fa-github"></i>
                </span>
                <span>Download</span>
              </a>
            </span>

          </div>
        </div>
    </header>
</div>
