<?php snippet('header') ?>

    <main class="main">
        <h1><?= $page->title() ?></h1>

        <ul class="projects">
            <?php foreach ($page->children()->listed() as $project): ?>
                <li>
                    <a href='<?= $project->url() ?>'>
                        <figure>

                            <!-- Image source would be <?php $project->files()->filterBy('type', 'image')->first()->url() ?> -->

                            <?= $project->image()->resize(400) ?>
                            <figcaption><?= $project->title() ?></figcaption>
                        </figure>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>

    </main>

<?php snippet('footer') ?>
