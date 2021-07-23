<?php $page="Article"; ?>
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
        
        <main class="article-main">
            <section class="actualite">
                <div class="container">
                    <article class="article">
                        <img src="img/actualite_3.jpg" srcset="img/actualite_3@2x.jpg 2x" alt="Image d'illustration du troisième article" class="article-img">
                        <div class="article-content">
                            <h3 class="article-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h1>
                            <div class="article-date">
                                <img src="img/icone_date.svg" alt="Icone d'un calendrier" class="date-icone">
                                <time datetime="2020-02-12" class="date">12/02/2020</time>
                            </div>
                            <p class="bloc-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut placerat orci nulla. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl. Tempor id eu nisl nunc mi ipsum faucibus. Fusce id velit ut tortor pretium. Massa ultricies mi quis hendrerit dolor magna eget. Nullam eget felis eget nunc lobortis. Faucibus ornare suspendisse sed nisi. Sagittis eu volutpat odio facilisis mauris sit amet massa. Erat velit scelerisque in dictum non consectetur a erat. Amet nulla facilisi morbi tempus iaculis urna. Egestas purus viverra accumsan in nisl. Feugiat in ante metus dictum at tempor commodo. Convallis tellus id interdum velit laoreet. Proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Viverra aliquet eget sit amet tellus cras adipiscing enim eu. Ut faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Dui faucibus in ornare quam. In iaculis nunc sed augue lacus viverra vitae congue. Vitae tempus quam pellentesque nec nam aliquam sem et. Ut morbi tincidunt augue interdum. Sem fringilla ut morbi tincidunt augue. Morbi enim nunc faucibus a pellentesque sit amet porttitor eget. In est ante in nibh mauris. Nam aliquam sem et tortor consequat id porta nibh. Diam quis enim lobortis scelerisque fermentum dui faucibus. Non curabitur gravida arcu ac. Magna fringilla urna porttitor rhoncus dolor. Aenean et tortor at risus viverra adipiscing. Dignissim sodales ut eu sem. Quam quisque id diam vel quam elementum pulvinar etiam non. Eleifend quam adipiscing vitae proin sagittis. Enim facilisis gravida neque convallis a cras semper. Risus commodo viverra maecenas accumsan. Sit amet porttitor eget dolor morbi non arcu risus. Vitae et leo duis ut diam quam. Aliquam faucibus purus in massa tempor. Quisque egestas diam in arcu cursus. Nibh sit amet commodo nulla facilisi
                            </p>
                        </div>
                    </article>
                </div>
            </section>
        </main>

        <?php include('parts/footer.php'); ?>
        
        <script src="js/bundle.min.js"></script>
    </body>
</html>