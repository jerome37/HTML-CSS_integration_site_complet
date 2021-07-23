<?php $page="Formation"; ?>
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

        <main class="formation">
            <section class="formation-hero">
                <img src="img/formation_1.jpg" srcset="img/formation_1@2x.jpg 2x" class="formation-hero" alt="" >
                <h1 class="formation-title">Module HTML / CSS</h1>
            </section>

            <section class="formation-desc">
                <div class="container">
                    <p class="formation-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut placerat orci nulla. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl. Tempor id eu nisl nunc mi ipsum faucibus. Fusce id velit ut tortor pretium. Massa ultricies mi quis hendrerit dolor magna eget. Nullam eget felis eget nunc lobortis. Faucibus ornare suspendisse sed nisi. Sagittis eu volutpat odio facilisis mauris sit amet massa. Erat velit scelerisque in dictum non consectetur a erat. Amet nulla facilisi morbi tempus iaculis urna. Egestas
                    </p>
                </div>
            </section>
        </main>

        <?php include('parts/footer.php'); ?>
        
        <script src="js/bundle.min.js"></script>
    </body>
</html>