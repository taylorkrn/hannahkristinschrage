<?php snippet('header') ?>

    <main class="main">
        <p><?= $page->text() ?></p>

        <?php  foreach ($page->children()->listed() as $experience): ?>
            <div class="container">
                <h2><?= $experience->position() ?></h2>
                <p><?= $experience->institute() ?></p>
                <p><?= $experience->start() ?>-<?= $experience->finish() ?></p>
            </div>
        <?php endforeach ?>

        <div class='aboutGallery'>
            <ul>
                <?php foreach($page->images() as $image): ?>
                    <li>
                        <img src="<?= $image->resize(300, 300)->url() ?>">
                    </li>
                <?php endforeach ?>
            </ul>
        </div>

    </main>

<?php snippet('footer') ?>
