<ul class="projects">
    <?php foreach ($projects as $project): ?>
        <li>
            <a href='<?= $project->url() ?>'>
                <figure>

                    <!-- Image source would be <?php $project->files()->filterBy('type', 'image')->first()->url() ?> -->

                    <?= $project->image()->crop(500) ?>
                    <figcaption>
                        <?= $project->title() ?><br>
                        <small><?= $project->category() ?></small>
                    </figcaption>
                </figure>
            </a>
        </li>
    <?php endforeach ?>
</ul>
