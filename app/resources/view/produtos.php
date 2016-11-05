<?php

$this->extend('layout/html.php', 'body');

$this->append('partials/nav.php');

$produtos = [
    'notebook' => 'Notebook top demais',
    'geladeira' => 'Geladeira enorme e linda',
    'televisão' => 'TV Samsung SmarTV 60 polegadas',
];

if ($this->get('id', false)) {
    $id = $this->get('id', false);
    $produtos =
    array_filter($produtos, function($value, $key) use ($id) {
        return $key === $id;
    });
}

?>
<div class="section">
<?php
foreach ($produtos as $key => $value) {
    ?>
    <article class="media">
          <figure class="media-left">
            <p class="image is-64x64">
              <img src="http://placehold.it/128x128">
            </p>
          </figure>
          <div class="media-content">
            <div class="content">
              <a class="button is-primary" href="<?php $this->href('produtos/' . $key); ?>">Abrir</a>
              <p>
                <?php out($value); ?>
              </p>
            </div>
            <nav class="level">
              <div class="level-left">
                <a class="level-item">
                  <span class="icon is-small"><i class="fa fa-reply"></i></span>
                </a>
                <a class="level-item">
                  <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                </a>
                <a class="level-item">
                  <span class="icon is-small"><i class="fa fa-heart"></i></span>
                </a>
              </div>
            </nav>
          </div>
        </article>
    <?php
}
?>
</div>
<?php

$this->append('partials/footer.php');
