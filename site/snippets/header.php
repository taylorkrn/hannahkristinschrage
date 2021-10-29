<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $site->title() ?></title>

    <?= css('assets/css/index.css') ?>
    <?= css('@auto') ?>

</head>
<body>

    <header id="header" class="">
        <a class='logo' href="<?= $site->url() ?>"><?= $site->image()->resize(180,120) ?></a>

        <nav class='menu'>
            <ul>
                <!-- Listed means only include pages with numbers at the front -->
                <?php foreach ($site->children()->listed() as $item): ?>
                    <li><a href='<?= $item->url() ?>'><?= $item->title() ?></a></li>
                <?php endforeach ?>
            </ul>
        </nav>
    </header>
