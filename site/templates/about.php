<?php snippet('header') ?>

    <main class="main">
        <p><?= $page->text() ?></p>

        <div>
            <h2><?= $page->experience1() ?></h2>
            <p><?= $page->institution1() ?></p>
            <p><?= $page->date1() ?></p>
        </div>

        <div>
            <h2><?= $page->experience2() ?></h2>
            <p><?= $page->institution2() ?></p>
            <p><?= $page->date2() ?></p>
        </div>

        <div>
            <h2><?= $page->experience3() ?></h2>
            <p><?= $page->institution3() ?></p>
            <p><?= $page->date3() ?></p>
        </div>

        <div>
            <h2><?= $page->experience4() ?></h2>
            <p><?= $page->institution4() ?></p>
            <p><?= $page->date4() ?></p>
        </div>

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
