<?php snippet('header') ?>

    <main class="main">
        <h1><?= $page->title() ?></h1>
        <?= $page->text() ?>
        <ul class='projects'>
            <?php foreach ($page->images() as $image): ?>
                <li>
                    <?= $image->crop(500,500) ?>
                </li>
            <?php endforeach?>
        </ul>
    </main>

<?php snippet('footer') ?>
