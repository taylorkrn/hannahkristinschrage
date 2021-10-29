<?php snippet('header') ?>

    <main class="main">

        <?php snippet('projects', [
            'projects' => collection('featuredProjects')
        ]) ?>

    </main>

<?php snippet('footer') ?>
