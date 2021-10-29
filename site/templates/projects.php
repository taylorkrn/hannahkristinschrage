<?php snippet('header') ?>

<!-- PHP Moved to Controllers <?php

$filterBy = get('filter');

$unfiltered = $page->children()->listed();

$projects = $unfiltered
    ->when($filterBy, function($filterBy) {
        return $this->filterBy('category', $filterBy);
    })
    ->paginate(3);


$pagination = $projects->pagination();

$filters = $unfiltered->pluck('category', null, true);

?> -->

    <main class="main">
        <h1><?= $page->title() ?></h1>



        <nav>
            <a href="<?= $page->url() ?>" >All</a>
            <?php foreach ($filters as $filter): ?>
                <a href="<?= $page->url() ?>?filter=<?= $filter?>" ><?= $filter?></a>
            <?php endforeach ?>
        </nav>

        <ul class="projects">
            <?php foreach ($projects as $project): ?>
                <li>
                    <a href='<?= $project->url() ?>'>
                        <figure>

                            <!-- Image source would be <?php $project->files()->filterBy('type', 'image')->first()->url() ?> -->

                            <?= $project->image()->resize(400) ?>
                            <figcaption>
                                <?= $project->title() ?>
                                <small><?= $project->category() ?></small>
                            </figcaption>
                        </figure>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>

        <!-- Pagination Snippet <?php snippet('pagination') ?> -->

    </main>

<?php snippet('footer') ?>
