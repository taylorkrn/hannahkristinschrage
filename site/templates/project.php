<?php snippet('header') ?>

    <div class="projectMain">
        <div class="project-gallery">
            <ul>
                <?php foreach ($page->images() as $image): ?>
                    <li>
                        <img src="<?= $image->resize(null, 600)->url() ?>" alt="<?= $image->alt() ?>">
                    </li>
                <?php endforeach?>
            </ul>
        </div>
        <div class='centerContainer'>
            <h4><?= $page->title() ?></h4>
            <?php if ($page->category()->isNotEmpty()): ?>
                <?= $page->category() ?>
            <?php endif ?>
        </div>
        <div class='infoText'>
            <?= $page->text() ?>
            <?php if ($page->client()->isNotEmpty()): ?>
                <p><strong>Client: </strong><?= $page->client() ?></p>
            <?php endif ?>
            <?php if ($page->category()->isNotEmpty()): ?>
                <p><strong>Category: </strong><?= $page->category() ?></p>
            <?php endif ?>
            <?php if ($page->year()->isNotEmpty()): ?>
                <p><strong>Year: </strong><?= $page->year() ?></p>
            <?php endif ?>
            <?php if ($page->link()->isNotEmpty()): ?>
                <p><strong>Link: </strong><?= $page->link() ?></p>
            <?php endif ?>
        </div>


<!--         <h3><?= $page->title() ?></h3>
                <div classhttp://localhost:8080/media/pages/projects/absolute-silence/15a61442fa-1635852809/10-silence6-x600.jpg="project-info">
                    <?= $page->text() ?>

                    <dl>
                        <?php if ($page->client()->isNotEmpty()): ?>
                            <dt>Client</dt>
                            <dd><?= $page->client() ?></dd>
                        <?php endif ?>


                        <?php if ($page->category()->isNotEmpty()): ?>
                            <dt>Category</dt>
                            <dd><?= $page->category() ?></dd>
                        <?php endif ?>

                        <?php if ($page->year()->isNotEmpty()): ?>
                            <dt>Year</dt>
                            <dd><?= $page->year() ?></dd>
                        <?php endif ?>

                        <?php if ($page->link()->isNotEmpty()): ?>
                            <dt>Link</dt>
                            <dd><?= $page->link() ?></dd>
                        <?php endif ?>
                    </dl>
                </div> -->
    </div>

<script>
    const slider = document.querySelector('.project-gallery');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
      isDown=true;
      slider.classList.add('active');
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
      isDown=false;
      slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', () => {
      isDown=false;
      slider.classList.remove('active');
    });
    slider.addEventListener('mousemove', (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - slider.offsetLeft;
      const walk = (x - startX) * 2;
      slider.scrollLeft = scrollLeft - walk;
    });
</script>


<?php snippet('footer') ?>
