<?php snippet('header') ?>

    <main class="main">
        <p class='aboutText'><?= $page->text() ?></p>


        <div class='myGrid'>
            <div>
                <?php  foreach ($page->children()->listed() as $experience): ?>
                    <p><strong><?= $experience->position() ?></strong><br>
                    <?= $experience->institute() ?><br>
                    <em><?= $experience->start() ?> - <?= $experience->finish() ?></em></p><br>
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
