<?php snippet('header') ?>

    <main class="main">
        <h3><?= $page->text() ?></h3><br>
        <h3>Email:</h3><p><?= $page->email() ?></p>
        <h3>Phone Number:</h3><p><?= $page->phone() ?></p>
        <h3>Address:</h3><p><?= $page->address() ?></p>
    </main>

<?php snippet('footer') ?>
