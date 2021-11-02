<?php snippet('header') ?>

    <main class="main">
        <ul class='blogs'>
            <?php foreach ($page->children()->listed() as $diary): ?>
                <li>

                    <div class='container'>
                        <div>
                            <h3><?= $diary->date() ?></h3>
                            <p><?= $diary->title() ?></p>
                        </div>
                        <a href='<?= $diary->url() ?>'>
                            <img src="<?= $diary->image()->crop(500,500)->url() ?>">
                        </a>
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    </main>

<?php snippet('footer') ?>
