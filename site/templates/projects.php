<?php snippet('header') ?>

<?php

$projects = $page->children()->listed()->paginate(3);
$pagination = $projects->pagionation();

?>

    <main class="main">
        <h1><?= $page->title() ?></h1>

        <ul class="projects">
            <?php foreach ($projects as $project): ?>
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

        <nav>
            <a href="<?= $pagination->prevPageUrl() ?>" aria-label="Go to previous page">&larr;</a>
            <a href="<?= $pagination->nextPageUrl() ?>" aria-label="Go to next page">&rarr;</a>
        </nav>

    </main>

<?php snippet('footer') ?>
