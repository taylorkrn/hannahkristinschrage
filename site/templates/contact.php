<?php snippet('header') ?>

    <main class="main">
        <div class='contactText'>
            <p><strong><?= $page->text() ?></strong></p><br>
            <p><strong>Email </strong><a style='color: inherit' href="mailto:hallo@hannahkristinschrage.de"><?= $page->email() ?></p></a>
    <!--         <p><strong>Phone Number </strong><?= $page->phone() ?></p>
            <p><strong>Address </strong><?= $page->address() ?></p> -->
        </div>

    </main>

<?php snippet('footer') ?>
