<?php snippet('header') ?>

    <main style='margin-top: 180px'>

        <?php snippet('projects', [
            'projects' => collection('featuredProjects')
        ]) ?>

    </main>

<?php snippet('footer') ?>
