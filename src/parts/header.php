<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DWWM2021-3</title>
    </head>

    <body>
        <header class="site-header">
            <div class="container">
                <div class="site-logo">DWWM</div>
                <nav class="site-menu">
                    <button class="toggle-menu" aria-expanded="false" aria-controls="menu">Menu</button>
                    <ul id="menu" class="menu" role="list" hidden>
                        <li class="menu-items">
                            <a href="index.php" class="menu-link <?php if(isset($page) && $page==="Accueil"){echo "active";} ?>">accueil</a>
                        </li>
                        <li class="menu-items">
                            <a href="formations.php" class="menu-link <?php if(isset($page) && $page==="Formations"){echo "active";} ?>">la formation</a>
                        </li>
                        <li class="menu-items">
                            <a href="students.php" class="menu-link <?php if(isset($page) && $page==="Promotion"){echo "active";} ?>">les étudiants</a>
                        </li>
                        <li class="menu-items">
                            <a href="blog.php" class="menu-link <?php if(isset($page) && $page==="Blog"){echo "active";} ?>">actualités</a>
                        </li>
                        <li class="menu-items">
                            <a href="contact.php" class="menu-link <?php if(isset($page) && $page==="Contact"){echo "active";} ?>">nous contacter</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

    </body>
</html>