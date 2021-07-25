<?php $page="Etudiant"; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.min.css">
        <title><?php if (isset($page)) {echo $page.' - ';} ?>DWWM2021-3</title>
    </head>

    <body>
        <?php include('parts/header.php'); ?>

        <main class="studient-main">
            <section class="section-studient">
                <div class="container">
                    <img src="img/etudiant_1.jpg" srcset="img/etudiant_1@2x.jpg 2x" alt="Portrait de l'étudiante Francine Auhi" class="studient-img">
                    <h1 class="studient-name">Francine Auhi</h1>
                    <div class="studient-profil">
                        <div class="studient-item">
                            <h2 class="item-title">Son film</h2>
                            <p class="item-text">Lorem ipsum dolor sit</p>
                        </div>
                        <div class="studient-item">
                            <h2 class="item-title">Sa série</h2>
                            <p class="item-text">Lorem ipsum dolor sit</p>
                        </div>
                        <div class="studient-item">
                            <h2 class="item-title">Son jeu vidéo</h2>
                            <p class="item-text">Lorem ipsum dolor sit</p>
                        </div>
                        <div class="studient-item">
                            <h2 class="item-title">Son héros/héroïne</h2>
                            <p class="item-text">Lorem ipsum dolor sit</p>
                        </div>
                        <div class="studient-item">
                            <h2 class="item-title">Son livre</h2>
                            <p class="item-text">Lorem ipsum dolor sit</p>
                        </div>
                        <div class="studient-item">
                            <h2 class="item-title">Sa chanson</h2>
                            <p class="item-text">Lorem ipsum dolor sit</p>
                        </div>
                        <div class="studient-item">
                            <h2 class="item-title">Son application</h2>
                            <p class="item-text">Lorem ipsum dolor sit</p>
                        </div>
                        <div class="studient-item">
                            <h2 class="item-title">Son site web</h2>
                            <p class="item-text">Lorem ipsum dolor sit</p>
                        </div>
                    </div>
                    <div class="studient-abstract">
                        <h2 class="abstract-title">En deux mots</h2>
                        <p class="abstract-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet.
                        </p>
                    </div>
                </div>
            </section>
        </main>

        <?php include('parts/footer.php'); ?>
        
        <script src="js/bundle.min.js"></script>
    </body>
</html>