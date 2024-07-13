
<ul class="navbar-nav ml-auto">
    <li class="nav-item"><a href="./" class="nav-link">Kezdőlap</a></li>
    <li class="nav-item"><a href="./navlink1.php" class="nav-link">Rólunk</a></li>
    <li class="nav-item"><a href="./navlink2.php" class="nav-link">Gyártás</a></li>
    <li class="nav-item"><a href="./navlink3.php" class="nav-link">Munkák</a></li>
    <!-- nav-1 to section-3 -->
    <li id="nav-1" class="nav-item"><a href="./#section-3" class="nav-link highlighted">Galéria</a></li>

    <li class="nav-item dropdown">
        <a href="#" id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Partnerek
        </a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

        <?php
            foreach ($navItems as $item) {
                echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a><div class=\"dropdown-divider\"></div>";
            }
        ?>

        </div>
    </li>
    <!-- nav-2 to section-4 -->
    <li id="nav-2" class="nav-item"><a href="./#section-4" class="nav-link">Kapcsolat</a></li>
    <li class="nav-item"><a href="./navlink6.php" class="nav-link highlighted">Bármi</a></li>
</ul>