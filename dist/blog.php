<?php $page="Blog"; ?>
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

        <main class="blog-section">
            <section class="blog">
                <div class="container">
                    <h2 class="section-title">Les actualités</h2>
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
        </main>

        <?php include('parts/footer.php'); ?>
        
        <script src="js/bundle.min.js"></script>
    </body>
</html>