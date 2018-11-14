<nav>
    <ul id="menu">
        <li><a href="index.php" title="accueil">Accueil</a></li>
        <li><a href="index.php" title="Film"
               class="<?php echo ($_SERVER['REQUEST_URI'] == '/solminihac/index.php' || $_SERVER['REQUEST_URI'] == '/solminihac/') ? 'active' : ''; ?>">Film</a>
        </li>
        <li><a href="director.php" title="Réalisateur"
               class="<?php echo ($_SERVER['REQUEST_URI'] == '/solminihac/director.php') ? 'active' : ''; ?>">Réalisateur</a>
        </li>
        <li><a href="livre_or.php" title="Livre d'or"
               class="<?php echo ($_SERVER['REQUEST_URI'] == '/solminihac/livre_or.php') ? 'active' : ''; ?>">Livre d'or</a></li>
        <li><a href="#" title="contact">Contact</a></li>
    </ul>
</nav>