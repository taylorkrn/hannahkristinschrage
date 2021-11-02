<?php snippet('header') ?>

    <main class="main">
        <h3><?= $page->text() ?></h3><br>
        <h3>Email:</h3>
        <p style='margin-left: 30px'><?= $page->email() ?></p>
        <h3>Phone Number:</h3>
        <p style='margin-left: 30px'><?= $page->phone() ?></p>
        <h3>Address:</h3>
        <p style='margin-left: 30px'><?= $page->address() ?></p>
    </main>

<?php snippet('footer') ?>
