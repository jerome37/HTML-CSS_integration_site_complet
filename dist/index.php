<?php $page="Accueil"; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.min.css">
        <link rel="stylesheet" href="css/style.min.css">
        <title><?php if (isset($page)) {echo $page.' - ';} ?>DWWM2021-3</title>
    </head>

    <body>
        <?php include('parts/header.php'); ?>


        <main class="site-main">
            <section class="site-hero">
                <img src="img/image_hero.jpg" srcset="img/image_hero@2x.jpg 2x" class="background-hero" alt="photo d'un ordinateur sur une table de travail">
                <div class="container">
                    <div class="site-desc">
                        <h1 class="site-title">Bienvenue sur le site de la promotion DWWM2021-3</h1>
                        <a href="students.php" class="desc-button">Rencontrez nos étudiants</a>
                    </div>
                </div>
            </section>

            <section class="last-news">
                <div class="container">
                    <h2 class="section-title">Les dernières actualités</h2>
                    <div class="articles">
                        <article class="article">
                            <img src="img/actualite_1.jpg" srcset="img/actualite_1@2x.jpg 2x" alt="Image d'illustration du premier article" class="article-img">
                            <div class="article-content">
                                <div class="article-date">
                                    <img src="img/icone_date.svg" alt="Icone d'un calendrier" class="date-icone">
                                    <time datetime="2020-02-12" class="date">12/02/2020</time>
                                </div>
                                <h3 class="article-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h1>
                                <p class="bloc-text">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …
                                </p>
                            </div>
                            <a href="article.php" class="article-link">
                                Lire la suite
                                <img src="img/icone_fleche_droite.svg" alt="Consultez la suite de l'article" class="article-link-icone">
                            </a>
                        </article>
                        <article class="article">
                            <img src="img/actualite_2.jpg" srcset="img/actualite_2@2x.jpg 2x" alt="Image d'illustration du second article" class="article-img">
                            <div class="article-content">
                                <div class="article-date">
                                    <img src="img/icone_date.svg" alt="Icone d'un calendrier" class="date-icone">
                                    <time datetime="2020-02-12" class="date">12/02/2020</time>
                                </div>
                                <h3 class="article-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h1>
                                <p class="bloc-text">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …
                                </p>
                            </div>
                            <a href="article.php" class="article-link">
                                Lire la suite
                                <img src="img/icone_fleche_droite.svg" alt="Consultez la suite de l'article" class="article-link-icone">
                            </a>
                        </article>
                        <article class="article">
                            <img src="img/actualite_3.jpg" srcset="img/actualite_3@2x.jpg 2x" alt="Image d'illustration du troisième article" class="article-img">
                            <div class="article-content">
                                <div class="article-date">
                                    <img src="img/icone_date.svg" alt="Icone d'un calendrier" class="date-icone">
                                    <time datetime="2020-02-12" class="date">12/02/2020</time>
                                </div>
                                <h3 class="article-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h1>
                                <p class="bloc-text">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …
                                </p>
                            </div>
                            <a href="article.php" class="article-link">
                                Lire la suite
                                <img src="img/icone_fleche_droite.svg" alt="Consultez la suite de l'article" class="article-link-icone">
                            </a>
                        </article>
                    </div>
                </div>
            </section>

            <section class="team">
                <div class="container">
                    <h2 class="section-title">Rencontrez les étudiants</h2>
                    <ul class="team-items" role="list">
                        <li class="studient-item">
                            <img src="img/etudiant_1.jpg" srcset="img/etudiant_1@2x.jpg 2x" alt="Portrait de la première étudiante" class="studient-img">
                            <h3 class="studient-name">Francine Auhi</h3>
                            <a href="student_profil.php" class="studient-link">En savoir plus</a>
                        </li>
                        <li class="studient-item">
                            <img src="img/etudiant_2.jpg" srcset="img/etudiant_2@2x.jpg 2x" alt="Portrait du second étudiant" class="studient-img">
                            <h3 class="studient-name">Ali Korn</h3>
                            <a href="student_profil.php" class="studient-link">En savoir plus</a>
                        </li>
                        <li class="studient-item">
                            <img src="img/etudiant_3.jpg" srcset="img/etudiant_3@2x.jpg 2x" alt="Portrait du troisième étudiant" class="studient-img">
                            <h3 class="studient-name">Jean Vascrit</h3>
                            <a href="student_profil.php" class="studient-link">En savoir plus</a>
                        </li>
                        <li class="studient-item">
                            <img src="img/etudiant_4.jpg" srcset="img/etudiant_4@2x.jpg 2x" alt="Portrait de la quatrième étudiante" class="studient-img">
                            <h3 class="studient-name">Lara Velle</h3>
                            <a href="student_profil.php" class="studient-link">En savoir plus</a>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="formations">
                <div class="container">
                    <h2 class="section-title">Les modules de la formation</h2>
                    <div class="articles">
                        <article class="article">
                            <img src="img/formation_1.jpg" srcset="img/formation_1@2x.jpg 2x" alt="Image d'illustration de la première formation" class="article-img">
                            <div class="article-content">
                                <h3 class="article-title">Module HTML/CSS</h1>
                                <p class="bloc-text">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …
                                </p>
                            </div>
                            <a href="formation_desc.php" class="article-link">
                                Lire la suite
                                <img src="img/icone_fleche_droite.svg" alt="Consultez la suite de l'article" class="article-link-icone">
                            </a>
                        </article>
                        <article class="article">
                            <img src="img/formation_2.jpg" srcset="img/formation_2@2x.jpg 2x" alt="Image d'illustration de la seconde formation" class="article-img">
                            <div class="article-content">
                                <h3 class="article-title">Module HTML/CSS</h1>
                                <p class="bloc-text">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …
                                </p>   
                            </div>
                            <a href="formation_desc.php" class="article-link">
                                Lire la suite
                                <img src="img/icone_fleche_droite.svg" alt="Consultez la suite de l'article" class="article-link-icone">
                            </a>
                        </article>
                    </div>
                </div>
            </section>
        </main>


        <?php include('parts/footer.php'); ?>
        
        <script src="js/bundle.min.js"></script>
    </body>

</html>