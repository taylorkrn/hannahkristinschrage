<?php snippet('header') ?>

    <main class="main">
        <ul class='blogs'>
            <?php foreach ($page->children()->listed() as $diary): ?>
                <li class='container'>
                    <h3><?= $diary->date() ?></h3>
                    <p><?= $diary->title() ?></p>
                </li>
                <li>
                    <a href='<?= $diary->url() ?>'>
                        <img src="<?= $diary->image()->crop(500)->url() ?>">
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </main>

<?php snippet('footer') ?>
