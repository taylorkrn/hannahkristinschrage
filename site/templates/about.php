<?php snippet('header') ?>

    <main class="main">
        <p class='aboutText'><?= $page->text() ?></p>


        <div class='myGrid'>
            <div>
                <?php  foreach ($page->children()->listed() as $experience): ?>
                    <h3><?= $experience->position() ?></h2>
                    <div class="container">
                        <p><?= $experience->institute() ?></p>
                        <p><em><?= $experience->start() ?> - <?= $experience->finish() ?></em></p>
                    </div>
                <?php endforeach ?>
            </div>
            <div class='aboutGallery'>
                <ul>
                    <?php foreach($page->images() as $image): ?>
                        <li>
                            <img src="<?= $image->resize(500)->url() ?>">
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </main>

<?php snippet('footer') ?>
