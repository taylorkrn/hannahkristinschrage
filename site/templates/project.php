<?php snippet('header') ?>

    <main class="main">
        <div class="gallery-flex">
            <div class="project-gallery">
                <ul>
                    <?php foreach ($page->images() as $image): ?>
                        <li>
                            <img src="<?= $image->resize(500)->url() ?>" alt="<?= $image->alt() ?>">
                        </li>
                    <?php endforeach?>
                </ul>
            </div>
        </div>


        <h1><?= $page->title() ?></h1>
                <div class="project-info">
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
                    </dl>
                </div>
    </main>

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
