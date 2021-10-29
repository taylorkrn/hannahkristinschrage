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

    <div class="sideNav" id="mySidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="<?= $page->url() ?>" >All</a><br>
        <?php foreach ($filters as $filter): ?>
            <a href="<?= $page->url() ?>?filter=<?= $filter?>" ><?= $filter?></a><br>
        <?php endforeach ?>
    </div>


    <main class="main" id="mainProjects">

        <?php snippet('projects') ?>

        <!-- Pagination Snippet <?php snippet('pagination') ?> -->

    </main>

<script type="text/javascript">
const mainProjects = document.getElementById("mainProjects");

mainProjects.addEventListener('mousemove', (e) => {
  if (e.pageX <= 100) {
    openNav();
  }
})

/* Set the width of the side navigation to 150px */
function openNav() {
  document.getElementById("mySidenav").style.width = "150px";
  mainProjects.style.marginLeft = "150px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  mainProjects.style.marginLeft = "0px";
}

</script>

<?php snippet('footer') ?>
