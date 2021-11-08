<?php snippet('header') ?>

    <main  style='display: flex'>
        <div class="sideNav" id="mySidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="<?= $page->url() ?>" >All</a><br>
            <?php foreach ($filters as $filter): ?>
                <a href="<?= $page->url() ?>?filter=<?= $filter?>" ><?= $filter?></a><br>
            <?php endforeach ?>
        </div>

        <div id='mainProjects'>

            <?php snippet('projects') ?>

        </div>
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
  // mainProjects.style.marginLeft = "170px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  // mainProjects.style.marginLeft = "20px";
}

const sideNav = document.querySelector(".sideNav");

window.addEventListener('scroll', () => {
    if (document.documentElement.clientWidth > 800) {
        sideNav.style.top = "150px"
        return
    };
    if (document.documentElement.scrollTop > 200 || document.body.scrollTop > 200) {
        sideNav.style.top = "0";
    } else {
        sideNav.style.top = `${200 - document.documentElement.scrollTop}px`
    }
})

</script>

<?php snippet('footer') ?>
